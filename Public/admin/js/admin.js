//admin.js

    function doLogin(url,formId) {   
    	$.ajax({
            cache: true,
            type: "POST",
            url:url,
            data:$('#'+formId).serialize(),// 你的formid
            async: false,
            error: function(request) {
                alert("连接出错");
            },
            success: function(data) {
            //	var json = JSON.parse(data);
            	var json = data;
            	if(json.status){
            		 layer.msg(json.mes, {icon: 1},function(){
                       window.location = json.url;
					});

            	}else{
            		alert(json.mes);
            	}
            }
        });
        return false; // 必须返回false，否则表单会自己再做一次提交操作，并且页面跳转   
    } 