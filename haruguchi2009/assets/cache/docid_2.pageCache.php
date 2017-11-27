<?php die('Unauthorized access.'); ?>a:38:{s:2:"id";s:1:"2";s:4:"type";s:8:"document";s:11:"contentType";s:8:"text/css";s:9:"pagetitle";s:8:"main.css";s:9:"longtitle";s:0:"";s:11:"description";s:0:"";s:5:"alias";s:8:"main.css";s:15:"link_attributes";s:0:"";s:9:"published";s:1:"1";s:8:"pub_date";s:1:"0";s:10:"unpub_date";s:1:"0";s:6:"parent";s:1:"0";s:8:"isfolder";s:1:"0";s:9:"introtext";s:0:"";s:7:"content";s:7455:"@charset "UTF-8";

* { margin: 0; padding: 0; }
div, a, img.t { behavior: url(assets/js/iepngfix.htc) }
body {
	background-color: #000;
	background-image: url(assets/templates/haruguchi/images/menu_right_ext.jpg);
	background-repeat: repeat-x;
	background-position: 900px 0px;
	font-family: Georgia, "Times New Roman", Times, serif, "ＭＳ Ｐ明朝", "細明朝体", "ヒラギノ明朝 Pro W3";
	color: #666;
	line-height: 155%;
}
h1 {
	font-size: 200%;
	color: #666666;
	margin-top: 30px;
	margin-right: 0;
	margin-bottom: 30px;
	margin-left: 40px;
}
h2 { font-size: 120%; margin: 20px 0;}
h3 { font-size: 100%; margin: 10px 0;}
h4 { font-size: 100%; margin: 6px 0;}
img { border: 0; }
.clear { clear: both; }
#page  > p {
	margin-left: 40px;
}
	

div#page {
	width: 800px;
}

/**********/
/* Header */
/**********/
div#header {
	background-image: url(assets/templates/haruguchi/images/menu.jpg);
	background-repeat: no-repeat;
	height: 229px;
	width: 799px;
	background-position: 0px 0px;
	margin: 0;
}
div#menus ul {
	list-style: none;
}
div#menus ul li {
	display: inline;
}
div#menus ul li a {
	display: block;
	float: left;
	margin-right: 24px;
	height: 21px;
	background-position: 0px 0px;
}
div#menus ul li a:hover,div#menus ul li a.home:hover {
	background-position: 0px -21px;
}
div#menus ul li a.home {
	width: 54px;
	background-image: url(assets/templates/haruguchi/images/home.png);
	background-repeat: no-repeat;
}
div#menus ul li a.biography {
	width: 100px;
	background-image: url(assets/templates/haruguchi/images/biography.png);
	background-repeat: no-repeat;

}
div#menus ul li a.works {
	width: 61px;
	background-image: url(assets/templates/haruguchi/images/works.png);
	background-repeat: no-repeat;
}
div#menus ul li a.contact {
	width: 76px;
	background-image: url(assets/templates/haruguchi/images/contact.png);
	background-repeat: no-repeat;
}

#work1 {
	position:absolute;
	left:25px;
	top:68px;
	width:120px;
	height:135px;
	z-index:1;
}
#work2 {
	position:absolute;
	left:126px;
	top:68px;
	width:94px;
	height:113px;
	z-index:2;
}
#work3 {
	position:absolute;
	left:211px;
	top:68px;
	width:76px;
	height:101px;
	z-index:3;
}
#work4 {
	position:absolute;
	left:650px;
	top:23px;
	/*width:100px;*/
	height:89px;
	padding: 0;
	z-index:4;
	border: 2px solid #666666;
}
#work4 img {
	border-top-width: 5px;
	border-right-width: 5px;
	border-bottom-width: 5px;
	border-left-width: 5px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #333333;
	border-right-color: #999;
	border-bottom-color: #999;
	border-left-color: #333333;
	margin: 0;
}
#menus {
	position:absolute;
	left:397px;
	top:151px;
	width:387px;
	height:30px;
	z-index:5;
}

/**********/
/* 言語きりかえ */
/**********/

ul#language {
	list-style:none;
	color: #FFFF66;
	padding-top: 200px;
	padding-left: 640px;
}
ul#language li {
	float: left;
	text-align: center;
border: solid 1px #000;
}
ul#language li a {
	width: 70px;
	height: 20px;
	display: block;
	color: #FFFF66;
}
ul#language li a:hover {
	color: #fff;
background-color: #444;
}
ul#language li.active {
	background-color: #333;
border: solid 1px #444;
}

/**********/
/*作品集バナー*/
/**********/

#hanbai, #hanbai-en {
	background-position: 0px 0px;
	background-repeat: no-repeat;
	margin: 40px 0 40px 40px;
