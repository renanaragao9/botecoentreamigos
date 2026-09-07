@php($businessName = $contactInfo?->business_name ?? 'Entreamigos')

<x-layout :title="$businessName.' - Cardápio digital'"
    :description="'Confira o cardápio digital do '.$businessName"
    :contact-info="$contactInfo">

    <header class="digital-menu-header">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ route('home') }}">{{ $businessName }}</a></h1>
            <a href="{{ route('home') }}" class="book-a-table-btn">Voltar ao site</a>
        </div>
    </header>

    <main class="digital-menu-page">
        <section class="menu section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Cardápio digital</h2>
                    <p>Confira nosso saboroso cardápio</p>
                </div>

                @forelse ($menuCategories as $category)
                    @if ($category->items->isNotEmpty())
                        <section class="digital-menu-category">
                            <h2>{{ $category->name }}</h2>
                            <div class="row">
                                @foreach ($category->items as $item)
                                    <div class="col-lg-6 menu-item">
                                        <a href="{{ Storage::disk('public')->url($item->image) }}" class="glightbox menu-image-link"
                                            data-gallery="menu-gallery" aria-label="Ampliar foto de {{ $item->name }}">
                                            <img src="{{ Storage::disk('public')->url($item->image) }}" class="menu-img" alt="{{ $item->name }}">
                                        </a>
                                        <div class="menu-content">
                                            <span>{{ $item->name }}</span>
                                            @if ($item->price_promotional)
                                                <span class="menu-price">
                                                    <s class="menu-price-old">R$ {{ number_format((float) $item->price, 2, ',', '.') }}</s>
                                                    <strong class="menu-price-promo">R$ {{ number_format((float) $item->price_promotional, 2, ',', '.') }}</strong>
                                                </span>
                                            @else
                                                <strong>R$ {{ number_format((float) $item->price, 2, ',', '.') }}</strong>
                                            @endif
                                        </div>
                                        @if ($item->description)
                                            <div class="menu-ingredients">{{ $item->description }}</div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                @empty
                    <p class="digital-menu-empty">O cardápio estará disponível em breve.</p>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>
