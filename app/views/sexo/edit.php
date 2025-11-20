<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Sexo</title>
    <style>
        :root {
            --primary: #007bff;
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e293b;
            --text-main: #f9fafb;
            --glass-bg: rgba(15, 23, 42, 0.8);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

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
            border: 1px solid rgba(148, 163, 184, 0.42);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .glass-card h2 {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .glass-card p {
            font-size: .85rem;
            opacity: .8;
            margin-bottom: 16px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        label {
            font-size: .9rem;
            margin-bottom: 4px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border-radius: 12px;
            border: 1px solid rgba(148, 163, 184, 0.6);
            background: rgba(15, 23, 42, 0.7);
            color: var(--text-main);
            outline: none;
            transition: all .2s ease;
        }

        input[type="text"]:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 1px rgba(56, 189, 248, 0.5);
            background: rgba(15, 23, 42, 0.9);
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 10px;
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

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: #fff;
            box-shadow: 0 10px 28px rgba(56, 189, 248, 0.4);
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
        }
    </style>
</head>
<body>

<div class="page">
    <div class="topbar">
        <h1>Editar Sexo</h1>
        <div>
            <a href="/microsoftvadf/public/sexo/index" class="btn-nav">⬅ Volver al listado</a>
            <a href="/microsoftvadf/public/" class="btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">
        <h2>Modificar registro</h2>
        <p>Actualiza la información del sexo seleccionado.</p>

        <form action="/apple6b/public/sexo/update" method="POST">
            <input type="hidden" name="idsexo" value="<?php echo htmlspecialchars($sexo['idsexo']); ?>">

            <div>
                <label for="nombre">Nombre del sexo</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo htmlspecialchars($sexo['nombre']); ?>" required>
            </div>

            <div class="buttons">
                <a href="/microsoftvadf/public/sexo/index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
