<?php

class Controller extends My_smarty {

    private $_params;
    private $_url;

    protected function view($nome, $vars = null) {
        if (is_array($vars) && count($vars) > 0) {
            extract($vars, EXTR_PREFIX_ALL, "view");
            return require_once( VIEWS . $nome . ".phtml");
            exit();
        }
    }

    protected function view_pdf($nome, $vars = null) {

        if (is_array($vars) && count($vars) > 0) {
            extract($vars, EXTR_PREFIX_ALL, "view");

            ob_start();
            require_once( VIEWS . $nome . ".phtml");
            $html = ob_get_clean();
            return $html;
            exit();
        }
    }

    protected function view_email($nome, $vars = null) {
        ob_start();
        require( VIEWS . $nome . ".phtml");
        $email = ob_get_clean();
        $_SERVER['EMAIL_HTML'] = $email;

        return $email;
        exit();
    }

    protected function view_email_print($nome, $vars = null) {

        if (is_array($vars) && count($vars) > 0) {
            extract($vars, EXTR_PREFIX_ALL, "view");
            ob_start();
            require_once( VIEWS . $nome . ".phtml");
            $html = ob_get_clean();
            return $html;
            exit();
        }
    }

    private function setURL() {
        $_GET["url"] = (isset($_GET["url"])) ? $_GET["url"] . "/" : "index/index_action";
        $this->_url = $_GET["url"];
    }

    public function array_url() {
        $separator = explode("/", $_GET["url"]);
        unset($separator[0], $separator[1], $separator[2]);
        if (sizeof($separator) != 0) {
            foreach ($separator as $name => $value) {
                if ($value != "") {
                    $arr[] = $value;
                }
            }
            return $arr;
        } else {
            return false;
        }
    }

    private function setParameters() {

        $separator = explode("/", $this->_url);

        unset($separator[0], $separator[1]);

        if (sizeof($separator) % 2 == 1) {
            array_pop($separator);
        }

        $count = 0;
        if (!empty($separator)) {
            foreach ($separator as $val) {
                ( $count % 2 == 0) ? $inds[] = $val : $values[] = $val;

                $count++;
            }
        } else {
            $inds = array();
            $values = array();
        }

        if ((count($inds) == count($values)) && (!empty($inds) && !empty($values))) {
            $this->_params = array_combine($inds, $values);
        } else {
            $this->_params = array();
        }
    }

    public function getParameters($name = null) {
        if ($name == null) {
            return $this->_params;
        } else {
            return $this->_params[$name];
        }
    }

    public function run() {

        $this->setURL();
        $this->setParameters();
    }

