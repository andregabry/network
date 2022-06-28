<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Network</title>
</head>

<body>

<div class="app">
    <header class="app_header">
        <div class="app_header_brand">
            <img class="app_header_brand_logo" src="assets/img/brand.png">
            <h1>NetWork</h1>
            <span class="app_header_icon material-symbols-outlined">menu</span>
        </div>
        <div class="app_header_auth">


            <span class="app_header_logout material-symbols-outlined">logout</span>
        </div>
    </header>
    <main class="app_main">
        <div class="app_sidebar">
            <div class="app_sidebar_profile">
                <div class="sidebar_profile_header">
                    <a class="app_header_notify material-symbols-outlined">notifications<span>3</span></a>


                    <div class="app_notify">
                        <div class="notify_header">
                            <h3>Notificação</h3>
                        </div>

                        <div class="notify_main">
                            <?php
                            for ($i = 1; $i < 8; $i++) {
                                ?>
                                <div class="notify_message">
                                    <img class="notify_avatar" src="assets/img/profile.JPG">
                                    <div class="message_header">
                                        <h4>André Gabry</h4>
                                        <p>Existem chamados em aberto aguardando serem atendidos.</p>
                                    </div>
                                    <div class="notify_footer">
                                        <a href="#"><span class="material-symbols-outlined">circle</span></a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>


                    </div>


                    <a class="app_header_profile material-symbols-outlined">account_circle</a>
                </div>
                <div class="app_profile">
                    <div class="profile_header">
                        <h3>André Gabry</h3>
                        <p>andre.gabry@adventistas.org</p>
                    </div>
                    <div class="profile_main">
                        <a href="#"><span class="profile_set material-symbols-outlined">account_box</span>Perfil</a>
                        <a href="#"><span
                                    class="profile_conf material-symbols-outlined">settings</span>Configurações</a>
                    </div>
                    <div class="profile_footer">
                        <a href="#"><span class="profile_logout material-symbols-outlined">logout</span>Sair</a>
                    </div>
                </div>
                <img class="profile_avatar" src="assets/img/profile.JPG">
                <h2 class="profile_name">André Gabry</h2>
                <p class="profile_email">andre.gabry@adventistas.org</p>
            </div>
            <div class="app_sidebar_menu">
                <a href="https://suporte.ams.org.br" target="_blank"><span
                            class="sidebar_menu_icon material-symbols-outlined">support</span>Suporte</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">person</span>Usuários</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">contacts</span>Contatos</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">devices</span>Equipamentos</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">lock_open</span>Licenças</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">wysiwyg</span>Sistemas</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">dataset</span>Softwares</a>
                <a href="#"><span class="sidebar_menu_icon material-symbols-outlined">print</span>Impressoras</a>
            </div>
        </div>
        <div class="app_content">
            <div class="row">
                <div class="card_small">
                    <div class="row card_header">
                        <h3 class="card_label">Usuários</h3>
                        <span class="card_header_icon material-symbols-outlined">person</span>
                    </div>
                    <div class="row card_main">
                        <h1 class="quantity blue">45</h1>
                        <span class="span blue">Ativos</span>
                    </div>
                    <div class="row card_footer">
                        <p>Total de usuários: 65</p>
                    </div>
                </div>

                <div class="card_small">
                    <div class="row card_header">
                        <h3 class="card_label">Device</h3>
                        <span class="card_header_icon material-symbols-outlined">devices</span>
                    </div>
                    <div class="row card_main">
                        <h1 class="quantity red">108</h1>
                        <span class="span red">Ativos</span>
                    </div>
                    <div class="row card_footer">
                        <p>Total de devices: 265</p>
                    </div>
                </div>

                <div class="card_small">
                    <div class="row card_header">
                        <h3 class="card_label">Licenças</h3>
                        <span class="card_header_icon material-symbols-outlined">lock_open</span>
                    </div>
                    <div class="row card_main">
                        <h1 class="quantity yelow">16</h1>
                        <span class="span yelow">Ativos</span>
                    </div>
                    <div class="row card_footer">
                        <p>Total de licenças: 20</p>
                    </div>
                </div>

                <div class="card_small">
                    <div class="row card_header">
                        <h3 class="card_label">Impressoras</h3>
                        <span class="card_header_icon material-symbols-outlined">print</span>
                    </div>
                    <div class="row card_main">
                        <h1 class="quantity green">7</h1>
                        <span class="span green">Ativos</span>
                    </div>
                    <div class="row card_footer">
                        <p>Total de impressoras: 7</p>
                    </div>
                </div>

            </div>
        </div>

    </main>
    <footer class="app_footer">
        <p class="app_ass">Associação Mineira Sul, Desenvolvido por Adré Gabry v1.0</p>
    </footer>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>