<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Teléfono</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        :root {
            --primary: #007bff;
            --bg1: #0f172a;
            --bg2: #1e293b;
            --glass: rgba(255,255,255,.10);
            --text: #e2e8f0;
        }

        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            font-family: 'Segoe UI', sans-serif;
            color: var(--text);
            min-height: 100vh;
            padding: 30px;
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
            background: rgba(255,255,255,.12);
            color: var(--text);
            text-decoration: none;
        }
        .btn-nav:hover { background: rgba(255,255,255,.25); }

        .glass-card {
            background: var(--glass);
            padding: 25px;
            border-radius: 18px;
            border: 1px solid rgba(255,255,255,.25);
            backdrop-filter: blur(15px);
        }

        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(0,0,0,.35);
            color: var(--text);
            margin-top: 4px;
        }

        input:focus, select:focus {
            border-color: var(--primary);
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 15px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 25px;
            cursor: pointer;
            font-size: .9rem;
        }

        .btn-secondary { background: rgba(255,255,255,.15); color: var(--text); }
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: white;
            border: none;
        }
    </style>

</head>
<body>

<div class="page">

    <div class="topbar">
        <h2>Editar Teléfono</h2>

        <div>
            <a href="/microsoftvadf/public/telefono/index" class="btn-nav">⬅ Volver</a>
            <a href="/microsoftvadf/public/" class="btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">

        <form action="../../app/controllers/TelefonoController.php?action=update" method="POST">

            <input type="hidden" name="idtelefono"
                   value="<?= htmlspecialchars($telefono['idtelefono']) ?>">

            <label>Número telefónico:</label>
            <input type="text" name="numero"
                   value="<?= htmlspecialchars($telefono['numero']) ?>" required>

            <label>Persona:</label>
            <select name="idpersona" required>
                <?php foreach ($personas as $p): ?>
                    <option value="<?= $p['idpersona'] ?>"
                        <?= $p['idpersona'] == $telefono['idpersona'] ? 'selected' : '' ?>>
                        <?= $p['nombres'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <div class="buttons">
                <a href="/microsoftvadf/public/telefono/index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

        </form>

    </div>

</div>

</body>
</html>
