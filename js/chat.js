
/*
//Timer*/
var contextarray = [];
$(document).ready(function () {
    
    $("#kw-target").on('keydown', function (event) {
        if (event.keyCode == 13) {
            send_post();
            return false;
        }
    });
    $("#ai-btn").click(function () {
        send_post();
        return false;
    });
    $("#clean").click(function () {
        $("#article-wrapper").html("");
        contextarray = [];
        layer.msg("Die Freigabe ist abgeschlossen!");
        return false;
    });
    $("#showlog").click(function () {
    		let btnArry = ['Zum lesen'];
        layer.open({<!-- -->
            type: 1
            ,title: 'Vollständiges Gesprächsprotokoll'
            ,area: ['80%', '80%']
            ,shade: 0.5
            ,scrollbar: true
            ,offset: [
                ($(window).height() * 0.1)
                ,($(window).width() * 0.1)
            ]
            ,content: '<iframe src="chat.txt?' + new Date().getTime()+ '" style="width: 100%; height: 100%;"></iframe>'
            ,btn: btnArry
        });
        return false;
    });
    
    function articlewrapper(question,answer,str){
        $("#article-wrapper").append('<li class="article-title" id="q'+answer+'"><pre></pre></li>');
        let str_ = ''
        let i = 0
        let timer = setInterval(()=>{
            if(str_.length<question.length){
                str_ += question[i++]
                $("#q"+answer).children('pre').text(str_+'_')//Cursor beim Drucken hinzufügen
            }else{
                clearInterval(timer)
                $("#q"+answer).children('pre').text(str_)//Cursor beim Drucken hinzufügen
            }
        },1)
        $("#article-wrapper").append('<li class="article-content" id="'+answer+'"><pre></pre></li>');
          if(str == null || str == ""){
              str="Wenn die Antwort des Servers eine gewisse Zeit in Anspruch nimmt, können Sie es zu einem späteren Zeitpunkt noch einmal versuchen.";
          }
        let str2_ = ''
        let i2 = 0
        let timer2 = setInterval(()=>{
            if(str2_.length<str.length){
                str2_ += str[i2++]
                $("#"+answer).children('pre').text(str2_+'_')//Cursor beim Drucken hinzufügen
            }else{
                clearInterval(timer2)
                $("#"+answer).children('pre').text(str2_)//Cursor beim Drucken hinzufügen
		
            }
        },5)
    }
    
    function send_post() {

        var prompt = $("#kw-target").val();
        if (prompt == "") {
            layer.msg("Bitte stelle deine Frage", { icon: 5 });
            return;
        }

        var loading = layer.msg('Bitte warten Sie einen Moment', {
            icon: 16,
            shade: 0.4,
            time:false //Abbrechen Automatisch schließen
        });
        $.ajax({
            cache: true,
            type: "POST",
            url: "message.php",
            data: {
                message: prompt,
                context:$("#keep").prop("checked")?JSON.stringify(contextarray):'[]',
            },
            dataType: "json",
            success: function (results) {
                layer.close(loading);
                $("#kw-target").val("");
                layer.msg("Bearbeitung erfolgreich!");
                contextarray.push([prompt, results.raw_message]);
                articlewrapper("Du： "+prompt,randomString(16),"KI: "+results.raw_message);
            }
        });
    }

    function randomString(len) {
        len = len || 32;
        var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678';    /****Verwirrende Zeichen werden standardmäßig entferntoOLl,9gq,Vv,Uu,I1****/
        var maxPos = $chars.length;
        var pwd = '';
        for (i = 0; i < len; i++) {
            pwd += $chars.charAt(Math.floor(Math.random() * maxPos));
        }
        return pwd;
    }
});
