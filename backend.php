<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

// Verificar si llegaron los campos esperados
if (!isset($data['username']) || !isset($data['password'])) {
    echo json_encode([
        "status" => "error",
        "message" => "Faltan campos requeridos."
    ]);
    exit;
}

$username = trim($data['username']);
$password = trim($data['password']);

if (strlen($username) < 3) {
    echo json_encode([
        "status" => "error",
        "message" => "El nombre de usuario debe tener al menos 3 caracteres."
    ]);
    exit;
}

if (strlen($password) < 8) {
    echo json_encode([
        "status" => "error",
        "message" => "La contraseña debe tener al menos 6 caracteres."
    ]);
    exit;
}

echo json_encode([
    "status" => "ok",
    "message" => "Datos recibidos correctamente."
]);
exit;
