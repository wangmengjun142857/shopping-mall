<?php 
	session_start();
	header("content-type:text/html;charset=utf8");
	// include "conn.php";
	// $upload="select S_type from goods";
	// $up=mysql_fetch_row(mysql_query($up));
	$S_id=@$_POST['S_id'];
	$S_name=@$_POST['S_name'];
	$S_type=@$_POST['S_type'];
	$price=@$_POST['price'];
	$uptypes=array(  
    'image/jpg',  
    'image/jpeg',  
    'image/png',  
    'image/pjpeg',  
    'image/gif',  
    'image/bmp',  
    'image/x-png'  
	);   
	$max_file_size=2000000;     //上传文件大小限制, 单位BYTE  
	$destination_folder="images/"; //上传文件路径
	$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);  
	$imgpreviewsize=1/2;    //缩略图比例
	if ($_SERVER['REQUEST_METHOD'] == 'POST')  
	{  
		if (@!is_uploaded_file($_FILES["upfile"][tmp_name]))  
		//是否存在文件  
		{  
			echo "图片不存在!";  
			exit;  
		}  
							  
		$file = $_FILES["upfile"];  
		if($max_file_size < $file["size"])  
		//检查文件大小  
		{  
			echo "文件太大!";  
			exit;  
		} 
		if(!in_array($file["type"], $uptypes))  
		//检查文件类型  
		{  
			echo "文件类型不符!".$file["type"];  
			exit;  
		}  
							  
			if(!file_exists($destination_folder)) 				     
			{  
				mkdir($destination_folder);  
			}				      			        
				$filename=$file["tmp_name"];  
				$image_size = getimagesize($filename);  
				$pinfo=pathinfo($file["name"]);  
				$ftype=$pinfo['extension'];  
				$destination = $destination_folder.time().".".$ftype; 			     
				if (file_exists($destination) && $overwrite != true)  
				{  
					echo "<script>alert('同名文件已经存在了');history.go(-1);</script>";exit;  
				} 
				if(!move_uploaded_file ($filename, $destination))  
				{  
				echo "<script>alert('移动文件出错');history.go(-1);</script>";  
				exit;  
				}				    
				$pinfo=pathinfo($destination);  
				$fname=@$pinfo[basename];  
				echo " <script><font color=red>已经成功上传</font><br>文件名:  <font color=blue>".$destination_folder.$fname."</font><br></script>"; 
							    // if($imgpreview==1){ 
							    // echo " 宽度:".$image_size[0];  
							    // echo " 长度:".$image_size[1];  
							    // echo "<br> 大小:".$file["size"]." bytes"; 
							    // echo "<br>图片预览:<br>";  
							    // echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);  
							    // echo " alt=\"图片预览:\r文件名:".$destination."\r上传时间:\">";  
							    // }  
	}
	if(isset($_POST['Submit'])){
		if(!(empty($S_name) || empty($S_id) || empty($S_type)||empty($price))){
			if(preg_match('/^[a-zA-Z0-9]\w{3,17}$/',$S_id)){
				$preg3='/^[\x{4e00}-\x{9fa5}]+$/u';
				if(preg_match($preg3,$S_name)){
						
						
						$sql = "insert into goods values('{$S_id}','{$S_name}','{$S_type}','{$price}','{$destination_folder}{$fname}')";
						$result=mysql_query($sql);
						if(mysql_affected_rows()){
						$_SESSION['S_id'] = $S_id;
						$_SESSION['S_name']=$S_name;
						echo $_SESSION['S_id'];
							echo "<script>alert('添加成功');window.location.href='tjsp.php';</script>";
						}else{
							echo "<script>alert('添加失败');history.go(-1);</script>";
						}
				
				}else{
					echo "<script>alert('商品名称非法或长度不符合');window.location.href='tjsp.php';</script>";
				}
			}else{
				echo "<script>alert('商品编号非法');window.location.href='tjsp.php';</script>";
			}
		}
		else{
			echo "<script>alert('带*内容均为必填');window.location.href='tjsp.php';</script>";
		}
	}
