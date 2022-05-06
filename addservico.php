<?PHP
$Id = $_GET['Id'];
//$IdC = $_GET['IdC'];

include('./script/connections/Connection.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de usuários</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="addservico.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:107px;top:73px;width:506px;height:334px;z-index:6;">
<img src="images/img0010.png" id="Shape1" alt="" style="width:506px;height:334px;"></div>
<div id="wb_Form1" style="position:absolute;left:120px;top:125px;width:481px;height:264px;z-index:7;">
<form name="frmaddservico" method="post" action="./script/additens.php?Id=<?php echo $Id;?>" enctype="multipart/form-data" id="Form1">
<select name="servico" size="1" id="Combobox1" style="position:absolute;left:15px;top:50px;width:409px;height:33px;z-index:0;">
<option value="">Selecione o servico</option>
<?php

//consulta cliente
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$res = mysqli_query($conexao,"select * from tbcadservico order by tbcadSid ASC");
$total = mysqli_num_rows($res);
for($i=0; $i<$total; $i++){
	$dados = mysqli_fetch_row($res);
    $idServico = $dados[0];
    $servico = $dados[1];

    echo "<option value={$idServico}>{$servico}</option>";

}
mysql_close($conexao);
?>
</select>
<select name="profissional" size="1" id="Combobox2" style="position:absolute;left:15px;top:118px;width:367px;height:33px;z-index:1;">
<option value="">Selecione o profissional</option>
<?php
//consulta cliente

$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$res = mysqli_query($conexao,"select * from tbcadfuncionario order by id ASC");
$total = mysqli_num_rows($res);
for($i=0; $i<$total; $i++){
	$dados = mysqli_fetch_row($res);
    $idProf = $dados[0];
    $profnome = $dados[1];

    echo "<option value={$idProf}>{$profnome}</option>";

}
mysql_close($conexao);
?>
</select>
<input type="submit" id="Button1" name="Salvar" value="Incluir" style="position:absolute;left:15px;top:173px;width:108px;height:67px;z-index:2;">
<div id="wb_Text1" style="position:absolute;left:15px;top:28px;width:178px;height:22px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:19px;">Serviço</span></div>
<div id="wb_Text2" style="position:absolute;left:15px;top:96px;width:178px;height:22px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:19px;">Profissional</span></div>
<div id="wb_Image1" style="position:absolute;left:416px;top:205px;width:45px;height:50px;z-index:5;">
<a href="./os.php?Id=<?php echo $Id;?>"><img src="sair.jpeg" id="Image1" alt=""></a></div>
</form>
</div>
<div id="wb_Text3" style="position:absolute;left:148px;top:105px;width:433px;height:32px;text-align:center;z-index:8;">
<span style="color:#3F9C03;font-family:Verdana;font-size:27px;"><strong>Incluir serviço</strong></span></div>
</div>
</body>
</html>
