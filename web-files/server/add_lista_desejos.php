<?php

set_time_limit(0);
require("../../system/model.php");

Class Querys extends Model {

    public function add_lista_desejos(Array $dados) {
        
//        var_dump($dados); die();
        
        $this->_tabela = "lista_desejos";
        $this->insert($dados);
//        
//        echo "INSERT INTO lista_desejos ("
//        . "CLIENT_HIDDEN, "
//        . "CODPRODUTO,"
//        . "QUANTIDADE,"
//        . "CODQUANTIDADE,"
//        . "CODLISTADESEJOS"
//        . ") VALUES ("
//        . "'{$dados[CLIENT_HIDDEN]}',"
//        . "'{$dados[CODPRODUTO]}',"
//        . "{$dados[QUANTIDADE]},"
//        . "'{$dados[CODQUANTIDADE]}',"
//        . "'{$dados[CODLISTADESEJOS]}');";
//        die();
//        $query = $this->db->query("INSERT INTO lista_desejos ("
//        . "CLIENT_HIDDEN, "
//        . "CODPRODUTO,"
//        . "QUANTIDADE,"
//        . "CODQUANTIDADE,"
//        . "CODLISTADESEJOS"
//        . ") VALUES ("
//        . "'{$dados[CLIENT_HIDDEN]}',"
//        . "'{$dados[CODPRODUTO]}',"
//        . "{$dados[QUANTIDADE]},"
//        . "'{$dados[CODQUANTIDADE]}',"
//        . "'{$dados[CODLISTADESEJOS]}');");
//        $query->execute();
    }

    public function get_qntdd($codquantidade) {

        $query = $this->db->query("SELECT quantidades.QUANTIDADE as QNTDD FROM quantidades WHERE quantidades.CODQUANTIDADE='{$codquantidade}'");
        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows->QNTDD;
            }
        } else {
            return false;
        }
    }

} 

$model = new Querys();

$dados["CODLISTADESEJOS"] = strtoupper(md5(uniqid(rand(), true)));
$dados["QUANTIDADE"] = ($_POST["QUANTIDADE"] == "" || $_POST["QUANTIDADE"] == "NaN" || $_POST["QUANTIDADE"] == null) ? $_POST["QUANTIDADE"] = 1 : $_POST["QUANTIDADE"];
$dados["CODQUANTIDADE"] = $_POST["CODQUANTIDADE"];
$dados["CODPRODUTO"] = $_POST["CODPRODUTO"];
$dados["CLIENT_HIDDEN"] = $_POST["CLIENT_HIDDEN"];

$qntdd = $model->get_qntdd($dados["CODQUANTIDADE"]);

if ((int) $dados["QUANTIDADE"] > (int) $qntdd) {
    echo "error";
} else {
    $model->add_lista_desejos($dados);
    
    echo $dados["CODQUANTIDADE"]." -> ".$dados["QUANTIDADE"]; die();
}