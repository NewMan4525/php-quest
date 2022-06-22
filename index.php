<?php

$current_lang='php';
$complite_lang='javascript';
$heredoc_format =<<<HEREDOC
I am lerning {$current_lang}...i known {$complite_lang}
HEREDOC;

$current_var= `dir`;

var_dump($current_var);


?>
