<?php
mail("tricia@digital-couch.com", "Inquiry from The Digital Couch",
"
Name:		$_POST[name]
Company:		$_POST[company]
URL:		$_POST[url]
Company:		$_POST[company]
Size of Company:		$_POST[company_size]
Hires Per Month:		$_POST[monthly_hires]
Hiring Issues:		$_POST[issues]
Comments:		$_POST[comments]
","From: Contact@Digital-Couch.com");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('images/why_over.jpg','images/how_over.jpg','images/impacts_over.jpg','images/about_over.jpg','images/contact_over.jpg')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" background="images/header_bg.jpg"><table width="960" border="0" cellspacing="0" cellpadding="0"><a href="index.html"><img src="images/logo.jpg" width="207" height="110" alt="The Digital Couch" /></a><img src="images/header_bg.jpg" width="240" height="110" alt="bg" /><a href="why.htm" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Why','','images/why_over.jpg',1)"><img src="images/why.jpg" alt="Why Digital Couch" width="153" height="110" id="Why" /></a><a href="how.htm" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('How','','images/how_over.jpg',1)"><img src="images/how.jpg" alt="How It Works" width="128" height="110" id="How" /></a><a href="impacts.htm" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Impacts','','images/impacts_over.jpg',1)"><img src="images/impacts.jpg" alt="Impacts" width="88" height="110" id="Impacts" /></a><a href="about.htm" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('About','','images/about_over.jpg',1)"><img src="images/about.jpg" alt="About" width="73" height="110" id="About" /></a><a href="contact.htm" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Contact','','images/contact_over.jpg',1)"><img src="images/contact.jpg" alt="Contact" width="71" height="110" id="Contact" /></a></table></td>
  </tr>

  <tr>
    <td align="center" background="images/body_bg.jpg"><table width="960" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><img src="images/body_bg.jpg" width="625" height="19" /><br /><br />
        <span class="subhead">
          Contact<strong></strong></span></td>
        <td align="left" valign="top"><img src="images/sub_head.jpg" width="105" height="94" alt="sub" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="920" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><p class="main"><br />
          <br />
          <strong>Thank you for your inquiry! We will respond shortly.</strong></p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main">&nbsp;</p>
          <p class="main"><br />
          </p></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><img src="images/split.jpg" width="960" height="12" alt="split" /></td>
  </tr>
  <tr>
    <td align="center"><table width="960" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><span class="footer"><a href="index.html" class="footer">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="why.htm" class="footer">Why Digital Couch</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="how.htm" class="footer">How It Works</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="impacts.htm" class="footer">Impacts</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.htm" class="footer">About</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.htm" class="footer">Contact</a></span></td>
        <td align="right"><span class="footer">©2013 Digital Couch</span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
