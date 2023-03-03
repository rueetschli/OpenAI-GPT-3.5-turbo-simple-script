<?php
header( "Access-Control-Allow-Origin: *" );
header( "Content-Type: application/json" );
$context = json_decode( $_POST['context'] ?: "[]" ) ?: [];
// Initialisierung der Modellparameter
$postData = [
    "model" => "gpt-3.5-turbo",
    "messages" => [],
    "temperature" => 0.3,
    "presence_penalty" => 0,
    "frequency_penalty" => 1.2,
];
if( !empty( $context ) ) {
    $context = array_slice( $context, -5 );
    foreach( $context as $message ) {
        $postData['messages'][] = ['role' => 'user', 'content' => str_replace("\n", "\\n", $message[0])];
        $postData['messages'][] = ['role' => 'assistant', 'content' => str_replace("\n", "\\n", $message[1])];
    }
}
$postData['messages'][] = ['role' => 'user', 'content' => $_POST['message']];

$ch = curl_init();
$OPENAI_API_KEY = "Deine-OpenAI-API";
$headers  = [
    'Accept: application/json',
    'Content-Type: application/json',
    'Authorization: Bearer ' . $OPENAI_API_KEY . ''
];

$postData = json_encode($postData);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

$result = curl_exec($ch);
$complete = json_decode($result);

if( isset( $complete->choices[0]->message->content ) ) {
    $text = trim(str_replace( "\\n", "\n", $complete->choices[0]->message->content ),"\n");
} elseif( isset( $complete->error->message ) ) {
    $text = "Der Server gibt eine Fehlermeldung zurück.".$complete->error->message;
} else {
    $text = "Der Server bricht ab oder gibt eine Ausnahmemeldung zurück.";
}

echo json_encode( [
     "message" => $text,
     "raw_message" => $text,
     "status" => "success",
 ] );

$content2 = $_SERVER["REMOTE_ADDR"]." | ".date("Y-m-d H:i:s")."\n";
$content2 .= "Q:".$_POST['message']."\nA:".$text."\n----------------\n";
$myfile = fopen(__DIR__ . "/chat.txt", "a") or die("Writing file failed.");
fwrite($myfile, $content2);
fclose($myfile);
?>
