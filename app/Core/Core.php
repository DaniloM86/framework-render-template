<?php
/**
 * ARQUIVO RESPONSÁVEL POR VERIFICAR, VALIDAR E RENDERIZAR ARQUIVOS E VARIÁVEIS DA VIEW(HTML)
 */
namespace App\Core;

class Core{
    private static function getContentCore($core)
    {
        $file = __DIR__.'/../../public/view/'.$core.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    public static function render($core, $vars = [])
    {
        $contentView = self::getContentCore($core); 
            $keys = array_keys($vars);
            $keys = array_map(function($item){
            return '{{'.$item.'}}';
       },$keys);
        return str_replace($keys, array_values($vars),$contentView);
    }
}