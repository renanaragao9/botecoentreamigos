<x-mail::message>
# Nova reserva de evento

**Nome:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
**Telefone:** {{ $data['phone'] }}
**Data:** {{ $data['date'] }}
**Hora:** {{ $data['time'] }}
**Quantidade de pessoas:** {{ $data['people'] }}
**Tipo de evento:** {{ $data['event_type'] ?: '-' }}

@if (!empty($data['message']))
**Mensagem:**
{{ $data['message'] }}
@endif


<x-mail::button :url="'https://wa.me/55' . preg_replace('/\D/', '', $data['phone'])">
Responder no WhatsApp
</x-mail::button>

Boteco Entreamigos
</x-mail::message>
