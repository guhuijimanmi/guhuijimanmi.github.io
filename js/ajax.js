function ajax(url,fnSucc,fnFail,str){
	//创建AJAX对象
	if(window.XMLHttpRequest){
		var oAjax=new XMLHttpRequest();
	}else{
		var oAjax=new ActiveXObject("Microsoft.XMLHTTP");//IE
	}
	//连接服务器
	oAjax.open('post',url+'?t='+new Date().getTime(),true);
	//设置请求头信息，如果用post进行请求必须设置。
	oAjax.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
	//接受返回
	if(oAjax.onload==null){
			oAjax.onload=function(){
				fnSucc(oAjax.responseText);
			}
			oAjax.onerror=function(){
				fnFail();
			}
	}else{
		oAjax.onreadystatechange=function(){
			if(oAjax.readyState===4){
				if(oAjax.status===200){
					fnSucc(oAjax.responseText);
				}else{
					if(fnFail){
						fnFail();
					}
				}
			}
		}
	}
	//发送请求
	oAjax.send(str);
}
