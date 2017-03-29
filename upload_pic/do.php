<?php
header('Content-Type:text/html;charset=utf-8');
//error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db('words');
mysql_query('set names utf8');
function uploadFile($fileInfo,$uploadPath='uploads',$allowExt=array('jpeg','jpg','gif','png'),$maxSize=2097152){
		if($fileInfo['error']>0){
			switch($fileInfo['error']){
				case 1:
					$mes = '上传文件超过php配置文件中upload_max_filesize';
					break;
				case 2:
					$mes = '超过表单MAX_FILE_SIZE大的限制大小';
					break;
				case 3:
					$mes = '文件部分被上传';
					break;
				case 4:
					$mes = '没有选择上传文件';
					break;
				case 6:
					$mes ='没有找到临时目录';
					break;
				case 7:
				case 8:
					$mes = '系统错误';
				break;
			}
			exit ($mes);
			return false;
		}
		$ext = pathinfo($fileInfo['name'],PATHINFO_EXTENSION);
		if(!is_array($allowExt)){
			exit('系统错误');
		}
		//检测文件上传的类型
		if(!in_array($ext,$allowExt)){
			exit('非法文件类型');
		}
		//检测上传文件大小是否符合规范
		if($fileInfo['size']>$maxSize){
			exit('上传文件过大');
		}
		$uploadPath='image';//传到哪个目录下
		if(!file_exists($uploadPath)){
			mkdir($uploadPath,0777,true);
			chmod($uploadPath,0777);
		}
		$uniName=md5(uniqid(microtime(true),true)).'.'.$ext;
		$destination=$uploadPath.'/'.$uniName;	
		if(!move_uploaded_file($fileInfo['tmp_name'],$destination)){
			exit('文件移动失败');
		}
		//echo '文件上传成功';	
		return $destination;
		
	}	
	$fileInfo=$_FILES['myFile'];
	$newName=uploadFile($fileInfo);
	
	$username = $_POST['username'];
	$sql="insert into animals(username,myFile) values('$username','$newName')";
	$query =  mysql_query($sql);
	if($query == true){
		echo "添加成功";
	}else{
		echo "<script>alert('添加失败！');location='upload.php';</script>";
	}
	
	
	