<x-layout :title="$contactInfo?->seo_title ?? 'Entreamigos - Bar e Espetaria em Fortaleza-CE'"
    :description="$contactInfo?->seo_description ?? 'Boteco Entreamigos: bar e espetaria em Fortaleza-CE.'"
    :contact-info="$contactInfo">

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><a
                        href="https://wa.me/{{ $contactInfo?->whatsapp ?? '5585992226196' }}?text=Ol%C3%A1%2C+Boa+noite%21" target="_blank"
                        rel="noopener noreferrer"><span>{{ $contactInfo?->phone ?? '+55 (85) 9922-9196' }}</span></a></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> {{ $contactInfo?->open_hours ?? 'Ter-Sab: 17:00 - 00:00' }}</span></i>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="{{ url('/') }}">{{ $contactInfo?->business_name ?? 'ENTREAMIGOS' }}</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Especiais</a></li>
                    <li><a class="nav-link scrollto" href="#events">Eventos</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
                    <li><a class="nav-link scrollto" href="#book-a-table">Reserva</a></li>
                    <li><a class="nav-link" href="{{ route('menu') }}">Cardápio</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Agendar evento</a>

        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1>{{ $contactInfo?->hero_title ?? 'Bem-Vindo ao ENTREAMIGOS' }}</h1>
                    <h2>{{ $contactInfo?->hero_subtitle ?? 'Há mais de 5 anos entregando comida de qualidade!' }}</h2>

                    <div class="btns">
                        <a href="{{ route('menu') }}" class="btn-menu animated fadeInUp">Nosso cardápio</a>
                        <a href="https://wa.me/{{ $contactInfo?->whatsapp ?? '5585992226196' }}?text=Ol%C3%A1%2C+Boa+noite%21" target="_blank"
                            class="btn-menu animated fadeInUp scrollto">Fale conosco</a>
                        <a href="{{ $contactInfo?->instagram_url ?? 'https://www.instagram.com/botecoentreofc/' }}" target="_blank"
                            class="btn-menu animated fadeInUp scrollto">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/barrrr.jpeg') }}" alt="Salão do bar Entreamigos">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Conheça o que sabemos fazer de melhor.</h3>
                        <p class="fst-italic">Todos os nossos ingredientes foram pensados para levar ao melhor no seu prato. Aqui você tem vantagens de:</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>Entreamigos, um lugar para o melhor encontro em família.</li>
                            <li><i class="bi bi-check-circle"></i>Seu gosto é atendido aqui.</li>
                            <li><i class="bi bi-check-circle"></i>Ambiente animado e divertido</li>
                            <li><i class="bi bi-check-circle"></i>Dudu</li>
                        </ul>
                        <p>
                            Dias de jogos animados e divertidos, para você torcer para seu time
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Seção porque nós ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Por que nós</h2>
                    <p>Por que escolher nosso restaurante</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <span>01</span>
                            <h4>Ambiente</h4>
                            <p>Temos um ótimo ambiente para quem procura um lugar tranquilo e divertido</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="200">
                            <span>02</span>
                            <h4>Encontro</h4>
                            <p>Lugar perfeito para você que quer organizar encontros entre amigos ou em família</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <span>03</span>
                            <h4>Jogos</h4>
                            <p>Venha torcer para o seu time de coração em dias de jogos com o melhor espeto da região</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Fim da seção Por que nós -->

        <!-- ======= especiais Section ======= -->
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Especiais</h2>
                    <p>Confira nossos pratos especiais</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item"><a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Feijão verde</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-2">Carne do sol c/ Macaxeira</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-3">Trinchado</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-4">Costelinha suína</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-5">Camarão Alho e Óleo</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Feijão verde</h3>
                                        <p class="fst-italic">Somos especialistas quando o assunto é feijão verde.</p>
                                        <p>Na literatura nao há consenso sobre o surgimento do feijão verde. Diverge-se se é do Peru ou da África Tropical, mas o fato é que o feijão verde que melhor se adaptou foi no nordeste feito com queijo, creme de leite e verduras da terra</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/feijao.jpeg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Carne do sol c/ Macaxeira</h3>
                                        <p>A técnica começou a ser usada no Brasil no século 17, segundo Costa. Ela mistura práticas dos índios, que secavam as carnes no fogo, e dos portugueses, que trouxeram o costume de usar o sal como conservante. Hoje em dia, ainda é usada no interior de estados do Nordeste, onde há um sol pra cada um.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/carne-do-sol.jpeg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Trinchado</h3>
                                        <p>O trinchado surgiu na região sul, na cidade de Santo Antônio da Patrulha com a abundância na carne bovina são feito com filé na brasa acompanhado com um molho barbecue</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/trinchado.jpeg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Costelinha suína</h3>
                                        <p>Esse prato surgiu por uma fatalidade econômica que reuniu dois elementos básicos da produção rio-grandense: o porco e o charque. O estado passou a ser um grande produtor desses alimentos, sendo que o charque é feito por meio de técnicas trazidas por uma família do Ceará.</p>
                                        <p>É um produto pré-cozido a base de pernil ou lombo suíno, com baixa taxa de gordura, a carne suína é cortada em mantas para garantir um produto mais homogêneo.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/costelinha.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Camarão Alho e Óleo</h3>
                                        <p>Camarão alho e óleo é um prato típico do Ceará, mas que encontrou morada por todo o país, inclusive onde não há mar, como é o caso de Curitiba. Sem segredo nenhum, rápido e tentador. Sentir o sabor rasgante do alho e rebater com cerveja gelada, não tem preço.</p>
                                        <p>Camarão é perfeito para petiscar. Ao bafo, à milanesa, em bolinhos, abraçadinho…seja como for, combina perfeitamente com cerveja e amigos.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/camarao.jpeg') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Specials Section -->

        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Eventos</h2>
                    <p>Organize seus eventos em nosso boteco</p>
                </div>

                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/aniversario.jpeg') }}" class="img-fluid" alt="Aniversários no Entreamigos">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Aniversários</h3>
                                    <p class="fst-italic">Venha comemorar seu aniversario no entreamigos, aqui você terá diversão alegria e poderár curtir muito o seu grande dia!!</p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Reserva de mesa para até 20 pessoas.</li>
                                        <li><i class="bi bi-check-circled"></i> Lugar de facíl acesso e tranquilo.</li>
                                        <li><i class="bi bi-check-circled"></i> Aniversariantes ganham brindes.</li>
                                        <li><i class="bi bi-check-circled"></i> Confira as nossas condições.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/amigos.jpeg') }}" class="img-fluid" alt="Encontro entre amigos no Entreamigos">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Encontro entre amigos</h3>
                                    <p class="fst-italic">Junte seus amigos e venha se divertir!!!</p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Reserve uma mesa para ate 15 pessoas.</li>
                                        <li><i class="bi bi-check-circled"></i> Facil acesso e tranquilo.</li>
                                        <li><i class="bi bi-check-circled"></i> Confira as nossas condições.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-6">
                                    <img src="{{ asset('assets/img/casal.jpeg') }}" class="img-fluid" alt="Jantar no Entreamigos">
                                </div>
                                <div class="col-lg-6 pt-4 pt-lg-0 content">
                                    <h3>Jantar</h3>
                                    <p class="fst-italic">Um otimo lugar para aquele seu encontro romantico!!</p>
                                    <ul>
                                        <li><i class="bi bi-check-circled"></i> Reserve uma mesa.</li>
                                        <li><i class="bi bi-check-circled"></i> Facil acesso e tranquilo.</li>
                                        <li><i class="bi bi-check-circled"></i> Confira as nossas condições.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Events Section -->

        <!-- ======= Book A Table Section ======= -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeria</h2>
                    <p>Algumas fotos do nosso boteco</p>
                    <a href="{{ $contactInfo?->instagram_url ?? 'https://www.instagram.com/botecoentreofc/' }}" target="_blank"
                        class="btn-menu animated fadeInUp scrollto">
                        <i class="bi bi-instagram"></i> Siga no Instagram
                    </a>
                </div>
            </div>

            <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-0">
                    @foreach (['img1.jpeg', 'img2.jpeg', 'img3.jpeg', 'img4.jpeg', 'img5.jpeg', 'img6.jpeg', 'img7.jpeg', 'img8.jpeg'] as $image)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="{{ asset('assets/img/gallery/'.$image) }}"
                                    class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="{{ asset('assets/img/gallery/'.$image) }}"
                                        alt="Foto do boteco Entreamigos" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Chefs Section ======= -->
        <section id="chefs" class="chefs">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Chefs</h2>
                    <p>Nossas Cozinheiras</p>
                </div>

                <div class="row">
                    @php
                        $chefs = [
                            ['name' => 'Nice Sousa', 'image' => 'chefs/chef.jpeg', 'facebook_url' => 'https://www.facebook.com/nice.rabelo', 'instagram_url' => 'https://www.instagram.com/_nicerabelo/'],
                            ['name' => 'Elizete Rabelo', 'image' => 'chefs/asdasd.jpeg', 'facebook_url' => 'https://www.facebook.com/profile.php?id=100005592165935', 'instagram_url' => 'https://www.instagram.com/elizeterabeo/'],
                            ['name' => 'Franci', 'image' => 'chefs/franci.jpeg', 'facebook_url' => null, 'instagram_url' => null],
                        ];
                    @endphp
                    @foreach ($chefs as $i => $chef)
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="{{ 100 * ($i + 1) }}">
                                <img src="{{ asset('assets/img/'.$chef['image']) }}" class="img-fluid"
                                    alt="{{ $chef['name'] }}">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $chef['name'] }}</h4>
                                    </div>
                                    <div class="social">
                                        @if ($chef['facebook_url'])
                                            <a href="{{ $chef['facebook_url'] }}" target="_blank"><i
                                                    class="bi bi-facebook"></i></a>
                                        @endif
                                        @if ($chef['instagram_url'])
                                            <a href="{{ $chef['instagram_url'] }}" target="_blank"><i
                                                    class="bi bi-instagram"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Chefs Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contato</h2>
                    <p>Contate-nos</p>
                </div>
            </div>

            @if ($contactInfo?->map_embed_url)
                <div data-aos="fade-up">
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="{{ $contactInfo->map_embed_url }}"
                        frameborder="0" loading="lazy" allowfullscreen></iframe>
                </div>
            @endif

            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Localização:</h4>
                                <p>{{ $contactInfo?->address }}</p>
                            </div>
                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Horario de funcionamento:</h4>
                                <p>{{ $contactInfo?->open_hours }}</p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>{{ $contactInfo?->email }}</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telefone:</h4>
                                <p>{{ $contactInfo?->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Reserva</h2>
                    <p>Reserve seu evento</p>
                </div>

                <livewire:book-table-form />
            </div>
        </section><!-- End Book A Table Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>{{ $contactInfo?->business_name ?? 'Entreamigos' }}</h3>
                            <p>
                                {{ $contactInfo?->address }}<br><br>
                                <strong>Telefone:</strong> {{ $contactInfo?->phone }}<br>
                                <strong>Email:</strong> {{ $contactInfo?->email }}<br>
                            </p>
                            <div class="social-links mt-3">
                                @if ($contactInfo?->facebook_url ?? true)
                                    <a href="{{ $contactInfo?->facebook_url ?? 'https://www.facebook.com/search/top?q=entre%20amigos%20bar%20%26%20espetaria' }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                                @endif
                                @if ($contactInfo?->instagram_url ?? true)
                                    <a href="{{ $contactInfo?->instagram_url ?? 'https://www.instagram.com/botecoentreofc/' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links Úteis</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre nós</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('menu') }}">Cardápio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#book-a-table">Reservas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright {{ now()->year }} <strong><span>{{ $contactInfo?->business_name ?? 'Entreamigos' }}</span></strong>. Todos os direitos
                reservados
            </div>
            <div class="credits">
                Desenvolvedor <a href="https://www.instagram.com/renanaragao9/" target="_blank">Renan Aragão</a>
            </div>
        </div>
    </footer><!-- End Footer -->

</x-layout>
