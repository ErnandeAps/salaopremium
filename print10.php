<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?
$print_output = "Teste de impressão";

$handle = printer_open("\\127.0.0.1\pdv2\cupom.txt");
printer_set_option($handle, PRINTER_MODE, "raw");
printer_write($handle,$print_output);
printer_close($handle);
?>
</BODY>
</HTML>
