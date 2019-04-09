<?php
# http://php.net/manual/en/curl.examples-basic.php
$ch = curl_init("https://wot.example.com:8445/cgi-bin/checktrust.lsp");

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
#https://stackoverflow.com/questions/1234537/managing-curl-output-in-php
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "applicantemail=alice@example.com");
curl_setopt($ch, CURLOPT_POST, TRUE);

$returnstring = curl_exec($ch);
print($returnstring);
curl_close($ch);

?>

