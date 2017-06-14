<?php
namespace collocare\utils\helpers;

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
