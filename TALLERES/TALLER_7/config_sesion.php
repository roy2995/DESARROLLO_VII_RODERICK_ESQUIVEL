<?php
session_start([
    'cookie_lifetime' => 86400, // Duración de 1 día
    'cookie_secure' => true,    // Solo enviar cookies sobre HTTPS
    'cookie_httponly' => true,  // Prevenir acceso a cookies desde JavaScript
    'use_strict_mode' => true,  // Evitar ataques de fijación de sesiones
    'use_only_cookies' => true, // Solo cookies, no URL para transmitir sesiones
]);
?>
