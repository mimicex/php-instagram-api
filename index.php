<?php
    $format = 'https://graph.facebook.com/v15.0/instagram_oembed?url=[ig完整網址]&access_token=你的fb developers 後台的token&hidecaption=true';
    $url = sprintf($format, $instagram_name);

    $curl_connection = curl_init($url);
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    # Data are stored in $data
    $ig_content = json_decode(curl_exec($curl_connection), TRUE);
    
    curl_close($curl_connection);
    print_r($ig_content);
?>