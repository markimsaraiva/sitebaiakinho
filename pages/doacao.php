
<?PHP
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
if($action == '')
	{
  $main_content .=' 
 <div id="ProgressBar">  <div id="Headline">Informa��es Iniciais</div>  <div id="MainContainer">    <div id="BackgroundContainer">    
 <img id="BackgroundContainerLeftEnd" src="layouts/tibiarl/images/vips/stonebar-left-end.gif">      <div id="BackgroundContainerCenter">       
 <div id="BackgroundContainerCenterImage" style="background-image: url(layouts/tibiarl/images/content/stonebar-center.gif);"></div>      </div>
 <img id="BackgroundContainerRightEnd" src="layouts/tibiarl/images/vips/stonebar-right-end.gif">    </div>   
 <img id="TubeLeftEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-left-blue.gif">
 <img id="TubeRightEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-right-blue.gif">   
 <div id="FirstStep" class="Steps">
      <div class="SingleStepContainer">
         <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-0-blue.gif">      
 <div class="StepText" style="font-weight: bold;">Regras da Doa��o</div>
      </div>
    </div>
    <div id="StepsContainer1">
      <div id="StepsContainer2">    
 <div class="Steps" style="width: 25%;">
          <div class="TubeContainer">
            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">   
 </div>
          <div class="SingleStepContainer">
            <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-1-blue.gif">           
 <div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
          </div>
        </div>
        <div class="Steps" style="width: 25%;">         
 <div class="TubeContainer">
            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">
          </div>
          <div class="SingleStepContainer"> 
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-2-blue.gif">
            <div class="StepText" style="font-weight: normal;">Informa��es do Pedido</div>   
 </div>
        </div>
        <div class="Steps" style="width: 25%;"> 
         <div class="TubeContainer">    
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">
          </div>
          <div class="SingleStepContainer">       
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-3-blue.gif">
            <div class="StepText" style="font-weight: normal;">Confirma��o</div>   
 </div>
        </div>
        <div class="Steps" style="width: 25%;">
          <div class="TubeContainer">          
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">         
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-4-blue.gif">            <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>    
 </div>        </div>      </div>    </div>  </div></div><div class="TableContainer">  <div class="CaptionContainer">      <div class="CaptionInnerContainer">     
  <span class="CaptionEdgeLeftTop" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>       
  <span class="CaptionEdgeRightTop" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>    
  <span class="CaptionBorderTop" style="background-image: url(layouts/tibiarl/images/content/table-headline-border.gif);"></span>   
  <span class="CaptionVerticalLeft" style="background-image: url(layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>   
  <div class="Text">Informa��es Iniciais para sua doa��o.</div>       
  <span class="CaptionVerticalRight" style="background-image: url(layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>      
  <span class="CaptionBorderBottom" style="background-image: url(layouts/tibiarl/images/content/table-headline-border.gif);"></span>   
  <span class="CaptionEdgeLeftBottom" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>   
  <span class="CaptionEdgeRightBottom" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>     
  </div>
    </div>
    <table class="Table1" cellpadding="0" cellspacing="0"> 
   <tbody><tr>
      <td>
        <div class="InnerTableContainer">       
  <table style="width: 100%;"><tbody><tr><td>
Informamos aos jogadores e colaboradores que o '.$config['server']['serverName'].' Alternate Tibia Server n�o tem nenhum interesse financeiro. Toda a renda obtida � diretamente reaplicada para a manuten��o do servidor - isto significa que ao fazer uma doa��o, voc� est� garantindo a estabilidade e aumentando a qualidade do mesmo.</br></br>
Os pontos que s�o repassados aos jogadores que efetuam as doa��es n�o representam nada mais al�m de nossa gratifica��o, isto �, voc� n�o est� comprando pontos e sim recebendo uma gratifica��o simb�lica (em formas de pontos) que te beneficie dentro do jogo; voc� poder� usar os seus pontos da maneira que desejar.</br></br>
O esp�rito deste sistema � simples: com o intuito de nos aproximarmos dos jogadores e fazer com que voc�s se sintam em casa, entendemos a sua doa��o como uma via de m�o dupla no quesito credibilidade. Ao acreditar que vale a pena investir na manuten��o do servidor, n�s investimos em voc�s creditando-os com pontos, que como j� dito anteriormente, podem ser utilizados da maneira que mais os couber.</br></br>
Confira as <a href="?subtopic=beneficiospremium">Vantagens Vips</a> e o <a href="?subtopic=shopsystem">'.$config['server']['serverName'].' Shop</a> e saiba como aproveitar os seus pontos da maneira mais proveitosa � sua situa��o.</br>

<h3>D�vidas Frequentes</h3></br>
<b>Mas o que s�o Premium Points?</b>
Premium Points faz parte do nosso sistema de doa��o, com eles voc� pode adquirir uma VIP ou algo mais que esteja dispon�vel no Shopping Online.</br></br>

<b>O que � uma VIP Account?</b>
Uma VIP Account traz habilidades e vantagens adicionais dentro e fora do jogo por um determinado per�odo de tempo. Para saber mais sobre os beneficios por favor visite a se��o <a href="?subtopic=beneficiospremium">Vantagens Vips</a>.</br></br>

<b>Como efetuar a doa��o?</b>
<br>Clique no bot�o <b>"Continue"</b> e siga todos os procedimentos para realizar sua doa��o.

  </td></tr>          </tbody></table>        </div>
  </td></tr></tbody></table></div><br><center><table border="0" cellpadding="0" cellspacing="0">
  <tbody><tr><td style="border: 0px none;">
  <div class="BigButton" style="background-image: url(layouts/tibiarl/images/buttons/sbutton.gif);">
  <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(layouts/tibiarl/images/buttons/sbutton_over.gif);"></div>
  <a href="?subtopic=donate&action=rules"><input class="ButtonText" name="Continue" alt="Continue" onclick=location.href="index.php?subtopic=donate&action=rules" src="layouts/tibiarl/images/vips/_sbutton_continue.gif" type="image"></a></div></div></td></tr></tbody></table></center> 
	 




';
	}
