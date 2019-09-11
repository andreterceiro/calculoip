<html>
   <HEAD>
	<title>Endere�amento IP - exerc�cios</title>
   </head>
   <body>

<form method=post action=index.php>


<h2 align = center> <font color = "0000ff"> Resolu��o do exerc�cio 3</font> </h2> <br>

&nbsp; &nbsp; &nbsp;  Primeiro vamos verificar em que classe est� o endere�o. Convertendo o primeiro octeto para bin�rio, temos: <br>
<P align = center> 140 <sub>(10) </sub> = <font color = 0000ff> 10</font> 001100 <sub>(2)</sub> </p><br>

&nbsp; &nbsp; &nbsp; Descobrimos ent�o que o endere�o pertence � classe B, ou seja, podemos utilizar apenas os dois �ltimos octetos para dividir em sub-redes. Para dividir o endere�o em 100 sub-redes utiliz�veis devmos pegar emprestado 7 bits do campo host, pois 2<sup><font color = 0000ff>7</font></sup>-2 = 126. Lembrando que subtraimos 2 porque n�o utilizamos a primeira nem a �ltima sub-rede. Como pegamos 7 bits, o campo host est� menor. Antes ele possuia 16 bits (somando os dois octetos), agora possui 9 (16 - 7 = 9). Temos que verificar se 9 bits atendem nossa necessidade para o n�mero de hosts, ent�o calculamos: <br>

<p align = center> 2<sup><font color = 0000ff>9</font></sup>-2=510. </p><br>

&nbsp; &nbsp; &nbsp;  Lembrando que subtraimos 2 agora porque o primeiro endere�o de cada sub-rede representa a pr�pria sub-rede e o �ltimo � utilizado para broadcast dentro da sub-rede. Nossa necessidade � de 500 hosts por sub-rede, ent�o temos nossa necessidade satisfeita.<br>
&nbsp; &nbsp; &nbsp; Vamos ent�o calcular a m�scara de sub-rede. T�nhamos antes do c�lculo 16 bits para rede e 16 para host. Ap�s nosso c�lculo, temos 16 bits para rede, 7 para sub-rede e 9 para host. Como tanto os bits de rede e sub-rede s�o representados pelo algarismo "1" (em bin�rio) e na pr�tica representam a mesma coisa, poder�amos dizer tamb�m que temos 23 bits para rede/sub-rede e 9 para hosts. A m�scara fica ent�o assim: <br> <br>

<p align = center><font color = ff0000> 11111111.1111111.1111111</font><font color = 009900>0.00000000</font> <br><br> 
* <font color = ff0000> 1 = rede/sub-rede </font>,<font color = 009900> 0 = host </font> </p> <br>

&nbsp; &nbsp; &nbsp; Convertendo para decimal, temos:<br>
<p align = center>255.255.254.0 </p><br> 

&nbsp; &nbsp; &nbsp; Lembrando que quando convertemos a m�scara de bin�rio para decimal, "esquecemos" a divis�o rede/sub-rede - host e analisamos apenas a divis�o por octetos. <br> <br>

&nbsp; &nbsp; &nbsp; Agora vamos definir qual � o endere�o da �ltima sub-rede utiliz�vel. Como n�o alteramos os dois primeiros octetos, que representam a rede, n�o precisamos analis�-lo. Vamos analisar apenas os dois �ltimos octetos. Para descobrirmos qual � a d�cima sub-rede, vamos colocar o equivalente em bin�rio ao valor 10 em decimal: <br><br>

<p align = center>10<sub>(10)</sub> = 0001010<sub>(2)</sub></p><br>
&nbsp; &nbsp; &nbsp;Para facilitar, como o campo host possui 7 bits, acrescentamos tr�s algarismos bin�rios 0 � esquerda (<b>000</b>1010). Lembrando que acrescentando zeros � esquerda, n�o alteramos o valor, ou seja, 0001010 = 1010. Agora vamos aplicar o valor descoberto, preenchendo todo o campo host com o algarismo 0:<br>

<p align = center> <font color = dd00dd> 0001010</font><font color = aaaa00>0.00000000</font> <br><br>
<font color = dd00dd> 7 bits de sub-rede</font>, <font color = aaaa00>9 bits de host</font> </p> <br> 

