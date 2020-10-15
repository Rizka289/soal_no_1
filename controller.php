<?php 
    class controller {

        function view($view){
            include_once APP_PATH . 'views/' . $view;
        }
    }