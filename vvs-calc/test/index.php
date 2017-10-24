<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
  <style>
  /* http://meyerweb.com/eric/tools/css/reset/
     v2.0 | 20110126
     License: none (public domain)
  */

  html, body, div, span, applet, object, iframe,
  h1, h2, h3, h4, h5, h6, p, blockquote, pre,
  a, abbr, acronym, address, big, cite, code,
  del, dfn, em, img, ins, kbd, q, s, samp,
  small, strike, strong, sub, sup, tt, var,
  b, u, i, center,
  dl, dt, dd, ol, ul, li,
  fieldset, form, label, legend,
  table, caption, tbody, tfoot, thead, tr, th, td,
  article, aside, canvas, details, embed,
  figure, figcaption, footer, header, hgroup,
  menu, nav, output, ruby, section, summary,
  time, mark, audio, video {
  	margin: 0;
  	padding: 0;
  	border: 0;
  	font-size: 100%;
  	font: inherit;
  	vertical-align: baseline;
  }
  /* HTML5 display-role reset for older browsers */
  article, aside, details, figcaption, figure,
  footer, header, hgroup, menu, nav, section {
  	display: block;
  }
  body {
  	line-height: 1;
  }
  ol, ul {
  	list-style: none;
  }
  blockquote, q {
  	quotes: none;
  }
  blockquote:before, blockquote:after,
  q:before, q:after {
  	content: '';
  	content: none;
  }
  table {
  	border-collapse: collapse;
  	border-spacing: 0;
  }
  </style>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////-->
  <style>
  body {
    width: 250px;
    height: 335px;
    color: #2c3e50;
    background-color: #ecf0f1;
    font-family: sans-serif;
    font-size: 14px;
  }
  header {
    color: #ecf0f1;
    background-color: #3498db;
    background-image: url(https://vvs-info.ru/widgets/vvs-import/master/img/vvs-logo.png);
    background-repeat: no-repeat;
    background-position: 5px;
    background-size: 25%;
    padding: 5px 5px 5px 80px;
    font-size: 18px;
  }
  section {
    padding: 5px;
    text-align: center;
  }
  section input {
    text-align: center;
  }
  section p {
    margin: 0px auto 5px auto;
  }
  #send {
    background-color: #3498db;
    color: #ecf0f1;
    padding: 5px;
    margin-top: 5px;
		cursor: pointer;
  }
  footer {
    font-size: 10px;
    text-align: center;
    background-color: #bdc3c7;
  }
	#error {
		display: none;
		width: 200px;
		height: 285px;
		background-color: #e74c3c;
		color: #ecf0f1;
		text-align: center;
		position: absolute;
		top: 0px;
		left: 0px;
		padding: 25px;
	}
	#error p {
		margin: 10px auto;
	}
  </style>
