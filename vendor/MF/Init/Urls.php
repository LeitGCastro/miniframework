<?php

    namespace MF\Init;

    /**
     * Classe voltada para obter as urls referente a aplicação
    */
    class Urls{
        
        // Recupera o endereço requisitado 
        public function getPath() {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }

        // Endereço de pesquisa do site
        public function getUrl() {
            return "http://" . $_SERVER["SERVER_NAME"] . dirname($_SERVER["REQUEST_URI"]. "?") . "/";
        }

        // Diretório base da aplicação
        public function getDir($value=''){
            return dirname($_SERVER["REQUEST_URI"]); 
        }
    }