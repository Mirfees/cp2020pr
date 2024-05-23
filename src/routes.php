<?php
return [
    '~^characters/(\d+)$~' => [\MirfeesFrameWork\Controllers\CharactersController::class, 'view'],
    '~^articles/(\d+)$~' => [\MirfeesFrameWork\Controllers\ArticlesController::class, 'view'],
    '~^users/register$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'signUp'],
    '~^users/(\d+)/activate/(.+)$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'activate'],
    '~^articles/(\d+)/comments$~' => [\MirfeesFrameWork\Controllers\CommentsController::class, 'add'],
    '~^comments/(\d+)/edit$~' => [\MirfeesFrameWork\Controllers\CommentsController::class, 'edit'],
    '~^comments/(\d+)/delete~' => [\MirfeesFrameWork\Controllers\CommentsController::class, 'delete'],
    '~^users/login$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'login'],
    '~^users/logout$~' => [\MirfeesFrameWork\Controllers\UsersController::class, 'logout'],
    '~^$~' => [\MirfeesFrameWork\Controllers\MainController::class, 'main'],
];