<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Estados Civiles</title>

    <style>
        :root {
            --primary: #007bff;
            --primary-soft: rgba(0, 123, 255, 0.35);
            --success: #22c55e;
            --danger: #ef4444;
            --bg1: #0f172a;
            --bg2: #1e293b;
            --glass: rgba(255, 255, 255, .08);
            --text: #f8fafc;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            color: var(--text);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            padding: 25px;
            display: flex;
            justify-content: center;
        }

        .page {
            width: 100%;
            max-width: 1100px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 22px;
        }

        .topbar h1 {
            font-size: 1.9rem;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9rem;
            border: none;
            transition: .2s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: white;
        }

        .btn-primary:hover {
            transform: scale(1.03);
            opacity: .9;
        }

        .btn-ghost {
            background: rgba(255, 255, 255, .1);
            backdrop-filter: blur(10px);
            color: white;
        }

        .btn-ghost:hover {
            background: rgba(255, 255, 255, .2);
        }

        .glass-card {
            background: var(--glass);
            padding: 25px;
            border-radius: 20px;
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255,255,255,.14);
            box-shadow: 0 0 35px rgba(0,0,0,.4);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
        }

        thead {
            background: rgba(255,255,255,.12);
        }

        th, td {
            padding: 12px;
            font-size: 0.9rem;
        }

        tbody tr {
            background: rgba(0,0,0,.2);
            transition: .2s ease;
        }

        tbody tr:hover {
            background: rgba(0,0,0,.35);
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .btn-edit {
            background: rgba(56,189,248,.2);
            border: 1px solid rgba(56,189,248,.7);
            color: #e0f2fe;
        }

        .btn-delete {
            background: rgba(239,68,68,.18);
            border: 1px solid rgba(239,68,68,.8);
            color: #fee2e2;
        }

        .btn-edit:hover, .btn-delete:hover {
            transform: scale(1.05);
            opacity: .9;
        }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <h1>Gestión de Estados Civiles</h1>

        <div>
            <a href="/microsoftvadf/public/" class="btn btn-ghost">🏠 Inicio</a>
            <a href="/microsoftvadf/app/views/estadocivil/create.php" class="btn btn-primary">➕ Agregar</a>
        </div>
    </div>

    <div class="glass-card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estado Civil</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($estadosciviles)): ?>
                    <?php foreach ($estadosciviles as $ec): ?>
                        <tr>
                            <td><?= htmlspecialchars($ec['idestadocivil']) ?></td>
                            <td><?= htmlspecialchars($ec['nombre']) ?></td>
                            <td>
                                <div class="actions">
                                    <a href="/microsoftvadf/public/estadocivil/edit?idestadocivil=<?= $ec['idestadocivil'] ?>"
                                       class="btn btn-edit">✏️ Editar</a>

                                    <a href="/microsoftvadf/public/estadocivil/deleteForm?id=<?= $ec['idestadocivil'] ?>"
                                       class="btn btn-delete">🗑 Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="3">No hay estados civiles registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
