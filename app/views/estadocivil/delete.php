<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Estado Civil</title>

    <style>
        :root {
            --danger: #ef4444;
            --bg1: #0f172a;
            --bg2: #1e293b;
            --glass: rgba(255,255,255,.12);
            --text: #f1f5f9;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            color: var(--text);
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .page { width: 100%; max-width: 550px; }

        .topbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: .9rem;
        }

        .btn-nav { background: rgba(255,255,255,.15); color: var(--text); }
        .btn-nav:hover { background: rgba(255,255,255,.28); }

        .glass-card {
            background: var(--glass);
            padding: 25px;
            border-radius: 18px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,.18);
        }

        .warning { margin-bottom: 14px; }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(0,0,0,.25);
            color: var(--text);
            margin-top: 6px;
        }

        input:disabled { opacity: .7; }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-danger {
            background: linear-gradient(135deg, var(--danger), #f87171);
            color: white;
            border: none;
        }

        .btn-secondary {
            background: rgba(255,255,255,.15);
            color: var(--text);
            border: none;
        }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <h2>Eliminar Estado Civil</h2>
        <div>
            <a href="index" class="btn btn-nav">⬅ Volver</a>
            <a href="/microsoftvadf/public/" class="btn btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">
        <p class="warning">
            Estás a punto de eliminar el registro:
            <strong>"<?= htmlspecialchars($estadocivil['nombre']) ?>"</strong><br>
            Esta acción es permanente.
        </p>

        <form action="/microsoftvadf/public/estadocivil/delete" method="POST">
            <input type="hidden" name="idestadocivil"
                   value="<?= htmlspecialchars($estadocivil['idestadocivil']) ?>">

            <label>Estado Civil:</label>
            <input type="text"
                   value="<?= htmlspecialchars($estadocivil['nombre']) ?>"
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