border-top: solid 1px #fff;
border-bottom: solid 1px #fff;
width: 294px;
}
#hanbai {
	background-image: url(assets/templates/haruguchi/images/hatubai.jpg);
}
#hanbai-en {
	background-image: url(assets/templates/haruguchi/images/hatubai_en.jpg);
}
#hanbai a, #hanbai-en a {
width: 294px;
height: 166px;
display: block;
}
#banner, #banner-en {
	position: absolute;
	background-repeat: no-repeat;
	left: 390px;
	top: 193px;
}
#banner {
	background-image: url(assets/templates/haruguchi/images/banner.jpg);
}
#banner-en {
	background-image: url(assets/templates/haruguchi/images/banner_en.jpg);
/* display: none; */
}
#banner a, #banner-en a {
width: 200px;
height: 37px;
display: block;
}

/*************/
/*   Home    */
/*************/
#page #row-top {
	padding: 20px;
	color: #fff;
	width: 660px;
	margin-top: 0;
	margin-right: 40px;
	margin-bottom: 0;
	margin-left: 40px;
}
#page .row {
	background-color: #ccc;
	padding: 20px 60px;
	margin: 60px;
	border: 4px solid #999999;
}
#page p {
	text-align: justify;
}
#page .row div.title{
	font-size: 85%;
	color: #666;
	width: 100%;
	text-align: right;
	margin-bottom: 20px;
}
#page .row p {
	margin-top: 0px;
	margin-right: 4px;
	margin-bottom: 20px;
	margin-left: 4px;
	text-align: justify;
}
#page .row div.article{
	width: 355px;
	float: left;
	padding-top: 0px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	margin: 0px;
	line-height: 155%;
}
div.right, div.left {
	width: 160;
	margin-top: 0px;
	margin-right: 10px;
	margin-bottom: 10px;
	margin-left: 10px;
}
div.right img, div.left img {
	border: 3px solid #FFFFFF;
}
div.right {
	float: right;
	margin-right: 0px;
	text-align: center;
}
div.left {
	float: left;
	margin-left: 0px;
}
div.author {
	color: #666;
	text-align: right;
	width: 100%;
	padding: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 16px;
	margin-left: 0px;
}

/*************/
/* Biography */
/*************/

ul#keireki {
	margin: 20px 40px;
	width: 720px;
	list-style: none;
	padding: 0 0 0 12px;
}
ul#keireki li {
	margin: 0 0 4px 24px;
	color: #ccc;
	font-size: 90%;
}
ul#keireki li.year-midashi {
	margin: 14px 0 8px 12px;
	border-top: solid 1px #999;
	color: #999;
	font-size: 135%;
}

/*********/
/* Works */
/*********/

div#thumbnails {
	padding: 8px;
	margin-left: 30px;
}
div#thumbnails img{
	border: solid 1px #ccc;
	margin: 2px 4px;
}

#page div#work-comment {
	width: 630px;
	background-image: url(assets/templates/haruguchi/images/portrait_haruguchi.png);
	background-position: 0px 30px;
	background-repeat: no-repeat;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 40px;
	color: #FFFFFF;
	height: 600px;
	padding-top: 16px;
	padding-right: 40px;
	padding-bottom: 40px;
	padding-left: 40px;
}

/*********/
/* Form */
/*********/

form#form1 div.item-title{
	width: 200px;
	float: left;
	text-align: right;
	padding-top: 2px;
	padding-right: 8px;
	padding-bottom: 0px;
	padding-left: 0px;
}
form#form1 input.input_text, form#form1 textarea{
	float: left;
	width: 400px;
}
.form_item_row {
	margin: 12px 0;
}
.form_row {
	margin: 0px;
	width: 608px;
	padding-top: 12px;
	padding-right: 0px;
	padding-bottom: 12px;
	padding-left: 0px;
	text-align: right;
}
.form_row #submit1 {
	font-size: 135%;
	height: 20px;
	width: 40px;
	padding: 4px;
}
input#name, input#mail {
	font-size: 20px;
}
form#form1 div#mtype{
	clear: both;
	margin-top: 12px;
	margin-right: 10px;
	margin-bottom: 12px;
	margin-left: 212px;
	padding: 12px 24px 12px 24px;
	width: 280px;
	float: none;
	border: 4px solid #999999;
}
.error {
	color: #f00;
	font-size: 12px;
}


p.copyright {
	font-size: 80%;
	color: #CCCCCC;
	width: 600px;
	margin-left: 100px;
	font-weight: normal;
}

