<?php if(!isMobile()): ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="logo">
                        <h1>
                            <span class="logoSimbolo">&lt;</span>
                            Caio Leonni
                            <span class="logoSimbolo">/&gt;</span>
                        </h1>
                    </div>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <nav id="menu">
                        <ul>
                            <li>
                                <a id="link-home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a id="link-sobre">
                                    Sobre
                                </a>
                            </li>
                            <li>
                                <a id="link-projetos">
                                    Projetos
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<?php else: ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="logo">
                        <h1>
                            <span class="logoSimbolo">&lt;</span>
                            Caio Leonni
                            <span class="logoSimbolo">/&gt;</span>
                        </h1>
                    </div>
                </div>
                <div class="col-3">
                    <span class="menu-btn"></span>
                </div>
            </div>
        </div>
        <nav id="menu">
            <ul>
                <li><a id="link-home" style="border-bottom: 1px solid var(--cor-primaria);">Home</a></li>
                <li><a id="link-sobre" style="border-bottom: 1px solid var(--cor-primaria);">Sobre</a></li>
                <li><a id="link-projetos">Projetos</a></li>
            </ul>
        </nav>
    </header>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\portfolio\resources\views/inc/header.blade.php ENDPATH**/ ?>