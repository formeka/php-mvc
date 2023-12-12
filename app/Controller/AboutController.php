<?php

namespace App\Controller;

use App\Weblitzer\Controller;

/**
 *
 */
class AboutController extends Controller
{

    public function index()
    {
        $this->render('app.default.about');
    }

    /**
     *
     */
    public function Page404()
    {
        $this->render('app.default.404');
    }

}
