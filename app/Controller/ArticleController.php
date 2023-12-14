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
        $user = new UserModel;

        $this->render('app.article.index',
        [
            'articles' => $articles,
            'user' => $user,
        ]);
    }

}
