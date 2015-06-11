<?php

class System {

    private $_url;
    public $controller;
    public $action;
    private $controller_url = CONTROLLERS;
    private $system_url = SYSTEM;
    private $models_url = MODELS;
    private $libraries_url = LIBRARIES;
    private $helpers_url = HELPERS;
    private $site = SITE;
    private $arquivos = array("model", "Smarty.class", "Smarty", "controller", "Conta_Model", "HTML_Model", "Produtos_Model", "Cadastro_Model", "Pedido_Model", "Informacoes_Model", "Admin_Model", "Atendimento_Model", "Nota_Fiscal_Model", "Wishlist_Model", "PHPExcel/Classes/PHPExcel", "AntiXSS", "MPDF57/mpdf", "Avaliacao_Model", "Mail-1.1.14/Mail", "Mail_Mime-1.8.8/Mail/mime");

    public function __construct() {
        $this->setURL();
        $this->setSeparator();
        $this->loadControlls();
        //$this->setParameters();
    }

    private function setURL() {
        $_GET["url"] = (strlen($_GET["url"]) == 3 && $_GET["url"] != "404/" && $_GET["url"] != "404" && $_GET["url"] != "403/" && $_GET["url"] != "403") ? $_GET["url"] . "index/index_action/" : $_GET["url"] . "/";
        $this->_url = $_GET["url"];
    }

    private function setSeparator() {
        $separator = explode("/", $this->_url);
        
        if( $separator[2] == "sort" || $separator[2] == "search"){
            $separator[2] = $separator[1];
            $separator[1] = "categoria";            
        } else if( $separator[0] == "404" || $separator[0] == "403"){ 
           $separator[1] = "error";
           $separator[2] = "error_".$separator[0];            
        } else {
            if( $separator[1] == "nilton-santos" || $separator[1] == "junior" || $separator[1] == "nossos-produtos" ){ 
                if( $separator[2] == ""){
                    $separator[2] = $separator[1];
                    $separator[1] = "categoria";

                } else {
                    $separator[1] = "descricao";
                    $separator[2] = "categoria";
                }            
            } 
        }

        $separator[1] = str_replace("-", "_", $separator[1]);
        $this->controller = $separator[1];        
        $separator[2] = str_replace("-", "_", $separator[2]);
        $this->action = ( $separator[2] == null || $separator[2] == "index" ) ? $separator[2] = "index_action" : $separator[2];
    }

    private function loadControlls() {
        if (file_exists($this->controller_url . $this->controller . "Controller.php")) {
            $this->__autoload($this->arquivos);
            require_once( $this->controller_url . $this->controller . "Controller.php" );
        } else {
            echo "<script>window.location='" . PROTOCOLO . SITE . SOURCE . "404/'</script>";
            exit();
        }
    }

    public function __autoload(Array $files) {
        $size = sizeof($files);

        if ($size != 0) {
            foreach ($files as $filename) {
                
                if (file_exists($this->models_url . $filename . ".php")) {
                    require_once( $this->models_url . $filename . ".php" );
                } elseif (file_exists($this->system_url . $filename . ".php")) {
                    require_once( $this->system_url . $filename . ".php" );
                } elseif (file_exists($this->libraries_url . $filename . ".php")) {
                    require_once( $this->libraries_url . $filename . ".php" );
                } elseif (file_exists($this->helpers_url . $filename . ".php")) {
                    require_once( $this->helpers_url . $filename . ".php" );
                }
            }
        }
    }
    
//    public function __helpers(Array $files) {
//        $size = sizeof($files);
//        if ($size != 0) {
//            foreach ($files as $filename) {
//                
//            }
//        }
//    }

}
