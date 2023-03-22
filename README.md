#Script für gpt-3.5-turbo Modell (GPT 4 ready) [English version below]
------------
PHP | CSS | html | Javascript
Ein Chat, aufbauend auf der API für chatgpt von chat.openai.com

OpenAI-GPT-3.5-turbo-simple-script ist vermutlich die einfachste Art einen Chat für OpenAI GPT 3.5-turbo und GPT 4 selber zu installieren und zu hosten.
Das Script besteht lediglich aus 4 Dateien (index.php, setsesion.php, stream.php und chat.js). Die restlichen Dateien sind Hilfsdateien zur Darstellung (.css) und für die erweiterten Funktionalitäten (.js)

Die php-Version ruft die neueste OpenAI-Schnittstelle und das Modell gpt-3.5-turbo für die Q&A-Demo auf, wobei die Kommunikation im Stream-Modus erfolgt und die Antwortgeschwindigkeit die der offiziellen Website übertrifft. Das Front-End verwendet JS's EventSource, unterstützt Markdown-Format Parsing, und der Code hat Farbgebung Verarbeitung. Die Benutzeroberfläche der Seite ist einfach und unterstützt kontextbezogene kontinuierliche Sitzungen. 

Es wird kein Framework verwendet und alle PHP-Versionen werden unterstützt.

Das Script kann mit einem eigenen API-Schlüssel betrieben werden (Ändern Sie einfach den API_KEY in der Datei stream.php), oder sie lassen die Endbenutzer einen API-Schlüssel eintragen (Kommentieren Sie dazu die nötigen Zeilen in der Datei index.php aus)


#Credits 
------------
Ursprünglicher Fork: https://github.com/dirk1983/chatgpt
Das orginal-Script wurde lokalisiert, überprüft und angepasst.


#Installation
------------
Installiere alle Dateien auf einem (geschützten) Webverzeichnis.
Registriere dich auf https://platform.openai.com/ für einen API-Key.

Füge diesen Key in der Datei stream.php in der Zeile 9 ein. Ersetze dabei "Deine-OpenAI-API" und lasse die "" stehen.

Falls du die Chats protokollieren möchtest, stelle sicher, dass die Datei chat.txt über schreibrechte (644) verfügt. 

Optional kannst du in der Datei index.php die Zeilen 3-23 Entkommentieren. Damit wäre die Seite sehr rudimentär Geschützt. 
Setze dazu deine IP-Adresse in der Zeile 3 ein. Wähle ein Benutzername und ein Passwort. Ersetze in Zeile 14 bei (($_SERVER['PHP_AUTH_USER']=="admin") das Wort admin mit deinem gewählten Benutzername und bei ($_SERVER['PHP_AUTH_PW']=="admin") das Passwort.


#Change-Log
------------
23. März 2023
* AI anfrage kann jederzeit unterbrochen werden
* Einige voreingestellte Phrasen hinzugefügt
* Die Anpassung an mobile Browser wurde optimiert
* Schaltfläche zum Kopieren von Codes hinzugefügt
* Fragen können nun Mehrzeilig verfasst werden. 


02. März 2023
* Codezeilen werden nun als Blöcke dargestellt
* Beutzer kann eigenen API-Key verwenden
* Bugfixing


27. Februar 2023
* Initialversion.





#Screenshot
------------
![image](https://user-images.githubusercontent.com/8299018/226865912-0f0db9e2-d604-4487-9c62-912130d71433.png)






#Script for gpt-3.5-turbo model (GPT 4 ready)
------------
PHP | CSS | html | Javascript A chat, based on the API for chatgpt from chat.openai.com

OpenAI-GPT-3.5-turbo-simple-script is probably the easiest way to install and host a chat for OpenAI GPT 3.5-turbo and GPT 4 by yourself. The script consists of only 4 files (index.php, setsesion.php, stream.php and chat.js), the rest are auxiliary files for display (.css) and advanced functionality (.js).

The php version calls the latest OpenAI interface and the gpt-3.5-turbo model for the Q&A demo, communicating in stream mode and with response speed exceeding that of the official website. The front-end uses JS's EventSource, supports Markdown-format parsing, and the code has coloring processing. The site's user interface is simple and supports contextual continuous sessions.

No framework is used and all PHP versions are supported.

The script can be run with its own API key (just change the API_KEY in the stream.php file), or let the end-users enter an API key (comment out the necessary lines in the index.php file)

#Credits
------------
Original fork: https://github.com/dirk1983/chatgpt The orginal script has been localized, checked and adjusted.

#Installation
------------
Install all files on a (protected) web directory. Register at https://platform.openai.com/ for an API key.

Add this key in the stream.php file in line 9. Replace "Your-OpenAI-API" and leave the "".

If you want to log the chats, make sure that the file chat.txt has write permissions (644).

Optionally, you can uncomment lines 3-23 in the index.php file. This would protect the page in a very rudimentary way. Put your IP address in line 3. Choose a username and a password. Replace in line 14 at (($_SERVER['PHP_AUTH_USER']=="admin") the word admin with your chosen username and at ($_SERVER['PHP_AUTH_PW']=="admin") the password.

#change-log
------------
March 2023
* AI request can be interrupted at any time
* Added some preset phrases
* Optimized adaptation to mobile browsers
* Added button to copy codes
* Questions can now be written in multiple lines.

March 2023
* Lines of code are now displayed as blocks
* User can use own API key
* Bugfixing

February 2023
* Initial version.

#Screenshot
------------
![image](https://user-images.githubusercontent.com/8299018/226865912-0f0db9e2-d604-4487-9c62-912130d71433.png)

