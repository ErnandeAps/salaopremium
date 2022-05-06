<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php
$arr = array("20120926%08:00:00%1%2012-09-26", "20120927%08:00:00%1%2012-09-27", "20120928%08:00:00%1%2012-09-28");
foreach($arr as $Arr) {
$separacao = explode("%",$Arr);
unset($separacao[2]);
unset($separacao[3]);
$new[] = $separacao;
}

$regra = "/([0-9]{4})([0-9]{2})([0-9]{2})/";
foreach($new as $New) {
   preg_match($regra, $New[0], $matches, PREG_OFFSET_CAPTURE);
$data = $matches[1][0] . "-" . $matches[2][0] . "-" . $matches[3][0];
echo "<br />";
echo $data;
echo "<br />";
echo $New[1];
echo "<br />";
}

?>
</BODY>
</HTML>

