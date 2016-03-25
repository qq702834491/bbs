$().ready(function(){
	$('#xieyi').click(function(){
		if(!$('#xieyi').attr('checked')){
			$('button').eq(0).attr('disabled',true);
		}else{
			$('button').eq(0).attr('disabled',false);
		}
	});
	jQuery.validator.addMethod("isUsername", function(value, element) { 
	    var username = /^[A-Za-z]+[A-Za-z0-9]*$/;
	    return this.optional(element) || (username.test(value));
	}, "格式：字母开头加数字组合1");
	jQuery.validator.addMethod("isPhone", function(value, element) { 
	    var phone = /^[1]\d{10}$/;
	    return this.optional(element) || (phone.test(value));
	}, "电话号码格式错误");
	$('form').eq(0).validate({
		rules:{
			username:{
				required:true,
				isUsername:true
			},
			password:{
				required:true,
				rangelength:[6,16]
			},
			conpwd:{
				equalTo:"#password"
			},
			email:{
				required:true,
				email:true
			},
			phone:{
				required:true,
				isPhone:true
			},
			vcode:"required"
		},
		messages:{
			username:{
				required:"用户名不能为空",
			},
			password:{
				required:"密码不能为空",
				rangelength:"密码长度为6-16位"
			},
			conpwd:"密码不一致",
			email:{
				required:"邮箱地址不能为空",
				email:"邮箱地址无效"
			},
			phone:{
				required:"电话号码不能为空"
			},
			vcode:"验证码不能为空",
		}
	});
});