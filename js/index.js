/*  蓝猫和logo动画 */
window.onload=function(){
	setTimeout(function(){
		$(".logo").slideDown("slow",function(){
			$(".cat").fadeIn("fast",function(){
				$(".cat").animate({
					top:"-=50px"
				},"fast",function(){
					$(".cat").animate({
						top:"+=50px"
					},"fast",function(){
						$(".cat").animate({
							top:"-=20px"
						},"fast",function(){
							$(".cat").animate({
								top:"+=20px"
							},"fast",function(){
								$(".cat").fadeOut(1000,function(){
									$(".logo").slideUp("fast");
									$(".function_left").fadeIn(2000,function(){setInterval("lmove()",1000);});
									$(".function_right").fadeIn(2000,function(){setInterval("rmove()",1000);});
								});
							});
						});
					});
				});
			});
		});
	});
}

/* 气球动画 */
function lmove(){
	$(".function_left").animate({
		bottom:"+=100px"
	},5000);
	$(".function_left").animate({
		bottom:"-=100px"
	},5000);
}

function rmove(){
	$(".function_right").animate({
		top:"+=100px"
	},4000);
	$(".function_right").animate({
		top:"-=100px"
	},4000);
}

