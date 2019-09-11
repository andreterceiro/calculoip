<html>
   <head> 
	<title>Endere�amento IP - exerc�cios</title>
   </head>
   <body>

<form method=post action="index.php">

<h2 align = "center"> <font color = "0000ff">Resolu��o do exerc�cio 1 </font> </h2> <br>

&nbsp; &nbsp; &nbsp;  Primeiro vamos verificar em que classe est� o endere�o. Convertendo o primeiro octeto para bin�rio, temos: <br>
<p align = center> 192 <sub>(10) </sub> = <font color = 0000ff> 110</font> 00000 <sub>(2)</sub> </p><br> 

&nbsp; &nbsp; &nbsp; Descobrimos ent�o que o endere�o pertence � classe C, ou seja, podemos utilizar apenas o �ltimo octeto para dividir em sub-redes. Para dividir o endere�o em 2 sub-redes utiliz�veis devmos pegar emprestado 2 bits do campo host, pois 2<sup><font color = 0000ff>2</font></sup>-2 = 2. Lembrando que subtraimos 2 porque n�o utilizamos a primeira nem a �ltima sub-rede. Como pegamos 2 bits, o campo host est� menor. Antes ele possuia 8 bits, agora possui 6 (8 - 2 = 6). Temos que verificar se 6 bits atendem nossa necessidade para o n�mero de hosts, ent�o calculamos: <br>

<p align = center>2<sup><font color = 0000ff>6</font></sup>-2=62</p><br>

&nbsp; &nbsp; &nbsp; Lembrando que subtraimos 2 agora porque o primeiro endere�o de cada sub-rede representa a pr�pria sub-rede e o �ltimo � utilizado para broadcast dentro da sub-rede. Nossa necessidade � de 60 hosts por sub-rede, ent�o com 62 hosts temos nossa necessidade satisfeita.
&nbsp; &nbsp; &nbsp; Vamos ent�o calcular a m�scara de sub-rede. T�nhamos antes do c�lculo 24 bits para rede e 8 para host. Ap�s nosso c�lculo, temos 24 bits para rede, 2 para sub-rede e 6 para host. Como tanto os bits de rede e sub-rede s�o representados pelo algarismo "1" (em bin�rio) e na pr�tica representam a mesma coisa, poder�amos dizer tamb�m que temos 26 bits para rede/sub-rede e 6 para hosts. A m�scara fica ent�o assim: <br><br><br>

<p align = center> <font color = ff0000> 11111111.1111111.11111111.11</font><font color = 009900>000000</font> <br> <br>

* <font color = ff0000> 1 = rede/sub-rede </font>,<font color = 009900> 0 = host </font> <br> <br> <br></p>

&nbsp; &nbsp; &nbsp; Convertendo para decimal, temos:<br> <br>
<p align = center> 255.255.255.192 </p><br> <br> 

&nbsp; &nbsp; &nbsp; Lembrando que quando convertemos a m�scara de bin�rio para decimal, "esquecemos" a divis�o rede/sub-rede - host e analisamos apenas a divis�o por octetos. <br> <br>

&nbsp; &nbsp; &nbsp; Agora vamos definir qual � o endere�o da primeira sub-rede utiliz�vel. Como n�o alteramos os tr�s primeiros octetos, que representam a rede, n�o precisamos analis�-lo. Vamos analisar apenas o �ltimo octeto. A primeira sub-rede (chamada normalmente de sub-rede 0) tem como valor no �ltimo octeto: <br><br>
<p align =center> <font color = dd00dd> 00</font><font color = aaaa00>000000</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 2 bits de sub-rede</font>, <font color = aaaa00>6 bits de host</font> </p><br> 

&nbsp; &nbsp; &nbsp; Tr�s detalhes muito importantes:

