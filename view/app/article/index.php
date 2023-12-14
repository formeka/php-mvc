<section>
<?php foreach($articles as $article): ?>
<article>
<h3><?=$article->title?></h3>

<p>
    <strong>Publiée par :</strong> <?=$user->findById($article->author, 'id')->firstname . ' ' . $user->findById($article->author, 'id')->lastname?> le <?=$article->modifiedAt?>
</p>
</article>

<?php endforeach; ?>
</section>
