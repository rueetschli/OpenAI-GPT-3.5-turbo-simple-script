<?php
$type = "Persönlicher-API-Key";
//  if (substr($_SERVER["REMOTE_ADDR"],0,9)!="127.0.0.1"){
//    if (strpos($_SERVER["HTTP_USER_AGENT"],"MicroMessenger")){
//      echo "<div style='height:100%;width:100%;text-align:center;margin-top:30%;'><h1>Bitte klicken Sie auf die obere rechte Ecke und wählen Sie "Im Browser öffnen".</h1></div>";
//      exit;
//    }
//    if (!isset($_SERVER['PHP_AUTH_USER'])) {
//      header('WWW-Authenticate: Basic realm="Please input username and password."');
//      header('HTTP/1.0 401 Unauthorized');
//      echo 'Bye, honey.';
//      exit;
//    } else {
//      if (($_SERVER['PHP_AUTH_USER']=="admin")&&($_SERVER['PHP_AUTH_PW']=="admin")){
//        $type = "Extranet";
//      } else {
//        echo 'Wrong password, bye...';
//        exit;
//      }
//    }
//  } else {
//    $type = "Intranet";
//  }
?>
<html lang="de-DE">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ChatGPT 3.5 - ChatBot</title>
    <link rel="stylesheet" href="css/common.css?v1.1">
    <link rel="stylesheet" href="css/wenda.css?v1.1">
    <link rel="stylesheet" href="css/hightlight.css">
    <script src="js/remarkable.js"></script>
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/jquery.cookie.min.js"></script>
    <script src="js/layer.min.js"></script>
    <script src="js/chat.js?v2.8"></script>
    <script src="js/highlight.min.js"></script>
    <script src="//cdn.bootcss.com/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
        showProcessingMessages: false,
        messageStyle: "none",
        extensions: ["tex2jax.js"],
        jax: ["input/TeX", "output/HTML-CSS"],
        tex2jax: {
            inlineMath:  [ ["$", "$"] ],
        displayMath: [ ["$$","$$"] ],
        skipTags: ['script', 'noscript', 'style', 'textarea', 'pre','code','a'],
        ignoreClass:"comment-content"
            },
        "HTML-CSS": {
            availableFonts: ["STIX","TeX"],
        showMathMenu: false
            }
        });
    </script>
</head>

<body>
    <div class="layout-wrap">
        <header class="layout-header">
            <div class="container" data-flex="main:justify cross:start">
                <div class="header-logo">
                    <h2 class="logo"><a class="links" id="clean" title="OpenAI Chatbot"><span class="logo-title">OpenAI Chatbot</span></a></h2>
                </div>
                <div class="header-logo">
                    <h2 class="logo"><a class="links" href="https://github.com/rueetschli/OpenAI-GPT-3.5-turbo-simple-script"><span class="logo-title">Quellcode</span></a></h2>
                </div>
            </div>
        </header>
        <div class="layout-content">
            <div class="container">
                <article class="article" id="article">
                    <div class="article-box">
                        <div class="precast-block" data-flex="main:left">
                            <!--
                            <div class="input-group">
                                <span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;API-KEY&nbsp;&nbsp;</span>
                                <input type="password" id="key" style="border:1px solid grey;display:block;max-width:270px;width:calc(100% - 70px);" onload="this.focus();">
                            </div>
-->
                            <div class="input-group">
                                <span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;Kontinuierlicher Dialog：</span>
                                <input type="checkbox" id="keep" checked="" style="min-width:220px;">
                                <label for="keep"></label>
                            </div>
                            <div class="input-group">
                                <span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;Voreinstellung: </span>
                                <select id="preset-text" onchange="insertPresetText()" style="width:calc(100% - 90px);max-width:280px;">
                                    <option value="">Phrasen</option>
                                    <option value="Ich möchte, dass Sie die Rolle eines Linux-Terminals übernehmen. Ich gebe Befehle ein und Sie antworten mit dem, was das Terminal anzeigen soll. Ich möchte, dass Sie auf die Terminalausgabe nur mit einem einzigen Code-Block antworten, und sonst nichts. Schreiben Sie keine Erklärungen. Geben Sie keinen Befehl ein, es sei denn, ich weise Sie an, dies zu tun. Wenn ich Ihnen etwas auf Englisch sagen muss, setze ich den Text in Klammern [etwa so]. Mein erster Befehl ist pwd">Als Linux-Terminal fungieren</option>
                                    
									<option value="Ich möchte, dass Sie die Rolle des Englisch-Übersetzers, des Rechtschreibkorrekturlesers und des rhetorischen Verbesserers übernehmen. Ich werde mit Ihnen in einer beliebigen Sprache kommunizieren, und Sie werden die Sprache erkennen, sie übersetzen und mir in schönerem und raffinierterem Englisch antworten. Bitte ersetzen Sie meine einfachen Wörter und Sätze durch elegantere und raffiniertere Ausdrücke, so dass der Sinn erhalten bleibt, aber literarischer wird. Bitte antworten Sie nur auf die Korrekturen und Verbesserungen, nicht auf die Erklärungen. Mein erster Satz lautet 'Wie geht es Ihnen?' und bitte übersetzen Sie ihn.">Englisch-Übersetzer und -Verbesserer</option>
                                    
									
									<option value="Ich möchte, dass Sie als Experte für Front-End-Entwicklung agieren. Ich werde einige spezifische Informationen über Front-End-Code-Probleme mit Js, Node, etc. zur Verfügung stellen und Ihre Aufgabe wird es sein, Strategien zu entwickeln, um das Problem für mich zu lösen. Dies kann auch Vorschläge für Code, Code-Logik Ideen Strategien. Meine erste Anforderung lautet: 'Ich muss in der Lage sein, dynamisch auf die X- und Y-Achse eines Elementknotens in der linken oberen Ecke des aktuellen Computerbildschirms zu hören, die Position des Browserfensters durch Ziehen und Ablegen zu verschieben und die Größe des Browserfensters zu ändern.'">Front-End Entwicklung</option>
									
                         
                                    
                                    <option value="Ich möchte, dass du der SVG-Designer bist. Ich werde Sie bitten, das Bild zu erstellen, Sie werden den SVG-Code für das Bild bereitstellen, den Code in eine base64-Datenurl umwandeln und mir dann eine Antwort geben, die nur den Markdown-Bild-Tag enthält, der auf diese Datenurl verweist. Fügen Sie kein Markdown in den Codeblock ein. Senden Sie nur die Preissenkung, also keinen Text. Meine erste Anfrage lautet: Geben Sie mir ein Bild eines roten Kreises">SVG-Designer</option>
									
									
								
                                </select>
                            </div>
                        </div>
                        <ul id="article-wrapper">
                        </ul>
                        <div class="creating-loading" data-flex="main:center dir:top cross:center">
                            <div class="semi-circle-spin"></div>
                        </div>
                        <div id="fixed-block">
                            <div class="precast-block" id="kw-target-box" data-flex="main:left cross:center">
                                <div id="target-box" class="box">
                                    <textarea name="kw-target" placeholder="Stellen Sie hier eine Frage, drücken Sie Strg+Eingabe zum Senden" id="kw-target" autofocus rows=1></textarea>
                                </div>
                                <div class="right-btn layout-bar">
                                    <p class="btn ai-btn bright-btn" id="ai-btn" data-flex="main:center cross:center"><i class="iconfont icon-wuguan"></i>Absenden</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</body>

</html>