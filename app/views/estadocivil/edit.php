<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Estado Civil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        :root {
            --primary: #007bff;
            --bg1: #0f172a;
            --bg2: #1e293b;
            --glass: rgba(255,255,255,.1);
            --text: #e2e8f0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            color: var(--text);
            display: flex;
            justify-content: center;
            padding: 25px;
        }

        .page { width: 100%; max-width: 550px; }

        .topbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn { padding: 8px 16px; border-radius: 25px; }

        .btn-nav { background: rgba(255,255,255,.12); text-decoration: none; color: var(--text); }
        .btn-nav:hover { background: rgba(255,255,255,.25); }

        .glass-card {
            background: var(--glass);
            padding: 25px;
            border-radius: 18px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,.18);
        }

        label { font-size: .9rem; }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(0,0,0,.25);
            color: var(--text);
        }

        input:focus { border-color: var(--primary); outline: none; }

        .buttons {
            display: flex;
            margin-top: 15px;
            justify-content: flex-end;
            gap: 12px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: white;
            border: none;
        }

        .btn-secondary {
            background: rgba(255,255,255,.12);
            color: var(--text);
            border: none;
        }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <h2>Editar Estado Civil</h2>

        <div>
            <a href="/microsoftvadf/public/estadocivil/index" class="btn btn-nav">⬅ Volver</a>
            <a href="/microsoftvadf/public/" class="btn btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">

        <form action="/microsoftvadf/public/estadocivil/update" method="POST">
            <input type="hidden" name="idestadocivil"
                   value="<?= htmlspecialchars($estadocivil['idestadocivil']) ?>">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre"
                   value="<?= htmlspecialchars($estadocivil['nombre']) ?>" required>

            <div class="buttons">
                <a href="/microsoftvadf/public/estadocivil/index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>

    </div>
</div>

</body>
</html>
