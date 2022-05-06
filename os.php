<?PHP
$Id = $_GET['Id'];
$IdC = '0';

include('./script/connections/Connection.php');
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$nome = '';
$celular = '';
$total = '0,00';
$pagamento = '0,00';
$desconto = '0,00';

if($Id<>'0'){
//consulta cliente
$query_Rsdb = "SELECT * FROM os WHERE idos=$Id";
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$Rsdb = mysqli_query($conexao, $query_Rsdb) or die(mysql_error());
$escrever = mysqli_fetch_array($Rsdb);
$IdC = $escrever['idcliente'];
$status = $escrever['status'];
$Vdesconto = $escrever['desconto'];
$Vpago = $escrever['pag'];
$Vtotal = $escrever['total'];

//Consulta dados do cliente
$query_Rsdb = "SELECT * FROM tbcadcliente WHERE id=$IdC";
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$Rsdb = mysqli_query($conexao, $query_Rsdb) or die(mysql_error());
$escrever = mysqli_fetch_array($Rsdb);
//$IdC = $escrever['idcliente'];
$nome = $escrever['nome'];
$celular = $escrever['celular'];

if ($status == '1'){
echo "<script>alert('Ordem de servico fechada.')</script>";
     $total = number_format($Vtotal, 2, ',', '.');
     $desconto = number_format($Vdesconto, 2, ',', '.');
     $pagamento = number_format($Vpago, 2, ',', '.');

}else{

      $Rsdb = mysqli_query($conexao,"select SUM(valorservico) as soma FROM osdt where idos=$Id")or die(mysql_error());
      $cont = mysqli_fetch_array($Rsdb);
      $total = $cont["soma"]; //$cont["soma"];
           //Formata valor
      $total = number_format($total, 2, ',', '.');
}}


mysql_close($conexao);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>S G E - Sistema de gestão de serviços</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="os.css" rel="stylesheet">
</head>
<body>
<div id="wb_Shape1" style="position:absolute;left:0px;top:2px;width:1280px;height:680px;z-index:23;">
<img src="images/img0019.png" id="Shape1" alt="" style="width:1280px;height:680px;"></div>
<div id="wb_Form2" style="position:absolute;left:27px;top:74px;width:1227px;height:591px;z-index:24;">
<form name="frmos" method="post" action="mailto:" enctype="multipart/form-data" id="Form2">
<input type="text" id="Editbox8" style="position:absolute;left:230px;top:46px;width:482px;height:27px;line-height:27px;z-index:0;" name="nome" value="<?php echo $nome ?>" spellcheck="false">
<input type="text" id="Editbox9" style="position:absolute;left:737px;top:46px;width:221px;height:27px;line-height:27px;z-index:1;" name="celular" value="<?php echo $celular ?>" spellcheck="false">
<label for="Editbox10" id="Label9" style="position:absolute;left:670px;top:482px;width:141px;height:32px;line-height:32px;z-index:2;">Desconto</label>
<input type="text" id="Editbox10" style="position:absolute;left:671px;top:520px;width:142px;height:32px;line-height:32px;z-index:3;" name="desconto" value="<?php echo $desconto ?>" spellcheck="false">
<label for="Editbox11" id="Label10" style="position:absolute;left:831px;top:482px;width:156px;height:32px;line-height:32px;z-index:4;">Pagamento</label>
<input type="text" id="Editbox11" style="position:absolute;left:835px;top:520px;width:142px;height:32px;line-height:32px;z-index:5;" name="pagamento" value="<?php echo $pagamento ?>" spellcheck="false">
<label for="Editbox12" id="Label11" style="position:absolute;left:999px;top:484px;width:144px;height:32px;line-height:32px;z-index:6;">Total</label>
<input type="text" id="Editbox12" style="position:absolute;left:999px;top:520px;width:142px;height:32px;line-height:32px;z-index:7;" name="total" value="<?php echo $total ?>" spellcheck="false">

<input type="text" id="Editbox13" style="position:absolute;left:12px;top:9px;width:112px;height:64px;line-height:64px;z-index:9;" name="idos" value="" spellcheck="false">
<div id="wb_Image1" style="position:absolute;left:1073px;top:25px;width:78px;height:78px;z-index:10;">
<a href="./telaprin.html"><img src="sair.jpeg" id="Image1" alt="" title="Sair do Atendimento"></a></div>
<label for="Editbox8" id="Label7" style="position:absolute;left:222px;top:12px;width:110px;height:32px;line-height:32px;z-index:11;">Cliente</label>
<label for="Editbox9" id="Label8" style="position:absolute;left:737px;top:12px;width:119px;height:32px;line-height:32px;z-index:12;">Celular</label>
<div id="wb_num" style="position:absolute;left:13px;top:25px;width:112px;height:42px;text-align:center;z-index:13;">
<span style="color:#696969;font-family:'Times New Roman';font-size:37px;"><?php echo $Id?></span></div>
<input type="text" id="Editbox1" style="position:absolute;left:155px;top:46px;width:57px;height:27px;line-height:27px;z-index:14;" name="idcliente" value="<?php echo $IdC ?>" spellcheck="false">
<div id="wb_Text2" style="position:absolute;left:152px;top:16px;width:72px;height:32px;z-index:15;">
<span style="color:#006980;font-family:Arial;font-size:27px;"><strong>Cód.</strong></span></div>
<!-- Lista de usuários -->
<div id="Html1" style="position:absolute;left:17px;top:125px;width:1134px;height:325px;z-index:16">

