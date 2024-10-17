<?php

$database = require __DIR__.'/../../database.php';

define('MALE_RETIREMENT_AGE', 65);
define('FEMALE_RETIREMENT_AGE', 62);

$people = $database['users'][1];

function annualSalaryCalculation($people){
    $people['annualSalary'] === null
    && $people['annualSalary'] = $people['monthlySalary'] * 12;
    return $people['annualSalary'];
}; 

function checkJobStatus($people): string{
    return $people['jobStatus'] === true ?  "Empregado" : "Desempregado"; 
};

 function calculationForRetire($people): int{
    return match($people['sex']){
        'M' => MALE_RETIREMENT_AGE - $people['age'],
        'F' => FEMALE_RETIREMENT_AGE - $people['age'],
        default => 0 
    };
 };

?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Explorando Variáveis em PHP</title>
<style>

body{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.card{
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    text-align: center;
}

h1{
    color: #333;
}

p{
    color: #666;
    font-size: 1.1em;

}
strong{
    color: #000;
}
</style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Ficha Cadastral</h1>
            <p>Nome: <strong><?= $people['name']?></strong></p>
            <p>Idade: <strong><?= $people['age']?></strong></p>
            <p>Sexo: <strong><?= $people['sex']?></strong></p>
            <p>Salário Mensal: <strong><?= "R$ ".number_format($people['monthlySalary'], 2, ",", ".")?></strong></p>
            <p>Salário Anual: <strong><?= "R$ ". number_format(annualSalaryCalculation($people), 2, ",", ".")?></strong></p>
            <p>Status de Emprego: <strong><?= checkJobStatus($people)?></strong></p>
            <p>Anos para Aposentar: <strong><?= calculationForRetire($people)?></strong></p>
            <p>Habilidades: <strong><?= $people['skills']?></strong></p>
        </div>
    </div>
</body>
</html>