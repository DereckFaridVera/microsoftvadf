<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Dirección</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        :root {
            --primary: #007bff;
            --bg1: #0f172a;
            --bg2: #1e293b;
            --glass: rgba(255,255,255,.10);
            --text: #e2e8f0;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            font-family: 'Segoe UI', sans-serif;
            color: var(--text);
            min-height: 100vh;
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .page { width: 100%; max-width: 580px; }

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

        form { display: flex; flex-direction: column; gap: 14px; }

        label { font-size: .9rem; }

        textarea,
        select {
            width: 100%;
            padding: 10px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,.4);
            background: rgba(0,0,0,.35);
            color: var(--text);
            margin-top: 4px;
            font-size: .95rem;
        }

        textarea { resize: vertical; min-height: 70px; }

        textarea:focus, select:focus {
            border-color: var(--primary);
            outline: none;
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
            border: none;
        }

        .btn-secondary { background: rgba(255,255,255,.15); color: var(--text); }
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: white;
        }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <h2>Editar Dirección</h2>

        <div>
            <a href="/microsoftvadf/public/direccion/index" class="btn-nav">⬅ Volver</a>
            <a href="/microsoftvadf/public/" class="btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">

        <!-- Ajusta esta ruta al controlador real si ya la tienes -->
        <form action="../../app/controllers/DireccionController.php?action=update" method="POST">

            <input type="hidden" name="iddireccion"
                   value="<?= htmlspecialchars($direccion['iddireccion']) ?>">

            <label for="direccion">Dirección:</label>
            <textarea name="direccion" id="direccion" required><?= htmlspecialchars($direccion['direccion']) ?></textarea>

            <label for="idpersona">Persona:</label>
            <select name="idpersona" id="idpersona" required>
                <?php foreach ($personas as $persona): ?>
                    <option value="<?= $persona['idpersona'] ?>"
                        <?= $persona['idpersona'] == $direccion['idpersona'] ? 'selected' : '' ?>>
                        <?= $persona['apellidos'] . ' ' . $persona['nombres'] ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <div class="buttons">
                <a href="/microsoftvadf/public/direccion/index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

        </form>
    </div>

</div>

</body>
</html>
