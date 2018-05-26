//author:	SunOnce
//判断是否从地址栏输入
//if(window.top==window.self)	window.top.location.href="/admin/login.asp";
//判断一个对象是否为空
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

//判断一个多选对象是否有被选中
function CheckIsChecked(obj,msg)
{
	var result;
	result=false;
	//多选框只有一个按钮可选择
	if(!obj.length)
	{
		if(!obj.checked) alert(msg);
	}
	else
	{
		for(var i=0;i<obj.length;i++)
		{
			if(obj[i].checked)
			{
				result=true;
				break;
			}
		}
		if(!result) alert(msg);
	}
	return result;
}

//判断输入框的内容是否为一个有效E_Mail地址
function CheckIsEmail(obj,msg)
{
	var reg=/^([a-zA-Z0-9_]*)\@([a-zA-Z0-9_]*)\.([a-zA-Z0-9]{2,3})$/
	if(!reg.exec(obj.value))
	{
		alert(msg);
		obj.focus();
		return false;
	}
	return true;
}

//判断输入框的内容是否为一个有效的身份证号码
function CheckIsId(obj,msg)
{
	var reg=/^([0-9]{18})|([0-9]{15})$/
	if(!reg.exec(obj.value))
	{
		alert(msg);
		obj.focus();
		return false;
	}
	return true;
}

//判断输入框的内容是否为数字
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

//判断输入的内容是不是正确格式的日期
function CheckIsDate(obj)
{
	var reg=/^([0-9]{2,4})\/([0-9]{1,2})\/([0-9]{1,2})$/
	if(!reg.exec(obj.value))
	{
		alert("请输入以下格式的日期\n格式：2000/05/25");
		obj.focus();
		return false;
	}
	return true;
}

//判断输入的内容是不是正确格式的日期(起始时间)
function CheckIsDateSE(obj)
{
	var reg=/^([0-9]{2,4})\/([0-9]{1,2})\~([0-9]{2,4})\/([0-9]{1,2})$/
	if(!reg.exec(obj.value))
	{
		alert("请输入以下格式的日期\n格式：2000/05~2001/11");
		obj.focus();
		return false;
	}
	return true;
}

//判断是否为一个正确的用户名：姓名＋数字＋下划线
function CheckIsUserName(obj)
{
	var reg=/^[0-9a-zA-Z\_]*$/
	if(!reg.exec(obj.value))
	{
		alert("您输入用户名包含非法字符！用户名只能为数字、下划线_和大小写字母。");
		obj.focus();
		return false;
	}
	return true;
}

function DelCheck(str) {
return confirm(str+"\n确定要做删除操作吗？删除后将不能恢复，不是的话，请按取消！");
}

function linebr(obj)
{
	obj.value+="<br>";
}