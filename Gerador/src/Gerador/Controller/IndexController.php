<?php

namespace Gerador\Controller;

use Exception;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        //      $nomeTabela = 'nome da entidade';
        $nomeModulo = 'Application';
        $nomeTabela = 'pessoa';
        $geradoDeCodigo = new Gerador($nomeTabela, $nomeModulo);
        $geradoDeCodigo->gerarCRUD();
        return new ViewModel();
    }

}
