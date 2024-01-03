<section class="card">
    <article>
        <h3><?= $article->title ?></h3>
        <p><?= $article->content ?></p>
        <p class="margin-top-l">
            <strong>Publiée par :</strong> <?= $user->findById($article->author)->firstname . ' ' . $user->findById($article->author)->lastname ?> le <?= $article->modifiedAt ?>
        </p>
        <p class="margin-y-xl">
            <a 
            href="<?= $view->path('delete', [$article->id]); ?>" 
            class="btn btn-alert margin-y-xxl" 
            onclick="return confirm('Etes vous certain de vouloir supprimer cet article !?')">
                Supprimer
            </a>
            <a 
            href="<?= $view->path('edit', [$article->id]); ?>" 
            class="btn btn-primary margin-y-xxl">
                Edit
            </a>
        </p>
    </article>
</section>