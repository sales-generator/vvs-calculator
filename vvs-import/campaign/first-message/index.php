<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Как бесплатно получить точные ключевые данные о рыночной нише </title>
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
<style>
body {
  font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  background-color: #ecf0f1;
  width: 100%;
  height: 100%;
}
header {
  background-color: #3498db;
  width: 100%;
  height: 135px;
}
section {

}
footer {
  color: #ecf0f1;
  background-color: #3498db;
  width: 100%;
  height: 50px;
  text-align: center;
  line-height: 50px;
}
.wrapper {
  width: 1280px;
  margin: 0 auto;
}
.logo_and_text {
  color: #ecf0f1;
  line-height: 135px;
  padding-left: 200px;
  background-image: url(//vvs-info.ru/widgets/vvs-import/master/mail/images/vvs-logo.png);
  background-repeat: no-repeat;
  background-position: left;
  height: 135px;
  font-size: 24px;
}
.wrapper iframe {
  margin: 25px 0px;
}
.form_wide {
  width: 640px;
  margin: 0 auto 15px;
  height: 250px;
  text-align: center;
  overflow: hidden;
}
.form_wide p {
  font-size: 24px;
  text-align: center;
  margin-bottom: 25px;
}
.form_wide input {
  width: 450px;
  height: 25px;
  margin: 5px auto;
  font-size: 18px;
  text-align: center;
}
.form_wide input[type="submit"] {
  background-color: #3498db;
  border: none;
  color: white;
  padding: 15px 32px;
  height: auto;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
#mail-error {
  display: none;
  background-color: #e74c3c;
  color: #ecf0f1;
  width: 640px;
  height: 100px;
  position: absolute;
  padding: 75px 0px;
}
#mail-error span {
  background-color: #c0392b;
  padding: 10px 30px;
  cursor: pointer;
}
#mail-error p {
  margin-bottom: 75px;
}
#mail-sucess {
  display: none;
  background-color: #2ecc71;
  color: #ecf0f1;
  width: 640px;
  height: 100px;
  position: absolute;
  padding: 75px 0px;
}
#mail-sucess span {
  background-color: #27ae60;
  padding: 10px 30px;
  cursor: pointer;
}
#mail-sucess p {
  margin-bottom: 75px;
}
</style>
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="logo_and_text">
        Благодарим Вас за использование online сервиса "VVS-импортозамещение"
      </div>
    </div>
  </header>
  <section>
    <div class="wrapper">
      <iframe width="1280" height="720" src="https://www.youtube-nocookie.com/embed/Ph1BIWsrdAo?rel=0" frameborder="0" allowfullscreen></iframe>
      <div class="form_wide">
	  <div id="mail-error">
        <p>Поле электронной почты не может быть пустым!</p>
        <span onclick="$('#mail-error').fadeOut(500);">Закрыть</span>
      </div>
      <div id="mail-sucess">
        <p>В ближайшее время мы с Вами свяжемся!</p>
        <span onclick="$('#mail-sucess').fadeOut(500);">Закрыть</span>
      </div>
        <form id="form-message" action="" method="post">
          <p>Для удобства обращения к Вам укажите Ваше имя</p>
		  
		  <input name="code" type="hidden" value="<?php echo $_GET['code']; ?>">
		  <input name="size" type="hidden" value="<?php echo $_GET['size']; ?>">
		  <input name="date" type="hidden" value="<?php echo $_GET['date']; ?>">
		  
          <input name="name" type="text" placeholder="Ваше имя">
          <input id="email" required="" name="email" type="text" placeholder="Ваш email *" value="<?php echo $_GET['mail']; ?>">
          <input id="phone" required="" name="phone" type="text" placeholder="Ваш телефон *" value="<?php echo $_GET['phone']; ?>">
          <input id="send" value="Заказать" name="submit" type="submit">
        </form>
      </div>
    </div>
  </section>
  <footer>ВладВнешСервис, ООО. Все права защищены 2016.</footer>
</body>

</html>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
//Обработчик всей формы
  $('#send').click(function(e){
    e.preventDefault();
    var error = false;
		var email_input = $('#email').val();
		//var phone_input = $('#phone').val();

		if(email_input.length < 5){
			var error = true;
			$('#mail-error').fadeIn(500);
		}else {
			$('#mail-error').fadeOut(500);
		}

    if(error == false){
      $.post("mail.php", $("#form-message").serialize(),function(result){
        if(result == 'yes'){
					$('#mail-sucess').fadeIn(500);
					$('#form-message').fadeOut(500);
        }else{
					//$('#form-fail').fadeIn(500);
        }
      });
    }
  });
//Обработчик всей формы
</script>