<!-- Lista de usuÃ¡rios -->
<div id="Html1" style="position:absolute;left:0px;top:0px;width:1150px;height:400px;overflow:auto;z-index:2">
<!--
@ ContÃƒÂ©m os cÃƒÂ³digos que exibirÃƒÂ£o os produtos existentes no banco de dados em forma de tabela e os
@ controle necessÃƒÂ¡rios a sua manipulaÃƒÂ§ÃƒÂ£o;

@ Copyright (c) 2008 Aline Lima, Aline MagalhÃƒÂ£es, AndrÃƒÂ©a Lopes, Frederico Pimentel.
@ Este documento permite cÃƒÂ³pia, distribuiÃƒÂ§ÃƒÂ£o e/ou modificaÃƒÂ§ÃƒÂ£o garantida sob os termos da LincenÃƒÂ§a
@ PÃƒÂºblica Geral Menor do GNU conforme publicada pela Free Software Foundation; tanto a versÃƒÂ£o 2.1 da
@ LicenÃƒÂ§a quanto as versÃƒÂµes posteriores. Esta biblioteca ÃƒÂ© distribuÃƒÂ­do na expectativa de que seja
@ ÃƒÂºtil, porÃƒÂ©m, SEM NENHUMA GARANTIA; nem mesmo a garantia implÃƒÂ­cita de COMERCIABILIDADE OU ADEQUAÃƒâ€¡ÃƒÆ’O A
@ UMA FINALIDADE ESPECÃƒÂFICA. Consulte a LicenÃƒÂ§a PÃƒÂºblica Geral Menor do GNU para mais detalhes.
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
			<td colspan="6" id="titulo"><strong>LISTA DE SERVICOS</strong></td>
		</tr>
		<tr id="cabecalho">
			<td id="codigo"><strong>Codigo</strong></td>
			<td id="descricao"><strong>Descricao:</strong></td>
			<td id="valor"><strong>Valor</strong></td>
			<td id="profissional"><strong>Profissional:</strong></td>
			<td id="excluir"><strong>&nbsp;</strong></td>
			<td id="Imp. Ticket"><strong>&nbsp;</strong></td>
		</tr>

<?php

include('./script/connections/Connection.php');
?>

<?php
$_GET['Id'];
//$con = mysqli_connect('localhost', 'root', '') or die ("Erro de conexÃƒÂ£o");
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$res = mysqli_query($conexao,"select * from osdt where idos=$Id  order by iddt ASC");
$total = mysqli_num_rows($res);

for($i=0; $i<$total; $i++){
	$dados = mysqli_fetch_row($res);
	$codigo = $dados[1];
	$descricao = $dados[3];
	$valor = number_format($dados[7], 2, ',', '.');
	$profissional = $dados[6];
	//number_format($dados[6], 2, ',', '.');
	
	$idLinha = "linha$i";
	echo '<tr id="'.$idLinha.'">';
	echo '<td class="linhas" align="center">'.$codigo.'</td>';
	echo "<td class=\"linhas\">$descricao</td>";
	echo "<td class=\"linhas\">$valor</td>";
	echo "<td class=\"linhas\">$profissional</td>";
	echo "<td class=\"linhas\"><a href=\"./script/impticket.php?Id=$Id&Idi=$codigo&IdC=$IdC\" onclick=\"ImpLinha('$Id');\"><img src=\"images/ticket.gif\" alt=\"Imp. Ticket\" title=\"Imp. Ticket\"></a></td>";
	echo "<td class=\"linhas\"><a href=\"./script/excitens.php?Id=$Id&Idi=$codigo\" onclick=\"ExcluirLinha('$Id');\"><img src=\"images/excluir.gif\" alt=\"Excluir\" title=\"Excluir\"></a></td>";
}

mysqli_close($conexao);
?>
<tr>

</tr>
</table>
</form>
</div>
</body></div>
</div>
</body>
</html></div>
<div id="wb_Image2" style="position:absolute;left:467px;top:477px;width:79px;height:79px;z-index:17;">
<a href="./script/impcupom.php?Id=<?php echo $Id;?>&IdC=<?php echo $IdC;?>"><img src="images/cupom.jpg" id="Image2" alt="" title="Imprimir Cupom"></a></div>
<div id="wb_Image4" style="position:absolute;left:302px;top:467px;width:165px;height:99px;z-index:18;">
<a href="./script/finalizar.php?Id=<?php echo $Id;?>"><img src="images/finalizar.png" id="Image4" alt="" title="Finalizar"></a></div>
<input type="button" id="Button1" onclick="window.location.href='./script/selectcliente.php';return false;" name="salvar" value="Abrir OS" style="position:absolute;left:29px;top:463px;width:95px;height:53px;z-index:19;">
<input type="button" id="Button2" onclick="window.location.href='addservico.php?Id=<?php echo $Id;?>';return false;" name="salvar" value="Inc. Serviço" style="position:absolute;left:128px;top:463px;width:95px;height:53px;z-index:20;">
<input type="button" id="Button3" onclick="window.location.href='./script/list-os.php';return false;" name="locos" value="Localizar" style="position:absolute;left:29px;top:520px;width:95px;height:53px;z-index:21;">
<input type="button" id="Button4" onclick="window.location.href='./script/loginadm.php?Id=<?php echo $Id;?>';return false;" name="excos" value="Excluir OS" style="position:absolute;left:128px;top:520px;width:95px;height:53px;z-index:22;">
</form>
</div>
<div id="wb_Text1" style="position:absolute;left:40px;top:42px;width:182px;height:32px;z-index:25;">
<span style="color:#32CD32;font-family:Arial;font-size:27px;"><strong>Atendimento</strong></span></div>
</body>
</html>
