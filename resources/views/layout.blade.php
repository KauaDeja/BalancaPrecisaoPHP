<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<header>
    <div class="container container-header">
        <h1>
            <a href="/">
                <img src="{{ asset('images/card_parceria_senai_metro.png') }}" alt="Sesi/Senai Logo">
            </a>
        </h1>
        <nav>
            <ul>
                <li>
                    <a class="link" href="/">Home</a>
                    <nav class="collapsed-links">
                        <ul>
                            <li><a class="link" href="/#nosso-projeto">Projeto</a></li>
                            <li><a class="link" href="/#features">Funcionalidades</a></li>
                            <li><a class="link" href="/#quem-somos">Nosso Time</a></li>
                        </ul>
                    </nav>
                </li>
                <li><a class="link" href="https://657302d90f93470008c87057.tago.run/">Dashboard</a></li>
                <li><a class="btn" href="/login">Entrar</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer id="page-footer">
    <div class="container container-footer">
        <section id="logo-footer">
            <a href="/">
                <img src="{{ asset('images/card_parceria_senai_metro.png') }}" alt="Sesi/Senai Logo">
            </a>
        </section>
        <section id="disclaimer-footer">
            <span>Todos os direitos reservados a Balanca de Precisao PHP©</span>
        </section>
        <section id="nav-footer">
            <nav>
                <ul>
                    <li><a class="link" href="/#nosso-projeto">Projeto</a></li>
                    <li><a class="link" href="/#features">Funcionalidades</a></li>
                    <li><a class="link" href="/#quem-somos">Nosso Time</a></li>
                    <li><a class="link" href="/login">Entrar</a></li>
                </ul>
            </nav>
        </section>
    </div>
</footer>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"/>--}}
</body>
</html>
