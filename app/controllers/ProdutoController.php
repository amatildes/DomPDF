<?php

namespace app\controllers;

use app\core\Controller;
use app\models\ProdutoModel;

class ProdutoController extends Controller {

    public function index() {
        $produto = new ProdutoModel();

        $dados['produtos'] = $produto->lista();
        $dados['view'] = "produto/Index";
        $this->load("template", $dados);
    }

    public function home() {
        $dados['view'] = "produto/v_home";
        $this->load('template', $dados);
    }

    public function novo() {
        $dados['view'] = "produto/Create";
        $this->load("template", $dados);
    }

    public function editar($id) {
        $produto = new ProdutoModel();
        $dados['produto'] = $produto->getProduto($id);
        $dados['view'] = "produto/Edit";

        $this->load("template", $dados);
    }

    public function salvar() {
        $produto = new ProdutoModel();

        $id = isset($_POST["id"]) ? strip_tags(filter_input(INPUT_POST, "id")) : NULL;
        $patr = isset($_POST['txt_patrimonio']) ? strip_tags(filter_input(INPUT_POST, "txt_patrimonio")) : NULL;
        $nome = isset($_POST['txt_nome']) ? strip_tags(filter_input(INPUT_POST, "txt_nome")) : NULL;
        $descr = isset($_POST["txt_descricao"]) ? strip_tags(filter_input(INPUT_POST, "txt_descricao")) : NULL;
        $marc = isset($_POST["txt_marca"]) ? strip_tags(filter_input(INPUT_POST, "txt_marca")) : NULL;
        $mode = isset($_POST["txt_modelo"]) ? strip_tags(filter_input(INPUT_POST, "txt_modelo")) : NULL;
        $qtde = isset($_POST["txt_qtde"]) ? strip_tags(filter_input(INPUT_POST, "txt_qtde")) : NULL;


        if (isset($id)) {
//           echo $nome;
//           exit();
            $produto->atualizar($id, $patr, $nome, $descr, $marc, $mode, $qtde);
        } else {
            $produto->inserir($patr, $nome, $descr, $marc, $mode, $qtde);
        }

        header("location:" . URL_BASE . "produto");
    }

    public function excluir($id) {
        $produto = new ProdutoModel();
        $produto->excluir($id);
        header("location:" . URL_BASE . "produto");
    }

    public function pesquisar() {
        
            $buscar = isset($_POST["buscar"]) ? strip_tags(filter_input(INPUT_POST, "buscar")) : NULL;

            $produto = new ProdutoModel();

            $dados['produtos'] = $produto->pesquisar($buscar);
            $dados['view'] = "produto/Relatorio";
           
            
            $this->load('template', $dados);
        
    }

}
