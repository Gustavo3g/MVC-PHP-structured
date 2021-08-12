<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;
class Home extends Page{

    /**
    * Método resposavel por retornar o conteudo da home
     * @return string
    */

    public static function getHome(){
        $varOrganization = new Organization();
        $content =  View::render('pages/home',[
            'name' => $varOrganization->name,
            'description' => $varOrganization->description,

        ]);

        return parent::getPage('Gustavo Home0', $content);
    }

}