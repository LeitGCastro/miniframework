<?php

    namespace MF\Init;

    /**
     * Classe voltada para obter as urls referente a aplicação
    */
    class Urls{
        
        // Recupera o endereço requisitado 
        public function getPath() {
            $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            return str_replace($this->getBaseDir(), "", $url);
        }

        // Endereço de pesquisa do site
        public function getUrl() {
            if(isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] == 8080){
                return "http://" . $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . dirname($_SERVER["REQUEST_URI"]. "?");
            }
            return "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]. "?") . "/";
        }

        // Caminho base da aplicação desde a raiz
        public function getScriptPath(){
            return str_replace("/index.php", "", $_SERVER['SCRIPT_FILENAME']);
        }

        // Diretório base da aplicação (index.php)
        public function getBaseDir(){
            return str_replace($_SERVER['DOCUMENT_ROOT'], "", $this->getScriptPath());
        }

    }