<?php
$date = date("d-m-Y H:i:s");
$footer = file_get_contents("footer.html");
$footer = str_replace("{{stamp_date}}", $date, $footer);
file_put_contents("footer_tmp.html", $footer);

$command = "wkhtmltopdf --header-html header.html --footer-html footer_tmp.html input.html output.pdf";
shell_exec($command);
echo "PDF generato con successo!";
?>
