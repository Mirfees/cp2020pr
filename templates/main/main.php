<?php
/**
 * @var \MirfeesFrameWork\Models\Users\User $user
 */
?>
<!doctype html>
<html lang="en">
    <?php include __DIR__ . '/../head.php'; ?>
        <body>
            <main>
                <div class="main-menu">
                    <div class="main-menu__container">
                        <div class="container">
                            <div class="main-menu__wrapper">
                                <div class="main-menu__title title-h1">CYBERPUNK2020 PLAYROOM</div>
                                <?php if(empty($user)): ?>
                                <div class="main-menu__content">
                                    <a href="/users/register" class="main-menu__button button">Зарегистрироваться</a>
                                    <a href="/users/login" class="main-menu__button button">Войти</a>
                                    <a href="/articles" class="main-menu__button button">Блог</a>
                                </div>
                                <?php endif; ?>

                                <?php if($user): ?>
                                <div class="main-menu__content">
                                    <a href="/characters/add" class="main-menu__button button">Создать персонажа</a>
                                    <a href="/users/<?= $user->getId() ?>/account" class="main-menu__button button">Аккаунт</a>
                                    <a href="/articles" class="main-menu__button button">Блог</a>
                                    <a href="/users/logout">Выйти</a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        <?php include __DIR__ . '/../footer.php'; ?>
        <?php include __DIR__ . '/../scripts.php'; ?>
        </body>
</html>
