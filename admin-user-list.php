<?php
/**
 * @author Benjamin GUILLEMANT (https://github.com/BenjaminGuillemant).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/_header-admin.php';

$users = getUsers($link);

include __DIR__.'/template/admin-user-list.php';

require __DIR__.'/_footer.php';
