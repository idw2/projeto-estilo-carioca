<?php

set_time_limit(0);
require("../../system/model.php");

Class Querys extends Model {

    public function del_row_wishlist($codproduto, $client_hidden, $codquantidade) {
        $this->_tabela = "lista_desejos";
        $where = "CLIENT_HIDDEN='{$client_hidden}' AND CODPRODUTO='{$codproduto}' AND CODQUANTIDADE='{$codquantidade}'";
        return $this->delete($where);
    }

}

$model = new Querys();

$codproduto = $_POST["CODPRODUTO"];
$client_hidden = $_POST["CLIENT_HIDDEN"];
$codquantidade = $_POST["CODQUANTIDADE"];

$model->del_row_wishlist($codproduto, $client_hidden, $codquantidade);
echo "OK";