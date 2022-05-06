<?php 
//
############################################
# NAME: functions.php
# AUTHOR: ALEX MENDES SILVA
# LICENSE: GNU General Public License
# DATE: 21/12/2005
# NAME: CALENDAR
############################################
# INTEGRA��O COM BANCO DE DADOS
# Autor: Cleiton Ferreira
# E-Mail: cf-design@hotmail.com
# DATA: 01/07/2009
# SITE: www.rondohost.com.br / www.novorafest.com.br
# NOTA: N�o retire os creditos do fonte, OBRIGADO.
#####################################################
//
class CALENDAR{
		//Inseri eventos
		function AddEvent($d="", $m="", $Y="", $description="", $link="", $target=""){

				$_SESSION['EVENTS'][$Y][$m][$d] = $description;
				$_SESSION['LINKS'][$Y][$m][$d]	=	$link;
				$_SESSION['TARGET'][$Y][$m][$d]	=	$target;
		}
		//Monta e mostra o calend�rio
		function ShowCalendar($language="",$title=1,$width="100%",$height="100%"){
				// Pr�ximo m�s
				if ($_GET['month'] || $_GET['year']){
								$month_forward		= 	($_GET['month']==12)	?	1 : $_GET['month']+1;
								$year_forward			=		($_GET['month']==12)	? $_GET['year']+1 : $_GET['year'];
								$month_previous		= 	($_GET['month']==1)		? 12 : $_GET['month']-1;
								$year_previous		=		($_GET['month']==1)		? $_GET['year']-1 : $_GET['year'];
								$month 						= 	$_GET['month'];
								$year 						= 	$_GET['year'];
				// M�s corrente
				}else{
								$month_forward		=		(intval(date("m"))==12) ? 1 : intval(date("m"));
								$year_forward			=		(intval(date("m"))==12) ? date("Y")+1 : date("Y");
								$month_previous		=		(intval(date("m"))==1)	? 12 : intval(date("m"));
								$year_previous		=		(intval(date("m"))==1)	? date("Y")-1 : date("Y");
								$month 						= 	intval(date("m"));
								$year 						=		date("Y"); 
				}
				// Escolhe o idioma (dispon�vel apenas em portugues e ingl�s)
				if ($language == "en"){
								$MONTHS 		=		array("","January","February","March","April","May","June","July","August","September","October","November","December");
								$WEEKDAYS		=		array("S","M","T","W","T","F","S");
								$PREVIOUS		=		"Previous";
								$NEXT				=		"Next";
				} else {
								$MONTHS 		=		array("","Janeiro","Fevereiro","Mar�o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
								$WEEKDAYS		=		array("D","S","T","Q","Q","S","S");
								$PREVIOUS		=		"Anterior";
								$NEXT				=		"Pr�ximo";
				}
				$week_day 	= 	date("w", mktime(0,0,0,$month,1,$year));// dia da semana				
				$day_num	 	= 	date("t", mktime(0,0,0,$month,1,$year));// total de dias no m�s
				$today			=		date("d", time());// hoje
				$num				=		1;
				$wd					=		1;
				// Monta a estrutura - dias, semanas - dentro do m�s corrente
				for($d=1 ; $d<=$day_num ; $d++){
								$DAYS[$wd][$week_day]	=	$d;
								if($num==7)$num=1;
								$num++;	
								$week_day++;
								if($week_day==7){
												$week_day	=	0;
												if ($d < $day_num)$wd++;	
								}			
				}
				$tbl[] = "<style>a {text-decoration:none;color:#0000ff;font-weight:bold;text-decoration: underline;
}</style>";
				$tbl[] = "<table cellpadding=1 cellspacing=0 border=0 width=$width height=$height>";
				$tbl[] = "<tr>";
				$tbl[] = "<td>";
				// Mostra m�s, ano e navegador no topo
				if ($title){
								$tbl[] = "<table style='text-align:center; color:#000000; font-size:16px; font-family:verdana; border-right:1px #a0a0a0 solid;border-bottom:1px #a0a0a0 solid' border=0 cellspacing=0 cellpadding=0 bgcolor='#E0E0E0' width=100% height=100%><tr>";
								$tbl[] = "<td width=1%><button style='cursor:pointer; cursor:hand; border:0px; background:#333333' onclick=\"window.location='".$_SERVER['PHP_SELF']."?month=$month_previous&year=$year_previous'\"><font color=#ffffff><<</font></button></td>";
								$tbl[] = "<td width=98%>".$MONTHS[$month]." ".$year."</td>";
								$tbl[] = "<td width=1%><button style='cursor:pointer; cursor:hand; border:0px; background:#333333' onclick=\"window.location='".$_SERVER['PHP_SELF']."?month=$month_forward&year=$year_forward'\"><font color=#ffffff>>></font></button></td>";
								$tbl[] = "</tr></table>";
				}
				$tbl[] = "<td>";
				$tbl[] = "</tr>";
				$tbl[] = "<tr>";
				$tbl[] = "<td>";
				$tbl[] = "<table style='border-right:1px #c0c0c0 solid;border-bottom:1px #a0a0a0 solid' border=0 cellspacing=2 cellpadding=0 bgcolor='#f4f4f4' width=100% height=100%>";
				$tbl[] = "<tr align=center bgcolor=#CCCCCC style='font-size:11px; font-family:verdana'>";
				// Dias da semana
				$tbl[] = "<td style='color:#ff0000;background:#cccccc'>$WEEKDAYS[0]</td><td>$WEEKDAYS[1]</td><td>$WEEKDAYS[2]</td><td>$WEEKDAYS[3]</td><td>$WEEKDAYS[4]</td><td>$WEEKDAYS[5]</td><td>$WEEKDAYS[6]</td>";
				$tbl[] = "</tr>";
				
				print_r ($_SESSION['EVENTS'][$month]);
				for($i=1 ; $i<=($wd) ; $i++){

									$tbl[] = "<tr>";
									$j=0;
									while($j<=6){
													$tbl[] = "<td style='border-right:1px #c0c0c0 solid;border-bottom:1px #a0a0a0 solid'>";
													$tbl[] = "<table>";
													$tbl[] = "<tr>";
													//Dias do M�s
													// Adiciona os Eventos aos dias
													unset($HREF);unset($HREF_END);
													if(isset($_SESSION)){
															if ($_SESSION['EVENTS'][$year][$month]){
																			$event_day = $DAYS[$i][$j];
																			if ($_SESSION['EVENTS'][$year][$month][$event_day]){
																				
																							$HREF			=	"<a href='{$_SESSION['LINKS'][$year][$month][$event_day]}' target='{$_SESSION['TARGET'][$year][$month][$event_day]}' title='{$_SESSION['EVENTS'][$year][$month][$event_day]}'>";
																							$HREF_END	=	"</a>";
																			}
															}
													}
													//Destaque do dia de HOJE!!
													if($DAYS[$i][$j] == $today){
																	$tbl[] = "<td style='font-size:14px; font-family:verdana; color:#FF0000; font-weight:bold; align=center;'>$HREF{$DAYS[$i][$j]}$HREF_END</td>";
													} else if ($j==0){
																	$tbl[] = "<td style='font-size:10px; font-family:verdana; color:#FF0000; text-align:center'>$HREF{$DAYS[$i][$j]}$HREF_END</td>";
													} else {
																	$tbl[] = "<td align=center style='font-size:13px; font-family:verdana; text-align:center'>$HREF{$DAYS[$i][$j]}$HREF_END</td>";
													}
													$tbl[] = "</tr>";
													$tbl[] = "</table	>";
													$tbl[] = "</td>";
													$j++;
									}
									$tbl[] = "</tr>";
				}
				$tbl[] = "</table>";
				$tbl[] = "</td>";
				$tbl[] = "</tr>";
				$tbl[] = "</table>";

				echo implode("\n",$tbl);
		}
}
?>