<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css">
<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>

<body>
<div id="global">
          <!--  <div id="heading" class="bg-secondary text-white">后台管理界面</div>-->
          <!--菜单内容-->  
          <div class="bg-dark text-white" id="content_menu" ><p class="menu_font">菜单选择</p>
            <ul>
                <li><a rel="nofollow" href="admin_home.php" class="a">用户评论权限</a></li>
                <li><a rel="nofollow" href="delet_talk.php" class="a">删除用户评论</a></li>
                <li><a rel="nofollow" href="add_articl.php" class="a">发表文章</a></li>
                <li><a rel="nofollow" href="delete_articl.php" class="a">删除文章</a></li>
                <li><a rel="nofollow" href="change_picture.php" class="a">更改滚动栏图片和分类</a></li>
            </ul>
            </div>
            <!--操作内容-->
            <div  id="content_body">  
                <div class="entry-content">
                 <?php 
                       //连接数据库
                      $dbserver_name="localhost:8889";
                      $dbuser_name="root";
                      $dbpassword="root";
                     //连接数据库
                      $conect_db=mysqli_connect($dbserver_name,$dbuser_name,$dbpassword);
                       //判断是否连接成功（测试用）
                       /*if(!$conect_db){
                          die("connect error:".mysqli_error($conect_db));
                         }
                         else{
                                echo "connect successful!";
                         }*/
                         $a=$_GET['id'];
                         mysqli_select_db($conect_db,USER_INFO);
                        $sql="DELETE FROM article WHERE title='{$a}';DELETE FROM talk_area WHERE title='{$a}';";
                         $result=mysqli_multi_query($conect_db,$sql);
                        if(!$result){
                             die("删除失败出错:".mysqli_error($conect_db));
                         }
                         else{
                             echo "<script>alert('删除文章成功');</script>";
                             echo "<script>window.location.href='../admin/admin_home.php');</script>";
                             
                         }
                 ?> 
                 
                </div>
            </div>
         
            <!--<div class="bg-secondary text-white" id="floor"><p>待输入文字</p></div>-->
       
</div>
</body>
</html>