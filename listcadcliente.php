<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de usuários</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="listcadcliente.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:89px;top:30px;width:542px;height:421px;z-index:0;">
<img src="images/img0015.png" id="Shape1" alt="" style="width:542px;height:421px;"></div>
<div id="wb_Image1" style="position:absolute;left:558px;top:381px;width:45px;height:50px;z-index:1;">
<a href="../cadcliente.html"><img src="sair.jpeg" id="Image1" alt=""></a></div>
<!-- Lista de usuários -->
<div id="Html1" style="position:absolute;left:100px;top:41px;width:520px;height:327px;overflow:auto;z-index:2">
<!--
@ Contém os códigos que exibirão os produtos existentes no banco de dados em forma de tabela e os
@ controle necessários a sua manipulação;

@ Copyright (c) 2008 Aline Lima, Aline Magalhães, Andréa Lopes, Frederico Pimentel.
@ Este documento permite cópia, distribuição e/ou modificação garantida sob os termos da Lincença
@ Pública Geral Menor do GNU conforme publicada pela Free Software Foundation; tanto a versão 2.1 da
@ Licença quanto as versões posteriores. Esta biblioteca é distribuído na expectativa de que seja
@ útil, porém, SEM NENHUMA GARANTIA; nem mesmo a garantia implícita de COMERCIABILIDADE OU ADEQUAÇÃO A
@ UMA FINALIDADE ESPECÍFICA. Consulte a Licença Pública Geral Menor do GNU para mais detalhes.
-->

<html>
<head>
<script src="bibliotecaAjax.js"></script>
<link rel="stylesheet" href="estiloDataGrid.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DataGrid</title>
</head>
<body>
<h2></h2>
<div align="center">
<div id="avisos">
<form name="formulario">
	<table id="minhaTabela" cellpadding="1" cellspacing="1">
		<tr>
			<td colspan="5" id="titulo"><strong>LISTA DE CLIENTES</strong></td>
		</tr>
		<tr id="cabecalho">
			<td id="codigo"><strong>Codigo</strong></td>
			<td id="nome"><strong>Nome:</strong></td>
			<td id="fone"><strong>Fone</strong></td>
            <td id="celular"><strong>Celular</strong></td>
            <td id="editar"><strong>&nbsp;</strong></td>
			<td id="excluir"><strong>&nbsp;</strong></td>
		</tr>
<?php
$con = mysql_connect('localhost', 'root', '') or die ("Erro de conexão");
$res1 = mysql_select_db('easyserv_db') or die ("Banco de dados inexistente");
$res = mysql_query("select * from tbcadcliente order by nome");
$total = mysql_num_rows($res);

for($i=0; $i<$total; $i++){
	$dados = mysql_fetch_row($res);
	$codigo = $dados[0];
	$nome = $dados[1];
	$fone = $dados[6];
	$celular = $dados[7];

	$idLinha = "linha$i";
	echo '<tr id="'.$idLinha.'">';
	echo '<td class="linhas" align="center">'.$codigo.'</td>';
	echo "<td class=\"linhas\">$nome</td>";
	echo "<td class=\"linhas\">$fone</td>";
    echo "<td class=\"linhas\">$celular</td>";
	echo "<td class=\"linhas\"><a href=\"cadcliente.php?Id=$codigo\" onclick=\"EditarLinha('$id');\"><img src=\"images/editar.gif\" alt=\"Editar\" title=\"Editar\"></a></td>";
	echo "<td class=\"linhas\"><a href=\"exccaduso.php?Id=$codigo\" onclick=\"ExcluirLinha('$id');\"><img src=\"images/excluir.gif\" alt=\"Excluir\" title=\"Excluir\"></a></td>";
}
?>
<tr</div>
</div>
</body>
</html>