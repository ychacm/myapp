<?php
    class appView extends Smarty
    {

        function __construct()
        {
            $this->smarty;
            $this->template_dir = 'templates/';
            $this->compile_dir = 'templates_c/';
            $this->config_dir = 'configs/';
            $this->cache_dir = 'cache/';
        }
    }
?>