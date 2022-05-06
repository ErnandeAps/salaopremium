<?php
session_start();
$perfil =  $_SESSION['sess_perfil'];

if ($perfil<>'adm'){
echo "<script>alert('Usuario nao autorizado para continuar')</script>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=telaprin.html'>";
}else{

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>S G E - Sistema de gestão de serviços</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="cadastros.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:720px;height:480px;z-index:0;">
<img src="images/img0004.png" id="Shape1" alt="" style="width:720px;height:480px;"></div>
<div id="wb_Text2" style="position:absolute;left:301px;top:238px;width:88px;height:19px;text-align:center;z-index:1;">
<span style="color:#006980;font-family:Tahoma;font-size:16px;"><strong>Serviços</strong></span></div>
<div id="wb_Text4" style="position:absolute;left:510px;top:238px;width:128px;height:19px;text-align:center;z-index:2;">
<span style="color:#006980;font-family:Tahoma;font-size:16px;"><strong>Funcionários</strong></span></div>
<div id="wb_Image6" style="position:absolute;left:514px;top:311px;width:137px;height:130px;z-index:3;">
<a href="./telaprin.html"><img src="sair.jpeg" id="Image6" alt=""></a></div>
<div id="wb_Text6" style="position:absolute;left:552px;top:442px;width:99px;height:19px;text-align:center;z-index:4;">
<span style="color:#006980;font-family:Tahoma;font-size:16px;"><strong>Voltar</strong></span></div>
<div id="wb_Image1" style="position:absolute;left:253px;top:98px;width:185px;height:132px;z-index:5;">
<a href="./cadservico.php?Id=0" title="Cadastro de servi&#231;os"><img src="cadservicos.jpeg" id="Image1" alt=""></a></div>
<div id="wb_Image2" style="position:absolute;left:38px;top:84px;width:159px;height:161px;z-index:6;">
<a href="./caduso.php?Id=0"><img src="login.jpeg" id="Image2" alt=""></a></div>
<div id="wb_Image4" style="position:absolute;left:507px;top:88px;width:150px;height:150px;z-index:7;">
<a href="./cadfuncionario.php?Id=0"><img src="funcionario.jpeg" id="Image4" alt=""></a></div>
<div id="wb_Text1" style="position:absolute;left:87px;top:236px;width:72px;height:38px;text-align:center;z-index:8;">
<span style="color:#006980;font-family:Tahoma;font-size:16px;"><strong>Usuários</strong></span></div>
<div id="wb_Text7" style="position:absolute;left:47px;top:51px;width:122px;height:25px;z-index:9;">
<span style="color:#32CD32;font-family:Verdana;font-size:21px;"><strong>Cadastros</strong></span></div>
</div>
</body>
</html>
<?php
}
?>
