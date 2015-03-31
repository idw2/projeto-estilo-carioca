<?php

Class Error extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->run();
    }

    public function error_404() {
        $this->assign("language", LANGUAGE);
        $this->assign("page", "404");
        $this->assign("title", TITLE . "Página inexistente!");
        $this->view_tpl("404");
    }

    public function error_403() {
        $this->assign("language", LANGUAGE);
        $this->assign("page", "403");
        $this->assign("title", TITLE . "Acesso negado!");
        $this->view_tpl("403");
    }

}
