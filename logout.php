<?php
/**
 * @author Benjamin GUILLEMANT (https://github.com/BenjaminGuillemant).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

session_start();

session_unset();

session_destroy();

header('Location: index.php');