<?php require("../connection/conn.php"); ?>

<html>
<head>
<title>�ޱ����ĵ�</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../style.css" type="text/css">
<script language="JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!--
	function GON()
	{
		var pageno;
		var strs;
		if(form1.pp.value=="")
		{
			pageno=1;
		}
		else
		{
			pageno=form1.pp.value;
		}
		strs="view_lyb.php?PageNO=" + pageno;
		window.location.href=strs;
	}
//-->
</SCRIPT>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">
<div align="center"><br>
  <b><font size="3">�� �� �� Ϣ</font></b><br>
  <br>
</div>
<FORM METHOD=POST NAME="form1">
  <table width="600" border="0" cellpadding="0" cellspacing="2" class="kuan" align="center" height="49" bgcolor="#FFFFFF">
    <%
	dim strSql,rs,i,PageNo
	strSql="select * from [house_lyb] order by ly_id desc"

	rs.PageSize=20
	PageNo=request("PageNo")
	if PageNo<1 or not isnumeric(PageNo) then
		PageNo=1
	end if
	if cint(PageNo)>rs.PageCount then
		PageNo=rs.PageCount
	end if
%>
    <tr>
      <td background="../images/system1.gif" height="25" align="center" width="84"><font color="#FF6633" class="font"><b><font color="#FF9B59">��������</font></b></font></td>
      <td background="../images/system1.gif" height="25" align="center" width="102"><font color="#FF6633" class="font"><b><font color="#FF9B59">������</font></b></font></td>
      <td background="../images/system1.gif" height="25" align="center" width="150"><font color="#FF6633" class="font"><b><font color="#FF9B59">�绰</font></b></font></td>
      <td background="../images/system1.gif" height="25" align="center" width="142"><font color="#FF6633" class="font"><b><font color="#FF9B59">E-mail</font></b></font></td>
      <td background="../images/system1.gif" height="25" align="center" width="43"><font color="#FF6633" class="font"><b><font color="#FF9B59">ɾ��</font></b></font></td>
      <td background="../images/system1.gif" height="25" align="center" width="65"><font color="#FF6633" class="font"><b></b></font><font color="#FF6633" class="font"><b><font color="#FF9B59">��ϸ����</font></b></font></td>
    </tr>
    <%
		if rs.recordcount>0 then
		   rs.AbsolutePage =PageNo
		   for i=1 to rs.pageSize
  			  if rs.eof then exit for
  %>
    <tr bgcolor="#ECFFEC">
      <td class="font" align="center" valign="middle" height="26" width="84" bgcolor="#DBE7F2"><%=replace(rs("ly_date"),right(rs("ly_date"),8),""]?></td>
      <td class="font" align="center" valign="middle" height="26" width="102" bgcolor="#C1D6EA"><font color="red"><?php echo $rs["ly_man"]?></font></td>
      <td class="font" align="center" valign="middle" height="26" bgcolor="#DBE7F2" width="150"><%=left(rs("ly_tel"),20]?></td>
      <td class="font" align="center" valign="middle" height="26" bgcolor="#DBE7F2" width="142"><font color="#FF6633" class="font"><b><%=left(rs("ly_email"),20]?></b></font></td>

      <td class="font" align="center" valign="middle" height="26" width="43" bgcolor="#C1D6EA"><a href="del_lyb.php?id=<?php echo $rs["ly_id"]?>" class="linkfont">ɾ��</a></td>

      <td class="linkfont" align="center" valign="middle" height="26" width="65" bgcolor="#DBE7F2"><a href="javascript:void(0)" class="linkfont" onClick="MM_openBrWindow('sub_lyb.php?id=<?php echo $rs["ly_id"]?>','','width=580,height=278')">��ϸ����</a></td>
    </tr>
    <%
				rs.movenext
			next
  %>
    <tr>
      <td colspan="6" align="right" class="font">
        <%
			out("�� " & rs.pagecount & " ҳ &nbsp;&nbsp;")
			out("��ǰ�� " & PageNo & " ҳ &nbsp;&nbsp;")
			out("���� <input class=""textinput"" name=""pp"" type=""text"" size=""2""> ҳ")
			out(" <INPUT class=""textinput"" TYPE=""button"" value=""GO"" onclick=""javascript:GON()"">&nbsp;")
			out("<a href=""view_lyb.php?PageNo=1"">��ҳ</a>&nbsp;")
		    out("<a href=""view_lyb.php?PageNo=" & (PageNo-1) & """>��һҳ</a>&nbsp;")
		    out("<a href=""view_lyb.php?PageNo=" & (PageNo+1) & """>��һҳ</a>&nbsp;")
			out("<a href=""view_lyb.php?PageNo=" & rs.pagecount & """>βҳ</a>&nbsp;")
	  %>
        &nbsp; </td>
    </tr>
    <%
		else
  %>
    <tr>
      <td colspan="6" class="font">
        <div align="center">û������!</div>
      </td>
    </tr>
    <%
		end if
		rs.close
		set rs=nothing
  %>
  </table>
</FORM>
</body>
</html>
