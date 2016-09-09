function pow(str){
	var s='zhi=ok';
	ajax('php/powerSelect.php',function(e){
		str='ok';
	},function(){
		str='您没有权限访问';
	},s)
	return str;
	alert(1)
}
