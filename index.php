<?php
session_start();

// Activar modo demo si no hay sesión
$modo_demo = true;

if ($modo_demo && !isset($_SESSION['sesion_email'])) {
    $_SESSION['sesion_email'] = 'demo@demo.com';
    $_SESSION['sesion_id_usuario'] = 9999;
    $_SESSION['sesion_rol'] = 1;
    $_SESSION['sesion_nombre_usuario'] = 'DEMO';
    $_SESSION['sesion_foto_usuario'] = 'default.png';
}

// Redirige directo al dashboard
header('Location: admin/');
exit;
