<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omelete</title>
    <link rel= "stylesheet" href= "{{asset('css/style.css') }}" />
    <script src="https://kit.fontawesome.com/525a7ba6e9.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="container">
        <a href="#" class="btn circle shadow" onclick="btnMenu()"><i class="fas fa-bars"></i></a>
        <a href="index.html" title="acessar a home">
            <img src="img/omelete_logo.svg" alt="Logo do Omelete">
        </a>
        <a href="#" class="btn circle shadow pesquisa" title="clique para pesquisar no site">
            <i class="fas fa-search"></i>
        </a>
        <nav id="menu">
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#filmes">Filmes</a></li>
                <li><a href="#series">Séries</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="banner">
            <picture>
                <source media="(min-width: 1201px)" srcset="img/news/4.png">
                <source media="(min-width: 801px)" srcset="img/news/3.png">
                <source media="(min-width: 426px)" srcset="img/news/2.png">
                <img src="img/news/1.jpg" alt="Banner demonstrativo">
            </picture>
        </div>

        <h1>principais destaques</h1>

        <section id="filmes">
            <h2 class="btn shadow rounded">filmes</h2>
            <div class="card btn rounded shadow">
                <img src="img/news/2.png" alt="Imagem sobre a notícia X" class="rounded">
                <h3>Logan está de volta à Marvel!</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia assumenda repellat
                    possimus sequi aspernatur quam, reiciendis expedita saepe suscipit iusto rem. Expedita fuga ut harum
                    excepturi dolore reprehenderit cumque.</p>
            </div>
            <div class="card btn rounded shadow">
                <img src="img/news/2.png" alt="Imagem sobre a notícia X" class="rounded">
                <h3>Logan está de volta à Marvel!</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia assumenda repellat
                    possimus sequi aspernatur quam, reiciendis expedita saepe suscipit iusto rem. Expedita fuga ut harum
                    excepturi dolore reprehenderit cumque.</p>
            </div>
            <div class="card btn rounded shadow">
                <img src="img/news/2.png" alt="Imagem sobre a notícia X" class="rounded">
                <h3>Logan está de volta à Marvel!</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia assumenda repellat
                    possimus sequi aspernatur quam, reiciendis expedita saepe suscipit iusto rem. Expedita fuga ut harum
                    excepturi dolore reprehenderit cumque.</p>
            </div>
        </section>


        <section id="series">
            <h2 class="btn shadow rounded">séries</h2>
            <div class="card btn rounded shadow">
                <img src="img/news/2.png" alt="Imagem sobre a notícia X" class="rounded">
                <h3>Logan está de volta à Marvel!</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia assumenda repellat
                    possimus sequi aspernatur quam, reiciendis expedita saepe suscipit iusto rem. Expedita fuga ut harum
                    excepturi dolore reprehenderit cumque.</p>
            </div>
            <div class="card btn rounded shadow">
                <img src="img/news/2.png" alt="Imagem sobre a notícia X" class="rounded">
                <h3>Logan está de volta à Marvel!</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia assumenda repellat
                    possimus sequi aspernatur quam, reiciendis expedita saepe suscipit iusto rem. Expedita fuga ut harum
                    excepturi dolore reprehenderit cumque.</p>
            </div>
            <div class="card btn rounded shadow">
                <img src="img/news/2.png" alt="Imagem sobre a notícia X" class="rounded">
                <h3>Logan está de volta à Marvel!</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, officia assumenda repellat
                    possimus sequi aspernatur quam, reiciendis expedita saepe suscipit iusto rem. Expedita fuga ut harum
                    excepturi dolore reprehenderit cumque.</p>
            </div>
        </section>

    </main>

    <footer class="shadow">
        <div class="container">
            <div class="links btn inner rounded">
                <h4>filmes</h4>
                <nav>
                    <ul>
                        <li><a href="#">Oscar</a></li>
                        <li><a href="#">Bilheteria USA</a></li>
                        <li><a href="#">Bilheteria Brasil</a></li>
                        <li><a href="#">Estréias da Semana</a></li>
                        <li><a href="#">Críticas</a></li>
                        <li><a href="#">Notícias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="links btn inner rounded">
                <h4>séries de tv</h4>
                <nav>
                    <ul>
                        <li><a href="#">Oscar</a></li>
                        <li><a href="#">Bilheteria USA</a></li>
                        <li><a href="#">Bilheteria Brasil</a></li>
                        <li><a href="#">Estréias da Semana</a></li>
                        <li><a href="#">Críticas</a></li>
                        <li><a href="#">Notícias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="links btn inner rounded">
                <h4>hq's e livros</h4>
                <nav>
                    <ul>
                        <li><a href="#">Oscar</a></li>
                        <li><a href="#">Bilheteria USA</a></li>
                        <li><a href="#">Bilheteria Brasil</a></li>
                        <li><a href="#">Estréias da Semana</a></li>
                        <li><a href="#">Críticas</a></li>
                        <li><a href="#">Notícias</a></li>
                    </ul>
                </nav>
            </div>
            <div class="links btn inner rounded">
                <h4>música</h4>
                <nav>
                    <ul>
                        <li><a href="#">Oscar</a></li>
                        <li><a href="#">Bilheteria USA</a></li>
                        <li><a href="#">Bilheteria Brasil</a></li>
                        <li><a href="#">Estréias da Semana</a></li>
                        <li><a href="#">Críticas</a></li>
                        <li><a href="#">Notícias</a></li>
                    </ul>
                </nav>
            </div>

            <div class="sociais btn inner rounded">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

        </div>
    </footer>


    <script>
        function btnMenu() {

            var menu = document.getElementById("menu");

            if (menu.style.display == "none") {
                menu.style.display = "block";
            } else {
                menu.style.display = "none";
            }
        }
    </script>


</body>

</html>