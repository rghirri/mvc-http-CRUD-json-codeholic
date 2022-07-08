<?php
echo 'hello from controller';
echo '<br>';
$string = 'post-authors';

$str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));

echo $str;
echo '<br>';
echo '--------------------------------';
echo '<br>';
echo 'hello from action';
echo '<br>';
$string = 'post-new';

$str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));

echo lcfirst($str);
echo '<br>';
echo '--------------------------------';