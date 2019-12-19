<?php
@ini_set('display_errors', 'off');
session_start();
ob_start();
if(session_is_registered('pes2'))
{
$pass=$_SESSION['pes2'];

?>
<html>
<head>
<script src="java.js">

</script>




<link rel="shortcut icon" href="../ico.ico">
<title>&nbsp; Halaman Poli (Kamar Obat) RS Mardi Waluyo Malang &nbsp;</title>

<script language="javascript" type="text/javascript">
var repeat=1
var title=document.title
var leng=title.length
var start=1
function titlemove()
	{
  	titl=title.substring(start, leng) + title.substring(0, start)
  	document.title=titl
  	start++
  	if (start==leng+1)
		{
    	start=0
    	if (repeat==0)
    	return
  		}
  	setTimeout('titlemove()',140)
	}
if (document.title)
titlemove()
</script>

<LINK href="mainstyle.css" type=text/css rel=stylesheet>
<LINK href="menu.css" type=text/css rel=stylesheet>
<SCRIPT src="menu.js" type=text/javascript>
		/***********************************************
		* Slashdot Menu script- By DimX
		* Submitted to Dynamic Drive DHTML code library: http://www.dynamicdrive.com
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
		***********************************************/
	</SCRIPT>

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="general.css" />


</head>
<body bgcolor="#0000ff">
<center>
<table width="1024" border="1" cellpadding="10" cellspacing="15" bgcolor="AAAAff">
<tr>
<td colspan="2" align="center" valign="center" bgcolor="#BBBBFF"><font size="6" face="arial" color="#AAAAFF">
<embed src='../head_admin.swf' width='1024' height='250'></embed>
</td>
</tr>

<tr>
<td width="20%" bgcolor="#bbbbff" valign='top'>
<font face="verdana" size="2" color="#000099">
<center><b>MENU</b></center>

<br>

	<DIV class=sdmenu>
	<SPAN class=title id=top>
	<IMG class=arrow alt=- src="anggota.png" width="15">Home
	</SPAN>

	  <DIV class=submenu>
	  <A href='index.php?task=index'>->Home</A>
	  </DIV>

	   <SPAN  class=title>
	  <IMG class=arrow alt=- src="anggota.png" width="15">Account</SPAN>

	  <DIV class=submenu>
	  <a href='index.php?task=gt_ac'>-> Ganti Account</a>

      </DIV>

	 <SPAN  class=title>
	  <IMG class=arrow alt=- src="anggota.png" width="15">Pasien</SPAN>

	  <DIV class=submenu>
	  <a href='index.php?task=resep&status=poli'>--> Resep Pasien</a>
      </DIV>

	  <SPAN  class=title>
	  <IMG class=arrow alt=- src="anggota.png" width="15">Mutasi Obat</SPAN>

	  <DIV class=submenu>
	  <a href='index.php?task=resep&status=mutasi'>--> Mutasi Obat</a>

      </DIV>



		<!-- <SPAN  class=title>
	 <IMG class=arrow alt=- src="anggota.png" width="15">Absensi Pasien</SPAN>
	 <DIV class=submenu>
	 <a href='index.php?task=absensi'>Absensi</a>
	 </DIV>-->

	 <SPAN  class=title>
	 <IMG class=arrow alt=- src="anggota.png" width="15">Logout</SPAN>
	 <DIV class=submenu>
	 <a href='logout.php'>LOG out</a>
	 </DIV>


	</DIV>


</font>
<br><br>
<b><font color='#000099' size='2'>Ruang Iklan</font></b>
<br><br>
<script language="JavaScript1.2">

//Presentational Slideshow Script- By Dynamic Drive
//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
//This credit MUST stay intact for legal use

var slideshow_width='180px' //SET SLIDESHOW WIDTH (set to largest image's width if multiple dimensions exist)
var slideshow_height='250px' //SET SLIDESHOW HEIGHT (set to largest image's height if multiple dimensions exist)
var pause=3000 //SET PAUSE BETWEEN SLIDE (2000=2 seconds)
var slidebgcolor="white"

var dropimages=new Array()
//SET IMAGE PATHS. Extend or contract array as needed
//dropimages[0]="../modules/mod_sponsor/batik1.jpg"
//dropimages[1]="../modules/mod_sponsor/batik2.jpg"
//dropimages[2]="../modules/mod_sponsor/inez1.jpg"
//dropimages[3]="../modules/mod_sponsor/inez2.jpg"
dropimages[0]="../modules/mod_sponsor/info1.jpg"
dropimages[1]="../modules/mod_sponsor/info2.jpg"

var droplinks=new Array()
//SET IMAGE URLs. Use "" if you wish particular image to NOT be linked:
//droplinks[0]="http://www.yahoo.com'"
//droplinks[1]=""
//droplinks[2]="http://www.google.com"


////NO need to edit beyond here/////////////

var preloadedimages=new Array()
for (p=0;p<dropimages.length;p++){
preloadedimages[p]=new Image()
preloadedimages[p].src=dropimages[p]
}

var ie4=document.all
var dom=document.getElementById

if (ie4||dom)
document.write('<div style="position:relative;width:'+slideshow_width+';height:'+slideshow_height+';overflow:hidden"><div id="canvas0" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height+';background-color:'+slidebgcolor+';left:-'+slideshow_width+'"></div><div id="canvas1" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height+';background-color:'+slidebgcolor+';left:-'+slideshow_width+'"></div></div>')
else
document.write('<a href="javascript:rotatelink()"><img name="defaultslide" src="'+dropimages[0]+'" border=0></a>')

var curpos=parseInt(slideshow_width)*(-1)
var degree=10
var curcanvas="canvas0"
var curimageindex=linkindex=0
var nextimageindex=1


function movepic(){
if (curpos<0){
curpos=Math.min(curpos+degree,0)
tempobj.style.left=curpos+"px"
}
else{

clearInterval(dropslide)
nextcanvas=(curcanvas=="canvas0")? "canvas0" : "canvas1"
tempobj=ie4? eval("document.all."+nextcanvas) : document.getElementById(nextcanvas)
var slideimage='<img src="'+dropimages[curimageindex]+'" border=0>'
tempobj.innerHTML=(droplinks[curimageindex]!="")? '<a href="'+droplinks[curimageindex]+'">'+slideimage+'</a>' : slideimage
nextimageindex=(nextimageindex<dropimages.length-1)? nextimageindex+1 : 0
setTimeout("rotateimage()",pause)
}
}

function rotateimage(){
if (ie4||dom){
resetit(curcanvas)
var crossobj=tempobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.style.zIndex++
var temp='setInterval("movepic()",50)'
dropslide=eval(temp)
curcanvas=(curcanvas=="canvas0")? "canvas1" : "canvas0"
}
else
document.images.defaultslide.src=dropimages[curimageindex]
linkindex=curimageindex
curimageindex=(curimageindex<dropimages.length-1)? curimageindex+1 : 0
}

function rotatelink(){
if (droplinks[linkindex]!="")
window.location=droplinks[linkindex]
}

function resetit(what){
curpos=parseInt(slideshow_width)*(-1)
var crossobj=ie4? eval("document.all."+what) : document.getElementById(what)
crossobj.style.left=curpos+"px"
}

function startit(){
var crossobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.innerHTML='<a href="'+droplinks[curimageindex]+'"><img src="'+dropimages[curimageindex]+'" border=0></a>'
rotateimage()
}

if (ie4||dom)
window.onload=startit
else
setInterval("rotateimage()",pause)

</script>
</td>

<td align="left" valign="top"bgcolor="#ccccff" background='../img/back2.jpg'>
<font face="verdana" size="3" color="#000088">
<?php
$wkt=DATE('d-m-Y h:i:s');
echo"<font size='-2'>$wkt</font><br>";
include('panel.php');

?>
</font>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<font face="verdana" size="-2" color="#000088">
Poli (Kamar Obat) Only Area
<br>
RSIA MARDI WALOEJA Malang Copyright &copy; 2010
</td>
</tr>

</table>
</center>
</body>
</html>
<?php
}
else
{header("Location: ../index.php");}
?>




