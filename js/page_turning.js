function page_turnning(lis,str){
	var timer;
	var _rotate=document.getElementsByClassName('img_rotate')[0];
	
	for(var i=0;i<lis.length;i++){
		lis[i].index=i;
		lis[i].onclick=function(){
			var num=0;
			  var INDEX=this.index;
				_rotate.src=str;//添加图片
				timer=setInterval(function(){
					num=num-10;
					_rotate.style.cssText="transform: rotateY("+num+"deg)";
					if(num<-170){
						clearInterval(timer);
						_rotate.src="";
						switch(INDEX){//跳转
							case 0:
										window.location="about.html";
										break;
							case 1:
										window.location="dairy.html";
										break;
							case 2:
										window.location="photo.html";
										break;
							case 3:
										window.location="message.html";
										break;
							case 4:
										window.location="games.html";
										break;
						}
					}
				},30)
			
		}
	}
	
	
	
	
	
}
	
	
	