<?php
namespace collocare;

require_once './utils/json.php';
use function utils\rfc7807 as stopper;

// raise 404
stopper(404, [
    'title' => 'This software is empty.',
    'detail' => 'sorry, not found.'
]);
?>
