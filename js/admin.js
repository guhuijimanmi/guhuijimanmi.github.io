	var log_sub=document.getElementById('log_sub'); 
	var code;
	var admin_ok=0;
	log_sub.addEventListener('click',function(e){//登录实现
			var s='user='+log_form.username.value+'&psw='+log_form.password.value;
			ajax('php/adminlog.php',function(str){
				if(str=='ok'){
					var sr='zhi='+str;
					ajax('php/power.php',function(e){
						document.cookie="admin_ok=1"
						window.location='index.html';
						
					},function(){
						alert('获取失败');
					},sr)
				}else{
					alert(str);
				}
			},function(){
				alert('登录失败');
			},s)
			e.preventDefault();//默认行为阻止
			e.cancelBubble=true;//冒泡
		},false)
		createCode();
        function createCode() {
            code = "";
            var codeLength = 6; //验证码的长度
            var checkCode = document.getElementById("checkCode");
            var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
            for (var i = 0; i < codeLength; i++) 
            {
                var charNum = Math.floor(Math.random() * 52);
                code += codeChars[charNum];
            }
            if (checkCode) 
            {
                checkCode.className = "code";
                checkCode.innerHTML = code;
            }
        }
        function validateCode() 
        {
            var inputCode = document.getElementById("inputCode").value
            if (inputCode.length <= 0) 
            {
                alert("请输入验证码！");
            }
            else if (inputCode.toUpperCase() != code.toUpperCase()) 
            {
                alert("验证码输入有误！");
                createCode();
            }  
        }    