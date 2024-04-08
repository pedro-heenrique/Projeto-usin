<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>@yield('title')</title>


    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS DA APLICAÇÃO -->
    <link rel="stylesheet" href="/css/styles.css">
    
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/novacaplogo.png" alt="Sistema">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Solicitantes</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Materiais</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Motorista</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Automóvel</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Usuário</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <div id="footer_content">
            <div class="footer_contacts">
                <h1>NOVACAP</h1>
                <p>Construindo qualidade de vida na Capital do Brasil.</p>
                <div id="footer_social_media">
                    <a href="https://www.instagram.com/novacapoficial/" class='footer-link' id='instagram' target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="https://www.facebook.com/novacapoficial/?locale=pt_BR" class='footer-link' id='facebook' target="_blank">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="https://twitter.com/novacap" class='footer-link' id='twitter' target="_blank">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <br>
                    <br>
                    <br>
                </div>
                <div id='footer-img'>
                    <img src="/img/images.png" height="100px" width="150px" alt="">
                    <br>
                </div>
            </div>
            <ul class="footer-list">
                <li>
                    <h3>Teste</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Tech</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Adventures</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Music</a>
                </li>
            </ul>
            <ul class="footer-list">
                <li>
                    <h3>Teste</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Cloud</a>
                </li>
            </ul>
            <div class="footer-address">
                <br>
                <h3>Endereço:</h3>
                <p>Setor de Áreas Públicas, Lote B S/n Sia Sul - Guará, Brasília - DF, 71215-000</p>
                <p>Telefone: (61) 3403-2300</p>
                <p>Horário de funcionamento: de Seg a Sex 08:00 as 17:00 horas</p>
            </div>
        </div>
        <div id="footer_copyright">
            Companhia Urbanizadora da Nova Capital do Brasil - NOVACAP &copy; 2023
        </div>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </footer>
</body>
</html>
