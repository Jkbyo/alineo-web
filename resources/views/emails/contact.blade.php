<x-mail::message>
# Nuevo mensaje desde la web

- **Nombre:** {{ $data['name'] }}
- **Clínica:** {{ $data['clinic'] ?: '—' }}
- **Email:** {{ $data['email'] }}
- **Teléfono:** {{ $data['phone'] ?: '—' }}
- **Consulta:** {{ $topicLabel }}

**Mensaje:**

{{ $data['message'] }}

Puedes responder directamente a este correo para contestar a {{ $data['name'] }}.
</x-mail::message>
