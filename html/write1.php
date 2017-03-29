

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--<link rel="stylesheet" media="screen and (max-width: 1400px)" href="../css/writemin.css" />-->
    <link rel="stylesheet" type="text/css" href="../css/keybord.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <script src="../js/key.js"></script>
    <script src="../js/angular.js"></script>
</head>
<body>
<div class="bdy" ng-app="myAdd" ng-controller="myctrl">
    <div class="serch"></div>
    <div class="search">
        <form id="search-form" action="search.php" method="post" onkeypress="key(e)">
            <input name="words" type="text" class="search-text" id="search_text" />
            <input type="submit" value="" class="search-button" >
        </form>
    </div>
    <div class="bg"><img src="../V1.0/slices/bg.png"></div>
    <div class="view">
        <div class="php-view">
		<div class="hanzi">
			<?php
				require_once ("./conn.php");
				//error_reporting(0);
				/*
				$sql = "select * from dapinyin where pinyin = '$_POST[pinyin]'";

				$res = mysql_query($sql);
				$row=mysql_fetch_row($res);
				echo $row[2];*/

				$sql = "select * from dapinyin order by rand() limit 1";
				
				$rs = mysql_query($sql);
				$row=mysql_fetch_array($rs);
				$rows=$row[2];
				echo $rows;
				//echo $rows;
				if(isset($_POST['pinyin'])){
					$sql = "select * from dapinyin where pinyin = '$_POST[pinyin]'";
					$res = mysql_query($sql);
					$row=mysql_fetch_row($res);
					$myrow = $row[2];
					//echo $rows;
					if($rows == $myrow){
						echo "回答正确，<a href='write1.php'>继续</a>";
					}else{
						echo "回答错误，<a href='write1.php'>再来一次</a>";
					}			
				}
			?>	
		</div></div>
        <div class="admin-view"><div class=""></div></div>
    </div>
    <div class="inp" >
        <form id="write" action="write1.php" method="post" class="inp" >
            <input type="text" ng-model="firstname" class="inwrite" name="pinyin" id="pinyin" onkeydown="key(event)" onkeyup="keyup(event)" onblur="checkname()">
            <!--<button class="btn btn-info" style="width: 60px;height: 30px;position: absolute;margin-left: 35px;" id="butn" onclick="change()" >开始吧</button>-->
        </form>
    </div>
    <script>
		function checkname(){
		var nm = document.getElementById("pinyin").value;
		var xhr = new XMLHttpRequest();
		var info = "name="+nm;
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4){
				alert(xhr.responseText);
			}
		}
		xhr.open("post","./dodo.php");
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		xhr.send(info);
		}
	
        var app = angular.module('myAdd', []);
        app.controller('myctrl', function($scope) {
            $scope.firstname= "";
        });
        function change() {
            var a = document.getElementById("butn");
            a.remove("butn");

        }
    </script>
    <div class="keybord">
        <div class="line1">
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k00"><div class="key-btn">`</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k1"><div class="key-btn">1</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k2"><div class="key-btn">2</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k3"><div class="key-btn">3</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k4"><div class="key-btn">4</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k5"><div class="key-btn">5</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k6"><div class="key-btn">6</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k7"><div class="key-btn">7</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k8"><div class="key-btn">8</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k9"><div class="key-btn">9</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k0"><div class="key-btn">0</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="jian"><div class="key-btn">-</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="dengyu"><div class="key-btn">=</div></div>
            <div style="width: 72px;height: 45px;border: 1px solid #BCC6C7;" id="back"><div class="key-btn">Back</div></div>
        </div>
        <div class="line2">
            <div style="width: 72px;height: 45px;border: 1px solid #BCC6C7;" id="tab"><div class="key-btn">tab</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="q"><div class="key-btn">Q</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="w"><div class="key-btn">W</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="e"><div class="key-btn">E</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="r"><div class="key-btn">R</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="t"><div class="key-btn">T</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="y"><div class="key-btn">Y</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="u"><div class="key-btn">U</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="i"><div class="key-btn">I</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="o"><div class="key-btn">O</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="p"><div class="key-btn">P</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="zuo"><div class="key-btn">[</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="you"><div class="key-btn">]</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="xie"><div class="key-btn">\</div></div>
        </div>
        <div class="line3">
            <div style="width: 72px;height: 45px;border: 1px solid #BCC6C7;" id="lock"><div class="key-btn">lock</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="a"><div class="key-btn">A</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="s"><div class="key-btn">S</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="d"><div class="key-btn">D</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="f"><div class="key-btn">F</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="g"><div class="key-btn">G</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="h"><div class="key-btn">H</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="j"><div class="key-btn">J</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="k"><div class="key-btn">K</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="l"><div class="key-btn">L</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="fenhao"><div class="key-btn">;</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="yinhao"><div class="key-btn">'</div></div>
            <div style="width: 94px;height: 45px;border: 1px solid #BCC6C7;" id="enter"><div class="key-btn">Enter</div></div>
        </div>
        <div class="line4">
            <div style="width: 107px;height: 45px;border: 1px solid #BCC6C7;" id="shift-l"><div class="key-btn">shift</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="z"><div class="key-btn">Z</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="x"><div class="key-btn">X</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="c"><div class="key-btn">C</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="v"><div class="key-btn">V</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="b"><div class="key-btn">B</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="n"><div class="key-btn">N</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="m"><div class="key-btn">M</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="dou"><div class="key-btn">,</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="dian"><div class="key-btn">.</div></div>
            <div style="width: 45px;height: 45px;border: 1px solid #BCC6C7;" id="wen"><div class="key-btn">?</div></div>
            <div style="width: 107px;height: 45px;border: 1px solid #BCC6C7;" id="shift-r"><div class="key-btn">shift</div></div>
        </div>
        <div class="line5">
            <div style="width: 48px;height: 45px;border: 1px solid #BCC6C7;" id="ctrl-l"><div class=" ctrl">ctrl</div></div>
            <div style="width: 48px;height: 45px;border: 1px solid #BCC6C7;" id="alt-l"><div class=" alt">Alt</div></div>
            <div style="width: 484px;height: 45px;border: 1px solid #BCC6C7;" id="space"><div class=" space">Space</div></div>
            <div style="width: 48px;height: 45px;border: 1px solid #BCC6C7;" id="alt-r"><div class=" alt">Alt</div></div>
            <div style="width: 48px;height: 45px;border: 1px solid #BCC6C7;" id="ctrl-r"><div class=" ctrl">ctrl</div></div>
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
</div>
</body>
</html>