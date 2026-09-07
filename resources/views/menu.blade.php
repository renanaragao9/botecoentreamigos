@php($businessName = $contactInfo?->business_name ?? 'Entreamigos')

<x-layout :title="$businessName.' - Cardápio digital'"
    :description="'Confira o cardápio digital do '.$businessName"
    :contact-info="$contactInfo">

    <header class="digital-menu-header">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <h1 class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/img/logo/logo-entreamigos.png') }}" class="brand-logo" alt="{{ $businessName }}">
                </a>
            </h1>
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
                                        <button type="button" class="menu-image-link menu-item-detail-trigger" data-bs-toggle="modal"
                                            data-bs-target="#menu-item-modal-{{ $item->id }}" aria-label="Ver detalhes de {{ $item->name }}">
                                            <img src="{{ Storage::disk('public')->url($item->image) }}" class="menu-img" alt="{{ $item->name }}">
                                        </button>
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
                                        @if ($item->allergenGuides->isNotEmpty())
                                            <div class="menu-allergens" aria-label="Alérgenos">
                                                <span class="menu-allergens-label">Alérgenos:</span>
                                                @foreach ($item->allergenGuides as $allergenGuide)
                                                    <img src="{{ Storage::disk('public')->url($allergenGuide->icon) }}"
                                                        class="menu-allergen-icon" alt="{{ $allergenGuide->name }}"
                                                        title="{{ $allergenGuide->name }}">
                                                @endforeach
                                            </div>
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

    <div class="menu-item-modals">
        @foreach ($menuCategories as $category)
            @foreach ($category->items as $item)
                <div class="modal fade menu-item-modal" id="menu-item-modal-{{ $item->id }}" tabindex="-1"
                    aria-labelledby="menu-item-modal-title-{{ $item->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="menu-item-modal-title-{{ $item->id }}">{{ $item->name }}</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <img src="{{ Storage::disk('public')->url($item->image) }}" class="menu-item-modal-image" alt="{{ $item->name }}">
                            <div class="modal-body">
                                @if ($item->description)
                                    <p class="menu-item-modal-description">{{ $item->description }}</p>
                                @endif
                                @if ($item->allergenGuides->isNotEmpty())
                                    <div class="menu-item-modal-allergens">
                                        <span>Alérgenos</span>
                                        <div class="row g-3">
                                            @foreach ($item->allergenGuides as $allergenGuide)
                                                <div class="col-3 menu-item-modal-allergen">
                                                    <img src="{{ Storage::disk('public')->url($allergenGuide->icon) }}"
                                                        alt="{{ $allergenGuide->name }}">
                                                    <span>{{ $allergenGuide->name }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</x-layout>
