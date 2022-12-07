<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

    /**
    * Método responsavel por retornar o conteudo(view) da página home
    * @return string
    */
    public static function getHome(){
        //ORGANIZAÇÃO
        $obOrganizacao = new Organization;
        
        //VIEW DA HOME
        $content =  View::render('pages/home',[
            'name'=>$obOrganizacao->name,
            'description'=>$obOrganizacao->description,
            'site'=>$obOrganizacao->site
        ]);

        //RETORNA A VIEW DA PAGE GENERICA
        return parent::getPage('Sitema - Home', $content);
    }

}