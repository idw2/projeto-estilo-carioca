<?php

class Produtos_Model extends Model {

    public function existe_avise_me() {
        $query = $this->db->prepare("SELECT avise_me.*, produtos.* FROM newsletter
INNER JOIN avise_me ON avise_me.EMAIL=newsletter.EMAIL
INNER JOIN produtos ON avise_me.REFERENCIA=produtos.REFERENCIA");

        $query->execute();
        return $query->rowCount();
    }

    public function existe_novos_produtos_cadastrados() {
        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE `WAS_EXPORTED`='nao'");
        $query->execute();
        return $query->rowCount();
    }

    public function existe_url_amigavel($url_amigavel) {

        $url_amigavel = addslashes($url_amigavel);

        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE URL_AMIGAVEL=:URL_AMIGAVEL");
        $query->bindParam(":URL_AMIGAVEL", $url_amigavel, PDO::PARAM_STR, 70);
        $query->execute();
        return $query->rowCount();
    }

    public function qnts_produtos($categoria = null, $search = null) {

        $categoria = addslashes($categoria);

        if ($categoria == "promocoes" || $categoria == "mais_vendidos") {
            switch ($categoria) {
                case "promocoes": $where = "WHERE produtos.STATUS=1 AND IS_PROMOCAO=1";
                    break;
                case "mais_vendidos": $where = "WHERE produtos.STATUS=1 AND MAIS_VENDIDO=1";
                    break;
            }
        } else {
            //SETEI ESTA CATEGORIA COMO NULA PRA ELE BUSCAR TODOS OS PRODUTOS
            $categoria == null;
            if ($categoria != null) {
                $where = "WHERE produtos.CATEGORIA='{$categoria}' AND produtos.STATUS=1";
            } else {
                $where = "WHERE produtos.STATUS=1";
            }
        }

        if ($search != null || $search != "") {

            $search = addslashes($search);
            $s = "AND produtos.NOME LIKE '%{$search}%'";
        }

        $query = $this->db->prepare("SELECT produtos.* FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos.CODFOTO=fotos_rel_produtos.CODFOTO
        {$where}
        AND fotos.STATUS=1  
        {$s}
        GROUP BY produtos.CODPRODUTO");
        $query->execute();
        return $query->rowCount();
    }

    public function existe_cadastro($email) {

        $email = addslashes($email);

        $query = $this->db->prepare("SELECT * FROM `cadastro` WHERE EMAIL=:EMAIL");
        $query->bindParam(":EMAIL", $email, PDO::PARAM_STR, 70);
        $query->execute();
        return $query->rowCount();
    }

    public function qnts_destaques_produtos($indice) {

        $indice = addslashes($indice);

        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE DESTAQUE=:DESTAQUE ");
        $query->bindParam(":DESTAQUE", $indice, PDO::PARAM_STR);
        $query->execute();
        return $query->rowCount();
    }

    public function update_destaque_produto(Array $dados, $url_amigavel) {

        foreach ($dados as $n => $v) {
            $dados[$n] = addslashes($v);
        }
        $url_amigavel = addslashes($url_amigavel);

        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$url_amigavel}'";
        return $this->update($dados, $where);
    }

    public function produtos_rel_quantidade(Array $dados) {
        $this->_tabela = "produtos_rel_quantidades";
        return $this->insert($dados);
    }

    public function insert_quantidade(Array $dados) {
        $this->_tabela = "quantidades";
        return $this->insert($dados);
    }

    public function insert_produto(Array $dados) {

        foreach ($dados as $n => $v) {
            $dados[$n] = addslashes($v);
        }

        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `produtos` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODPRODUTO", $dados["CODPRODUTO"], PDO::PARAM_STR, 32);
            $query->bindParam(":NOME", $dados["NOME"], PDO::PARAM_STR, 70);
            $query->bindParam(":URL_AMIGAVEL", $dados["URL_AMIGAVEL"], PDO::PARAM_STR, 70);
            $query->bindParam(":CATEGORIA", $dados["CATEGORIA"], PDO::PARAM_STR, 20);
            $query->bindParam(":REFERENCIA", $dados["REFERENCIA"], PDO::PARAM_STR, 20);
            $query->bindParam(":PRECO", $dados["PRECO"], PDO::PARAM_INT);
            $query->bindParam(":DE", $dados["DE"], PDO::PARAM_INT);
            $query->bindParam(":PESO", $dados["PESO"], PDO::PARAM_STR);
            $query->bindParam(":LINHA_1", $dados["LINHA_1"], PDO::PARAM_STR, 40);
            $query->bindParam(":LINHA_2", $dados["LINHA_2"], PDO::PARAM_STR, 40);
            $query->bindParam(":LINHA_3", $dados["LINHA_3"], PDO::PARAM_STR, 40);
            $query->bindParam(":DESTAQUE", $dados["DESTAQUE"], PDO::PARAM_STR);
            $query->bindParam(":STATUS", $dados["STATUS"], PDO::PARAM_STR);
            $query->bindParam(":ANO", $dados["ANO"], PDO::PARAM_STR, 9);
            $query->bindParam(":KM", $dados["KM"], PDO::PARAM_INT);
            $query->bindParam(":ORDEM", $dados["ORDEM"], PDO::PARAM_INT);
            $query->bindParam(":COR", $dados["COR"], PDO::PARAM_STR, 25);
            $query->bindParam(":COMBUSTIVEL", $dados["COMBUSTIVEL"], PDO::PARAM_STR, 25);
            $query->bindParam(":PORTAS", $dados["PORTAS"], PDO::PARAM_INT);
            $query->bindParam(":FINAL_PLACA", $dados["FINAL_PLACA"], PDO::PARAM_STR, 10);
            $query->bindParam(":CARROCERIA", $dados["CARROCERIA"], PDO::PARAM_STR, 25);
            $query->bindParam(":DESCRICAO", $dados["DESCRICAO"], PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT);
            $query->bindParam(":ESPECIFICACOES", $dados["ESPECIFICACOES"], PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT);
//            
//            
//            $dados["CODPRODUTO"] = $this->getPrimarykey();
//            $dados["NOME"] = $nome;
//            $dados["URL_AMIGAVEL"] = $url_amigavel;
//            $dados["CATEGORIA"] = $categoria;
//            $dados["PRECO"] = $preco;
//            $dados["DE"] = $de;
//            $dados["LINHA_1"] = $linha_1;
//            $dados["LINHA_2"] = $linha_2;
//            $dados["LINHA_3"] = $linha_3;
//            $dados["DESTAQUE"] = 0;
//            $dados["STATUS"] = 1;
//            $dados["ORDEM"] = ($model->qnts_produtos() + 1);
//            $dados["ANO"] = $ano;
//            $dados["KM"] = $km;
//            $dados["COR"] = $cor;
//            $dados["COMBUSTIVEL"] = $combustivel;
//            $dados["REFERENCIA"] = $referencia;
//            $dados["PORTAS"] = $portas;
//            $dados["PESO"] = $peso;
//            $dados["FINAL_PLACA"] = $final_placa;
//            $dados["CARROCERIA"] = $carroceria;
//            $dados["DESCRICAO"] = trim(stripslashes($descricao));
//            $dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));

            $query->execute();

            return true;
        } else {
            return false;
        }
    }

