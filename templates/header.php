<header class="header">
    <div class="header__container">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="/">
                        <img src="/img/logo.png" alt="">
                    </a>
                </div>
                <div class="header-menu">
                    <div class="header-menu__wrapper">
                        <div class="header-menu__item">
                            <a href="/articles" class="header-menu__link button">Блог</a>
                        </div>
                        <?php if(!empty($user)): ?>
                        <div class="header-menu__item">
                            <a href="/users/<?php echo $user->getId()?>/account" class="header-menu__link button">Аккаунт</a>
                        </div>
                        <?php endif; ?>
                        <div class="header-menu__item">
                            <a href="/characters/add" class="header-menu__link button">Создать персонажа</a>
                        </div>
                    </div>
                </div>

                <div class="header__logout">
                    <a href="/users/logout" class="header__link">Выйти</a>
                </div>
            </div>
        </div>
    </div>
</header>