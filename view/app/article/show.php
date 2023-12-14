<section class="card">
    <article>
        <h3><?= $article->title ?></h3>
        <p><?= $article->content ?></p>
        <p class="margin-top-l">
            <strong>Publiée par :</strong> <?= $user->findById($article->author)->firstname . ' ' . $user->findById($article->author)->lastname ?> le <?= $article->modifiedAt ?>
        </p>
    </article>
</section>