<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;
use App\Service\Form;
use App\Service\Validation;

/**
 *
 */
class ArticleController extends Controller
{

    public function index()
    {

        $articles = PostModel::all();
        $nbArticles = PostModel::count();

        $this->render('app.article.index',
        [
            'articles' => $articles,
            'nbArticles' =>  $nbArticles
        ]);
    }

    public function add()
    {
        $errors = [];

        // Test validation formulaire
        if (!empty($_POST['submitted'])):
            $postArticle = $this->cleanXss($_POST);

            $validerArticle = new Validation;

            $errors['titre'] = $validerArticle->textValid($postArticle['titre'],'titre',5,100);
            $errors['contenu'] = $validerArticle->textValid($postArticle['contenu'],'contenu',10,2000);

            if($validerArticle->IsValid($errors)):
                //Insertion des données du formulaire en base de donnée
                PostModel::insert($postArticle);
                $this->redirect('articles');
            endif;

        endif;

        $formAdd = new Form($errors);
        $users = UserModel::all();

        $this->render('app.article.addarticle',
        [
            'formAdd' => $formAdd,
            'users' => $users
        ]);
    }

    public function show($id)
    {
        $article = $this->isArticleExist($id);
        $user = new UserModel;

        $this->render('app.article.show',
        [
            'article' => $article,
            'user' => $user,
        ]);
    }

    public function delete($id)
    {
       $articleDelete = $this->isArticleExist($id);
       PostModel::delete($id);
       $this->redirect('articles');
    }

    public function isArticleExist($id)
    {
        $article = PostModel::findById($id);

        // if (empty($article)):
        //     $this->Abort404();
        // endif;

        // return $article;

        return (empty($article)) ? $this->Abort404() : $article;
    }

}
