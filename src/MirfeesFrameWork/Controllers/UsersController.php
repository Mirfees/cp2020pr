<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Exceptions\InvalidArgumentException;
use MirfeesFrameWork\Exceptions\NotFoundException;
use MirfeesFrameWork\Exceptions\UnauthorizedException;
use MirfeesFrameWork\Exceptions\UserActivationException;
use MirfeesFrameWork\Models\Articles\Article;
use MirfeesFrameWork\Models\Characters\Character;
use MirfeesFrameWork\Models\Users\EmailSender;
use MirfeesFrameWork\Models\Users\UserActivationService;
use MirfeesFrameWork\Models\Users\UsersAuthService;
use MirfeesFrameWork\View\View;
use MirfeesFrameWork\Models\Users\User;

class UsersController extends AbstractController
{
    public function signUp()
    {
        if (!empty($_POST)) {
            try {
                $user = User::signUp($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('users/signUp.php', ['error' => $e->getMessage()]);
                return;
            }
        }

        if($user instanceof User) {
            $code = UserActivationService::createActivationCode($user);

            EmailSender::send($user, 'Активация', 'userActivation.php', [
                'userId' => $user->getId(),
                'code' => $code
            ]);
            $this->view->renderHtml('users/signUpSuccessful.php');
            return;
        }

        $this->view->renderHtml('users/signUp.php');
    }

    public function activate(int $userId, string $activationCode)
    {
        try {
            $user = User::getById($userId);

            if ($user === null) {
                throw new UserActivationException('Пользователь не найден');
            }

            if ($user->isConfirmed()) {
                throw new UserActivationException('Пользователь уже активирован');
            }

            $isCodeValid = UserActivationService::checkActivationCode($user, $activationCode);

            if (!$isCodeValid) {
                throw new UserActivationException('Неверный код активации');
            }

            if ($isCodeValid) {
                $user->activate();
                echo 'OK!';

                UserActivationService::deleteActivationCode($user);
            }
        } catch(UserActivationException $e) {
            $this->view->renderHtml('error/500.php', ['error' => $e->getMessage()]);
            UserActivationService::deleteActivationCode($user);
            return;
        }

    }

    public function login() {
        if(!empty($_POST)) {
            try {
                $user = User::login($_POST);
                UsersAuthService::createToken($user);
                header('Location: /');
                exit();
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('users/login.php', ['error' => $e->getMessage()]);
                return;
            }
        }
      $this->view->renderHtml('users/login.php');
    }

    public function logout()
    {
        User::logout();
        header('Location: /');
        exit();
    }

    public function viewAccount(int $id)
    {

        if($this->user === null) {
            throw new UnauthorizedException('Войдите в аккаунт');
        }

        if($this->user->getId() != $id) {
            throw new UnauthorizedException('Войдите в этот аккаунт');
        }

        $articles = Article::findAllByColumn('author_id', $this->user->getId());
        $characters = Character::findAllByColumn('user_id', $this->user->getId());

        $this->view->renderHtml('users/account.php', [
            'user' => $this->user,
            'articles' => $articles,
            'characters' => $characters,
            'title' => 'Аккаунт',
        ]);
    }
}