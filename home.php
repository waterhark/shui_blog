<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-text" content="text/html">
    <title>Blog Of ShuiMengZhi</title>
    <link rel="stylesheet" type="text/css" media="screen" href="test.css">
</head>
<body>
    <div class=entry-content>
<a  class=email_text href="http://www.google.com">E-mail: 
    <?php 
     session_start();
     echo $_SESSION['user_email'];?></a></div>
    <header>
    <h5>Blog Of ShuiMengZhi</h5>
    </header>
    <div class="entry-content">
        <p> &nbsp;&nbsp;&nbsp;好的老师教你知识的目的是让你怀疑一切；亚里士多德说：“吾爱吾师,吾尤爱真理。”混蛋老师是把过去的的知识灌输给你，并让你相信。前者是育人，后者是造零部件。<br> &nbsp;&nbsp; 人之所以为人的特征就是怀疑一切，这种好奇心推动人类前进的步伐。 爱因斯坦在获得巨大科学成就后，其余生就是要否定自己的理论及因他的发现而产生的学说，直到生命的终点。他在给朋友信中承认自己的失败，对自己50年的思考表达出无比的遗憾。<br>  &nbsp;&nbsp;  英国剧作家汤姆·斯托帕德曾说：“这可能是活着的最佳时代，因为几乎所有你认为你知道的东西都是错的。” 尼采说：“后代必须怀着怎样巨大的厌恶来对付这个时代的遗产，当时从事统治的不是活生生的人，而是徒具人形的舆论。所以，在某一遥远的后代看来，我们这个时代也许是历史上最非人的时期，因而是最模糊，最陌生的时期。”<br>    &nbsp;&nbsp;  教育的目的不是让你掌握知识，而是思考，即认识自己。零部件们才需要被教育成社会需要的东西，即职业白痴。再加上形成知识的背后复杂的背景元素，如国家、民族、政治、道德、法律、意识形态等等进一步禁锢人们的思维东西，使人成为教育的奴隶。<br> &nbsp;&nbsp;  这就是老子、释迦摩尼、马克思、尼采等思想家看到的问题所在，对那种以有为法教育他人的“教师”产生巨大的厌恶。如《金刚经》云：“若菩萨心，住于法而行布施，如人入暗，即无所见。若菩萨心，不住法而行布施，如人有目，日光明照，见种种色。”<br>  &nbsp;&nbsp;  因为思考就是要解放人的感性意识，感性意识越强，其创造力就越强。因为科学知识只是理性范畴，理性只是实践范畴，只是历史过程中改造世界的工具。而人的实践能力的扩大取决于感性意识对世界的追寻和认识能力。所以爱因斯坦有句话：“直觉超越理智，创新是直觉战胜逻辑。”不断战胜理性就是战胜矛盾。麻省理工学院院长在发现引力波后的声明中有句话：“一种广阔的人类意识，可以形成一个超越当时实验能力的概念。”就是指人类感性意识指引人类理性，而不是相反，必须解放人类感性意识去进一步开创基础科学，因为理性的知识太渺小了。所以他进一步指出：“没有基础科学，创新只能是小打小闹。”<br>  &nbsp;&nbsp;  因此任何知识都要以提高或者解放人的感性为目的，而不能被各类已经形成“有为法”知识禁锢住人的思维。马克思说：“全部历史是为了使人成为感性意识对象和人作为人的需要而成为需要而作准备的历史。”<br> &nbsp;&nbsp;   对于那些认为教育能够改变人的庸人见识，马克思提出：“关于环境和教育起改变作用的唯物主义学说忘记了：环境正是由人来改变的，而教育者本人一定是受教育的。因此，这种学说必然把社会分成两部分，其中一部分凌驾于社会之上。环境的改变和人的活动或自我改变的一致，只能被看作是并合理地理解为革命的实践。”<br>   &nbsp;&nbsp; 这就是《心经》讲的思维方法，即一切都在变化中，没有什么是固定的。因此教育他人怎么能够用过去的在今天已经发生变化，并且还在不断变化的世界和知识面对未来呢？《金刚经》云：“菩萨于法，应无所住。”<br>  &nbsp;&nbsp;   马克思的思想和理论原则就是基于这种思维方法和认识。《金刚经》云：“如来着，无所从来，亦无所去，故名如来。”如果你懂得这种思维，你就会发现，马克思的全部著作都是这种表述方式。只要有一个规定性或限定性出现，就不会读的懂。很多人说读起来难，就难在这种思维方式上。</p>
             
    </div><!-- .entry-content -->
     <!--评论区-->
    <div class=entry-content>
     <p class="talk"><b>评论区</b></p>
     <p>-----------------------------------------------------------------</p>
     <p><?php 
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
       mysqli_select_db($conect_db,USER_INFO);
       $sql='SELECT talk_email,talk_content FROM talk_area;';
       $result=mysqli_query($conect_db,$sql);
       //判断评论区数据库读取是否成功（测试用）
       /*if(!$result){
           die("erro".mysqli_error($conect_db));
       }*/
       while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
       {
           echo "{$row['talk_email']}<br/>";
           echo "{$row['talk_content']}<br/>";
           echo "--------------------------------------------------------------<br/>";
        }
       mysqli_close($conect_db);
     ?></p>
    </div>
    <div class="entry-content">
    <form method="POST" action="php/talk.php">
            <p class="talk"><b>发表评论</b></p>
            <textarea class="textarea" rows="10" cols="100" name="talk_area" required></textarea>
            <input class="submit" type="submit" value="提交">
            
        </form> 
    </div>
</body>
</html>