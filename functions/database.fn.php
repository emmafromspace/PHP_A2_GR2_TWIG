<?php
/**
 * @author Benjamin GUILLEMANT (https://github.com/BenjaminGuillemant).
 * This code is under MIT licence (see https://github.com/BenjaminGuillemantlicense/blob/master/MIT.md)
 */

function getDatabaseLink(array $config) {
    return mysqli_connect(
        $config['hostname'],
        $config['username'],
        $config['password'],
        $config['dbname']
    );
}

function closeDatabaseLink($link) {
    return mysqli_close($link);
}
