<?php



/**
 * @param string $login
 * @return object|$0|false|stdClass|null
 */
function getUser(string $login): mixed
{
    $connect = connect();

    // 2. QUERY
    $request = $connect->prepare("SELECT * FROM user WHERE login = ?");

    $params = [
        trim($login),
    ];

    // 3. EXECUTE
    $request->execute($params);

    // 4. FETCH
    return $request->fetchObject();
}




/**
 * @param string $login
 * @return bool
 */
function userExists(string $login): bool
{
    /* -- " is_object " vérifie si la valeur retournée par "getUser" est un objet. Si oui, ça signifie
    qu'un utilisateur avec le nom d'utilisateur $login existe, donc la fonction renvoie true */
    if (is_object(getUser($login))) {
        return true;

    } else {
        return false;
        /* --  si il n'y a pas d'utilisateur correspondant au nom d'utilisateur $login,la fonction renvoie
        false. -- */
    }
}