elseif($action == 'rules')
	{
		if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
  $main_content .='<div id="ProgressBar">  <div id="Headline">Regras & Informa��es</div>  <div id="MainContainer">    <div id="BackgroundContainer">      <img id="BackgroundContainerLeftEnd" src="layouts/tibiarl/images/vips/stonebar-left-end.gif">      <div id="BackgroundContainerCenter">        <div id="BackgroundContainerCenterImage" style="background-image: url(layouts/tibiarl/images/content/stonebar-center.gif);"></div>      </div>      <img id="BackgroundContainerRightEnd" src="layouts/tibiarl/images/vips/stonebar-right-end.gif">    </div>    <img id="TubeLeftEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-left-green.gif">    <img id="TubeRightEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-right-blue.gif">    <div id="FirstStep" class="Steps">      <div class="SingleStepContainer">        <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-0-green.gif">        <div class="StepText" style="font-weight: bold;">Regras da Doa��o</div>      </div>    </div>    <div id="StepsContainer1">      <div id="StepsContainer2">        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-green-blue.gif">          </div>          <div class="SingleStepContainer">            <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-1-blue.gif">            <div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>          </div>        </div>        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">            <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-2-blue.gif">            <div class="StepText" style="font-weight: normal;">Informa��es do Pedido</div>          </div>        </div>        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">            <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-3-blue.gif">            <div class="StepText" style="font-weight: normal;">Confirma��o</div>          </div>        </div>        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">            <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">            <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-4-blue.gif">            <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>          </div>        </div>      </div>    </div>  </div></div><div class="TableContainer">  <div class="CaptionContainer">      <div class="CaptionInnerContainer">        <span class="CaptionEdgeLeftTop" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightTop" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>        <span class="CaptionBorderTop" style="background-image: url(layouts/tibiarl/images/content/table-headline-border.gif);"></span>        <span class="CaptionVerticalLeft" style="background-image: url(layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>        <div class="Text">Leia as Regras das Doa��es</div>        <span class="CaptionVerticalRight" style="background-image: url(layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>        <span class="CaptionBorderBottom" style="background-image: url(layouts/tibiarl/images/content/table-headline-border.gif);"></span>        <span class="CaptionEdgeLeftBottom" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>        <span class="CaptionEdgeRightBottom" style="background-image: url(layouts/tibiarl/images/content/box-frame-edge.gif);"></span>      </div>    </div>    <table class="Table1" cellpadding="0" cellspacing="0">    <tbody><tr>      <td>        <div class="InnerTableContainer">          <table style="width: 100%;"><tbody><tr><td valign="middle" width="25px;">

<B>Antes de fazer uma doa��o, lembre-se de estar de acordo com as regras vigentes e ciente de todas as informa��es necess�rias.</B><TEXTAREA ROWS="5" WRAP="physical" COLS="80" READONLY="true" style="float:right;">
1. Gerais
a) O '.$config['server']['serverName'].' � um servidor alternativo de Tibia planejado, constru�do e executado dentro das regras vigentes que possibilitam o funcionamento do mesmo sem infringir nenhuma lei (seja ela nacional ou n�o).
b) Todo o dinheiro depositado e creditado no servidor � diretamente aplicado em sua pr�pria manuten��o, isto �, todo o capital girado em torno do mesmo � diretamente canalizado para o rumo de sua autossufici�ncia.
c) O '.$config['server']['serverName'].' luta pela sua estabilidade, entretando, n�o podemos impedir que erros venham a acontecer.
d) O hist�rico de doa��es est� sendo salvado, ou seja, voc� nunca ser� esquecido.
e) O nome designado � central de trocas de pontos - '.$config['server']['serverName'].'Shop - � fict�cio; o '.$config['server']['serverName'].' n�o vende nenhum tipo de produto.
e) O '.$config['server']['serverName'].' � uma empresa sem fins lucrativos.

