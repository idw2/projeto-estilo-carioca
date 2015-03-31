<?php

Class Descricao extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->run();

        $this->assign("facebook", FACEBOOK);
        $this->assign("instagram", INSTAGRAM);
        $this->assign("twitter", TWITTER);
        $this->assign("google_plus", GOOGLE_PLUS);
        $this->assign("papel", PAPEL);
        $this->assign("email_restricao", $_SESSION["EMAIL"]);
        $this->assign("protocolo", PROTOCOLO);
        $this->assign("source", SOURCE);
        $this->assign("web_files", WEB_FILES);
        $this->assign("meu_site", MEU_SITE);
        $this->assign("nome_logon", $_SESSION["NOME"]);
        $this->assign("email_logon", $_SESSION["EMAIL"]);
        $this->assign("cep_remetente", CEP_REMETENTE);
        $this->assign("saudacao", $this->saudacao());

        
        /*
         * INSTANCIAMOS A CLASSE PRODUTOS 
         */
        $lista_desejos = new Produtos_Model();
        /*
         * INSTANCIAMOS A CLASSE Wishlist 
         */
        $wishlist = new Wishlist_Model();

        /*
         * CHECA SE EXISTE UMA MATRIZ DE OBJETOS 
         */
        $wl = $wishlist->get_all_codquantidade(CLIENT_HIDDEN);
        if ($wl) {
            /*
             * ENTRA NO LOOP CARREGANDO TODOS OS CODQUANTIDADE
             */
            foreach ($wl as $wl_value) {

                $wl_arr[] = $wl_value->CODQUANTIDADE;
            }

            /*
             * GERA UM ARRAY DE OBJETOS OS PRODUTOS DESEJADO PELO CLIENTE
             */
//            $primeira_lista = $lista_desejos->get_drop_lista_desejos(null, CLIENT_HIDDEN);
            $primeira_lista = $lista_desejos->get_lista_desejos_recursiva(NULL, CLIENT_HIDDEN, $wl_arr);

            /*
             * CASO ESTE ARRAY EXISTA SEGUE O PROXIMO PASSO
             */
            if ($primeira_lista) {

                /*
                 * CRIAMOS UM ARREY PARA SALVAR INFORMACOES DO OBJETO INTERADO PELA PRIMEIRA LISTAGEM
                 */
                $array_primeira_interacao = array();
                /*
                 * FAZENDO A INTERACAO COM A PRIMEIRA LISTA DE DESEJOS
                 */
                foreach ($primeira_lista as $pl) {

                    /*
                     * COMPARA SE A QUANTIDADE DE PRODUTOS SOLICITADOS E MAIOR DO EXISTENTE EM ESTOQUE
                     */

                    if ($pl->QUANTIDADE > $pl->QUANTIDADE_EXISTENTE) {

                        /*
                         * MONTA UM NOVO ARRAY TEMPORARIO PARA SALVAR AS NOVAS INFORMACOES
                         */
                        $new['CODLISTADESEJOS'] = $this->getPrimarykey();
                        $new['CLIENT_HIDDEN'] = CLIENT_HIDDEN;
                        $new['CODPRODUTO'] = $pl->CODPRODUTO;
                        $new['QUANTIDADE'] = $pl->QUANTIDADE_EXISTENTE;
                        $new['CODQUANTIDADE'] = $pl->CODQUANTIDADE;
                        /*
                         * DELETA O DESEJO COM A QUANTIDADE DE PRODUTOS ERRADO
                         */
                        $lista_desejos->del_row_wishlist($new['CODQUANTIDADE'], $new['CLIENT_HIDDEN']);
                        /*
                         * SALVA NOVA LISTA DE DESEJOS
                         */
                        $lista_desejos->add_lista_desejos($new);
                        /*
                         * MATA O ARRAY TEMPORARIO
                         */
                        unset($new);
                    }
                    /*
                     * SALAVA O OBJETO NA PRIMEIRA INTERACAO
                     */
                    $array_primeira_interacao[] = $pl;
                    $distinct[] = $pl;
                    
                }
                /*
                 * SEGUNDA INTERACAO
                 */
                //$segunda_lista = $lista_desejos->get_drop_lista_desejos(null, CLIENT_HIDDEN);
                $segunda_lista = $lista_desejos->get_lista_desejos_recursiva(NULL, CLIENT_HIDDEN, $wl_arr);
                /*
                 * CRIAMOS UM ARREY PARA SALVAR INFORMACOES DO OBJETO INTERADO PELA SEGUNDA LISTAGEM
                 */
                $array_segunda_interacao = array();
                $i = 0;
                foreach ($segunda_lista as $sl) {
                    /*
                     * CRIAMOS UM OBJETO TEMPORARIO PARA COMPARACAO COM A SEGUNDA INTERACAO
                     */
                    $obj_tmp = $array_primeira_interacao[$i];
                    /*
                     * REALIZA A MESMA CHECAGEM COM A INTERACAO ANTERIOS
                     */
                    if ($obj_tmp->QUANTIDADE > $obj_tmp->QUANTIDADE_EXISTENTE) {
                        /*
                         * SALVA NO SEGUNDO ARRAY A MENSAGEM DE ALERTA
                         */
                        if ($obj_tmp->QUANTIDADE_EXISTENTE == 1) {
                            $sl->ALERT = "Apenas 1 item disponivel para venda!";
                        } else {
                            $sl->ALERT = "Apenas {$obj_tmp->QUANTIDADE_EXISTENTE} itens disponivel para venda!";
                        }
                        /*
                         * MATA O OBJETO TEMPORARIO
                         */
                        unset($obj_tmp);
                    }
                    /*
                     * SALAVA O OBJETO NA PRIMEIRA INTERACAO
                     */
                    $array_segunda_interacao[] = $sl;
                    $i++;
                }

                /*
                 * CRIA UM ARRAY PASSANDO O RESULTADO PARA O OBJETO SMARTY
                 */
                $this->assign("ld", $array_segunda_interacao);
                $nenhum_produto = false;
            } else {
                /*
                 * SE NÃO EXISTIR NADA NA LISTA DE DESEJOS EXIBE QUE O CARRINHO ESTA VAZIO
                 */
                $this->assign("nenhum_produto", true);
                $nenhum_produto = true;
            }
        }





        /*
         * CARREGA O TOTAL GERAL EM UM OBJETO E SALVA VARIAVEL SMARTY
         */
        $total_geral = $lista_desejos->get_total_geral_lista_desejos(CLIENT_HIDDEN);
        if ($total_geral) {
            $this->assign("total_geral", $total_geral->TOTAL_GERAL);
        }
        /*
         * CARREGA O TOTAL DO PRODUTOS EM UM OBJETO E SALVA VARIAVEL SMARTY
         */
        $total_produtos = $lista_desejos->get_total_produtos_lista_desejos(CLIENT_HIDDEN);
        if ($total_produtos) {
            $this->assign("total_produtos", $total_produtos->TOTAL_PRODUTOS);
        }
        /*
         * CARREGA O TOTAL DE PESO EM UM OBJETO E SALVA VARIAVEL SMARTY
         */
        $total_peso = $lista_desejos->get_total_peso_lista_desejos(CLIENT_HIDDEN);
        if ($total_peso) {
            $this->assign("total_peso", (float) $total_peso->TOTAL_PESO);
        }

        if (!$nenhum_produto) {
            /*
             * CARREGA O IMPOSTO SOBRE A COMPRA EM UM OBJETO E SALVA VARIAVEL SMARTY
             */
            $sobre_valor = str_replace(",", "", $total_geral->TOTAL_GERAL);
            $sobre_valor = str_replace(".", "", $sobre_valor);

            $imposto = $lista_desejos->calcula_imposto(IMPOSTO, $sobre_valor);
            $this->assign("imposto", IMPOSTO);

            if ($imposto) {
                $this->assign("sobre_valor", $imposto->IMPOSTO);
            }

            $sem_impostos = str_replace(".", "", $imposto->IMPOSTO);
            $sem_impostos = str_replace(",", "", $sem_impostos);

            $this->assign("sem_impostos", $this->formataReais(($sobre_valor - $sem_impostos)));

            $bonus = $this->formataReais(round($sobre_valor / BONUS) - $sobre_valor);
            $this->assign("bonus", $bonus);
        }

        /*
         * CARREGA OS PARAMETROS DA LOJA JUNTO A CIELO E SALVA VARIAVEL SMARTY
         * OS PARAMETROS CIELO ESTAO INFORMADO NA INDEX DO PROJETO EM VARIAVEIS GLOBAIS
         */
        $this->assign("CIELO_N", CIELO_N);
        $this->assign("CIELO_KEY", CIELO_KEY);
        $this->assign("CIELO_URL", CIELO_URL);
        $this->assign("site", PROTOCOLO . SITE . SOURCE);

        $cts = new Conta_Model();
        $this->assign("existe_aniversariantes", $cts->existe_aniversariantes());

        $eame = new Produtos_Model();
        $this->assign("existe_avise_me", $eame->existe_avise_me());
        $this->assign("num_de_qntdd_produtos", $eame->num_de_qntdd_produtos());
        $this->assign("existe_novos_produtos_cadastrados", $eame->existe_novos_produtos_cadastrados());
    }

    public function index_action() {
        $this->produtos_lista();
    }

    public function categoria() {

        $params = $this->array_url();
       
        $params[0] = AntiXSS::setEncoding($this->xss_clean($params[0]), "UTF-8");
        $params[1] = AntiXSS::setEncoding($this->xss_clean($params[1]), "UTF-8");
        $params[2] = AntiXSS::setEncoding($this->xss_clean($params[2]), "UTF-8");


        $url = explode("/", $_GET["url"]);

        $categoria = ( $params[0] == "") ? $url[1] : $params[0];
        $url_amigavel = ( $params[1] == "") ? $url[2] : $params[1];
        $abas = $params[2];

        if ($abas == "" || $abas == null) {
            $abas = "mais_informacoes";
        }

        $this->assign("page", $categoria);
        $this->assign("ctgr", $categoria);

        $model = new Produtos_Model();

        $produto = $model->get_produto($url_amigavel);
        $produto->NOME = utf8_encode($produto->NOME);
        $this->assign("total_parcial", $produto->PRECO);
        $this->assign("total_impostos", 0);
        $produto->PRECO = $this->formataReais($produto->PRECO);
        $produto->DE = $this->formataReais($produto->DE);
        $categoria_default = $produto->CATEGORIA;

        switch ($produto->CATEGORIA) {
            case "junior": $produto->CATEGORIA = "Junior";
                break;
            case "nilton-santos": $produto->CATEGORIA = "Nilton Santos";
                break;
        }

        $rotulos = $model->select_rotulo($produto->URL_AMIGAVEL);
 
        if ($rotulos) {
            $this->assign("rotulos", $rotulos);
        }

        $this->assign("codcadastro", $_SESSION["CODCADASTRO"]);
        $this->assign("url_amigavel", $url_amigavel);
        $this->assign("abas", $abas);
        $this->assign("codproduto", $produto->CODPRODUTO);
        $this->assign("dta", $produto->DTA);
        $this->assign("nome", $produto->NOME);
        $this->assign("url_amigavel", $produto->URL_AMIGAVEL);
        $this->assign("categoria", $produto->CATEGORIA);
        $this->assign("peso", (float) $produto->PESO);
        $this->assign("categoria_default", $categoria_default);
        $this->assign("preco", $produto->PRECO);
        $this->assign("preco_6", $model->preco_6x($produto->PRECO));
        $this->assign("linha_1", $produto->LINHA_1);
        $this->assign("linha_2", $produto->LINHA_2);
        $this->assign("linha_3", $produto->LINHA_3);
        $this->assign("is_promocao", $produto->IS_PROMOCAO);
        $this->assign("referencia", $produto->REFERENCIA);
        $this->assign("de", $produto->DE);
        $this->assign("ano", $produto->ANO);
        $this->assign("km", $produto->KM);
        $this->assign("cor", $produto->COR);
        $this->assign("combustivel", $produto->COMBUSTIVEL);
        $this->assign("portas", $produto->PORTAS);
        $this->assign("final_placa", $produto->FINAL_PLACA);
        $this->assign("carroceria", $produto->CARROCERIA);
        $this->assign("descricao", $produto->DESCRICAO);
        $this->assign("especificacoes", $produto->ESPECIFICACOES);
        $this->assign("destaque", $produto->DESTAQUE);
        $this->assign("ordem", $produto->ORDEM);
        $this->assign("quantidade", $produto->QUANTIDADE);
        $this->assign("status", $produto->STATUS);

        $fotos = $model->get_crop_770($url_amigavel, 1);
        if (is_array($fotos)) {
            foreach ($fotos as $foto) {
                $this->assign("foto_770", $foto->FOTO);
            }
        }

        $fotos = $model->get_crop_550($url_amigavel, 1);
        if (is_array($fotos)) {
            foreach ($fotos as $foto) {
                $this->assign("foto_550", $foto->FOTO);
            }
        }

        $fotos = $model->get_crop_268($url_amigavel, 1);
        if (is_array($fotos)) {
            foreach ($fotos as $foto) {
                $this->assign("foto_268", $foto->FOTO);
            }
        }

        $limit = "LIMIT 0,4";
        $arr = $model->get_lista_produtos_relacionados_randon($categoria_default, $limit, $url_amigavel);
        $this->assign("arr", $arr);

        $limit = "LIMIT 0,8";
        $promocoes = $model->get_lista_produtos_promocao($limit, $url_amigavel);

        $this->assign("promocoes", $promocoes);

        $fotos_full = $model->get_crop_full_images($url_amigavel);
        
        $this->assign("fotos_full", $fotos_full);

        $lista_desejos = "CLIENT_HIDDEN=" . CLIENT_HIDDEN . "&CODPRODUTO=" . $produto->CODPRODUTO;
        $this->assign("lista_desejos", $lista_desejos);
        $this->assign("client_hidden", CLIENT_HIDDEN);
        $this->assign("codproduto", $produto->CODPRODUTO);

        //$fb_post_url =  "http://" . SITE . LANGUAGE ."/descricao/categoria/{$categoria_default}/{$url_amigavel}/comentarios";
        $fb_post_url = "http://" . SITE . LANGUAGE . "{$categoria_default}/{$url_amigavel}";

        $this->assign("og_title", "{$produto->NOME} - mariadebarro.com");
        $this->assign("og_type", OG_TYPE);
        $this->assign("og_site_name", OG_SITE_NAME);
        $this->assign("og_descripition", preg_replace("/<(.+?)[\s]*\/?[\s]*>/si", "", $produto->DESCRICAO));
        $this->assign("og_email", OG_EMAIL);
        $this->assign("og_phone_number", OG_PHONE_NUMBER);
        $this->assign("og_street_address", OG_STREET_ADDRESS);
        $this->assign("og_locality", OG_LOCALITY);
        $this->assign("og_region", OG_REGION);
        $this->assign("og_country_name", OG_COUNTRY_NAME);
        $this->assign("og_postal_code", OG_POSTAL_CODE);

        $this->assign("fb_post_url", $fb_post_url);
        $this->assign("language", LANGUAGE);
        $this->assign("site", "http://" . SITE);
        $this->assign("dados", $_SESSION);
        $this->assign("title", TITLE . $produto->CATEGORIA . " | " . $produto->NOME);
        $this->view_tpl("descricao");
    }

}