</head>
<!--///////////////////////////////////////////////////////////////////////////////////////////////////-->
<body>
  <header>
    <h1>Мониторинг <br>экспорта и импорта</h1>
  </header>
	<div id="error">
		<p id=text1 style="display: none;">Код ТН ВЭД должен состоять из 10 символов!</p>
		<p id=text2 style="display: none;">Вы должны выбрать направление торговли!</p>
		<p id=text3 style="display: none;">Вы должны указать корректный email!</p>
		<p id=text4 style="display: none;">
			<style media="screen">
			.windows8 {
				position: relative;
				width: 78px;
				height:78px;
				margin:auto;
				display: none;
			}

			.windows8 .wBall {
				position: absolute;
				width: 74px;
				height: 74px;
				opacity: 0;
				transform: rotate(225deg);
					-o-transform: rotate(225deg);
					-ms-transform: rotate(225deg);
					-webkit-transform: rotate(225deg);
					-moz-transform: rotate(225deg);
				animation: orbit 6.96s infinite;
					-o-animation: orbit 6.96s infinite;
					-ms-animation: orbit 6.96s infinite;
					-webkit-animation: orbit 6.96s infinite;
					-moz-animation: orbit 6.96s infinite;
			}

			.windows8 .wBall .wInnerBall{
				position: absolute;
				width: 10px;
				height: 10px;
				background: #ecf0f1/*rgb(0,0,0)*/;
				left:0px;
				top:0px;
				border-radius: 10px;
			}

			.windows8 #wBall_1 {
				animation-delay: 1.52s;
					-o-animation-delay: 1.52s;
					-ms-animation-delay: 1.52s;
					-webkit-animation-delay: 1.52s;
					-moz-animation-delay: 1.52s;
			}

			.windows8 #wBall_2 {
				animation-delay: 0.3s;
					-o-animation-delay: 0.3s;
					-ms-animation-delay: 0.3s;
					-webkit-animation-delay: 0.3s;
					-moz-animation-delay: 0.3s;
			}

			.windows8 #wBall_3 {
				animation-delay: 0.61s;
					-o-animation-delay: 0.61s;
					-ms-animation-delay: 0.61s;
					-webkit-animation-delay: 0.61s;
					-moz-animation-delay: 0.61s;
			}

			.windows8 #wBall_4 {
				animation-delay: 0.91s;
					-o-animation-delay: 0.91s;
					-ms-animation-delay: 0.91s;
					-webkit-animation-delay: 0.91s;
					-moz-animation-delay: 0.91s;
			}

			.windows8 #wBall_5 {
				animation-delay: 1.22s;
					-o-animation-delay: 1.22s;
					-ms-animation-delay: 1.22s;
					-webkit-animation-delay: 1.22s;
					-moz-animation-delay: 1.22s;
			}



			@keyframes orbit {
				0% {
					opacity: 1;
					z-index:99;
					transform: rotate(180deg);
					animation-timing-function: ease-out;
				}

				7% {
					opacity: 1;
					transform: rotate(300deg);
					animation-timing-function: linear;
					origin:0%;
				}

				30% {
					opacity: 1;
					transform:rotate(410deg);
					animation-timing-function: ease-in-out;
					origin:7%;
				}

				39% {
					opacity: 1;
					transform: rotate(645deg);
					animation-timing-function: linear;
					origin:30%;
				}

				70% {
					opacity: 1;
					transform: rotate(770deg);
					animation-timing-function: ease-out;
					origin:39%;
				}

				75% {
					opacity: 1;
					transform: rotate(900deg);
					animation-timing-function: ease-out;
					origin:70%;
				}

				76% {
				opacity: 0;
					transform:rotate(900deg);
				}

				100% {
				opacity: 0;
					transform: rotate(900deg);
				}
			}

			@-o-keyframes orbit {
				0% {
					opacity: 1;
					z-index:99;
					-o-transform: rotate(180deg);
					-o-animation-timing-function: ease-out;
				}

				7% {
					opacity: 1;
					-o-transform: rotate(300deg);
					-o-animation-timing-function: linear;
					-o-origin:0%;
				}

				30% {
					opacity: 1;
					-o-transform:rotate(410deg);
					-o-animation-timing-function: ease-in-out;
					-o-origin:7%;
				}

				39% {
					opacity: 1;
					-o-transform: rotate(645deg);
					-o-animation-timing-function: linear;
					-o-origin:30%;
				}

				70% {
					opacity: 1;
					-o-transform: rotate(770deg);
					-o-animation-timing-function: ease-out;
					-o-origin:39%;
				}

				75% {
					opacity: 1;
					-o-transform: rotate(900deg);
					-o-animation-timing-function: ease-out;
					-o-origin:70%;
				}

				76% {
				opacity: 0;
					-o-transform:rotate(900deg);
				}

				100% {
				opacity: 0;
					-o-transform: rotate(900deg);
				}
			}

			@-ms-keyframes orbit {
				0% {
					opacity: 1;
					z-index:99;
					-ms-transform: rotate(180deg);
					-ms-animation-timing-function: ease-out;
				}

				7% {
					opacity: 1;
					-ms-transform: rotate(300deg);
					-ms-animation-timing-function: linear;
					-ms-origin:0%;
				}

				30% {
					opacity: 1;
					-ms-transform:rotate(410deg);
					-ms-animation-timing-function: ease-in-out;
					-ms-origin:7%;
				}

				39% {
					opacity: 1;
					-ms-transform: rotate(645deg);
					-ms-animation-timing-function: linear;
					-ms-origin:30%;
				}

				70% {
					opacity: 1;
					-ms-transform: rotate(770deg);
					-ms-animation-timing-function: ease-out;
					-ms-origin:39%;
				}

				75% {
					opacity: 1;
					-ms-transform: rotate(900deg);
					-ms-animation-timing-function: ease-out;
					-ms-origin:70%;
				}

				76% {
				opacity: 0;
					-ms-transform:rotate(900deg);
				}

				100% {
				opacity: 0;
					-ms-transform: rotate(900deg);
				}
			}

			@-webkit-keyframes orbit {
				0% {
					opacity: 1;
					z-index:99;
					-webkit-transform: rotate(180deg);
					-webkit-animation-timing-function: ease-out;
				}

				7% {
					opacity: 1;
					-webkit-transform: rotate(300deg);
					-webkit-animation-timing-function: linear;
					-webkit-origin:0%;
				}

				30% {
					opacity: 1;
					-webkit-transform:rotate(410deg);
					-webkit-animation-timing-function: ease-in-out;
					-webkit-origin:7%;
				}

				39% {
					opacity: 1;
					-webkit-transform: rotate(645deg);
					-webkit-animation-timing-function: linear;
					-webkit-origin:30%;
				}

				70% {
					opacity: 1;
					-webkit-transform: rotate(770deg);
					-webkit-animation-timing-function: ease-out;
					-webkit-origin:39%;
				}

				75% {
					opacity: 1;
					-webkit-transform: rotate(900deg);
					-webkit-animation-timing-function: ease-out;
					-webkit-origin:70%;
				}

				76% {
				opacity: 0;
					-webkit-transform:rotate(900deg);
				}

				100% {
				opacity: 0;
					-webkit-transform: rotate(900deg);
				}
			}

			@-moz-keyframes orbit {
				0% {
					opacity: 1;
					z-index:99;
					-moz-transform: rotate(180deg);
					-moz-animation-timing-function: ease-out;
				}

				7% {
					opacity: 1;
					-moz-transform: rotate(300deg);
					-moz-animation-timing-function: linear;
					-moz-origin:0%;
				}

				30% {
					opacity: 1;
					-moz-transform:rotate(410deg);
					-moz-animation-timing-function: ease-in-out;
					-moz-origin:7%;
				}

				39% {
					opacity: 1;
					-moz-transform: rotate(645deg);
					-moz-animation-timing-function: linear;
					-moz-origin:30%;
				}

				70% {
					opacity: 1;
					-moz-transform: rotate(770deg);
					-moz-animation-timing-function: ease-out;
					-moz-origin:39%;
				}

				75% {
					opacity: 1;
					-moz-transform: rotate(900deg);
					-moz-animation-timing-function: ease-out;
					-moz-origin:70%;
				}

				76% {
				opacity: 0;
					-moz-transform:rotate(900deg);
				}

				100% {
				opacity: 0;
					-moz-transform: rotate(900deg);
				}
			}
			</style>
			<div class="windows8" id="windows8">
				<div class="wBall" id="wBall_1">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_2">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_3">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_4">
					<div class="wInnerBall"></div>
				</div>
				<div class="wBall" id="wBall_5">
					<div class="wInnerBall"></div>
				</div>
			</div>
		</p>
		<p id=text5 style="display: none;">string(1374) "Lost connection to MySQL server during query"</p>
		<p onclick="$('#error').fadeOut(500);" style="padding: 10px 25px; background-color: #c0392b; margin-top: 50px; cursor: pointer;">Закрыть</p>
	</div>
  <section>
    <article>
      <form action="">
        <p>Прямо сейчас узнайте, что случилось с Вашим рынком!</p>
        <p>Введите код ТН ВЭД своего товара</p>
        <input id="code" name="code" type="text">
        <p>Укажите направление торговли</p>
        <input id="imp" name="transport" value="Импорт" type="radio">
        <label for="imp">Импорт</label>
        <input id="exp" name="transport" value="Экспорт" type="radio">
        <label for="exp">Экспорт</label>
        <p style="margin: 5px auto auto auto;">Помощь, справка и условия использования</p>
        <p>Адрес eamil для получения результата</p>
        <input id="mail" name="mail" type="text">
        <!--<input type="submit" value="Получите величину изменения вашего рынка">-->
        <div id="send">Получите величину изменения вашего рынка</div>
      </form>
    </article>
  </section>
  <footer>
    <p>Свидетельство гоударственной <br>регистрации №2011612391</p>
    <p>2016 VVS, LTD.</p>
  </footer>
