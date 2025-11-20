<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Teléfonos</title>

    <style>
        :root {
            --primary: #007bff;
            --success: #22c55e;
            --danger: #ef4444;
            --glass: rgba(255, 255, 255, 0.08);
            --text: #f1f5f9;
            --bg1: #0f172a;
            --bg2: #1e293b;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: radial-gradient(circle at top left, var(--bg1), #020617, var(--bg2));
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            color: var(--text);
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .page { width: 100%; max-width: 1100px; }

        .topbar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .topbar h1 {
            font-size: 1.8rem;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: .2s ease;
            cursor: pointer;
        }

        .btn-add {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            color: #fff;
        }
        .btn-add:hover { transform: scale(1.05); }

        .btn-home {
            background: rgba(255,255,255,0.12);
            color: var(--text);
        }
        .btn-home:hover { background: rgba(255,255,255,0.25); }

        .glass-card {
            background: var(--glass);
            padding: 20px;
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.18);
            backdrop-filter: blur(15px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        thead {
            background: rgba(255,255,255,0.15);
        }

        th, td {
            padding: 12px;
            font-size: .9rem;
        }

        tbody tr {
            background: rgba(0,0,0,0.28);
            transition: .2s;
        }

        tbody tr:hover {
            background: rgba(0,0,0,0.40);
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

        .btn-edit:hover, .btn-delete:hover { transform: scale(1.05); }
    </style>
</head>

<body>

<div class="page">

    <div class="topbar">
        <h1>Gestión de Teléfonos</h1>

        <div>
            <a href="/microsoftvadf/public/" class="btn btn-home">🏠 Inicio</a>
            <a href="/microsoftvadf/public/telefono/create" class="btn btn-add">➕ Agregar</a>
        </div>
    </div>

    <div class="glass-card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Persona</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($telefonos)): ?>
                    <?php foreach ($telefonos as $t): ?>
                        <tr>
                            <td><?= htmlspecialchars($t['idtelefono']) ?></td>
                            <td><?= htmlspecialchars($t['numero']) ?></td>
                            <td><?= htmlspecialchars($t['lapersona']) ?></td>

                            <td>
                                <div class="actions">
                                    <a href="/microsoftvadf/public/telefono/edit?idtelefono=<?= $t['idtelefono'] ?>" class="btn btn-edit">✏️ Editar</a>

                                    <a href="/microsoftvadf/public/telefono/deleteForm?id=<?= $t['idtelefono'] ?>" class="btn btn-delete">🗑 Eliminar</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr><td colspan="4">No hay teléfonos registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

    </div>

</div>

</body>
</html>
