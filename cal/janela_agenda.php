<?php
//
############################################
# INTEGRAÇÃO COM BANCO DE DADOS
# Autor: Cleiton Ferreira
# E-Mail: cf-design@hotmail.com
# DATA: 01/07/2009
# SITE: www.rondohost.com.br / www.novorafest.com.br
# NOTA: Não retire os creditos do fonte, OBRIGADO.
#####################################################
//
?>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
.style3 {font-size: 12px}

a:link {color: #0000ff;  font-family: verdana, arial, sans-serif; font-weight: Bold; font-size: 11px; text-decoration: none}

a:visited {color: #0000ff;  font-family: verdana, arial, sans-serif; font-weight: bold; font-size: 11px; text-decoration: none} 

a:active {color: #0000ff;  font-family: verdana, arial, sans-serif; font-weight: bold; font-size: 11px; text-decoration: none} 

a:hover {font-family:verdana, arial, sans-serif; font-weight: bold; font-size: 11px;color: #808080; cursor: hand; text-decoration: underline}

-->
</style>
<?     include "conectdb.php";

$id = $_GET['id'];
$sql = "SELECT * FROM agenda where id=$id ORDER BY id DESC";


$limite = mysql_query("$sql");

while  ($sql = mysql_fetch_array ($limite) ) {

$id = $sql['id'];
$nome = $sql['nome'];
$dia = $sql['dia'];
$mes = $sql['mes'];
$ano = $sql['ano'];
$descri = $sql['descri'];
$contato = $sql['contato'];

?>
<table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="490" align="left" valign="top"><p align="center"></p>
      <div align="center"><font size="4" face="Arial, Helvetica, sans-serif" style="font-variant:inherit"><? echo"$dia/$mes/$ano";?><font color="#808080" size="4"> |&nbsp;</font><? echo nl2br($nome);?> </font><br /></div>
      <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#333333">
          <tr>
            <td width="54%" align="left" bgcolor="#808080"><span class="style9 style1 style3">Informa&ccedil;&otilde;es:</span>&nbsp;&nbsp;<font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><?php echo $contato; ?></font></td>
          </tr>
      </table>
        <font face="Verdana" size="2">
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? echo nl2br($descri);?></font>
        <p> </p>
      <p align="right"></p></td>
  </tr>
<tr><td><center><a href=javascript:history.back();>Voltar</a></center></td></tr>
</table>
<? } ?>
