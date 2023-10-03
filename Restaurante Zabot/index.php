<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">    
    <title>Zabot Restaurante</title>
    <link href="estilo.css" type="text/css" rel="stylesheet">
</head>
<body class= "background">
<header> 
    <div id="header">
        <div id="logo">
            <img id="logoImg" src="images/logo.png">
            <h1 id="tituloLogo">Bem-vindo ao Zabot!</h1>
        </div>
        <div id="menu">
            <ul class="listaMenu">
				<li><a id="menuAtual" href="index.html">Cardápio</a></li>
                <li><a href="atracoes.html">Atrações</a></li>
				<li><a href="localizacao.html">Localização</a></li>
				<li><a href="reservas.php">Reservas</a></li>
                <li><a href="contatos.html">Contatos</a></li>
            </ul>
        </div>
    </div>
</header>
    <section>
    <div id="content">
        <div id="promotionBanner">
            <h1 id="promocaoH1">Oferta do dia:</h1>
            <h2 id="promocaoValor">Mocotó = 29,90</h1>
        </div>
        <div id="maisVendidos">
            <h1 id="tituloConteudo">Os mais pedidos da semana!</h1>
            <div id="areaProdutos">
                <table>
                    <tr>
                        <td>
                            <p class="tituloProduto">Sururu ao coco</p>
                            <img src="images/sururu.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        <td>
                            <p class="tituloProduto">Buchada de Bode</p>
                            <img src="images/buchada.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        <td>
                            <p class="tituloProduto">Acarajé</p>
                            <img src="images/acaraje.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="tituloProduto">Arroz de cuxá</p>
                            <img src="images/cuxa.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        <td>
                            <p class="tituloProduto">Cuscuz</p>
                            <img src="images/cuscuz.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        <td>
                            <p class="tituloProduto">Paçoca de carne-de-sol</p>
                            <img src="images/pacoca-de-carne-de-sol.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            <p class="tituloProduto">Caranguejada</p>
                            <img src="images/caranguejada.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        <td>
                            <p class="tituloProduto">Refri (Lata)</p>
                            <img src="images/refri.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>
                        <td>
                            <p class="tituloProduto">Sucos (Vários Sabores)</p>
                            <img src="images/sucos.jpg">                                
                            <p class="precoProduto">R$: 99,99</p>
                        </td>                        
                    </tr>                    
                </table>
            </div>
        </div>        
    </div>

    <div id="entrega">
        <div id="tel">
            <a href="tel:1111111111"><h4>(11) 1111-1111</h4></a>
            <h5>Entregamos na sua casa!</h5>
        </div>
        <img src="images/telefone.png"> 
    </div>
    </section>  
    <footer>
    <div id="footer">
            <ul class="listaMenu">
				<li><a id="menuAtual" href="#">Quem Somos</a></li>
                <li><a href="#">Entre em contato</a></li>
				<li><a href="localizacao.html">Termos do Site</a></li>
                <hr>
				<li><em>Produzido por Guilherme Bregon - &copy 2023</em></li>
            </ul>
        </div>
    </footer>

</body>