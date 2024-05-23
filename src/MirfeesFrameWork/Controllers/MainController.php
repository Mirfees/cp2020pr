<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Exceptions\ForbiddenException;
use MirfeesFrameWork\Exceptions\UnauthorizedException;
use MirfeesFrameWork\Models\Articles\Article;
use MirfeesFrameWork\View\View;
use MirfeesFrameWork\Models\Users\UsersAuthService;

class MainController extends AbstractController
{
    public function main()
    {
        $articles = Article::findAll();
        $title = 'Главная страница';
        $this->view->renderHtml('main/main.php', ['articles' => $articles, 'title' => $title, 'user' => UsersAuthService::getUserByToken()]);
    }
}
