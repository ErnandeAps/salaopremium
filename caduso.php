<?php include('./script/connections/Connection.php'); ?>

<?php
$Id = $_GET['Id'];
$res1 = mysqli_select_db($conexao,'easyserv_db') or die ("Banco de dados inexistente");
$query_Rsdb = "SELECT * FROM tbusuario WHERE id=$Id";
$Rsdb = mysqli_query($conexao, $query_Rsdb) or die(mysql_error());

$escrever = mysqli_fetch_array($Rsdb);
//$nome = $escreverOs['servico'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de usuários</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="caduso.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:7px;top:33px;width:506px;height:334px;z-index:13;">
<img src="images/img0002.png" id="Shape1" alt="" style="width:506px;height:334px;"></div>
<div id="wb_Form1" style="position:absolute;left:31px;top:54px;width:457px;height:290px;z-index:14;">
<form name="frmcaduso" method="post" action="./script/addcaduso.php?Id=<?php echo $Id;?>" enctype="multipart/form-data" id="Form1">
<input type="text" id="Editbox2" style="position:absolute;left:73px;top:90px;width:155px;height:18px;line-height:18px;z-index:0;" name="login" value="<?php echo $escrever['login']?>" maxlength="10" tabindex="1" autocomplete="off" spellcheck="false">
<input type="password" id="Editbox3" style="position:absolute;left:73px;top:122px;width:98px;height:18px;line-height:18px;z-index:1;" name="senha" value="<?php echo $escrever['senha']?>" tabindex="2" autocomplete="off" spellcheck="false">
<label for="Editbox1" id="Label1" style="position:absolute;left:11px;top:58px;width:45px;height:18px;line-height:18px;z-index:2;">Nome</label>
<label for="Editbox2" id="Label2" style="position:absolute;left:11px;top:91px;width:41px;height:18px;line-height:18px;z-index:3;">Login</label>
<label for="Editbox3" id="Label3" style="position:absolute;left:11px;top:124px;width:41px;height:18px;line-height:18px;z-index:4;">Senha</label>
<input type="text" id="Editbox1" style="position:absolute;left:73px;top:57px;width:286px;height:18px;line-height:18px;z-index:5;" name="nome" value="<?php echo $escrever['nome']?>" tabindex="0" autocomplete="off" spellcheck="false" title="Nome do usu&#225;rio">
<input type="submit" id="Button1" name="btincluir" value="Salvar" style="position:absolute;left:73px;top:205px;width:82px;height:35px;z-index:6;">
<input type="reset" id="Button2" name="btlimpar" value="Limpar" style="position:absolute;left:169px;top:205px;width:82px;height:35px;z-index:7;">
<div id="wb_Image1" style="position:absolute;left:398px;top:232px;width:45px;height:50px;z-index:8;">
<a href="./cadastros.html"><img src="sair.jpeg" id="Image1" alt=""></a></div>
<div id="wb_Text1" style="position:absolute;left:11px;top:21px;width:432px;height:20px;text-align:center;z-index:9;">
<span style="color:#3F9C03;font-family:Verdana;font-size:17px;"><strong>Cadastro de usuários</strong></span></div>
<input type="text" id="Editbox4" style="position:absolute;left:73px;top:154px;width:86px;height:16px;line-height:16px;z-index:10;" name="perfil" value="<?php echo $escrever['perfil']?>" tabindex="3" autocomplete="off" spellcheck="false" title="Perfil">
<label for="Editbox3" id="Label4" style="position:absolute;left:11px;top:154px;width:41px;height:18px;line-height:18px;z-index:11;">Perfil</label>
<div id="wb_Image2" style="position:absolute;left:345px;top:232px;width:48px;height:48px;z-index:12;">
<a href="./script/listcaduso.php"><img src="images/localizar.jpg" id="Image2" alt=""></a></div>
</form>
</div>
</div>
</body>
</html>
