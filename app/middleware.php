<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ACTIVAR MODO DEMO DIRECTO
$_SESSION['sesion_email'] = 'demo@demo.com';
$_SESSION['sesion_id_usuario'] = 9999;
$_SESSION['sesion_rol'] = 1;
$_SESSION['sesion_nombre_usuario'] = 'DEMO';
$_SESSION['sesion_foto_usuario'] = 'default.png';

// NO VERIFICAMOS NADA MÁS
