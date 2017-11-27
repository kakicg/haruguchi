<?php
	if(isset($_POST['submit'])) {
		if(!empty($_POST['name']) && !empty($_POST['email']) 
									&& !empty($_POST['country'])
									&& !empty($_POST['address'])
									&& !empty($_POST['amount'])){
			include "OME.php";
			define('MAIL_TO', 'kakicg@mac.com');
		
			mb_language("ja");
			mb_internal_encoding('UTF-8');
			mb_http_input('UTF-8');
			mb_http_output('UTF-8');
			
			$body = "From: ".$_POST['name']."\n\n";
			$body .= "email: ".$_POST['email']."\n\n";
			$body .= "Country: ".$_POST['country']."\n\n";
			$body .= "Address: ".$_POST['address']."\n\n";
			$body .= "Amount: ".$_POST['amount']."\n\n";
			$subject = "春口光義作品集の注文";
		
			$oneMail = new OME;
			$oneMail->setFromfield($_POST['email']);
			$oneMail->setSubject($subject);
			$oneMail->setBody($body);
			$oneMail->setBodyWidth(0);
			$oneMail->setToField(MAIL_TO,"春口事務局");
			$oneMail->appendToField("m.haruguchi@gmail.com","春口先生");
			if ( ! $oneMail->send() ) {
				header("Location: ng.html");
				exit();
			} else {
				header("Location: thanks_order_en.html");
				exit();
			}
		} else {
			if(empty($_POST['name'])) {
				$error['name']="<br />Please enter your name.";
			}
			if(empty($_POST['email'])) {
				$error['email']="<br />Please enter your e-mail address.";
			}
			if(empty($_POST['country'])) {
				$error['country']="<br />Please enter country.";
			}
			if(empty($_POST['address'])) {
				$error['address']="<br />Please enter your address.";
			}
			if(empty($_POST['amount'])) {
				$error['amount']="<br />Please enter the amount of copies";
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Work of Mutsuyoshi Haruguchi</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="page">
  <h2>Work of Mutsuyoshi Haruguchi</h2>
  <p>Mutsuyoshi Haruguchi's 122 works. A4 size / 109 pages<br />
  ¥3,500(Excluding freight & shipping cost)</p>
  <form id="OrderForm" method="post" action="">
    Your name<span class="error"><?php if(!empty($error['name'])) echo $error['name'];?></span><br />
    <label>
    <input name="name" type="text" id="name" size="38" value="<?php if(!empty($_POST['name'])) echo $_POST['name']?>" />
    </label><br />
    <label>
    Country<span class="error"><?php if(!empty($error['country'])) echo $error['country'];?>
    <br />
    </span>
      <input name="country" type="text" id="country" size="38" value="<?php if(!empty($_POST['country'])) echo $_POST['country']?>" />
    </label><br />
    <label>
    Address<span class="error"><?php if(!empty($error['address'])) echo $error['address'];?>
    <br />
    </span>
      <textarea name="address" cols="38" rows="2" id="address"><?php if(!empty($_POST['address'])) echo $_POST['address']?></textarea>
    </label><br />
      <label>

    e-mail address<span class="error"><?php if(!empty($error['email'])) echo $error['email'];?>
    </span>
      <input name="email" type="text" id="email" size="38" value="<?php if(!empty($_POST['address'])) echo $_POST['address']?>" />
      </label><br />
      <label>
Order<span class="error"><?php if(!empty($error['amount'])) echo $error['amount'];?>
</span>
    <input name="amount" type="text" id="amount" size="4" value="<?php if(!empty($_POST['amount'])) echo $_POST['amount']; else echo 1;?>" />
    copies
    </label>
    <br />
    <input type="submit" name="submit" id="submit" value="Submit" />
  </form>
  
</div>
</body>
</html>
