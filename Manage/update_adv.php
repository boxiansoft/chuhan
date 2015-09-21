<?php require("usersession.php");?>
<?php
include("conn.php");
?>
<?php
if($_GET['action']=="add_adv")
{
$advName=$_POST['advName'];
$advUrl=$_POST['advUrl'];
$advPic=$_POST['advpic'];
$area=$_POST['area'];
$className=$_POST['advClass'];
$advContent=$_POST['advContent'];
$mySql="insert into adv(advName,advUrl,advPic,area,className,advContent,addTime) values('$advName','$advUrl','$advPic','$area','$className','$advContent',now())";

$myQuery=mysql_query($mySql,$conn);
mysql_close($conn);
if($myQuery)
{
echo "<script language='javascript'>alert('信息添加成功');window.location.href='adv_manage.php';</script>";
}
else
{
echo "<script language='javascript'>alert('信息添加失败');window.location.href='add_adv.php';</script>";}
}
?>

<?php
if($_GET['action']=="update_adv")
{
$id=$_GET['id'];
$advName=$_POST['advName'];
$advUrl=$_POST['advUrl'];
$advPic=$_POST['advpic'];
$area=$_POST['area'];
$className=$_POST['advClass'];
$advContent=$_POST['advContent'];
$mySql="update adv set advName='$advName',advUrl='$advUrl',advPic='$advPic',area='$area',className='$className',advContent='$advContent' where id='$id'";
$myQuery=mysql_query($mySql,$conn);
if($myQuery)
{
echo "<script language='javascript'>alert('信息修改成功');window.location.href='adv_manage.php';</script>";
}
else
{
echo "<script language='javascript'>alert('信息修改失败');window.location.href='adv_manage.php';</script>";

}
mysql_close($conn);
}
?>

<?php
if($_GET['action']=="deleteAdv")
{
$id=$_GET['id'];
$sql="select advPic from adv where id='$id'";
$query=mysql_query($sql,$conn);
$row=mysql_fetch_array($query);
$advPic=$row['advPic'];
$mySql="delete from adv where id='$id'";
$myQuery=mysql_query($mySql,$conn);
if($myQuery)
{
if(file_exists($advPic))
{
unlink($advPic);
}
echo "<script language='javascript'>alert('信息删除成功');window.location.href='adv_manage.php';</script>";

}
else
{
echo "<script language='javascript'>alert('信息删除失败');window.location.href='adv_manage.php';</script>";

}
mysql_close($conn);
}
?>