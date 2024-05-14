@extends('layout')
@section('title', 'Balança PHP - Home')
@section('content')
    <section id="banner">
        <div class="layers-bg" id="bg-banner">
            <div class="layer-1"></div>
            <div class="layer-2"></div>
            <div class="layer-3"></div>
        </div>
        <div class="container container-banner">
            <h2>Balança de precisão SENAI/METRÔ</h2>
            <p>Seja-bem vindo! Compare diferentes pesos de peças de acordo com sua demanda. Estamos sempre a sua
                disposição!</p>
            <div class="btns-banner">
                <a href="#nosso-projeto" class="btn">Nosso Projeto</a>
                <a href="#quem-somos" class="btn">Nosso Time</a>
            </div>
        </div>
    </section>
    <section id="nosso-projeto">
        <div class="container container-nosso-projeto">
            <hgroup class="nosso-projeto-txt"> 
                <h2>Nosso Projeto</h2>
                <p>Além de pesar diversos tipos de peças que estiverem a disposição, nossa balança de precisão está integrada com uma Dashboard e com uma aplicação Web, onde o usuário tem transperência e visibilidade sobre tudo que está sendo posto na balança, desta forma, os colaboradores conseguem gerenciar o estoque de peças.  
            </hgroup>
            <div class="nosso-projeto-img">
            <img src="http://balancaprecisao.test/images/balanca_precisao.jpeg" alt="Sesi/Senai Logo"
                     alt="Imagem da balança de precisão"/>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="layers-bg" id="bg-features">
            <div class="layer-1"></div>
            <div class="layer-2"></div>
        </div>
        <div class="container container-features">
            <strong class="sm-txt">O coração da aplicação!</strong>
            <h2>Funcionalidades</h2>
            <p>Dentro do projeto, nossa equipe desenvolveu funcionalidades que proporcionam uma experiência do usuário
                completa e
                inigualável. São elas...</p>
            <div class="features-cards-grid">
                <div class="feature">
                <img src="http://balancaprecisao.test/images/dashboard.webp" alt="Sesi/Senai Logo"
                         alt="Imagem de uma Dashboard">
                    <div class="feature-txt">
                        <h3>Dashboard</h3>
                        <p>Transperência, visibilidade e facilidade com os gráficos na Dashboard.</p>
                    </div>
                </div>
                <div class="feature">
                    <img src="http://balancaprecisao.test/images/monografia.png"
                         alt="QR Code que leva para o documento Monografia.">
                    <div class="feature-txt">
                        <h3>Monografia</h3>
                        <p>Durante o desenvolvimento do projeto, os processos foram postos na Monografia</p>
                    </div>
                </div>
                <div class="feature">
                    <img src="http://balancaprecisao.test/images/precisao.png"
                         alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
                    <div class="feature-txt">
                        <h3>Precisão</h3>
                        <p>Todas as medições feitas pela balança são exatas porque ela foi muito bem calibrada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="quem-somos">
        <div class="container quem-somos-grid">
            <article>
                <i class="fa-solid fa-people-group"></i>
                <h2>Nosso Time</h2>
                <p>Durante o projeto, dividimos tarefas e contamos com um time de profissionais em capacitação
                    extremamente dedicados e empenhados em aprendar. Conheça aqui o nosso time!</p>
            </article>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/kauadeja/">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/KauaDeja">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/kaua.deja/">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor e Mecatrônico</strong>
                        <h3>Kaua Deja</h3>
                        <p>20 Anos. Formado em Desenvolvimento de Sistemas e Analista de Segurança na Edge UOL. Campeão
                            na modalidade <strong>#54 - Segurança Cibernética</strong> na SPSkills.</p>
                    </footer>
                </figcaption>
                <img src="https://avatars.githubusercontent.com/u/61596237?v=4"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/andressa-mueller-24109a21b/">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/dessamueller7">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/muellerdessa/">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Mecatrônica</strong>
                        <h3>Andressa Mueller</h3>
                        <p>21 Anos. Estudante de segurança da informação e <strong>estagiaria em dados e IA</strong> na Compass UOL.</p>
                    </footer>
                </figcaption>
                <img src="https://avatars.githubusercontent.com/u/153826628?v=4"
                     alt="Foto de Andressa">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/igor-basaglia-vilela-0b0742165/">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/basaglia05/">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Mecânico e Mecatrônico</strong>
                        <h3>Igor Basaglia</h3>
                        <p>18 Anos. Estudante de mecatrônica, um aspirante projetista e <strong>Jovem Aprendiz</strong> no Metrô.</p>
                    </footer>
                </figcaption>
                <img src="https://media.licdn.com/dms/image/D4E03AQFWRevJNvBsfw/profile-displayphoto-shrink_200_200/0/1715643353257?e=1721260800&v=beta&t=CtoqmhP_Qbpw8iIuxTOc4gYqhjnZFrGZsFjDEPe9YjE"
                     alt="Foto de Igor Basaglia">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/evandro-silva-pcd-b869a2110/">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Mecânico e Eletricista</strong>
                        <h3>Evandro</h3>
                        <p>Eletricista industrial e estudante de Mecatrônica <strong>Jovem Aprendiz</strong> no Metrô.</p>
                    </footer>
                </figcaption>
                <img src="https://media.licdn.com/dms/image/D4D03AQGPeIElz_y_Jg/profile-displayphoto-shrink_800_800/0/1708563210191?e=1721260800&v=beta&t=v5ejb2mYyOYgXNz6Q-iL0I4GxXA2XHoAqAQywnn6--g"
                     alt="Foto de Evandro">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.linkedin.com/in/gustavobassopucci/">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/gu_basso._/">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor e Mecatrônico</strong>
                        <h3>Gustavo Basso</h3>
                        <p>19 anos. Estudante de Análise e desenvolvimento de sistemas na FATEC e <strong>Jovem Aprendiz</strong> no Metrô.</p>
                    </footer>
                </figcaption>
                <img src="https://media.licdn.com/dms/image/D4E03AQFpnnl-XGWY8A/profile-displayphoto-shrink_200_200/0/1715643775566?e=1721260800&v=beta&t=u-bstwh9P8A2iOZaKE3qyehH_Pg0rZS9p8UPvb2QuzY"
                     alt="Foto de Gustavo Basso">
            </figure>
        </div>
    </section>
@endsection
