<?php

// Preguntas frecuentes (página de inicio).
// Marcadores: :minutes y :price (config/site.php), :refunds_url, :privacy_url
// Las respuestas pueden tener HTML simple (<a>, <strong>).

return [
    'title' => 'Preguntas frecuentes',
    'subtitle' => 'Lo que más me preguntan antes de reservar.',

    'items' => [
        [
            'q' => '¿Eres agente de migración?',
            'a' => 'No. Comparto mi experiencia personal de cómo llegué y me establecí en Australia, y te ayudo con temas prácticos como trabajo, CV y vivienda. No doy asesoría migratoria ni legal. Para preguntas sobre visas, consulta con un agente de migración registrado (OMARA).',
        ],
        [
            'q' => '¿Cómo funciona la consulta?',
            'a' => 'Eliges un horario en el calendario, pagas de forma segura y recibes la confirmación por correo. La sesión es 1 a 1 conmigo y dura :minutes minutos.',
        ],
        [
            'q' => '¿Cuánto cuesta?',
            'a' => 'La consulta de :minutes minutos cuesta <strong>:price</strong>. Las guías son gratis, y el precio de cada revisión está en la página de ese servicio.',
        ],
        [
            'q' => '¿Las guías son realmente gratis?',
            'a' => 'Sí. Puedes leerlas en línea o descargarlas en PDF sin registrarte.',
        ],
        [
            'q' => '¿Puedo hacer una pregunta antes de reservar?',
            'a' => 'Claro. Escríbeme por WhatsApp o por correo y te respondo lo antes posible.',
        ],
        [
            'q' => '¿Puedo cambiar la fecha de mi consulta?',
            'a' => 'Sí, con al menos 24 horas de anticipación. Las consultas pagadas no son reembolsables. Más detalles en la <a href=":refunds_url" class="underline">política de reembolsos</a>.',
        ],
        [
            'q' => '¿Mi información es confidencial?',
            'a' => 'Sí. Uso tus datos solo para darte el servicio. Más detalles en la <a href=":privacy_url" class="underline">política de privacidad</a>.',
        ],
    ],
];
