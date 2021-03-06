<?php
/*  not_found.php: Page not found template 
    Copyright (C) 2002-2010  Hastymail Development group

    This file is part of Hastymail.

    Hastymail is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    Hastymail is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Hastymail; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

* $Id:$
*/

/* don't let this file be loaded by the browser directly */
if (!isset($pd) || !is_object($pd)) {
    exit;
}?>

<div id="login">
    <?php if (!$pd->user->logged_in) { echo $pd->print_icon() ?>
    <br /><br /><br />
    <br /><br /><br />
    <?php } else { echo '<div class="not_fnd">'; } echo
    '<b>'.$pd->user->str[20].'</b>';
    if (!$pd->user->logged_in) { echo '
    <br /><br /><br /><a href="?page=login">'.$pd->user->str[21].'</a>';
    } else { echo '</div>'; } ?>
</div>
