<?php 
//
############################################
# NAME: calendar.php
# AUTHOR: ALEX MENDES SILVA
# LICENSE: GNU General Public License
# DATE: 21/12/2005
# NAME: CALENDAR
############################################
# INTEGRA��O COM BANCO DE DADOS
# Autor: Cleiton Ferreira
# E-Mail: cf-design@hotmail.com
# DATA: 01/07/2009
# SITE: www.rondohost.com.br / www.novorafest.com.br
# NOTA: N�o retire os creditos do fonte, OBRIGADO.
#####################################################
//
require ("conectdb.php");

$sql = "SELECT * FROM agenda";
$limite = mysqli_query($conexao,$sql);
while  ($sql = mysqli_fetch_array ($limite) ) {

$id = $sql['id'];
$dia = $sql['dia'];
$mes = $sql['mes'];
$ano = $sql['ano'];
$nome = $sql['nome'];
$descri = $sql['descri'];
$contato = $sql['contato'];
//
//
//inclui o programa
echo "<center>";
echo "<br>";
include_once("functions.php");
$cal = new CALENDAR();

$cal->AddEvent("$dia","$mes","$ano","$nome","janela_agenda.php?id=$id","_self");
}

//Os par�metros da fun��o "ShowCalendar()" s�o:
//1� Idioma (Portugues e ingles est�o disponiveis
//2� Se voc� quer ou n�o que apare�a o topo com o m�s, ano e navega��o para outros meses
//		1 -> para sim;
//		0 -> para n�o.
//3� e 4� largura e altura, respectivamente!
$cal->ShowCalendar("pt",1,"250","250");
echo "</center>";
?>
