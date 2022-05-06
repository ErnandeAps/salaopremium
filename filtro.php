<?php
$tprel = $_GET['R'];

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Filtro de data</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="eayseservice.css" rel="stylesheet">
<link href="filtro.css" rel="stylesheet">
</head>
<body>
<div id="space"><br></div>
<div id="container">
<div id="wb_Shape1" style="position:absolute;left:148px;top:98px;width:425px;height:285px;z-index:6;">
<img src="images/img0005.png" id="Shape1" alt="" style="width:425px;height:285px;"></div>
<div id="wb_Text1" style="position:absolute;left:158px;top:139px;width:403px;height:25px;text-align:center;z-index:7;">
<span style="color:#3F9C03;font-family:Verdana;font-size:21px;"><strong>Filtro por data/Período</strong></span></div>
<div id="wb_Form1" style="position:absolute;left:211px;top:187px;width:298px;height:152px;z-index:8;">
<?php
if ($tprel=='mp'){
<form name="frmfiltrar" method="post" action="./script/imprelmovp.php" enctype="multipart/form-data" id="Form1">
}else{
<form name="frmfiltrar" method="post" action="./script/imprelmovfp.php" enctype="multipart/form-data" id="Form1">
}
?>
<label for="Editbox1" id="Label1" style="position:absolute;left:0px;top:24px;width:63px;height:17px;line-height:17px;z-index:0;">Data Ini.</label>
<input type="text" id="Editbox1" style="position:absolute;left:78px;top:15px;width:120px;height:22px;line-height:22px;z-index:1;" name="Dini" value="" spellcheck="false">
<label for="Editbox2" id="Label2" style="position:absolute;left:0px;top:57px;width:63px;height:17px;line-height:17px;z-index:2;">Data Fin.</label>
<input type="text" id="Editbox2" style="position:absolute;left:78px;top:51px;width:120px;height:22px;line-height:22px;z-index:3;" name="Dfin" value="" spellcheck="false">
<input type="submit" id="Button1" name="btfiltrar" value="Ok" style="position:absolute;left:78px;top:99px;width:82px;height:35px;z-index:4;">
<input type="button" id="Button2" onclick="window.location.href='./ferramentas.html';return false;" name="btcancelar" value="Cancelar" style="position:absolute;left:178px;top:99px;width:91px;height:35px;z-index:5;">
</form>
</div>
</div>
</body>
</html>
