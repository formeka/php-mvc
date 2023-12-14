<section class="card">
    <h3><?= $article->title ?></h3>
    <p><?= $article->content ?></p>
    <p>
        <strong>Publiée par :</strong> <?= $user->findById($article->author)->firstname . ' ' . $user->findById($article->author)->lastname ?> le <?= $article->modifiedAt ?>
    </p>
</section>