2. Perdas & Danos
a) Guarde o seu comprovante de doa��o. � o �nico documento que comprova a sua ajuda para a manuten��o do servidor.
b) Em caso de resets, todas as doa��es que foram realizadas no prazo de dois meses (contando a partir do dia do reset) ser�o recreditadas integralmente nas contas dos jogadores. Lembrem-se que o hist�rico de doa��es est� sendo salvo, por�m voc� tamb�m precisa comprovar a sua participa��o nas doa��es.
c) Em caso de quedas e(ou) problemas que fa�am com que o '.$config['server']['serverName'].' fique off-line, em modo de seguran�a ou de espera por tr�s dias consecutivos ou mais, os jogadores que optaram por debitar seus pontos em tempo VIP ser�o recreditados, da mesma maneira, com os dias perdidos (contando a partir do terceiro dia).
d) Em caso de paraliza��o inesperada das atividades, n�o haver� reposi��o ou recredita��o de capital investida no servidor, posto que toda doa��o � diretamente encaminhada � manuten��o do mesmo. Neste caso, os jogadores ser�o comunicados pelos ve�culos de informa��o (site oficial ou f�rum).
e) Em caso de paraliza��o pr�-programada das atividades, os jogadores ser�o informados atrav�s de nossos ve�culos de informa��o e a partir da data referida o sistema de doa��es encontrar-se-� fora do ar.
f) O '.$config['server']['serverName'].' oferece e investe na seguran�a b�sica para o servidor, cabe a voc� mant�-lo seguro; ou seja, n�o nos responsabilizamos pelos seus pertencens, personagens e contas.

3. Denota��o # Doa��o
a) Ato ou efeito de doar. 
b) Aquilo que se doa.
c) Contrato, ou documento que assegura e legaliza a doa��o simples: a que � feita por exclusiva resolu��o do doador.
</TEXTAREA>As regras e informa��es dispostas na caixa de di�logo acima podem ser modificadas sem aviso pr�vio.<br>
Caso voc� n�o concorde com a contrata��o sobre a doa��o simples por favor n�o prossiga.


       </tbody></table>        </div>  </td></tr></tbody></table></div><br><table width="100%"><tbody><tr align="center"><td><table border="0" cellpadding="0" cellspacing="0">
	   <tbody><tr><td style="border: 0px none;">
	   <a href="javascript:void();" onclick=location.href="?subtopic=donate&action=pag_form">
	   <div class="BigButton" style="background-image: url(layouts/tibiarl/images/buttons/sbutton.gif);">
	   <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(layouts/tibiarl/images/buttons/sbutton_over.gif);"></div>
	   <input class="ButtonText" name="Continue" alt="Continue" src="layouts/tibiarl/images/vips/_sbutton_continue.gif" type="image">

	   </div></div></a></td></tr><tr></tr></tbody></table></td><td><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td style="border: 0px none;">
	   <a href="javascript:void();" onclick=location.href="?subtopic=donate"><div class="BigButton" style="background-image: url(layouts/tibiarl/images/buttons/sbutton.gif);">
	   <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(layouts/tibiarl/images/buttons/sbutton_over.gif); visibility: hidden;"></div>
	   <input class="ButtonText" name="Back" alt="Back" src="layouts/tibiarl/images/vips/_sbutton_back.gif" type="image">
	   </table></td></tr></tbody></table>
	   	   	   		 



