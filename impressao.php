<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?php

$L1 = "Titulo do Relatorio";
$L2 = "Cabecalho do Relatorio";
$L3 = "Corpo do Relatorio";
$L4 = "Fim do Relatorio";
$L5 = "Rodape do relatorio";

$valor_unit_comidas="R$ 30,00";
$sub_total="R$30,00";

echo "$L1 <br /><br />";
echo "$L2 <br />";
echo "$L3 <br />";
echo "$L4 <br /><br />";



$local_file = "c:\publico\cupom.txt"; // Definimos o local para salvar o arquivo de texto

//$escreve = " Mesa: $mesa\n\n Comidas\n\n Pedido(s):\n $ped_comidas\n Sabor: $ped_sabor\n Qnt: $qnt_comidas\n Valor: $valor_unit_comidas\n Sub-Total: $sub_total\n\n\n\n\n\n\n\n\n\n\n\ n "; // A variavel escreve será o que desejamos imprimir e escrever no arquivo de texto
$escreve = array();
$escreve[]= $L1;
$escreve[]= $L2;
$escreve[]= $L3;
$escreve[]= $L4;
$escreve[]= $L5;

for($lop = 0; $lop < count($escreve);$lop++){

echo ($escreve[$lop]);

}

$fp = fopen($local_file, "w+"); //utilizamos o operador w+ para criar o arquivo imprimir.txt, e APAGAR tudo que já exise nele, caso ele já exista.
$salva = fwrite($fp, $escreve);
fclose($fp);
// Agora que já temos o arquivo imprime.txt, no local indicado por $local_fil, basta mandar imprimir:

//system("copy " . $local_file . " lpt1:"); // Envia o arquivo para a porta LPT1

printf ("<br>O texto: \"%s\" está sendo impresso. Por favor, aguarde.", $escreve);
?>
</BODY>
</HTML>
