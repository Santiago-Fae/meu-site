<?php 
print_r('hello');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santiago Faé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilo.css">

</head>
<body>
    <!--MENU-->
    <header>
        <nav>
            <input type="checkbox" id="check">
            <label  for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Santiago Faé</label>
            <ul class="fir" id="menu">
                <li><a onclick="removermenu()" href="#">Início</a></li>
                <li><a onclick="removermenu()" href="#ancora">Sobre</a></li>
                <li><a  href="./projetos.php">Projetos</a></li>
                <li><a onclick="removermenu()" href="#ancora2">Experiência</a></li>
                <li><a onclick="removermenu()" href="#ancora3">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!--INICIO  -->
    
    <section id="plx">
        <div class="container" >
            <div class="witle text-center text-light" >
                <section id="inicio" >
                    <div class="intro">
                        <h1>Santiago Faé </h1>
                        <img src="imagens/eulindaoredondo.png" alt="Santiago Faé, Autor">
                        <h2 class="titulo">Desenvolvedor Front-end</h2>
                        <br>
                        <div class="text-center">
                            <a class="btn btn-primary" id="contato" href="https://wa.me/5554991518114" role="button">ENTRE EM CONTATO</a>
                        </div>
                        <div id="ancora"></div>
                    </div>
                   
            
                </section>
                <br>
            </div>
        </div>
       
    </section>

<!-- SOBRE-->

<section id="wines">
    <div class="cont"> 
    <img src="imagens/gatot.jpg" id="gato" class="rounded float-start " alt="pata de gato em cima do teclado">
    </div> 
       <h2 id="tsobre">Um pouco sobre mim</h2>
       <div class="textos">
       <p class="text-justify">Tenho 20 anos, moro em Caxias do Sul, Brasil. Amo animais, gosto de filmes de terror e tenho vontade de conhecer outras culturas. Comecei a programar em Python, mas migrei meu foco para o desenvolvimento web. Possuo uma boa experiência com a parte de Front-end, desenvolvendo sites com frameworks como o Bootstrap.</p>
       <p class="text-justify">Estudo Ciência da computação na Universidade de Caxias do Sul(UCS) e estou estou no 2 semestre. Possuo uma boa comunicação, sou extemamente persistente e  consigo trabalhar bem <span id="ancora2"></span> em grupo absorvendo ideias e opiniões novas, acrescentando em cima delas.</p>
       </div>
        </ul>
</section>

<!--EXPERIÊNCIA-->

<section id="plx2">
    <div class="witle2" >
     
        <h2 id="tituloe">Conhecimentos, experiência e projetos</h2>

        <br>
        <div id="expe1">
                Habilidades na criação de sites com as seguintes ferramentas:
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript</li>
                </ul>
                
                Frameworks:
                <ul>
                    <li>Bootstrap</li>
                </ul>   
                Algumas criações:
                <br>
        </div>
        <div id="cards">
                <div class="cartoes grid-gutter-width: 3px !default;">
                    <div class="row row-cols-1 row-cols-md-2 ">
                        <div class="col mb-4"><a href="https://github.com/Santiago-Fae/Finans" target="_blank">
                            <div class="card h-100 border-dark">
                                <img src="imagens/financas.png" class="card-img-top" alt="site sobre finanças">
                                <div class="card-body">
                                <h5 class="card-title">Finanças</h5>
                                <p class="card-text">Um site ficticio para ajudar as pessoas com o controle financeiro, criado a partir de Bootstrap 4.</p> 
                                </div>
                            </div> </a>
                        </div>
                        <div id="calc" class="col mb-4 d-{sm}-none"><a href="https://github.com/Santiago-Fae/Calculadora" target="_blank">
                            <div class="card h-100 border-dark">
                                <img src="imagens/calculadora.png" class="card-img-top" alt="calculadora">
                                <div class="card-body">
                                <h5 class="card-title">Calculadora</h5>
                                <p class="card-text">Com toda lógica feita em JavaScript, essa calculadora atende muito bem suas funções básicas!</p>
                                </div>
                            </div> </a>
                        </div>
                        <div class="col mb-4"> <a href="https://github.com/Santiago-Fae/orcamento" target="_blank">
                            <div class="card h-100 border-dark">
                                <img src="imagens/orcamento.png" class="card-img-top" alt="Site de armazenar orçametos">
                                <div class="card-body">
                                <h5 class="card-title">Orçamentos</h5>
                                <p class="card-text">Site criado para armazenar e consultar orçamentos utilizando localStorage com JavaScript.</p>
                                </div>
                            </div> </a>
                        </div>
                        <div class="col mb-4"> <a href="https://github.com/Santiago-Fae/Game_mata_mosquito" target="_blank">
                            <div class="card h-100 border-dark">
                                <img src="imagens/jogomosquito.png" class="card-img-top" alt="Jogo de matar mosquitos">
                                <div class="card-body">
                                <h5 class="card-title">Jogo Mata Mosquitos</h5>
                                <p class="card-text">Um jogo de matar mosquitos com diferentes niveis de dificuldades.</p>
                                </div>
                            </div> </a>
                            </div>
                    </div> 
                </div>  
        </div>  
        </ul>
        <div id="ancora3"></div>
    </div>
    
</section>






<!--CONTATO-->

<h2 id="h2c">Me encontre nas seguintes redes sociais:</h2>
<section id="tamanho">
    <footer>
        <div class="rede" id="fac">
            <a href="https://www.facebook.com/santiago.poffo"><img class="icone" src="imagens/facebook.png" alt="facebook"></a></div>
        <div class="rede" id="ins">
            <a href="https://www.instagram.com/santi_fae/"><img class="icone" src="imagens/instagram.png" alt="instagram"></a></div>
        <div class="rede" id="git">
            <a href="https://github.com/Santiago-Fae"><img class="icone" src="imagens/github.png" alt="github"></a></div>
        <div class="rede" id="wpp">
            <a href="https://wa.me/5554991518114"><img class="iconew" src="imagens/WhatsApp.png" alt="github"></a></div>
         <div class="rede" id="out">
            <a href="mailto:santiagopoffo@hotmail.com"><img class="iconew" src="imagens/outlook.png" alt="outlook"></a></div>

    </footer>

    </section>
    <hr>
    <p id="final">&copy;2021 Santiago Fae</p>
</section>
    <script src="script.js"></script>
</body>
</html> 