';
		}
	}
elseif($action == 'selectchar')
	{
	    if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
	
		$main_content .= '

<h1>Selecione o player</h1><BR>
			<form action="index.php?subtopic=donate&action=pag_form" method=POST> 
			<table border="0" cellpadding="1" cellspacing="1" width="100%"> 
			<tr bgcolor="#505050"><td colspan="2"><font color="#FFFFFF"><b>Select the character you want receive the donate.</b></font></td></tr> 
			<tr bgcolor="#D4C0A1"><td width="110"><b>Nome:</b></td><td width="550"><select name="buy_name">';
            $players_from_logged_acc = $account_logged->getPlayersList();
            if(count($players_from_logged_acc) > 0)
            {
              $players_from_logged_acc->orderBy('name');
              foreach($players_from_logged_acc as $player)
              {
                $main_content .= '<option>'.$player->getName().'</option>';
              }
            }
            else
            {
              $main_content .= 'Voce n�o tem nenhum char nessa account.';
            }
		$main_content .= '</table> 
		<br><center><input type="image" value="submit" src="layouts/tibiarl/images/buttons/sbutton_submit.gif"/> 
		</form>';
		}
	

	}
elseif($action == 'pag_form')
	{
	    if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
		$buy_name = stripslashes(urldecode($_POST['buy_name']));
		$main_content .= '<div id="ProgressBar">  <div id="Headline">M�todo de Pagamento</div>  <div id="MainContainer">    <div id="BackgroundContainer">      

<img id="BackgroundContainerLeftEnd" src="layouts/tibiarl/images/vips/stonebar-left-end.gif">      <div id="BackgroundContainerCenter">        
<div id="BackgroundContainerCenterImage" style="background-image: url(layouts/tibiarl/images/content/stonebar-center.gif);"></div>     
 </div>      <img id="BackgroundContainerRightEnd" src="layouts/tibiarl/images/vips/stonebar-right-end.gif">    </div>    
 <img id="TubeLeftEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-left-green.gif">    
 <img id="TubeRightEnd" src="layouts/tibiarl/images/vips/progress-bar-tube-right-blue.gif">    <div id="FirstStep" class="Steps">     
 <div class="SingleStepContainer">        <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-0-green.gif">       
 <div class="StepText" style="font-weight: normal;">Regras da Doa��o</div>      </div>    </div>    <div id="StepsContainer1">      
 <div id="StepsContainer2">        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">          
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-green.gif">          </div>          <div class="SingleStepContainer">        
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-1-green.gif">          <div class="StepText" style="font-weight: bold;">Metodo de Pagamento</div>    
 </div>        </div>        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">          
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-green-blue.gif">          </div>          <div class="SingleStepContainer">           
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-2-blue.gif">            <div class="StepText" style="font-weight: normal;">Informa��es do Pedido</div>     
 </div>        </div>        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">          
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">         
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-3-blue.gif">            <div class="StepText" style="font-weight: normal;">Confirma��o</div>  
 </div>        </div>        <div class="Steps" style="width: 25%;">          <div class="TubeContainer">         
 <img class="Tube" src="layouts/tibiarl/images/vips/progress-bar-tube-blue.gif">          </div>          <div class="SingleStepContainer">      
 <img class="StepIcon" src="layouts/tibiarl/images/vips/progress-bar-icon-4-blue.gif">            <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>   
 </div>        </div>      </div>    </div>  </div></div>Voc� est� prestes a escolher um m�todo de pagamento para fazer a sua doa��o!<br><br>


<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%> 
				<form action="index.php?subtopic=donate&action=tipo" method="POST"><input type="hidden" name="char_name" value=""> 
				<TR BGCOLOR="#505050"> 
					<TD CLASS=white COLSPAN=3><B>Escolha o M�todo de Pagamento</B></TD> 
				</TR> 
				<TR BGCOLOR=#D4C0A1> 
                                <TD><input type="radio" name="method" value="1" checked="checked"> PagSeguro - Cart�o de cr�dito/boleto</TD>
				
				</TR>

                                <TR BGCOLOR="#505050"> 
				<TR BGCOLOR=#D4C0A1>

					<TD><input type="radio" name="method" value="2"> Paypal - Credit Cards/International Transactions</TD>
				</TR>
				

                                <TD><input type="radio" name="method" value="3"> Banco do Brasil e Caixa Economica - Depositos/DOCS/Transferencias Bancarias</TD>
				</TR>
								<TR BGCOLOR="#505050"> 
				<TR BGCOLOR=#D4C0A1>
 
												
								
				
			</TABLE>
       </tbody></table>        <br><table width="100%"><tbody><tr align="center"><td><table border="0" cellpadding="0" cellspacing="0">
	   <tbody><tr><td style="border: 0px none;">
	   <a href="javascript:void();" onclick=location.href="?subtopic=donate&action=pag_form">
	   <div class="BigButton" style="background-image: url(layouts/tibiarl/images/buttons/sbutton.gif);">
	   <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(layouts/tibiarl/images/buttons/sbutton_over.gif);"></div>
	   <input class="ButtonText" name="Continue" alt="Continue" src="layouts/tibiarl/images/vips/_sbutton_continue.gif" type="image">

	   </table></td></tr></tbody></table>';
		}$_SESSION["nome"] = stripslashes(urldecode($_POST['method']));
	}
