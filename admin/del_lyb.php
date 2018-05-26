<?php require("../connection/conn.php"); ?>

<%
  if request("id")="" or isnumeric(request("id"))=false then
  outerr("参数出错了！")
  response.end
  end if
   conn.execute"delete from [house_lyb] where ly_id="&request("id")
   conn.close
   set conn=nothing
   response.redirect Request.ServerVariables("HTTP_REFERER")
%>