<!--/**
 * Created by PhpStorm.
 * User: 元丰
 * Date: 2016/10/25
 * Time: 18:14
 */-->
<!DOCTYPE html>
<html>
<head>
    <title>春天云幼儿园</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/study.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="../css/studymin.css" />
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../js/index.js"></script>
    <style>
        a{
            text-decoration: none;
        }
    </style>
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
    <img src="../V1.0/slices/2nd_select_function.png" class="bg-1">
</div>
<div class="view" style="width: 900px;height: 500px;position: absolute;margin-left: 250px;margin-top: 150px;">
   <div style="width: 850px;height: 200px;position: absolute;margin-left: 25px;margin-top: 20px;">
       <div style="width: 185px;height: 150px;position: absolute;margin-left: 10px;margin-top: 5px;border-radius: 5px;">
           <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t1.png" ></div>
           <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频1-<a href="#">我的名字</a></a></div>

       </div>
       <div style="width: 185px;height: 150px;position: absolute;margin-left: 220px;margin-top: 5px;">
           <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t2.png" ></div>
           <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频2-<a href="#">夜晚大冒险</a></a></div>

       </div>
       <div style="width: 185px;height: 150px;position: absolute;margin-left: 420px;margin-top: 5px;">
           <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t3.png" ></div>
           <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频3-<a href="#">一起远足</a></a></div>

       </div>
       <div style="width: 185px;height: 150px;position: absolute;margin-left: 620px;margin-top: 5px;">
           <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t4.png" ></div>
           <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频4-<a href="#">小猪在哪里</a></a></div>

       </div>
   </div>
    <div style="width: 850px;height: 200px;position: absolute;margin-left: 25px;margin-top: 220px;">
        <div style="width: 185px;height: 150px;position: absolute;margin-left: 10px;margin-top: 5px;">
            <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t5.png" ></div>
            <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频5-<a href="#">森林</a></a></div>

        </div>
        <div style="width: 185px;height: 150px;position: absolute;margin-left: 220px;margin-top: 5px;">
            <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t6.png" ></div>
            <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频6-<a href="#">我爱学习</a></a></div>

        </div>
        <div style="width: 185px;height: 150px;position: absolute;margin-left: 420px;margin-top: 5px;">
            <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t7.png" ></div>
            <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频7-<a href="#">东西不见了</a></a></div>

        </div>
        <div style="width: 185px;height: 150px;position: absolute;margin-left: 620px;margin-top: 5px;">
            <div style="width: 175px;height: 95px;margin-left: 5px;margin-top:5px;position: absolute;"><img src="../image/t8.png" ></div>
            <div style="position: absolute;width: 175px;height: 30px;margin-top: 110px;margin-left: 5px;"><a href="#">教学视频8-<a href="#">捉迷藏</a></a></div>

        </div>
    </div>
    <div style="width: 850px;height: 20px;position: absolute;margin-top: 420px;margin-left: 25px;">
        <button>上一页</button>
        <button style="float: right;">下一页</button>
    </div>

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
