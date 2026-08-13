<?php

use Livewire\Component;
use App\Mail\BookTableMail;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $date = '';
    public string $time = '';
    public string $people = '';
    public string $event_type = '';
    public string $message = '';

    public bool $sent = false;

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'date' => ['required', 'date'],
            'time' => ['required', 'string', 'max:10'],
            'people' => ['required', 'integer', 'min:1', 'max:200'],
            'event_type' => ['nullable', 'string', 'max:120'],
            'message' => ['nullable', 'string', 'max:2000'],
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Informe seu nome.',
            'email.required' => 'Informe seu email.',
            'email.email' => 'Email inválido.',
            'phone.required' => 'Informe seu telefone.',
            'date.required' => 'Informe a data do evento.',
            'time.required' => 'Informe o horário.',
            'people.required' => 'Informe a quantidade de pessoas.',
            'people.integer' => 'Quantidade de pessoas deve ser um número.',
        ];
    }

    public function submit(): void
    {
        $data = $this->validate();

        Mail::to(config('mail.from.address'))->send(new BookTableMail($data));

        $this->sent = true;
        $this->reset(['name', 'email', 'phone', 'date', 'time', 'people', 'event_type', 'message']);
    }

    public function whatsappLink(): string
    {
        $text = "Olá, boa noite. Gostaria de agendar um evento!\n"
            . "Nome: {$this->name}\nEmail: {$this->email}\nTelefone: {$this->phone}\n"
            . "Data: {$this->date}\nHora: {$this->time}\nQuantidade de pessoas: {$this->people}\n"
            . "Tipo de evento: {$this->event_type}";

        return 'https://api.whatsapp.com/send?phone=5585992226196&text=' . rawurlencode($text);
    }
};
?>

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

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-info" wire:loading.attr="disabled">
                <span wire:loading.remove>Reservar evento</span>
                <span wire:loading>Enviando...</span>
            </button>
            <a href="{{ $this->whatsappLink() }}" target="_blank" class="btn btn-success ms-2">
                Reservar via WhatsApp
            </a>
        </div>

    </div>
</form>
