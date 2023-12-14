<section>
<?php foreach($articles as $article): ?>
<article>
<h3><a href="<?= $view->path('article', [$article->id]); ?>"><?=$article->title?></a></h3>

<p>
    <strong>Publiée par :</strong> <?=$user->findById($article->author)->firstname . ' ' . $user->findById($article->author)->lastname?> le <?=$article->modifiedAt?>
</p>
</article>

<?php endforeach; ?>
</section>
