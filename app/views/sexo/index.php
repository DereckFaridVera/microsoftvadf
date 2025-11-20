<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Sexos</title>

    <style>
        :root {
            --primary: #007bff;
            --primary-soft: rgba(0, 123, 255, 0.2);
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e293b;
            --text-main: #f9fafb;
            --glass-bg: rgba(15, 23, 42, 0.7);
            --danger: #ef4444;
            --success: #22c55e;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

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
            max-width: 1100px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .logo-title h1 {
            font-size: 1.8rem;
            letter-spacing: .05em;
        }

        .logo-title span {
            font-size: .85rem;
            opacity: .8;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            border: none;
            border-radius: 999px;
            padding: 9px 18px;
            font-size: .9rem;
            cursor: pointer;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: all .2s ease;
            background: rgba(15, 23, 42, 0.9);
            color: var(--text-main);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.7);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #38bdf8);
            box-shadow: 0 10px 30px rgba(56, 189, 248, 0.4);
        }

        .btn-ghost {
            background: rgba(15, 23, 42, 0.7);
        }

        .btn:hover {
            transform: translateY(-1px) scale(1.02);
            box-shadow: 0 14px 40px rgba(15, 23, 42, 0.9);
            opacity: .95;
        }

        .btn span.icon {
            font-size: 1.1rem;
        }

        .glass-card {
            background: var(--glass-bg);
            border-radius: 24px;
            padding: 20px 22px 24px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(148, 163, 184, 0.4);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 15px;
        }

        .card-header h2 {
            font-size: 1.4rem;
        }

        .card-header p {
            font-size: .85rem;
            opacity: .8;
        }

        .btn-small {
            padding: 7px 14px;
            font-size: .8rem;
            border-radius: 999px;
        }

        .btn-success {
            background: linear-gradient(135deg, var(--success), #4ade80);
            box-shadow: 0 10px 28px rgba(34, 197, 94, 0.4);
        }

        .table-wrapper {
            margin-top: 10px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: .9rem;
        }

        thead {
            background: linear-gradient(90deg, rgba(148, 163, 184, 0.35), rgba(51, 65, 85, 0.7));
        }

        th, td {
            padding: 10px 12px;
            text-align: left;
            white-space: nowrap;
        }

        th {
            font-weight: 600;
            letter-spacing: .03em;
        }

        tbody tr {
            background: rgba(15, 23, 42, 0.75);
            transition: background .2s ease, transform .1s ease;
        }

        tbody tr:nth-child(even) {
            background: rgba(15, 23, 42, 0.6);
        }

        tbody tr:hover {
            background: rgba(30, 64, 175, 0.75);
            transform: translateY(-1px);
        }

        .actions {
            display: flex;
            gap: 6px;
        }

        .btn-edit {
            background: rgba(56, 189, 248, 0.16);
            border: 1px solid rgba(56, 189, 248, 0.6);
        }

        .btn-delete {
            background: rgba(248, 113, 113, 0.16);
            border: 1px solid rgba(248, 113, 113, 0.7);
        }

        .btn-edit:hover {
            background: rgba(56, 189, 248, 0.32);
        }

        .btn-delete:hover {
            background: rgba(248, 113, 113, 0.35);
        }

        .empty-row {
            text-align: center;
            opacity: .8;
        }

        @media (max-width: 768px) {
            .glass-card {
                padding: 16px;
            }

            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .logo-title h1 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>

<div class="page">

    <div class="topbar">
        <div class="logo-title">
            <h1>Gestión de Sexos</h1>
            <span>Módulo de administración</span>
        </div>
        <div class="nav-buttons">
            <a href="/microsoftvadf/public/" class="btn btn-ghost">
                <span class="icon">🏠</span> Inicio
            </a>
        </div>
    </div>

    <div class="glass-card">
        <div class="card-header">
            <div>
                <h2>Listado de Sexos</h2>
                <p>Consulta, edita o elimina los registros existentes.</p>
            </div>
            <a href="/microsoftvadf/app/views/sexo/create.php" class="btn btn-success btn-small">
                <span class="icon">➕</span> Nuevo sexo
            </a>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($sexos) && is_array($sexos)): ?>
                        <?php foreach ($sexos as $sexo): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($sexo['idsexo']); ?></td>
                                <td><?php echo htmlspecialchars($sexo['nombre']); ?></td>
                                <td>
                                    <div class="actions">
                                        <a href="/microsoftvadf/public/sexo/edit?idsexo=<?php echo htmlspecialchars($sexo['idsexo']); ?>" class="btn btn-small btn-edit">
                                            ✏️ Editar
                                        </a>
                                        <a href="/microsoftvadf/public/sexo/eliminar?idsexo=<?php echo htmlspecialchars($sexo['idsexo']); ?>"
                                           class="btn btn-small btn-delete"
                                           onclick="return confirm('¿Estás seguro de eliminar este registro?');">
                                            🗑 Eliminar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="empty-row">No hay registros disponibles.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
