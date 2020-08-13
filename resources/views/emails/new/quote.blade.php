@component('mail::message')
# Se ha creado una nueva cotización

## Datos del envío:

**Origen**: {{ $request['origin'] }}

**Destino**: {{ $request['destination'] }}

**Método de envío**: {{ $request['shipping_method'] }}

**Distanciac (KM)**: {{ $request['distance'] }}

**Costo**: {{ $request['cost'] }}



## Datos de la persona:

**Nombre**: {{ $request['name'] }}

**Teléfono**: {{ $request['phone'] }}

**Email**: {{ $request['email'] }}


Muchas gracias!<br>
{{ config('app.name') }}
@endcomponent
