<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
if(strpos($text, "/start") === 0 || stristr ( $text, "/command1" ) == true )
{
	$response = "Ciao Amici delle bici";
}
elseif( stristr ( $text, "/nibali" ) == true )
{
	$response = "ilnostrovincenzonibali";
}
elseif( stristr ( $text, "/attacca" ) == true )
{
	$response = "Kruijswijk attacca cristo santo";
}
elseif( stristr ( $text, "/genovesi" ) == true )
{
	$response = "Ape regina";
}
elseif( stristr ( $text, "/beppeconti" ) == true )
{
	$response = "ma quante ne hai timbrate con sta retorica su Coppi e Bartali";
}
elseif( stristr ( $text, "/ciccone" ) == true )
{
	$response = "ilnostrogiuliociccone, futurodelciclismoitaliano";
}
elseif( stristr ( $text, "/alanphilippe" ) == true )
{
	$response = "forse intendevi: Alan Philippe";
}
elseif( stristr ( $text, "/sgarbozza" ) == true )
{
	$response = "104";
}
elseif( stristr ( $text, "/nick" ) == true )
{
	$response = "Nuyens";
}
elseif( stristr ( $text, "/tedescone" ) == true )
{
	$response = "Burghardt, Kittel, Martin, Degenkolb, insomma un tedesco qualsiasi";
}
elseif( stristr ( $text, "/francesino" ) == true )
{
	$response = "Bardet, Barguil, Gaudu insomma un francese qualsiasi";
}
elseif( stristr ( $text, "/eccolo" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13841";
}
elseif( stristr ( $text, "/scatto" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13842";
}
elseif( stristr ( $text, "/ribaltone" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13843";
}
elseif( stristr ( $text, "/aru" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13844";
}
elseif( stristr ( $text, "/avversariboh" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13845";
}
elseif( stristr ( $text, "/neve" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13846";
}
elseif( stristr ( $text, "/aspettare" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13847";
}
elseif( stristr ( $text, "/trionfa" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13848";
}
elseif( stristr ( $text, "/dumoulin" ) == true )
{
	$response = "https://t.me/cambioshimano2box/13849";
}
// altri comandi si aggiungono con altri elseif uguali a quello sopra.
$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
