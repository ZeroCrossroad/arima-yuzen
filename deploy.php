<?php
exec('/usr/lib/git-core/git pull', $op, $rv);
print_r($op);
print_r($rv);
?>
