<?php

// Frequently asked questions (home page).
// Placeholders: :minutes and :price (config/site.php), :refunds_url, :privacy_url
// Answers may contain simple HTML (<a>, <strong>).

return [
    'title' => 'Frequently asked questions',
    'subtitle' => 'What people ask me most before booking.',

    'items' => [
        [
            'q' => 'Are you a migration agent?',
            'a' => 'No. I share my personal experience of moving to and settling in Australia, and I help with practical topics like jobs, resumes and housing. I don\'t give migration or legal advice. For visa questions, please contact a registered migration agent (OMARA).',
        ],
        [
            'q' => 'How does the consultation work?',
            'a' => 'You pick a time in the calendar, pay securely and get a confirmation by email. The session is 1:1 with me and takes :minutes minutes.',
        ],
        [
            'q' => 'How much does it cost?',
            'a' => 'The :minutes-minute consultation costs <strong>:price</strong>. The guides are free, and the price of each review is on that service\'s page.',
        ],
        [
            'q' => 'Are the guides really free?',
            'a' => 'Yes. You can read them online or download them as PDFs (in Spanish) without signing up.',
        ],
        [
            'q' => 'Can I ask a question before booking?',
            'a' => 'Of course. Message me on WhatsApp or by email and I\'ll get back to you as soon as I can.',
        ],
        [
            'q' => 'Can I reschedule my consultation?',
            'a' => 'Yes, with at least 24 hours\' notice. Paid consultations are non-refundable. See the <a href=":refunds_url" class="underline">refund policy</a> for details.',
        ],
        [
            'q' => 'Is my information confidential?',
            'a' => 'Yes. I only use your details to provide the service. See the <a href=":privacy_url" class="underline">privacy policy</a> for details.',
        ],
    ],
];
