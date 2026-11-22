<?php

return [

    /*
    | Datos de contacto que se muestran en la web y dirección que recibe
    | los mensajes del formulario de contacto.
    */

    'contact' => [
        'email' => env('ALINEO_CONTACT_EMAIL', 'info@alineo.es'),
        'phone' => env('ALINEO_CONTACT_PHONE'),
        'address' => env('ALINEO_CONTACT_ADDRESS'),
    ],

];
