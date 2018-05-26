<?php require("../connection/conn.php"); ?>
<%
        dim rs,sql,bz,birthday,from

        bz=request("bz")
        bz=replace(bz," ","&nbsp;")
        bz=replace(bz,chr(13)&chr(10),"<Br>")


	sql="select * from [house_user] where id=" & session("user_id")
	set rs=server.createobject("adodb.recordset")
    rs.open sql,conn,3,3
	if not rs.eof then

        rs("name")=request("name")
        rs("sex")=request("sex")
        rs("birthday")=request("birthday")
        rs("sfz")=request("sfz")
        rs("thissite")=request("thissite")
        rs("job")=request("job")
        rs("from")=request("from")
        rs("fax")=request("fax")
        rs("tel")=request("tel")
        rs("sj")=request("sj")
        rs("qq")=request("qq")
        rs("email")=request("email")
        rs("yb")=request("yb")
        rs("address")=request("address")
        rs("http")=request("http")
        rs("bz")=bz

        rs.update
%>

<SCRIPT LANGUAGE=vbscript>
<!--
msgbox("ÐÞ¸Ä³É¹¦!")
window.top.location.href="../member.php"

-->
</SCRIPT>
<%
end if
%>
