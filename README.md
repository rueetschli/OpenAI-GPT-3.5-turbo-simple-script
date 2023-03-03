# chatgpt GPT 3.5 Turbo von OpenAI

#Info
------------
Verwendete Quelle: https://github.com/dirk1983/chatgpt
Das orginal-Script wurde lokalisiert, überprüft und angepasst.


#Installation
------------
Installiere alle Dateien auf einem (geschützten) Webverzeichnis.
Registriere dich auf https://platform.openai.com/ für einen API-Key.

Füge diesen Key in der Datei message.php in der Zeile 20 ein. Ersetze dabei "Deine-OpenAI-API" und lasse die "" stehen.

Falls du die Chats protokollieren möchtest, stelle sicher, dass die Datei chat.txt über schreibrechte (644) verfügt. 

Optional kannst du in der Datei die Zeilen 3-23 Entkommentieren. Damit wäre die Seite sehr rudimentär Geschützt. 
Setze dazu deine IP-Adresse in der Zeile 3 ein. Wähle ein Benutzername und ein Passwort. Ersetze in Zeile 14 bei (($_SERVER['PHP_AUTH_USER']=="admin") das Wort admin mit deinem gewählten Benutzername und bei ($_SERVER['PHP_AUTH_PW']=="admin") das Passwort.


#Sinn und Zweck
------------
Dies soll ein einfaches Script bleiben, welches ohne Framework einfach mit Copy-Paste von allen Menschen genutzt werden kann.
Damit sollen alle in der Lage sein, mithilfe ihres eigenen API-Key einen kostengünstigen Chatbot privat zu betreiben.



#Screenshot
------------
![image](https://user-images.githubusercontent.com/8299018/222672442-035ac523-6d65-41b5-a843-1527637cb2bc.png)
