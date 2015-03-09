<?php

class Wishlist_Model extends Model {

    public function get_qntdd($codquantidade = NULL, $codproduto = NULL) {

        if ($codquantidade != NULL) {
            $q = "SELECT quantidades.QUANTIDADE as QNTDD FROM quantidades WHERE quantidades.CODQUANTIDADE='{$codquantidade}'";
        } else if ($codproduto != NULL) {
            $q = "SELECT SUM(q.QUANTIDADE) as QNTDD FROM quantidades q
INNER JOIN produtos_rel_quantidades prq ON prq.CODQUANTIDADE=q.CODQUANTIDADE
WHERE prq.CODPRODUTO='{$codproduto}'";
        }
        if ($q != "") {
            $query = $this->db->query($q);
            $query->execute();

            if ($query->rowCount()) {
                while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                    return $rows->QNTDD;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function get_all_codquantidade($client_hidden, $codproduto = NULL) {

        if($codproduto != NULL){
            $and = "AND ld.CODPRODUTO='{$codproduto}'";
        }
        
        $query = $this->db->query("SELECT ld.CODQUANTIDADE FROM lista_desejos ld
INNER JOIN quantidades q ON q.CODQUANTIDADE=ld.CODQUANTIDADE
INNER JOIN produtos_rel_quantidades prq ON prq.CODPRODUTO=ld.CODPRODUTO
WHERE ld.CLIENT_HIDDEN='{$client_hidden}' {$and}
GROUP BY ld.CODQUANTIDADE ORDER BY (q.ORDEM+0)");

        $query->execute();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $arr[] = $rows;
            }
            return $arr;
        } else {
            return false;
        }
    }

    public function add_wishlist(Array $dados) {

        $campos = "`" . implode("`,`", array_keys($dados)) . "`";
        $keys = ":" . implode(",:", array_keys($dados));

        $query = $this->db->prepare("INSERT INTO `lista_desejos` ({$campos}) VALUES ({$keys});");

        $query->bindParam(":CODLISTADESEJOS", $dados["CODLISTADESEJOS"], PDO::PARAM_STR, 32);
        $query->bindParam(":CLIENT_HIDDEN", $dados["CLIENT_HIDDEN"], PDO::PARAM_STR, 32);
        $query->bindParam(":CODPRODUTO", $dados["CODPRODUTO"], PDO::PARAM_STR, 32);
        $query->bindParam(":CODQUANTIDADE", $dados["CODQUANTIDADE"], PDO::PARAM_STR, 32);
        $query->bindParam(":QUANTIDADE", $dados["QUANTIDADE"], PDO::PARAM_INT);
        $query->bindParam(":EMBALAR_PRESENTE", $dados["EMBALAR_PRESENTE"], PDO::PARAM_STR);

        $query->execute();
    }

}
