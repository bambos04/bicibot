<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
// non riesco ancora a capire come far inserire nella risposta del bot dati che si riferiscono all'invocante dello stesso.
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || stristr ( $text, "/command1" ) == true )
{
	$response = "response1";
}
elseif( stristr ( $text, "/command2" ) == true )
{
	$response = "response2";
}
// altri comandi si aggiungono con altri elseif uguali a quello sopra.
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
