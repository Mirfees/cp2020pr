<?php

/**
 * @var \MirfeesFrameWork\Models\Users\User $user
 * @var \MirfeesFrameWork\Models\Characters\Character[] $characters
 * @var \MirfeesFrameWork\Models\Articles\Article[] $articles
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles.css">
    <title><?php echo $title ?></title>
</head>
<body>
<main>

    <?php include __DIR__ . '/../header.php' ?>

    <section class="account">
        <div class="account__container">
            <div class="container">
                <div class="account__wrapper">
                    <div class="account__tabs">
                        <a href="javascript:;" class="account__tab button active" data-tab-id="tab_1">Персонажи</a>
                        <a href="javascript:;" class="account__tab button" data-tab-id="tab_2">Статьи</a>
                        <a href="javascript:;" class="account__tab button" data-tab-id="tab_3">Об аккаунте</a>
                    </div>

                    <div class="account__content characters active" id="tab_1">
                        <div class="account-characters">
                            <div class="account-characters__wrapper">
                                <?php foreach ($characters as $character): ?>
                                    <div class="account-characters__item">
                                        <div class="account-characters__image">
                                            <?php if(!empty($character->getImg())): ?>
                                                <img src="<?= $character->getImg() ?>" alt="">
                                            <?php else: ?>
                                                <img src="/noimage.jpg" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="account-characters__name"><?= $character->getName() ?></div>
                                        <div class="account-characters__role"><?= $character->getRole() ?></div>
                                        <a href="/characters/<?= $character->getId() ?>" class="account-characters__link button">Просмотр персонажа</a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="account__content articles" id="tab_2">
                        <div class="account-articles">
                            <div class="account-articles__wrapper">
                                <?php foreach ($articles as $article): ?>
                                <div class="account-articles__item">
                                    <div class="account-articles__name"><?= $article->getName() ?></div>
                                    <div class="account-articles__date"><?= $article->getCreatedAt() ?></div>
                                    <a href="/articles/<?= $article->getId() ?>" class="account-articles__link button">Просмотр статьи</a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="account__content about" id="tab_3">
                        <div class="account-about">
                            <div class="account-about__wrapper">
                                <div class="account-about__name">Никнейм: <?= $user->getNickname() ?></div>
                                <div class="account-about__role">Роль: <?= $user->getRole() ?></div>
                                <div class="account-about__created-at">Дата: <?= $user->getCreatedAt() ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<script src="/scripts.js"></script>
</body>
</html>

