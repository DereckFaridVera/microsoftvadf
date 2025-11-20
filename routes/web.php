<?php
session_start();

// Incluir los controladores necesarios
require_once '../app/controllers/PersonaController.php';
require_once '../app/controllers/SexoController.php';
require_once '../app/controllers/DireccionController.php';
require_once '../app/controllers/TelefonoController.php';
require_once '../app/controllers/EstadocivilController.php';

$requestUri = $_SERVER["REQUEST_URI"];
$basePath = '/microsoftvadf/public/';
// Remover el prefijo basePath
$route = str_replace($basePath, '', $requestUri);
$route = strtok($route, '?'); // Quitar parámetros GET
 
// Mostrar el menú si no se ha solicitado ninguna acción específica
if (empty($route) || $route === '/') if (empty($route) || $route === '/') if (empty($route) || $route === '/') {

    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard - Sistema Administrativo</title>
        <link rel="stylesheet" href="/microsoftvadf/public/css/style.css">

        <style>
            body {
                background: radial-gradient(circle at top left, #0f172a, #020617, #1e293b);
                font-family: Segoe UI, sans-serif;
                color: #f8fafc;
                padding: 30px;
            }
            .dashboard-container {
                width: 90%;
                max-width: 1200px;
                margin: auto;
                text-align: center;
            }
            h1 {
                font-size: 2.4rem;
                margin-bottom: 15px;
            }
            .subtitle {
                opacity: 0.75;
                margin-bottom: 30px;
            }
            .grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 25px;
                margin-top: 20px;
            }
            .card {
                background: rgba(255,255,255,0.10);
                border-radius: 18px;
                padding: 25px;
                backdrop-filter: blur(25px);
                border: 1px solid rgba(255,255,255,0.15);
                cursor: pointer;
                text-decoration: none;
                color: #f8fafc;
                transition: .25s;
                box-shadow: 0 10px 25px rgba(0,0,0,0.35);
            }
            .card:hover {
                transform: translateY(-6px);
                background: rgba(255,255,255,0.18);
            }
            .icon {
                font-size: 3.2rem;
                margin-bottom: 10px;
            }
            .card h2 {
                font-size: 1.3rem;
                margin-bottom: 6px;
            }
            .card p {
                opacity: 0.9;
                font-size: .95rem;
            }
        </style>
    </head>

    <body>

    <div class="dashboard-container">
        <h1>Panel de Control</h1>
        <div class="subtitle">Bienvenido al sistema administrativo</div>

        <div class="grid">

            <a href="/microsoftvadf/app/views/persona/index.php" class="card">
                <div class="icon">🧑</div>
                <h2>Personas</h2>
                <p>Gestión de datos personales</p>
            </a>

            <a href="/microsoftvadf/app/views/telefono/index.php" class="card">
                <div class="icon">📱</div>
                <h2>Teléfonos</h2>
                <p>Números asociados a personas</p>
            </a>

            <a href="/microsoftvadf/app/views/direccion/index.php" class="card">
                <div class="icon">📍</div>
                <h2>Direcciones</h2>
                <p>Ubicaciones registradas</p>
            </a>

            <a href="/microsoftvadf/app/views/sexo/index.php" class="card">
                <div class="icon">⚧️</div>
                <h2>Sexo</h2>
                <p>Clasificación de género</p>
            </a>

            <a href="/microsoftvadf/app/views/estadocivil/index.php" class="card">
                <div class="icon">💍</div>
                <h2>Estado Civil</h2>
                <p>Estado sentimental registrado</p>
            </a>

        </div>
    </div>

    </body>
    </html>

    <?php
    return; // MUY IMPORTANTE: evita que caiga en el else del router
}

 else {
    // Enrutar a los controladores según la ruta
    switch ($route) {
        case 'persona':
        case 'persona/index':
            $controller = new PersonaController();
            $controller->index();
            break;
        case 'persona/create':
            $controller = new PersonaController();
            $controller->createForm();
            break;
        case 'persona/edit':
                if (isset($_GET['idpersona'])) {
                    
                    $controller = new PersonaController();
                    $controller->edit($_GET['idpersona']);
                } else {
                    echo "Error: Falta el ID para editar.";
                }
                break;
                case 'persona/update':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $controller = new PersonaController();
                        $controller->update();
                    }
                    break;
         case 'persona/view':
                if (isset($_GET['idpersona'])) {
                    
                    $controller = new PersonaController();
                    $controller->registro($_GET['idpersona']);
                } else {
                    echo "Error: Falta el ID para editar.";
                }
                break;
 



        case 'sexo':
        case 'sexo/index':
            $controller = new SexoController();
            $controller->index();
            break;
        case 'sexo/edit':
            if (isset($_GET['idsexo'])) {
                $controller = new SexoController();
                $controller->edit($_GET['idsexo']);
            } else {
                echo "Error: Falta el ID para editar.";
            }
            break;
        case 'sexo/eliminar':
            if (isset($_GET['idsexo'])) {
                $controller = new SexoController();
                $controller->eliminar($_GET['idsexo']);
            } else {
                echo "Error: Falta el ID para editar.";
            }
            break;
        case 'sexo/delete':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller = new SexoController();
                $controller->delete();
            }
            break;
        case 'sexo/update':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller = new SexoController();
                $controller->update();
            }
            break;
        case 'direccion':
        case 'direccion/index':
            $controller = new DireccionController();
            $controller->index();
            break;
        case 'direccion/create':
            $controller = new DireccionController();
            $controller->createForm();
            break;
        case 'direccion/edit':
                if (isset($_GET['iddireccion'])) {
                    
                    $controller = new DireccionController();
                    $controller->edit($_GET['iddireccion']);
                } else {
                    echo "Error: Falta el ID para editar.";
                }
                break;
                case 'direccion/update':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $controller = new DireccionController();
                        $controller->update();
                    }
                    break;
 







        case 'telefono':
        case 'telefono/index':
            $controller = new TelefonoController();
            $controller->index();
            break;
        case 'telefono/create':
            $controller = new TelefonoController();
            $controller->createForm();
            break;
        case 'telefono/edit':
                if (isset($_GET['idtelefono'])) {
                    
                    $controller = new TelefonoController();
                    $controller->edit($_GET['idtelefono']);
                } else {
                    echo "Error: Falta el ID para editar.";
                }
                break;
                case 'telefono/update':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $controller = new TelefonoController();
                        $controller->update();
                    }
                    break;
 

        case 'estadocivil':
        case 'estadocivil/index':
            $controller = new EstadoCivilController();
            $controller->index();
            break;
        case 'estadocivil/edit':
                if (isset($_GET['idestadocivil'])) {
                    
                    $controller = new EstadocivilController();
                    $controller->edit($_GET['idestadocivil']);
                } else {
                    echo "Error: Falta el ID para editar.";
                }
                break;
                case 'estadocivil/update':
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $controller = new EstadocivilController();
                        $controller->update();
                    }
                    break;
        case 'estadocivil/eliminar':
            if (isset($_GET['idestadocivil'])) {
                $controller = new EstadocivilController();
                $controller->eliminar($_GET['idestadocivil']);
            } else {
                echo "Error: Falta el ID para editar.";
            }
            break;
        case 'estadocivil/delete':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $controller = new EstadocivilController();
                $controller->delete();
            }
            break;
 



        default:
            echo "Error 404: Página no encontrada.";
            break;
    }
}
?>