?>
<?php 
	session_start();
	header("content-type:text/html;charset=utf8");
	$S_id=@$_POST['S_id'];
	$S_name=@$_POST['S_name'];
	$S_type=@$_POST['S_type'];
	$price=@$_POST['price'];
	$uptypes=array(  
    'image/jpg',  
    'image/jpeg',  
    'image/png',  
    'image/pjpeg',  
    'image/gif',  
    'image/bmp',  
    'image/x-png'  
	);   
	$max_file_size=2000000;     //上传文件大小限制, 单位BYTE  
	$destination_folder="images/"; //上传文件路径
	$imgpreview=1;      //是否生成预览图(1为生成,其他为不生成);  
	$imgpreviewsize=1/2;    //缩略图比例
	if ($_SERVER['REQUEST_METHOD'] == 'POST')  
	{  
							    if (@!is_uploaded_file($_FILES["upfile"][tmp_name]))  
							    //是否存在文件  
							    {  
							         echo "<script>图片不存在!</script>";  
							         exit;  
							    }  
							  
							    $file = $_FILES["upfile"];  
							    if($max_file_size < $file["size"])  
							    //检查文件大小  
							    {  
							        echo "<script>文件太大!</script>";  
							        exit;  
							    } 
							    if(!in_array($file["type"], $uptypes))  
							    //检查文件类型  
							    {  
							        echo "<script>文件类型不符!</script>".$file["type"];  
							        exit;  
							    } 
							    if(!file_exists($destination_folder))  
							    {  
							        mkdir($destination_folder);  
							    }  
							    $filename=$file["tmp_name"];  
							    $image_size = getimagesize($filename);  
							    $pinfo=pathinfo($file["name"]);  
							    $ftype=$pinfo['extension'];  
							    $destination = $destination_folder.time().".".$ftype;  
							    if (file_exists($destination) && $overwrite != true)  
							    {  
							        echo "<script>alert('同名文件已经存在了');</script>";  
							        exit;  
							    } 
							    if(!move_uploaded_file ($filename, $destination))  
							    {  
							        echo "<script>alert('移动文件出错');</script>";  
							        exit;  
							    }
							    $pinfo=pathinfo($destination);  
							    $fname=@$pinfo[basename];  
							    echo " <script><font color=red>已经成功上传</font><br>文件名:  <font color=blue>".$destination_folder.$fname."</font><br></script>"; 
							    // if($imgpreview==1){ 
							    // echo " 宽度:".$image_size[0];  
							    // echo " 长度:".$image_size[1];  
							    // echo "<br> 大小:".$file["size"]." bytes"; 
							    // echo "<br>图片预览:<br>";  
							    // echo "<img src=\"".$destination."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);  
							    // echo " alt=\"图片预览:\r文件名:".$destination."\r上传时间:\">";  
							    // }  
	}
	if(isset($_POST['Submit'])){
		if(!(empty($S_name) || empty($S_id) || empty($S_type)||empty($price))){
			if(preg_match('/^[a-zA-Z0-9]\w{3,17}$/',$S_id)){
				$preg3='/^[\x{4e00}-\x{9fa5}]+$/u';
				if(preg_match($preg3,$S_name)){
						include "conn.php";
						
						$sql = "insert into goods values('{$S_id}','{$S_name}','{$S_type}','{$price}','{$destination_folder}.{$fname}')";
						$result=mysql_query($sql);
						if(mysql_affected_rows()){
						$_SESSION['S_id'] = $S_id;
						$_SESSION['S_name']=$S_name;
						echo $_SESSION['S_id'];
							echo "<script>alert('添加成功');window.location.href='tjsp.php';</script>";
						}else{
							echo "<script>alert('添加失败');history.go(-1);</script>";
						}
				
				}else{
					echo "<script>alert('商品名称非法或长度不符合');history.go(-1);</script>";
				}
			}else{
				echo "<script>alert('商品编号非法');history.go(-1);</script>";
			}
		}
		else{
			echo "<script>alert('带*内容均为必填');history.go(-1);</script>";
		}
	}
?>
