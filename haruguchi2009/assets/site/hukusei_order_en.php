<?php
	if(isset($_POST['submit'])) {
		if(!empty($_POST['name']) && !empty($_POST['email']) 
									&& !empty($_POST['address'])
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
			$body .= "犬の話: ".$_POST['inu'].$_POST['inu_count']."部\n\n";
			$body .= "通り過ぎる馬: ".$_POST['uma'].$_POST['uma_count']."部\n\n";
			$body .= "転生の部屋: ".$_POST['tensei'].$_POST['tensei_count']."部\n\n";
			$body .= "二人の椅子: ".$_POST['isu'].$_POST['isu_count']."部\n\n";
			$subject = "春口光義複製画の注文";
		
			$oneMail = new OME;
			$oneMail->setSubject($subject);
			$oneMail->setBody($body);
			$oneMail->setBodyWidth(0);
			$oneMail->setToField(MAIL_TO,"春口事務局");
			//$oneMail->appendToField("m.haruguchi@gmail.cpm","春口先生");
			if ( ! $oneMail->send() ) {
				header("Location: ng.html");
				exit();
			} else {
				header("Location: thanks_hukusei_order_en.html");
				exit();
			}
		} else {
			if(empty($_POST['name'])) {
				$error['name']="<br />Please enter your name.";
			}
			if(empty($_POST['email'])) {
				$error['email']="<br />Please enter your e-mail address";
			}
			if(empty($_POST['address'])) {
				$error['address']="<br />Please enter your address ";
			}
			if(empty($_POST['phone'])) {
				$error['phone']="<br />Please enter your phone nimber ";
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Mistuyoshi Haruguchi Original/ Reproductions</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="page2">
  <h2>Mistuyoshi Haruguchi Original/ Reproductions</h2>
  <p>Mistuyoshi Haruguchi Reproduction. 6,000 yen for each (Including tax. Delivery charges are not included.)<br />
  Please use this form to order.</p>
  <form id="OrderForm" method="post" action="">
  Reincarnation _ a story of a dog
    <label>
    <input <?php if (!(strcmp($_POST['inu'],'Y'))) {echo "checked=\"checked\"";} ?> name="inu" type="checkbox" id="inu" value="Y" />
    </label>
<input name="inu_count" type="text" id="inu_count" size="4" value="<?php if(!empty($_POST['inu_count'])) echo $_POST['inu_count']?>" /> 
copies
<br />
  A passing horse - Wisconsin street
    <label>
    <input <?php if (!(strcmp($_POST['uma'],'Y'))) {echo "checked=\"checked\"";} ?> name="uma" type="checkbox" id="uma" value="Y" />
    </label>
<input name="uma_count" type="text" id="uma_count" size="4" value="<?php if(!empty($_POST['uma_count'])) echo $_POST['uma_count']?>" /> 
copies
<br />
  A room of for transmigration
    <label>
    <input <?php if (!(strcmp($_POST['tensei'],'Y'))) {echo "checked=\"checked\"";} ?> name="tensei" type="checkbox" id="tensei" value="Y" />
    </label>
<input name="tensei_count" type="text" id="tensei_count" size="4" value="<?php if(!empty($_POST['tensei_count'])) echo $_POST['tensei_count']?>" /> 
copies
<br />
  Landscape _ chairs for two
    <label>
    <input <?php if (!(strcmp($_POST['isu'],'Y'))) {echo "checked=\"checked\"";} ?> name="isu" type="checkbox" id="isu" value="Y" />
    </label>
<input name="isu_count" type="text" id="isu_count" size="4" value="<?php if(!empty($_POST['isu_count'])) echo $_POST['isu_count']?>" /> 
copies
<br />
    <label></label>
    <br />
    Your Name<span class="error"><?php if(!empty($error['name'])) echo $error['name'];?></span><br />
    <label>
    <input name="name" type="text" id="name" size="38" value="<?php if(!empty($_POST['name'])) echo $_POST['name']?>" />
    </label><br />
    <label>
    Address<span class="error"><?php if(!empty($error['address'])) echo $error['address'];?>
    <br />
    </span>
      <textarea name="address" cols="38" rows="2" id="address"><?php if(!empty($_POST['address'])) echo $_POST['address']?></textarea>
    </label><br />
    <label>
Phone Number<span class="error">
<?php if(!empty($error['phone'])) echo $error['phone'];?>
</span><br />

    <input name="phone" type="text" id="phone" size="32" value="<?php if(!empty($_POST['phone'])) echo $_POST['phone']?>" />
      </label>
      <br />
      <label>

    e-mail address<span class="error"><?php if(!empty($error['email'])) echo $error['email'];?>
    </span>
      <input name="email" type="text" id="email" size="38" value="<?php if(!empty($_POST['address'])) echo $_POST['address']?>" />
      </label>
    <br />
    <input type="submit" name="submit" id="submit" value="Submit" />
  </form>
  
</div>
</body>
</html>
