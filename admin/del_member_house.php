<?php require("../connection/conn.php"); ?>

<%
'if request("del")=1 then
	dim id,strSql1,mode
	mode=request("select")
	id=replace(request("checkbox"),"'","")
	if id="" or mode="" then
		outerr("参数传递出错！")
		out("<a href=""javascript:window.go(-1)"">返回</a>！")
		response.end
	end if
	if mode="hack" then
	strSql1="delete from [house_hack] where id=" & id
	elseif mode="hire" then
    strSql1="delete from [house_hire] where id=" & id
	elseif mode="buy" then
	strSql1="delete from [house_buy] where id=" & id
	elseif mode="sell" then
	strSql1="delete from [house_sell] where id=" & id
	end if
	conn.execute(strSql1)
    response.redirect "../../member_view_house.php?house="&mode&""
    response.end
'end if
%>