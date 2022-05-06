<?php
//
############################################
# INTEGRAÇÃO COM BANCO DE DADOS
# Autor: Cleiton Ferreira
# E-Mail: cf-design@hotmail.com
# DATA: 01/07/2009
# SITE: www.rondohost.com.br / www.novorafest.com.br
# NOTA: Não retire os creditos do fonte, OBRIGADO.
#####################################################
//
?>
<? 
$hostname = "localhost";
$database = "easyserv_db";
$username = "root";
$password = "";

$conexao = mysqli_connect($hostname, $username,$password);
mysqli_select_db ($conexao,$database)  OR die (mysql_error()); // Conectando em uma base de dados

?> 
