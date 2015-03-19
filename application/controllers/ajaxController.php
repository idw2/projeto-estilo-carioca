<?php

Class Ajax extends Controller {

    public function is_disponibilidade() {

        $model = new Produtos_Model();

        $codquantidade = $_POST["codquantidade"];
        $qntdd = $model->select_rotulo(NULL, $codquantidade);

        if ($qntdd) {
            foreach ($qntdd as $object) {
                echo $object->QUANTIDADE;
                break;
            }
        } else {
            echo 0;
        }
        die();
    }

    public function add_lista_desejos() {

        header('Content-type: text/html; charset=UTF-8');

        $model = new Wishlist_Model();

        header('Content-Type: application/json');

        $dados['CODLISTADESEJOS'] = $this->getPrimarykey();
        $dados['CLIENT_HIDDEN'] = $_POST['CLIENT_HIDDEN'];
        $dados['CODPRODUTO'] = $_POST['CODPRODUTO'];
        $dados['CODQUANTIDADE'] = $_POST['CODQUANTIDADE'];
        $dados['QUANTIDADE'] = $_POST['QUANTIDADE'];
        $dados['EMBALAR_PRESENTE'] = 0;

        $qntdd = $model->get_qntdd($dados['CODQUANTIDADE']);

        if ((int) $dados["QUANTIDADE"] > (int) $qntdd) {
            $q["quantidade"] = 0;
            $q["error"] = "OK";
        } else {
            $model->add_wishlist($dados);
            $q["quantidade"] = $qntdd;
            $q["error"] = "";
        }
        echo json_encode($q["quantidade"]);
        die();
    }
    
    public function plus_checkout() {
        
    }

}
