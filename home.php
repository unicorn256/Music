<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel='stylesheet' id='login-css' href='style.css' type='text/css'
	media='all' />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��������</title>
</head>
<body>
<?php 
include 'dbutil/dbconfig.php';
include 'dbutil/medoo.php';

$db=new medoo($link_url);
$query="select * from vol t1 where t1.id=(select max(id) from vol) ";

if(isset($_SESSION[volId]))
	$maxVol=$db->select("vol", "*",["id"=>$_SESSION[volId]]);
else 
	$maxVol=$db->query($query)->fetchAll();

?>
 <div class="main">
		<div class="top">
			<table width="927" height="87" border="0">
				<tr>
					<td><div align="right" class="STYLE4">��������</div>
				</tr>
			</table>
		</div>
		<div id="center">
			<div id="menu">
				<div id="Layer3">
					<div align="left">
						<table width="998" border="0" height="15">
							<tr>
								<td width="44" height="25"><span class="STYLE5 STYLE6"><a
										href="home.php">��ҳ</a></span></td>
								<td width="44"><span class="STYLE5"><a href="music.php">����</a></span></td>
								<td width="44"><span class="STYLE5"><a href="vol.php">����</span><br /></td>
								<td width="44"><span class="STYLE5"><a href="about.php">����</a></span></td>
								<td width="563">&nbsp;</td>
								<td width="170"><input type="text" name="textfield" /></td>
								<td width="59"><span class="STYLE5"><a href="##">����</a></span></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="left">
				<table width="605" height="750" border="0">
					<tr>
						<td height="50">
							<div align="left">
								<a href="music.php"><font size="3">Vol.<?php echo $maxVol[0][vol].$maxVol[0][theme];?></a>
							</div>
						</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td width="605" height="700"><img src="<?php echo $maxVol[0][image]?>"
							width="590" height="700" />&nbsp;&nbsp;&nbsp;&nbsp;
							<div align="center"></div></td>
						<td width="10">&nbsp;</td>
					</tr>
				</table>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
<?php  include 'right.php'; ?>
</div>
 <?php  include 'copyright.php'; ?>
 <script type="text/javascript">
 document.getElementById("right").style.height=document.getElementById("center").scrollHeight+"px";
 document.getElementById("left").style.height=document.getElementById("center").scrollHeight-30+"px";
 </script>

</body>
</html>