<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles.css">
    <title>Document</title>
</head>
<body>
<main>
    <?php include __DIR__ . '/../header.php'; ?>
    <div class="main-menu">
        <div class="main-menu__container">
            <div class="container">
                <div class="main-menu__wrapper">
                    <div class="main-menu__title title-h1">CYBERPUNK2020 PLAYROOM</div>
                    <?php if(!empty($error)): ?>
                        <div style="background-color: red;padding: 5px;margin: 15px; color: #fff"><?= $error ?></div>
                    <?php endif; ?>
                    <form action="/users/login" class="main-menu__content" method="post">
                        <div class="main-menu__row">
                            <label>Email</label>
                            <input type="text" name="email" value="<?= $_POST['email'] ?? '' ?>">
                        </div>
                        <div class="main-menu__row">
                            <label>Пароль</label>
                            <input type="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
                        </div>
                        <div class="main-menu__row">
                            <input class="button" type="submit" value="Войти">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="/scripts.js"></script>
</body>
</html>