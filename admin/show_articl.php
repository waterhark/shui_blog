<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-text" content="text/html">
    <title>Blog Of ShuiMengZhi</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../test.css">
</head>
<body>
    <div class=entry-content>
<a  class=email_text href="http://localhost:8888/shui_blog/home.php">E-mail: 
    <?php 
     session_start();
     echo $_SESSION['user_email'];?></a></div>
    <header>
    <h5>Blog Of ShuiMengZhi</h5>
    </header>
    <div class="entry-content">
                 <?php 
                       //连接数据库
                      $dbserver_name="localhost:8889";
                      $dbuser_name="root";
                      $dbpassword="root";
                     //连接数据库
                      $conect_db=mysqli_connect($dbserver_name,$dbuser_name,$dbpassword);
                       //判断是否连接成功（测试用）
                      /* if(!$conect_db){
                          die("connect error:".mysqli_error($conect_db));
                         }
                         else{
                                echo "connect successful!";
                         }*/
                         
                         $a=$_GET["id"];
                       //从数据库找到文章并显示
                         mysqli_select_db($conect_db,USER_INFO);
                        $sql="SELECT title,content from article WHERE title='{$a}'";
                         $result=mysqli_query($conect_db,$sql);
                         //测试结果使用
                         /*if(!$result){
                             die("查询出错:".mysqli_error($conect_db));
                         }
                         else{
                             echo "ok";
                         }*/
                        while($row = mysqli_fetch_assoc($result)){
                     echo"<p class=title>{$row['title']}</p>";
                     echo "<p>-----------------------------------------------------------------</p>";
                     echo $row['content'];
                        }
                    ?>

                    
    </div>
    <!--评论区-->
    <div class=entry-content>
     <p class="title"><b>评论区</b></p>
     <p>-----------------------------------------------------------------</p>
     <p class="title"><?php 
     
       $sql1="SELECT talk_email,talk_content FROM talk_area WHERE title='{$a}';";
       $result1=mysqli_query($conect_db,$sql1);
       //判断评论区数据库读取是否成功（测试用）
       if(!$result){
           die("erro".mysqli_error($conect_db));
       }
       
       while($row=mysqli_fetch_array($result1,MYSQLI_BOTH))
       {
           echo "{$row['talk_email']}<br/>";
           echo "{$row['talk_content']}<br/>";
           echo "-----------------------------------------------------------------<br/>";
        }
      
     ?></p>
    </div>
    <div class="title">
    <form method="POST" action="show_articl_talk.php">
            <p class="talk"><b>发表评论</b></p>
            <?php
            echo "<input type='hidden' name='hidden_title' value='$a'>"
            ?>
            <textarea class="textarea" rows="10" cols="100" name="talk_area" required></textarea>
            <input class="submit" type="submit" value="提交">
        </form> 
    </div>
</p>

    </body>
</html>