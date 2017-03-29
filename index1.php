<!DOCTYPE html>
<html>
<head>
	<title>春天云幼儿园</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="css/minpixels.css" />
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
    <style type="text/css">
        .text-left,.text-right{position: absolute;background-color: rgb(240,230,220);width: 300px;border: 2px solid rgb(165,176,180);border-radius: 10px;color: rgb(142,129,119);text-align: center;}
        .text-left{left: 20%;top: 20%;font-size: 16px;height: 400px;}
        .text-left{line-height: 20px;}
        .text-right{right: 20%;top: 20%;display: block;outline: none;color: rgb(142,129,119);font-size: 16px;padding-top: 100px;height: 300px;}
        .test{position: absolute;bottom: 200px;right: 280px;padding: 10px;background-color: rgb(229,206,189);border-radius: 5px;color: rgb(142,129,119);}
    </style>
    <script type="text/javascript">
        function check(){
            var txt1 = document.getElementById("txt1");
            var txt2 = document.getElementById("txt2");
            if(txt1.innerHTML == txt2.value){
                alert("答对了，太棒了！");
                txt1.innerHTML = "七上八下，七零八落";
                txt2.value = "";
            }else{
                txt2.style.color="red";
                alert("好可惜，再接再厉！")
            }
        }
    </script>
</head>
<body>
    <form id="search-form">
        <input type="text" class="search-text" id="search_text" />
        <input type="submit" value="" class="search-button"/>
    </form>
    	<div class="bg_in">
    		<img src="V1.0/slices/bg_in.png">
	    </div>
        <div class="text-left">
            <p style="margin-top:100px;" id="txt1">好好学习，天天向上</p>
        
        </div>
        <textarea class="text-right" placeholder="请输入左边文本框中的成语..." id="txt2"></textarea>
        <div class="test" onclick="check()">检测</div>
	<div class="nav">
	    <ul>
	    	<a href="index.html"><li><img src="V1.0/slices/home.png" class="wdh"></li></a>
	    	<a href="html/search.html"><li><img src="V1.0/slices/login.png" class="wdh"></li></a>
	    	<a href="html/write.html"><li><img src="V1.0/slices/mail.png" class="wbh"></li></a>
	    	<a href="html/study.html"><li><img src="V1.0/slices/setting.png" class="wdh"></li></a>
	    </ul>
	</div>  
      
</body>
</html>