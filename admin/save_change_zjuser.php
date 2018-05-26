<?php require("../connection/conn.php"); ?>

<!--#include file="../md5.php"-->
<%
  if request("id")="" or isnumeric(request("id"))=false then
  outerr("参数出错了！")
  response.end
  end if
        dim rs,sql,bz

	set rs=server.createobject("adodb.recordset")
	sql="select * from [house_user_zj] where id=" & request("id")
        rs.open sql,conn,3,3

        bz=request("bz")
	bz=replace(bz," ","&nbsp;")
        bz=replace(bz,chr(13)&chr(10),"<Br>")

        rs("zj_name")=request("zj_name")
        rs("address")=request("address")
        rs("zj_man")=request("zj_man")
        rs("faren")=request("faren")
        rs("tel")=request("tel")
        rs("fax")=request("fax")
        rs("http")=request("http")
        rs("email")=request("email")
        rs("bz")=bz
		if request("password")<>"" then
		rs("password")=md5(request("password"),16)
		end if
        rs("pass")=request("pass")

        rs.update
response.write "信息修改成功"

%>
