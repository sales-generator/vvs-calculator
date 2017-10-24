<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-indigo.min.css" />
     <link rel="stylesheet" href="/widgets/vvs-calc/material.blue-indigo.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
    <!--Reset CSS-->
    <style media="screen">
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
      input:focus::-webkit-input-placeholder { color:transparent; } 
      input:focus:-moz-placeholder { color:transparent; } 
      input:focus::-moz-placeholder { color:transparent; }  
      input:focus:-ms-input-placeholder { color:transparent; }
    </style>
    <style media="screen">
      body {
        font-family: 'Roboto Condensed', sans-serif;
        text-align: center;
        background-color: #ffffff;
      }
      header {
        background-image: url(https://vvs-info.ru/widgets/vvs-import/master/img/vvs-logo.png);
        background-repeat: no-repeat;
        background-position: 50% 25%;
        background-size: 100px;
        background-color: #2196f3;
        color: #ffffff;
        font-size: 24px;
        padding: 50px 5px 10px 5px;
      }
      section {
      }
      footer {
        background-color: #607d8b;
        color: #ffffff;
        font-weight: 300;
        position: fixed;
        left: 0px;
        bottom: 0px;
        width: 100%;
      }
      section, footer {
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <!-- loading -->
    <div class="loading mdl-card mdl-shadow--2dp" style="display: none;position: fixed;width: 80%;min-height: 20px;background: #fff;z-index: 100; top: 25%;left: 10%;padding: 30px 15px 10px;">
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Подождите...</h2>
      </div>
    </div>
    <!-- error -->
    <!-- Square card -->
    <style>
    .demo-card-square.mdl-card {
      width: 320px;
      height: 320px;
    }
    </style>

    <div class="error demo-card-square mdl-card mdl-shadow--2dp" style="display: none; position: fixed; width: 260px; min-height: 20px; background: #fff; z-index: 100; top: calc(50% - 160px); left: calc(50% - 130px);">
      <div class="mdl-card__title mdl-card--expand" style="color: #fff; background: #f44336;">
        <h2 class="mdl-card__title-text">Ошибка!</h2>
      </div>
      <div class="error_code mdl-card__supporting-text" style="display: none;">
        Введите 10 цифр кода ТН ВЭД.
      </div>
      <div class="error_transport mdl-card__supporting-text" style="display: none;">
        Выберете направление торговли.
      </div>
      <div class="error_email mdl-card__supporting-text" style="display: none;">
        Введите корректный email адрес.
      </div>
      <div class="error_nodata mdl-card__supporting-text" style="display: none;">
        По вашему коду нет данных.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="$('div.error').fadeOut(500); $('div.error_code').fadeOut(500); $('div.error_transport').fadeOut(500); $('div.error_email').fadeOut(500); $('div.error_nodata').fadeOut(500);">
          Закрыть
        </a>
      </div>
    </div>
    <!-- sucess -->
    <div class="sucess demo-card-square mdl-card mdl-shadow--2dp" style="display: none; position: fixed; width: 260px; min-height: 20px; background: #fff; z-index: 100; top: calc(50% - 160px); left: calc(50% - 130px);">
      <div class="mdl-card__title mdl-card--expand" style="color: #fff; background: #4caf50;">
        <h2 class="mdl-card__title-text">Успешно!</h2>
      </div>
      <div class="mdl-card__supporting-text">
        Посмотрите почту, там подробная информация о Вашем рынке!
      </div>
      <div class="mdl-card__supporting-text">
        Если Ваш ящик находится на mail.ru, то для получения писем от нас добавьте адрес inbox@vvs-info.ru в записную книгу. Как это сделать Вы можете узнать <a href="https://help.mail.ru/mail-help/ab/add_cont" target="_blank">здесь</a>.
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="$('div.sucess').fadeOut(500);">
          Закрыть
        </a>
      </div>
    </div>
    <header>
      Мониторинг экспорта и импорта
    </header>
    <section>
      <form class="calc" action="" method="">
        <input name="source_site" value="<?php echo $_GET['src']?>" type="hidden"/>
        <h1>Прямо сейчас узнайте, что случилось с Вашим рынком!</h1>
        <div class="">
          <!-- Numeric Textfield -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input code" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2" name="code" style="text-align: center;" placeholder="Введите код ТН ВЭД своего товара...">
            <!-- <label class="mdl-textfield__label" for="sample2">Введите код ТН ВЭД своего товара...</label> -->
            <span class="mdl-textfield__error">Только числовое значение</span>
          </div>
        </div>
        <p>Укажите направление торговли</p>
        <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
          <div class="" style="float: left; padding: 10px 0px;">
            <!-- Radio button -->
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
              <input type="radio" id="option-1" class="mdl-radio__button transport" name="transport" value="IM">
              <span class="mdl-radio__label">Импорт</span>
            </label>
          </div>
          <div class="" style="float: right; padding: 10px 0px;">
            <!-- Radio button -->
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
              <input type="radio" id="option-2" class="mdl-radio__button transport_next" name="transport" value="EX">
              <span class="mdl-radio__label">Экспорт</span>
            </label>
          </div>
        </div>
        <div class="">
          <!-- Textfield with Floating Label -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input email" type="text" id="sample3" name="email" style="text-align: center;" placeholder="Адрес email для получения результата...">
            <!-- <label class="mdl-textfield__label" for="sample3">Адрес email для получения результата...</label> -->
          </div>
        </div>
        <div class="">
          <!-- Colored raised button -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored submit_button">
            Узнать, что случилось...
          </button>
        </div>
        <div class="" style="padding: 10px 25px;">
          <!--p>Код ТН ВЭД представляет собой десять цифр.</p-->
          <p>Для поиска кода ТН ВЭД воспользуйтесь <a href="http://www.alta.ru/tnved/" target="_blank" rel="nofollow">онлайн-сервисом</a>.</p>
          <!-- Raised button
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="return false">
            Помощь, справка и условия использования
          </button>-->
        </div>
    </section>
    <footer>
      Свидетельство государственной регистрации №2011612391<br>2017 VVS, LTD.
    </footer>
    <div style="color: #3498db; display: none;" class="la-timer">
      <div></div>
    </div>
  </body>
</html>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
  $('button.submit_button').click(function(e){
    e.preventDefault();
    var error = false;
		var input_code = $('input.code').val();
    var input_email = $('input.email').val();
    var input_radio = $('input.transport').prop('checked');
    var input_radio_next = $('input.transport_next').prop('checked');

		if(input_code.length < 10){
			var error = true;
      $('div.error_code').fadeIn(0);
      $('div.error').fadeIn(500);
			//alert('code not present');
		}else {
      //nothing
		}
    if(input_radio == true){
			//nothing
    }else {
      if (input_radio_next == true) {
				//nothing
      }else {
				var error = true;
        $('div.error_transport').fadeIn(0);
        $('div.error').fadeIn(500);
				//alert('transport not selected')
      }
    }
		if(input_email.length < 5){
			var error = true;
      $('div.error_email').fadeIn(0);
      $('div.error').fadeIn(500);
      //alert('email not present')
		}else {
      //nothing
		}

    if(error == false){
      $('div.loading').fadeIn(500);
      $.post("engine/index.php", $('form.calc').serialize(),function(result){
        if(result == 'all_green'){
          $('div.loading').fadeOut(500);
          $('div.sucess').fadeIn(500);
					//alert( "ok" );
        }else {
          $('div.loading').fadeOut(500);
          $('div.error_nodata').fadeIn(0);
          $('div.error').fadeIn(500);
					//alert( "failed" );
        }
      });
    }
  });
</script>
