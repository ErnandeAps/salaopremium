<?php include('./script/connections/Connection.php'); ?>

<?php
$Id = $_GET['Id'];
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");

if ($Id<>'0') {
   $query_Rsdb = "SELECT * FROM tbcadservico WHERE tbcadSid=$Id";
   $Rsdb = mysqlI_query($conexao, $query_Rsdb) or die(mysql_error());
   $escrever = mysqlI_fetch_array($Rsdb);
   $descricao = $escrever['tbcadSdescricao'];
   $valor = number_format($escrever['tbcadSvalor'], 2, ',', '.');

} else {
   $descricao = "";
   $valor = "0,00";

   //$valunit ="0.00";
}

mysqlI_close($conexao);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de usuários</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="cadservico.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:107px;top:73px;width:506px;height:334px;z-index:9;">
<img src="images/img0003.png" id="Shape1" alt="" style="width:506px;height:334px;"></div>
<div id="wb_Form1" style="position:absolute;left:136px;top:106px;width:447px;height:267px;z-index:10;">
<form name="frmcadservico" method="post" action="./script/addcadservico.php?Id=<?php echo $Id ?>" enctype="multipart/form-data" id="Form1">
<input type="text" id="Editbox2" style="position:absolute;left:34px;top:127px;width:98px;height:18px;line-height:18px;z-index:0;" name="valor" value="<?php echo $valor ?>" maxlength="10" autocomplete="off" spellcheck="false">
<label for="Editbox1" id="Label1" style="position:absolute;left:34px;top:48px;width:88px;height:18px;line-height:18px;z-index:1;">Descricao</label>
<label for="Editbox2" id="Label2" style="position:absolute;left:34px;top:101px;width:41px;height:18px;line-height:18px;z-index:2;">Valor</label>
<input type="submit" id="Button1" name="btincluir" value="Salvar" style="position:absolute;left:34px;top:174px;width:82px;height:35px;z-index:3;">
<div id="wb_Image1" style="position:absolute;left:384px;top:200px;width:45px;height:50px;z-index:4;">
<a href="./cadastros.html"><img src="sair.jpeg" id="Image1" alt=""></a></div>
<div id="wb_Text1" style="position:absolute;left:71px;top:20px;width:234px;height:20px;z-index:5;">
<span style="color:#3F9C03;font-family:Verdana;font-size:17px;"><strong>Cadastro de Servisos</strong></span></div>
<input type="text" id="Editbox1" style="position:absolute;left:34px;top:74px;width:365px;height:18px;line-height:18px;z-index:6;" name="descricao" value="<?php echo $descricao ?>" autocomplete="off" spellcheck="false">
<input type="reset" id="Button2" name="btlimpar" value="Consultar" style="position:absolute;left:126px;top:174px;width:82px;height:35px;z-index:7;">
<div id="wb_Image2" style="position:absolute;left:336px;top:201px;width:48px;height:48px;z-index:8;">
<a href="./script/listcadservico.php"><img src="images/localizar.jpg" id="Image2" alt=""></a></div>
</form>
</div>
</div>
</body>
</html>
