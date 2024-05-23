<?php
return [
    '~^characters/(\d+)$~' => [\MirfeesFrameWork\Controllers\CharactersController::class, 'view'],
    '~^characters/(\d+)/delete$~' => [\MirfeesFrameWork\Controllers\CharactersController::class, 'delete'],
    '~^characters/add$~' => [\MirfeesFrameWork\Controllers\CharactersController::class, 'add'],

    '~^articles/(\d+)$~' => [\MirfeesFrameWork\Controllers\ArticlesController::class, 'view'],
    '~^articles/(\d+)/comments$~' => [\MirfeesFrameWork\Controllers\CommentsController::class, 'add'],

    '~^comments/(\d+)/edit$~' => [\MirfeesFrameWork\Controllers\CommentsController::class, 'edit'],
    '~^comments/(\d+)/delete~' => [\MirfeesFrameWork\Controllers\CommentsController::class, 'delete'],

    '~^users/register$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'signUp'],
    '~^users/(\d+)/activate/(.+)$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'activate'],
    '~^users/login$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'login'],
    '~^users/logout$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'logout'],

    '~^$~' => [\MirfeesFrameWork\Controllers\MainController::class, 'main'],
];