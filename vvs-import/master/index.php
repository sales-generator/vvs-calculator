<!doctype html>
<!--channel=release-->
<html>
<head>
<meta charset="utf-8">
<title>Подбор товара для импортозамещения</title>
<link href='css/reset.css' rel='stylesheet' type='text/css'>
<style type="text/css">
body {
	width: 100%;
	height:  100%;
	background-color: black;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	line-height: normal;
	overflow: hidden;
}
a {
	color: #ecf0f1;
	text-decoration: underline;
}
p {
	margin: 5px;
}
#wrapper {
	width: 510px;
	height: 420px;
	background-color: #ecf0f1;
	color: #2c3e50;
	position: absolute;
}
.head {
	background-color: #3498db;
	color: #ecf0f1;
	font-size: 120%;
	text-align: left;
}
.head-text {
	padding: 10px 10px 10px 160px;
	background-image: url(img/vvs-logo.png);
	background-repeat: no-repeat;
	background-position: 25px 50%;
	background-size: 100px;
}
.head-text-zimport {
	padding: 10px 10px 10px 260px;
	background-image: url(img/vvs-logo+zimport.png);
	background-repeat: no-repeat;
	background-position: 25px 50%;
	background-size: 210px;
}
.block {
	margin: 10px 25px;
}
.tnved {
	float: right;
	width: 150px;
}
.input {
	height: 35px;
	text-align: center;
	font-size: 120%;
	border: 2px solid #3498db;
	position: relative;
	z-index: 10;
}
.help {
	margin: 2px 0px 0px 295px;
	padding: 3px;
	text-align: center;
	text-decoration: underline;
	cursor: pointer;
}
.block-label {
	text-align: center;
	margin: 0px 0px 15px 0px;
}
input[type="radio"]{
	display: none;
}
.company-label{
	display: block;
}
input[type="radio"]:checked+label{
	background: #2ecc71;
}
.button {
	cursor: pointer;
	color: #ecf0f1;
	text-align: center;
	font-size: 120%;
	padding: 10px 50px;
	background-color: #3498db;
	transition: background-color .25s;
	position: relative;
	z-index: 10;
}
.button:hover {
	background-color: #2980b9;
}
.button:active {
	background-color: #2ecc71;
}
.mail {
	width: calc(100% - 6px);
	margin-bottom: 15px;
}
.window {
	width: 350px;
	height: 250px;
	margin: 50px;
	padding: 25px;
	color: #ecf0f1;
	position: absolute;
	top: 0px;
	box-shadow: 0px 0px 500px #2c3e50;
	z-index: 100;
}
.info {
	background-color: #3498db;
}
.info-button {
	background-color: #2980b9;
}
.error {
	background-color: #e74c3c;
}
.error-button {
	background-color: #c0392b;
}
.sucess {
	background-color: #2ecc71;
	height: 285px;
}
.sucess-button {
	background-color: #27ae60;
}
.window-heading {
	font-size: 120%;
	margin-bottom: 15px;
}
.window-text {
	text-indent: 25px;
}
.window-control {
	height: 50px;
	width: calc(100% - 50px);
	margin-bottom: 25px;
	text-align: center;
	line-height: 50px;
	cursor: pointer;
	position: absolute;
	bottom: 0;
}
.hidden {
	display: none;
}
#step-button {
	padding: 40px 40px;
}
.window-phone {
	text-align: center;
	font-size: 120%;
	text-indent: 0;
}
</style>
</head>

<body>
	<!--обертка-->
	<div id="wrapper">
		<!--шапка-->
		<div class="head">
			<div class="

<?php
$src = $_GET['src'];
if ($_GET['src'] == zimport) {
    echo "head-text-zimport";
} else {
    echo "head-text";
}
?>

			">ПОДБОР ТОВАРА,<br>

<?php
$src = $_GET['src'];
if ($_GET['src'] == zimport) {
    echo "";
} else {
    echo "выгодного";
}
?>

