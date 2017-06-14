<?php
namespace collocare;

/* load utilities */
require_once './utils/jsonify.php';
require_once './utils/handlers.php';
use function \collocare\utils\jsonify\error as stopper;
use function \collocare\utils\handlers\error_handlers;

// registry handler
set_error_handler($error_handlers);

// raise 404
stopper(404, [
    'title' => 'This software is empty.',
    'detail' => 'sorry, not found.'
]);
?>
