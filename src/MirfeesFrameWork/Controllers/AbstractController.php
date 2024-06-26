<?php

namespace MirfeesFrameWork\Controllers;

use MirfeesFrameWork\Models\Users\User;
use MirfeesFrameWork\Models\Users\UsersAuthService;
use MirfeesFrameWork\View\View;

abstract class AbstractController
{
    protected $view;

    protected $user;

    public function __construct()
    {
        $this->user = UsersAuthService::getUserByToken();
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->view->setVars('user', $this->user);
    }
}