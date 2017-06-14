<?php
namespace collocare;

/* load utilities */
require_once __DIR__.'/utils/jsonify.php';
require_once __DIR__.'/utils/helpers.php';
use function \collocare\utils\jsonify\error as stopper;
use function \collocare\utils\helpers\FriendlyErrorType;

// registry handler
set_error_handler(
    function (int $errno, string $errstr, string $errorfile, int $errline): bool {
        /* check bit with current errorlevel. if not in it,pass */
        if (!(error_reporting() & $errno)) {
            return FALSE;
        }

        $error = FriendlyErrorType($errno);

        stopper(500, [
            'type' => 'http://php.net/manual/errorfunc.constants.php',
            'title' => "An internal error occured.",
            'detail' => "PHP $error: $errstr in $errorfile on line $errline"
        ]);
    }
);

// raise 404
stopper(404, [
    'title' => 'This software is empty.',
    'detail' => 'sorry, not found.'
]);
?>
