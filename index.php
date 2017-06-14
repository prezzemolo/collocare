<?php
namespace collocare;

/* load utilities */
require_once __DIR__.'/utils/jsonify.php';
require_once __DIR__.'/utils/handlers.php';
use function \collocare\utils\jsonify\error as stopper;
use function \collocare\utils\handlers\error_handler;

// registry handler
set_error_handler('error_handler');

// raise 404
stopper(404, [
    'title' => 'This software is empty.',
    'detail' => 'sorry, not found.'
]);
?>
