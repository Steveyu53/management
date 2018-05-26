
<!--
function CheckIsNull(obj,msg)
{
	if(obj.value=="")
	{
		alert(msg);
		obj.focus();
		return false;
	}
	return true;
}
function CheckIsNumeric(obj,msg)
{
	var reg=/^[0-9]*$/
	if(!reg.exec(obj.value))
	{
		alert(msg);
		obj.focus();
		return false;
	}
	return true;
}
function fontZoom(size)
{
	document.getElementById('fontzoom').style.fontSize=size+'px'
}

function openwin(page,size)
{
window.open(page,"newuser","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,"+ size);
} 

function mOvr(src,clrOver) { if (!src.contains(event.fromElement)){ src.bgColor = clrOver; }}function mOut(src,clrIn){ if (!src.contains(event.toElement)) { src.style.cursor = 'hand'; src.bgColor = clrIn; }} function mClk(src) { if(event.srcElement.tagName=='TD'){src.children.tags('A')[0].click();} }
//-->