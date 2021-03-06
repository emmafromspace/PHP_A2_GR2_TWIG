<?php
/**
 * @author Emma Billiet (https://github.com/emmafromspace).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header-admin.php';

if (!empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    removeArticle($link, $id);
}

header('Location: admin-article-list.php');

require __DIR__.'/_footer.php';