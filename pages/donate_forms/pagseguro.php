<?php

											
										
						
 $main_content .= '
 <div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
				<div class="Text">Donate por Pagseguro</div>
				<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiarl/images/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiarl/images/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiarl/images/content/box-frame-edge.gif);"></span>
					</div>
						</div>
						</div><div style="text-align: justify;border: 1px solid black">
<br><div style="text-align: justify"><img src="layouts/tibiarl/images/content/bullet.gif">Em primeiro lugar &eacute; sempre bom lembrar que a <b>Equipe do HardStyller</b> n&atilde;o tem interesses financeiros, o dinheiro das doa&ccedil;&otilde;es servem para manter o servidor online e trazer mais divers&otilde;es a todos n&oacute;s.
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Que fique bem claro que, o que voc&ecirc; est&aacute; fazendo &eacute; uma doa&ccedil;&atilde;o, doar &eacute; da, n&oacute;s da equipe n&atilde;o estamos fazendo nem um tipo de venda ou coisa parecida!</br>
</div>
<div style="text-align: justify;"><img src="layouts/tibiarl/images/content/bullet.gif">Para da inc&iacute;o a sua doa&ccedil;&atilde;o veja os detalhes e op&ccedil;&otilde;es abaixo:</br>
</div>
<br><table width="100%" border="2" cellpadding="4" cellspacing="1">
<tbody><tr>
  <td class="white" colspan="3" bgcolor="#505050"><span class="style4">Detalhes da bonifica&ccedil;&atilde;o de Points.</span></td>

</tr>
<tr bgcolor="#f1e0c6"><td width="35%"><b>Doa&ccedil;&atilde;o</b></td><td width="35%"><b>Points</b></td></tr>
<tr bgcolor="#d4c0a1"><td>R$5,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 5 Points</td></tr>

<tr bgcolor="#f1e0c6"><td>R$10,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 10 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$20,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 20 Points</td></tr>
<tr bgcolor="#f1e0c6"><td>R$40,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 40 Points</td></tr>
<tr bgcolor="#d4c0a1"><td>R$60,00</td><td><img src="layouts/tibiarl/images/content/bullet.gif"> 60 Points</td></tr>
<tr bgcolor="#f1e0c6"><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center><td><center><img src="layouts/tibiarl/images/content/bullet.gif"> E assim por diante!!! <img src="layouts/tibiarl/images/content/bullet.gif"></center></td></tr></div>
';

$main_content .= '
<table border="2px" align="center"><tr><td> 
<form method="post" target="_new" action="https://pagseguro.uol.com.br/security/webpagamentos/webpagto.aspx" name="LOGIN" class="formulario">
<input type="hidden" name="ref_transacao" value="'.$account_logged->getName().'" />
<input type="hidden" name="email_cobranca" value="evilserv@hotmail.com">
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
	  
	  <option value="31,00">R$31,00</option>
 
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
	  
	  <option value="95,00">R$95,00</option>

      <option value="100,00">R$100,00</option>
	  
	  <option value="105,00">R$105,00</option>

      <option value="110,00">R$110,00</option>
	  
	  <option value="115,00">R$115,00</option>

      <option value="120,00">R$120,00</option>
	  
	  <option value="125,00">R$125,00</option>

      <option value="130,00">R$130,00</option>
	  
	  <option value="135,00">R$135,00</option>

      <option value="140,00">R$140,00</option>
	  
	  <option value="145,00">R$145,00</option>

      <option value="150,00">R$150,00</option>
	  
	  <option value="155,00">R$155,00</option>

      <option value="160,00">R$160,00</option>
	  
	  <option value="165,00">R$165,00</option>

      <option value="170,00">R$170,00</option>
	  
	  <option value="175,00">R$175,00</option>
 
      <option value="180,00">R$180,00</option>
	  
	  <option value="185,00">R$185,00</option>

      <option value="190,00">R$190,00</option>
	  
	  <option value="195,00">R$195,00</option>
 
      <option value="200,00">R$200,00</option>
	  
	  <option value="210,00">R$210,00</option>
	  
	  <option value="220,00">R$220,00</option>
	  
	  <option value="230,00">R$230,00</option>
	  
	  <option value="240,00">R$240,00</option>
	
      <option value="250,00">R$250,00</option>
	  
	  <option value="260,00">R$260,00</option>
	  
	  <option value="270,00">R$270,00</option>
	  
	  <option value="280,00">R$280,00</option>
	  
	  <option value="290,00">R$290,00</option>
	
      <option value="300,00">R$300,00</option>
	  
	  <option value="310,00">R$310,00</option>
	  
	  <option value="320,00">R$320,00</option>
	  
	  <option value="330,00">R$330,00</option>
	  
	  <option value="340,00">R$340,00</option>
	
      <option value="350,00">R$350,00</option>
	  
	  <option value="360,00">R$360,00</option>
	  
	  <option value="370,00">R$370,00</option>
	  
	  <option value="380,00">R$380,00</option>
	  
	  <option value="390,00">R$390,00</option>
	
      <option value="400,00">R$400,00</option>
	  
	  <option value="410,00">R$410,00</option>
	  
	  <option value="420,00">R$420,00</option>
	  
	  <option value="430,00">R$430,00</option>
	  
	  <option value="440,00">R$440,00</option>
	  
	  <option value="450,00">R$450,00</option>
	  
	  <option value="460,00">R$460,00</option>
	  
	  <option value="470,00">R$470,00</option>
	  
	  <option value="480,00">R$480,00</option>
	  
	  <option value="490,00">R$490,00</option>
	  
	  <option value="500,00">R$500,00</option>


                                </select>

  </label></td>

</tr></tbody></table>


</td>
</tr>
<br> 

<br> 

<input type="hidden" name="item_frete_1" value="000">  

<table border="0px" align="center"><tbody><tr><td><input type="submit" value="Finalizar Compra"></td></tr></tbody></table> 
';
	