</body>
</html>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
//Обработчик всей формы
  $('#send').click(function(e){
    e.preventDefault();
    var error = false;
		var code_input = $('#code').val();
		//var phone_input = $('#phone').val();

		if(code_input.length < 10){
			var error = true;
			$('#text1').fadeIn(0);
			$('#error').fadeIn(500);
		}else {
			$('#text1').fadeOut(0);
		}

		var radio_check_imp = $("#imp").prop("checked");
		var radio_check_exp = $("#exp").prop("checked");

    if(radio_check_imp == true){
			$("#text2").fadeOut(0);
    }else {
      if (radio_check_exp == true) {
				$("#text2").fadeOut(0);
      }else {
				var error = true;
				$('#text2').fadeIn(0);
				$('#error').fadeIn(500);
      }
    };

		var mail_input = $('#mail').val();

		if(mail_input.length < 10){
			var error = true;
			$('#text3').fadeIn(0);
			$('#error').fadeIn(500);
		}else {
			$('#text3').fadeOut(0);
		}

    if(error == false){
			$('#windows8').fadeIn(0);
			$('#text5').delay(8000).fadeIn(0);
			$('#windows8').delay(8000).fadeOut(0);
			$('#error').css("background-color", "#2ecc71").fadeIn(500);
      $.post("go.php", $("#form-message").serialize(),function(result){
        if(result == 'yes'){
					$('#mail-sucess').fadeIn(500);
					$('#form-message').fadeOut(500);
					$('#text4').delay(1000).fadeIn(0);
					$('#text5').fadeIn(0);
					$('#error').fadeIn(500);

        }else{
					//$('#form-fail').fadeIn(500);
        }
      });
    }
  });
//Обработчик всей формы
</script>
