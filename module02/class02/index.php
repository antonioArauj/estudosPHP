<?php

$people = [
    'Antonio' => [
        'name' => 'Antonio Araujo',
        'age' => '20',
        'gender' => 'M',
        'monthlySalary' => 2210.00,
        'annualSalary' => null,
        'jobStatus' => 'Empregado',
        'skills' => 'PHP, Banco de Dados, Vue'
    ]
];

function annualSalaryCalculation($people)
{
    if ($people['Antonio']['annualSalary'] === null) {
        $finalValue = $people['Antonio']['monthlySalary'] * 12;
        $people['Antonio']['annualSalary'] = $finalValue;
    }
    return $people['Antonio']['annualSalary'];
};

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
            <p>Nome: <strong><?= $people['Antonio']['name'] ?></strong></p>
            <p>Idade: <strong><?= $people['Antonio']['age'] ?></strong></p>
            <p>gendero: <strong><?= $people['Antonio']['gender'] ?></strong></p>
            <p>Salário Mensal: <strong><?= $people['Antonio']['monthlySalary'] ?></strong></p>
            <p>Salário Anual: <strong><?= annualSalaryCalculation($people) ?></strong></p>
            <p>Status de Emprego: <strong><?= $people['Antonio']['jobStatus'] ?></strong></p>
            <p>Habilidades: <strong><?= $people['Antonio']['skills'] ?></strong></p>
        </div>
    </div>
</body>

</html>