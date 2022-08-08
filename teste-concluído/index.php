<?php
    if(isset($_POST['submit'])){
        include 'includes/formulario-inc.php';
    }

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Co.</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/jquery.min.js"></script>
    <script defer src="js/cleave.min.js"></script>
    <script defer src="js/script.js"></script>
</head>

<body>

    <header>
        <div class="container">
            <div class="flex-center-between">
                <a href="#">
                    <img src="images/logo-branco.svg" alt="">
                </a>
                <div class="menu">
                    <img id="open" src="images/hamburger-menu.svg" alt="">
                    <img id="close" src="images/close-icon.svg" alt="">
                </div>
                <ul role="list" class="nav-list">
                    <li class="nav-list-item"><a href="">Sobre</a></li>
                    <li class="nav-list-item"><a href="">Serviços</a></li>
                    <li class="nav-list-item"><a href="">Planos</a></li>
                    <li class="nav-list-item"><a href="">Comunidade</a></li>
                </ul>
                <button>(11) 9 9999-9999</button>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="headline | flow flow-200">
                    <div class="headline-header">
                        <h1>Expanda seu negócio atraindo mais clientes</h1>
                    </div>
                    <p>Planos inteligentes e comprovados para aumentar seu alcance no mercado. Tenha mais estabilidade
                        construindo uma relação mais forte com seus clientes. </p>
                    <button id="toggle-form" class="access-form-btn">Primeiros passos</button>
                </div>

                <div class="formulario">
                    <div class="close-form">
                        <a href="#">
                            <img src="images/close-icon.svg" alt="">
                        </a>
                    </div>
                    <h2>Faça uma consultoria!</h2>
                    <form onsubmit="return checkSucess()" method="POST" id="form">
                        <div class="input-group" id="input1">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
                            <small>Error message</small>
                        </div>
                        <div class="input-group"  id="input2">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="email@exemplo.com">
                            <small>Error message</small>
                        </div>
                        <div class="input-group"  id="input3">
                            <label for="telefone">Telefone</label>
                            <input type="tel" name="telefone" id="telefone" placeholder="(__) _____-____">
                            <small>Error message</small>
                        </div>
                        <div class="input-group">
                            <label for="msg">Mensagem</label>
                            <textarea name="msg" id="msg" maxlength="999" placeholder="Como podemos te ajudar?"></textarea>
                            <button type="submit" value="submit" name="submit" id="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="even-columns">
                    <div class="secondary-headline |  flow flow-200">
                        <h2>Quem Somos</h2>
                        <p>Nossa missão é possibilitar às empresas focar no produto ou serviço, enquanto nós cuidamos do
                            marketing — com excelência.<br>Visamos acompanhar nossas empresas parceiras em todas as
                            etapas dessa grande jornada de crescimento.</p>
                    </div>
                    <img src="images/about.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2>Vantagens do nosso serviço:</h2>
                <ul role="list" class="feature-grid | padding-block-900 flow-sm flow-100 ">
                    <li class="feature-box">
                        <div class="feature-img">
                            <img src="images/wallet.svg" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Economia em campanhas</h4>
                            <p>Otimizamos ao máximo o investimento nas campanhas para que você não gaste além do
                                necessário.</p>
                        </div>
                    </li>
                    <li class="feature-box">
                        <div class="feature-img">
                            <img src="images/cash.svg" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Aumento do ticket médio</h4>
                            <p>Extraímos o maior número de conversões de cada oportunidade de venda.</p>
                        </div>
                    </li>
                    <li class="feature-box">
                        <div class="feature-img">
                            <img src="images/socialmedia.svg" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Destaque nas mídias sociais</h4>
                            <p>Cobertura completa para conectar sua marca ao seu cliente nos principais canais de
                                comunicação.</p>
                        </div>
                    </li>
                    <li class="feature-box">
                        <div class="feature-img">
                            <img src="images/chart.svg" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Acompanhamento em tempo real</h4>
                            <p>Disponibilizamos ferramentas para que você acompanhe as métricas e o impacto das nossas
                                ações a qualquer instante.</p>
                        </div>
                    </li>
                    <li class="feature-box">
                        <div class="feature-img">
                            <img src="images/heart.svg" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Fidelização de clientes</h4>
                            <p>Trabalhamos em torno da retenção de clientes para obter uma melhor projeção de
                                crescimento.</p>
                        </div>
                    </li>
                </ul>
                <button>Experimentar</button>
            </div>
        </section>

        <section class="faq |  flow flow-100">
            <div class="container">
                <h2>Perguntas Frequentes</h2>
                <ul role="list" class="questions">
                    <li><button>Quando vou começar a ver o resultado das minhas campanhas?</button></li>
                    <li><button>Quanto vou precisar investir?</button></li>
                    <li><button>Como esse processo funciona na prática?</button></li>
                    <li><button>É garantido que meu negócio irá crescer?</button></li>
                    <li><button>Em qual estágio devo começar a investir me marketing?</button></li>
                </ul>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <div class="even-columns">
                    <div class="cta-headline | flow flow-100">
                        <h3>Pronto para iniciar sua jornada?</h3>
                        <p>Dê o próximo passo para aprimorar sua empresa.</p>
                    </div>
                    <div class="cta-card | flow flow-100">
                        <p style="padding-bottom: 1rem">Nossa equipe está pronta para analisar e desenvolver o melhor
                            plano de ação para você.</p>
                        <button>Vamos lá!</button>
                        <p style="font-size: var(--fs-300)">Nossos especialistas vão entrar em contato com você ainda
                            hoje.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-nav">
                <a href="#">
                    <img src="images/logo-branco.svg" alt="">
                </a>
                <ul role="list" class="social-list">
                    <li class="social-icon">
                        <a href="#"><img src="images/icon-facebook.svg" alt="">
                        </a>
                    </li>
                    <li class="social-icon"><a href="#"><img src="images/icon-youtube.svg" alt="">
                        </a></li>
                    <li class="social-icon"><a href="#"><img src="images/icon-twitter.svg" alt="">
                        </a></li>
                    <li class="social-icon"><a href="#"><img src="images/icon-pinterest.svg" alt="">
                        </a></li>
                    <li class="social-icon"><a href="#"><img src="images/icon-instagram.svg" alt="">
                        </a></li>
                </ul>
                <button>(11) 9 9999-9999</button>
            </div>
            <p>Nome da empresa © Todos os Direitos Reservados — 2022</p>
            <p>CNPJ 99.999.999 - 0009-99• <a href="#">TERMOS DE USO</a></p>
        </div>

    </footer>

</body>

</html>