";s:8:"richtext";s:1:"0";s:8:"template";s:1:"0";s:9:"menuindex";s:1:"1";s:10:"searchable";s:1:"1";s:9:"cacheable";s:1:"1";s:9:"createdby";s:1:"1";s:9:"createdon";s:10:"1202823392";s:8:"editedby";s:1:"1";s:8:"editedon";s:10:"1202823392";s:7:"deleted";s:1:"0";s:9:"deletedon";s:1:"0";s:9:"deletedby";s:1:"0";s:11:"publishedon";s:10:"1202823392";s:11:"publishedby";s:1:"1";s:9:"menutitle";s:0:"";s:7:"donthit";s:1:"1";s:11:"haskeywords";s:1:"0";s:11:"hasmetatags";s:1:"0";s:10:"privateweb";s:1:"0";s:10:"privatemgr";s:1:"0";s:13:"content_dispo";s:1:"0";s:8:"hidemenu";s:1:"1";s:17:"__MODxDocGroups__";s:0:"";}<!--__MODxCacheSpliter__-->@charset "UTF-8";

* { margin: 0; padding: 0; }
div, a, img.t { behavior: url(assets/js/iepngfix.htc) }
body {
	background-color: #000;
	background-image: url(assets/templates/haruguchi/images/menu_right_ext.jpg);
	background-repeat: repeat-x;
	background-position: 900px 0px;
	font-family: Georgia, "Times New Roman", Times, serif, "ＭＳ Ｐ明朝", "細明朝体", "ヒラギノ明朝 Pro W3";
	color: #666;
	line-height: 155%;
}
h1 {
	font-size: 200%;
	color: #666666;
	margin-top: 30px;
	margin-right: 0;
	margin-bottom: 30px;
	margin-left: 40px;
}
h2 { font-size: 120%; margin: 20px 0;}
h3 { font-size: 100%; margin: 10px 0;}
h4 { font-size: 100%; margin: 6px 0;}
img { border: 0; }
.clear { clear: both; }
#page  > p {
	margin-left: 40px;
}
	

div#page {
	width: 800px;
}

/**********/
/* Header */
/**********/
div#header {
	background-image: url(assets/templates/haruguchi/images/menu.jpg);
	background-repeat: no-repeat;
	height: 229px;
	width: 799px;
	background-position: 0px 0px;
	margin: 0;
}
div#menus ul {
	list-style: none;
}
div#menus ul li {
	display: inline;
}
div#menus ul li a {
	display: block;
	float: left;
	margin-right: 24px;
	height: 21px;
	background-position: 0px 0px;
}
div#menus ul li a:hover,div#menus ul li a.home:hover {
	background-position: 0px -21px;
}
div#menus ul li a.home {
	width: 54px;
	background-image: url(assets/templates/haruguchi/images/home.png);
	background-repeat: no-repeat;
}
div#menus ul li a.biography {
	width: 100px;
	background-image: url(assets/templates/haruguchi/images/biography.png);
	background-repeat: no-repeat;

}
div#menus ul li a.works {
	width: 61px;
	background-image: url(assets/templates/haruguchi/images/works.png);
	background-repeat: no-repeat;
}
div#menus ul li a.contact {
	width: 76px;
	background-image: url(assets/templates/haruguchi/images/contact.png);
	background-repeat: no-repeat;
}

#work1 {
	position:absolute;
	left:25px;
	top:68px;
	width:120px;
	height:135px;
	z-index:1;
}
#work2 {
	position:absolute;
	left:126px;
	top:68px;
	width:94px;
	height:113px;
	z-index:2;
}
#work3 {
	position:absolute;
	left:211px;
	top:68px;
	width:76px;
	height:101px;
	z-index:3;
}
#work4 {
	position:absolute;
	left:650px;
	top:23px;
	/*width:100px;*/
	height:89px;
	padding: 0;
	z-index:4;
	border: 2px solid #666666;
}
#work4 img {
	border-top-width: 5px;
	border-right-width: 5px;
	border-bottom-width: 5px;
	border-left-width: 5px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #333333;
	border-right-color: #999;
	border-bottom-color: #999;
	border-left-color: #333333;
	margin: 0;
}
#menus {
	position:absolute;
	left:397px;
	top:151px;
	width:387px;
	height:30px;
	z-index:5;
}

/**********/
/* 言語きりかえ */
/**********/

ul#language {
	list-style:none;
	color: #FFFF66;
	padding-top: 200px;
	padding-left: 640px;
}
ul#language li {
	float: left;
	text-align: center;
border: solid 1px #000;
}
ul#language li a {
	width: 70px;
	height: 20px;
	display: block;
	color: #FFFF66;
}
ul#language li a:hover {
	color: #fff;
background-color: #444;
}
ul#language li.active {
	background-color: #333;
border: solid 1px #444;
}

/**********/
/*作品集バナー*/
/**********/

