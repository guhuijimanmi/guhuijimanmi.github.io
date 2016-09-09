function shake(obj,dir,endfn){
			var arr=[];
			var timer=null;
			var n=-1;
			if(!obj.num){
				obj.num=parseFloat(getStyle(obj,dir));
			}
			for(var i=20;i>0;i-=2){
				arr.push(i,-i);
			}
			arr.push(0);
			clearInterval(timer);
			timer=setInterval(function(){
				n++;
				obj.style[dir]=arr[n]+obj.num+'px';
				if(n>arr.length){
					clearInterval(timer);
					endfn&&endfn();
				}
			},30)
			
		}
		function getStyle(obj,attr){
			return obj.currentStyle?obj.currentStyle[attr]:getComputedStyle(obj)[attr];
		}