<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title ?? 'Entreamigos - Bar e Espetaria em Fortaleza-CE' }}</title>
  <meta name="description" content="{{ $description ?? 'Boteco Entreamigos: bar e espetaria em Fortaleza-CE. Espetos, feijão verde, carne do sol e camarão. Aberto de terça a sábado, reserve sua mesa ou seu evento.' }}">
  <meta name="keywords" content="{{ $keywords ?? 'boteco, bar, espetaria, entreamigos, Fortaleza, espeto, feijão verde, reserva de mesa, eventos' }}">
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Entreamigos">
  <meta property="og:title" content="{{ $title ?? 'Entreamigos - Bar e Espetaria em Fortaleza-CE' }}">
  <meta property="og:description" content="{{ $description ?? 'Boteco Entreamigos: bar e espetaria em Fortaleza-CE. Espetos, feijão verde, carne do sol e camarão.' }}">
  <meta property="og:image" content="{{ asset('assets/img/logo.jpeg') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:locale" content="pt_BR">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $title ?? 'Entreamigos - Bar e Espetaria em Fortaleza-CE' }}">
  <meta name="twitter:description" content="{{ $description ?? 'Boteco Entreamigos: bar e espetaria em Fortaleza-CE.' }}">
  <meta name="twitter:image" content="{{ asset('assets/img/logo.jpeg') }}">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo.jpeg') }}" rel="icon">
  <link href="{{ asset('assets/img/logo.jpeg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- Structured data (schema.org) para SEO local -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "BarOrPub",
    "name": "Entreamigos",
    "image": "{{ asset('assets/img/logo.jpeg') }}",
    "url": "{{ url('/') }}",
    "telephone": "+5585992226196",
    "servesCuisine": "Brasileira",
    "priceRange": "$$",
    "address": {
      "@@type": "PostalAddress",
      "streetAddress": "Rua Monsenhor Salazar, 882",
      "addressLocality": "Fortaleza",
      "addressRegion": "CE",
      "addressCountry": "BR"
    },
    "openingHoursSpecification": {
      "@@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      "opens": "17:00",
      "closes": "00:00"
    },
    "sameAs": [
      "https://www.instagram.com/botecoentreofc/",
      "https://www.facebook.com/search/top?q=entre%20amigos%20bar%20%26%20espetaria"
    ]
  }
  </script>

  @livewireStyles
</head>

<body>

  {{ $slot }}

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @livewireScripts
</body>

</html>
