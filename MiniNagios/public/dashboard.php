<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Serveurs</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>Gestion des Serveurs</h2>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom d'hôte</th>
        <th>Adresse IP</th>
        <th>Date de création</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($serveurs)): ?>
        <?php foreach ($serveurs as $serveur): ?>
            <tr>
                <td><?= htmlspecialchars($serveur['id']) ?></td>
                <td><?= htmlspecialchars($serveur['hostname']) ?></td>
                <td><?= htmlspecialchars($serveur['ip']) ?></td>
                <td><?= htmlspecialchars($serveur['date_creation']) ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4" style="text-align:center;">Aucun serveur trouvé.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

</body>
</html>