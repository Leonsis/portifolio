<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
        <?php if(!isMobile()): ?>
            <link rel="stylesheet" href="../resources/css/header.css">
        <?php else: ?>
            <link rel="stylesheet" href="../resources/css/headerMobile.css">
        <?php endif; ?>
        <link rel="stylesheet" href="../resources/css/variaveis.css">
        <link rel="stylesheet" href="../resources/css/global.css">
        <!-- Arquivos do fontawesome e bootstrap.
            Decidi colocar com o vite, para eu oder testar e otimizar, 
            já que esse  arquivos são grandes.
        -->
        <?php echo app('Illuminate\Foundation\Vite')([
            'resources/css/fontawesome/css/all.min.css', 
            'resources/css/bootstrap/css/bootstrap.min.css'
        ]); ?>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Liter&family=Raleway   :ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <link rel="icon" href="src/imagens/logo.webp" type="image/webp">
        <title>Portfólio | Caio Leonni</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <?php echo $__env->make('inc/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <style>
            @media(max-width: 991px){
                #home {
                    margin-top: 120px;
                    padding-bottom: 55px;
                }
            }

            #home {
                margin-top: 80px;
            }
        </style>
        <section id="home" class="textAlign-991">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div>
                            <h1>Transformando suas <span class="orange">ideias</span> em soluções digitais</h1>
                            <p>Desenvolvedor Web com habilidade profissional que vão destacar seu produto no mercado.</p>
                        </div>                        
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div>
                            <img src="<?php echo e(asset('images/img6.webp')); ?>" alt="" class="img-fluid">
                        </div>                        
                    </div>
                    <div class="col-12 marginTop-30">
                        <div class="incons d-flex justify-content-center">
                            <a href="">
                                <div class="icon">
                                    <i class="fa-brands fa-linkedin"></i>
                                </div>
                            </a>
                            <a href="">
                                <div class="icon">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </div>
                            </a>
                            <a href="">
                                <div class="icon">
                                    <i class="fa-brands fa-github"></i>
                                </div>
                            </a>
                            <a href="">
                                <div class="icon">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                            </a>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>

        <style>
            #Sobre {
                border-bottom: 1px solid var(--cor-primaria);
            }

            #sobre {
                margin-top: 55px;
                padding-bottom: 55px;
            }

            @media(max-width: 991px){
                #sobre {
                    padding-bottom: 0px;
                }
            }
            .box {
                border: 1px solid var(--cor-primaria);
                border-radius: 10px;
                padding: 20px;
            }
        </style>
        <section id="sobre">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="box">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo e(asset('images/img3.webp')); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div>
                                        <h2>Sobre <span class="orange">mim</span></h2>
                                        <p>
                                            Desenvolvedor Web <strong class="orange">especializado na criação de sites e sistemas personalizados</strong>
                                            para atender às necessidades de empresas e empreendedores.
                                        </p>
                                        <p>
                                            Possuo experiência em tecnologias como <strong class="orange">PHP, JavaScript, Bootstrap,</strong> entre outras, 
                                            e estou comprometido em oferecer soluções eficazes, aliando conhecimento técnico 
                                            à criatividade, para entregar projetos de alta qualidade que gerem valor para os 
                                            meus clientes.
                                        </p>
                                        <p>
                                            em inovação e melhoria contínua, busco atender às expectativas dos meus clientes 
                                            de forma eficiente e profissional.
                                        </p>
                                        
                                        <p>
                                            Se você precisa de um parceiro para transformar suas ideias em soluções digitais, 
                                            estou à disposição para colaborar no sucesso do seu projeto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            @media(max-width: 991px){
                
                #skills {
                    margin-top: 55px;
                    padding-bottom: 55px;
                }
            }

            #skills {
                border-bottom: 1px solid var(--cor-primaria);
            }

            .skills-icon {
                margin: 20px;
            }

            .skills-icon i {
                font-size: 100px;
            }
            
            @media(max-width: 991px){
                .skills-icon i {
                    font-size: 70px;
                }
            }

            .skills-icon span {
                display: block;
                text-align: center;
                font-weight: bold;
            }
        </style>
        <section id="skills">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <h2 class="textAlign">Skils</h2>
                    <div class="col-12 row <?php if(!isMobile()): ?> justify-content-center <?php endif; ?>">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-around">
                                <div class="skills-icon">
                                    <i class="fa-brands fa-html5"></i>
                                    <span>HTML</span>
                                </div>

                                <div class="skills-icon">
                                    <i class="fa-brands fa-css3-alt"></i>
                                    <span>CSS</span>
                                </div>

                                <div class="skills-icon" <?php if(!isMobile()): ?> style="margin-right: 0px;" <?php endif; ?>>
                                    <i class="fa-brands fa-bootstrap"></i>
                                    <span>Bootstrap</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="d-flex justify-content-around">
                                <div class="skills-icon" <?php if(!isMobile()): ?> style="margin-left: 0px;" <?php endif; ?>>
                                    <i class="fa-brands fa-react"></i>
                                    <span>react</span>
                                </div>

                                <div class="skills-icon">
                                    <i class="fa-brands fa-php"></i>
                                    <span>php</span>
                                </div>

                                <div class="skills-icon" <?php if(!isMobile()): ?> style="margin-right: 0px;" <?php endif; ?>>
                                    <i class="fa-brands fa-laravel"></i>
                                    <span>Laravel</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex justify-content-around">
                                <div class="skills-icon" <?php if(!isMobile()): ?> style="margin-left: 0px;" <?php endif; ?>>
                                    <i class="fa-brands fa-github"></i>
                                    <span>Hit Hub</span>
                                </div>

                                <div class="skills-icon">
                                    <i class="fa-brands fa-git-alt"></i>
                                    <span>Git</span>
                                </div>

                                <div class="skills-icon">
                                    <i class="fa-solid fa-database"></i>
                                    <span>SQL</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <style>
                
            #projetos {
                margin-top: 55px;
                padding-bottom: 55px;
            }

            #projetos {
                border-bottom: 1px solid var(--cor-primaria);
            }

            #projetos h2 {
                margin-bottom: 50px;
            }

            .projetos-box {
                border: 1px solid var(--cor-primaria);
                width: 40%;
            }

            @media(max-width: 991px){
                .projetos-box {
                    width: 100%;
                    margin-top: 30px;
                }
            }

            .projetos-contribuidos {
                margin-bottom: 30px;
            }
            
            .projetos-box span {
                display: block;
                text-align: center;
                font-weight: bold; 
                background-color: var(--cor-primaria);
            }

            h3 {
                margin-bottom: 30px;
                border-bottom: 3px solid var(--cor-primaria);
                padding-bottom: 10px;
                display: inline-block;
            }

            @media(min-width: 991px) {
                .projetos-bloco {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-around;
                }
            }

            #projetos a {
                color: var(--cor-branco);
                text-decoration: none;
            }
        </style>
        <section id="projetos">
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="textAlign">Projetos</h2>
                    <div class="col-12">
                        <div class="projetos-contribuidos">
                            <h3>Projetos contribuídos</h3>
                            <div class="projetos-bloco">
                                <div class="projetos-box">
                                    <a href="https://www.rpspneus.com.br/">
                                        <div class="projeto">
                                            <img src="<?php echo e(asset('images/rps.webp')); ?>" alt="" class="img-fluid">
                                            <span>RPS</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="projetos-box">
                                    <a href="">
                                        <div class="projeto">
                                            <img src="<?php echo e(asset('images/inova.webp')); ?>" alt="" class="img-fluid">
                                            <span>Innova academy</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="projetos-pessoais">
                            <h3>Projetos pessoais</h3>
                            <div class="projetos-bloco">
                                <div class="projetos-box">
                                    <a href="https://caioleonni.com/poupo/">
                                        <div class="projeto">
                                            <img src="<?php echo e(asset('images/poupo.webp')); ?>" alt="" class="img-fluid">
                                            <span>Poupo</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php echo $__env->make('inc/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/bootstrap/js/bootstrap.bundle.min.js']); ?>
        <script src="../resources/js/header.js"></script>
        <?php if(isMobile()): ?>
            <script src="../resources/js/headerMobile.js"></script>
        <?php endif; ?>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\portfolio\resources\views/portfolio.blade.php ENDPATH**/ ?>