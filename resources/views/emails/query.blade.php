@component('mail::message')


{{ __('You have a new site form submission') }}<br>

@if ($data->get('name'))
{{ __('
Name/nombre :name ', ['name' => $data->get('name')]) }}<br>
@endif
@if ($data->get('email'))
{{ __('Email/Correo electrónico :email ',['email' => $data->get('email')]) }}<br>
@endif
@if ($data->get('company'))
{{ __('Company/Compañía :company ', ['company' => $data->get('company')]) }}<br>
@endif
@if ($data->get('address'))
{{ __('Address/DIRECCIÓN :address', ['address' => $data->get('address')]) }}<br>
@endif
@if($data->get('postal'))
{{ __('Postal Code/Código Postal :postal', ['postal' => $data->get('postal')]) }}<br>
@endif
@if($data->get('country'))
{{ __('Country/País :country', ['country' => $data->get('country')]) }}<br>
@endif
@if($data->get('state'))
{{ __('State/Estado :state', ['state' => $data->get('state')]) }}<br>
@endif
@if($data->get('heard'))
{{ __('Heard From/Escuchado de :heard', ['heard' => $data->get('heard')]) }}<br>
@endif
@if($data->get('phone'))
{{ __('Phone number/Número de teléfono :phone', ['phone' => $data->get('phone')]) }}<br>
@endif
@if($data->get('type'))
{{ __('Service Type/Tipo de servicio :type', ['type' => $data->get('type')]) }}<br>
@endif
@if($data->get('message'))
{{ __('Message/Mensaje :message', ['message' => $data->get('message')]) }}<br>
@endif

@endcomponent
