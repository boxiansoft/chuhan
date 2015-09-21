<?php if(!empty($_GET[submit])) 
{ 	
$path="../../UpLoad/"; //上传路径 	//
//echo $_FILES["filename"]["type"]; 	
if(!file_exists($path)) 	
{ 		//检查是否有该文件夹，如果没有就创建，并给予最高权限 		
mkdir("$path", 0700); 	
}//END IF 		//允许上传的文件格式 	
$tp = array("image/gif","image/pjpeg","image/x-png"); 	//检查上传文件是否在允许上传的类型 	
//echo $_FILES["filename"]["type"];
//return;
if(!in_array($_FILES["filename"]["type"],$tp)) 	
{ 		
echo "格式不对"; 		
exit; 	
}//END IF 		
if($_FILES["filename"]["name"]) 	
{
$file1=strrchr($_FILES["filename"]["name"],'.'); 	
$file2 = $path.date("Ymd_His_").rand(100,200).$file1; 		
$flag=1; 	
}//END IF 		
if($flag) $result=move_uploaded_file($_FILES["filename"]["tmp_name"],$file2); 		//特别注意这里传递给move_uploaded_file的第一个参数为上传到服务器上的临时文件
$file2=str_replace("../","",$file2);

if($result) 	
{
$message=$message."<script type='text/javascript' language='javascript'>"; 		
$message=$message."alert(\"OK\");"; 		//
$message=$message."opener.addFriend.productPic.value = '$file2';"; 
$message=$message."window.close();";
$message=$message."window.location.go(-1);";
$message=$message."</script>";
echo $message;

}//END IF 
} 
else 
{	
echo "file is null!";
}?>