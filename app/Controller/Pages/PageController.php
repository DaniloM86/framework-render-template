<?php
/**
 * ARQUIVO RESPONSÁVEL POR DEIXAR FIXO O CABEÇALHO(HEADER) E O RODA PÉ(FOOTER) DA PAGINA
 */
namespace App\Controller\Pages;
use App\Core\Core;

class PageController{
    private static function getHeader()
    {
        return Core::render('pages/header');
    }
    private static function getFooter()
    {
        return Core::render('pages/footer');
    }
    public static function getPage($title, $content)
    {
        return Core::render('pages/page',[
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}