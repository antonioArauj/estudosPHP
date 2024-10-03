Na aula é explicado que não é necessário fazer uma validação em uma váriavel, oq é interessante mas semanticamente incorreto, pois em um caso de autenticação, ex: 

EXERCÍCIO DA CLASS09

$clientAuth = false; 

function verifyAuth($clientAuth){
    if($clientAuth === true){
        return true;
    }
    return false;
};

No caso acima estou fazendo uma validação se o cliente está realmente autenticado, neste caso o usuário não está autenticado, mas se eu não valido a minha váriavel, ex: 

$clientAuth = 'r'; 

function verifyAuth($clientAuth){
    if($clientAuth) NOTE QUE NÂO ESTOU FAZENDO UMA VALIDAÇÃO{
        return true;
    }
    return false;
};

Neste caso, irá retornar true, pois eu não estou obrigando a minha váriavel a me retornar um Booleano, então é sempre interessante validar o valor retornado, claro, sempre lembrando que existem casos e casos. 