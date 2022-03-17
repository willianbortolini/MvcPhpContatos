<?php
namespace app\models\validacao;

use app\core\Validacao;
use \app\models\service\Service;

class ContatoValidacao{
    public static function salvar($contato){
        $validacao = new Validacao();
        
        $validacao->setData("nome", $contato->nome);
        $validacao->setData("celular", $contato->celular);
        $validacao->setData("email", $contato->email);
        $validacao->setData("cep", $contato->cep);
        $validacao->setData("logradouro", $contato->logradouro);
        $validacao->setData("numero", $contato->numero);
        $validacao->setData("uf", $contato->uf);
        $validacao->setData("cidade", $contato->cidade);
        $validacao->setData("bairro", $contato->bairro);
        $validacao->setData("cpf", $contato->cpf);
        $validacao->setData("cnpj", $contato->cnpj);
        $validacao->setData("eh_cliente", $contato->eh_cliente);
        

        //fazendo a validação
        $validacao->getData("nome")->isVazio()->isMinimo(5);
        $validacao->getData("celular")->isVazio();
        $validacao->getData("email")->isVazio()->isEmail();
        $validacao->getData("cep")->isVazio();
        $validacao->getData("logradouro")->isVazio();
        $validacao->getData("numero")->isVazio();
        $validacao->getData("uf")->isVazio();
        $validacao->getData("cidade")->isVazio();
        $validacao->getData("bairro")->isVazio();
        
        if(!$contato->eh_cliente && !$contato->eh_fornecedor && !$contato->eh_transportador ){
            $validacao->getData("eh_cliente")->isVazio("Você precisa definir o tipo de contato: Cliente, Fornecedor ou Transportadora");
        }
        
        if($contato->cpf){
            $validacao->getData("cpf")->isCPF();
        }
        
        if($contato->cnpj){
            $validacao->getData("cnpj")->isCNPJ();
        }
        
        if($contato->email){
            $tem = Service::get("contato", "email", $contato->email);
            if($tem && $tem->id_contato != $contato->id_contato){
                $validacao->getData("email")->isUnico(1);
        }
        }

        
        return $validacao;
        
    }
}

