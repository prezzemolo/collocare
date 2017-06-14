<?php
namespace collocare\utils;

function rfc7807 (int $code, array $element = []) {
    http_response_code($code);
    header('Content-Type', 'application/problem+json');
    echo json_encode([
        'type' => $element['type'] ?? 'about:blank',
        'title' => $element['title'] ?? 'Internal server error.',
        'detail' => $element['detail'] ?? 'any reason, some error occurred in script.'
    ], JSON_PRETTY_PRINT);
    die();
}
?>
