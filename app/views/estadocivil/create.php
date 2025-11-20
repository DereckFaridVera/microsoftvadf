<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Estado Civil</title>
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

        .page {
            width: 100%;
            max-width: 550px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            gap: 6px;
            align-items: center;
            transition: .2s ease;
        }

        .btn-nav { background: rgba(255,255,255,.12); color: var(--text); }
        .btn-nav:hover { background: rgba(255,255,255,.25); }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: white;
        }

        .glass-card {
            background: var(--glass);
            padding: 25px;
            border-radius: 18px;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,.18);
        }

        form { display: flex; flex-direction: column; gap: 14px; }

        label { font-size: 0.9rem; }

        input[type="text"] {
            padding: 10px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(0,0,0,.25);
            color: var(--text);
            font-size: 1rem;
        }

        input:focus {
            border-color: var(--primary);
            outline: none;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 12px;
        }

        .btn-secondary {
            background: rgba(255,255,255,.12);
            color: var(--text);
        }

        .btn-secondary:hover { background: rgba(255,255,255,.25); }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <h2>Nuevo Estado Civil</h2>

        <div>
            <a href="/microsoftvadf/public/estadocivil/index" class="btn btn-nav">⬅ Volver</a>
            <a href="/microsoftvadf/public/" class="btn btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">

        <form action="../../app/controllers/EstadoCivilController.php?action=create" method="POST">
            <label for="nombre">Nombre del estado civil:</label>
            <input type="text" name="nombre" id="nombre" required>

            <div class="buttons">
                <a href="/microsoftvadf/public/estadocivil/index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>

    </div>
</div>

</body>
</html>
