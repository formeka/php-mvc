<?php
//$this->dbug($articles);

foreach($articles as $article):
?>

<p><?php
    $this->dbug($user->findById($article->author, 'id')->firstname);
    $this->dbug($user->findById($article->author, 'id')->lasttname);
?></p>

<?php endforeach; ?>