&nbsp; &nbsp; &nbsp; Dois detalhes muito importantes:

<ul>
   <li> O campo host est� preenchido todo com o algarismo 0. � assim que ele deve estar quando calculamos um endere�o de sub-rede </li>
   <li> A d�cima sub-rede tem o valor 0001010 em bin�rio, que � igual a 10 em decimal; </li>
</ul> <br> 


&nbsp; &nbsp; &nbsp; Agora que descobrimos o valor em bin�rio, vamos converter para decimal. Um detalhe muito importante � que devemos mont�-lo agrupando em octetos, independente do bit representar sub-rede ou host. Veja: <br>

<p align = center> 3� octeto: <font color = dd00dd> 0001010</font><font color = aaaa00>0</font><sub>(2)</sub> = <font color = ffaa55>20</font><sub>(10)</sub> <br> 
4� octeto: <font color = aaaa00>00000000</font><sub>(2)</sub> = <font color = ffaa55>0</font><sub>(10)</sub> </p> <br> 



&nbsp; &nbsp; &nbsp; Ent�o vamos escrever o endere�o completo, "anexando" os dois octetos que calculamos aos dois primeiros octetos: <br>
<p align = center> 140.168.<font color = ffaa55>20.0</font> </p> <br>

&nbsp; &nbsp; &nbsp; Agora devemos calcular o endere�o de broadcast da �ltima sub-rede utiliz�vel. Voltaremos para o n�mero em bin�rio e iremos manter o valor dos bits que representam a sub-rede, trocando apenas o valor dos bits do campo host de 0 para 1, pois para termos um broadcast dentro da sub-rede, todos os bits do campo host devem ser preenchidos com o valor 1. Veja:

<p align = center><font color = dd00dd> 0001010</font><font color = aaaa00>1.11111111</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 7 bits de sub-rede</font>, <font color = aaaa00>9 bits de host - todos preenchidos com 1 (broadcast) </font></p><br>

&nbsp; &nbsp; &nbsp; Descobrimos o valor em bin�rio, convertendo para decimal, temos: <br>
<p align = center> 3� octeto: <font color = dd00dd> 0001010</font><font color = aaaa00>1</font><sub>(2)</sub> = <font color = ffaa55>21</font><sub>(10)</sub> <br> 
4� octeto: <font color = aaaa00>11111111</font><sub>(2)</sub> = <font color = ffaa55>255</font><sub>(10)</sub> </p> <br> 

&nbsp; &nbsp; &nbsp; Ent�o vamos escrever o endere�o completo, "anexando" o octeto que calculamos aos tr�s primeiros octetos: <br>
<p align = center>140.168.<font color = ffaa55>21.255</font> </p> <br>

&nbsp; &nbsp; &nbsp;  Ok..., agora falta apenas classificar o endere�o 140.168.155.0 Vamos analisar os dois �ltimos octeto, come�ando convertendo os valores deles: <br> <br>

<p align = center> 3� octeto: <font color = ffaa55>155</font><sub>(10)</sub>=<font color = dd00dd> 1001101</font><font color = aaaa00>1</font><sub>(2)</sub> <br>
4� octeto: <font color = ffaa55>0</font><sub>(10)</sub>=<font color = aaaa00> 00000000</font><sub>(2)</sub> </p> <br> 

&nbsp; &nbsp; &nbsp; Vamos analisar na estrutura sub-rede / host: <br> 
<p align = center> <font color = dd00dd> 1001101</font><font color = aaaa00>1.00000000</font></p><br>
 
&nbsp; &nbsp; &nbsp; Analisando alguns detalhes muito importantes:
<ul> 
   <li> O campo host n�o est� preenchido todo com o algarismo 0, ent�o este endere�o n�o representa uma sub-rede;</li>
   <li> O campo host n�o est� preenchido todo com o algarismo 1, ent�o este endere�o n�o representa um broadcast;</li>
   <li> N�o representando uma sub-rede ou um broadcast, este endere�o representa um host.</li>
</ul> <br>

 &nbsp; &nbsp; Para descobrirmos a qual sub-rede pertence este host, podemos utilizar dois m�todos:
