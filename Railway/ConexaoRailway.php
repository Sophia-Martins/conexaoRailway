<?php
$link = mysql_connect('mysql://root:qzYztQHxApmMpoeKFfxfMPlzYmQNkFhy@autorack.proxy.rlwy.net:13276/railway');
if(!$link){
die('nao pode ser conectado'. mysql_error());
}
echo 'Conexão com sucesso!';
mysql_close($link);
?>