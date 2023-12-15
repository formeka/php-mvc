<section>
<h3>Modifier cet article</h3>
<form method="POST">
    <?= $formAddEdit->label('titre') ?>
    <?= $formAddEdit->input('titre','text',$articleEdit->title) ?>
    <?= $formAddEdit->error('titre') ?>

    <?= $formAddEdit->label('contenu') ?>
    <?= $formAddEdit->textarea('contenu',$articleEdit->content) ?>
    <?= $formAddEdit->error('contenu') ?>

    <?= $formAddEdit->submit('submitted','Modifier article') ?> 
</form>
</section>

