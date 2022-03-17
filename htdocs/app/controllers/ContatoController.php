<?php
namespace app\controllers;

use app\core\Controller;
use app\models\service\Service;
use app\core\Flash;
use app\models\service\ContatoService;

class ContatoController extends Controller{
   private $tabela = "contato";
   private $campo  = "id_contato";
   
    public function index(){
       $dados["lista"] = Service::lista($this->tabela); 
       $dados["view"]  = "Contato/Index";
       $this->load("template", $dados);
    }
    
    public function create(){
        error_reporting(0);
        $dados["contato"] = Flash::getForm();
        $dados["view"] = "Contato/Create";
        $this->load("template", $dados);
    }
    
    public function edit($id){
        $contato = Service::get($this->tabela, $this->campo, $id);       
        if(!$contato){
            $this->redirect(URL_BASE."contato");
        }        
        $dados["contato"]   = $contato;
        $dados["view"]      = "Contato/Create";
        $this->load("template", $dados);
    }
    
    public function salvar(){
        error_reporting(0);
        //$empresa = $_SESSION[SESSION_LOGIN]->id_usuario;
        $contato = new \stdClass();
        $contato->id_contato        = $_POST["id_contato"];
        //$contato->id_empresa        = $empresa;
        $contato->nome              = $_POST['nome'];
        $contato->eh_cliente 	    = $_POST['eh_cliente'];
        $contato->eh_fornecedor     = $_POST['eh_fornecedor'];
        $contato->eh_transportador  = $_POST['eh_transportador'];
        $contato->cpf               = ($_POST['cpf']) ? tira_mascara($_POST['cpf']) : null;
        $contato->cnpj              = ($_POST['cnpj']) ? tira_mascara($_POST['cnpj']) : null;
        $contato->ativo 	    = $_POST['ativo'];
        $contato->fone              = ($_POST['fone']) ? tira_mascara($_POST['fone']) : null;
        $contato->celular 	    = ($_POST['celular']) ? tira_mascara($_POST['celular']) : null;
        $contato->email 	    = $_POST['email'];
        $contato->cep               = ($_POST['cep']) ? tira_mascara($_POST['cep']) : null;
        $contato->logradouro 	    = $_POST['logradouro'];
        $contato->numero 	    = $_POST['numero'];
        $contato->uf                = $_POST['uf'];
        $contato->cidade 	    = $_POST['cidade'];
        $contato->complemento 	    = $_POST['complemento'];
        $contato->bairro 	    = $_POST['bairro'];
        
        Flash::setForm($contato);
        if(ContatoService::salvar($contato, $this->campo, $this->tabela)){
            $this->redirect(URL_BASE."contato");
        }else{
            if(!$contato->id_contato){
                $this->redirect(URL_BASE."contato/create");
            }else{
                $this->redirect(URL_BASE."contato/edit/".$contato->id_contato);
            }
        }
    }
    
    public function excluir($id){
        Service::excluir($this->tabela, $this->campo, $id);
        $this->redirect(URL_BASE."contato");
    }
}

