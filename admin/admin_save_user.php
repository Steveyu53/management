<?php require("../connection/conn.php"); ?>

<!--#include file="../md5.php"-->
<%
  if request("id")="" or isnumeric(request("id"))=false then
  outerr("参数出错了！")
  response.end
  end if
        dim rs,sql,bz,birthday,from
		bz=request("bz")
        bz=replace(bz," ","&nbsp;")
        bz=replace(bz,chr(13)&chr(10),"<Br>")

	birthday=request("year") & "年" & request("month") & "月" & request("day") & "日"
        from=request("sheng") & request("shi")

	set rs=server.createobject("adodb.recordset")
	sql="select * from [house_user] where id=" & request("id")
    rs.open sql,conn,3,3
	'if not rs.eof then
	   ' rs("username")=request("username")
        if request("password")<>"" then
		rs("password")=md5(request("password"),16)
		end if
        rs("name")=replace(trim(request("name")),"'","")
        rs("sex")=request("sex")
        rs("birthday")=birthday
        rs("sfz")=request("sfz")
        rs("thissite")=request("thissite")
        rs("job")=request("job")
        rs("from")=from
        rs("fax")=request("fax")
        rs("tel")=request("tel")
        rs("sj")=request("sj")
        rs("qq")=request("qq")
        rs("email")=request("email")
        rs("yb")=request("yb")
        rs("address")=request("address")
        'rs("date")=now()
        rs("http")=request("http")
        rs("bz")=bz

        rs.update
'rs.close
	'set rs=nothing
	'end if
%>
<html>
<head>
<title>用户信息修改</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../style.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">
<br>
<br>
<br>
<table width="400" border="0" cellspacing="3" cellpadding="0" height="300" align="center" class="xu_kuan">
  <tr bgcolor="#fff9e1">
    <td align="center" valign="middle" bgcolor="#fff9e1" class="font"><font color="#FF6600"><br>
      用户信息已经修改完毕！</font><br>
      <a href="javascript:window.close()" class="linkfont">关闭窗口</a>
	  <br>
        </td></tr>

      </table>

</body>
</html>
