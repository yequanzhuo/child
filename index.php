<!DOCTYPE html>
<html>
<head>
	<title>春天云幼儿园</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="css/minpixels.css" />
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
    <div class="lg">
        <img src="V1.0/slices/logo.png" class="logo">
        <img src="V1.0/slices/cat.png" class="cat">
    </div>
    <div class="function_left">
        <img src="V1.0/slices/function_left.png">
    </div>
    <div class="function_right">
        <img src="V1.0/slices/function_right.png">
    </div>
    <form id="search-form" action="html/search.php" method="post">
        <input name="words" type="text" class="search-text" id="search_text" />
        <input type="submit" value="" class="search-button"/>
    </form>

    	<div class="bg_in">
    		<img src="V1.0/slices/bg_in.png">
	    </div>
	<div class="nav">
	    <ul>
	    	<a href="index.php"><li><img src="V1.0/slices/home.png" class="wdh"></li></a>
	    	<a href="html/search.php"><li><img src="V1.0/slices/login.png" class="wdh"></li></a>
	    	<a href="html/write2.php"><li><img src="V1.0/slices/mail.png" class="wbh"></li></a>
	    	<a href="html/study.php"><li><img src="V1.0/slices/setting.png" class="wdh"></li></a>
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