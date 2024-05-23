<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Exceptions\ForbiddenException;
use MirfeesFrameWork\Exceptions\InvalidArgumentException;
use MirfeesFrameWork\Exceptions\NotFoundException;
use MirfeesFrameWork\Exceptions\UnauthorizedException;
use MirfeesFrameWork\Models\Articles\Article;
use MirfeesFrameWork\View\View;
use MirfeesFrameWork\Models\Users\User;
use MirfeesFrameWork\Models\Comments\Comment;

class ArticlesController extends AbstractController
{
    public function view(int $articleId)
    {
        $article = Article::getById($articleId);
        $comments = Comment::getAllComments($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        $this->view->renderHtml('articles/view.php', [
            'article' => $article,
            'comments' => $comments,
        ]);
    }

    public function delete(int $articleId)
    {
        if ($this->user === null) {
            throw new UnauthorizedException('Необходимо зарегистрироваться');
        }

        if ($this->user->getRole() !== 'admin') {
            throw new ForbiddenException('Недостаточно прав!');
        }

        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException('Статья не найдена');
        }

        $article->delete();

        header('Location /', true, 200);
        exit();
    }

    public function add(): void
    {
        if ($this->user === null) {
            throw new UnauthorizedException('Необходимо зарегистрироваться');
        }

        if ($this->user->getRole() !== 'admin') {
            throw new ForbiddenException('Недостаточно прав!');
        }

        if (!empty($_POST)) {
            try {
                $article = Article::createFromArray($_POST, $this->user);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('adminer/articles/add.php', ['error' => $e->getMessage()]);
                return;
            }

            header('Location: /articles/' . $article->getId(), true, 302);
            exit();
        }
        $this->view->renderHtml('adminer/articles/add.php');
    }

    public function edit(int $articleId): void
    {
        $article = Article::getById($articleId);

        if ($article === null) {
            throw new NotFoundException();
        }

        if ($this->user === null) {
            throw new UnauthorizedException('Необходимо зарегистрироваться');
        }

        if ($this->user->getRole() !== 'admin') {
            throw new ForbiddenException('Недостаточно прав!');
        }

        if (!empty($_POST)) {
            try {
                $article->updateFromArray($_POST);
            } catch (InvalidArgumentException $e) {
                $this->view->renderHtml('adminer/articles/edit.php', ['error' => $e->getMessage(), 'article' => $article]);
            }

            header('Location: /articles/' . $article->getId(), true, 302);
            exit();
        }
        $this->view->renderHtml('adminer/articles/edit.php', ['article' => $article]);
    }
}