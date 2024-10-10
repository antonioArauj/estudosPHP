<?php

$clientAuth = false; 

function verifyAuth($clientAuth){
    if($clientAuth === true){
        return true;
    }
    return false;
};

$isAuthenticated = verifyAuth($clientAuth); 

echo $isAuthenticated ? 'Seja bem vindo ao Sistema' : 'Erro ao acessar, tente realizar o Login novamente'; 
