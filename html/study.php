<!DOCTYPE html>
<html>
<head>
	<title>春天云幼儿园</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/study.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="../css/studymin.css" />
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
    	<div>
			<a href="../wuyong.php"><img src="../V1.0/slices/2nd_select_function.png" class="bg-1"></a>
            <a href="../index1.php"><img src="../V1.0/slices/level.png" class="bg-2"></a>
            <a href="teach.php"><img src="../V1.0/slices/teach.png" class="bg-3"></a>
            <a href="fenji.php"><img src="../V1.0/slices/yj.png" class="bg-4"></a>
            <a href="words.php"><img src="../V1.0/slices/word.png" class="bg-5"></a>
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