<?php 

/**
 * EXERCÍCIO - 1 
 * CRIE UM SCRIPT PHP QUE SIMULA UM SITEMA DE LOGIN SIMPLES.
 * 1. O sistema deve verificar se o nome de usuário e a senha fornecidos estão corretos;
 * 2. X se ambos estiverem corretos, exiba uma mensagem de boas vindas;
 * 3. Se algum dos dois estiver incorreto, exiba uma mensagem de erro. 
 */

$savedUsers = [
    'Paulo' => [
        'name' => 'Paulo Santos',
        'email' => 'paulo66santos@estudos.com',
        'password' => '123fr4'
    ],
    'Antonio' => [
        'name' => 'Antonio Araujo',
        'email' => 'antonio33araujo@estudos.com',
        'password' => '123456' 
    ]
];

$login = [
    'name' => 'Antonio Araujo',
    'email' => 'antonio33araujo@estudos.com',
    'password' => '123456'
];

function checkLogin($login, $savedUsers) { 
    if (isset($login['name'], $login['email'], $login['password'])) {
        foreach ($savedUsers as $users) {
            if ($login['name'] === $users['name'] && 
                $login['email'] === $users['email'] && 
                $login['password'] === $users['password']) {
                return true;
            }
        }
    }
    return false;
}

$isAuthenticated = checkLogin($login, $savedUsers);

echo $isAuthenticated ? "Seja bem-vindo ao sistema, {$login['name']}." : "Email/Senha incorreto, tente novamente.";

echo '<br />';
echo '<br />';
echo '<br />';

/**
 * EXERCÍCIO - 2
 * CRIE UM SCRIPT PHP QUE VERIFICA SE UMA PESSOA PODE ENTRAR EM UMA FESTA.
 * 1. para entrar na festa, a pessoa precisa ter pelo menos 18 anos de idade
 * 2. caso a pessoa for menor de idade, será necessário estar acompanhada.
 */


$guest = [
        'name' => 'Suzan',
        'age' => 15,
        'accompanied' => false
];

function validateGuestInformation($guest, $accompanied){
    if( $guest >= 18 || $accompanied === true){
       return 'Seja bem vindo a festa'; 
    };
    return 'Você não pode entrar';
}; 

echo validateGuestInformation($guest['age'], $guest['accompanied']); 

echo '<br />';
echo '<br />';
echo '<br />';


/**
 * EXERCÍCIO - 3
 * CRIE UM SCRIPT PHP QUE DETERMINA SE UM CLIENTE TEM DIREITO A UM DESCONTO ESPECIAL EM UMA LOJA E QUAL SERÁ O DESCONTO.
 * 1- O cliente tem direito ao desconto de 20% se o valor de suas compras for maior que R$ 200 ou se ele for um membro vip. 
 * 2- Se o valor total das compras estiver entre R$150 e R$200, o cliente pode receber um desconto de 10%. 
 */


$purchase = [
    'value' => 149,
    'VIP' => false,
]; 

function calculateValue($purchase, $vip){
    $message = "Sua compra deu {$purchase}";

    if($purchase >= 200.00 || $vip === true){
        $discount = 20.00;
        $finalValue = $purchase - ($purchase / 100 * $discount);
        $message =  "Olá, você recebeu um desconto de 20% e o valor ficou $finalValue"; 
    };

    if($purchase >= 150.00 && $purchase <= 200.00){
        $discount = 10.00;
        $finalValue = $purchase - ($purchase / 100 * $discount);
        $message = "Olá, você recebeu um desconto de 10% e o valor ficou $finalValue";
    }

    return $message;
};

echo calculateValue($purchase['value'], $purchase['VIP']); 
