<!-- this file doesn't used now -->
<?php require 'env.php' ?>
<html>
<head>
    <title><?= ENV ?>-<?= ENV_ID ?></title>
</head>
<body>
<h1><?= gethostname() ?> on <?= ENV ?>-<?= ENV_ID ?></h1>
<table>
    <tr>
        <td>hostname</td>
        <td><?= gethostname() ?></td>
    </tr><tr>
        <td>environment</td>
        <td><?= ENV ?>-<?= ENV_ID ?></td>
    </tr>
</table>
</body>
</html>
