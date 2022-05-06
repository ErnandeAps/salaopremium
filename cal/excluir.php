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
include"conectdb.php"; 

$id = $_GET['id'];
$query = mysql_query("DELETE FROM agenda where id='$id'");  //comando que exclui o registro   
echo "<script>window.location='enviar.php';</script>";   
?>  