elseif($action == 'tipo')
	{
	    if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
		$buy_tipo = stripslashes(urldecode($_POST['method']));
		if($buy_tipo == 1) {		
        $main_content .= '
<table><tr><td> 
<form method="post" target="_new" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" name="LOGIN" class="formulario">
<input type="hidden" name="ref_transacao" value="'.$account_logged->getName().'-sv" />
<input type="hidden" name="email_cobranca" value="claytonguths@hotmail.com">
<input type="hidden" name="tipo" value="CP">
<input type="hidden" name="moeda" value="BRL">
<input type="hidden" name="item_id_1" value="2000050">
<table><tbody><tr><td><strong>Nome do Seu Character (Sem erro):</strong></td></tr></tbody></table>
<table><tbody><tr><td><input type="text" name="item_descr_1"></td></tr></tbody></table><br> 

<input type="hidden" name="item_quant_1" value="1"> 
<table><tbody><tr>
<td width="153"><span class="style11 style4">
<strong>Valor do pagamento:</strong>
</span>
</td>
</tr>
</tbody></table> 

<table border="0"><tbody><tr>

  <td width="96"><label>

    <select name="item_valor_1" id="item_valor_1" tabindex="2">

      <option selected>Selecione</option>

      
     
 
      <option value="5,00">R$5,00</option>

      <option value="10,00">R$10,00</option>

      <option value="15,00">R$15,00</option>

      <option value="20,00">R$20,00</option>
 
      <option value="25,00">R$25,00</option>

      <option value="30,00">R$30,00</option>
 
      <option value="35,00">R$35,00</option>
     
      <option value="40,00">R$40,00</option>

      <option value="45,00">R$45,00</option>

      <option value="50,00">R$50,00</option>

      <option value="55,00">R$55,00</option>
 
      <option value="60,00">R$60,00</option>

      <option value="65,00">R$65,00</option>       

      <option value="70,00">R$70,00</option>
      
      <option value="75,00">R$75,00</option>

      <option value="80,00">R$80,00</option>
   
      <option value="85,00">R$85,00</option>


      <option value="90,00">R$90,00</option>

      <option value="100,00">R$100,00</option>

      <option value="110,00">R$110,00</option>

      <option value="120,00">R$120,00</option>

      <option value="130,00">R$130,00</option>

      <option value="140,00">R$140,00</option>

      <option value="150,00">R$150,00</option>
 
      <option value="200,00">R$200,00</option>

                                </select>

  </label></td>

</tr></tbody></table>


</td>
</tr>
<br> 

<br> 

<input type="hidden" name="item_frete_1" value="000">  

<table><tbody><tr><td><input type="submit" value="Finalizar Compra"></td></tr></tbody></table> 
';
			}
				if($buy_tipo == 3) {		
        $main_content .= '
<table border="0" cellspacing="1" cellpadding="4" width="100%">
        <tr bgcolor="#505050"><td colspan="1" class="white"><center><b>Informa&ccedil;&otilde;es da Conta</b></center></td></tr>


        <tr bgcolor="#D4C0A1"><td>Nome: Clayton Andrey Guths<br>
Banco: Caixa Economica<br>
Ag&ecirc;ncia: 1544<br>
Conta Poupan�a: 39542-3<br>

<p><img src=http://autoblogg.com/wp-content/uploads/2014/03/caixloter.jpg>







</td></tr>
        

<table border="0" cellspacing="1" cellpadding="4" width="100%">
        <tr bgcolor="#505050"><td colspan="1" class="white"><center><b>Informa&ccedil;&otilde;es da Conta</b></center></td></tr>
        <tr bgcolor="#D4C0A1"><td>Nome: Clayton Andrey Guths<br>
Banco: Banco do Brasil<br>
Ag&ecirc;ncia: 3126-7<br>
Conta Corrente: 85544-8<br>

<p><img src=http://images.all-free-download.com/images/graphicthumb/banco_do_brasil_1_132882.jpg>

<p>Procedimento para compras com dep�sitos banc�rios:
Ap�s efetuar o dep�sito pedimos que mande um email com o comprovante de confirma��o da doa��o para <font color=green> claytonguths@hotmail.com</font> com foto para anexo e
com o seguinte conte�do:
#Nome do char
#Valor do dep�sito

Pedimos que aguarde a confirma��o!
Prazo para entrega dos points � 24 horas.



</td></tr>
        </table><br/>';

}
				elseif($buy_tipo == 4) {		
        $main_content .= '
	<center><h1>Onebip - Sistema de Pagamento pelo celuar via SMS</center></h1>
	';
	
	$main_content .= '<center>
	<table border="0" cellspacing=1 cellpadding=4 width="80%">
	<tr bgcolor="'.$config['site']['vdarkborder'].'">
	<center><th width="100%"><font class=black><b>Planos dispon�veis</b></font></th>
	</tr>
	</table>
	<table border="0" cellspacing=1 cellpadding=4 width="80%">
	<tr>
	<center><td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><b>Doa��o - 5R$</center></b></td>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><b>Doa��o - 10R$</center></b></td>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><b>Doa��o - 20R$</center></b></td>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><b>Doa��o - 30R$</center></b></td>
	<td bgcolor="'.$config['site']['darkborder'].'" witdh="2%"><center><b>Doa��o - 50R$</center></b></td>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b><a href="LINKDOSEUBOTAO" title="Mobile payment: send and receive money with your mobile phone">
<img src="http://www.onebip.com/tools/bts/btn04.gif" alt="Transfer money with your mobile phone credit" border="0"/>
</a></center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b><a href="LINKDOSEUBOTAO" title="Mobile payment: send and receive money with your mobile phone">
<img src="http://www.onebip.com/tools/bts/btn04.gif" alt="Transfer money with your mobile phone credit" border="0"/>
</a></center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b><a href="LINKDOSEUBOTAO" title="Mobile payment: send and receive money with your mobile phone">
<img src="http://www.onebip.com/tools/bts/btn04.gif" alt="Transfer money with your mobile phone credit" border="0"/>
</a></center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b><a href="LINKDOSEUBOTAO" title="Mobile payment: send and receive money with your mobile phone">
<img src="http://www.onebip.com/tools/bts/btn04.gif" alt="Transfer money with your mobile phone credit" border="0"/>
</a></center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b><a href="LINKDOSEUBOTAO" title="Mobile payment: send and receive money with your mobile phone">
<img src="http://www.onebip.com/tools/bts/btn04.gif" alt="Transfer money with your mobile phone credit" border="0"/>
</a></center></b></td>
	</tr>
	<tr>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Fa�a sua Doa��o</center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Fa�a sua Doa��o</center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Fa�a sua Doa��o</center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Fa�a sua Doa��o</center></b></td>
	<td bgcolor="'.$config['site']['lightborder'].'" witdh="2%"><center><b>Fa�a sua Doa��o</center></b></td></center>
	</tr>
	</table>
	<table border="0" cellspacing=1 cellpadding=4 width="80%">
	<tr bgcolor="'.$config['site']['vdarkborder'].'">
	<td width="100%"></td>
	</tr>
	</table>
	<br>
	';
	
	$main_content.='
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['vdarkborder'].'">
	<th width="100%"><font class=black>Observa&ccedil;&otilde;es</b></th>
	</tr>
	</table>
	<table border="0" cellspacing=1 cellpadding=4 width="100%">
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width="100%"><ul><li>Para efetuar com sucesso sua doa��o utilizando o sistema <b>Onebip</b> � necess�rio de aten��o: Ao enviar a mensagem voc� recebera os cr�ditos em sua conta Onebip e depois transferir para a conta do servidor, caso n�o seja feito isso seus pontos n�o v�o chegar.</li></ul></td>
	</tr>
	<tr bgcolor="'.$config['site']['darkborder'].'">
	<td width="100%"><ul><li>Todas as doa��es efetuadas no sistema <b>Onebip</b> precisam ser <a href="http://baiakfusion.com/index.php?subtopic=confirmacao">Confirmadas</a> para serem creditas em sua account, caso contr�rio seus pontos n�o ser�o creditados</li></ul></td>
	</tr>
	</table>';

}			
			if($buy_tipo == 2)
	{
	    if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
		$main_content .= '<center>Ao clicar no bot�o submit voc� ser� redirecionado para a p�gina de doa��es do PayPal, onde voc� dever� preencher os dados e concluir a doa��o.</center> 
			<br><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%> 
			<tr bgcolor="#505050"><td colspan="3"><font color="white" size="4"><b>Pedido</b></font></td></tr> 
			<tr bgcolor="#D4C0A1"><td width="100"><b>M&eacute;todo de pagamento:</b></td><td width="550" colspan="2">PayPal</TD></tr>	
			<tr bgcolor="#D4C0A1"><td width="100"><b>Account:</b></td><td width="550" colspan="2">'.$account_logged->getName().'</td></tr>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<tr bgcolor="#D4C0A1"><td width="100"><b>Pontos:</b></td><td width="550" colspan="2"><select name="amount">
  <option value="10.00">10 R$</option>
  <option value="20.00">20 R$</option>
  <option value="30.00">30 R$</option>
  <option value="40.00">40 R$</option>
  <option value="50.00">50 R$</option>
</select></td></tr>		
			</TABLE><BR> 
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="claytonguths@gmail.com">
<input type="hidden" name="lc" value="BR">
<input type="hidden" name="item_name" value="Pontos na account de nome: '.$account_logged->getCustomField("name").'">
<input type="hidden" name="custom" value="'.$account_logged->getCustomField("name").'">
<input type="hidden" name="item_number" value="1">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="notify_url" value="http://start-global.net/ipn.php">
<input type="hidden" name="return" value="http://start-global.net">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG_global.gif:NonHosted">

<BR> 
			<table style="width:100%;" ><tr align="center" ><td>
			<a href="index.php?subtopic=donate"><img border="0" src="layouts/tibiarl/images/buttons/sbutton_back.gif"></a> </TD>  
			<td><input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online."></TR> 
			</TABLE></form>';
		}
	}
		}
	}
