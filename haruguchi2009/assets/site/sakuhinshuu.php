<?php
	if(isset($_POST['submit'])) {
		if(!empty($_POST['name']) && !empty($_POST['email']) 
									&& !empty($_POST['zip'])
									&& !empty($_POST['address'])
									&& !empty($_POST['amount'])
									&& !empty($_POST['phone']) ) {
			include "OME.php";
			define('MAIL_TO', 'kakicg@mac.com');
		
			mb_language("ja");
			mb_internal_encoding('UTF-8');
			mb_http_input('UTF-8');
			mb_http_output('UTF-8');
			
			$body = "From: ".$_POST['name']."\n\n";
			$body .= "email: ".$_POST['email']."\n\n";
			$body .= "Zip: ".$_POST['zip']."\n\n";
			$body .= "Address: ".$_POST['address']."\n\n";
			$body .= "Phone: ".$_POST['phone']."\n\n";
			$body .= "Amount: ".$_POST['amount']."\n\n";
			$subject = "春口光義作品集の注文";
		
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
				header("Location: thanks_order.html");
				exit();
			}
		} else {
			if(empty($_POST['name'])) {
				$error['name']="<br />名前を入れてください / Please enter your name.";
			}
			if(empty($_POST['email'])) {
				$error['email']="<br />e-mailアドレスを入れてください";
			}
			if(empty($_POST['zip'])) {
				$error['zip']="<br />郵便番号を入れてください ";
			}
			if(empty($_POST['address'])) {
				$error['address']="<br />住所を入れてください";
			}
			if(empty($_POST['phone'])) {
				$error['phone']="<br />電話番号を入れてください ";
			}
			if(empty($_POST['amount'])) {
				$error['amount']="<br />注文部数を入れてください";
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>春口光義作品集</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="page">
  <h2>春口光義作品集</h2>
  <p>春口光義の作品、初期の作品から最近作までの122点を収録した作品集です。A4版109ページ。<br />
  3,500円(税込み、送料が別途かかります。)<br />
  下のフォームからお申し込みいただけます。</p>
  <form id="OrderForm" method="post" action="">
    お名前<span class="error"><?php if(!empty($error['name'])) echo $error['name'];?></span><br />
    <label>
    <input name="name" type="text" id="name" size="38" value="<?php if(!empty($_POST['name'])) echo $_POST['name']?>" />
    </label><br />
    <label>
    郵便番号<span class="error"><?php if(!empty($error['zip'])) echo $error['zip'];?>
    </span>
    <br />
    <input name="zip" type="text" id="zip" size="７" maxlength="８" value="<?php if(!empty($_POST['zip'])) echo $_POST['zip']?>" />
    </label><br />
    <label>
    住所<span class="error"><?php if(!empty($error['address'])) echo $error['address'];?>
    <br />
    </span>
      <textarea name="address" cols="38" rows="2" id="address"><?php if(!empty($_POST['address'])) echo $_POST['address']?></textarea>
    </label><br />
    <label>
電話番号<span class="error">
<?php if(!empty($error['phone'])) echo $error['phone'];?>
</span><br />

    <input name="phone" type="text" id="phone" size="32" value="<?php if(!empty($_POST['phone'])) echo $_POST['phone']?>" />
      </label>
      <br />
      <label>

    e-mail アドレス<span class="error"><?php if(!empty($error['email'])) echo $error['email'];?>
    </span>
      <input name="email" type="text" id="email" size="38" value="<?php if(!empty($_POST['address'])) echo $_POST['address']?>" />
      </label><br />
      <label>
注文部数<span class="error"><?php if(!empty($error['amount'])) echo $error['amount'];?>
</span>
    <input name="amount" type="text" id="amount" size="4" value="<?php if(!empty($_POST['amount'])) echo $_POST['amount']; else echo 1;?>" />
    部
    </label>
    <br />
    <input type="submit" name="submit" id="submit" value="送信" />
  </form>
  
</div>
</body>
</html>
