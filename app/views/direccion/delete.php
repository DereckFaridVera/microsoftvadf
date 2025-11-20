<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Dirección</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        :root {
            --danger: #ef4444;
            --glass: rgba(255,255,255,.15);
            --text: #f8fafc;
            --bg1: #0f172a;
            --bg2: #1e293b;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            font-family: 'Segoe UI', sans-serif;
            color: var(--text);
            min-height: 100vh;
            padding: 25px;
            display: flex;
            justify-content: center;
        }

        .page { width: 100%; max-width: 550px; }

        .topbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn-nav {
            padding: 8px 16px;
            border-radius: 20px;
            background: rgba(255,255,255,.15);
            color: var(--text);
            text-decoration: none;
        }
        .btn-nav:hover { background: rgba(255,255,255,.28); }

        .glass-card {
            background: var(--glass);
            padding: 25px;
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,.25);
            backdrop-filter: blur(15px);
        }

        .warning {
            margin-bottom: 16px;
            font-size: .95rem;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 12px;
            background: rgba(0,0,0,.35);
            border: 1px solid rgba(255,255,255,.3);
            color: var(--text);
            margin-top: 5px;
        }

        input:disabled { opacity: .7; }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            font-size: .9rem;
            border: none;
        }

        .btn-secondary {
            background: rgba(255,255,255,.15);
            color: var(--text);
        }

        .btn-danger {
            background: linear-gradient(135deg, var(--danger), #f87171);
            color: white;
        }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <h2>Eliminar Dirección</h2>

        <div>
            <a href="index" class="btn-nav">⬅ Volver</a>
            <a href="/microsoftvadf/public/" class="btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">
        <p class="warning">
            ¿Seguro que deseas eliminar esta dirección?<br><br>
            <strong>"<?= htmlspecialchars($direccion['direccion']) ?>"</strong>
        </p>

        <!-- Ajusta esta ruta si ya tienes tu delete configurado -->
        <form action="/microsoftvadf/public/direccion/delete" method="POST">

            <input type="hidden" name="iddireccion"
                   value="<?= htmlspecialchars($direccion['iddireccion']) ?>">

            <label>Dirección:</label>
            <input type="text"
                   value="<?= htmlspecialchars($direccion['direccion']) ?>"
                   disabled>

            <div class="buttons">
                <a href="index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>

        </form>
    </div>

</div>

</body>
</html>
