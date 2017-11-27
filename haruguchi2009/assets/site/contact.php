<?php
	if(isset($_POST['submit1'])) {
		if(!empty($_POST['name']) && !empty($_POST['mail']) ) {
			include "OME.php";
			define('MAIL_TO', 'kakicg@mac.com');
		
			mb_language("ja");
			mb_internal_encoding('UTF-8');
			mb_http_input('UTF-8');
			mb_http_output('UTF-8');
			
			$body = "From: ".$_POST['name']."\n\n";
			$body .= "email: ".$_POST['mail']."\n\n";
			$body .= $_POST['mtype']."\n\n";
			$body .= $_POST['body'];
			$subject = "春口光義サイトからのコンタクト";
		
			$oneMail = new OME;
			$oneMail->setSubject($subject);
			$oneMail->setBody($body);
			$oneMail->setBodyWidth(0);
			$oneMail->setToField(MAIL_TO,"春口事務局");
			$oneMail->appendToField("m.haruguchi@gmail.com","春口先生");
			if ( ! $oneMail->send() ) {
				header("Location: ng.html");
				exit();
			} else {
				header("Location: thanks.html");
				exit();
			}
		} else {
			if(empty($_POST['name'])) {
				$error['name']="<br />名前を入れてください / Please enter your name.";
				$error['name_en']="<br />Please enter your name.";
			}
			if(empty($_POST['mail'])) {
				$error['mail']="<br />e-mailアドレスを入れてください / Please enter your e-mail address.";
				$error['mail_en']="<br />Please enter your e-mail address.";
			}
		}
	}
?>
<?php
function radio_check($type){
	if(isset($_POST['mtype']) && $_POST['mtype'] === $type)
		echo 'checked="checked"';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>春口光義ウェブサイト | コンタクト</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <p>春口光義へのメッセージ、春口光義の作品についてのお問い合わせはこのフォームをご利用ください。<br />
  Please use this form to send any message to Mitsuyoshi Haruguchi.
  </p>
<form id="ContactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form_item_row"><div class="item-title">お名前 / Your name<span class="error">
    <?php if(!empty($error['name'])) echo $error['name'];?></span></div>
    <input name="name" type="text" id="name" size="30" class="input_text" 
    value="<?php if(!empty($_POST['name'])) echo $_POST['name']?>" /><div class="clear"></div>
    </div>
    <div class="form_item_row"><div class="item-title">メールアドレス / e-Mail address<span class="error">
    <?php if(!empty($error['mail'])) echo $error['mail'];?></span></div>
    <input name="mail" type="text" id="mail" size="30" class="input_text" value="<?php if(!empty($_POST['mail'])) echo $_POST['mail']?>" /><div class="clear"></div>
    </div>
    
<div id="mtype" class="form_item_row">
    <input name="mtype" type="radio" id="mtype1" value="message" <?php radio_check("message");?> />
    メッセージ / Message<br />
    <input type="radio" name="mtype" id="mtype2" value="works" <?php radio_check("works");?> />作品に関する問い合わせ / About His Works<br />
    <input type="radio" name="mtype" id="mtype3" value="others" <?php radio_check("others");?> />その他 / Others  </div>    <label><div class="item-title">本文 / Body</div>
<div id="mtype" class="form_item_row">
    <textarea name="body" id="body" cols="66" rows="10"></textarea>
    </label>
    <div class="clear"></div>
    <div class="form_row">
    <input type="submit" name="submit1" id="submit1" value="送信 / Submit" />
    </div>
</div>

</form>


</body>
</html>
