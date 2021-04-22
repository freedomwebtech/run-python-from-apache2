<?php 

$command = escapeshellcmd('python3 /var/www/html/hello.py');
$output = shell_exec($command);
echo $output;

?>
