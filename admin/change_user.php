<?php require("../connection/conn.php"); ?>

<html>
<head>
<title><%=title%></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../style.css" type="text/css">
</head>
<style> body{ scrollbar-face-color:fd9035; scrollbar-shadow-color:ffffff;  scrollbar-highlight-color:ffffff; scrollbar-3dlight-color:ffffff;  scrollbar-darkshadow-color:ffffff; scrollbar-track-color:ffefd7;  scrollbar-arrow-color:ffffff;}
.rightkuan {  border-color: black #FFFFFF black black; border-style: solid; border-top-width: 0px; border-right-width: 2px; border-bottom-width: 0px; border-left-width: 0px}
.leftkuan {  border-color: black black black #FFFFFF; border-style: solid; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 2px}
.textinput2 {  border: 1px #9c9a9c solid;BACKGROUND: #ffffff;FONT-SIZE: 9pt; FONT-FAMILY: arial}
</style>
 <script language="JavaScript" src="share/nei_fc.js"></script>
 <script language="JavaScript">
<!--
	function checkdata()
	{
		if(!CheckIsNull(form1.oldpass,"请输入旧密码！")) return false;
		if(!CheckIsNull(form1.newpass,"请输入新密码！")) return false;
		if(!CheckIsNull(form1.confirm,"请输入确认密码！")) return false;

	}

//-->
</script>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
  <%
  if request("id")="" or isnumeric(request("id"))=false then
  outerr("参数出错了！")
  response.end
  end if
	dim strSql,rs,i,PageNo
	strSql="select * from [house_user] where id=" & request("id")

%>
  <tr align="left" valign="top">
    <td height="439"> <br>
      <center>
      </center>
      <br>
      <center>
        <table width="534" height="158" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td align="left" valign="top" bgcolor="#FFFFFF">
              <table width="100%" border="0" cellpadding="0" cellspacing="2" class="xu_kuan">
                <form name="form1" method="post" action="admin_save_user.php" onSubmit="return checkdata()">
                  <tr>
                    <td height="25" align="center" bgcolor="#FFDE88"><font class="font">注册时间：</font><font color="#FF6633" class="font"><font color="#FF6600"></font><?php echo $rs["date"]?></font><font class="font">　　　　　　　　最后登陆时间：</font><font color="#FF6633" class="font"><font color="#FF6600"><?php echo $rs["last_date"]?></font></font></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFF8E6" class="linkfont" align="center" valign="middle" height="203">
                      <br>
                      <table width="517" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251"><span class="font">用
                            户 名：</span>
                           <input name="id" type="hidden" value="<%=request("id"]?>"> <input name="username" type="text" class="textinput" size="30" maxlength="50" disabled value="<?php echo $rs["username"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266"><span class="font">密　　码：</span>
                            <input name="password" type="text" class="textinput" size="30" maxlength="50">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">姓　　名：
                            <input name="name" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["name"]?>">
                          </td>
                          <td width="278" class="font" bgcolor="#fff9e1">
                            <div align="center">密码如留空则不修改密码！</div>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">性　　别：
                            <%if rs("sex")="男" then %>
                            <input type="radio" name="sex" value="男" checked>
                            <img src="../../images/ic_male.gif" width="14" height="15">男
                            <input type="radio" name="sex" value="女">
                            <img src="../../images/ic_female.gif" width="14" height="15">女
                            <%end if%>
                            <%if rs("sex")="女" then %>
                            <input type="radio" name="sex" value="男" >
                            <img src="../../images/ic_male.gif" width="14" height="15">男
                            <input type="radio" name="sex" value="女" checked>
                            <img src="../../images/ic_female.gif" width="14" height="15">女
                            <%end if%>
                          </td>
                          <td align="left" valign="middle" class="font" width="266">出生年月：
                            <input name="birthday" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["birthday"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">身份证号：
                            <input name="sfz" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["sfz"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">职　　业：
                            <select name=job>
                              <%if rs("job")="未填" then %>
                              <option value="未填" selected>未填</option>
                              <%else%>
                              <option value="未填">未填</option>
                              <%end if%>
                              <%if rs("job")="财会/金融" then %>
                              <option value="财会/金融" selected>财会/金融</option>
                              <%else%>
                              <option value="财会/金融">财会/金融</option>
                              <%end if%>
                              <%if rs("job")="工程师" then %>
                              <option value="工程师" selected>工程师</option>
                              <%else%>
                              <option value="工程师">工程师</option>
                              <%end if%>
                              <%if rs("job")="顾问" then %>
                              <option value="顾问" selected>顾问</option>
                              <%else%>
                              <option value="顾问">顾问</option>
                              <%end if%>
                              <%if rs("job")="计算机相关行业" then %>
                              <option value="计算机相关行业" selected>计算机相关行业</option>
                              <%else%>
                              <option value="计算机相关行业">计算机相关行业</option>
                              <%end if%>
                              <%if rs("job")="家庭主妇" then %>
                              <option value="家庭主妇" selected>家庭主妇</option>
                              <%else%>
                              <option value="家庭主妇">家庭主妇</option>
                              <%end if%>
                              <%if rs("job")="教育/培训" then %>
                              <option value="教育/培训" selected>教育/培训</option>
                              <%else%>
                              <option value="教育/培训">教育/培训</option>
                              <%end if%>
                              <%if rs("job")="客户服务/支" then %>
                              <option value="客户服务/支持" selected>客户服务/支持</option>
                              <%else%>
                              <option value="客户服务/支持">客户服务/支持</option>
                              <%end if%>
                              <%if rs("job")="零售商/手工工人" then %>
                              <option value="零售商/手工工人" selected>零售商/手工工人</option>
                              <%else%>
                              <option value="零售商/手工工人">零售商/手工工人</option>
                              <%end if%>
                              <%if rs("job")="退休" then %>
                              <option value="退休" selected>退休</option>
                              <%else%>
                              <option value="退休">退休</option>
                              <%end if%>
                              <%if rs("job")="无职业" then %>
                              <option value="无职业" selected>无职业</option>
                              <%else%>
                              <option value="无职业">无职业</option>
                              <%end if%>
                              <%if rs("job")="销售/市场/广告" then %>
                              <option value="销售/市场/广告" selected>销售/市场/广告</option>
                              <%else%>
                              <option value="销售/市场/广告">销售/市场/广告</option>
                              <%end if%>
                              <%if rs("job")="学生" then %>
                              <option value="学生" selected>学生</option>
                              <%else%>
                              <option value="学生">学生</option>
                              <%end if%>
                              <%if rs("job")="研究和开发" then %>
                              <option value="研究和开发" selected>研究和开发</option>
                              <%else%>
                              <option value="研究和开发">研究和开发</option>
                              <%end if%>
                              <%if rs("job")="一般管理/监督" then %>
                              <option value="一般管理/监督" selected>一般管理/监督</option>
                              <%else%>
                              <option value="一般管理/监督">一般管理/监督</option>
                              <%end if%>
                              <%if rs("job")="政府/军队" then %>
                              <option value="政府/军队" selected>政府/军队</option>
                              <%else%>
                              <option value="政府/军队">政府/军队</option>
                              <%end if%>
                              <%if rs("job")="执行官/高级管理" then %>
                              <option value="执行官/高级管理" selected>执行官/高级管理</option>
                              <%else%>
                              <option value="执行官/高级管理">执行官/高级管理</option>
                              <%end if%>
                              <%if rs("job")="制造/生产/操作" then %>
                              <option value="制造/生产/操作" selected>制造/生产/操作</option>
                              <%else%>
                              <option value="制造/生产/操作">制造/生产/操作</option>
                              <%end if%>
                              <%if rs("job")="专业人员" then %>
                              <option value="专业人员" selected>专业人员</option>
                              <%else%>
                              <option value="专业人员">专业人员</option>
                              <%end if%>
                              <%if rs("job")="自雇/业主" then %>
                              <option value="自雇/业主" selected>自雇/业主</option>
                              <%else%>
                              <option value="自雇/业主">自雇/业主</option>
                              <%end if%>
                              <%if rs("job")="其他" then %>
                              <option value="其他" selected>其他</option>
                              <%else%>
                              <option value="其他">其他</option>
                              <%end if%>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">来自何处：
                            <input name="from" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["from"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">关心本站：
                            <select name=thissite>
                              <%if rs("thissite")="未填" then %>
                              <option value="未填" selected>未填</option>
                              <%else%>
                              <option value="未填">未填</option>
                              <%end if%>
                              <%if rs("thissite")="出租信息" then %>
                              <option value="出租信息" selected>出租信息</option>
                              <%else%>
                              <option value="出租信息">出租信息</option>
                              <%end if%>
                              <%if rs("thissite")="求租信息" then %>
                              <option value="求租信息" selected>求租信息</option>
                              <%else%>
                              <option value="求租信息">求租信息</option>
                              <%end if%>
                              <%if rs("thissite")="出售信息" then %>
                              <option value="出售信息" selected>出售信息</option>
                              <%else%>
                              <option value="出售信息">出售信息</option>
                              <%end if%>
                              <%if rs("thissite")="求购信息" then %>
                              <option value="求购信息" selected>求购信息</option>
                              <%else%>
                              <option value="求购信息">求购信息</option>
                              <%end if%>
                              <%if rs("thissite")="网站建设" then %>
                              <option value="网站建设" selected>网站建设</option>
                              <%else%>
                              <option value="网站建设">网站建设</option>
                              <%end if%>
                              <%if rs("thissite")="平面广告设计" then %>
                              <option value="平面广告设计" selected>平面广告设计</option>
                              <%else%>
                              <option value="平面广告设计">平面广告设计</option>
                              <%end if%>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">电　　话：
                            <input name="tel" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["tel"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">传　　真：
                            <input name="fax" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["fax"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">手机号码：
                            <input name="sj" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["sj"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">Ｑ　　Ｑ：
                            <input name="qq" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["qq"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">Ｅ－mail：
                            <input name="email" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["email"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">邮　　编：
                            <input name="yb" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["yb"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" colspan="2">地　　址：
                            <input name="address" type="text" class="textinput" size="50" maxlength="50" value="<?php echo $rs["address"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" colspan="2">个人主页：
                            <input name="http" type="text" class="textinput" size="50" maxlength="50" value="<?php echo $rs["http"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" colspan="2">
                            <table width="508" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="66" align="left" valign="top" class="font">自我介绍：</td>
                                <td width="442" align="left" valign="middle">
                                  <textarea name="bz" class="textinput" cols="80" rows="6"><?php echo $rs["bz"]?></textarea>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr align="center">
                          <td valign="middle" height="30" class="font" colspan="2">
                            <input type="submit" name="Submit42" value="提  交" class="textbotton">
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </form>
              </table>
            </td>
          </tr>
        </table>
      </center>
      <br>
      <br>
    </td>
  </tr>
</table>
</body>
</html>
