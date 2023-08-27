<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devHumbertoFilho</title>
    <!-- Bootstrap -->
    <link href="dist/bootstrap-5.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dist/bootstrap-5.3.1/css/cover.css" rel="stylesheet">
    <!-- Estilos -->
    <link href="dist/css/style.css" rel="stylesheet" />
    <link href="dist/css/sky.css" rel="stylesheet" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="dist/fontawesome-6.4.2/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark-mobile navbar-expand-md fixed-top-desktop">
        <div class="container my-2">
            <a class="navbar-brand text-light" href="">
                <i class="fa-solid fa-code fa-lg text-warning me-3"></i>dev<span class="fw-bold">Humberto</span>Filho
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto menu">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="#home">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#about">sobre mim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#projects">projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="#contact">contato</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/HRSoaresFilho/" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/hrsoaresfilho/" target="_blank"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:hr.soaresfilho@gmail.com" target="_blank"><i class="fa-solid fa-envelope fa-lg"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.me/5548988643890/" target="_blank"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="sky">
            <div class="stars"></div>
            <div class="stars1"></div>
            <div class="stars2"></div>
            <div class="shooting-stars"></div>
        </div>
        <div class="container hero">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-12 col-lg-6">
                    <img src="dist/img/astronauta-hero.png" class="d-block mx-lg-auto img-fluid ms-auto me-auto" alt="Dev Humberto Filho" width="400" loading="lazy">
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="display-5">Olá!</h1>
                    <h1 class="display-5 lh-1 mb-3">Sou <span class="fw-bold">Humberto</span>,</h1>
                    <h2 class="fw-bold lh-1 mb-3 text-warning">desenvolvedor full stack.</h2>
                    <p class="lead">Apaixonado por tecnologia, planilhas e finanças, com uma sólida formação
                        em Gestão de Tecnologia da Informação e pós-graduando em Análise e Desenvolvimento de Programas.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                        <a class="btn btn-warning btn-lg px-4 me-md-2 cta" href="#contact">Contato</a>
                        <a class="btn btn-outline-light btn-lg px-4 cta" href="#projects">Projetos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container mb-5">
            <h1 class="text-center mb-5 fw-bold">SOBRE MIM</h1>
            <p>Sou um desenvolvedor Full Stack com mais de 5 anos de experiência, especializado na criação de soluções
                tecnológicas abrangentes. Minha jornada profissional abrange desde a construção de interfaces de usuário
                até a implementação de back-ends. Tenho proficiência em tecnologias modernas como HTML5, CSS3, JavaScript,
                Vue.js e Bootstrap, combinadas com habilidades sólidas em PHP. </p>
            <p>Minha versatilidade se estende além do desenvolvimento web, englobando a criação de sistemas eficientes através
                do Microsoft Excel. Automatizar tarefas repetitivas e desenvolver modelos complexos são aspectos do meu trabalho
                que demonstram minha dedicação à otimização e à entrega de resultados tangíveis.</p>
            <p>Minha paixão por finanças pessoais enriquece minha abordagem técnica. Minha compreensão das nuances financeiras
                me permite criar ferramentas de gerenciamento que capacitam os indivíduos a tomar decisões
                informadas. Fundir minhas habilidades técnicas com a expertise em finanças gera soluções
                abrangentes e práticas.</p>
            <p>Estou comprometido em enfrentar desafios progressivos que expandam meus horizontes e contribuam para projetos
                de impacto. Minha combinação única de habilidades técnicas diversificadas, visão financeira e competência
                interpessoal me capacita a abordar com sucesso os desafios em constante evolução no mundo do desenvolvimento
                de software e na esfera tecnológica.</p>
        </div>
        <div class="container-fluid bg-dark">
            <div class="container py-5">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col mb-4">
                        <div class="card">
                            <img src="dist/img/astronauta-card-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Desenvolvedor Espacial</h5>
                                <p class="card-text">Explorando Fronteiras Digitais e Cósmicas: Um desenvolvedor em busca
                                    de inovação, um código de cada vez, enquanto minha mente vagueia pelas estrelas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="dist/img/astronauta-card-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dev Astral</h5>
                                <p class="card-text">Harmonizando o Espaço Interior: Um desenvolvedor encontrando serenidade
                                    entre linhas de código, acompanhado pelo cosmos e uma caneca de inspiração.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="dist/img/astronauta-card-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Amor e União Cósmica</h5>
                                <p class="card-text">Navegando pelo Código com Amor e Paz: Como desenvolvedor, trago a essência
                                    do universo para cada projeto, promovendo harmonia e unidade através da tecnologia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="projects">
        <div class="container mb-5">
            <h1 class="text-center mb-5 fw-bold">PROJETOS</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col my-2">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            Site Alfaq - Produtos Químicos
                        </div>
                        <img src="dist/img/site-alfaq-wordpress.png" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tecnologies">
                                    <small>
                                        <i class="fa-brands fa-wordpress fa-xl mx-1"></i>
                                        <i class="fa-brands fa-elementor fa-xl mx-1"></i>
                                    </small>
                                </div>
                                <div class="btn-group">
                                    <a href="https://www.alfaq.com.br/" class="btn btn-sm btn-outline-secondary" target="_blank">
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            Sistema de Matrículas Online
                        </div>
                        <img src="dist/img/projeto-sismatr-escola-da-ilha.png" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tecnologies">
                                    <small>
                                        <i class="fa-brands fa-html5 fa-xl mx-1"></i>
                                        <i class="fa-brands fa-bootstrap fa-xl mx-1"></i>
                                        <i class="fa-brands fa-php fa-xl mx-1"></i>
                                    </small>
                                </div>
                                <div class="btn-group">
                                    <p class="h6 mt-1 text-secondary">Projeto privado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            Simulador de Benefício - SCPREV
                        </div>
                        <img src="dist/img/projeto-simulador-1-scprev.png" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tecnologies">
                                    <small>
                                        <i class="fa-brands fa-html5 fa-xl mx-1"></i>
                                        <i class="fa-brands fa-bootstrap fa-xl mx-1"></i>
                                        <i class="fa-brands fa-php fa-xl mx-1"></i>
                                    </small>
                                </div>
                                <div class="btn-group">
                                    <a href="https://scprev.com.br/simuladordebeneficio/" class="btn btn-sm btn-outline-secondary" target="_blank">
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            Simulador BEP - SCPREV
                        </div>
                        <img src="dist/img/projeto-simulador-2-scprev.png" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tecnologies">
                                    <small>
                                        <i class="fa-brands fa-html5 fa-xl mx-1"></i>
                                        <i class="fa-brands fa-bootstrap fa-xl mx-1"></i>
                                        <i class="fa-brands fa-php fa-xl mx-1"></i>
                                    </small>
                                </div>
                                <div class="btn-group">
                                    <a href="https://scprev.com.br/bep/" class="btn btn-sm btn-outline-secondary" target="_blank">
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            granah - Controle Financeiro Pessoal
                        </div>
                        <img src="dist/img/projeto-granah.png" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tecnologies">
                                    <small>
                                        <i class="fa-brands fa-html5 fa-xl mx-1"></i>
                                        <i class="fa-brands fa-bootstrap fa-xl mx-1"></i>
                                        <i class="fa-brands fa-php fa-xl mx-1"></i>
                                    </small>
                                </div>
                                <div class="btn-group">
                                    <p class="h6 mt-1 text-secondary">Em desenvolvimento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card shadow-sm">
                        <div class="card-header text-center">
                            Portifólio
                        </div>
                        <img src="dist/img/projeto-portifolio.png" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="tecnologies">
                                    <small>
                                        <i class="fa-brands fa-html5 fa-xl mx-1"></i>
                                        <i class="fa-brands fa-bootstrap fa-xl mx-1"></i>
                                        <i class="fa-brands fa-php fa-xl mx-1"></i>
                                    </small>
                                </div>
                                <div class="btn-group">
                                    <a href="https://github.com/HRSoaresFilho/portfolio" class="btn btn-sm btn-outline-secondary" target="_blank">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-outline-secondary">
                                        <i class="fa-solid fa-up-right-from-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h1 class="text-center mb-5 fw-bold">CONTATO</h1>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-5 text-center"><img id="img-contato" src="dist/img/astronauta-contato.jpg" width="300" alt=""></div>
                <div class="col">
                    <form id="form-contato" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Seu nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com.br">
                        </div>
                        <div class="mb-4">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="4" placeholder="Escreva sua mensagem..."></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="cta btn btn-warning btn-lg px-4 me-md-2" id="submit-form">
                                <span id="text-send">Enviar</span>
                                <img src="dist/img/loading.gif" class="loading">
                            </button>
                            <br />
                            <div class="mt-3 bg-light text-center rounded " id="response"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <!-- Copyright -->
        <div class="text-center p-3">
            &copy; 2023 Copyright:
            <a href="https://devhumbertofilho.com.br/">devhumbertofilho.com.br</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Bootstrap -->
    <script src="dist/bootstrap-5.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="dist/js/jquery-3.6.3.min.js"></script>
    <!-- Funções da Página -->
    <script src="dist/js/functions.js"></script>
</body>

</html>