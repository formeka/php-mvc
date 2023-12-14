<section>
<p class="text-center">Actuellement <strong><?=$nbArticles?></strong> article(s) dans notre blog.</p>
<?php foreach($articles as $article): ?>
<article>
<h3><a href="<?= $view->path('article', [$article->id]); ?>"><?=$article->title?></a></h3>
</article>

<?php endforeach; ?>
</section>
