<?php
    session_start();
    function login_already(){
        if(!isset($_SESSION['is_login'])){
            return false;
        }
        return true;
    }