#hanbai, #hanbai-en {
	background-position: 0px 0px;
	background-repeat: no-repeat;
	margin: 40px 0 40px 40px;
border-top: solid 1px #fff;
border-bottom: solid 1px #fff;
width: 294px;
}
#hanbai {
	background-image: url(assets/templates/haruguchi/images/hatubai.jpg);
}
#hanbai-en {
	background-image: url(assets/templates/haruguchi/images/hatubai_en.jpg);
}
#hanbai a, #hanbai-en a {
width: 294px;
height: 166px;
display: block;
}
#banner, #banner-en {
	position: absolute;
	background-repeat: no-repeat;
	left: 390px;
	top: 193px;
}
#banner {
	background-image: url(assets/templates/haruguchi/images/banner.jpg);
}
#banner-en {
	background-image: url(assets/templates/haruguchi/images/banner_en.jpg);
/* display: none; */
}
#banner a, #banner-en a {
width: 200px;
height: 37px;
display: block;
}

/*************/
/*   Home    */
/*************/
#page #row-top {
	padding: 20px;
	color: #fff;
	width: 660px;
	margin-top: 0;
	margin-right: 40px;
	margin-bottom: 0;
	margin-left: 40px;
}
#page .row {
	background-color: #ccc;
	padding: 20px 60px;
	margin: 60px;
	border: 4px solid #999999;
}
#page p {
	text-align: justify;
}
#page .row div.title{
	font-size: 85%;
	color: #666;
	width: 100%;
	text-align: right;
	margin-bottom: 20px;
}
#page .row p {
	margin-top: 0px;
	margin-right: 4px;
	margin-bottom: 20px;
	margin-left: 4px;
	text-align: justify;
}
#page .row div.article{
	width: 355px;
	float: left;
	padding-top: 0px;
	padding-right: 10px;
	padding-bottom: 10px;
	padding-left: 10px;
	margin: 0px;
	line-height: 155%;
}
div.right, div.left {
	width: 160;
	margin-top: 0px;
	margin-right: 10px;
	margin-bottom: 10px;
	margin-left: 10px;
}
div.right img, div.left img {
	border: 3px solid #FFFFFF;
}
div.right {
	float: right;
	margin-right: 0px;
	text-align: center;
}
div.left {
	float: left;
	margin-left: 0px;
}
div.author {
	color: #666;
	text-align: right;
	width: 100%;
	padding: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 16px;
	margin-left: 0px;
}

/*************/
/* Biography */
/*************/

ul#keireki {
	margin: 20px 40px;
	width: 720px;
	list-style: none;
	padding: 0 0 0 12px;
}
ul#keireki li {
	margin: 0 0 4px 24px;
	color: #ccc;
	font-size: 90%;
}
ul#keireki li.year-midashi {
	margin: 14px 0 8px 12px;
	border-top: solid 1px #999;
	color: #999;
	font-size: 135%;
}

/*********/
/* Works */
/*********/

div#thumbnails {
	padding: 8px;
	margin-left: 30px;
}
div#thumbnails img{
	border: solid 1px #ccc;
	margin: 2px 4px;
}

#page div#work-comment {
	width: 630px;
	background-image: url(assets/templates/haruguchi/images/portrait_haruguchi.png);
	background-position: 0px 30px;
	background-repeat: no-repeat;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 40px;
	color: #FFFFFF;
	height: 600px;
	padding-top: 16px;
	padding-right: 40px;
	padding-bottom: 40px;
	padding-left: 40px;
}

/*********/
/* Form */
/*********/

form#form1 div.item-title{
	width: 200px;
	float: left;
	text-align: right;
	padding-top: 2px;
	padding-right: 8px;
	padding-bottom: 0px;
	padding-left: 0px;
}
form#form1 input.input_text, form#form1 textarea{
	float: left;
	width: 400px;
}
.form_item_row {
	margin: 12px 0;
}
.form_row {
	margin: 0px;
	width: 608px;
	padding-top: 12px;
	padding-right: 0px;
	padding-bottom: 12px;
	padding-left: 0px;
	text-align: right;
}
.form_row #submit1 {
	font-size: 135%;
	height: 20px;
	width: 40px;
	padding: 4px;
}
input#name, input#mail {
	font-size: 20px;
}
form#form1 div#mtype{
	clear: both;
	margin-top: 12px;
	margin-right: 10px;
	margin-bottom: 12px;
	margin-left: 212px;
	padding: 12px 24px 12px 24px;
	width: 280px;
	float: none;
	border: 4px solid #999999;
}
.error {
	color: #f00;
	font-size: 12px;
}


p.copyright {
	font-size: 80%;
	color: #CCCCCC;
	width: 600px;
	margin-left: 100px;
	font-weight: normal;
}

