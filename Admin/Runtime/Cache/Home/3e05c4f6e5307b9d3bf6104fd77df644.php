<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/common.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adsystem.css">
  <link rel="stylesheet" type="text/css" href="/EasyTalk/BackendPublic/css/adnav.css">
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/jquery-3.1.1.js"></script>
  <script type="text/javascript" src="/EasyTalk/Public/js/jquery.form.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/quitlogin.js"></script>
  <script type="text/javascript" src="/EasyTalk/BackendPublic/js/adpicup.js"></script>
</head>
<body>
      <div class="bgbox topbg-1">
      	   <div class="topbg">
      	   	     <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
      	   	     <a href="#">退出登录</a>
      	   	     <p>您好，请先登录</p>
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
                                   <a href="/EasyTalk/admin.php/Home/Administration/aduser?html=11" class="labg"><li>用户管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adteacher?html=12" class="labg"><li>教师管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adtradata?html=13" class="labg"><li>交易数据</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adclass?html=14" class="labg"><li>课程管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adexe_index?html=15" class="labg"><li>练习管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adlangindex?html=16" class="labg"><li>语种管理</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adpicindex" class="now-a" id="moreul"><li>图片上传</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adnav" class="labg"><li>导航栏</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/adcomment" class="labg"><li>意见反馈</li></a>
                                   <a href="/EasyTalk/admin.php/Home/Administration/ad-cpsw" class="labg"><li>密码修改</li></a>
                              </ul>
                        </div>
                        <div class="searchbox">
                              <div class="searchdiv"></div>
                              <p>首页图片上传预览</p>
                        </div>
                        <div class="conbox" style="position: relative;">
                             <div class="addnav-top">
                                <img src="/EasyTalk/BackendPublic/images/easytalklogo.png" alt="Easytalk">
                             </div>
                             <div class="addnav-nav">
                                <div class="addnav-navbox">
                                   <ul>
                                       <li>首页</li>
                                       <li>课程体系</li>
                                       <li>老师介绍</li>
                                       <li>课程购买</li>
                                       <li>个人中心</li>
                                       <li>练习中心</li>
                                   </ul>
                                </div>
                             </div>
                             <div class="adpic-pic">
                                    <div class="listbox">
                                        <ul class="list">
                                            <li>
                                                 <img alt="请上传新的图片" class="piccss" id="pic-1" name='p1'>
                                              </li>
<!--                                              <li>
                                                 <img src="/EasyTalk/BackendPublic/images/banner-ini.jpg" alt="请上传新的图片" class="piccss" id="pic-2" name='p2'>
                                             </li>
                                             <li>
                                                 <img src="/EasyTalk/BackendPublic/images/banner-ini.jpg" alt="请上传新的图片" class="piccss" id="pic-3" name='p3'>
                                                  
                                             </li>
                                            <li>
                                                <img src="/EasyTalk/BackendPublic/images/banner-ini.jpg" alt="请上传新的图片" class="piccss" id="pic-4" name='p4'>
                                            </li>
                                             <li>
                                                 <img src="/EasyTalk/BackendPublic/images/banner-ini.jpg" alt="请上传新的图片" class="piccss" id="pic-5" name='p5'>
                                                  
                                            </li> -->
                                         </ul>
                                   </div>
<!--                                    <img src="/EasyTalk/BackendPublic/images/left_page.png" alt="left" class="lr-bu lr-bu-l" id="lr-l">
                                   <img src="/EasyTalk/BackendPublic/images/right_page.png" alt="right" class="lr-bu lr-bu-r" id="lr-r"> -->

                             </div>
                              <ul class="ulmore">
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpicindex"><li>首页图片</li></a>
                                  <a href="/EasyTalk/admin.php/Home/Administration/adpiccl"><li>课程体系</li></a>
                              </ul>
                        </div>
                        <div class="call">
                              <form enctype="multipart/form-data" method="post" id="upindexpic-1" >
                                    <label for="ad-uppic-1" class="adpic-buttonfor button-1"><div><p>上传</p></div></label>
                                    <input type="file" value="上传" style="display: none;" id="ad-uppic-1" class="buttonid" name="photo">
                                    <input type="texte" name="pnum" style="display: none;" value="1">
                              </form>
<!--                               <form enctype="multipart/form-data" method="post" id="upindexpic-2">
                                    <label for="ad-uppic-2" class="adpic-buttonfor button-2"><div><p>上传</p></div></label>
                                    <input type="file" value="上传" style="display: none;" id="ad-uppic-2" class="buttonid" name="photo">
                                    <input type="texte" name="pnum" style="display: none;" value="2">
                              </form>
                              <form enctype="multipart/form-data" method="post" id="upindexpic-3">
                                    <label for="ad-uppic-3" class="adpic-buttonfor button-3"><div><p>上传</p></div></label>
                                    <input type="file" value="上传" style="display: none;" id="ad-uppic-3" class="buttonid" name="photo">
                                    <input type="texte" name="pnum" style="display: none;" value="3">
                              </form>
                              <form enctype="multipart/form-data" method="post" id="upindexpic-4">
                                    <label for="ad-uppic-4" class="adpic-buttonfor button-4"><div><p>上传</p></div></label>
                                    <input type="file" value="上传" style="display: none;" id="ad-uppic-4" class="buttonid" name="photo">
                                    <input type="texte" name="pnum" style="display: none;" value="4">
                              </form>
                              <form enctype="multipart/form-data" method="post" id="upindexpic-5">
                                    <label for="ad-uppic-5" class="adpic-buttonfor button-5"><div><p>上传</p></div></label>
                                    <input type="file" value="上传" style="display: none;" id="ad-uppic-5" class="buttonid" name="photo">
                                    <input type="texte" name="pnum" style="display: none;" value="5">
                              </form> -->
                              <form enctype="multipart/form-data" method="post" id="upindexpic-6">
                                    <input type="texte" name="pnum" style="display: none;" value="5" id="pnum">
                              </form>
                              <input type="button" value="删除" class="adpic-button adpic-buttonde" id="upindexpic-de">
                              <input type="button" value="确认" class="adpic-button adpic-buttonsu" id="upindexpic-su">
                        </div>
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