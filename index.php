
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>:: UNESP  :  Campus de Presidente Prudente  ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- DEPENDENDO DA LOCALIZAÇÃO DO SEU ARQUIVO DENTRO DA HIERARQUIA DAS PASTAS DO SEU SITE, A FOLHA DE ESTILOS PODE NÃO ENCONTRAR O CAMINHO CORRETO, SE DER ERRO AO VISUALIZAR O ARQUIVO, VERIFIQUE O CAMINHO QUE DEVE SER COLOCADO NA SUA PÁGINA (SOMENTE A PÁGINA QUE ESTÁ COM ERRO) PARA SOLUCIONAR O PROBLEMA - ENTRE EM CONTATO COM O ADMINISTRADOR DE REDES LOCAL PARA IDENTIFICAR O CAMINHO  --><link href="http://www.fct.unesp.br/includes/folha.css" rel="stylesheet" type="text/css">
<link href="http://www.fct.unesp.br/includes/imprimir.css" rel="stylesheet" media="print" type="text/css">

</head>

 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="FundoPaginaInterna"><!-- TROQUE O CAMINHO DE ACESSO CONFORME A LOCALIZAÇÃO DO SEU ARQUIVO - INFORME-SE COM O ADMINISTRADOR DA REDE -->
<?php include "/root/www/includes/ssi_topo.php"; ?>
<table width="770" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="150" height="86">&nbsp;</td>
      <td width="10">&nbsp;</td>
      <td width="615">&nbsp;</td>
    </tr>
    <tr>
      <td width="150" valign="top" class="MenuEsqFundo03">
      <!-- TROQUE O CAMINHO DE ACESSO CONFORME A LOCALIZAÇÃO DO SEU ARQUIVO - INFORME-SE COM O ADMINISTRADOR DA REDE -->
<?php include "/root/www/includes/ssi_menu_esquerdo_sem_menu.php"; ?>
      </td>
    <TD width=10>&nbsp;</TD>
    <TD vAlign=top>
      <TABLE cellSpacing=0 cellPadding=0 width="100%"
border=0>
        <TBODY>
        <TR>
          <TD vAlign=top height=20>
            <TABLE cellSpacing=4 cellPadding=4 width="100%"
border=0>
              <TBODY>
			  <TR>
                    <TD height="48" class="nomearea">FCT - Faculdade de Ci&ecirc;ncias
                      e Tecnologia :::</TD>
              </TR>
			  <TR>
                    <TD height="27" bgcolor="799ab4" class="tabela-titulo" ><strong>Pastas</strong></TD>
              </TR>
<?php include "/root/www/includes/funcoes_php/lista_diretorio.php"; ?>
<?php
                //Função que lista os documentos do diretório
				//Implementação: Lucas e Raphael
				lista_documentos();
?>
			    <TR>
                  <TD>&nbsp;</TD>
                </TR>
              </TBODY></TABLE></TD></TR></TBODY></TABLE>
      </TD>
    </TR></TABLE>
<?php include "/root/www/includes/ssi_rodape.php"; ?></BODY></HTML>