<ol>
   <li> Colocar o valor 0 em todos os bits de host, sem alterar os bits de rede e sub-rede. </li>
   <li> Aplicar uma opera��o AND do endere�o com a m�scara de sub-rede </li>
</ol> <br> 

&nbsp; &nbsp; &nbsp;  Com os dois m�todos obtemos o mesmo resultado. Eu prefiro o 1� m�todo. Vamos analisar apenas os dois �ltimos octetos, pois neste caso n�o alteramos o 1� nem o 2� octetos. Os valores deles s�o <font color = ffaa55>155</font> (<font color = dd00dd> 1001101</font><font color = aaaa00>1</font> em bin�rio) e <font color = ffaa55>0</font>(<font color = aaaa00>00000000</font> em bin�rio). O valor dos bits de sub-rede � <font color = dd00dd> 1001101</font> e o valor dos bits do campo host � <font color = aaaa00>1.00000000</font>. Conforme descrevemos anteriormente, vamos alterar o valor dos bits do campo host para 0 e obteremos assim a sub-rede a qual o host pertence. Os octetos em bin�rio ficar�o assim: <br>

<p align = center><font color = dd00dd> 1001101</font><font color = aaaa00>0.00000000</font></p><br>

&nbsp; &nbsp; &nbsp; Agora que descobrimos o valor em bin�rio, vamos converter para decimal. Um detalhe muito importante � que devemos mont�-lo agrupando em octetos, independente do bit representar sub-rede ou host. Veja: <br>
<p align = center> 3� octeto: <font color = dd00dd> 1001101</font><font color = aaaa00>0</font><sub>(2)</sub> = <font color = ffaa55>154</font><sub>(10)</sub> <br> 
4� octeto: <font color = aaaa00>00000000</font><sub>(2)</sub> = <font color = ffaa55>0</font><sub>(10)</sub> </p> <br> 

&nbsp; &nbsp; &nbsp; Concluindo, o host 140.168.155.0, utilizando a m�scara 255.255.255.240, pertence a sub-rede 140.168.154.0.<br><BR>

&nbsp; &nbsp; &nbsp; Vamos demonstrar tamb�m como obter o mesmo resultado atrav�s de uma opera��o AND com a m�scara de sub-rede. Primeiro vamos passar o endere�o 140.168.155.0 e a m�scara 255.255.254.0 para bin�rio: <br><br>

<Table align = center cellspacing = 1 border = 1>
   <tbody align = center>
	<tr> 
	   <td> Decimal</td>
	   <td> Bin�rio</td>
	</tr>
	<tr> 
	   <td> 140.168.155.0  </td>
	   <td> 10001100.10101000.10011011.00000000</td>
	</tr>
	<tr> 
	   <td> 255.255.254.0 </td>
	   <td> 11111111.11111111.11111110.00000000</td>
	</tr>
   </tbody>
</table> <br> <br>

&nbsp; &nbsp; &nbsp; Vamos agora aplicar uma opera��o AND, algarimo por algarismo.<br>
<br>

<table align = center>
   <tbody>
	<tr>
	   <td> 10001100.10101000.10011011.00000000</td>
	</tr>
	<tr>
	   <td> 11111111.11111111.11111110.00000000</td>
	</tr>
	<tr>
	   <td> --------------------------------------------- </td>
	</tr>
	<tr>
	   <td> 10001100.10101000.10011010.00000000</td>
  	</tr>
   </tbody>
</table> <br> <br>

&nbsp; &nbsp; &nbsp; Convertendo 10001100.10101000.10011010.00000000 para decimal, obtemos 140.168.154.0, o mesmo resultado obtido com o outro m�todo. <br> <br>
 
<ul> Finalizando, vamos escrever os resultados obtidos:
   <li> M�scara = 255.255.254.0</li>
   <li> Endere�o da d�cima sub-rede utiliz�vel = 140.168.20.0 </li>
   <li> Endere�o de broadcast da d�cima sub-rede utiliz�vel = 140.168.21.255</li>
   <li> Classifica��o do endere�o 148.168.155.0 = host </li>
   <li> A sub-rede a qual pertence o host 148.168.155.0 � 148.168.154.0 </li>
<ul> <br><br> 

<p Align = center> <input type= submit value = voltar></p>
</form>

   </body>
</html>