    public function getEndereco($cep) {
        include('phpQuery-onefile.php');
        $cep = str_replace("-", "", $cep);
        define('POSTURL', 'http://m.correios.com.br/movel/buscaCepConfirma.do');
        define('POSTVARS', 'cepEntrada=' . $cep . '&metodo=buscarCep');  // POST VARIABLES TO BE SENT

        $ch = curl_init(POSTURL);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, POSTVARS);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);  // DO NOT RETURN HTTP HEADERS
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // RETURN THE CONTENTS OF THE CALL
        $html = curl_exec($ch);

        phpQuery::newDocumentHTML($html, $charset = 'utf-8');

        $dados = array(
            'Logradouro' => trim(pq('.caixacampobranco .resposta:contains("Logradouro: ") + .respostadestaque:eq(0)')->html()),
            'Bairro' => trim(pq('.caixacampobranco .resposta:contains("Bairro: ") + .respostadestaque:eq(0)')->html()),
            'Cidade/uf' => trim(pq('.caixacampobranco .resposta:contains("Localidade / UF: ") + .respostadestaque:eq(0)')->html()),
            'Cep' => trim(pq('.caixacampobranco .resposta:contains("CEP: ") + .respostadestaque:eq(0)')->html())
        );

        $dados['Cidade/uf'] = explode('/', $dados['Cidade/uf']);
        $dados['Cidade'] = trim($dados['Cidade/uf'][0]);
        $dados['UF'] = trim($dados['Cidade/uf'][1]);
        unset($dados['Cidade/uf']);

        $dados["Logradouro"] = htmlentities(utf8_decode($dados["Logradouro"]));
        $dados["Bairro"] = htmlentities(utf8_decode($dados["Bairro"]));
        $dados["Cep"] = htmlentities(utf8_decode($dados["Cep"]));
        $dados["Cidade"] = htmlentities(utf8_decode($dados["Cidade"]));
        $dados["UF"] = htmlentities(utf8_decode($dados["UF"]));

        curl_close($ch);
        return $dados;
    }

    public function getPrimarykey() {
        return strtoupper(md5(uniqid(rand(), true)));
    }

    public function senhaMd5($senha) {
        return strtoupper(md5($senha));
    }

    public function url_amigavel($name) {

        $name = strtolower(trim($name));
//        $name = str_replace(".", " ", $name);
//        $name = str_replace(",", " ", $name);
//        $name = str_replace(";", " ", $name);
//        $name = str_replace("@", " ", $name);
//        $name = str_replace("!", " ", $name);
//        $name = str_replace("?", " ", $name);
        $name = str_replace("/", " ", $name);
        $name = str_replace("'", " ", $name);
        $name = str_replace('"', " ", $name);
        $name = str_replace("-", " ", $name);
        $name = str_replace(";", " ", $name);
        $name = str_replace(",", " ", $name);
        $name = str_replace("á", "a", $name);
        $name = str_replace("ã", "a", $name);
        $name = str_replace("â", "a", $name);
        $name = str_replace("à", "a", $name);
        $name = str_replace("é", "e", $name);
        $name = str_replace("ê", "e", $name);
        $name = str_replace("í", "i", $name);
        $name = str_replace("ó", "o", $name);
        $name = str_replace("õ", "o", $name);
        $name = str_replace("ô", "o", $name);
        $name = str_replace("ú", "u", $name);
        $name = str_replace("ç", "c", $name);
        $name = preg_replace("/\s{2,}/", " ", $name);
        $name = preg_replace("/[\[\]\^\$\.\|\?\*\+\(\)\\\~\`\!@#%&\-\_\+\=\{\}\'\"\"\<\>\:\;\, ]{1,}/", " ", $name);
        $name = str_replace(" ", "-", $name);
        return $name;
    }

    public function iniciais($nome) {
        $nome = str_replace("-", "", $nome);
        $nome = str_replace("/", "", $nome);
        $nome = preg_replace("/\s{2,}/", " ", $nome);
        $n = explode(" ", $nome);
        $iniciais = "";

        foreach ($n as $in => $value) {
            if ($value != "") {
                $vl = mb_strtoupper($value, "UTF-8");
                if (mb_strlen($vl, "UTF-8") > 2) {
                    $iniciais .= $vl{0};
                }
            }
        }

        return preg_replace('/([A-Za-z])\1/', '\1', $iniciais);
    }

    public function trata_nome($nome) {
        $n = explode(" ", $nome);
        $newname = "";

        foreach ($n as $in => $value) {

            if (mb_strlen($value, "UTF-8") <= 2) {
                $newname .= mb_strtolower($value, "UTF-8") . " ";
            } else {
                $vl = mb_strtoupper($value{0}, "UTF-8");
                $vl2 = mb_strtolower(substr($value, 1), "UTF-8");
                $newname .= $vl . $vl2 . " ";
            }
        }

        $newname = str_replace("S/a", "S/A", $newname);
        $newname = str_replace("s/A", "S/A", $newname);
        $newname = str_replace("s/a", "S/A", $newname);
        $newname = str_replace("S/A", "S/A", $newname);
        $newname = str_replace("S.A", "S/A", $newname);
        $newname = str_replace("s.A", "S/A", $newname);
        $newname = str_replace("S.a", "S/A", $newname);
        $newname = str_replace("s.a", "S/A", $newname);

        return trim($newname);
    }

    public function permitir_acesso($email, $senha, $papel = null) {
        $model = new Conta_Model();
        if ($model->confere_senha($email, $senha, $papel)) {
            return true;
        } else {
            echo "<script>window.location='" . PROTOCOLO . SITE . SOURCE . "403/'</script>";
            exit();
        }
    }

    public function permitir_acesso_comprador() {
        if (strlen($_SESSION["CODCADASTRO"]) == 32) {
            return true;
        } else {
            echo "<script>window.location='" . PROTOCOLO . SITE . SOURCE . "403/'</script>";
            exit();
        }
    }

    public function permitir_acesso_comprador_redirect() {
        if (strlen($_SESSION["CODCADASTRO"]) == 32) {
            return true;
        } else {
            return false;
        }
    }

    public function saudacao() {
        $hora = (int) date("H");
        if ($hora >= 0 && $hora < 12) {
            return "Bom dia,";
        } else if ($hora >= 12 && $hora < 18) {
            return "Boa tarde,";
        } else {
            return "Boa noite,";
        }
    }

    public function formataReais($valorReal) {
        $size = strlen($valorReal);
        $result = null;
        if ($size >= 9) {
            //9.999.999,99                                                                         
            if ($size == 9) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -9, 1);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            } elseif ($size == 10) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -10, 2);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            } elseif ($size == 11) {
                $p1 = substr($valorReal, -2);
                $p2 = substr($valorReal, -5, 3);
                $p3 = substr($valorReal, -8, 3);
                $p4 = substr($valorReal, -11, 3);
                $result = $p4 . "." . $p3 . "." . $p2 . "," . $p1;
            }
            return $result;
        } elseif ($size == 8) {
            //999.999,99                                                                           
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -8, 3);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 7) {
            //99.999,99                                                                            
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -7, 2);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 6) {
            //9.999,99                                                                             
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $p3 = substr($valorReal, -6, 1);
            $result = $p3 . "." . $p2 . "," . $p1;
            return $result;
        } elseif ($size == 5) {
            //999,99                                                                               
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -5, 3);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 4) {
            //99,99                                                                                
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -4, 2);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 3) {
            //9,99                                                                                 
            $p1 = substr($valorReal, -2);
            $p2 = substr($valorReal, -3, 1);
            $result = $p2 . "," . $p1;
            return $result;
        } elseif ($size == 2) {
            //0,99                                                                                 
            $p1 = substr($valorReal, -2);
            $result = "0," . $p1;
            return $result;
        }

        return false;
    }

    public function formataCodigopedido($codigo) {
        switch (strlen($codigo)) {
            case 1: $codigo = "000000000{$codigo}";
                break;
            case 2: $codigo = "00000000{$codigo}";
                break;
            case 3: $codigo = "0000000{$codigo}";
                break;
            case 4: $codigo = "000000{$codigo}";
                break;
            case 5: $codigo = "00000{$codigo}";
                break;
            case 6: $codigo = "0000{$codigo}";
                break;
            case 7: $codigo = "000{$codigo}";
                break;
            case 8: $codigo = "00{$codigo}";
                break;
            case 9: $codigo = "0{$codigo}";
                break;
        }
        return $codigo;
    }

    public function limpaValorReal($valor) {
        $valor = str_replace(",", "", $valor);
        $valor = str_replace(".", "", $valor);
        return $valor;
    }

    /*
     * Tranforma datas do padrao Americano(2000-01-01) para o padrao brasileiro(01-01-2000)        
     */

    public function formataDataForBrazil($data) {
        $dtaFormatada = $data;
        $pieces = explode("-", $dtaFormatada);
        $pieces[0];
        $pieces[1];
        $pieces[2];
        $newDate = $pieces[2] . "/" . $pieces[1] . "/" . $pieces[0];
        return $newDate;
    }

    /*
     * Tranforma datas do padrao brasileiro(01-01-2000) para o padrao Americano(2000-01-01)        
     */

    public function formataDataForUSA($data) {
        $dtaFormatada = $data;
        $pieces = explode("/", $dtaFormatada);
        $pieces[0];
        $pieces[1];
        $pieces[2];
        $newDate = $pieces[2] . "-" . $pieces[1] . "-" . $pieces[0];
        return $newDate;
    }

    public function limpaCodigopedido($codigo) {
        return (int) $codigo;
    }

    public function validaCPF($cpf) {
        $cpf = $this->limpaCpf($cpf);

        // Verifiva se o n˙mero digitado contÈm todos os digitos                                   
        $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

        // Verifica se nenhuma das sequÍncias abaixo foi digitada, caso seja, retorna falso        
        // if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
            return false;
        } else {   // Calcula os n˙meros para verificar se o CPF È verdadeiro                             
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }

                $d = ((10 * $d) % 11) % 10;

                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }

    public function validaCNPJ($cnpj) {

        $cnpj = $this->limpaCpf($cnpj);

        if (strlen($cnpj) <> 14 || $cnpj == '00000000000000' || $cnpj == '11111111111111' || $cnpj == '22222222222222' || $cnpj == '33333333333333' || $cnpj == '44444444444444' || $cnpj == '55555555555555' || $cnpj == '66666666666666' || $cnpj == '77777777777777' || $cnpj == '88888888888888' || $cnpj == '99999999999999')
            return false;

        $soma = 0;

        $soma += ($cnpj[0] * 5);
        $soma += ($cnpj[1] * 4);
        $soma += ($cnpj[2] * 3);
        $soma += ($cnpj[3] * 2);
        $soma += ($cnpj[4] * 9);
        $soma += ($cnpj[5] * 8);
        $soma += ($cnpj[6] * 7);
        $soma += ($cnpj[7] * 6);
        $soma += ($cnpj[8] * 5);
        $soma += ($cnpj[9] * 4);
        $soma += ($cnpj[10] * 3);
        $soma += ($cnpj[11] * 2);

        $d1 = $soma % 11;
        $d1 = $d1 < 2 ? 0 : 11 - $d1;

        $soma = 0;
        $soma += ($cnpj[0] * 6);
        $soma += ($cnpj[1] * 5);
        $soma += ($cnpj[2] * 4);
        $soma += ($cnpj[3] * 3);
        $soma += ($cnpj[4] * 2);
        $soma += ($cnpj[5] * 9);
        $soma += ($cnpj[6] * 8);
        $soma += ($cnpj[7] * 7);
        $soma += ($cnpj[8] * 6);
        $soma += ($cnpj[9] * 5);
        $soma += ($cnpj[10] * 4);
        $soma += ($cnpj[11] * 3);
        $soma += ($cnpj[12] * 2);


        $d2 = $soma % 11;
        $d2 = $d2 < 2 ? 0 : 11 - $d2;

        if ($cnpj[12] == $d1 && $cnpj[13] == $d2) {
            return true;
        } else {
            return false;
        }
    }

    /*
     * Limpa cpf                                                                                   
     */

    public function limpaCpf($cpf) {
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        return $cpf;
    }

    /*
     * Limpa cpf                                                                                   
     */

    public function limpaCnpj($cnpj) {
        $cnpj = str_replace(".", "", $cnpj);
        $cnpj = str_replace("-", "", $cnpj);
        $cnpj = str_replace("/", "", $cnpj);
        return $cnpj;
    }

    public function formataCpf($cpf) {
        $p1 = substr($cpf, -2);
        $p2 = substr($cpf, -5, 3);
        $p3 = substr($cpf, -8, 3);
        $p4 = substr($cpf, -11, 3);
        $result = "{$p4}.{$p3}.{$p2}-{$p1}";
        return $result;
    }

    public function formataCnpj($cnpj) {
        $p1 = substr($cnpj, -2);
        $p2 = substr($cnpj, -6, 4);
        $p3 = substr($cnpj, -9, 3);
        $p4 = substr($cnpj, -12, 3);
        $p5 = substr($cnpj, -14, 2);
        $result = "{$p5}.{$p4}.{$p3}/{$p2}-{$p1}";
        return $result;
    }

    #https://code.google.com/p/xssprotect/
    #https://code.google.com/p/php-antixss/
    #https://gist.github.com/mbijon/1098477/download#
    #http://resources.infosecinstitute.com/how-to-prevent-cross-site-scripting-attacks/

    public function xss_clean($data) {
        // Fix &entity\n;
        $data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do {
            // Remove really unwanted tags
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        } while ($old_data !== $data);


        // we are done...
        return $data;
    }

    public function slug($string, $separator = '-') {
        $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
        $special_cases = array(
            '&' => 'and'
        );
        $string = mb_strtolower(trim($string), 'UTF-8');
        $string = str_replace(array_keys($special_cases), array_values($special_cases), $string);
        $string = preg_replace($accents_regex, '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'));
        $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
        $string = preg_replace("/[$separator]+/u", "$separator", $string);
        $string = trim($string, '-');
        return $string;
    }

    public function tres_palavras($frase) {



//        $frase = str_replace(" a ", "", $frase);
//        $frase = str_replace(" ante", "", $frase);
//        $frase = str_replace(" até", "", $frase);
//        $frase = str_replace(" após", "", $frase);
//        $frase = str_replace(" de", "", $frase);
//        $frase = str_replace(" desde", "", $frase);
//        $frase = str_replace(" em", "", $frase);
//        $frase = str_replace(" entre", "", $frase);
//        $frase = str_replace(" com", "", $frase);
//        $frase = str_replace(" contra", "", $frase);
//        $frase = str_replace(" para", "", $frase);
//        $frase = str_replace(" por", "", $frase);
//        $frase = str_replace(" perante", "", $frase);
//        $frase = str_replace(" sem", "", $frase);
//        $frase = str_replace(" sob", "", $frase);
//        $frase = str_replace(" sobre", "", $frase);
//        $frase = str_replace(" o", "", $frase);
//        $frase = str_replace(" das", "", $frase);
//        $frase = str_replace(" nas", "", $frase);
//        $frase = str_replace(" nele", "", $frase);
//        $frase = str_replace(" neles", "", $frase);
//        $frase = str_replace(" dali", "", $frase);
//        $frase = str_replace(" dele", "", $frase);
//        $frase = str_replace(" deles", "", $frase);
//        $frase = str_replace(" à", "", $frase);
//        $frase = str_replace(" às", "", $frase);
//        $frase = str_replace(" àquele", "", $frase);
//        $frase = str_replace(" àqueles", "", $frase);
//        $frase = str_replace(" àquela", "", $frase);
//        $frase = str_replace(" àquelas", "", $frase);
//        $frase = str_replace(" àquelo", "", $frase);
//        $frase = str_replace(" ao", "", $frase);

        $peace = explode(" ", $frase);

        $i = 0;
        foreach ($peace as $v) {
            if (strlen($v) == 2 || strlen($v) == 3) {
                unset($peace[$i]);
            } else {
                $peace[$i] = $v;
                $i++;
            }
        }

        $texto = "{$peace[0]} {$peace[1]} {$peace[2]}";
        return $texto; //." ".$peace[1]." ".$peace[2];
    }

    public function disparar_emailGoogleAppsText($to, $from, $subject, $body) {
        // Servidor do Gmail. Este servidor é padrão.
        $host = "ssl://smtp.gmail.com";

        // Email do Gmail que fará o envio autenticado. Digite neste campo o seu e-mail que será responsável pelo envio dos e-mails 
        $username = "webmaster@estilocarioca.com.br";

        // Sua senha do GMAIL
        $password = "ggix38id";

        $headers = array('From' => $from,
            'To' => $to,
            'Subject' => $subject);

        $smtp = Mail::factory('smtp', array('host' => $host,
                    'port' => 465, // SMTPS(para mais detalhes ver /etc/services
                    'auth' => true,
                    'debug' => false, // Debug ligado
                    'username' => $username,
                    'password' => $password)
        );

        // Efetuando o envio autenticado
        $mail = $smtp->send($to, $headers, $body);

        // Verificando se houve erro
        if (PEAR::isError($mail)) {
            // echo("Error" . $mail->getMessage());
            return false;
        } else {
            // echo("Email enviado com sucesso!!");
            return true;
        }
    }

    public function disparar_emailGoogleAppsHTML($to, $to_name = FALSE, $from, $subject, $body, $cc = FALSE) {

        if ($to_name) {
            $recipients = "Estilo Carioca <{$to}>";
        } else {
            $recipients = $to;
        }

        $headers = array('From' => "Estilo Carioca <{$from}>",
            'To' => $to,
            'Subject' => $subject);

        $headers['Reply-To'] = "Estilo Carioca <{$from}>";
        
        if($cc){
            $headers['Cc'] = $cc;
        }
        
        $crlf = "\r\n";

        $html = $body;

        $mime = new Mail_mime($crlf);
        $mime->setHTMLBody($html);

        $mime_params = array(
            'text_encoding' => '7bit',
            'text_charset' => 'UTF-8',
            'html_charset' => 'UTF-8',
            'head_charset' => 'UTF-8'
        );

        $body = $mime->get($mime_params);
        $headers = $mime->headers($headers);

        $host = "ssl://smtp.gmail.com";
        $username = "webmaster@estilocarioca.com.br";
        $password = "ggix38id";

        $params = array(
            'MIME-Version' => "1.1",
            'Content-type' => "text/html; charset=UTF-8",
            'port' => 465,
            'auth' => true,
            'host' => $host,
            'username' => $username,
            'password' => $password
        );

        $mail_object = & Mail::factory('smtp', $params);

        $result = $mail_object->send($recipients, $headers, $body);
        if (PEAR::IsError($result)) {
            #echo "ERRO ao tentar enviar o email. (" . $result->getMessage() . ")";
            return false;
        } else {
            return true;
        }
    }

}