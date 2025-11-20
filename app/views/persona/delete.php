<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registro</title>

    <style>
        :root {
            --danger: #ef4444;
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e293b;
            --text-main: #f9fafb;
            --glass-bg: rgba(15, 23, 42, 0.88);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: radial-gradient(circle at top left, var(--bg-gradient-start), #020617 40%, var(--bg-gradient-end));
            color: var(--text-main);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .page {
            width: 100%;
            max-width: 520px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .topbar h1 {
            font-size: 1.4rem;
        }

        .btn-nav {
            border: none;
            border-radius: 999px;
            padding: 8px 16px;
            font-size: .85rem;
            cursor: pointer;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            color: var(--text-main);
            background: rgba(15, 23, 42, 0.9);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: all .2s ease;
        }

        .btn-nav:hover {
            transform: translateY(-1px);
            opacity: .96;
        }

        .glass-card {
            background: var(--glass-bg);
            border-radius: 22px;
            padding: 22px 22px 24px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(248, 113, 113, 0.5);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .glass-card h2 {
            font-size: 1.3rem;
            margin-bottom: 6px;
        }

        .warning-text {
            font-size: .9rem;
            margin-bottom: 14px;
        }

        .highlight {
            color: #fee2e2;
            font-weight: 600;
        }

        label {
            font-size: .9rem;
            margin-bottom: 4px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 9px 12px;
            border-radius: 10px;
            border: 1px solid rgba(148, 163, 184, 0.6);
            background: rgba(15, 23, 42, 0.6);
            color: var(--text-main);
            margin-bottom: 12px;
        }

        input[type="text"]:disabled {
            opacity: .75;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 12px;
        }

        .btn {
            border-radius: 999px;
            padding: 9px 18px;
            border: none;
            font-size: .9rem;
            font-weight: 500;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: all .2s ease;
        }

        .btn-danger {
            background: linear-gradient(135deg, var(--danger), #f97373);
            color: #fff;
            box-shadow: 0 10px 28px rgba(248, 113, 113, 0.5);
        }

        .btn-secondary {
            background: rgba(15, 23, 42, 0.85);
            color: var(--text-main);
            border: 1px solid rgba(148, 163, 184, 0.6);
        }

        .btn:hover {
            transform: translateY(-1px) scale(1.01);
            opacity: .97;
        }

        @media (max-width: 600px) {
            .glass-card {
                padding: 18px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .buttons {
                flex-direction: column-reverse;
                align-items: stretch;
            }
        }
    </style>
</head>
<body>

<div class="page">
    <div class="topbar">
        <h1>Eliminar Registro</h1>
        <div>
            <a href="index" class="btn-nav">⬅ Volver al listado</a>
            <a href="/microsoftvadf/public/" class="btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">
        <h2>Confirmar eliminación</h2>
        <p class="warning-text">
            Estás a punto de eliminar el registro
            <span class="highlight">
                "<?php echo htmlspecialchars($sexo['nombre']); ?>"
            </span>.
            Esta acción no se puede deshacer.
        </p>

        <form action="/microsoftvadf/public/sexo/delete" method="POST">
            <input type="hidden" name="idsexo" value="<?php echo htmlspecialchars($sexo['idsexo']); ?>">

            <label>Nombre:</label>
            <input type="text" value="<?php echo htmlspecialchars($sexo['nombre']); ?>" disabled>

            <div class="buttons">
                <a href="index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-danger">Eliminar definitivamente</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
