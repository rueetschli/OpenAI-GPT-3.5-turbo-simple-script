<?php
$type = "private";
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
	<title>GPT 3.5 - Turbo</title>
	<link rel="stylesheet" href="css/common.css?v1.1">
	<link rel="stylesheet" href="css/wenda.css?v1.1">
</head>
<body>
	<div class="layout-wrap">
		<header class="layout-header">
			<div class="container" data-flex="main:justify cross:start">
				<div class="header-logo">
					<h2 class="logo"><a class="links" id="clean" title="Chatbot"><span class="logo-title">Chat-KI</span></a></h2>
				</div>
				<div class="header-logo">
					<h2 class="logo"><a class="links" id="showlog" title="log"><span class="logo-title">Protokoll</span></a></h2>
				</div>
			</div>
		</header>
		<div class="layout-content">
			<div class="container">
				<article class="article" id="article">
					<div class="article-box">
						<div style="text-align: center;color:#9ca2a8">
							Ich bin eine Chat-KI<br/>
						</div>
						<div class="precast-block" data-flex="main:left">
							<div class="input-group">
								<span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;Kontinuierlicher Dialog：</span>
								<input type="checkbox" id="keep"  checked style="min-width:220px;">
								<label for="keep"></label>
								<span style="text-align: center;color:#9ca2a8">&nbsp;&nbsp;&nbsp;&nbsp;Wenn dies aktiviert ist, beantwortet die KI deine Frage mit der folgenden Konversationsnachricht als Kontext.</span>
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
									<input type="text" name="kw-target" placeholder="Was kann ich für dich Beantworten?" id="kw-target" autofocus>
								</div>
								<div class="right-btn layout-bar">
									<p class="btn ai-btn bright-btn" id="ai-btn"  data-flex="main:center cross:center"><i class="iconfont icon-wuguan"></i>Senden</p>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
  <script src="js/jquery.cookie.min.js"></script>
  <script src="js/layer.min.js" type="application/javascript"></script>
	<script src="js/chat.js?v2.8"></script>
</body>

</html>

