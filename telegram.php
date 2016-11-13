
<?php
$Evento = 'Prova';
$Data = '25/11/2016';
$Disciplina = 'Sistemas Operacionais';
$Destinatario = 'Daniel';

putenv("Evento=$Evento");
putenv("Disciplina=$Disciplina");
putenv("Data=$Data");
putenv("Destinatario=$Destinatario");
echo shell_exec("/var/www/html/telegram-service-notification.sh");

?>
