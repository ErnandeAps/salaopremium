
<!-- Lista de usuários -->
<div id="Html1" style="position:absolute;left:100px;top:41px;width:520px;height:327px;overflow:auto;z-index:2">
<!--
@ ContÃ©m os cÃ³digos que exibirÃ£o os produtos existentes no banco de dados em forma de tabela e os
@ controle necessÃ¡rios a sua manipulaÃ§Ã£o;

@ Copyright (c) 2008 Aline Lima, Aline MagalhÃ£es, AndrÃ©a Lopes, Frederico Pimentel.
@ Este documento permite cÃ³pia, distribuiÃ§Ã£o e/ou modificaÃ§Ã£o garantida sob os termos da LincenÃ§a
@ PÃºblica Geral Menor do GNU conforme publicada pela Free Software Foundation; tanto a versÃ£o 2.1 da
@ LicenÃ§a quanto as versÃµes posteriores. Esta biblioteca Ã© distribuÃ­do na expectativa de que seja
@ Ãºtil, porÃ©m, SEM NENHUMA GARANTIA; nem mesmo a garantia implÃ­cita de COMERCIABILIDADE OU ADEQUAÃ‡ÃƒO A
@ UMA FINALIDADE ESPECÃFICA. Consulte a LicenÃ§a PÃºblica Geral Menor do GNU para mais detalhes.
-->

<html>
<head>
<script src="./script/bibliotecaAjax.js"></script>
<link rel="stylesheet" href="./script/estiloDataGrid.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>
<body>
<h2></h2>
<div align="center">
<div id="avisos">
<form name="formulario">
	<table id="minhaTabela" cellpadding="1" cellspacing="1">
		<tr>
			<td colspan="5" id="titulo"><strong>LISTA DE SERVICOS</strong></td>
		</tr>
		<tr id="cabecalho">
			<td id="codigo"><strong>Codigo</strong></td>
			<td id="descricao"><strong>Descricao:</strong></td>
			<td id="valor"><strong>Valor</strong></td>
			<td id="profissional"><strong>profissional:</strong></td>
			<td id="editar"><strong>&nbsp;</strong></td>
			<td id="excluir"><strong>&nbsp;</strong></td>
		</tr>

<?php

include('./script/connections/Connection.php');
?>

<?php
//$con = mysql_connect('localhost', 'root', '') or die ("Erro de conexÃ£o");
$res1 = mysql_select_db('easyserv_db') or die ("Banco de dados inexistente");
$res = mysql_query("select * from osdt order by iddt ASC");
$total = mysql_num_rows($res);

for($i=0; $i<$total; $i++){
	$dados = mysql_fetch_row($res);
	$codigo = $dados[1];
	$descricao = $dados[3];
	$valor = number_format($dados[6], 2, ',', '.');
	$profissional = $dados[5];
	//number_format($dados[6], 2, ',', '.');
	
	$idLinha = "linha$i";
	echo '<tr id="'.$idLinha.'">';
	echo '<td class="linhas" align="center">'.$codigo.'</td>';
	echo "<td class=\"linhas\">$descricao</td>";
	echo "<td class=\"linhas\">$valor</td>";
	echo "<td class=\"linhas\">$profissional</td>";
	echo "<td class=\"linhas\"><a href=\"../cadservico.php?Id=$codigo\" onclick=\"EditarLinha('$id');\"><img src=\"images/editar.gif\" alt=\"Editar\" title=\"Editar\"></a></td>";
	echo "<td class=\"linhas\"><a href=\"exccadservico.php?Id=$codigo\" onclick=\"ExcluirLinha('$id');\"><img src=\"images/excluir.gif\" alt=\"Excluir\" title=\"Excluir\"></a></td>";
}

mysql_close($conexao);
?>
<tr>

</tr>
</table>
</form>
</div>
</body></div>
</div>
</body>
</html>
