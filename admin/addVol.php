<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>voice主题添加界面</title>
<style type="text/css">
<!--
body {
	background-color: white;
}
#Layer1 {
	position:absolute;
	width:1104px;
	height:89px;
	z-index:1;
	background-color: #666666;
	left: 81px;
	top: 32px;
}
#Layer2 {
	position:absolute;
	width:212px;
	height:63px;
	z-index:2;
	left: 413px;
	top: -12px;
}
.STYLE3 {font-size: 20px}
#Layer3 {
	position:absolute;
	width:81px;
	height:28px;
	z-index:3;
	left: -1px;
	top: -26px;
}
#Layer4 {
	position:absolute;
	width:360px;
	height:40px;
	z-index:8;
	left: 67px;
	top: -20px;
}
.STYLE5 {
	font-family: "新宋体";
	font-size: 20px;
}
.STYLE6 {font-family: "方正舒体"}
.STYLE7 {font-size: 50px; font-family: "方正舒体"; }
#Layer5 {
	position:absolute;
	width:90px;
	height:28px;
	z-index:3;
	left: 85px;
	top: 80px;
}
.STYLE9 {
	font-family: "宋体";
	font-size: 19px;
}
#Layer6 {
	position:absolute;
	width:89px;
	height:22px;
	z-index:4;
	top: 183px;
	left: 10px;
}
#Layer7 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
}
#Layer8 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 23px;
	top: 56px;
}
#Layer9 {
	position:absolute;
	width:429px;
	height:30px;
	z-index:3;
	left: 75px;
	top: 100px;
}
.STYLE10 {font-size: 16px}
#Layer10 {
	position:absolute;
	width:464px;
	height:30px;
	z-index:4;
	left: 75px;
	top: 140px;
}
#Layer11 {
	position:absolute;
	width:421px;
	height:38px;
	z-index:5;
	left: 75px;
	top: 180px;
}
#Layer12 {
	position:absolute;
	width:420px;
	height:42px;
	z-index:6;
	left: 75px;
	top: 220px;
}
#Layer13 {
	position:absolute;
	width:250px;
	height:250px;
	z-index:7;
	left: 75px;
	top: 260px;
	margin-left:0px;
}
#Layer14 {
	position:absolute;
	width:73px;
	height:0px;
	z-index:8;
	left: 75px;
	top: 300px;
}
#Layer15 {
	position:absolute;
	width:209px;
	height:26px;
	z-index:9;
	left: 150px;
	top: 300px;
}
#Layer16 {
	position:absolute;
	width:423px;
	height:39px;
	z-index:7;
	left: 75px;
	top: 340px;
}
#Layer17 {
	position:absolute;
	width:250px;
	height:28px;
	z-index:11;
	left: 123px;
	top: 450px;
}
#Layer18 {
	position:absolute;
	width:50px;
	height:28px;
	z-index:11;
	left: 230px;
	top: 450px;
}
#Layer19 {
	position:absolute;
	width:295px;
	height:252px;
	z-index:13;
	left: 631px;
	top: 220px;
	background-color: #FFFFFF;
}
#Layer20 {
	position:absolute;
	width:90px;
	height:30px;
	z-index:14;
	top:0px;
}
.STYLE11 {
	font-size: 16px;
	font-family: "宋体";
}
#Layer21 {
	position:absolute;
	width:299px;
	height:219px;
	z-index:15;
	left: 598px;
	top: 130px;
}
#Layer22 {
	position:absolute;
	width:200px;
	height:33px;
	z-index:16;
	left: 786px;
	top: 350px;
}
.STYLE12 {font-size: 30px}
.STYLE13 {font-size: 20px}
-->
</style></head>

<body>
<div id="Layer4">
  <p><span class="STYLE5">欢迎加入</span><span class="STYLE7"> v</span><span class="STYLE6"><span class="STYLE3">oice音乐</span></span></p>
  <div class="STYLE9" id="Layer5">添加主题</div>
</div>
<form name="addvol" id="addvol" action="insertVol.php" method="post" enctype=multipart/form-data ">
<div >
    <label><span class="STYLE10"><font size="2">主题编号:</font></span>
   <input type="text" name="vol" />
    </label>
</div>
<div id="Layer9">
    <label><span class="STYLE10"><font size="2">主题名称:</font></span>
   <input type="text" name="theme" />
    </label>
</div>
<div id="Layer10">
    <label><span class="STYLE10"><font size="2">主题图片:</font></span> </label>
    <label>
    <input type="file" name="image" />
    </label>
</div>
<div id="Layer11">
    <label><span class="STYLE10"><font size="2">主题故事--</font></span> 
    </label>
</div>
<div id="Layer12">
    <label><span class="STYLE10"><font size="2">标&nbsp;&nbsp;题:</font></span>
   <input name="title" type="text" size="20" />
    </label>
</div>
  <div id="Layer13">
    <label><span class="STYLE10"><font size="2">正&nbsp;文:</font></span>
 <textarea name="story" cols="50" rows="10" style="margin-left: 65px;"></textarea>
    </label>
</div>
<div id="Layer19"></div>
<div id="Layer21"><img src="images/r.jpg" width="307" height="222" /></div>
<div id="Layer22"><span class="STYLE6"><span class="STYLE12">v</span><span class="STYLE13">oice</span></span><span class="STYLE13"></span></div>
<div id="Layer17">
    <label>
      <input type="hidden" value="2" name="flag"/>
      <input name="Submit" type="submit" value="添加" />&nbsp;&nbsp;&nbsp;&nbsp;<input name="reset" type="reset" value="重置" />
    </label>
</div>
</form>
</body>
</html>
