<?php

namespace App\Controller\Pages;
use App\Core\Core;
use App\Model\Entity\DataBase;

class HomeController extends PageController{
    public static function getHome()
    {
        $model = new DataBase();
        $content = Core::render('pages/home',[
            'name' => $model->name,
            'description' => $model->description,
            'site' => $model->site
        ]);
        return parent::getPage('Escola são pedro', $content);
        }
}