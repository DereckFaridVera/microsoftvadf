<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Persona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            max-width: 620px;
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

        .form-row {
            display: flex;
            gap: 12px;
        }

        .form-row > div {
            flex: 1;
        }

        label {
            font-size: .9rem;
            margin-bottom: 4px;
            display: block;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px 12px;
            border-radius: 12px;
            border: 1px solid rgba(148, 163, 184, 0.6);
            background: rgba(15, 23, 42, 0.7);
            color: var(--text-main);
            outline: none;
            transition: all .2s ease;
            font-size: .9rem;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
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

        @media (max-width: 640px) {
            .glass-card {
                padding: 18px;
            }

            .topbar {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .form-row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="page">
    <div class="topbar">
        <h1>Editar Persona</h1>
        <div>
            <a href="/microsoftvadf/public/persona/index" class="btn-nav">⬅ Volver al listado</a>
            <a href="/microsoftvadf/public/" class="btn-nav">🏠 Inicio</a>
        </div>
    </div>

    <div class="glass-card">
        <h2>Modificar registro</h2>
        <p>Actualiza la información de la persona seleccionada.</p>

        <form action="../../app/controllers/PersonaController.php?action=update" method="POST">
            <input type="hidden" name="idpersona" value="<?= htmlspecialchars($persona['idpersona']) ?>">

            <div class="form-row">
                <div>
                    <label for="nombres">Nombres:</label>
                    <input type="text" name="nombres" id="nombres"
                           value="<?= htmlspecialchars($persona['nombres']) ?>" required>
                </div>

                <div>
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos"
                           value="<?= htmlspecialchars($persona['apellidos']) ?>" required>
                </div>
            </div>

            <div>
                <label for="fechanacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fechanacimiento" id="fechanacimiento"
                       value="<?= htmlspecialchars($persona['fechanacimiento']) ?>" required>
            </div>

            <div class="form-row">
                <div>
                    <label for="idsexo">Sexo:</label>
                    <select name="idsexo" id="idsexo" required>
                        <?php foreach ($sexos as $sexo): ?>
                            <option value="<?= htmlspecialchars($sexo['idsexo']) ?>"
                                <?= $sexo['idsexo'] == $persona['idsexo'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($sexo['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="idestadocivil">Estado Civil:</label>
                    <select name="idestadocivil" id="idestadocivil" required>
                        <?php foreach ($estadosciviles as $estadocivil): ?>
                            <option value="<?= htmlspecialchars($estadocivil['idestadocivil']) ?>"
                                <?= $estadocivil['idestadocivil'] == $persona['idestadocivil'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($estadocivil['nombre']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="buttons">
                <a href="/microsoftvadf/public/persona/index" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