elseif($action == 'finalps')
	{
	    if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
		$buy_quant = stripslashes(urldecode($_POST['quant']));
		$main_content .= '<center>Ao clicar no bot�o submit voc� ser� redirecionado para a p�gina de doa��es do PagSeguro, onde voc� dever� preencher os dados e concluir a doa��o.</center> 
			<br><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%> 
			<form target="pagseguro" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" method="post"><input type="hidden" name="char_name" value=""> 
			<tr bgcolor="#505050"><td colspan="3"><font color="white" size="4"><b>Confirme seus dados</b></font></td></tr> 
			<tr bgcolor="#D4C0A1"><td width="100"><b>M&eacute;todo de pagamento:</b></td><td width="550" colspan="2">PagSeguro</TD></tr>	
			<tr bgcolor="#D4C0A1"><td width="100"><b>Account:</b></td><td width="550" colspan="2">'.$account_logged->getName().'</td></tr>	
			<tr bgcolor="#D4C0A1"><td width="100"><b>Pontos:</b></td><td width="550" colspan="2">'.$buy_quant.'</td></tr>
			<tr bgcolor="#D4C0A1"><td width="100"><b>Valor:</b></td><td width="550" colspan="2">'.$buy_quant.',00</td></tr>		
			</TABLE><BR> 
	 		<center> 
<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form target="pagseguro" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" method="post">
<input type="hidden" name="email_cobranca" value="coloqueseuemaildopagseguro@meupagseguro.exemplo" />
<input type="hidden" name="tipo" value="CP" />
<input type="hidden" name="moeda" value="BRL" />
<input type="hidden" name="item_id_1" value="'.$buy_quant.'" />
<input type="hidden" name="item_descr_1" value="Pontos" />
<input type="hidden" name="item_quant_1" value="'.$buy_quant.'" />
<input type="hidden" name="item_valor_1" value="100" />
<input type="hidden" name="item_peso_1" value="0" />
<input type="hidden" name="ref_transacao" value="'.$account_logged->getName().'-sv" />

<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
<BR> 
			<table style="width:100%;" ><tr align="center" ><td>
			<a href="index.php?subtopic=donate"><img border="0" src="layouts/tibiarl/images/buttons/sbutton_back.gif"></a> </TD>  
			<td><input type="image" src="layouts/tibiarl/images/buttons/sbutton_submit.gif" name="submit" alt="Pague com PagSeguro - � r�pido, gr�tis e seguro!" /></TR> 
			</TABLE></form>';
		}
	}