для импортозамещения</div>
		</div>
		<!--тело-->
		<div class="main">
			<form id="vvs-import" action="" method="post">
				<input name="source_site" value="<?php echo $_GET['src']?>" type="hidden"/>
				<div class="block">
					<input class="tnved input" type="text" name="tnved-search" id="tnved-search" value="" placeholder="••••">
					<label class="tnved-label" for="label-tnved">Введите позицию ТН ВЭД товара, производимого вами (4 знака)</label>
					<div class="help" onclick="$('#window-info').fadeIn(500);">Помощь по ТН ВЭД</div>
				</div>

				<?php
				$src = $_GET['src'];
				if ($_GET['src'] == zimport) {
				    echo "<div id=\"step\">";
				} elseif ($_GET['src'] == vvs-info) {
				    echo "<div id=\"step\">";
				} else {
				    echo "";
				}
				?>

				<div class="block" style="height: 80px;">
					<div class="block-label">Выберите категорию вашего бизнеса</div>

					<input type="radio" name="company-size" id="small-medium" value="Маленькая или средняя">
					<label class="company-label button" style="float: left;" for="small-medium">Малый \ Средний</label>

					<input type="radio" name="company-size" id="big" value="Крупная">
					<label class="company-label button" style="float: right;" for="big">Крупный</label>
				</div>

				<div <?php
				$src = $_GET['src'];
				if ($_GET['src'] == zimport) {
				    echo "";
				} elseif ($_GET['src'] == vvs-info) {
				    echo "";
				} else {
				    echo "id=\"step\"";
				}
				?> class="block">
					<div id="step-button" class="button">Получите название товара, оптимального для импортозамещения вашим предприятием</div>
				</div>

				<?php
				$src = $_GET['src'];
				if ($_GET['src'] == zimport) {
						echo "</div>";
				} elseif ($_GET['src'] == vvs-info) {
						echo "</div>";
				} else {
						echo "";
				}
				?>

				<div id="next" class="block hidden">
					<div class="block-label" style="margin-bottom: 2px;">Укажите адрес вашей электронной почты, куда будут высланы результаты подбора товара.</div>
					<input <?php
					$src = $_GET['src'];
					if ($_GET['src'] == zimport) {
							echo "style=\"margin-bottom: 2px;\" ";
					} elseif ($_GET['src'] == vvs-info) {
							echo "style=\"margin-bottom: 2px;\" ";
					} else {
							echo "";
					}
					?>id="email" class="mail input"type="text" name="email" value="" placeholder="Ваш email адрес">
					<?php
					$src = $_GET['src'];
					if ($_GET['src'] == zimport) {
					    echo "
					      <div style=\"margin-bottom: 2px;\" class=\"block-label\">Укажите ваш телефон.</div>
					      <input style=\"margin-bottom: 2px;\" id=\"phone\" class=\"mail input \"type=\"text\" name=\"phone\" value=\"\" placeholder=\"Ваш телефон\">
					      <div class=\"block-label\" style=\"color: #95a5a6; font-style: italic; margin-bottom: 2px;\">Сервис носит информационный характер, не требует оплаты и не является СМИ. Номера телефонов не используются для рассылок.</div>";
					} elseif ($_GET['src'] == vvs-info) {
					    echo "
					      <div style=\"margin-bottom: 2px;\" class=\"block-label\">Укажите ваш телефон.</div>
					      <input style=\"margin-bottom: 2px;\" id=\"phone\" class=\"mail input \"type=\"text\" name=\"phone\" value=\"\" placeholder=\"Ваш телефон\">
					      <div class=\"block-label\" style=\"color: #95a5a6; font-style: italic; margin-bottom: 2px;\">Сервис носит информационный характер, не требует оплаты и не является СМИ. Номера телефонов не используются для рассылок.</div>";
					} else {
					    echo "";
					}
					?>
					<div id="complete" class="button">Получить результат подбора товара</div>
				</div>

			</form>
		</div>
		<!--ошибка ввода тн вэд-->
		<div id="tnved-error" class="hidden">
			<div style="height: 50px; background-color: #e74c3c; position: absolute; top: 73px; color: #ecf0f1; width: 100%; line-height: 50px; text-indent: 25px;">Позиция состоит строго из 4 цифр!</div>
		</div>
		<!--ошибка выбора компании-->
		<div id="company-error" class="hidden">
			<div style="height: 90px; background-color: #e74c3c; position: absolute; top: 150px; width: 100%; text-align: center; line-height: 41px; color: #ecf0f1; z-index: 1;">Необходимо выбрать размер компании!</div>
	  </div>
		<!--ошибка ввода мыла-->
		<div id="mail-error" class="hidden">
			<div style="height: 90px; background-color: #e74c3c; position: absolute; top: <?php
			$src = $_GET['src'];
			if ($_GET['src'] == zimport) {
					echo "160";
			} elseif ($_GET['src'] == vvs-info) {
					echo "160";
			} else {
					echo "260";
			}
			?>px; width: 100%; text-align: center; line-height: 40px; color: #ecf0f1; z-index: 1;">Необходимо ввести корректный адрес электронной почты!</div>
	  </div>
		<?php
		$src = $_GET['src'];
		if ($_GET['src'] == zimport) {
		    echo "<!--ошибка выбора компании-->
				<div id=\"phone-error\" class=\"hidden\">
					<div style=\"height: 90px; background-color: #e74c3c; position: absolute; top: 230px; width: 100%; text-align: center; line-height: 41px; color: #ecf0f1; z-index: 1;\">Необходимо ввести корректный телефонный номер!</div>
			  </div>";
		} elseif ($_GET['src'] == vvs-info) {
		    echo "<!--ошибка выбора компании-->
				<div id=\"phone-error\" class=\"hidden\">
					<div style=\"height: 90px; background-color: #e74c3c; position: absolute; top: 230px; width: 100%; text-align: center; line-height: 41px; color: #ecf0f1; z-index: 1;\">Необходимо ввести корректный телефонный номер!</div>
			  </div>";
		} else {
		    echo "";
		}
		?>
		<!--окно помощи-->
		<div id="window-info" class="window info hidden" style="z-index: 100;">
			<div class="window-heading">Помощь</div>
			<div class="window-text">
				<p>Позиция ТН ВЭД представляет собой первые четыре цифры самого кода.</p>
				<p>Для поиска позиции ТН ВЭД воспользуйтесь <a href="http://www.alta.ru/tnved/" target="_blank">онлайн-сервисом</a>.</p>
		    </div>
			<div class="window-control info-button" onclick="$('#window-info').fadeOut(500);">Закрыть</div>
		</div>
		<!--окно ошибки-->
		<div id="window-error" class="window error hidden">
			<div class="window-heading"><!--Ошибка--></div>
			<div class="window-text" id="result_counter"><!-- правки от 20160802-->
				<!--<p>В рамках Вашей товарной позиции по итогу 1 квартала 2016 года нет импортных товаров, на которые существует устойчивый спрос. Введите иную позицию или запросите поиск товара в нашей компании по телефону</p>
				<p class="window-phone">8 800 555 3420</p>-->
		    </div>
			<div class="window-control error-button" onclick="$('#window-sucess').fadeOut(500); location.reload();">Закрыть</div>
		</div>
		<!--окно выполнения-->
		<div id="window-sucess" class="window sucess hidden">
			<!--<div class="window-heading">Успешно</div>-->
			<div class="window-text">
				<p>Мы подобрали для Вас товары для выгодного импортозамещения. Посмотрите почту, там список товаров.</p>
				<p>P.S. Если Ваш ящик находится на mail.ru, то для получения писем от нас добавьте адрес inbox@vvs-info.ru в записную книгу. Как это сделать Вы можете узнать <a href="https://help.mail.ru/mail-help/ab/add_cont" target="_blank">здесь</a>.</p>
				<p>P.P.S. Если письма нет в течение 10 минут, позвоните по бесплатному телефону</p>
				<p class="window-phone">
