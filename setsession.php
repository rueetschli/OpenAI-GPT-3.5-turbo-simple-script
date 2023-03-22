<?php
$context = json_decode($_POST['context'] ?: "[]") ?: [];
$postData = [
    "model" => "gpt-3.5-turbo",
    "temperature" => 0,
    "stream" => true,
    "messages" => [
        			[
            			"role" => "system",
            			"content" => "Du bist ein extrem Hilfreicher Assistent. Du entschuldigst dich nicht unnötig. Deine Aussagen sind immer sehr Aussagekräftig, Umfangreich und gut Belegt."
        			]
    			  ],
		
//    "presence_penalty" => 0,
//    "frequency_penalty" => 1.2,
//   "max_history" => 99,    // Für später, wenn der Parameter verfügbar ist.
				
];
if (!empty($context)) {
    $context = array_slice($context, -5);
    foreach ($context as $message) {
        $postData['messages'][] = ['role' => 'user', 'content' => str_replace("\n", "\\n", $message[0])];
        $postData['messages'][] = ['role' => 'assistant', 'content' => str_replace("\n", "\\n", $message[1])];
    }
}
$postData['messages'][] = ['role' => 'user', 'content' => $_POST['message']];
$postData = json_encode($postData);
session_start();
$_SESSION['data'] = $postData;
if ((isset($_POST['key'])) && (!empty($_POST['key']))) {
    $_SESSION['key'] = $_POST['key'];
}
echo '{"success":true}';
