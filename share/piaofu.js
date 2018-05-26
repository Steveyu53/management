<!--
document.ns = navigator.appName == "Netscape"
//--
var rnumx1=new Array();
var rnumx2;
var rnumx3;
rnumxtemp="";
for(i=0;i<3;i++){
rnumx2 =Math.round(Math.random()*10);
rnumx2!=10 ? rnumx3=rnumx2:rnumx3=9;
//document.write("["+rnumx3+"]");
rnumx1[i]=rnumx3;
if (rnumx1[0]>4||rnumx1[0]<1){
rnumx1[0]=1;
}
if (rnumx1[1]>2&&rnumx1[0]==4){
	rnumx1[1]=1;
	}
rnumxtemp+=new String(rnumx1[i]);
}
//--
window.screen.width>800 ? imgheight=150:imgheight=rnumxtemp
window.screen.width>800 ? imgright=20:imgright=20
window.screen.width>800 ? imgleft=20:imgleft=20
function threenineload()
{
if (navigator.appName == "Netscape")
{
if(document.getElementById) {
	document.getElementById('threenine').pageY=pageYOffset+window.innerHeight-imgheight;
	document.getElementById('threenine').pageX=imgright;
	document.getElementById('threenine1').pageY=pageYOffset+window.innerHeight-imgheight;
	document.getElementById('threenine1').pageX=imgleft;

} else {
	document.threenine.pageY=pageYOffset+window.innerHeight-imgheight;
	document.threenine.pageX=imgright;
	document.threenine1.pageY=pageYOffset+window.innerHeight-imgheight;
	document.threenine1.pageX=imgleft;
}
threeninemove();
}
else
{
threenine.style.top=document.body.scrollTop+document.body.offsetHeight-imgheight;
threenine.style.right=imgright;
threenine1.style.top=document.body.scrollTop+document.body.offsetHeight-imgheight;
threenine1.style.left=imgleft;
threeninemove();
}
}
function threeninemove()
{
if(document.ns)
{
if(document.getElementById) {
	document.getElementById('threenine').style.top=pageYOffset+window.innerHeight-imgheight
	document.getElementById('threenine').style.right=imgright;
	document.getElementById('threenine1').style.top=pageYOffset+window.innerHeight-imgheight
	document.getElementById('threenine1').style.left=imgleft;
} else {
	document.threenine.top=pageYOffset+window.innerHeight-imgheight
	document.threenine.right=imgright;
	document.threenine1.top=pageYOffset+window.innerHeight-imgheight
	document.threenine1.left=imgleft;
}
setTimeout("threeninemove();",40)
}
else
{
threenine.style.top=document.body.scrollTop+document.body.offsetHeight-imgheight;
threenine.style.right=imgright;
threenine1.style.top=document.body.scrollTop+document.body.offsetHeight-imgheight;
threenine1.style.left=imgleft;
setTimeout("threeninemove();",80)
}
}
function MM_reloadPage(init) { //reloads the window if Nav4 resized
if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true)

{
document.write("<div id=threenine1 style='position: absolute;width:64;top:200;visibility: visible;z-index: 1'><a href='#' target='_blank'><img src=adinfo/piaofu1.gif border=0 width=80 height=80></a></div>");
document.write("<div id=threenine style='position: absolute;width:64;top:200;visibility: visible;z-index: 1'><a href='#' target=_blank><img src=adinfo/piaofu2.gif border=0 width=80 height=80></a></div>");
threenineload()
}
//-->