<ul>
   <li> O campo host est� preenchido todo com o algarismo 0. � assim que ele deve estar quando calculamos um endere�o de sub-rede </li>
   <li> A sub-rede 0 tem o valor 00 em bin�rio, que � igual a 0 em decimal; </li>
   <li> O campo sub-rede est� preenchido com o valor da primeira sub-rede, mas ela n�o � utiliz�vel (a primeira e a �ltima sub-redes n�o s�o utiliz�veis). </li>
</ul>

&nbsp; &nbsp; &nbsp; J� que a primeira sub-rede (sub-rede 0) n�o � utiliz�vel, vamos calcular o endere�o da primeira sub-rede utiliz�vel. Em bin�rio, teremos este valor no �ltimo octeto:<br><br>

<p align = center> <font color = dd00dd> 01</font><font color = aaaa00>000000</font><br><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 2 bits de sub-rede</font>, <font color = aaaa00>6 bits de host</font> </p> <br>

&nbsp; &nbsp; &nbsp; Analisando novamente alguns detalhes muito importantes:

<ul>
   <li> O campo host est� preenchido todo com o algarismo 0. � assim que ele deve estar quando calculamos um endere�o de sub-rede </li>
   <li> A sub-rede 1 tem o valor 01 em bin�rio, que � igual a 1 em decimal; </li>
</ul> <br>

&nbsp; &nbsp; &nbsp; Descobrimos o valor em bin�rio, convertendo para decimal, temos: <br> 
<p align = center> 01000000<sub>(2)</sub> = <font color = ffaa55>64</font><sub>(10)</sub> </p><br> 

&nbsp; &nbsp; &nbsp; Ent�o vamos escrever o endere�o completo, "anexando" o octeto que calculamos aos tr�s primeiros octetos: <br><br>
<p align = center> 192.168.0.<font color = ffaa55>64</font> </p><br>

&nbsp; &nbsp; &nbsp; Agora devemos calcular o endere�o de broadcast da 1� sub-rede utiliz�vel. Voltaremos para o n�mero em bin�rio e iremos manter o valor dos bits que representam a sub-rede, trocando apenas o valor dos bits do campo host de 0 para 1, pois para termos um broadcast dentro da sub-rede, todos os bits do campo host devem ser preenchidos com o valor 1. Veja: <br>

<p align = center> <font color = dd00dd> 01</font><font color = aaaa00>111111</font><br>
&nbsp; &nbsp; &nbsp; <font color = dd00dd> 2 bits de sub-rede</font>, <font color = aaaa00>6 bits de host - todos preenchidos com 1 (broadcast) </font> </p> <br>

&nbsp; &nbsp; &nbsp; Descobrimos o valor em bin�rio, convertendo para decimal, temos: <br>
<p align = center>01111111<sub>(2)</sub> = <font color = ffaa55>127</font><sub>(10)</sub> </p> <br>

&nbsp; &nbsp; &nbsp; Ent�o vamos escrever o endere�o completo, "anexando" o octeto que calculamos aos tr�s primeiros octetos: <br>
<p align = center>192.168.0.<font color = ffaa55>127</font> </p> <br>

&nbsp; &nbsp; &nbsp;  Ok..., agora falta apenas classificar o endere�o 192.168.0.140. Vamos analisar o �ltimo octeto, come�ando convertendo o valor dele:  <br>

<p align = center> 140<sub>(10)</sub> = 10001100<sub>(2)</sub><p><br>

&nbsp; &nbsp; &nbsp; Vamos analisar na estrutura sub-rede / host: <br> 
<p align = center> <font color = dd00dd> 10</font><font color = aaaa00>001100</font></p><br>
 
&nbsp; &nbsp; &nbsp; Analisando alguns detalhes muito importantes:

<ul>
   <li> O campo host n�o est� preenchido todo com o algarismo 0, ent�o este endere�o n�o representa uma sub-rede.</li>
   <li> O campo host n�o est� preenchido todo com o algarismo 1, ent�o este endere�o n�o representa um broadcast.</li>
   <li> N�o sendo uma sub-rede ou um broadcast, ele � um endere�o de host	
</ul><br>

 &nbsp; &nbsp; Para descobrirmos a qual sub-rede pertence este host, podemos utilizar dois m�todos:
