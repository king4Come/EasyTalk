<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adsystem.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/Public/js/jquery.form.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/adexe.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/quitlogin.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   </div>
      </div>
      <div class="bgbox navbg-1">
      	   <div class="navbg">
      	   	   <ul>
                  <a href="/EasyTalk/admin.php/Home/Administration/adminlogin" class="ab nowa"><li>管理员</li></a>
                  <a href="/EasyTalk/admin.php/Home/teacher/teacherlogin" class="ab"><li>教师</li></a>
      	   	   </ul>
      	   </div>
      </div>
      <div class="bgbox centerbg-1">
            <div class="centerbg">
                  <div class="ctop">
                        <p>后台管理系统</p>
                        <span>管理员：11232</span>
                  </div>
                  <div class="ccenter">
                        <div class="cnav">
                              <ul>
                                   <a href="/EasyTalk/admin.php/Home/Administration/aduser?html=11"><li>用户管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adteacher?html=12" class="labg"><li>教师管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adtradata?html=13" class="labg"><li>交易数据</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adclass?html=14"><li>课程管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adexe_index?html=15" class="now-a"><li>练习管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adlangindex?html=16" class="labg"><li>语种管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adpicindex" class="labg" id="moreul"><li>图片上传</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adnav" class="labg"><li>导航栏</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adcomment" class="labg"><li>意见反馈</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/ad-cpsw" class="labg"><li>密码修改</li></a>
                              </ul>
                        </div>
                        <div class="searchbox">
                              <div class="searchdiv"></div>
                              <p>编辑小题</p>
                        </div>
                        <form action="updateTeacher" enctype="multipart/form-data" method="post" id="upeditcform">
                        <div class="conbox" style="position: relative;">
                              <ul class="ulmore">
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpicindex"><li>首页图片</li></a>
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpiccl"><li>课程体系</li></a>
                              </ul>
                              <form action="#" id="exe_edi_sm_form">
                                   <table class="exe_ns_table2" cellpadding='0' cellspacing='32'>
                                        <tr>
                                            <td class='exe_a_right'>题目</td>
                                            <td><input type="text" class="exe_input1" name="t_title" id="exe_edi_sm_title"></td>
                                        </tr>
                                        <tr>
                                            <td class='exe_a_right'>A</td>
                                            <td><input type='text' class='exe_input2' name="op_a" id="exe_edi_sm_a"></td>
                                        </tr>
                                        <tr>
                                            <td class='exe_a_right'>B</td>
                                            <td><input type='text' class='exe_input2' name="op_b" id="exe_edi_sm_b"></td>
                                        </tr>
                                        <tr>
                                            <td class='exe_a_right'>C</td>
                                            <td><input type='text' class='exe_input2' name="op_c" id="exe_edi_sm_c"></td>
                                        </tr>
                                        <tr>
                                            <td class='exe_a_right'>D</td>
                                            <td><input type='text' class='exe_input2' name="op_d"
                                            id="exe_edi_sm_d"></td>
                                        </tr>
                                        <tr>
                                            <td class='exe_a_right'>答案</td>
                                            <td><select class="exe_ns_selcet" name="answer" id="exe_edi_sm_ans">
                                                    <option value=""></option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                </select>
                                            </td>
                                        </tr>

                                   </table>
                                   <div class='exe_gabox'>
                                         <div class="exe_ga_div">2</div>
                                         <input type="text" value="2" style="display: none;" id="exe_edi_sm_ga">
                                         <span>分</span>
                                         <img src="/EasyTalk/BackendPublic/images/up.png" class="exe_up" id="ga_up">
                                         <img src="/EasyTalk/BackendPublic/images/down.png" class="exe_down" id="ga_down">
                                   </div>
                              </form>
                        </div>
                        <div class="call">
                              <div class="call-2">
                                    <input type="button" value="确认" class="call-bu call-bu1" id="exe_edi_sm_up">
                                    <input type="button" value="取消" class="call-bu call-bu2" id="exe_back">
                              </div>
                        </div>
                        </form>
                  </div>
            </div>
      </div>
      <div class="bgbox bottombg-1">
      	   <div class="bottombg">
      	   	   <p>Copyright &copy Easy talk 小语种在线一对一学习社区 | 版权所有 京ICP证008719-5</p>
      	   </div>
      </div>
</body>
</html>