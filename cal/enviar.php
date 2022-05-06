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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
a:link {
	color: #333333;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #BC1503;
}
a:active {
	text-decoration: none;
}
a {
	font-family: Verdana;
	font-size: 12px;
}
.style3 {
	font-family: Verdana;
	font-size: 14px;
}
body,td,th {
	font-family: Verdana;
	font-size: 13px;
	color: #333333;
}
-->
</style>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style18 {font-size: 12}
.style30 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style32 {
	font-size: 10px;
	color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
}
.style34 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style></head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" target="_self" id="form1">
  <table width="70%" border="0" align="center" cellpadding="0" cellspacing="5">
    <tr>
      <td width="22%" align="right" valign="middle"><span class="style34">Nome do Evento: </span></td>
      <td width="78%" align="left" valign="middle"><span class="style18">
        <label>
        <input name="nome" type="text" id="nome" size="40" />
        </label>
      </span></td>
    </tr>
    <tr>
      <td align="right" valign="middle"><span class="style34">Data:</span></td>
      <td align="left" valign="middle"><table width="222" border="0">
        <tr>
          <td width="68" align="center" valign="middle"><label>
            <select name="dia" id="dia">
              <option>Dia</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>
          </label></td>
          <td width="67" align="center" valign="middle"><label>
            <select name="mes" id="mes">
              <option>Mes</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
          </label></td>
          <td width="73" align="center" valign="middle"><label>
            <select name="ano" id="ano">
              <option selected="selected">Ano</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
            </select>
          </label></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="right" valign="middle"><span class="style34">Descri&ccedil;&atilde;o:</span></td>
      <td align="left" valign="middle"><label>
        <textarea name="descri" cols="40" rows="6" id="descri"></textarea>
      </label></td>
    </tr>
    <tr>
      <td align="right" valign="middle" class="style34">Contato:</td>
      <td align="left" valign="middle" class="style30"><label>
        <input name="contato" type="text" id="contato" size="40" />
        <span class="style32">Contato com ORGANIZA&Ccedil;&Atilde;O </span></label></td>
    </tr>
  </table>
  <hr />
  <table width="70%" border="0" align="center" cellpadding="0" cellspacing="5">
    <tr>
      <td width="26%" align="center" valign="middle">&nbsp;</td>
      <td width="24%" align="center" valign="middle"><label>
        <input type="submit" name="Submit" value="Cadastrar Evento" />
      </label></td>
      <td width="21%" align="center" valign="middle"><label>
        <input type="reset" name="Submit2" value="Limpar campos" />
      </label></td>
      <td width="29%" align="center" valign="middle">&nbsp;</td>
    </tr>
  </table>
</form>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="14" align="center" valign="middle" bgcolor="#CCCCCC"><span class="style3">Listagem da Agenda</span></td>
  </tr>
</table>

<hr />

<?

require ("conectdb.php");

$sql = "SELECT * FROM agenda ORDER BY id DESC";


$limite = mysql_query("$sql");

while  ($sql = mysql_fetch_array ($limite) ) {

$id = $sql['id'];
$nome = $sql['nome'];
$dia = $sql['dia'];
$mes = $sql['mes'];
$ano = $sql['ano'];
?>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<br />
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th scope="col"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <th valign="top" scope="col"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <th align="left" valign="middle" bgcolor="#CCCCCC"><? echo"$id"; ?> / <? echo"$nome";?> - - - <? echo"$dia/$mes/$ano"; ?></th>
                <th width="13%" bgcolor="#C0C0C0" scope="col"><a href="excluir.php?<? echo"id=$id";?>">DELETAR</a></th>
              </tr>
              
              
            </table>            </th>
          </tr>
        </table>
    </th>
  </tr>
</table>
<? } ?>
</body>
</html>
