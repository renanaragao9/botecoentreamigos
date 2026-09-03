<form wire:submit="submit" class="php-email-form" data-aos="fade-up" data-aos-delay="100">

    @if ($sent)
        <div class="alert alert-success" role="alert">
            Reserva enviada! Vamos confirmar em breve pelo email ou telefone informado.
        </div>
    @endif

    <div class="row">

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="name" type="text" class="form-control" placeholder="Nome">
            @error('name') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="email" type="email" class="form-control" placeholder="Email">
            @error('email') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="phone" type="text" class="form-control" placeholder="Telefone">
            @error('phone') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="date" type="date" class="form-control" placeholder="Data">
            @error('date') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="time" type="time" class="form-control" placeholder="Hora">
            @error('time') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="people" type="number" min="1" class="form-control" placeholder="Quantidade de pessoas">
            @error('people') <div class="error-message">{{ $message }}</div> @enderror
        </div>

        <div class="col-lg-4 col-md-6 form-group">
            <input wire:model="event_type" type="text" class="form-control" placeholder="Tipo de evento">
        </div>

        <div class="col-lg-8 col-md-6 form-group">
            <input wire:model="message" type="text" class="form-control" placeholder="Mensagem (opcional)">
        </div>

        <div class="reservation-actions mt-3">
            <button type="submit" class="reservation-action" wire:loading.attr="disabled">
                <span wire:loading.remove>Reservar evento</span>
                <span wire:loading>Enviando...</span>
            </button>
            <a href="{{ $this->whatsappLink() }}" target="_blank" class="reservation-action">
                Reservar via WhatsApp
            </a>
        </div>

    </div>
</form>
