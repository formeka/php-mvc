<section class="card">
    <article>
        <h3><?= $article->title ?></h3>
        <p><?= $article->content ?></p>
        <p class="margin-top-l">
            <strong>Publiée par :</strong> <?= $user->findById($article->author)->firstname . ' ' . $user->findById($article->author)->lastname ?> le <?= $article->modifiedAt ?>
        </p>
        <p>
            <a 
            href="<?= $view->path('delete', [$article->id]); ?>" 
            class="btn btn-alert margin-y-xxl">
                Supprimer
            </a>
            <a 
            href="<?= $view->path('edit', [$article->id]); ?>" 
            class="btn margin-y-xxl">
                Edit
            </a>
        </p>
    </article>
</section>