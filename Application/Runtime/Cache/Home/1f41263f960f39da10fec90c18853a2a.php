<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>练习中心</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/Public/css/practiceclass.css">
	<link rel="stylesheet" type="text/css" href="/EasyTalk/Public/css/common.css">
  <script type="text/javascript" src="/EasyTalk/Public/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/Public/js/nav.js"></script>
  <script type="text/javascript" src="/EasyTalk/Public/js/common.js"></script>
  <script type="text/javascript" src="/EasyTalk/Public/js/practice_ans.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/Public/src/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   	     <p>您好，请先登录</p>
      	   </div>
      </div>
      <div class="bgbox navbg-1">
      	   <div class="navbg">
               <ul>
                  <a href="/EasyTalk/index.php/"><li id="nav1">首页</li></a>
                  <a href="/EasyTalk/index.php/home/coursesys/course_system_1" class="nava"><li id="nav2">课程体系</li></a>
                  <a href="/EasyTalk/index.php/home/teacher/tea_ara?lan=01" class="nava"><li id="nav3">老师介绍</li></a>
                  <a href="/EasyTalk/index.php/home/course/buyclass_vie" class="nava"><li id="nav4">课程购买</li></a>
                  <a href="/EasyTalk/index.php/home/user/pccenter" class="nava"><li id="nav5">个人中心</li></a>
                  <a href="/EasyTalk/index.php/home/exercise/practiceclass?lan=01" class="nava nowa"><li id="nav6">练习中心</li></a>
               </ul>
      	   </div>
      </div>
      <div class="bgbox centerbg-1">
            <div class="centerbg">
                  <div class="pctitle"><p><span class="title_lang"></span>-<span class="title_span"></span></p></div>
                  <div class="pccontro">
                        <p></p>
                        <table cellspacing="30" cellpadding="0">
                               <tr>
                                   <td>难度</td>
                                   <td><p id="levle"></p></td>
                                   <td>总分</td>
                                   <td><p id="ga"></p></td>
                                   <td>题量</td>
                                   <td><p id="num"></p></td>
                                   <td>上传时间</td>
                                   <td><p id="time"></p></td>
                               </tr>
                        </table>
                        <input type="button" value="返回" class="exe_bu" id="exe_back">
                  </div>
                  <div class="score" id="score"></div>
                  <div class="pcitem">
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