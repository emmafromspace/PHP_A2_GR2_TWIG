<?php
/**
 * @author Benjamin GUILLEMANT (https://github.com/BenjaminGuillemant).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header-admin.php';

if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    removeCategory($link, $id);
}

header('Location: admin-category-list.php');

require __DIR__.'/_footer.php';