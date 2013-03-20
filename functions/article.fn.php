<?php

/**
 * @param $link
 * @param bool $enabled
 * @param bool $limit
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui retourne tous les articles : possibilité de ne sélectionner que les articles activés + possibilité d'activer une limitation du nombre d'article (SELECT)
function getAllArticles($link) {
    $sql = "SELECT * FROM article";
    $result = mysqli_query($link, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

/**
 * @param $link
 * @param $id
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui retourne un seul article d'après son id (SELECT)
function getArticle($link, $id) {
    $sql = "SELECT * FROM article WHERE id=$id";
    $result = mysqli_query($link, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

/**
 * @param $link
 * @param array $article
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui ajoute un article en BDD (INSERT)
function addArticle($link, $title, $content) {
    $sql = "INSERT INTO article (id, title, content) VALUES (NULL, '$title', '$content')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

/**
 * @param $link
 * @param array $article
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui met à jour un article en BDD d'après son id (UPDATE) : ne pas mettre à jour le champ `enabled` ici
function updateArticle($link, $id, $title, $content) {
    $sql = "UPDATE article SET title = '$title', content = '$content' WHERE id = $id";
    $result = mysqli_query($link, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

/**
 * @param $link
 * @param $id
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui supprime un article en BDD d'après son id (DELETE)
function deleteArticle($link, $id) {
    $sql = "DELETE FROM article WHERE id = $id";
    $result = mysqli_query($link, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

/**
 * @param $link
 * @param $id
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui active/désactive un article en BDD d'après son id (UPDATE) : champ `enabled`

/**
 * @param $link
 * @param $sql
 * @return bool|mysqli_result
 */
//TODO créer une fonction qui nous permet d'éxecuter une requete sql déjà écrite

/**
 * @param $string
 * @param int $length
 * @return string
 */
//TODO créer une fonction qui retourne un résumé (d'une "length" modifiable) d'une chaîne de caractère (string)
function getExcerpt($string, $length = 300) {
    $excerpt = substr($string, 0, $length);
    if (strlen($string) > $length) {
        $excerpt .= '...';
    }

    return $excerpt;
}