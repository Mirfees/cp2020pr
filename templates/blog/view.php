<?php
/**

 * @var \MirfeesFrameWork\Models\Articles\Article[] $articles
 * @var \MirfeesFrameWork\Models\Users\User $user
 */
?>

<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../head.php'; ?>
<body>
<main>
    <?php include __DIR__ . '/../header.php'; ?>

    <section class="blog">
        <div class="blog__container">
            <div class="container">
                <div class="blog__wrapper">
                    <?php foreach ($articles as $article): ?>
                    <div class="blog-article">
                        <div class="blog-article__wrapper">
                            <div class="blog-article__name">Название: <?= $article->getName() ?></div>
                            <div class="blog-article__date">Дата: <?= $article->getCreatedAt() ?></div>
                            <div class="blog-article__short-content"><?= substr($article->getText(), 0, 200) ?></div>
                            <a href="/articles/<?= $article->getId() ?>" class="blog-article__link button">Читать</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/../footer.php'; ?>
<?php include __DIR__ . '/../scripts.php'; ?>
</body>
</html>
