#Script für gpt-3.5-turbo Modell 
------------
via API OpenAI.com
Ein Chat, aufbauend auf der API für chatgpt von chat.openai.com
Sehr einfach gehalten.
PHP | CSS | html | Javascript



#Info (German - english below)
------------
Ursprünglicher Fork: https://github.com/dirk1983/chatgpt
Das orginal-Script wurde lokalisiert, überprüft und angepasst.


#Installation
------------
Installiere alle Dateien auf einem (geschützten) Webverzeichnis.
Registriere dich auf https://platform.openai.com/ für einen API-Key.

Füge diesen Key in der Datei message.php in der Zeile 23 ein. Ersetze dabei "Deine-OpenAI-API" und lasse die "" stehen.

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





chatgpt GPT 3.5 Turbo from OpenAI
#info
------------
Source used: https://github.com/dirk1983/chatgpt 
The orginal script was localized, checked and adapted.

#installation
------------
Install all files on a (protected) web directory. Register at https://platform.openai.com/ for an API key.

Add this key in the file message.php in line 23. Replace "Your-OpenAI-API" and leave the "".

If you want to log the chats, make sure that the file chat.txt has write permissions (644).

Optionally, you can uncomment lines 3-23 in the file. This would protect the page in a very rudimentary way. Put your IP address in line 3. Choose a username and a password. Replace in line 14 at (($_SERVER['PHP_AUTH_USER']=="admin") the word admin with your chosen username and at ($_SERVER['PHP_AUTH_PW']=="admin") the password.

#Sense and purpose
------------
This is meant to remain a simple script that can be used by anyone without a framework simply by copy-pasting. This is to enable everyone to privately run a low cost chatbot using their own API key.

#Screenshot
------------
![image](https://user-images.githubusercontent.com/8299018/222672442-035ac523-6d65-41b5-a843-1527637cb2bc.png)
