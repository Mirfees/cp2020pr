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
        $title = 'Главная страница';
        $this->view->renderHtml('main/main.php', ['title' => $title, 'user' => UsersAuthService::getUserByToken()]);
    }

    public function blog()
    {
        $title = 'Блог';
        $articles = Article::findAll();
        $this->view->renderHtml('blog/view.php', [
            'title' => $title,
            'articles' => $articles
        ]);
    }
}
