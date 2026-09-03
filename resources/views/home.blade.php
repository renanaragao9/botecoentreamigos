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
                    <li><a class="nav-link" href="{{ route('menu') }}">Cardápio</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Especiais</a></li>
                    <li><a class="nav-link scrollto" href="#events">Eventos</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
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
                        @if ($aboutSection)
                            <div class="about-img">
                                <img src="{{ Storage::url($aboutSection->image) }}" alt="Salão do bar Entreamigos">
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>{{ $aboutSection?->title }}</h3>
                        <p class="fst-italic">{{ $aboutSection?->intro_text }}</p>
                        <ul>
                            @foreach ($aboutFeatures as $feature)
                                <li><i class="bi bi-check-circle"></i>{{ $feature->text }}</li>
                            @endforeach
                        </ul>
                        <p>
                            {{ $aboutSection?->closing_text }}
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
                    @foreach ($whyUsItems as $item)
                        <div class="col-lg-4 @if (!$loop->first) mt-4 mt-lg-0 @endif">
                            <div class="box" data-aos="zoom-in" data-aos-delay="{{ 100 * ($loop->index + 1) }}">
                                <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
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
                            @foreach ($specials as $special)
                                <li class="nav-item"><a class="nav-link @if ($loop->first) active show @endif"
                                        data-bs-toggle="tab" href="#tab-{{ $special->id }}">{{ $special->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            @foreach ($specials as $special)
                                <div class="tab-pane @if ($loop->first) active show @endif" id="tab-{{ $special->id }}">
                                    <div class="row">
                                        <div class="col-lg-8 details order-2 order-lg-1">
                                            <h3>{{ $special->title }}</h3>
                                            @if ($special->subtitle)
                                                <p class="fst-italic">{{ $special->subtitle }}</p>
                                            @endif
                                            @foreach (explode("\n\n", $special->description) as $paragraph)
                                                <p>{{ $paragraph }}</p>
                                            @endforeach
                                        </div>
                                        <div class="col-lg-4 text-center order-1 order-lg-2">
                                            <img src="{{ Storage::url($special->image) }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                        @foreach ($events as $event)
                            <div class="swiper-slide">
                                <div class="row event-item">
                                    <div class="col-lg-6">
                                        <img src="{{ Storage::url($event->image) }}" class="img-fluid"
                                            alt="{{ $event->title }} no Entreamigos">
                                    </div>
                                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                                        <h3>{{ $event->title }}</h3>
                                        <p class="fst-italic">
                                            {{ $event->description }}
                                        </p>
                                        <ul>
                                            @foreach ($event->features as $feature)
                                                <li><i class="bi bi-check-circled"></i> {{ $feature->text }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Events Section -->

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

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Comentarios</h2>
                    <p>O que estão dizendo sobre nós</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $t)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $t->text }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="{{ Storage::url($t->image) }}"
                                        class="testimonial-img" alt="{{ $t->name }}">
                                    <h3>{{ $t->name }}</h3>
                                    <h4>{{ $t->source }}</h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

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
                    @foreach ($galleryImages as $image)
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="{{ Storage::url($image->image) }}"
                                    class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="{{ Storage::url($image->image) }}"
                                        alt="{{ $image->caption ?? 'Foto do boteco Entreamigos' }}" class="img-fluid">
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
                    @foreach ($chefs as $chef)
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="zoom-in" data-aos-delay="{{ 100 * ($loop->index + 1) }}">
                                <img src="{{ Storage::url($chef->image) }}" class="img-fluid"
                                    alt="{{ $chef->name }}">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>{{ $chef->name }}</h4>
                                    </div>
                                    <div class="social">
                                        @if ($chef->facebook_url)
                                            <a href="{{ $chef->facebook_url }}" target="_blank"><i
                                                    class="bi bi-facebook"></i></a>
                                        @endif
                                        @if ($chef->instagram_url)
                                            <a href="{{ $chef->instagram_url }}" target="_blank"><i
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
