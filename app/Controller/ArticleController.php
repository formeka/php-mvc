<?php

namespace App\Controller;

use App\Weblitzer\Controller;
use App\Model\PostModel;
use App\Model\UserModel;

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

    public function show($id)
    {
        $article = PostModel::findById($id);
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
