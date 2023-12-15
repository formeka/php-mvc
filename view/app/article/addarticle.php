<section>
<h3>Ajout d'un article</h3>
<form method="POST">
    <?= $formAdd->label('titre') ?>
    <?= $formAdd->input('titre') ?>
    <?= $formAdd->error('titre') ?>

    <?= $formAdd->label('contenu') ?>
    <?= $formAdd->textarea('contenu') ?>
    <?= $formAdd->error('contenu') ?>

    <?= $formAdd->submit('','Ajouter article') ?> 
</form>
</section>

