<?php

function d($v)
{
    echo "<pre>";
    print_r($v);
    echo "</pre>";
}

require_once 'src/musixmatch.php';



$apikey = 'YOUR_API_KEY';


$musix = new MusicXMatch($apikey);

$result = '';
try{
    $result = $musix->param_q_artist('zé ramalho')
        ->execute_request();
}
catch (Exception $e)
{
    d($e);
}



d($result);


?>
