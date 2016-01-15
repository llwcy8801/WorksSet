require.config({
	paths:{
		jquery:'jquery-1.11.3.min',
		jqueryUI:'http://code.jquery.com/ui/1.10.4/jquery-ui',
	}
});
require(['jquery','window'],function($,w){
	$('#a').click(function(){
		var win = new w.Window().alert({
			title:"提示",
			content:"WelCome!",
			width:300,
			height:150,
			y:50,
			hasCloseBtn:true,
			text4AlertBtn:"OK",
			dragHandle:".window_header",
			//skinClassName:"window_skin_a",
			handler4AlertBtn:function(){
				alert("you click the alert Button");
			},
			handler4CloseBtn:function(){
				alert("you click the close Button");
			},
		}).on("alert",function(){
			alert("the second alert handler");
		}).on("close",function(){
			alert("the second close handler");
		});

		// win.on("alert",function(){alert("you click the alert Button");});
		// win.on("close",function(){alert("you click the close Button");});
		win.on("alert",function(){alert("the third alert handler");});
	});

	$('#b').click(function(){
		new w.Window().confirm({
			title:"系统消息",
			content:"您确定要删除这个文件吗？",
			width:300,
			height:150,
			y:50,
			text4ConfirmBtn:"是",
			text4CancelBtn:"否",
			dragHandle:".window_header",
		}).on("confirm",function(){
			alert("确定");
		}).on("cancel",function(){
			alert("取消");
		});
	});

	$('#c').click(function(){
		new w.Window().prompt({
			title:"请输入您的名字",
			content:"我们将会为您保密输入的信息。",
			width:300,
			height:150,
			y:50,
			text4PromptBtn:"输入",
			text4CancelBtn:"取消",
			defaultValue4PromptInput:"张三",
			dragHandle:".window_header",
			handler4PromptBtn:function(inputValue){
				alert("您输入的内容是："+inputValue);
			},
			handlerCancelBtn:function(){
				alert("取消");
			},
		});
	});

	$('#d').click(function(){
		new w.Window().common({
			content:"我是一个通用弹窗",
			width:300,
			height:150,
			y:50,
			hasCloseBtn:true,
		});
	});
});