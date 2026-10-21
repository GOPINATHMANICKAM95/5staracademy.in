<?php

$adminEmails = explode(',', (string) env('ACADEMY_ADMIN_EMAILS', ''));

return [
    'admin_emails' => array_values(array_filter(array_map(
        static fn (string $email): string => strtolower(trim($email)),
        $adminEmails,
    ))),
];
