@extends('layout')

@section('title', 'Página Inicial')

@section('content')
    <div class="container">
        {{--    SECTION 1--}}
        <section class="hero-section">
            <div class="hero-content">
                <div class="text-content">
                    <h1 class="hero-title">Do Conceito ao Lançamento com Especialistas em Laravel</h1>
                    <p class="hero-description">
                        Mais do que uma equipe de desenvolvimento, oferecemos a estratégia e a expertise necessárias
                        para transformar sua ideia em realidade.
                    </p>
                    <button class="cta-button">Comece Agora 🚀</button>
                </div>
                <div class="image-content">
                    <img src="{{ asset('images/laravel-ill.svg') }}" width="400px" height="400px" alt="Laravel Home">
                </div>
            </div>
        </section>


        {{--    SECTION 2--}}
        <section>
            <div class="responsive-section">
                <h2 class="section-title">Desenvolvedores Laravel Inteligentes</h2>
                <img class="section-image" src="{{ asset('images/developers.jpg') }}" alt="Laravel Developers">
                <p class="section-text">
                    Todos os desenvolvedores Laravel com quem você irá colaborar são altamente qualificados, motivados e
                    apaixonados por criar aplicações robustas. Esta comunidade oferece um espaço onde você pode fazer
                    perguntas, compartilhar conhecimento e crescer junto. Você pode ou não ter um ambiente assim no seu
                    local de trabalho. Se ficar tímido e não participar, será você quem perderá essa oportunidade!
                </p>
                <button class="cta-button">
                    Conheça nosso time
                </button>
            </div>
        </section>
        {{-- SECTION 3 --}}
        <section class="scroll-section">
            <div class="scroll-content">
                <!-- Text Content on the Left -->
                <div class="text-content">
                    <h1 class="scroll-title">Transforme Suas Ideias em Soluções Inovadoras com Laravel</h1>
                    <p class="scroll-description">
                        Nossa equipe de especialistas em Laravel está pronta para levar seu projeto ao próximo nível com
                        tecnologia de ponta e um processo ágil.
                    </p>
                    <button class="cta-button">Inicie seu Projeto agora! 🚀</button>
                </div>

                <!-- Dynamic Scrolling Items on the Right -->
                <div class="image-dynamic-scrolling">
                    <div class="item">
                        <img class="" src="{{ asset('images/robust.svg') }}" alt="Laravel Robust">
                        <div class="text-content">
                            <h2>Framework Robusto e Flexível</h2>
                            <p>Com Laravel, você tem uma base sólida e flexível para construir qualquer tipo de
                                aplicação web.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('images/tools.svg') }}" alt="Laravel Tools">
                        <div class="text-content">
                            <h2>Ferramentas para Integração Simples</h2>
                            <p>Laravel oferece ferramentas nativas que tornam a integração com outros sistemas
                                extremamente simples e eficaz.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="" src="{{ asset('images/performance.svg') }}" alt="Laravel Performance">
                        <div class="text-content">
                            <h2>Escalabilidade de Alto Desempenho</h2>
                            <p>Com Laravel, você garante a escalabilidade necessária para que seu sistema cresça de
                                forma eficaz e sem limitações.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{--SECTION 4--}}
        <section>
            <div class="image-zoom-section">
                <div class="image-zoom-container">
                    <div class="image-zoom-item">
                        <div class="image-zoom-limit">
                            <img class="image-zoom" src="{{ asset('images/specialists.jpg') }}"
                                 alt="Laravel Specialists    ">
                        </div>
                        <h2 class="image-zoom-title">Laravel</h2>
                        <p class="image-zoom-text">
                            Na Pure Code IT, somos especialistas em Laravel, criando soluções personalizadas que atendem
                            aos objetivos do seu negócio com inovação e escalabilidade. </p>
                        <button class="image-zoom-button">
                            Descubra mais
                        </button>
                    </div>
                    <div class="image-zoom-item">
                        <div class="image-zoom-limit">
                            <img class="image-zoom" src="{{ asset('images/agile.jpg') }}" alt="Laravel Developers">
                        </div>
                        <h2 class="image-zoom-title">Desenvolvimento Ágil</h2>
                        <p class="image-zoom-text">
                            A metodologia ágil aliada ao Laravel permite entregas rápidas, adaptáveis e com máxima
                            qualidade. Fique à frente com soluções que evoluem conforme suas necessidades!
                        </p>
                        <button class="image-zoom-button">
                            Fale com um especialista
                        </button>
                    </div>
                    <div class="image-zoom-item">
                        <div class="image-zoom-limit">
                            <img class="image-zoom" src="{{ asset('images/support.jpg') }}" alt="Laravel Developers">
                        </div>
                        <h2 class="image-zoom-title">Suporte Contínuo</h2>
                        <p class="image-zoom-text">
                            Oferecemos suporte contínuo para garantir que seus sistemas Laravel estejam sempre
                            atualizados e funcionando perfeitamente, sem surpresas ou quedas de desempenho.
                        </p>
                        <button class="image-zoom-button">
                            Saiba como podemos ajudar
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{--SECTION 5--}}
    <section>
        <div class="why-choose-us">
            <div class="choose-us-title">
                <h2>Por que escolher a Pure Code IT?</h2>
            </div>
            <div class="choose-us-content">
                <!-- Item 1 -->
                <div class="choose-us-item">
                    <div class="choose-image">
                        <img src="{{ asset('images/laravel.svg') }}" alt="Laravel Logo">
                    </div>
                    <div class="choose-text-content">
                        <h3 class="choose-item-title">Laravel Sob Medida</h3>
                        <p class="choose-item-description">Com nossa especialização em Laravel, criamos soluções
                            personalizadas que crescem junto com seu negócio, garantindo máxima escalabilidade e
                            eficiência.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="choose-us-item">
                    <div class="choose-image">
                        <img src="{{ asset('images/fast.svg') }}" alt="Metodologia Ágil">
                    </div>
                    <div class="choose-text-content">
                        <h3 class="choose-item-title">Metodologia Ágil</h3>
                        <p class="choose-item-description">Entregamos resultados rápidos e precisos, adaptando-nos às
                            necessidades do seu projeto, com a flexibilidade que a metodologia ágil proporciona.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="choose-us-item">
                    <div class="choose-image">
                        <img src="{{ asset('images/assistance.svg') }}" alt="Suporte Ininterrupto">
                    </div>
                    <div class="choose-text-content">
                        <h3 class="choose-item-title">Suporte Ininterrupto</h3>
                        <p class="choose-item-description">Nosso suporte contínuo assegura que seu sistema esteja sempre
                            no seu melhor desempenho, com atualizações regulares e assistência proativa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--SECTION 6--}}
    <section>
        <div class="animated-text">
            <div class="animated-text-image">
                <img src="{{ asset('images/security.svg') }}" alt="Segurança e Qualidade">
            </div>
            <div class="animated-text-content">
                <div class="animated-text-title text-to-animate">
                    Segurança e Qualidade em Cada Linha de Código
                </div>
                <div class="animated-text-bar"></div>
                <div class="animated-text-description text-to-animate">
                    Na Pure Code IT, transformamos ideias em soluções robustas e seguras.
                    Com as melhores práticas de desenvolvimento Laravel, garantimos aplicações
                    de alto desempenho, protegidas contra ameaças e prontas para escalar.
                    Do código à implantação, cada etapa é cuidadosamente planejada para entregar
                    não apenas funcionalidade, mas confiança e excelência.

                    Conte conosco para levar seu projeto ao próximo nível, com segurança,
                    qualidade e inovação em cada detalhe.
                </div>
            </div>
        </div>
    </section>
    {{--SECTION 7--}}
    <section>
        <div class="card-and-cta">
            <div class="card-and-cta-content">
                <div class="card-and-cta-item">
                    <div class="card-and-cta-image">
                        <img src="{{ asset('images/laravel.svg') }}" alt="Laravel Logo">
                    </div>
                    <div class="card-and-cta-item-content">
                        <h3 class="card-title">Impulsione Seu Negócio com Laravel</h3>
                        <p class="card-description">Soluções personalizadas em Laravel
                            para impulsionar o crescimento do seu negócio,
                            com máxima eficiência e escalabilidade.
                            Conte com a expertise da Pure Code IT
                            para transformar seus desafios em resultados!</p>
                        <button class="card-button">Entre em contato</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--SECTION 8--}}
    <section>
        <div class="demo">
            <div class="demo-content">
                <div class="demo-item">
                    <div class="demo-item-content">
                        <h3 class="demo-title">Estamos prontos para superar suas expectativas</h3>
                        <p class="demo-description">Traga-nos o seu maior desafio.
                            Vamos mostrar o que a Pure Code IT pode fazer com soluções sob medida.</p>
                        <button class="demo-button">Agende uma demonstração</button>
                        <div class="item-image">
                            <img src="{{ asset('images/demo.jpg') }}" width="251px" height="215px" style="border-radius: 15px" alt="Pure Code IT Demo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="demo-image-content">
                <div class="demo-image">
                    <img src="{{ asset('images/demo.jpg') }}" width="345px" height="345px" style="border-radius: 15px" alt="Pure Code IT Demo">
                </div>
            </div>
        </div>
    </section>
@endsection
