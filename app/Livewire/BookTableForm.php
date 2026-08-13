<?php

namespace App\Livewire;

use App\Mail\BookTableMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class BookTableForm extends Component
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

    public function render()
    {
        return view('livewire.book-table-form');
    }
}
