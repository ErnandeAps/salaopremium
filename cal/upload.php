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
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana;
	font-size: 14px;
	color: #FF0000;
	font-weight: bold;
}

a:link {color: #0000ff;  font-family: verdana, arial, sans-serif; font-weight: Bold; font-size: 11px; text-decoration: none}

a:visited {color: #0000ff;  font-family: verdana, arial, sans-serif; font-weight: bold; font-size: 11px; text-decoration: none} 

a:active {color: #0000ff;  font-family: verdana, arial, sans-serif; font-weight: bold; font-size: 11px; text-decoration: none} 

a:hover {font-family:verdana, arial, sans-serif; font-weight: bold; font-size: 11px;color: #808080; cursor: hand; text-decoration: underline}

-->
</style>
<? //Conexão
require("conectdb.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$descri = $_POST['descri'];
$contato = $_POST['contato'];

if($nome ==""){
echo"Volte e preencha o campo (NOME)<br>";
}
if($dia =="Dia"){
echo"Volte e preencha o campo (DIA)<br>";
}
if($mes =="Mes") {
echo"Volte e preencha o campo (MES)<br>";
}
if($ano =="Ano"){ 
echo"Volte e preencha o campo (ANO)<br>";
}
if($descri ==""){ 
echo"Volte e preencha o campo (DESCRIÇÃO)<br>";
}
if($contato ==""){ 
echo"Volte e preencha o campo (CONTATO)<br>";
}else{
$query = "INSERT INTO agenda (nome, dia, mes, ano, descri, contato) VALUES ('$nome','$dia','$mes','$ano','$descri','$contato')"; // inserção sql na tabela agenda
mysql_query($query) or die (mysql_error());
mysql_close();//fecha conexão

?>
<?
echo "<br>";
echo "<br>";
echo "<center>";
echo "Registrado com sucesso!";
echo "<br>";
echo "<br>";
echo "<a href=javascript:history.back();>Voltar</a>";
echo "</center>";
}
 ?>
