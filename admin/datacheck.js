//author:	SunOnce
//�ж��Ƿ�ӵ�ַ������
//if(window.top==window.self)	window.top.location.href="/admin/login.asp";
//�ж�һ�������Ƿ�Ϊ��
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

//�ж�һ����ѡ�����Ƿ��б�ѡ��
function CheckIsChecked(obj,msg)
{
	var result;
	result=false;
	//��ѡ��ֻ��һ����ť��ѡ��
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

//�ж������������Ƿ�Ϊһ����ЧE_Mail��ַ
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

//�ж������������Ƿ�Ϊһ����Ч�����֤����
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

//�ж������������Ƿ�Ϊ����
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

//�ж�����������ǲ�����ȷ��ʽ������
function CheckIsDate(obj)
{
	var reg=/^([0-9]{2,4})\/([0-9]{1,2})\/([0-9]{1,2})$/
	if(!reg.exec(obj.value))
	{
		alert("���������¸�ʽ������\n��ʽ��2000/05/25");
		obj.focus();
		return false;
	}
	return true;
}

//�ж�����������ǲ�����ȷ��ʽ������(��ʼʱ��)
function CheckIsDateSE(obj)
{
	var reg=/^([0-9]{2,4})\/([0-9]{1,2})\~([0-9]{2,4})\/([0-9]{1,2})$/
	if(!reg.exec(obj.value))
	{
		alert("���������¸�ʽ������\n��ʽ��2000/05~2001/11");
		obj.focus();
		return false;
	}
	return true;
}

//�ж��Ƿ�Ϊһ����ȷ���û��������������֣��»���
function CheckIsUserName(obj)
{
	var reg=/^[0-9a-zA-Z\_]*$/
	if(!reg.exec(obj.value))
	{
		alert("�������û��������Ƿ��ַ����û���ֻ��Ϊ���֡��»���_�ʹ�Сд��ĸ��");
		obj.focus();
		return false;
	}
	return true;
}

function DelCheck(str) {
return confirm(str+"\nȷ��Ҫ��ɾ��������ɾ���󽫲��ָܻ������ǵĻ����밴ȡ����");
}

function linebr(obj)
{
	obj.value+="<br>";
}