function ImprImprimir(Linha,Coluna,Texto){
var DifeL = Linha - this.Linha ;
for (i=1;i0){
Texto = Replicate(? ?,DifeC)+Texto ;
}

this.Texto = this.Texto + Texto ;
this.Coluna = this.Texto.length ;
}

function ImprFechar(){
if (this.Texto!=?"){
this.objTextFile.WriteLine(this.Texto);
}

this.Linha = 0 ;
this.Coluna = 0 ;
this.Texto = ?? ;
this.objTextFile.Close();
}

function ImprAbrir(){
var ForReading = 1, ForWriting = 2, ForAppending = 8;
this.Arquivo = ?c:\?+this.Porta ;
this.objTextFile = this.objFSO.CreateTextFile(this.Arquivo, true);
}

function ImprAbrirLeitura(){
var ForReading = 1, ForWriting = 2, ForAppending = 8;
this.Arquivo = ?c:\?+this.Porta ;
this.objTextFile = this.objFSO.OpenTextFile(this.Arquivo, ForReading);
}

function ImprAjustarLC(Linha,Coluna){
this.Linha = Linha ;
this.Coluna = Coluna ;
}

function ImprEject(){
this.Linha = 0 ;
this.Coluna = 0 ;
this.Texto = this.Texto+String.fromCharCode(12) ;
}

function ImprNCOMP(){
this.Texto = this.Texto+String.fromCharCode(15) ;
}

function ImprCOMPN(){
this.Texto = this.Texto+String.fromCharCode(18) ;
}
function ImprLerTudo(){
return this.objTextFile.ReadAll() ;
}

function Impr(){
this.Linha = 0 ;
this.Coluna = 0 ;
this.Texto = ?? ;
this.Porta = ?USB″ ;
this.Arquivo = ?c:\?+this.Porta ;

this.Imprimir = ImprImprimir ;
this.Fechar = ImprFechar ;
this.Abrir = ImprAbrir ;
this.AjustarLC = ImprAjustarLC ;
this.Eject = ImprEject ;
this.LerTudo = ImprLerTudo ;
this.AbrirLeitura = ImprAbrirLeitura ;

this.NCOMP = ImprNCOMP ;
this.COMPN = ImprCOMPN ;

this.objFSO = new ActiveXObject(?Scripting.FileSystemObject?);

}