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
            <h2>Balança de precisão PHP</h2>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis eleifend odio, at condimentum
                    eros. Donec egestas purus imperdiet, vulputate purus id, bibendum elit. Pellentesque posuere viverra
                    libero, et commodo quam egestas finibus. Cras dictum urna vitae orci tincidunt luctus. Quisque nec
                    aliquam ligula. Morbi massa turpis, congue a velit sed, lacinia tincidunt justo. Phasellus quis
                    magna condimentum, facilisis ligula ornare, laoreet purus. Vivamus sit amet leo metus. Vestibulum
                    eget nisi a tellus lacinia finibus. Class aptent taciti sociosqu ad litora torquent per conubia
                    nostra, per inceptos himenaeos. Nulla nec scelerisque purus, id dapibus felis. Sed bibendum orci id
                    sem viverra, at tristique eros lacinia. Vestibulum in aliquet ante. Nunc mauris neque, gravida eget
                    metus nec, suscipit consequat nulla.</p>
            </hgroup>
            <div class="nosso-projeto-img">
                <img src="https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM"/>
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
                    <img src="https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png"
                         alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
                    <div class="feature-txt">
                        <h3>Feature</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="feature">
                    <img src="https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png"
                         alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
                    <div class="feature-txt">
                        <h3>Feature</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="feature">
                    <img src="https://blog.iprocess.com.br/wp-content/uploads/2021/11/placeholder.png"
                         alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
                    <div class="feature-txt">
                        <h3>Feature</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
                                <a href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor</strong>
                        <h3>Kaua Deja</h3>
                        <p>21 Anos. Formado em Desenvolvimento de Sistemas e Redes de Computadores pelo SENAI©. Campeão
                            na modalidade <strong>#54 - Segurança Cibernética</strong> na SPSkills.</p>
                    </footer>
                </figcaption>
                <img src="https://mhcid.washington.edu/wp-content/uploads/2021/12/placeholder-user-759x1024.jpg"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor</strong>
                        <h3>Kaua Deja</h3>
                        <p>21 Anos. Formado em Desenvolvimento de Sistemas e Redes de Computadores pelo SENAI©. Campeão
                            na modalidade <strong>#54 - Segurança Cibernética</strong> na SPSkills.</p>
                    </footer>
                </figcaption>
                <img src="https://mhcid.washington.edu/wp-content/uploads/2021/12/placeholder-user-759x1024.jpg"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor</strong>
                        <h3>Kaua Deja</h3>
                        <p>21 Anos. Formado em Desenvolvimento de Sistemas e Redes de Computadores pelo SENAI©. Campeão
                            na modalidade <strong>#54 - Segurança Cibernética</strong> na SPSkills.</p>
                    </footer>
                </figcaption>
                <img src="https://mhcid.washington.edu/wp-content/uploads/2021/12/placeholder-user-759x1024.jpg"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor</strong>
                        <h3>Kaua Deja</h3>
                        <p>21 Anos. Formado em Desenvolvimento de Sistemas e Redes de Computadores pelo SENAI©. Campeão
                            na modalidade <strong>#54 - Segurança Cibernética</strong> na SPSkills.</p>
                    </footer>
                </figcaption>
                <img src="https://mhcid.washington.edu/wp-content/uploads/2021/12/placeholder-user-759x1024.jpg"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
            </figure>
            <figure tabindex="0">
                <figcaption>
                    <nav>
                        <ul>
                            <li>
                                <a href="https://linkedin.com">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com">
                                    <i class="fa-brands fa-square-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <footer>
                        <strong>Desenvolvedor</strong>
                        <h3>Kaua Deja</h3>
                        <p>21 Anos. Formado em Desenvolvimento de Sistemas e Redes de Computadores pelo SENAI©. Campeão
                            na modalidade <strong>#54 - Segurança Cibernética</strong> na SPSkills.</p>
                    </footer>
                </figcaption>
                <img src="https://mhcid.washington.edu/wp-content/uploads/2021/12/placeholder-user-759x1024.jpg"
                     alt="ALTERAR O TEXTO APÓS DEFINIR IMAGEM">
            </figure>
        </div>
    </section>
@endsection