    public function get_produtos_all() {

        $this->_tabela = "produtos";
        $rows = $this->read_list(null, null, "ORDER BY (ORDEM+0) ASC", null);

        if ($rows) {
            while ($row = $rows->fetch(PDO::FETCH_OBJ)) {
                foreach ($row as $name => $value) {
                    $row->$name = utf8_decode($value);
                }
                $dados[] = $row;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_fotos_all($url_amigavel) {

        $url_amigavel = addslashes($url_amigavel);

        $q = $this->db->query("
            SELECT 
                fotos.* , DATE_FORMAT( fotos.`DTA` ,  '%d/%m/%Y - %Hh%i' ) AS DTA
            FROM fotos
            INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.`CODFOTO` = fotos.`CODFOTO` 
            INNER JOIN produtos ON fotos_rel_produtos.`CODPRODUTO` = produtos.`CODPRODUTO` 
            WHERE produtos.`URL_AMIGAVEL`='{$url_amigavel}' ORDER BY (fotos.ORDEM+0) ASC");

        if ($q->rowCount()) {
            while ($row = $q->fetch(PDO::FETCH_OBJ)) {
                foreach ($row as $name => $value) {
                    if ($name == "CODFOTO") {
                        $value = strtolower($value);
                    }
                    if (strlen(WEB_FILES) > 0) {

                        ($name == "ORIGINAL") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                        ($name == "CROP770") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                        ($name == "CROP550") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                        ($name == "CROP268") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                        ($name == "CROP80") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                        ($name == "CROPH1440") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                        ($name == "CROPH80") ? $value = WEB_FILES . str_replace("/web-files", "", $value) : $value;
                    }

                    $row->$name = utf8_decode($value);
                }
                $dados[] = $row;
                // die();
            }

            return $dados;
        } else {
            return false;
        }
    }

    public function update_status($key, $status) {

        $key = addslashes($key);
        $status = addslashes($status);

        $this->_tabela = "produtos";
        $dados["STATUS"] = $status;
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_novo($key, $status) {

        $key = addslashes($key);
        $status = addslashes($status);

        $this->_tabela = "produtos";
        $dados["IS_NOVO"] = $status;
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_promocao($key, $status) {

        $key = addslashes($key);
        $status = addslashes($status);

        $this->_tabela = "produtos";
        $dados["IS_PROMOCAO"] = $status;
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_mais_vendido($key, $status) {

        $key = addslashes($key);
        $status = addslashes($status);

        $this->_tabela = "produtos";
        $dados["MAIS_VENDIDO"] = $status;
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_status_foto($codfoto, $status) {

        $codfoto = addslashes($codfoto);
        $status = addslashes($status);

        $this->_tabela = "fotos";
        $dados["STATUS"] = $status;
        $where = "CODFOTO='{$codfoto}'";
        return $this->update($dados, $where);
    }

    public function update_destaque_foto($codfoto, $url_amigavel) {

        $codfoto = addslashes($codfoto);
        $url_amigavel = addslashes($url_amigavel);

        $query = $this->db->query("UPDATE fotos 
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        SET fotos.DESTAQUE=0 
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'");
        $query->execute();

        $this->_tabela = "fotos";
        $dados["DESTAQUE"] = 1;
        $where = "CODFOTO='{$codfoto}'";
        $this->update($dados, $where);
    }

    public function get_foto_destaque($url_amigavel) {

        $url_amigavel = addslashes($url_amigavel);

        $query = $this->db->query("
        SELECT 
            fotos.CROP268 AS IMG 
        FROM `fotos` 
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE fotos.DESTAQUE=1 AND produtos.URL_AMIGAVEL='{$url_amigavel}'");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                if (strlen(WEB_FILES) > 0) {
                    $rows->IMG = WEB_FILES . str_replace("/web-files", "", $rows->IMG);
                }
                return $rows;
            }
        } else {
            return false;
        }
    }

    public function update_produto(Array $dados, $key) {

        foreach ($dados as $n => $v) {
            $dados[$n] = addslashes($v);
        }
        $key = addslashes($key);

        $this->_tabela = "produtos";
        $where = "CODPRODUTO='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_produto_url_amigavel(Array $dados, $key) {

        foreach ($dados as $n => $v) {
            $dados[$n] = addslashes($v);
        }
        $key = addslashes($key);

        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function del_produto($key) {

        $key = addslashes($key);

        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->delete($where);
    }

    public function del_avise_me($codaviseme) {

        $key = addslashes($codaviseme);

        $this->_tabela = "avise_me";
        $where = "CODAVISEME='{$key}'";
        return $this->delete($where);
    }

    public function del_foto($codfoto) {

        $codfoto = addslashes($codfoto);

        $this->_tabela = "fotos";
        $where = "CODFOTO='{$codfoto}'";
        return $this->delete($where);
    }

    public function del_rel_foto($codfoto) {

        $codfoto = addslashes($codfoto);

        $this->_tabela = "fotos_rel_produtos";
        $where = "CODFOTO='{$codfoto}'";
        return $this->delete($where);
    }

    public function get_produto($key) {

        $key = addslashes($key);

        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->read($where);
    }

    public function get_produto_with_codproduto($codproduto) {

        $codproduto = addslashes($codproduto);

        $this->_tabela = "produtos";
        $where = "CODPRODUTO='{$codproduto}'";
        return $this->read($where);
    }

    public function get_foto($codfoto) {

        $codfoto = addslashes($codfoto);

        $this->_tabela = "fotos";
        $where = "CODFOTO='{$codfoto}'";
        return $this->read($where);
    }

    public function get_lista_produtos_index($categoria = null, $limit) {

        $limit = addslashes($limit);

        if ($categoria != null) {

            $categoria = addslashes($categoria);

            $categoria = "AND produtos.CATEGORIA='{$categoria}'";
        } else {
            $categoria = "";
        }

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                produtos.NOME, 
                produtos.IS_NOVO,
                produtos.IS_PROMOCAO,
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA, 
                produtos.QUANTIDADE,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1
        AND fotos.DESTAQUE=1 {$categoria}
        AND fotos.STATUS=1
        GROUP BY produtos.CODPRODUTO
        ORDER BY (produtos.ORDEM+0) ASC {$limit}");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->DE = $c->formataReais($rows->DE);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->NOME = utf8_encode($rows->NOME);
                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_produtos_categorias($categoria = null, $limit = null, $sort = null, $search = null) {

        $categoria = addslashes($categoria);
        $limit = addslashes($limit);
        $sort = addslashes($sort);
        $search = addslashes($search);

        if ($categoria == "promocoes" || $categoria == "mais_vendidos") {
            switch ($categoria) {
                case "promocoes": $categoria = "AND produtos.IS_PROMOCAO=1";
                    break;
                case "mais_vendidos": $categoria = "AND produtos.MAIS_VENDIDO=1";
                    break;
            }
        } else {
            ($categoria != null) ? $categoria = "AND produtos.CATEGORIA='{$categoria}'" : $categoria = "";
            #SETEI ESTA VARIÁVEL COMO VAZIA PRA ELE BUSCAR TODOS OS PRODUTOS
            $categoria = "";
        }

        if ($search != null || $search != "") {
            $s = "AND produtos.NOME LIKE '%{$search}%'";
        }

        switch ($sort) {
            case "mais-novos": $ordem = "ORDER BY produtos.DTA DESC";
                break;
            case "preco-crescente": $ordem = "ORDER BY (produtos.PRECO+0) ASC";
                break;
            case "preco-decrescente": $ordem = "ORDER BY (produtos.PRECO+0) DESC";
                break;
            case "nome-crescente": $ordem = "ORDER BY produtos.NOME ASC";
                break;
            case "nome-decrescente": $ordem = "ORDER BY produtos.NOME DESC";
                break;
            case "quantidade": $ordem = "ORDER BY (produtos.QUANTIDADE+0) DESC";
                break;
            default: $ordem = "ORDER BY (produtos.DTA) DESC";
                break;
        }

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                ROUND(produtos.PRECO/6) as PRECO_6, 
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA, 
                produtos.NOME, 
                produtos.IS_NOVO,
                produtos.IS_PROMOCAO,
                produtos.QUANTIDADE,
                produtos.NOME,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1
        AND fotos.DESTAQUE=1 
        {$categoria}
        AND fotos.STATUS=1
        {$s}
        GROUP BY produtos.CODPRODUTO
        {$ordem} {$limit}");
        
        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_6 = $c->formataReais($rows->PRECO_6);
                $rows->DE = $c->formataReais($rows->DE);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->NOME = $c->tres_palavras(utf8_encode($rows->NOME));
                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_produtos_index_rand($categoria = null, $limit) {

        $limit = addslashes($limit);

        if ($categoria != null) {
            $categoria = addslashes($categoria);
            $categoria = "AND produtos.CATEGORIA='{$categoria}'";
        } else {
            $categoria = "";
        }

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                ROUND(produtos.PRECO/6) as PRECO_6, 
                produtos.NOME, 
                produtos.IS_NOVO,
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA,
                produtos.IS_PROMOCAO,
                produtos.QUANTIDADE,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1
        AND fotos.DESTAQUE=1 {$categoria}
        AND fotos.STATUS=1
        GROUP BY produtos.CODPRODUTO
        ORDER BY RAND() ASC {$limit}");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->DE = $c->formataReais($rows->DE);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_6 = $c->formataReais($rows->PRECO_6);
                $rows->NOME = $c->tres_palavras(utf8_encode($rows->NOME));

                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }

                $dados[] = $rows;
            }

            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_produtos_promocao($limit, $url_amigavel = null) {

        $limit = addslashes($limit);


        if ($url_amigavel != null) {
            $url_amigavel = addslashes($url_amigavel);
            $negacao = "AND produtos.URL_AMIGAVEL NOT IN('{$url_amigavel}')";
        } else {
            $negacao = "";
        }

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                ROUND(produtos.PRECO/6) as PRECO_6, 
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA,
                produtos.NOME, 
                produtos.IS_NOVO,
                produtos.IS_PROMOCAO,
                produtos.QUANTIDADE,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1
        AND produtos.IS_PROMOCAO=1
        AND fotos.STATUS=1
        AND fotos.DESTAQUE=1 
        AND produtos.QUANTIDADE>0 
        {$negacao}
        GROUP BY produtos.CODPRODUTO
        ORDER BY RAND() ASC {$limit}");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->DE = $c->formataReais($rows->DE);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_6 = $c->formataReais($rows->PRECO_6);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->NOME = $c->tres_palavras(utf8_encode($rows->NOME));

                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }

                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_produtos_mais_vendidos($limit) {

        $limit = addslashes($limit);

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                ROUND(produtos.PRECO/6) as PRECO_6, 
                produtos.NOME, 
                produtos.IS_NOVO,
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA,
                produtos.IS_PROMOCAO,
                produtos.QUANTIDADE,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1 
        AND produtos.MAIS_VENDIDO=1
        AND fotos.STATUS=1
        AND fotos.DESTAQUE=1 
        AND produtos.QUANTIDADE>0 
        GROUP BY produtos.CODPRODUTO
        ORDER BY RAND() ASC {$limit}");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->DE = $c->formataReais($rows->DE);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_6 = $c->formataReais($rows->PRECO_6);
                $rows->NOME = $c->tres_palavras(utf8_encode($rows->NOME));

                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }

                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_produtos_novos($limit) {

        $limit = addslashes($limit);

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                ROUND(produtos.PRECO/6) as PRECO_6, 
                produtos.NOME, 
                produtos.IS_NOVO,
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA,
                produtos.IS_PROMOCAO,
                produtos.QUANTIDADE,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1 
        AND produtos.IS_NOVO=1
        AND fotos.STATUS=1
        AND fotos.DESTAQUE=1 
        AND produtos.QUANTIDADE>0 
        GROUP BY produtos.CODPRODUTO
        ORDER BY RAND() ASC {$limit}");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->DE = $c->formataReais($rows->DE);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_6 = $c->formataReais($rows->PRECO_6);
                $rows->NOME = $c->tres_palavras(utf8_encode($rows->NOME));

                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }

                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_produtos_relacionados_randon($categoria = null, $limit, $url_amigavel) {

        $limit = addslashes($limit);
        $url_amigavel = addslashes($url_amigavel);

        if ($categoria != null) {
            $categoria = addslashes($categoria);
            $categoria = "AND produtos.CATEGORIA='{$categoria}'";
        } else {
            $categoria = "";
        }

        $query = $this->db->query("SELECT 
                produtos.CODPRODUTO, 
                produtos.URL_AMIGAVEL, 
                produtos.PRECO, 
                ROUND(produtos.PRECO/6) as PRECO_6,
                produtos.NOME, 
                produtos.IS_NOVO, 
                produtos.DE, 
                SUM(produtos.DE - produtos.PRECO) as DIFERENCA,
                produtos.IS_PROMOCAO,
                produtos.QUANTIDADE,
                DATE_FORMAT( produtos.DTA,  '%d/%m/%Y - %Hh%i' ) AS DTA, 
                produtos.CATEGORIA, 
                produtos.ESPECIFICACOES, 
                fotos.RAIZ, 
                fotos.ORIGINAL, 	
                fotos.CROP770, 	
                fotos.CROP550, 	
                fotos.CROP268,
                fotos.CROP80,
                fotos.CROPH1440,
                fotos.CROPH80
        FROM produtos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        WHERE produtos.STATUS=1
        AND fotos.DESTAQUE=1 {$categoria}
        AND fotos.STATUS=1 AND produtos.URL_AMIGAVEL NOT IN ('{$url_amigavel}')
        GROUP BY produtos.CODPRODUTO
        ORDER BY RAND() ASC {$limit}");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->DE = $c->formataReais($rows->DE);
                $rows->DIFERENCA = $c->formataReais($rows->DIFERENCA);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_6 = $c->formataReais($rows->PRECO_6);
                $rows->NOME = utf8_encode($rows->NOME);

                if (strlen(WEB_FILES) > 0) {
                    $rows->ORIGINAL = WEB_FILES . str_replace("/web-files", "", $rows->ORIGINAL);
                    $rows->CROP770 = WEB_FILES . str_replace("/web-files", "", $rows->CROP770);
                    $rows->CROP550 = WEB_FILES . str_replace("/web-files", "", $rows->CROP550);
                    $rows->CROP268 = WEB_FILES . str_replace("/web-files", "", $rows->CROP268);
                    $rows->CROP80 = WEB_FILES . str_replace("/web-files", "", $rows->CROP80);
                    $rows->CROPH1440 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH1440);
                    $rows->CROPH80 = WEB_FILES . str_replace("/web-files", "", $rows->CROPH80);
                }

                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_crop_770($url_amigavel, $destaque = null) {

        $url_amigavel = addslashes($url_amigavel);

        if ($destaque != null) {
            $destaque = addslashes($destaque);
            $destaque = "AND fotos.DESTAQUE={$destaque}";
        } else {
            $destaque = "";
        }

        $query = $this->db->query("
        SELECT 
            fotos.CROP770 as FOTO 
        FROM fotos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'
        AND fotos.STATUS=1 {$destaque}
        GROUP BY fotos.CODFOTO
        ORDER BY (fotos.DESTAQUE+0) DESC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = utf8_decode($rows->NOME);
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_crop_550($url_amigavel, $destaque = null) {

        $url_amigavel = addslashes($url_amigavel);

        if ($destaque != null) {
            $destaque = addslashes($destaque);
            $destaque = "AND fotos.DESTAQUE={$destaque}";
        } else {
            $destaque = "";
        }

        $query = $this->db->query("
        SELECT 
            fotos.CROP770 as FOTO 
        FROM fotos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'
        AND fotos.STATUS=1 {$destaque} 
        GROUP BY fotos.CODFOTO
        ORDER BY (fotos.DESTAQUE+0) DESC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = utf8_decode($rows->NOME);
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_crop_268($url_amigavel, $destaque = null) {

        $url_amigavel = addslashes($url_amigavel);

        if ($destaque != null) {
            $destaque = addslashes($destaque);
            $destaque = "AND fotos.DESTAQUE={$destaque}";
        } else {
            $destaque = "";
        }

        $query = $this->db->query("SELECT fotos.CROP770 as FOTO FROM fotos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'
        AND fotos.STATUS=1 {$destaque}
        GROUP BY fotos.CODFOTO
        ORDER BY (fotos.DESTAQUE+0) DESC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = utf8_decode($rows->NOME);
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_crop_h1440($url_amigavel, $destaque = null) {

        $url_amigavel = addslashes($url_amigavel);

        if ($destaque != null) {
            $destaque = addslashes($destaque);
            $destaque = "AND fotos.DESTAQUE={$destaque}";
        } else {
            $destaque = "";
        }

        $query = $this->db->query("SELECT fotos.CROPH1440 as FOTO FROM fotos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'
        AND fotos.STATUS=1 {$destaque}
        GROUP BY fotos.CODFOTO
        ORDER BY (fotos.DESTAQUE+0) DESC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = utf8_decode($rows->NOME);
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_crop_h80($url_amigavel, $destaque = null) {

        $url_amigavel = addslashes($url_amigavel);

        if ($destaque != null) {
            $destaque = addslashes($destaque);
            $destaque = "AND fotos.DESTAQUE={$destaque}";
        } else {
            $destaque = "";
        }

        $query = $this->db->query("SELECT fotos.CROPH80 as FOTO FROM fotos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'
        AND fotos.STATUS=1 {$destaque}
        GROUP BY fotos.CODFOTO
        ORDER BY (fotos.DESTAQUE+0) DESC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = utf8_decode($rows->NOME);
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_crop_full_images($url_amigavel, $destaque = null) {

        $url_amigavel = addslashes($url_amigavel);

        if ($destaque != null) {
            $destaque = addslashes($destaque);
            $destaque = "AND fotos.DESTAQUE={$destaque}";
        } else {
            $destaque = "";
        }

        $query = $this->db->query("SELECT 
            fotos.CROP80 as FOTO_SM, 
            fotos.CROP268 as FOTO_MD, 
            fotos.CROP550 as FOTO_IT, 
            fotos.CROP770 as FOTO_LG, 
            fotos.CROPH1440 as FOTO_HLG,
            fotos.CROPH80 as FOTO_HSM 
        FROM fotos
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE produtos.URL_AMIGAVEL='{$url_amigavel}'
        AND fotos.STATUS=1 {$destaque}
        GROUP BY fotos.CODFOTO
        ORDER BY (fotos.DESTAQUE+0) DESC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO_SM = WEB_FILES . str_replace("/web-files", "", $rows->FOTO_SM);
                    $rows->FOTO_MD = WEB_FILES . str_replace("/web-files", "", $rows->FOTO_MD);
                    $rows->FOTO_IT = WEB_FILES . str_replace("/web-files", "", $rows->FOTO_IT);
                    $rows->FOTO_LG = WEB_FILES . str_replace("/web-files", "", $rows->FOTO_LG);
                    $rows->FOTO_HLG = WEB_FILES . str_replace("/web-files", "", $rows->FOTO_HLG);
                    $rows->FOTO_HSM = WEB_FILES . str_replace("/web-files", "", $rows->FOTO_HSM);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function del_row_wishlist($codquantidade, $client_hidden) {
        $this->_tabela = "lista_desejos";
        $where = "CLIENT_HIDDEN='{$client_hidden}' AND CODQUANTIDADE='{$codquantidade}'";
        return $this->delete($where);
    }

    public function add_lista_desejos($dados) {
        $this->_tabela = "lista_desejos";
        return $this->insert($dados);
    }

    public function get_codlistadesejos($codquantidade, $client_hidden) {
        $query = $this->db->query("SELECT CODLISTADESEJOS FROM lista_desejos WHERE CODQUANTIDADE='{$codquantidade}' AND CLIENT_HIDDEN='{$client_hidden}'");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows->CODLISTADESEJOS;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_lista_desejos_recursiva($url_amigavel_or_codproduto, $client_hidden, Array $codquantidades) {

        $size = sizeof($codquantidades);
        if ($size == 0) {
            return false;
        } else {
            $i = 0;
            foreach ($codquantidades as $codquantidade) {
                $extrair[] = $this->get_drop_lista_desejos($this->get_codlistadesejos($codquantidade, $client_hidden), $client_hidden, $codquantidade);

                if ($extrair) {
                    foreach ($extrair as $exts) {
                        foreach ($exts as $ext) {
                            $arr[] = $ext;
                        }
                    }
                } else {
                    return false;
                }
                unset($extrair);
                $i++;
            }
        }
        if (($size) == $i) {
            return $arr;
        } else {
            return false;
        }
    }
//    public function get_drop_lista_desejos($codlistadesejos, $client_hidden, $codquantidade = NULL) {
    
    public function get_drop_lista_desejos($codlistadesejos, $client_hidden, $codquantidade = NULL) {

        $url_amigavel_or_codproduto = addslashes($url_amigavel_or_codproduto);
        $client_hidden = addslashes($client_hidden);
        $query = $this->db->query("SELECT 
	produtos.CODPRODUTO, 
	produtos.NOME, 
	produtos.PESO, 
	produtos.URL_AMIGAVEL, 
	produtos.CATEGORIA as CATEG, 			
	fotos.CROP80 as FOTO, 
	CASE produtos.CATEGORIA 
	WHEN 'junior' THEN 'Junior'
	WHEN 'nilton-santos' THEN 'Nilton Santos'
	ELSE 'Junior' 
	END AS CATEGORIA, 
        (SELECT q.ROTULO FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as ROTULO, 
        (SELECT q.ESPECIFICACAO FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as ESPECIFICACAO, 
        (SELECT q.QUANTIDADE FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as QUANTIDADE, 
        (SELECT q.IS_COR FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as IS_COR, 
        (SELECT q.COR FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as COR, 
	produtos.PRECO, 
	'{$codquantidade}' as CODQUANTIDADE, 
	produtos.REFERENCIA,
	(
		produtos.PESO * 
		(
			SELECT DISTINCT SUM(ld.QUANTIDADE) as QUANTIDADE FROM lista_desejos ld 
			WHERE ld.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}'
		)
	) 
	as PESO_TOTAL, 
	(SELECT SUM(q.QUANTIDADE) FROM quantidades q INNER JOIN lista_desejos ld ON ld.CODQUANTIDADE=q.CODQUANTIDADE WHERE q.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}') as QUANTIDADE_EXISTENTE, 
	lista_desejos.CODLISTADESEJOS, 
	(
		produtos.PRECO *
		(
			SELECT DISTINCT SUM(ld.QUANTIDADE) as QUANTIDADE FROM lista_desejos ld 
			WHERE ld.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}'
		)
	) 
	as TOTAL, 
	(
		SELECT DISTINCT SUM(ld.QUANTIDADE) FROM lista_desejos ld 
		WHERE ld.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}'
	) 
	as QUANTIDADE 
FROM produtos
INNER JOIN lista_desejos ON lista_desejos.CODPRODUTO=produtos.CODPRODUTO
INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
WHERE lista_desejos.CODLISTADESEJOS='{$codlistadesejos}' AND lista_desejos.CLIENT_HIDDEN='{$client_hidden}' 
AND fotos.DESTAQUE=1
GROUP BY produtos.CODPRODUTO
ORDER BY (produtos.NOME) ASC");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = strtoupper(utf8_encode($rows->NOME));
                $rows->PRECO_UNITARIO = $rows->PRECO;
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->TOTAL = $c->formataReais($rows->TOTAL);
                if (strlen(WEB_FILES) > 0) {
                    $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
                }
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }
    
//    public function get_lista_desejos_recursiva($url_amigavel_or_codproduto, $client_hidden, Array $codquantidades) {
//
//        $url_amigavel_or_codproduto = addslashes($url_amigavel_or_codproduto);
//
//        $client_hidden = addslashes($client_hidden);
//
//        foreach ($codquantidades as $codquantidade) {
//            $query = $this->db->query("SELECT 
//	produtos.CODPRODUTO, 
//	produtos.NOME, 
//	produtos.PESO, 
//	produtos.URL_AMIGAVEL, 
//	produtos.CATEGORIA as CATEG, 			
//	fotos.CROP80 as FOTO, 
//	CASE produtos.CATEGORIA 
//	WHEN 'junior' THEN 'Junior'
//	WHEN 'nilton-santos' THEN 'Nilton Santos'
//	ELSE 'Junior' 
//	END AS CATEGORIA, 
//        (SELECT q.ROTULO FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as ROTULO, 
//        (SELECT q.ESPECIFICACAO FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as ESPECIFICACAO, 
//        (SELECT q.QUANTIDADE FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as QUANTIDADE, 
//        (SELECT q.IS_COR FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as IS_COR, 
//        (SELECT q.COR FROM quantidades q WHERE q.CODQUANTIDADE='{$codquantidade}') as COR, 
//	produtos.PRECO, 
//	'{$codquantidade}' as CODQUANTIDADE, 
//	produtos.REFERENCIA,
//	(
//		produtos.PESO * 
//		(
//			SELECT DISTINCT SUM(ld.QUANTIDADE) as QUANTIDADE FROM lista_desejos ld 
//			WHERE ld.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}'
//		)
//	) 
//	as PESO_TOTAL, 
//	(SELECT SUM(q.QUANTIDADE) FROM quantidades q INNER JOIN lista_desejos ld ON ld.CODQUANTIDADE=q.CODQUANTIDADE WHERE q.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}') as QUANTIDADE_EXISTENTE, 
//	lista_desejos.CODLISTADESEJOS, 
//	(
//		produtos.PRECO *
//		(
//			SELECT DISTINCT SUM(ld.QUANTIDADE) as QUANTIDADE FROM lista_desejos ld 
//			WHERE ld.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}'
//		)
//	) 
//	as TOTAL, 
//	(
//		SELECT DISTINCT SUM(ld.QUANTIDADE) FROM lista_desejos ld 
//		WHERE ld.CODQUANTIDADE='{$codquantidade}' AND ld.CLIENT_HIDDEN='{$client_hidden}'
//	) 
//	as QUANTIDADE 
//FROM produtos
//INNER JOIN lista_desejos ON lista_desejos.CODPRODUTO=produtos.CODPRODUTO
//INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
//INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
//WHERE lista_desejos.CODLISTADESEJOS='{$codlistadesejos}' AND lista_desejos.CLIENT_HIDDEN='{$client_hidden}' 
//AND fotos.DESTAQUE=1
//GROUP BY produtos.CODPRODUTO
//ORDER BY (produtos.NOME) ASC");
//
//            $query->execute();
//
//            if ($query->rowCount()) {
//                $c = new Controller();
//                while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
//                    $rows->NOME = strtoupper(utf8_encode($rows->NOME));
//                    $rows->PRECO_UNITARIO = $rows->PRECO;
//                    $rows->PRECO = $c->formataReais($rows->PRECO);
//                    $rows->TOTAL = $c->formataReais($rows->TOTAL);
//                    if (strlen(WEB_FILES) > 0) {
//                        $rows->FOTO = WEB_FILES . str_replace("/web-files", "", $rows->FOTO);
//                    }
//                    $dados[] = $rows;
//                }
//                return $dados;
//            }
//        }
//
//        if ($dados) {
//            return $dados;
//        } else {
//            return false;
//        }
//    }

    public function get_total_geral_lista_desejos($client_hidden) {

        $client_hidden = addslashes($client_hidden);

        $query = $this->db->query("SELECT SUM(produtos.PRECO*lista_desejos.QUANTIDADE) as TOTAL_GERAL FROM lista_desejos
INNER JOIN produtos ON produtos.CODPRODUTO=lista_desejos.CODPRODUTO
WHERE lista_desejos.CLIENT_HIDDEN='{$client_hidden}'");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->TOTAL_GERAL = $c->formataReais($rows->TOTAL_GERAL);
                return $rows;
            }
        } else {
            return false;
        }
    }

    public function get_total_peso_lista_desejos($client_hidden) {

        $client_hidden = addslashes($client_hidden);

        $query = $this->db->query("SELECT SUM(produtos.PESO*lista_desejos.QUANTIDADE) as TOTAL_PESO FROM lista_desejos
INNER JOIN produtos ON produtos.CODPRODUTO=lista_desejos.CODPRODUTO
WHERE lista_desejos.CLIENT_HIDDEN='{$client_hidden}'");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                //$rows->TOTAL_GERAL = $c->formataReais($rows->TOTAL_GERAL);
                return $rows;
            }
        } else {
            return false;
        }
    }

    public function get_total_produtos_lista_desejos($client_hidden) {

        $client_hidden = addslashes($client_hidden);

        $query = $this->db->query("SELECT 
	SUM(lista_desejos.QUANTIDADE) as TOTAL_PRODUTOS
FROM produtos
INNER JOIN lista_desejos ON lista_desejos.CODPRODUTO=produtos.CODPRODUTO
WHERE lista_desejos.CLIENT_HIDDEN='{$client_hidden}'");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->TOTAL_GERAL = $c->formataReais($rows->TOTAL_GERAL);
                return $rows;
            }
        } else {
            return false;
        }
    }

    public function get_avise_me() {

        $query = $this->db->query("SELECT newsletter.NOME, newsletter.EMAIL FROM newsletter
INNER JOIN avise_me ON avise_me.EMAIL=newsletter.EMAIL
GROUP BY newsletter.EMAIL
ORDER BY newsletter.DTA ASC");
        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->EMAIL_B64 = base64_encode($rows->EMAIL);
                $itens = $this->get_avise_me_itens($rows->EMAIL);

                if ($itens) {
                    $it = array();
                    foreach ($itens as $item) {
                        $it[] = $item;
                    }
                    $rows->ITENS = $it;
                    unset($it);
                }
                $dados[] = $rows;
            }

            return $dados;
        } else {
            return false;
        }
    }

    public function get_avise_me_itens($email = NULL, $codaviseme = NULL) {

        if ($codaviseme != NULL) {
            $where = "AND avise_me.CODAVISEME='{$codaviseme}'";
        } else if ($email != NULL) {
            $where = "AND avise_me.EMAIL='{$email}'";
        }

        $query = $this->db->query("SELECT 
	avise_me.*, 
	DATE_FORMAT( avise_me.DTA, '%d/%m/%Y - %Hh%i' ) as DTA,
	fotos.CROP80,	
	fotos.CROP268,	
	produtos.NOME,	
	produtos.PRECO,
        produtos.CATEGORIA as CAT,
	produtos.URL_AMIGAVEL,	
	CASE produtos.CATEGORIA 
        WHEN 'junior' THEN 'Junior'
        WHEN 'nilton-santos' THEN 'Nilton Santos'
        ELSE 'Junior' 
        END AS CATEGORIA, 
	produtos.REFERENCIA
FROM 
	avise_me 
INNER JOIN produtos ON produtos.REFERENCIA=avise_me.REFERENCIA 
INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO 
INNER JOIN fotos ON fotos.CODFOTO=fotos_rel_produtos.CODFOTO 
WHERE fotos.DESTAQUE=1 
{$where} 
ORDER BY DTA DESC");

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->NOME = utf8_encode($rows->NOME);

                if ($codaviseme != NULL) {
                    return $rows;
                } else {
                    $dados[] = $rows;
                }
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function delete_rotulo($url_amigavel) {

        $query = $this->db->query("DELETE quantidades, produtos_rel_quantidades FROM quantidades
INNER JOIN produtos_rel_quantidades ON produtos_rel_quantidades.CODQUANTIDADE=quantidades.CODQUANTIDADE
WHERE produtos_rel_quantidades.CODPRODUTO IN (SELECT p.CODPRODUTO FROM produtos p WHERE p.URL_AMIGAVEL='{$url_amigavel}')");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function update_rotulo(Array $dados, $key) {

        foreach ($dados as $n => $v) {
            $dados[$n] = addslashes($v);
        }
        $key = addslashes($key);

        $this->_tabela = "quantidades";
        $where = "CODQUANTIDADE='{$key}'";
        return $this->update($dados, $where);
    }

    public function select_rotulo($url_amigavel, $codquantidade = NULL) {

        if ($codquantidade == NULL) {
            $where = "WHERE produtos_rel_quantidades.CODPRODUTO IN (SELECT p.CODPRODUTO FROM produtos p WHERE p.URL_AMIGAVEL='{$url_amigavel}')";
        } else {
            $where = "WHERE quantidades.CODQUANTIDADE='{$codquantidade}'";
        }

        $query = $this->db->query("SELECT quantidades.* FROM quantidades
        INNER JOIN produtos_rel_quantidades ON produtos_rel_quantidades.CODQUANTIDADE = quantidades.CODQUANTIDADE
        {$where}
        ORDER BY (quantidades.ORDEM) ASC");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function select_produtos_all($categoria = null) {

        if ($categoria != null) {
            $categoria = addslashes($categoria);
            $where = "WHERE CATEGORIA='{$categoria}'";
        }

        $query = $this->db->query("SELECT 
	produtos.*, q.*, q.quantidade as QTD, DATE_FORMAT( produtos.DTA, '%d/%m/%Y - %Hh%i' ) as DTA, 
	CASE produtos.CATEGORIA 
	WHEN 'junior' THEN 'Junior'
	WHEN 'nilton-santos' THEN 'Nilton Santos'
	ELSE 'Junior' 
	END AS CATEGORIA,
	fotos.CROP80
        FROM produtos 
        INNER JOIN produtos_rel_quantidades prq ON prq.CODPRODUTO = produtos.CODPRODUTO
        INNER JOIN quantidades q ON q.CODQUANTIDADE = prq.CODQUANTIDADE
	LEFT JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
	LEFT JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
	{$where}
        GROUP BY q.CODQUANTIDADE
	ORDER BY produtos.REFERENCIA, q.ORDEM ASC");


        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {

                if ($rows->QUANTIDADE != 0 && $rows->PRECO_UNITARIO != 0) {
                    $fator = ($rows->PRECO_UNITARIO * $rows->QUANTIDADE);
                    $d["PRECO_COMPRA"] = $fator;
                    $this->update_produto($d, $rows->CODPRODUTO);
                    $rows->PRECO_COMPRA = $fator;
                } else if ($rows->PRECO_UNITARIO == 0 || $rows->QUANTIDADE == 0) {
                    $d["PRECO_COMPRA"] = 0;
                    $this->update_produto($d, $rows->CODPRODUTO);
                    $rows->PRECO_COMPRA = "";
                }

                $rows->NOME = utf8_encode($rows->NOME);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_COMPRA = $c->formataReais($rows->PRECO_COMPRA);
                $rows->DE = $c->formataReais($rows->DE);
                $rows->PRECO_UNITARIO = $c->formataReais($rows->PRECO_UNITARIO);

                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function select_mais_vendidos_site() {

        $query = $this->db->query("SELECT count(*) as MAIS_VENDIDOS, p.*, DATE_FORMAT( p.DTA, '%d/%m/%Y - %Hh%i' ) as DTA, f.CROP80,
CASE p.CATEGORIA 
WHEN 'junior' THEN 'Junior'
WHEN 'nilton-santos' THEN 'Nilton Santos'
ELSE 'Junior' 
END AS CATEGORIA
FROM compras c
INNER JOIN produtos p ON p.CODPRODUTO=c.CODPRODUTO
INNER JOIN fotos_rel_produtos fr ON fr.CODPRODUTO=p.CODPRODUTO
INNER JOIN fotos f ON fr.CODFOTO=f.CODFOTO
WHERE f.DESTAQUE=1
GROUP BY c.CODPRODUTO
ORDER BY (count(*)+0) DESC");


        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {

                if ($rows->QUANTIDADE != 0 && $rows->PRECO_UNITARIO != 0) {
                    $fator = ($rows->PRECO_UNITARIO * $rows->QUANTIDADE);
                    $d["PRECO_COMPRA"] = $fator;
                    $this->update_produto($d, $rows->CODPRODUTO);
                    $rows->PRECO_COMPRA = $fator;
                } else if ($rows->PRECO_UNITARIO == 0 || $rows->QUANTIDADE == 0) {
                    $d["PRECO_COMPRA"] = 0;
                    $this->update_produto($d, $rows->CODPRODUTO);
                    $rows->PRECO_COMPRA = "";
                }

                $rows->NOME = utf8_encode($rows->NOME);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->PRECO_COMPRA = $c->formataReais($rows->PRECO_COMPRA);
                $rows->DE = $c->formataReais($rows->DE);
                $rows->PRECO_UNITARIO = $c->formataReais($rows->PRECO_UNITARIO);
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function select_produtos_all_search($search) {

        $search = addslashes($search);

        $c = new Controller();

        $nome = "%{$search}%";
        $url_amigavel = "%{$search}%";
        $categoria = "%{$search}%";
        $quantidade = "%{$search}%";
        $preco = "%" . $c->limpaValorReal($search) . "%";
        $dta = "%" . $c->formataDataForUSA($search) . "%";
        $referencia = "%" . $search . "%";

        $query = $this->db->prepare("SELECT produtos.*, DATE_FORMAT( produtos.DTA, '%d/%m/%Y - %Hh%i' ) as DTA, CASE produtos.CATEGORIA 
                WHEN 'junior' THEN 'Junior'
                WHEN 'nilton-santos' THEN 'Nilton Santos'
                ELSE 'Junior' 
                END AS CATEGORIA,
                fotos.CROP80
                FROM produtos 
                LEFT JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
                LEFT JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
                WHERE produtos.NOME LIKE :NOME
                OR produtos.URL_AMIGAVEL LIKE :URL_AMIGAVEL
                OR produtos.CATEGORIA LIKE :CATEGORIA
                OR produtos.QUANTIDADE LIKE :QUANTIDADE
                OR produtos.PRECO LIKE :PRECO
                OR produtos.DTA LIKE :DTA
                OR produtos.REFERENCIA LIKE :REFERENCIA
                ORDER BY (produtos.REFERENCIA) ASC");

        $query->bindParam(":NOME", $nome, PDO::PARAM_STR, 255);
        $query->bindParam(":URL_AMIGAVEL", $url_amigavel, PDO::PARAM_STR, 255);
        $query->bindParam(":CATEGORIA", $categoria, PDO::PARAM_STR, 255);
        $query->bindParam(":QUANTIDADE", $categoria, PDO::PARAM_STR, 255);
        $query->bindParam(":PRECO", $preco, PDO::PARAM_STR, 255);
        $query->bindParam(":REFERENCIA", $referencia, PDO::PARAM_STR, 255);
        $query->bindParam(":DTA", $dta, PDO::PARAM_STR, 255);

        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {

                if ($rows->QUANTIDADE != 0 && $rows->PRECO_UNITARIO != 0) {
                    $fator = ($rows->PRECO_UNITARIO * $rows->QUANTIDADE);
                    $d["PRECO_COMPRA"] = $fator;
                    $this->update_produto($d, $rows->CODPRODUTO);
                    $rows->PRECO_COMPRA = $fator;
                } else if ($rows->PRECO_UNITARIO == 0 || $rows->QUANTIDADE == 0) {
                    $d["PRECO_COMPRA"] = 0;
                    $this->update_produto($d, $rows->CODPRODUTO);
                    $rows->PRECO_COMPRA = "";
                }

                $rows->NOME = utf8_encode($rows->NOME);
                $rows->PRECO = $c->formataReais($rows->PRECO);
                $rows->DE = $c->formataReais($rows->DE);
                $rows->PRECO_COMPRA = $c->formataReais($rows->PRECO_COMPRA);
                $rows->PRECO_UNITARIO = $c->formataReais($rows->PRECO_UNITARIO);
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function qnts_produtos_for_categoria($categoria) {

        $categoria = addslashes($categoria);

        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE CATEGORIA='{$categoria}'");
        $query->execute();
        return $query->rowCount();
    }

    public function existe_referencia($referencia) {

        $referencia = addslashes($referencia);

        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE REFERENCIA='{$referencia}'");
        $query->execute();
        return $query->rowCount();
    }

    public function calcula_imposto($percentual, $sobre_valor) {

        $percentual = addslashes($percentual);
        $sobre_valor = addslashes($sobre_valor);
        $sobre_valor = 0;
        $query = $this->db->query("SELECT SUM(ROUND({$sobre_valor}/{$percentual})-{$sobre_valor}) AS IMPOSTO;");
        $query->execute();

        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->IMPOSTO = $c->formataReais($rows->IMPOSTO);
                return $rows;
            }
        } else {
            return false;
        }
    }

    public function embalar_presente($client_hidden) {

        $client_hidden = addslashes($client_hidden);

        $query = $this->db->prepare("SELECT DISTINCT EMBALAR_PRESENTE FROM `lista_desejos` WHERE CLIENT_HIDDEN='{$client_hidden}'");
        $query->execute();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows->EMBALAR_PRESENTE;
            }
        } else {
            return false;
        }
    }

    public function update_embalar_presente(Array $dados, $client_hidden) {


        foreach ($dados as $n => $v) {
            $dados[$n] = addslashes($v);
        }

        $client_hidden = addslashes($client_hidden);

        $this->_tabela = "lista_desejos";
        $where = "CLIENT_HIDDEN='{$client_hidden}'";
        return $this->update($dados, $where);
    }

    public function num_de_qntdd_produtos() {
        $query = $this->db->prepare("SELECT p.* FROM produtos p
INNER JOIN produtos_rel_quantidades prq ON prq.CODPRODUTO=p.CODPRODUTO
INNER JOIN quantidades q ON prq.CODQUANTIDADE=q.CODQUANTIDADE
WHERE q.QUANTIDADE<=1");
        $query->execute();
        return $query->rowCount();
    }

    public function get_referencia_nome_produtos() {
        $query = $this->db->prepare("SELECT p.REFERENCIA, p.NOME, q.QUANTIDADE FROM produtos p
INNER JOIN produtos_rel_quantidades prq ON prq.CODPRODUTO=p.CODPRODUTO
INNER JOIN quantidades q ON prq.CODQUANTIDADE=q.CODQUANTIDADE
WHERE q.QUANTIDADE<=1 ORDER BY p.REFERENCIA ASC");
        $query->execute();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $rows->NOME = utf8_encode($rows->NOME);
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function search_sugestao($search) {

        $search = addslashes($search);

        if ($search == "") {
            return false;
        } else {
            $query = $this->db->query("SELECT NOME, CATEGORIA, URL_AMIGAVEL  FROM produtos WHERE (NOME LIKE '%{$search}%' OR REFERENCIA LIKE '%{$search}%') AND STATUS=1 ORDER BY RAND() ASC LIMIT 0,10");
            $query->execute();
            if ($query->rowCount()) {
                while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                    $rows->NOME = utf8_encode($rows->NOME);
                    $dados[] = $rows;
                }
                return $dados;
            } else {
                return false;
            }
        }
    }

    public function preco_6x($preco) {

        $c = new Controller();
        (int) $preco = $c->limpaValorReal($preco);

        $query = $this->db->query("SELECT ROUND({$preco}/6) AS PRECO;");
        $query->execute();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $c->formataReais($rows->PRECO);
            }
        } else {
            return false;
        }
    }

}