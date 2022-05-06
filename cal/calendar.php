<?php 
//
############################################
# NAME: calendar.php
# AUTHOR: ALEX MENDES SILVA
# LICENSE: GNU General Public License
# DATE: 21/12/2005
# NAME: CALENDAR
############################################
# INTEGRAÇÃO COM BANCO DE DADOS
# Autor: Cleiton Ferreira
# E-Mail: cf-design@hotmail.com
# DATA: 01/07/2009
# SITE: www.rondohost.com.br / www.novorafest.com.br
# NOTA: Não retire os creditos do fonte, OBRIGADO.
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

//Os parâmetros da função "ShowCalendar()" são:
//1º Idioma (Portugues e ingles estão disponiveis
//2º Se você quer ou não que apareça o topo com o mês, ano e navegação para outros meses
//		1 -> para sim;
//		0 -> para não.
//3º e 4º largura e altura, respectivamente!
$cal->ShowCalendar("pt",1,"250","250");
echo "</center>";
?>
