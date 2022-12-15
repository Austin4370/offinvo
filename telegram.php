function telegram_send($message) 
{
    $curl = curl_init();
    $api_key  = '5875607608:AAHxnN3DkS0bouuM5gBKaAon2Xq4wkA2XX0';
    $chat_id  = '1503704842';
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}