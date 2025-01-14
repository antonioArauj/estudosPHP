<?php

require __DIR__ . '/functions.php';

$database = require __DIR__ . '/../../database.php';

$people = $database['users'][1];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando Variáveis em PHP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            font-size: 1.1em;

        }

        strong {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $people['name'] ?></strong></p>
            <p>Idade: <strong><?= $people['age'] ?></strong></p>
            <p>Gênero: <strong><?= $people['gender'] ?></strong></p>
            <p>Salário Mensal: <strong><?= formattingForMonetaryValue($people['monthlySalary'])?></strong></p>
            <p>Salário Anual: <strong><?= annualSalaryCalculation($people['monthlySalary'])?></strong></p>
            <p>Status de Emprego: <strong><?= checkStatusJob($people) ?></strong></p>
            <p>Anos para Aposentar: <strong><?= calculateYearsToRetirement($people) ?></strong></p>
            <p>Habilidades: <strong><?= $people['skills'] ?></strong></p>
        </div>
    </div>
</body>

</html>