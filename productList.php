<?php  
	session_start();
    require_once("config.php");
    require_once("util/AppUtil.php");
	require("webconfig.php");
require_once("admin-panel/Database.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>
    	<style type="text/css">
			.txtbox{
				
			}
			.dropdownlist{
				
			}
			.button{
				border-radius:3px;
				font-weight:bold;				
			}
			.button:hover{
				color:#000;
				//background-color:#09C;//#F79021
			}
        </style>
        <link rel="stylesheet" type="text/css" href="index_files/skin1.css">
        <style type="text/css">
            .brands_slider_home{clear: both;margin: 0;padding: 30px 0 0;}
            .bestoffer_body .gallerytable ul{margin:0 0 0 10px !important;}
            .home_promo_banner{margin:10px 0 0 0;}
            .home_promo_banner .left_h{float:left;}
            .home_promo_banner .right_h{float:right;}
            .home_promo_img{}
            .col1-layout .main{padding-bottom:0 !important;}
            .ma-brand-slider-contain{padding:1px 0 10px !important;}
            .home_promo_img .promo_left{float:left;}
            .home_promo_img .promo_right{float:right;width:520px;}
            .home_promo_img .promo_right .left_one{float:left;}
            .home_promo_img .promo_right .right_two{float:right;width:256px;}
        </style>
        
        <style type="text/css">
            .ma-topcart2{
                background:#FFFFFF; 
                margin: 48px 0 0 -60px; 
                padding: 15px 10px 10px; 
                position: absolute; 
                text-align: left; 
                width: auto; 
                z-index: 9990;
            }
        </style>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>&nbsp;&nbsp;&nbsp;&nbsp; i biponi</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link rel="icon" href="" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="index_files/styles.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/widgets.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/fish_menu.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/popup.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/styles_002.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/ma_002.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/nav.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/ma_003.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/ma_006.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/ma_004.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/ma_005.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/ma.css" media="all"> 
    <link rel="stylesheet" type="text/css" href="index_files/ma_007.css" media="all">
    <link rel="stylesheet" type="text/css" href="index_files/print.css" media="print">
    
        <script src="index_files/ga.js" async="" type="text/javascript"></script>
        <script src="index_files/ga.js" async="" type="text/javascript"></script>
        <script type="text/javascript" src="index_files/prototype.js"></script>
        <script type="text/javascript" src="index_files/ccard.js"></script>
        <script type="text/javascript" src="index_files/validation.js"></script>
        <script type="text/javascript" src="index_files/builder.js"></script>
        <script type="text/javascript" src="index_files/effects.js"></script>
        <script type="text/javascript" src="index_files/dragdrop.js"></script>
        <script type="text/javascript" src="index_files/controls.js"></script>
        <script type="text/javascript" src="index_files/slider.js"></script>
        <script type="text/javascript" src="index_files/js.js"></script>
        <script type="text/javascript" src="index_files/form_002.js"></script>
        <script type="text/javascript" src="index_files/menu.js"></script>
        <script type="text/javascript" src="index_files/translate.js"></script>
        <script type="text/javascript" src="index_files/cookies.js"></script>
        <script type="text/javascript" src="index_files/ma_002.js"></script>
        <script type="text/javascript" src="index_files/backtotop.js"></script>
        <script type="text/javascript" src="index_files/form.js"></script>
        <script type="text/javascript" src="index_files/ma_009.js"></script>
        <script type="text/javascript" src="index_files/ma_003.js"></script>
        <script type="text/javascript" src="index_files/ma_008.js"></script>
        <script type="text/javascript" src="index_files/ma.js"></script>
        <script type="text/javascript" src="index_files/ma_006.js"></script>
        <script type="text/javascript" src="index_files/ma_010.js"></script>
        <script type="text/javascript" src="index_files/ma_007.js"></script>
        <script type="text/javascript" src="index_files/ma_005.js"></script>
        <script type="text/javascript" src="index_files/ma_004.js"></script>
        <script type="text/javascript" src="index_files/popup.js"></script>
        <script type="text/javascript">
        //<![CDATA[
        Mage.Cookies.path     = '/';
        Mage.Cookies.domain   = '';
        //]]>
        </script>
    
        <script type="text/javascript">
    //<![CDATA[
    optionalZipCountries = ["AF","AX","AL","DZ","AS","AD","AO","AI","AQ","AG","AR","AM","AW","AU","AT","AZ","BS","BH","BD","BB","BY","BE","BZ","BJ","BM","BT","BO","BA","BW","BV","BR","IO","VG","BN","BG","BF","BI","KH","CM","CA","CV","KY","CF","TD","CL","CN","CX","CC","CO","KM","CG","CD","CK","CR","CI","HR","CU","CY","CZ","DK","DJ","DM","DO","EC","EG","SV","GQ","ER","EE","ET","FK","FO","FJ","FI","FR","GF","PF","TF","GA","GM","GE","DE","GH","GI","GR","GL","GD","GP","GU","GT","GG","GN","GW","GY","HT","HM","HN","HK","HU","IS","IN","ID","IR","IQ","IE","IM","IL","IT","JM","JP","JE","JO","KZ","KE","KI","KW","KG","LA","LV","LB","LS","LR","LY","LI","LT","LU","MO","MK","MG","MW","MY","MV","ML","MT","MH","MQ","MR","MU","YT","MX","FM","MD","MC","MN","ME","MS","MA","MZ","MM","NA","NR","NP","NL","AN","NC","NZ","NI","NE","NG","NU","NF","MP","KP","NO","OM","PK","PW","PS","PA","PG","PY","PE","PH","PN","PL","PT","PR","QA","RE","RO","RU","RW","BL","SH","KN","LC","MF","PM","VC","WS","SM","ST","SA","SN","RS","SC","SL","SG","SK","SI","SB","SO","ZA","GS","KR","ES","LK","SD","SR","SJ","SZ","SE","CH","SY","TW","TJ","TZ","TH","TL","TG","TK","TO","TT","TN","TR","TM","TC","TV","UG","UA","AE","GB","US","UY","UM","VI","UZ","VU","VA","VE","VN","WF","EH","YE","ZM","ZW"];
    //]]>
    </script>
    
        <script type="text/javascript">
        var Translator = new Translate([]);
    </script>
    	        
        <script src="index_files/mixpanel-2.js" async="" type="text/javascript"></script>        
		<!------->
        <script src="js/jquery-lib.js" type="text/javascript" language="javascript"></script>
        <script src="js/ajax.js" type="text/javascript" language="javascript"></script>  
        <script src="js/submitter.js" type="text/javascript" language="javascript"></script>     
        <style media="screen" type="text/css">
    #dddContent {visibility:hidden}
    </style>
        <style media="screen" type="text/css">#easyInlineSwf {visibility:hidden}</style>
        
		<style type="text/css">
        .bb28f41r0f {  display:inline !important; list-style:none; text-align:left; float:none; padding:0; margin:0; border:1px solid transparent; border-bottom:1px solid; text-decoration:underline; color:#0000FF; font-weight:normal; cursor:pointer; }
        </style>
        
        <style type="text/css">
        .adbox  { padding:0 !important; margin:0 !important; display:block; xwidth:400px; xheight:200px;  z-index:2000000000; text-decoration:none !important;}
        </style>
                                                                                                                                                          <style type="text/css">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    #reviewsDisp , #reviewsDisp * { position:relative; color:inherit; font-family:Arial; font-weight:inherit; font-size:inherit; margin:0; padding:0; box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; text-align:center; line-height:1; border:none; -webkit-border-radius:0; -moz-border-radius:0; border-radius:0; text-shadow:none;-moz-box-shadow: none; -webkit-box-shadow: none;box-shadow: none;overflow:hidden; }#reviewsDisp { display:block; position:relative; margin:9px; width:143px; height:70px; color:#BABABA; background:#FFF; border:1px solid #BABABA; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; overflow:hidden; }#reviewsDisp.reviewRed { color:#C66; }#reviewsDisp.reviewYellow { color:#C90; }#reviewsDisp.reviewGreen { color:#6B9E0C; }#reviewsDisp .reviewContent { display:block; float:left; width:119px;  }#reviewsDisp .reviewTitle { height:23px; font-size:14px; color:#69C; font-weight:bold; background: #ffffff; background: -moz-linear-gradient(top,  #ffffff 0%, #eeeeee 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eeeeee));background: -webkit-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: -o-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: -ms-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: linear-gradient(to bottom,  #ffffff 0%,#eeeeee 100%);  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );  }#reviewsDisp.trust.reviewRed .reviewTitle, #reviewsDisp.trust.reviewYellow .reviewTitle, #reviewsDisp.trust.reviewGreen .reviewTitle { color:inherit; }#reviewsDisp .reviewTitle > div { line-height:23px; }#reviewsDisp .reviewSection { height:28px; margin:5px 0 0; font-size:12px; font-weight:bold; }#reviewsDisp .reviewSection .percent.rated { font-size:26px }#reviewsDisp .reviewSection .percent span { font-size:18px; position:relative; top:-7px; }#reviewsDisp .reviewSection .reviewStars { color:#BABABA;font-size:12px;margin-left:4px; }#reviewsDisp .reviewSection .reviewStar { float:left; margin-top:3px; width:22px; height:22px; background:url(//wac.edgecastcdn.net/800952/a1008/app/review_sprite.png) transparent; background }#reviewsDisp .reviewSection .reviewStar.reviewStarFull { background-position:-5px -88px }#reviewsDisp .reviewSection .reviewStar.reviewStarHalf { background-position:-27px -88px }#reviewsDisp .reviewSection .reviewStar.reviewStarNone { background-position:-49px -88px }#reviewsDisp .reviewFooter { font-size:10px; line-height:12px;color:#BABABA; }#reviewsDisp.trust .reviewFooter { color:inherit; margin:0 5px; overflow:hidden; }.trust .rate { display:none }.rate .trust { display:none }#reviewsDisp .reviewNav { width:24px; display:block; float:right; }#reviewsDisp .reviewNav .reviewBtn { display:block; height:23px; background:url(//wac.edgecastcdn.net/800952/a1008/app/review_sprite.png) transparent; background-color:#E3E3E3; border-bottom:1px solid #FFF;cursor:pointer; }#reviewsDisp .reviewNav .reviewBtn:last-child { border-bottom:none; }#reviewsDisp .reviewNav .reviewBtn.hover { background-color:#D1D1D1; }#reviewsDisp .reviewNav .reviewBtn.reviewSelected { background-color:#BABABA; cursor:auto; }#reviewsDisp .reviewNav .reviewBtn.reviewCheck { background-position: -3px -6px }#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewCheck { background-position: -33px -6px }#reviewsDisp .reviewNav .reviewBtn.reviewThumb { background-position: -3px -59px }#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewThumb { background-position: -33px -59px }#reviewsDisp .reviewNav .reviewBtn.reviewInfo { background-position: -3px -32px }</style><style type="text/css">#TT_Frame { display:none; position:fixed;_position:absolute; top:auto; right:auto; bottom:0px;  _bottom:expression(eval(closed ? 40 : 0 - document.body.scrollTop));left:0px;font-size:15px/1em !important;font-family: Arial, sans-serif !important;text-shadow:none; margin:0;  }#TT_Frame { z-index:2147483645;background: none repeat scroll 0% 0% rgb(250, 250, 250); border: medium none rgb(250, 250, 250); padding: 0px; margin: 0px; border-radius: 0px 0px 2px 2px; box-shadow: 0px 0px 5px rgb(0, 0, 0); }#TT_Frame.TT_Side { position:fixed;top:0px; bottom:auto; _position:absolute;_bottom:auto; _top:eval(document.body.scrollTop); }#TT_Frame.TT_Side.left { left:0px; right:auto; }#TT_Frame.TT_Side.right { left:auto; right:0px; }#TT_Frame { width:100%; height:34px; }#TT_Frame.small { font-size:12px !important; }#TT_Frame.TT_Side { width:160px; height:100%; }#TT_Close_Btn { position:absolute; top:12px; right:3px; bottom:auto; left:auto; width: 10px; height: 10px; background:url(//wac.edgecastcdn.net/800952/a1004/app/img/tt_buttons.png) no-repeat -1px -32px; cursor:pointer }.TT_Side #TT_Close_Btn { top:5px;right:5px; }#TT_Close_Btn.hover { background-position:-1px -32px; }#TT_Branding { position:absolute; top:8px; right:auto; bottom:auto; left:15px; width:16px; height:16px; background:url(//wac.edgecastcdn.net/800952/a1004/app/img/tt_buttons.png) no-repeat -20px -31px; cursor:pointer; }.buzzdock #TT_Branding { width:26px; height:18px; }.TT_Side #TT_Branding { top:2px; left:2px; }#TT_Branding.hover { background-position:-46px -31px; }.buzzdock #TT_Branding.hover { background-position:-51px -31px; }#TT_Related { position:absolute; overflow:hidden; }#TT_Related { top:4px; right:auto; bottom:auto; height:22px; padding:0 20px 0 45px; width:100% !important; }.TT_Side #TT_Related { margin:25px 0 92px; top:0; right:auto; bottom:auto; left:0; height:auto; padding:0; }#TT_Related ul { line-height: 24px; margin:0; padding:0; list-style: none; text-align:left; }#TT_Related ul li { font-family: Arial,sans-serif !important; text-shadow: none !important; font-size:15px !important; background:none;background-image:none !important;float:left; clear:right; margin:0; padding: 0 7px;list-style:none;color:#000; background:none; list-style: none; line-height:24px !important; }#TT_Related > ul > li > a { font-size: 15px !important; white-space:normal; }#TT_Related > ul > li > a > .author { width:128px; text-align:right !important; font-size: 10px !important; line-height:10px; font-style:italic; font-weight:normal; color:#999; }.small #TT_Related ul li { background:none;background-image:none !important;margin:0 5px; padding: 0 5px; list-style: none;clear:both }.TT_Side #TT_Related ul li { float:none; display:block; margin-bottom:20px; }.TT_Side #TT_Related ul li:first-child { margin-bottom:5px; }.TT_Side #TT_Related ul li.divider { display:none; }#TT_Related ul li:before, #TT_Related ul li:before { display:none !important; background:none !important; }#TT_Related ul li:last { background:none;background-image !important:none;margin:0; padding:0;list-style: none; }#TT_Related a { color:#0645AD !important;background:none !important; background-image:none !important; text-decoration:none; text-transform:capitalize; text-shadow:none; font-weight:600; padding:0; margin:0;text-align:left !important; float:none !important; }.TT_Side #TT_Related a { display:block; line-height:20px; }#TT_Related li.tt_related_img:hover { background:#e5e5e5; }#TT_Related li.tt_related_img a > div { position:relative; height:100%; margin-bottom:12px; text-align:center; }#TT_Related a > div.related_sm  { float:left; clear:both; margin-right:5px; }#TT_Related a > div.related_sm img { width:32px; height:auto; }#TT_Related a > div .cc_attribution { font-size:6pt; line-height:8px; -moz-border-radius:8px; -webkit-border-radius:8px; border-radius:8px; width:7px; color:#CCC; border:1px solid #CCC; color:rbga(255,255,255,.5) cursor:pointer; position:relative; margin-top:2px;text-decoration:none; }#TT_Related a > div.related_lg .cc_attribution { position:absolute; right:2px; left:auto; bottom:-12px; top:auto; }#TT_Related a > div.related_sm .cc_attribution { right:auto; left:0;  }#TT_Related hr { margin:5px 0; clear:both; }#TT_Related .video { cursor:pointer; }#TT_Related .video a { text-decoration:underline; }#TT_Related a:hover { color:#0645AD; text-decoration:underline;padding:0; margin:0; }#TT_Related a:hover * { text-decoration:none !important; }#TT_Closed { z-index:9999999999; position:fixed; width: 22px; height:27px; background: none repeat scroll 0% 0% rgb(250, 250, 250); border: medium none rgb(250, 250, 250); padding: 0px; margin: 0px; border-radius: 0px 0px 2px 2px; box-shadow: 0px 0px 5px rgb(0, 0, 0); display: block; cursor:pointer; }#TT_Closed { top:auto;right:5px;bottom:-40px;left:auto; _position:absolute; _bottom:expression(eval(closed ? 40 : 0 - document.body.scrollTop) + "px");  }#TT_Closed.buzzdock { width:32px }#TT_ClosedBranding { position:relative; margin:2px auto; width:16px; height:16px; background:url(//wac.edgecastcdn.net/800952/a1004/app/img/tt_buttons.png) no-repeat -46px -31px; }.buzzdock #TT_ClosedBranding { width:25px; background-position:-51px -31px; }.TT_Side #TT_ClosedBranding { margin:2px; display:inline-block }#TT_ClosedArrow { position:relative; margin:2px auto; width:16px; height:5px; background:url(//wac.edgecastcdn.net/800952/a1004/app/img/tt_buttons.png) no-repeat -165px -38px; }#TT_ClosedArrow.hover { background-position:-190px -38px }.TT_Side #TT_ClosedArrow { display:none; }#TT_Frame , #TT_Closed { transition: left 1s, right 1s, bottom 1s; -moz-transition: left 1s, right 1s, bottom 1s; -webkit-transition:  left 1s, right 1s, bottom 1s;  -o-transition: width  left 1s, right 1s, bottom 1s; }
        </style>
    
        <script src="index_files/ga.js"></script>
    </head>

	<body style="" class=" cms-index-index cms-home">
        <!-- top dropdown cart -->
        <div class="ma-shopping-contain"></div>
		<script type="text/javascript">
			$bn1(document).ready(function(){
				
			$bn1(".ma-shoppingcart").click(function(){
				$bn1(".ma-topcart").slideToggle(500);                        
			});					
			
			$bn1("#login").click(function(){
				if($.trim($("#login-span1").text())=="Log in")
					$bn1("#login-container").slideToggle(500);
				else if($.trim($("#login-span1").text())=="Log out")
					$bn1("#Logout-container").slideToggle(500);
			}); //Login Logout Toggle
			
			/*Registration JQUARY*/
			
			$bn1("#Registration").click(function(){
				$bn1("#Registration-container").slideToggle(500);						
			});
			
			$bn1("#ChangePassword").click(function(){
				$bn1("#Logout-container").slideToggle(500);
				$bn1("#ChangePassword-container").slideToggle(500);
			});
			
			
			/*$("#Logout").click(function(){
				$.ajax({
					url: "submitter.php",
					type: "POST",
					dataType:"json",
					data: { Logout : "Logout" },
					success:function(msg){
						if(msg.success){
							//Change value span 1 and 2	110px 145px : 145px;
							$("#login-span1").text("Log in");
							$("#header-container").css({"height":"110px"});
							$("#custName").css({"display":"none"});
							alert("Successfully Logout.");									
							$("#Logout-container").slideToggle(500);
						}
						else
							alert(msg.message);
					},
					error:function(error){
						alert(eval(error));
					}
				});
			});*/	 //Logout
			
			
				
			});
         </script>
        <!-- left or right easycart  -->
        <!-- BEGIN GOOGLE ANALYTICS CODEs -->
        <script type="text/javascript">
        //<![CDATA[
            var _gaq = _gaq || [];
            
        _gaq.push(['_setAccount', 'UA-42616784-1']);
        _gaq.push(['_trackPageview']);
            
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        
        //]]>
        </script>
        <!-- END GOOGLE ANALYTICS CODE -->
        <div class="ma-wrapper">
            <noscript>
                <div class="global-site-notice noscript">
                    <div class="notice-inner">
                        <p>
                            <strong>JavaScript seems to be disabled in your browser.</strong><br />
                            You must have JavaScript enabled in your browser to utilize the functionality of this website.                
                        </p>
                    </div>
                </div>
            </noscript>
            
            <div class="ma-page">                
                <div class="ma-head-wrap">
                    <div class="ma-head">
                       <style type="text/css">
                            .fb_icon_big{position:fixed;top:11%;right:0;}
                            .feed_icon_big{position:fixed;top:20%;right:1%;}
                            .ma-shoppingcart{float:right !important;width:90px !important;}
                            .cms-home .category_menus .#menus_itms{box-shadow:none !important;}
                            .category_menus{position:absolute; width:215px;box-shadow:-3px 3px 3px 0px #e6e6e6; margin:0 0 0 -15px;}
                            cms-home .category_menus{height:342px;}
                            .category_menus #menus_itms{
                                position:absolute;top:40px;width:98%;border-top:5px solid #000;background:#FFF;box-shadow:2px 2px 13px 2px #ddd;}
                            .h_all_con a{color:#efeeed;}
                            .h_all_con a:hover{color:#F7901E;}
                            .h_all_con ul{color:#f7901e;}
                            .h_all_con .msg_links p,.h_all_con .msg_links a{color:#efeeed; padding:0 10px;}
                            .service_help_cus{position:relative; margin:10px 0;}
                            .service_help_cus .call_support{color:#f7901e !important;}
                            .service_help_cus ul{display:inline-block;}
                            .service_help_cus ul li{display:inline-block;color:#FFF;}
                            .menu_left_h{float:left;margin-top:15px;}
                            .menu_left_h .links2 li a{padding:0 10px 0 6px;}
                            .block_right_a{width:285px;float:right;margin-right:0;}
                            .menu_left_h ul li{display:inline-block;}
                            .quick-access .menu_block{border-top:1px solid #4a4a4a;width:700px;float:right;padding-top:10px;}
                            .block_right_a .acc_block{
                                display:inline-block;float:left;min-width:40px;color:#FFF; 
                                border-right:1px solid #4A4A4A;padding:0 20px 0 10px;text-align:left;
                            }
                            .block_right_a .acc_block span{color:#f7901e;}
                            .category_search{background:#EAEAEA;padding:12px 20px 0px 20px;}
                            .category_search .mini-search{}
                            .category_search .mini-search #search{
                                width:730px;padding:2px 0px;height:28px;text-indent:5px;box-shadow:4px -1px 5px -3px gray;}
                            .category_search .mini-search #cat{
                                height:34px;padding:6px 8px 6px 5px;border-right:none;margin-right:-4px;
                                border-radius:8px 0 0 8px;box-shadow:4px -1px 5px -3px gray;width:110px;}
                            .category_search .mini-search .go_btn{
                                background:#414952;cursor:pointer;border:1px solid #313A44;
                                border-radius:0 8px 8px 0; color:#FFF;font-weight:bold; 
                                height:34px;margin-left:-4px;padding:0 5px 3px;font-size:14px;box-shadow:-1px -3px 12px -6px gray;
                            }
                        </style>
                        
                      <div class="ma-header-container">
                            <div id="header-container" class="header">
                                <div class="h_all_con">
                                        <h1 class="logo">
                                            <!--<strong>Bangladesh Brands</strong>-->
                                            <a href="http://ibiponi.com/index.php/" title="Ibiponi" class="logo" >
                                                <!--<img src="img/logo-ibiponi.png" alt="Bangladesh Brands">-->
                                                <table style="margin-top:-20px; width:290px;">
                                                    <tr><td style="font-size:36px; font-weight:bold;">ibiponi</td></tr>
                                                    <tr><td style="font-size:14px; ">It's Organise by Satkhira Consalting Firm Ltd.</td></tr>
                                                </table>
                                            </a>
                                        </h1>                    
                                        
                                        <div class="h_others_con">
                                            <div class="quick-access">
                                                <div class="msg_links">
                                                    <p class="welcome-msg">Welcome to ibiponi.com </p>
                                                    <ul class="links">
                                                        <li class="first">
                                                            <a href="#"><img src="index_files/shipping_icon.png" style="margin:0 5px 0 0;">Shipping </a>
                                                        </li>
                                                        <li class="first">
                                                            <a href=""><img src="index_files/payment_icon.png" style="margin:0 5px 0 0;">Payment</a>
                                                        </li>
                                                        <li class="first">
                                                            <a href=""><img src="index_files/cd_icon.png" style="margin:0 5px 0 0;">Cash on Delivery</a>|
                                                        </li>                                
                                                        <li class="register-container">
                                                            <a id="Registration" href="#">Register</a>|
                                                        </li>						
                                                        <!--<li><a href="">Signin</a>|</li>-->
                                                        <!--<li class="ajaxlogin-logout-container">
                                                            <a id="ajax_login_link" href="javascript:void(0)">Order Status</a>|
                                                        </li>-->			
                                                        <li class=" last"><a href="">Help</a></li>
                                                    </ul>
                                                    <div class="clearer">&nbsp;</div>
                                                    <div id="ajax_login_wrapper" style="display: none; position: absolute; z-index: 100; top: 22px; left: 751px;">
                                                        <div id="ajax_login_contents">       
                                                            <ul class="messages" id="ajax_login_wrapper_ul" style="text-align:left;">
                                                                <li class="error-msg">
                                                                    <ul>
                                                                        <li>
                                                                            <span id="do-err-messages"></span>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                            
                                                            <form action="" onsubmit="return ajaxloginForm.getClass().validateForm();" method="post" id="do_ajaxlogin_form">
                                                                    <div id="float1">
                                                                       <input name="login[username]" value="Login" id="do-mini-login" class="input-text required-entry validate-email" type="text">
                                                                    </div>
                                                                    <div id="float2">
                                                                         <input name="login[password]" id="do-mini-password" class="input-text required-entry validate-password" value="Password" type="password">
                                                                    </div>
                                                                    <div class="actions">
                                                                        <button type="submit" class="button fastloginButton"><span>Login</span></button>                
                                                                    </div>
                                                            </form>	 
                                                        </div>  
                                                        <div id="ajaxlogin_loader_holder" style="display:none;"></div> 
                                                    </div>
                        
                                                    <img id="ajaxlogin_loader_cache" src="index_files/ajaxlog_loader.gif">
                                                    <script type="text/javascript">
                                                        document.observe("dom:loaded", function() {
                                                               ajaxloginForm.cartSidebar = false;      
                                                             ajaxloginForm.init('do_ajaxlogin_form');
                                                             ajaxloginForm.getClass().computeBlockPosition('ajax_login_wrapper');
                                                        });
                                                    </script>			
                                                </div>
                                    
                                                <div align="left" style="padding-left:22%;" class="service_help_cus">
                                                    <ul style="padding-left:63.7%;">
                                                        <li class="call_support"><span class="call_s_h_l">
                                                            <span id="bb28f41r0f_1" class="bb28f41r0f">Help Line</span> 
                                                            <img src="index_files/help_icon.png"></span> +880177778639</li>
                                                            <!--<li style="margin:0 10px 0 10px;"><a href="#">Customer Services</a></li>-->
                                                            <li><a href="http://ibiponi.com">Contact Us</a>
                                                       	</li>
                                                    </ul>
                                                                                                   
                                                    <ul id="custName" style="display:none; width:55%;">
                                                        <li style="text-align:left;">Well Come &nbsp;</li>
                                                        <br />
														<?PHP 
                                                            if(isset($_SESSION['custName'])) 
                                                                echo '<li style="color: #f7901e;">'.$_SESSION['custName'].'</li>';
                                                            else 
                                                                echo '<li style="color: #f7901e;"> Anonymous User </li>';																
                                                        ?>                                                        
                                                    </ul>
                                                    <?PHP 
														if(isset($_SESSION['log'])){
															echo '<script>
																    $("#custName").css({"display":"block"});
																  	$("#header-container").css({"height":"145px"});
																  </script>'
																	
															;
														}
														else{
															echo '<script>
																  	$("#custName").css({"display":"none"});
																  	$("#header-container").css({"height":"110px"}); 
																  </script>'
															;
														}
													?>    	                               
                                                </div>
                                                
                                                
                                                <div class="menu_block">
                                                    <div class="menu_left_h">
                                                        <ul class="links2">
                                                            <li class="first"><a href="http://ibiponi.com/index.php/">Home</a>|</li>
                                                            <!--<li><a href="">New Arrivals</a>|</li>-->
                                                            <li><a href="">Shop by Brands</a>|</li>
                                                            <li class=" last"><a href="">Sales &amp; Deals</a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="block_right_a">
                                                        <div id="login" class="acc_block">                            
                                                            <a title="Log In" id="some_id" href="javascript:void(0);">
                                                                <span id="login-span1">
																	<?PHP 
																		if(isset($_SESSION['log'])) echo 'Log out'; 
																		else echo 'Log in'; 
																	?>
                                                                </span><br>
                                                                <span id="login-span2" class="arrow_icon">Your Account</span>
                                                            </a>
                                                        </div>
                                                        <style type="text/css">
															#login-container{
																display:none;
																margin-top:4%;
																position:absolute; 
																z-index:20;
																border:solid;
																border-radius:10px;
																background-color:#F79021;
																padding:10px;
															}
															/*Registration Style*/
															#Registration-container{
																display:none;
																margin: 4% 0 0 -1%;
																position:absolute; 
																z-index:20;
																border:solid;
																border-radius:10px;
																background-color:#F79021;
																padding:10px;
															}	
															#Logout-container{
																display:none;
																margin: 3.8% 0 0 0%;
																position:absolute; 
																z-index:20;
																border:solid;
																border-radius:10px;
																background-color:#F79021;
																padding:10px;
															}
															#Logout-container tr td{
																font-size:14px;
																font-family:"Comic Sans MS", cursive;
																width:100%;
																height:24px;
															}
															#Logout-container tr td:hover{
																cursor:pointer;
																color:#FFF;
															}
															#ChangePassword-container{
																display:none;
																margin: 4% 0 0 -1%;
																position:absolute; 
																z-index:20;
																border:solid;
																border-radius:10px;
																background-color:#F79021;
																padding:10px;
															}
                                                        </style>
                                                        <div align="center" id="Registration-container">
                                                        	<form id="frmRegistration">
                                                            	<input type="hidden" name="btnRegistration"  />
                                                                <table align="center">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="3" align="center">
                                                                                <p style="font-size:18px" align="center">Registration</p><br>
                                                                            </td>
                                                                        </tr>                                       
                                                                        <tr>
                                                                                <td align="right" style="padding:5px; text-align:right;">Email: </td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="Email" placeholder="Enter Your Email" type="text">
                                                                                </td>
                                                                                <td style="padding-top:3%;">*</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td align="right" style="padding:5px; text-align:right;">Password: </td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="Password" placeholder="Enter Your Password" type="password">
                                                                                </td>
                                                                                <td style="padding-top:3%;">*</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td align="right" style="padding:5px;">Conform Password:</td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="ConformPassword" placeholder="Enter Your Conform Password" type="password">
                                                                                </td>
                    
                                                                                <td style="padding-top:3%;">*</td>
                                                                        </tr>
                                                                        <tr>                        	
                                                                                <td align="left" style="padding:5px;"></td>
                                                                                <td style="padding:5px">
                                                                                    <input class="button" value="Registration" id="btnRegistration" type="button">
                                                                                </td>
                                                                                <td style="padding:5px" align="left">
                                                                                </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </form>                                                           
                                                        </div>	<!--Registration Div-->
                                                        <div align="center" id="login-container">
                                                        	<form id="frmLogin">
                                                            	<input type="hidden" name="btnLogin" />
                                                                <table align="center">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="3" align="center">
                                                                                <p style="font-size:18px" align="center">Login</p><br>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td align="right" style="padding:5px;">Email:</td>
                                                                                <td style="padding:5px" colspan="2"> 
                                                                                    <input name="email" placeholder="Email ID" type="text">
                                                                                </td>
                                                                                <td style="padding-top:3.9%">*</td>
                                                                        </tr>                                                
                                                                        <tr>
                                                                                <td align="right" style="padding:5px;">Password: </td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="password" placeholder="Password" type="password">
                                                                                </td>
                                                                                <td style="padding-top:3.9%">*</td>
                                                                        </tr>
                                                                        <tr>                        	
                                                                                <td align="right" style="padding:5px;"></td>
                                                                                <td style="padding:5px">
                                                                                    <input value="Login" id="btnLogin" type="button">
                                                                                </td>
                                                                                <td style="padding:5px" align="left">
                                                                                    <!--<img id="forgetpasswordicon" title="Forget Password" style="margin-bottom:-7px" src="img/membership/forgetpassword.png" width="20px">-->
                                                                                </td>
                                                                        </tr>
                                                                        <!--<tr>
                                                                            <td colspan="3" style="text-align:right;">
                                                                                <a style="text-align:center;" href="#">Register</a>
                                                                            </td>
                                                                        </tr>-->
                                                                    </tbody>
                                                                </table>
                                                                <table align="left">
                                                                    <tr>
                                                                        <td style="width:250px;" >
                                                                            <a href="#">Forget Password</a>                                                                  	</td>
                                                                        <td></td>
                                                                        <td style="width:50px; text-align:right;">
                                                                            <a href="#">Register</a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                        	</form>
                                                        </div>	<!--Login Div-->
                                                        <div id="Logout-container">
                                                                <table>
                                                                    <tr>
                                                                        <td id="UpdateProfile">Update Profile</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id="ChangePassword">Change Password</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td id="Logout">Logout</td>                                                                    </tr>
                                                                </table>
                                                        </div>	<!--Logout Div-->
                                                        <div id="ChangePassword-container">
                                                        	<form id="frmChangePassword">
                                                            	<input type="hidden" name="btnChangePassword"  />
                                                                <table align="center">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="3" align="center">
                                                                                <p style="font-size:18px" align="center">Change Password</p><br>
                                                                            </td>
                                                                        </tr>                                       
                                                                        <tr>
                                                                                <td align="right" style="padding:5px; text-align:right;">Old Password: </td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="oldPassword" placeholder="Enter Your Old Password" type="password">
                                                                                </td>
                                                                                <td style="padding-top:3%;">*</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td align="right" style="padding:5px; text-align:right;">Password: </td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="password" placeholder="Enter Your Password" type="password">
                                                                                </td>
                                                                                <td style="padding-top:3%;">*</td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td align="right" style="padding:5px;">Conform Password:</td>
                                                                                <td style="padding:5px" colspan="2">
                                                                                    <input name="ConformPassword" placeholder="Enter Your Conform Password" type="password">
                                                                                </td>
                    
                                                                                <td style="padding-top:3%;">*</td>
                                                                        </tr>
                                                                        <tr>                        	
                                                                                <td align="left" style="padding:5px;"></td>
                                                                                <td style="padding:5px">
                                                                                    <input class="button" value="Change Password" id="btnChangePassword" type="button">
                                                                                </td>
                                                                                <td style="padding:5px" align="left">
                                                                                </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </form>               
                                                        </div>
                                                        
                                                        
                                                        <div class="ma-shoppingcart">
                                                            <div class="cart-item">Selected</div>
                                                            <span class="ma-inactive">0 item</span>
                                                        </div>
                                                        
                                                        <div class="ma-topcart">
                                                            <p class="empty">You have no items in your 
                                                                <span id="bb28f41r0f_2" class="bb28f41r0f">shopping</span> bag.
                                                            </p>
                                                        </div>
                    
                                                        <div class="acc_block ma-wishlist" style="padding-right:10px;background:none;float:left;width:auto;">
                                                            <a href="javascript:void(0);">
                                                                <span style="background:none;">Wish</span><br>
                                                                <span class="arrow_icon">List</span>
                                                            </a>
                                                        </div>
                                                        
                                                        <div class="ma-topcart2" style="display: none; z-index:1000;">
                                                            <div class="my-wishlist">
                                                                <div class="page-title title-buttons">
                                                                    <h1>My Wishlist</h1>
                                                                </div>
                                            
                                                                <fieldset>
                                                                    <table class="data-table" id="wishlist-table">
                                                                        <colgroup><col width="1"><col> <col width="1"><col width="1"><col width="1">
                                                                        </colgroup>
                                                                        <thead>
                                                                            <tr class="first last">
                                                                                <th>Product</th>
                                                                                <th>Product Name</th>
                                                                                <th class="a-center">
                                                                                    <span class="nobr">Added On</span>
                                                                                </th>
                                                                                <th class="a-center"><span class="nobr">Add to Cart</span></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="first last odd">
                                                                                <td class="last" colspan="4"> 
                                                                                    <center><b>You have no items in your wishlist!</b></center>
                                                                                </td>
                                                                            </tr> 
                                                                        </tbody>
                                                                    </table>
                                                                </fieldset>
                                                            </div>			
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="clearer">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="clearer">&nbsp;</div>
                                </div>        
                            </div> <!--Header-->
                            
                            <div class="category_search">
                                <a href="javascript:void(0);" class="slide_menu" id="test" style="width:100px;float:left;background:#000;color:#FFF; padding:6px 0 6px 10px; margin:0 0 0 -15px; border-radius:5px 5px 0 0;text-align:left;line-height:14px;">
                                <span>All <span style="font-weight:bold;">Categories</span></span>
                                </a>
                                <div class="category_menus">
                                    <div id="menus_itms">
                                        <div id="sidenav">
                                      		<!--<div class="sidenav_h"> <a href="/SiteMap" id="sitemap">Shop All Categories</a> </div>--->
                                        	<div id="sitemap_menu" class="sidebar_menu hide">
                                            <div class="litem" style="width: 209px;">
                                                <span>
                                                    <a href=""> Food &amp; Beverage <!--<img style="margin:1px 0 0 9px" alt="new" src="index_files/new-menu.gif">--></a>
                                                </span>   
                                                
                                                <!--<div style="width:570px; display: none; left:209px;" class="subitem">
                                                    <div align="left" style="float:left; margin-left:20px;">
                                                        <ul>
                                                            <li class="sub_category_self addborder"><a style="color:#F38A4B; font:bold;" href="">Honey Catagory &amp; Price</a></li>
                                                            <table id="htable" style="margin-top:10px;">
                                                                <tbody><th>Honey Name</th><th>250 ml</th><th>500 ml</th><th>1 KG</th></tbody>
                                                                <tr>
                                                                    <td>Sundarbans honey</td>
                                                                    <td>150 Tk</td>
                                                                    <td>270 Tk</td>
                                                                    <td>530 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Kalojira Honey</td>
                                                                    <td>200 Tk</td>
                                                                    <td>320 Tk</td>
                                                                    <td>630 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Lychee honey</td>
                                                                    <td>150 Tk</td>
                                                                    <td>270 Tk</td>
                                                                    <td>550 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Dhonia honey</td>
                                                                    <td>200 Tk</td>
                                                                    <td>320 Tk</td>
                                                                    <td>630 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Sorisa honey</td>
                                                                    <td>130 Tk</td>
                                                                    <td>230 Tk</td>
                                                                    <td>450 Tk</td>                    
                                                                </tr>               
                                                            </table>
                                                        </ul>
                                                    </div>
                                                    <div align="right">
                                                        <img style="margin-right:20px;" src="img/Honey.png" width="170">
                                                    </div>
                                                    <p style="color:#09F;font-size:18px;margin:0 0 0 10px">This Honey is Generated by Our Firm.It is sold with guarantee.</p>
                                                    <p style="color:red;font-size:18px;margin:0 0 0 10px">It is also tested from the science laboratory.</p>		
                                                 </div>-->
                                            </div>	<!-- 01. Menu Food & Beverage-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Men &amp; Fashion</a><em class="dow_ico"></em></span>
                                            
                                            </div>	<!-- 02. Men & Fashion-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Women &amp; Fashion</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 03. Women & Fashion-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Jewelry &amp; Others</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 04. Jewelry & Others-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Skin &amp; Beauty</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 05. Skin & Beauty-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href=""> Honey <img style="margin:1px 0 0 9px" alt="new" src="index_files/new-menu.gif"> </a><em class="dow_ico"></em></span>
                                                 <div style="width:570px; display: none; left:209px;" class="subitem">
                                                    <div align="left" style="float:left; margin-left:20px;">
                                                        <ul>
                                                            <li class="sub_category_self addborder"><a style="color:#F38A4B; font:bold;" href="">Honey Catagory &amp; Price</a></li>
                                                            <table id="htable" style="margin-top:10px;">
                                                                <tbody><th>Honey Name</th><th>250 ml</th><th>500 ml</th><th>1 KG</th></tbody>
                                                                <tr>
                                                                    <td>Sundarbans honey</td>
                                                                    <td>150 Tk</td>
                                                                    <td>270 Tk</td>
                                                                    <td>530 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Kalojira Honey</td>
                                                                    <td>200 Tk</td>
                                                                    <td>320 Tk</td>
                                                                    <td>630 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Lychee honey</td>
                                                                    <td>150 Tk</td>
                                                                    <td>270 Tk</td>
                                                                    <td>550 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Dhonia honey</td>
                                                                    <td>200 Tk</td>
                                                                    <td>320 Tk</td>
                                                                    <td>630 Tk</td>                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Sorisa honey</td>
                                                                    <td>130 Tk</td>
                                                                    <td>230 Tk</td>
                                                                    <td>450 Tk</td>                    
                                                                </tr>               
                                                            </table>
                                                        </ul>
                                                    </div>
                                                    <div align="right">
                                                        <img style="margin-right:20px;" src="img/Honey.png" width="170">
                                                    </div>
                                                    <p style="color:#09F;font-size:18px;margin:0 0 0 10px">This Honey is Generated by Our Firm.It is sold with guarantee.</p>
                                                    <p style="color:red;font-size:18px;margin:0 0 0 10px">It is also tested from the science laboratory.</p>		
                                                 </div>
                                            </div>	<!-- 06. Honey-->
                                            
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Electronics &amp; Computer</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 07. Electronics & Computer-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Sport &amp; Others</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 08. Sport & Others-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Gift Item</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 09. Gift Item-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Bags &amp; Accessories</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 10. Bags & Accessories-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Education &amp; Book</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 11. Education & Book-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Travels &amp; Booking</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 12. Travels & Booking-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">Web Design &amp; Developers</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 13. Web Design & Developers-->
                                            
                                            <div style="width:209px;" class="litem">
                                                <span><a href="">Health &amp; Care</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 14. Health & Care-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">AA</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 15. AA-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">BB</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 16. BB-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">CC</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 17. CC-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">DD</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 18. DD-->
                                        
                                            <div style="width: 209px;" class="litem">
                                                <span><a href="">EE</a><em class="dow_ico"></em></span>
                                                
                                            </div>	<!-- 19. EE-->
                                        
                                            <div class="litem" style="width: 209px;">
                                                <span><a href="">FF</a></span>
                                            </div>	<!-- 20. FF-->
                                                <!----------------
                                                ">Full Store Directory</a></span></div>
                                            ---------------------------------------------->
                                          </div>	<!--Menu-->
                                  		</div>
                                        
                                        <script type="text/javascript">
											var litem_width=$('sidenav').getWidth()-2;
											$$("div.litem").each (function (s){
												s.setStyle({width:litem_width+"px"});
											});
											$$("div.litem").invoke("observe", "mouseover", function() {
											var offset = this.cumulativeOffset();
											var sidenav=$('sidenav').cumulativeOffset();
											var sidenav_width=$('sidenav').getWidth()-2;
											var offsetTop = offset[1];
											var height= this.down('div.subitem').getHeight();
											var sidenav_h =sidenav[1];
											if ((offsetTop-sidenav_h)>height)
											{
												
												offsetTop=(offsetTop-sidenav_h-(height/2));
												this.down('div.subitem').setStyle({top:offsetTop+"px"});
											}
											
											this.addClassName('hoverClass');this.down('div.subitem').setStyle({display:'block',left:sidenav_width+"px"}) });
											$$("div.litem").invoke("observe", "mouseout", function() {
											this.removeClassName('hoverClass');this.down('div.subitem').setStyle({display:'none'}) });
										</script>	
                                    </div>
                                </div>
                            
                                <div style="width:950px;float:right;text-align:right;margin-bottom:5px;">
                                    <form id="search_mini_form" action="" method="get">
                                        <fieldset>
                                            <legend>Search Site</legend>
                                            <span style="float: left; position: relative; top: 8px; left: 15px;">Search</span>
                                            <div class="mini-search">
                                                <select name="cat" id="cat" class="input-text">
                                                    <option selected="selected" value="">All Products</option>
                                                    <option value="01">Food &amp; Beverage</option>
                                                    <option value="02">Men &amp; Fashion</option>
                                                    <option value="03">Women &amp; Fashion</option>
                                                    <option value="04">Jewelry &amp; Others</option>
                                                    <option value="05">Skin &amp; Beauty</option>
                                                    <option value="06">Honey</option>
                                                    <option value="07">Electronics&amp; Computer</option>
                                                    <option value="08">Sport &amp; Others</option>
                                                    <option value="09">Gift Item</option>
                                                    <option value="10">Bags &amp; Accessories</option>
                                                    <option value="11">Education &amp; Book</option>
                                                    <option value="12">Travels &amp; Booking</option>
                                                    <option value="13">Web Design &amp; Developers</option>
                                                    <option value="14">Health &amp; Care</option>
                                                    <option value="15">AA</option>
                                                    <option value="16">BB</option>
                                                    <option value="17">CC</option>
                                                    <option value="18">DD</option>
                                                    <option value="19">EE</option>
                                                    <option value="20">FF</option>
                                                </select>
                                                <input autocomplete="off" id="search" class="input-text" name="q" value="Search your products" type="text">
                                                <input value="Go" class="go_btn" alt="Go" type="submit">
                                                <div style="display: none;" id="search_autocomplete" class="search-autocomplete"></div>
                                                <script type="text/javascript">
                                                //<![CDATA[
                                                    var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search your products');
                                                    searchForm.initAutocomplete('', 'search_autocomplete');
                                                //]]>
                                                </script>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="clearer" style="margin-top:-1px;">&nbsp;</div>
                            </div>
                            
                            <div class="ma-banner" style="position:relative;float: right;width:845px;right:20px; top:0px;">        
                                <div class="ma-banner1-container">
                                	<div style="width: 845px; height: 550px; " id="slideshowWrapper">	
                                    <div id="loading" style="margin: 50px auto; display: none;"><img src="index_files/loading_bb.gif"></div>
                                   	<ul id="slideshow" style="width: 845px; border-radius:10px; position: relative; overflow: hidden;">			
                                        <li style="position: absolute; width: 845px;  display: list-item;">					
                                            <a href="http://ibiponi.com/img/mslider/" title=""><img src="img/mslider/ICT.png" alt="" width="845" height="550px"></a>
                                        </li>
                                        <li style="position: absolute; width: 845px; display: list-item;">					
                                            <a href="javascript:void(3);" title=""><img src="img/mslider/HoneySundorBon.jpg" alt="" width="845" height="550px"></a>
                                        </li>
                                        <li style="position: absolute; width: 845px; display: none;">					
                                            <a href="javascript:void(3)" title=""><img src="img/mslider/Hony-Firm.jpg" alt="" width="845" height="550px"></a>
                                        </li>
                                    </ul>
                                   	
                                   	<div style="margin-top:1%; height:31%">
                                        <div class="input-form" style="float:left; height:100%; width:33%;">
                                            <div class="ws_images">
                                            <table style="margin-top:4%;" border="3">
                        <?php
                        $type = $_REQUEST["type"];

                        $db=new Database();
                        $db->controls();
                        $db->connection();

                            //$categories = \Util\AppUtil::getFileNames("wow-slider/data/images/");

                        $images = \Util\AppUtil::getFileNames("wow-slider/data/images/" . $type);

                        $i = 0;
                        foreach($images as $img) {
                                    $src = BASE_URL.'wow-slider/data/images/'.$type.'/'.$img;

                            if($i%4 == 0) {
                                echo '<tr class="ma-main-container col1-layout">';
                            }

                            echo '<td style="border:thin; width:25%;"> <a href="product.php?product='.$db->getProductProductCode(\Util\AppUtil::get_file_title($img)).'">
                                                <img src="'.$src.'" alt="'.$img.'" title="'.\Util\AppUtil::get_file_title($img).'" id="wows1_0" height="240" width="210"/>
                                            </a>
                                         </td><td style="border:thin; width:25%;></td>';
                            $i++;
                            if($i%4 == 0) {
                                echo '</tr>';
                            }
                                    //'<a href="productList.php"><img src="'.$src.'" alt="'.$img.'" height="30" width="30"/>1</a>';
                                }

                        ?>
                                                <br></tr>
                                                <tr style="border: 1">
                                                    <td>
                                                    <div class="ma-footer-container">
                                                        <div class="footer">
                                                            <address>© 2013 ibiponi.com, All Rights Reserved. </address>
                                                            <div style="display: none;" id="back-top">	</div>
                                                        </div>

                                                    </div>
                                                    </td>
                                                </tr>
                    </table>
      </div>

                                           
                                        </div>
                                        <script type="text/javascript">
//                                            $(document).ready(function(){
//                                                $("button").click(function(){
//                                                    $(".input-form").find("input").each(function() {
//                                                        document.writeln($(this).val())
//                                                    })
//                                                });
//                                            });$(document).ready(function(){
/*$("button").click(function(){
    $("#tb1").find("input").each(function() {
        document.writeln($(this).val())    })
});
});*/
                                            $("button").click(function(){
                                                $("#tb1").find("tr").each(function() {

                                                    var x = $(this).find('[type="checkbox"]')
                                                    alert(x);
                                                    if(x !== undefined && x.checked) {
                                                        document.writeln($(this).find('[name="text1"]').val())
                                                    }

                                                })
                                            });



                                        </script>
                                        <div style="float:left; height:100%; width:33%;">


                                        </div>
                                        <div style="float:left; height:100%; width:33%;">

                                        </div>
                                        <div style="clear:both"></div>
                                        </div>
                                        </div>
                                </div>
                            </div>

                            <div class="clearer" style="margin-top:-20px;">&nbsp;</div>
                      </div>
                    </div>
                    <table style="margin-top:4%;">
                        
                    </table>	<!--Content 20 Box-->
            	</div>
        	</div>					        
        </div>           
        <script type="text/javascript" src="index_files/jquery_002.js"></script>
        <link rel="stylesheet" type="text/css" href="index_files/skin1.css">
        <script type="text/javascript">
            jQuery(function($) {
            
            jQuery('.loading_img').hide();
                jQuery('#home_slider').show();
                jQuery('#home_slider2').show();
                jQuery('#home_slider3').show();
                jQuery('#home_slider5').show();
                jQuery('#home_slider6').show();
                jQuery('#home_slider7').show();
                jQuery('#home_slider8').show();
                jQuery('#home_slider9').show();
                jQuery('#home_slider10').show();
                
                
                jQuery('#home_slider').jcarousel();
                jQuery('#home_slider2').jcarousel();
                jQuery('#home_slider3').jcarousel();
                jQuery('#home_slider4').jcarousel();
                jQuery('#home_slider5').jcarousel();
                jQuery('#home_slider6').jcarousel();
                jQuery('#home_slider7').jcarousel();
                jQuery('#home_slider8').jcarousel();
                jQuery('#home_slider9').jcarousel();
                jQuery('#home_slider10').jcarousel();
            });
        </script>
        
        <style type="text/css">
            .bestoffer_body .gallerytable ul{margin:0 0 0 10px !important;}
            .home_promo_banner{margin:10px 0 0 0;}
            .home_promo_banner .left_h{float:left;}
            .home_promo_banner .right_h{float:right;}
            .recent_sale .best_custom_01{border-radius:0 !important; box-shadow:none !important; margin-bottom:0 !important;}
            .recent_sale{width:1056px; margin:0 auto; border:1px solid #e6e6e6;border-radius:5px;}
            .recent_sale .recent_v_p{float:left; width:210px; min-height:200px;}
            .recent_sale .sale_c_p{float:right; width:840px; min-height:200px; border-left:1px solid #e6e6e6;}
            .recent_sale .jcarousel-skin-tango .jcarousel-container-horizontal{width:840px;}
            .recent_sale .jcarousel-skin-tango .jcarousel-item-horizontal{margin-right:15px;}
            .recent_sale .bestoffer_body .gallerytable ul{ margin:0 0 0 0px !important;}
            .recent_sale .customshadow h1{ border: none; line-height: 30px;}
            .footer_all_policies{ margin:15px 0;}
            .policy_block.payment_shipping{margin:0 5px 0 -26px !important; width:245px !important;}
            .footer_all_policies .subsc_icon{float:left;margin:12px 10px 6px 10px;}
            .footer_all_policies a:hover{color:#ff8600 !important; text-decoration:none;}
            .f_policy_ttl{ text-align:left;display:block;color:#343434;font-weight:bold;}
            .footer_all_policies .cus_subsc{width:302px !important; border:1px solid #D1D1D1;}
            .footer_all_policies .policy_block{ width:160px; margin-left:18px; display:inline-block; float:left;}
            .footer_all_policies .payment_shipping .f_policy_ttl{margin:0px 6px 7px;}
            .footer_all_policies .socl_lnk ul li{margin:10px 0 !important;}
            .footer_all_policies .socl_lnk ul li img{margin:0 10px 0 0;}
            .footer_all_policies .socl_lnk ul li a{line-height:24px;}
            .footer_all_policies .policy_block ul li{text-align:left; margin:2px 0;}
            .footer_all_policies .policy_block ul li a{color:#343434;}
            .footer_items{ width:100%; margin:0 auto; padding:15px 0 5px 0;background:#F6F6F6;}
            .footer_items .footer_h{}
            .footer_items .f_menu_ttl{color:#ff8600; font-size:12px; text-align:left; display:block; margin:5px 0;}
            .footer_items a{color:#5a5958;font-size:11px;}
            .footer_items a:hover{color:#ff8600;text-decoration:none;}
            .footer_items .footer_itms_left{float: left; width: 248px; margin-left:20px;}
            .footer_items .footer_itms_left ul{display:inline-block; float:left; width:122px;}
            .footer_items .footer_itms_left ul li{text-align:left; margin:2px 0;}
            .footer_items .footer_itms_left ul a{display:block;}
            .footer_items .footer_itms_right{ float: right; width: 825px;}
            .footer_items .footer_itms_right .f_row_block{display:inline-block; float:left; width:186px; text-align:left; margin-left:20px;}
            .footer_items .footer_itms_right .f_row1{}
            .footer_items .footer_itms_right .f_row2{}
        </style>
		<!--<div class="clearer" style="margin-top:-20px;">&nbsp;</div>-->
        <div class="recent_sale"><div class="clearer"></div></div>    

        
        <div id="ajax_login_wrapper" style="display:none;" ;="">
            <div id="ajax_login_contents">       
                <ul class="messages" id="ajax_login_wrapper_ul" style="text-align:left;">
                    <li class="error-msg">
                        <ul><li><span id="do-err-messages"></span></li></ul>
                    </li>
                </ul>
                <form action="" onsubmit="return ajaxloginForm.getClass().validateForm();" method="post" id="do_ajaxlogin_form">
                    <div id="float1">
                        <input name="login[username]" value="Login" id="do-mini-login" class="input-text required-entry validate-email" type="text">
                    </div>
                    <div id="float2">
                        <input name="login[password]" id="do-mini-password" class="input-text required-entry validate-password" value="Password" type="password">
                    </div>
                    <div class="actions">
                        <button type="submit" class="button fastloginButton"><span>Login</span></button>                
                    </div>
                </form>	 
            </div>  
            <div id="ajaxlogin_loader_holder" style="display:none;"></div> 
        </div>    
        <img id="ajaxlogin_loader_cache" src="index_files/ajaxlog_loader.gif">
        
        <script type="text/javascript">
            document.observe("dom:loaded", function() {
                   ajaxloginForm.cartSidebar = false;      
                 ajaxloginForm.init('do_ajaxlogin_form');
                 ajaxloginForm.getClass().computeBlockPosition('ajax_login_wrapper'); 
            });
        </script>  
    </body>
</html>