elseif($action == 'finalpp')
	{
	    if(!$logged) {
		$main_content .= 'You are not logged in. <a href="?subtopic=accountmanagement">Log in</a> first to make a donate..';
		}
		else
		{
		$main_content .= '<center>Ao clicar no bot�o submit voc� ser� redirecionado para a p�gina de doa��es do PayPal, onde voc� dever� preencher os dados e concluir a doa��o.</center> 
			<br><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%> 
			<tr bgcolor="#505050"><td colspan="3"><font color="white" size="4"><b>Pedido</b></font></td></tr> 
			<tr bgcolor="#D4C0A1"><td width="100"><b>M&eacute;todo de pagamento:</b></td><td width="550" colspan="2">PayPal</TD></tr>	
			<tr bgcolor="#D4C0A1"><td width="100"><b>Account:</b></td><td width="550" colspan="2">'.$account_logged->getName().'</td></tr>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<tr bgcolor="#D4C0A1"><td width="100"><b>Pontos:</b></td><td width="550" colspan="2"><select name="amount">
  <option value="10.00">10 R$</option>
  <option value="20.00">20 R$</option>
  <option value="30.00">30 R$</option>
  <option value="40.00">40 R$</option>
  <option value="50.00">50 R$</option>
</select></td></tr>		
			</TABLE><BR> 
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="coloqueseuemaildopagseguro@meupagseguro.exemplo">
<input type="hidden" name="lc" value="BR">
<input type="hidden" name="item_name" value="Pontos na account de nome: '.$account_logged->getCustomField("name").'">
<input type="hidden" name="custom" value="'.$account_logged->getCustomField("name").'">
<input type="hidden" name="item_number" value="1">
<input type="hidden" name="currency_code" value="BRL">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="notify_url" value="http://start-global.net/ipn/ipn.php">
<input type="hidden" name="return" value="http://start-global.net">
<input type="hidden" name="rm" value="0">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG_global.gif:NonHosted">

<BR> 
			<table style="width:100%;" ><tr align="center" ><td>
			<a href="index.php?subtopic=donate"><img border="0" src="layouts/tibiarl/images/buttons/sbutton_back.gif"></a> </TD>  
			<td><input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online."></TR> 
			</TABLE></form>';
		}
	}
?>

