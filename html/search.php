<!DOCTYPE html>
<html>
<head>
	<title>春天云幼儿园</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/search.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="../css/searchmin.css" />
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
</head>
<body>
    <form id="search-form" action="search.php" method="post">
        <input name="words" type="text" class="search-text" id="search_text" />
        <input type="submit" value="" class="search-button"/>
    </form>
    <div class="suggest">
        <ul id="search">
            <li>老虎</li>
            <li>老师</li>
        </ul>
    </div>
    	<div class="bg_in">
    		<img src="../V1.0/slices/bg_in.png">
	    </div>
    <div class="pic">
       <?php
			require_once ("./conn.php");
	
			$sql="select * from animals where word = '$_POST[words]'"; 
			$res=mysql_query($sql);
			if($res == true){
			
			//var_dump($res);
			while($row=mysql_fetch_row($res))
			{
				//echo $row[2];
		?>
        <img src=" ../<?php echo $row[3];?>" style="width:205px;height:220px;">
		<?php 
			}}
		?>
		<?php
			$sql1="select * from flower where word = '$_POST[words]'"; 
			$rs=mysql_query($sql1);
			if($rs == true){
			
			//var_dump($res);
			while($rows=mysql_fetch_row($rs))
			{
				//echo $row[2];
		?>
		 <img src=" ../<?php echo $rows[3];?>">
		<?php 
			}}
		?>
	   
	   
    </div>
    <div class="about">
      <p>相近字词</p>
		<?php
		
			$sql = "select * from `animals` order by id desc limit 4";
			$query=mysql_query($sql);
			while($row=mysql_fetch_array($query)){
				
		

		?>
        <div class="pt">
            <div class="picture"><img src="../<?php echo $row[3];?>"></div>
            <div class="text"><?php echo $row[1];?></div>
        </div>
		<?php
			}
		?>

    </div>
	
	<div class="view-div" style="width: 400px;height: 300px;position: absolute;margin-left: 300px;margin-top: 50px;">
        <div class="view-word" style="width: 300px;height: 200px;position: absolute;margin-left: 50px;">
            <div class="view-word-hanzi" style="width: 250px;height: 180px;position: absolute;margin-left: 30px;margin-top: 10px;text-align: center;font-size:40px;color:#97694F;">
                <b>
					<?php
						//require_once ("../conn.php");
						include 'ChinesePinyin.class.php';
						$Pinyin = new ChinesePinyin();


						$words = $_POST['words'];
						//echo '<p>转成带有声调的汉语拼音<br/>';
						$result = $Pinyin->TransformWithTone($words);
						echo '<h2>'.$result.'</h2>';
						echo '<h2>'.$words.'</h2>';	
				    ?>
				</b>
            </div>
        </div>
        <div class="imagin-think" style="width: 300px;height: 80px;position: absolute;margin-left: 35px;margin-top: 210px;">
            <div class="thik-word" style="width: 300px;height: 50px;position: absolute;margin-left: 30px;margin-top: 15px;font-size:25px;color:#97694F;text-align: center;">
                联想:
				<?php  
					require_once ("./conn.php"); 
					$sql2="select * from animals where word = '$_POST[words]'"; 
					$res2=mysql_query($sql2);
					if($res2 == true){
						while($row=mysql_fetch_row($res2)){
							echo $row[4];
						}
					}
		
					$sql3="select * from flower where word = '$_POST[words]'"; 
					$res3=mysql_query($sql3);
					if($res3 == true){
						while($row=mysql_fetch_row($res3)){
							echo $row[4];
						}
					}
				?>
            </div>
        </div>
    </div>

	<div class="ccc">
    <audio src="" controls="">
        您的浏览器不支持audio标签
    </audio>
    </div>

	<div class="ccc">
    <!--<video src="../image/1.swf" controls="controls">
        您的浏览器不支持video标签
    </video>-->
	<embed src="../image/3.swf" allowfullscreen="true"  quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="320" height="220" style="position:absolute;left:350px;top:360px;"></embed>
    </div>
	<div class="nav">
	    <ul>
	    	<a href="../index.php"><li><img src="../V1.0/slices/home.png" class="wdh"></li></a>
	    	<a href="search.php"><li><img src="../V1.0/slices/login.png" class="wdh"></li></a>
	    	<a href="write2.php"><li><img src="../V1.0/slices/mail.png" class="wbh"></li></a>
	    	<a href="study.php"><li><img src="../V1.0/slices/setting.png" class="wdh"></li></a>
	    </ul>
	</div>  
    <script type="text/javascript">
        document.getElementById("search_text").focus();
        $("#search_text").bind("keyup",function(){
            var searchText=$("#search_text").val();  //获取输入的内容
                //后台数据库中json格式如下
                var d={"word":[{"aboutword":"老","aboutstatement":"师"},
                              {"aboutword":"老","aboutstatement":"虎"},
                              {"aboutword":"老","aboutstatement":"实"},
                              {"aboutword":"老","aboutstatement":"鹰"},
                              {"aboutword":"老","aboutstatement":"马识途"}]}
                var html="";
                for(var i=0;i<d.word.length;i++){
                    html+="<li>"+d.word[i].aboutword+d.word[i].aboutstatement+"</li>";
                }
                $(".suggest").show();  //键盘按下显示智能提示的内容
                $("#search").html(html);
        });
        $(document).bind("click",function(){
            $(".suggest").hide();
            $("#search_text").focus();
        });
        $(document).delegate("li","click",function(){
            var keyword=$(this).text();
            location.href="#?q="+keyword;  //点击提示的li中的内容将跳到的位置
        });
    </script>  
</body>
</html>