<?php
namespace collocare\utils\handlers;

/* load jsonify utilities */
require_once './jsonify.php';
use function \collocare\utils\jsonify\error as stopper;

/* error handler for global error */
function error_handler (int $errno, string $errstr, string $errorfile, int $errline): boolean {
    /* check bit with current errorlevel. if not in it,pass */
    if (!(error_reporting() & $error)) {
        return FALSE;
    }

    $error = $FriendlyErrorType($errno);

    stopper(500, [
        'type' => 'http://php.net/manual/errorfunc.constants.php',
        'title' => "An internal error occured.",
        'detail' => "PHP $error: $errstr in $errorfile on line $errline"
    ]);
}

function FriendlyErrorType($type) {
    switch($type) { 
        case E_ERROR: // 1 // 
            return 'Error'; 
        case E_WARNING: // 2 // 
            return 'Warning'; 
        case E_PARSE: // 4 // 
            return 'Parse Error'; 
        case E_NOTICE: // 8 // 
            return 'Notice'; 
        case E_CORE_ERROR: // 16 // 
            return 'Core Error'; 
        case E_CORE_WARNING: // 32 // 
            return 'Core Warning'; 
        case E_COMPILE_ERROR: // 64 // 
            return 'Compile Error'; 
        case E_COMPILE_WARNING: // 128 // 
            return 'Compile Warning'; 
        case E_USER_ERROR: // 256 // 
            return 'User Error'; 
        case E_USER_WARNING: // 512 // 
            return 'User Warning'; 
        case E_USER_NOTICE: // 1024 // 
            return 'User Notice'; 
        case E_STRICT: // 2048 // 
            return 'Strict Standards'; 
        case E_RECOVERABLE_ERROR: // 4096 // 
            return 'Recoverable Error'; 
        case E_DEPRECATED: // 8192 // 
            return 'Deprecated Warning'; 
        case E_USER_DEPRECATED: // 16384 // 
            return 'User Deprecated Warning'; 
    } 
    return "$type";
} 
?>
