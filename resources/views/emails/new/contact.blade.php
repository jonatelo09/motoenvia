@component('mail::message')
# Mail de contacto

**Nombre**: {{ $request['name'] }}

**Email**: {{ $request['email'] }}

**Telefono**: {{ $request['phone'] }}

**Servicio**: {{ $request['service'] }}

**Mensaje**: {{ $request['message'] }}

<br>
{{ config('app.name') }}
@endcomponent