<?php
$src = $_GET['src'];
if ($_GET['src'] == zimport) {
    echo "8 800 555 3420<br>или +7 916 658 28 59";
} else {
    echo "8 800 555 3420";
}
?></p>
		    </div>
			<div class="window-control sucess-button" onclick="$('#window-sucess').fadeOut(500); location.reload();">Закрыть</div>
		</div>
	</div>
<!-- Google-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51665687-1', 'vvs-info.ru');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<!-- Google end -->
<!-- Yandex -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter25189487 = new Ya.Metrika({id:25189487,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/25189487" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- Yandex end -->
</body>
</html>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
//скрипт только чисел для поля
  document.getElementById("tnved-search").onkeypress = function(e) {

    e = e || event;

    if (e.ctrlKey || e.altKey || e.metaKey) return;

    var chr = getChar(e);

    // с null надо осторожно в неравенствах, т.к. например null >= '0' => true!
    // на всякий случай лучше вынести проверку chr == null отдельно
    if (chr == null) return;

    if (chr < '0' || chr > '9') {
      return false;
    }

  }

  function getChar(event) {
    if (event.which == null) {
      if (event.keyCode < 32) return null;
      return String.fromCharCode(event.keyCode) // IE
    }

    if (event.which != 0 && event.charCode != 0) {
      if (event.which < 32) return null;
      return String.fromCharCode(event.which) // остальные
    }

    return null; // специальная клавиша
  }
//скрипт только чисел для поля
</script>
<script>
$('#tnved-search').keyup( function() {
        var $this = $(this);
        if($this.val().length > 4)
            $this.val($this.val().substr(0, 4));
    });
</script>
<script>
//Обработчик формы с проверкой
  $('#step-button').click(function(e){ //обработка формы для ее проверки и отправки
    e.preventDefault(); //блокируем оригинальную возможность отправки
    var error = false; //присваиваем переменной ошибок чистый статус

    var tnvedpos_check = $('#tnved-search').val(); //присваиваем переменную полю поиска

    if(tnvedpos_check.length < 4){ //обработка менее 4 знаков
      var error = true;
      $('#tnved-error').fadeIn(500);
    }else if (tnvedpos_check.length > 4){ //обработка более 4 знаков
      var error = true;
      $('#tnved-error').fadeIn(500);
    }else { //обработка все хорошо
      $('#tnved-error').fadeOut(500); // прячем ошибку
    };

    var radio_check_smamed = $("#small-medium").prop("checked");
		var radio_check_big = $("#big").prop("checked");

    if(radio_check_smamed == true){
			$('#company-error').fadeOut(500);
    }else {
      if (radio_check_big == true) {
      	$('#company-error').fadeOut(500);
      }else {
				var error = true;
				$('#company-error').fadeIn(500);
      }
    };

    if(error == false){ // если все без ошибок продолжаем
      //$.post("php/check.php", $("#vvs-import").serialize(),function(result){ //формируем POST запрос
        //if(result == 'yes'){ //при получении положительного ответа показываем дальнейшие шаги
          //$('#window-error').fadeOut(500);
					$('#step').fadeOut(500);
          setTimeout("$('#next').fadeIn(500)",500); // показываем поле для email и кнопку финальной отправки
        //}else{ // выводим ошибку не найдено
          //$('#window-error').fadeIn(500);
        //}
      //});
    }
  });
//Обработчик формы с проверкой
</script>
<script>
//Обработчик всей формы
  $('#complete').click(function(e){ //обработка формы для ее проверки и отправки
    e.preventDefault(); //блокируем оригинальную возможность отправки
    var error = false; //присваиваем переменной ошибок чистый статус
		var email_input = $('#email').val();
		var phone_input = $('#phone').val();

		if(email_input.length < 5){
			var error = true;
			$('#mail-error').fadeIn(500);
			//Ошибко
		}else {
			$('#mail-error').fadeOut(500);
			//нет ошибко
		}

		<?php
		$src = $_GET['src'];
		if ($_GET['src'] == zimport) {
		    echo "		if(phone_input.length < 7){
		    			var error = true;
		    			$('#phone-error').fadeIn(500);
		    			//Ошибко
		    		}else {
		    			$('#phone-error').fadeOut(500);
		    			//нет ошибко
		    		}";
		} else {
		    echo "";
		}
		?>

    if(error == false){ // если все без ошибок продолжаем
      $.post("php/search.php", $("#vvs-import").serialize(),function(result){ //формируем POST запрос
        if(result == 'yes'){ //при получении положительного ответа показываем дальнейшие шаги
          //да
					$('#window-sucess').fadeIn(500);

        }else{ // выводим ошибку не найдено
          //нет
					//$('#all-failure').fadeIn(500);
					$('#window-error').fadeIn(500);
					//$("#result_counter").post("php/search_failed.php", $("#vvs-import").serialize());// правки от 20160802
					$("#result_counter").replaceWith(result);
        }
      });
    }
  });
//Обработчик всей формы
</script>
<?php
$src = $_GET['src'];
if ($_GET['src'] == zimport) {
	echo "<script>
	//обработчик телефона
	/*
	    jQuery Masked Input Plugin
	    Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
	    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	    Version: 1.4.1
	*/
	!function(factory) {
	    \"function\" == typeof define && define.amd ? define([ \"jquery\" ], factory) : factory(\"object\" == typeof exports ? require(\"jquery\") : jQuery);
	}(function($) {
	    var caretTimeoutId, ua = navigator.userAgent, iPhone = /iphone/i.test(ua), chrome = /chrome/i.test(ua), android = /android/i.test(ua);
	    $.mask = {
	        definitions: {
	            \"9\": \"[0-9]\",
	            a: \"[A-Za-z]\",
	            \"*\": \"[A-Za-z0-9]\"
	        },
	        autoclear: !0,
	        dataName: \"rawMaskFn\",
	        placeholder: \"_\"
	    }, $.fn.extend({
	        caret: function(begin, end) {
	            var range;
	            if (0 !== this.length && !this.is(\":hidden\")) return \"number\" == typeof begin ? (end = \"number\" == typeof end ? end : begin,
	            this.each(function() {
	                this.setSelectionRange ? this.setSelectionRange(begin, end) : this.createTextRange && (range = this.createTextRange(),
	                range.collapse(!0), range.moveEnd(\"character\", end), range.moveStart(\"character\", begin),
	                range.select());
	            })) : (this[0].setSelectionRange ? (begin = this[0].selectionStart, end = this[0].selectionEnd) : document.selection && document.selection.createRange && (range = document.selection.createRange(),
	            begin = 0 - range.duplicate().moveStart(\"character\", -1e5), end = begin + range.text.length),
	            {
	                begin: begin,
	                end: end
	            });
	        },
	        unmask: function() {
	            return this.trigger(\"unmask\");
	        },
	        mask: function(mask, settings) {
	            var input, defs, tests, partialPosition, firstNonMaskPos, lastRequiredNonMaskPos, len, oldVal;
	            if (!mask && this.length > 0) {
	                input = $(this[0]);
	                var fn = input.data($.mask.dataName);
	                return fn ? fn() : void 0;
	            }
	            return settings = $.extend({
	                autoclear: $.mask.autoclear,
	                placeholder: $.mask.placeholder,
	                completed: null
	            }, settings), defs = $.mask.definitions, tests = [], partialPosition = len = mask.length,
	            firstNonMaskPos = null, $.each(mask.split(\"\"), function(i, c) {
	                \"?\" == c ? (len--, partialPosition = i) : defs[c] ? (tests.push(new RegExp(defs[c])),
	                null === firstNonMaskPos && (firstNonMaskPos = tests.length - 1), partialPosition > i && (lastRequiredNonMaskPos = tests.length - 1)) : tests.push(null);
	            }), this.trigger(\"unmask\").each(function() {
	                function tryFireCompleted() {
	                    if (settings.completed) {
	                        for (var i = firstNonMaskPos; lastRequiredNonMaskPos >= i; i++) if (tests[i] && buffer[i] === getPlaceholder(i)) return;
	                        settings.completed.call(input);
	                    }
	                }
	                function getPlaceholder(i) {
	                    return settings.placeholder.charAt(i < settings.placeholder.length ? i : 0);
	                }
	                function seekNext(pos) {
	                    for (;++pos < len && !tests[pos]; ) ;
	                    return pos;
	                }
	                function seekPrev(pos) {
	                    for (;--pos >= 0 && !tests[pos]; ) ;
	                    return pos;
	                }
	                function shiftL(begin, end) {
	                    var i, j;
	                    if (!(0 > begin)) {
	                        for (i = begin, j = seekNext(end); len > i; i++) if (tests[i]) {
	                            if (!(len > j && tests[i].test(buffer[j]))) break;
	                            buffer[i] = buffer[j], buffer[j] = getPlaceholder(j), j = seekNext(j);
	                        }
	                        writeBuffer(), input.caret(Math.max(firstNonMaskPos, begin));
	                    }
	                }
	                function shiftR(pos) {
	                    var i, c, j, t;
	                    for (i = pos, c = getPlaceholder(pos); len > i; i++) if (tests[i]) {
	                        if (j = seekNext(i), t = buffer[i], buffer[i] = c, !(len > j && tests[j].test(t))) break;
	                        c = t;
	                    }
	                }
	                function androidInputEvent() {
	                    var curVal = input.val(), pos = input.caret();
	                    if (oldVal && oldVal.length && oldVal.length > curVal.length) {
	                        for (checkVal(!0); pos.begin > 0 && !tests[pos.begin - 1]; ) pos.begin--;
	                        if (0 === pos.begin) for (;pos.begin < firstNonMaskPos && !tests[pos.begin]; ) pos.begin++;
	                        input.caret(pos.begin, pos.begin);
	                    } else {
	                        for (checkVal(!0); pos.begin < len && !tests[pos.begin]; ) pos.begin++;
	                        input.caret(pos.begin, pos.begin);
	                    }
	                    tryFireCompleted();
	                }
	                function blurEvent() {
	                    checkVal(), input.val() != focusText && input.change();
	                }
	                function keydownEvent(e) {
	                    if (!input.prop(\"readonly\")) {
	                        var pos, begin, end, k = e.which || e.keyCode;
	                        oldVal = input.val(), 8 === k || 46 === k || iPhone && 127 === k ? (pos = input.caret(),
	                        begin = pos.begin, end = pos.end, end - begin === 0 && (begin = 46 !== k ? seekPrev(begin) : end = seekNext(begin - 1),
	                        end = 46 === k ? seekNext(end) : end), clearBuffer(begin, end), shiftL(begin, end - 1),
	                        e.preventDefault()) : 13 === k ? blurEvent.call(this, e) : 27 === k && (input.val(focusText),
	                        input.caret(0, checkVal()), e.preventDefault());
	                    }
	                }
	                function keypressEvent(e) {
	                    if (!input.prop(\"readonly\")) {
	                        var p, c, next, k = e.which || e.keyCode, pos = input.caret();
	                        if (!(e.ctrlKey || e.altKey || e.metaKey || 32 > k) && k && 13 !== k) {
	                            if (pos.end - pos.begin !== 0 && (clearBuffer(pos.begin, pos.end), shiftL(pos.begin, pos.end - 1)),
	                            p = seekNext(pos.begin - 1), len > p && (c = String.fromCharCode(k), tests[p].test(c))) {
	                                if (shiftR(p), buffer[p] = c, writeBuffer(), next = seekNext(p), android) {
	                                    var proxy = function() {
	                                        $.proxy($.fn.caret, input, next)();
	                                    };
	                                    setTimeout(proxy, 0);
	                                } else input.caret(next);
	                                pos.begin <= lastRequiredNonMaskPos && tryFireCompleted();
	                            }
	                            e.preventDefault();
	                        }
	                    }
	                }
	                function clearBuffer(start, end) {
	                    var i;
	                    for (i = start; end > i && len > i; i++) tests[i] && (buffer[i] = getPlaceholder(i));
	                }
	                function writeBuffer() {
	                    input.val(buffer.join(\"\"));
	                }
	                function checkVal(allow) {
	                    var i, c, pos, test = input.val(), lastMatch = -1;
	                    for (i = 0, pos = 0; len > i; i++) if (tests[i]) {
	                        for (buffer[i] = getPlaceholder(i); pos++ < test.length; ) if (c = test.charAt(pos - 1),
	                        tests[i].test(c)) {
	                            buffer[i] = c, lastMatch = i;
	                            break;
	                        }
	                        if (pos > test.length) {
	                            clearBuffer(i + 1, len);
	                            break;
	                        }
	                    } else buffer[i] === test.charAt(pos) && pos++, partialPosition > i && (lastMatch = i);
	                    return allow ? writeBuffer() : partialPosition > lastMatch + 1 ? settings.autoclear || buffer.join(\"\") === defaultBuffer ? (input.val() && input.val(\"\"),
	                    clearBuffer(0, len)) : writeBuffer() : (writeBuffer(), input.val(input.val().substring(0, lastMatch + 1))),
	                    partialPosition ? i : firstNonMaskPos;
	                }
	                var input = $(this), buffer = $.map(mask.split(\"\"), function(c, i) {
	                    return \"?\" != c ? defs[c] ? getPlaceholder(i) : c : void 0;
	                }), defaultBuffer = buffer.join(\"\"), focusText = input.val();
	                input.data($.mask.dataName, function() {
	                    return $.map(buffer, function(c, i) {
	                        return tests[i] && c != getPlaceholder(i) ? c : null;
	                    }).join(\"\");
	                }), input.one(\"unmask\", function() {
	                    input.off(\".mask\").removeData($.mask.dataName);
	                }).on(\"focus.mask\", function() {
	                    if (!input.prop(\"readonly\")) {
	                        clearTimeout(caretTimeoutId);
	                        var pos;
	                        focusText = input.val(), pos = checkVal(), caretTimeoutId = setTimeout(function() {
	                            input.get(0) === document.activeElement && (writeBuffer(), pos == mask.replace(\"?\", \"\").length ? input.caret(0, pos) : input.caret(pos));
	                        }, 10);
	                    }
	                }).on(\"blur.mask\", blurEvent).on(\"keydown.mask\", keydownEvent).on(\"keypress.mask\", keypressEvent).on(\"input.mask paste.mask\", function() {
	                    input.prop(\"readonly\") || setTimeout(function() {
	                        var pos = checkVal(!0);
	                        input.caret(pos), tryFireCompleted();
	                    }, 0);
	                }), chrome && android && input.off(\"input.mask\").on(\"input.mask\", androidInputEvent),
	                checkVal();
	            });
	        }
	    });
	});
	</script>
	<script type=\"text/javascript\">
	jQuery(function($){
	   $(\"#phone\").mask(\"+7 (999) 999-9999\",{placeholder:\"X\"});
	});
	</script>";
} elseif ($_GET['src'] == vvs-info) {
	echo "<script>
	//обработчик телефона
	/*
	    jQuery Masked Input Plugin
	    Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
	    Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
	    Version: 1.4.1
	*/
	!function(factory) {
	    \"function\" == typeof define && define.amd ? define([ \"jquery\" ], factory) : factory(\"object\" == typeof exports ? require(\"jquery\") : jQuery);
	}(function($) {
	    var caretTimeoutId, ua = navigator.userAgent, iPhone = /iphone/i.test(ua), chrome = /chrome/i.test(ua), android = /android/i.test(ua);
	    $.mask = {
	        definitions: {
	            \"9\": \"[0-9]\",
	            a: \"[A-Za-z]\",
	            \"*\": \"[A-Za-z0-9]\"
	        },
	        autoclear: !0,
	        dataName: \"rawMaskFn\",
	        placeholder: \"_\"
	    }, $.fn.extend({
	        caret: function(begin, end) {
	            var range;
	            if (0 !== this.length && !this.is(\":hidden\")) return \"number\" == typeof begin ? (end = \"number\" == typeof end ? end : begin,
	            this.each(function() {
	                this.setSelectionRange ? this.setSelectionRange(begin, end) : this.createTextRange && (range = this.createTextRange(),
	                range.collapse(!0), range.moveEnd(\"character\", end), range.moveStart(\"character\", begin),
	                range.select());
	            })) : (this[0].setSelectionRange ? (begin = this[0].selectionStart, end = this[0].selectionEnd) : document.selection && document.selection.createRange && (range = document.selection.createRange(),
	            begin = 0 - range.duplicate().moveStart(\"character\", -1e5), end = begin + range.text.length),
	            {
	                begin: begin,
	                end: end
	            });
	        },
	        unmask: function() {
	            return this.trigger(\"unmask\");
	        },
	        mask: function(mask, settings) {
	            var input, defs, tests, partialPosition, firstNonMaskPos, lastRequiredNonMaskPos, len, oldVal;
	            if (!mask && this.length > 0) {
	                input = $(this[0]);
	                var fn = input.data($.mask.dataName);
	                return fn ? fn() : void 0;
	            }
	            return settings = $.extend({
	                autoclear: $.mask.autoclear,
	                placeholder: $.mask.placeholder,
	                completed: null
	            }, settings), defs = $.mask.definitions, tests = [], partialPosition = len = mask.length,
	            firstNonMaskPos = null, $.each(mask.split(\"\"), function(i, c) {
	                \"?\" == c ? (len--, partialPosition = i) : defs[c] ? (tests.push(new RegExp(defs[c])),
	                null === firstNonMaskPos && (firstNonMaskPos = tests.length - 1), partialPosition > i && (lastRequiredNonMaskPos = tests.length - 1)) : tests.push(null);
	            }), this.trigger(\"unmask\").each(function() {
	                function tryFireCompleted() {
	                    if (settings.completed) {
	                        for (var i = firstNonMaskPos; lastRequiredNonMaskPos >= i; i++) if (tests[i] && buffer[i] === getPlaceholder(i)) return;
	                        settings.completed.call(input);
	                    }
	                }
	                function getPlaceholder(i) {
	                    return settings.placeholder.charAt(i < settings.placeholder.length ? i : 0);
	                }
	                function seekNext(pos) {
	                    for (;++pos < len && !tests[pos]; ) ;
	                    return pos;
	                }
	                function seekPrev(pos) {
	                    for (;--pos >= 0 && !tests[pos]; ) ;
	                    return pos;
	                }
	                function shiftL(begin, end) {
	                    var i, j;
	                    if (!(0 > begin)) {
	                        for (i = begin, j = seekNext(end); len > i; i++) if (tests[i]) {
	                            if (!(len > j && tests[i].test(buffer[j]))) break;
	                            buffer[i] = buffer[j], buffer[j] = getPlaceholder(j), j = seekNext(j);
	                        }
	                        writeBuffer(), input.caret(Math.max(firstNonMaskPos, begin));
	                    }
	                }
	                function shiftR(pos) {
	                    var i, c, j, t;
	                    for (i = pos, c = getPlaceholder(pos); len > i; i++) if (tests[i]) {
	                        if (j = seekNext(i), t = buffer[i], buffer[i] = c, !(len > j && tests[j].test(t))) break;
	                        c = t;
	                    }
	                }
	                function androidInputEvent() {
	                    var curVal = input.val(), pos = input.caret();
	                    if (oldVal && oldVal.length && oldVal.length > curVal.length) {
	                        for (checkVal(!0); pos.begin > 0 && !tests[pos.begin - 1]; ) pos.begin--;
	                        if (0 === pos.begin) for (;pos.begin < firstNonMaskPos && !tests[pos.begin]; ) pos.begin++;
	                        input.caret(pos.begin, pos.begin);
	                    } else {
	                        for (checkVal(!0); pos.begin < len && !tests[pos.begin]; ) pos.begin++;
	                        input.caret(pos.begin, pos.begin);
	                    }
	                    tryFireCompleted();
	                }
	                function blurEvent() {
	                    checkVal(), input.val() != focusText && input.change();
	                }
	                function keydownEvent(e) {
	                    if (!input.prop(\"readonly\")) {
	                        var pos, begin, end, k = e.which || e.keyCode;
	                        oldVal = input.val(), 8 === k || 46 === k || iPhone && 127 === k ? (pos = input.caret(),
	                        begin = pos.begin, end = pos.end, end - begin === 0 && (begin = 46 !== k ? seekPrev(begin) : end = seekNext(begin - 1),
	                        end = 46 === k ? seekNext(end) : end), clearBuffer(begin, end), shiftL(begin, end - 1),
	                        e.preventDefault()) : 13 === k ? blurEvent.call(this, e) : 27 === k && (input.val(focusText),
	                        input.caret(0, checkVal()), e.preventDefault());
	                    }
	                }
	                function keypressEvent(e) {
	                    if (!input.prop(\"readonly\")) {
	                        var p, c, next, k = e.which || e.keyCode, pos = input.caret();
	                        if (!(e.ctrlKey || e.altKey || e.metaKey || 32 > k) && k && 13 !== k) {
	                            if (pos.end - pos.begin !== 0 && (clearBuffer(pos.begin, pos.end), shiftL(pos.begin, pos.end - 1)),
	                            p = seekNext(pos.begin - 1), len > p && (c = String.fromCharCode(k), tests[p].test(c))) {
	                                if (shiftR(p), buffer[p] = c, writeBuffer(), next = seekNext(p), android) {
	                                    var proxy = function() {
	                                        $.proxy($.fn.caret, input, next)();
	                                    };
	                                    setTimeout(proxy, 0);
	                                } else input.caret(next);
	                                pos.begin <= lastRequiredNonMaskPos && tryFireCompleted();
	                            }
	                            e.preventDefault();
	                        }
	                    }
	                }
	                function clearBuffer(start, end) {
	                    var i;
	                    for (i = start; end > i && len > i; i++) tests[i] && (buffer[i] = getPlaceholder(i));
	                }
	                function writeBuffer() {
	                    input.val(buffer.join(\"\"));
	                }
	                function checkVal(allow) {
	                    var i, c, pos, test = input.val(), lastMatch = -1;
	                    for (i = 0, pos = 0; len > i; i++) if (tests[i]) {
	                        for (buffer[i] = getPlaceholder(i); pos++ < test.length; ) if (c = test.charAt(pos - 1),
	                        tests[i].test(c)) {
	                            buffer[i] = c, lastMatch = i;
	                            break;
	                        }
	                        if (pos > test.length) {
	                            clearBuffer(i + 1, len);
	                            break;
	                        }
	                    } else buffer[i] === test.charAt(pos) && pos++, partialPosition > i && (lastMatch = i);
	                    return allow ? writeBuffer() : partialPosition > lastMatch + 1 ? settings.autoclear || buffer.join(\"\") === defaultBuffer ? (input.val() && input.val(\"\"),
	                    clearBuffer(0, len)) : writeBuffer() : (writeBuffer(), input.val(input.val().substring(0, lastMatch + 1))),
	                    partialPosition ? i : firstNonMaskPos;
	                }
	                var input = $(this), buffer = $.map(mask.split(\"\"), function(c, i) {
	                    return \"?\" != c ? defs[c] ? getPlaceholder(i) : c : void 0;
	                }), defaultBuffer = buffer.join(\"\"), focusText = input.val();
	                input.data($.mask.dataName, function() {
	                    return $.map(buffer, function(c, i) {
	                        return tests[i] && c != getPlaceholder(i) ? c : null;
	                    }).join(\"\");
	                }), input.one(\"unmask\", function() {
	                    input.off(\".mask\").removeData($.mask.dataName);
	                }).on(\"focus.mask\", function() {
	                    if (!input.prop(\"readonly\")) {
	                        clearTimeout(caretTimeoutId);
	                        var pos;
	                        focusText = input.val(), pos = checkVal(), caretTimeoutId = setTimeout(function() {
	                            input.get(0) === document.activeElement && (writeBuffer(), pos == mask.replace(\"?\", \"\").length ? input.caret(0, pos) : input.caret(pos));
	                        }, 10);
	                    }
	                }).on(\"blur.mask\", blurEvent).on(\"keydown.mask\", keydownEvent).on(\"keypress.mask\", keypressEvent).on(\"input.mask paste.mask\", function() {
	                    input.prop(\"readonly\") || setTimeout(function() {
	                        var pos = checkVal(!0);
	                        input.caret(pos), tryFireCompleted();
	                    }, 0);
	                }), chrome && android && input.off(\"input.mask\").on(\"input.mask\", androidInputEvent),
	                checkVal();
	            });
	        }
	    });
	});
	</script>
	<script type=\"text/javascript\">
	jQuery(function($){
	   $(\"#phone\").mask(\"+7 (999) 999-9999\",{placeholder:\"X\"});
	});
	</script>";
} else {
    echo "";
}
?>