<ol>
   <li> Colocar o valor 0 em todos os bits de host, sem alterar os bits de rede e sub-rede. </li>
   <li> Aplicar uma opera��o AND do endere�o com a m�scara de sub-rede </li>
</ol>  <br>

&nbsp; &nbsp; &nbsp;  Com os dois m�todos obtemos o mesmo resultado. Eu prefiro o 1� m�todo. Vamos analisar apenas o �ltimo octeto, pois neste caso n�o alteramos o 1�, o 2� nem o 3� octetos. O valor dele � 10001100 (140 em bin�rio). O valor dos bits de sub-rede � <font color = dd00dd> 10</font> e o valor dos bits do campo host � <font color = aaaa00>001100</font>. Conforme descrevemos anteriormente, vamos alterar o valor dos bits do campo host para 0 e obteremos assim a sub-rede a qual o host pertence. O octeto em bin�rio ficar� assim: <br>
<p align = center> <font color = dd00dd> 10</font><font color = aaaa00>000000</font>.</p><br>
&nbsp; &nbsp; &nbsp; Convertendo o resultado obtido para decimal e anexando-o aos tr�s outros octetos, obteremos a resposta: <br><br>

<p align = center><font color = dd00dd> 10</font><font color = aaaa00>000000</font><sub>(2)</sub> = 128<sub>(10)</sub> </p> <br>

&nbsp; &nbsp; &nbsp; Concluindo, o host 192.168.0.140, utilizando a m�scara 255.255.255.192, pertence a sub-rede 192.168.0.128.<br><BR><br>

&nbsp; &nbsp; &nbsp; Vamos demonstrar tamb�m como obter o mesmo resultado atrav�s de uma opera��o AND com a m�scara de sub-rede. Primeiro vamos passar o endere�o 192.168.0.140 e a m�scara 255.255.255.192 para bin�rio: <br><br>

<Table align = center cellspacing = 1 border = 1>
   <tbody align = center>
	<tr> 
	   <td> Decimal</td>
	   <td> Bin�rio</td>
	</tr>
	<tr> 
	   <td> 192.168.0.140 </td>
	   <td> 11000000.10101000.00000000.10001100</td>
	</tr>
	<tr> 
	   <td> 255.255.255.192 </td>
	   <td> 11111111.11111111.11111111.11000000</td>
	</tr>
   </tbody>
</table> <br> <br>

&nbsp; &nbsp; &nbsp; Vamos agora aplicar uma opera��o AND, algarimo por algarismo. <!--Caso tenha d�vida em como efetuar esta opera��o, favor visite a se��o <a href=> opera��es l�gicas </a>--><br><br>

<table align = center>
   <tbody>
	<tr>
	   <td> 11000000.10101000.00000000.10001100</td>
	</tr>
	<tr>
	   <td> 11111111.11111111.11111111.11000000</td>
	</tr>
	<tr>
	   <td> --------------------------------------------- </td>
	</tr>
	<tr>
	   <td> 11000000.10101000.00000000.10000000</td>
  	</tr>
   </tbody>
</table> <br> <br>

&nbsp; &nbsp; &nbsp; Convertendo 11000000.10101000.00000000.10000000 para decimal, obtemos 192.168.0.128, o mesmo resultado obtido com o outro m�todo. <br> <br>
 
<ul> Finalizando, vamos escrever os resultados obtidos:
   <li> M�scara = 255.255.255.192 </li>
   <li> Endere�o da primeira sub-rede utiliz�vel = 192.168.0.64 </li>
   <li> Endere�o de broadcast da 1� sub-rede utiliz�vel = 192.168.0.127</li>
   <li> Classifica��o do endere�o 192.168.0.140 = host </li>
   <li> A sub-rede a qual pertence o host 192.168.0.140 � 192.168.0.128 </li>
</ul> <br><br>

<p Align = center> <input type= submit value = voltar></p>
</form>
   </body>
</html>