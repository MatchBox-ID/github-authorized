<?php
include "config.php";

//generate login link
$param = [
   'client_id' 	=> $config['client_id'],
   'redirect_url' 	=> $config['redirect_url'],
   'scope'		=> $config['scope']
];
$url_query = http_build_query($param);
$login_url = $config['auth_url'].'authorize?'.$url_query;

?>
<a href="<?php echo $login_url?>">Login With Github</a>
