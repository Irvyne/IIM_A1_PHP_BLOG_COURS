<?php
/**
 * @param array $database
 * @return bool|mysqli
 */
function databaseConnect(array $database) {
    $link = mysqli_connect(
        $database['host'],
        $database['username'],
        $database['passwd'],
        $database['dbname']
    );

    if (! $link) {
        return false;
    } else {
        return $link;
    }
}

/**
 * @param bool $link
 * @return true|false
 */
function databaseDisconnect($link) {
    return mysqli_close($link);
}