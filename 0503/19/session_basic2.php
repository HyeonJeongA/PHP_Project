<?php
ini_set("display_errors", "1");
session_save_path('C:\Bitnami\wampstack-8.0.3-1\apache2\htdocs\php_project\0503\19');
session_start();
echo $_SESSION['title'];
echo file_get_contents('C:\Bitnami\wampstack-8.0.3-1\apache2\htdocs\php_project\0503\19/sess_'.session_id());
?>