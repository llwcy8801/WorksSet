define(['widget','jquery','jqueryUI'],function(widget,$,$UI){
	
	function Window(){
		this.cfg={
			width:500,
			height:300,
			title:"系统消息",
			content:"",
			hasCloseBtn:false,
			hasMask:true,
			isDraggable:true,
			dragHandle:null,
			skinClassName:null,
			text4AlertBtn:"确定",
			text4ConfirmBtn:"确定",
			text4CancelBtn:"取消",
			text4PromptBtn:"确定",
			isPromptInputPassword:false,
			defaultValue4PromptInput:"",
			maxlength4PromptInput:10,
			handler4AlertBtn:null,
			handler4CloseBtn:null,
			handler4ConfirmBtn:null,
			handler4CancelBtn:null,
			handler4PromptBtn:null,
		};
	}

	Window.prototype = $.extend({},new widget.Widget(),{

		//添加dom节点
		renderUI:function(){
			var footerContent="";
			switch(this.cfg.winType){
				case "alert":
				footerContent='<input type="button" value="'+this.cfg.text4AlertBtn+'" class="window_alertBtn">';
				break;

				case "confirm":
				footerContent='<input type="button" value="'+this.cfg.text4ConfirmBtn+'" class="window_confirmBtn">'+
							   '<input type="button" value="'+this.cfg.text4CancelBtn+'" class="window_cancelBtn">';
				break;

				case "prompt":
				this.cfg.content+='<p class="window_promptInputWrapper">'+
								      '<input type="'+(this.cfg.isPromptInputPassword?"password":"text")+'" value="'+this.cfg.defaultValue4PromptInput+'" maxlength="'+this.cfg.maxlength4PromptInput+'" class="window_promptInput">'+
								   '</p>';
				footerContent='<input type="button" value="'+this.cfg.text4PromptBtn+'" class="window_promptBtn">'+
							   '<input type="button" value="'+this.cfg.text4CancelBtn+'" class="window_cancelBtn">';
				break;		   
			};
			this.boundingBox=$(
				'<div class="window_boundingBox">'+
					'<div class="window_body">'+this.cfg.content+'</div>'+
				'</div>'
			);
			if(this.cfg.winType!="common"){
				this.boundingBox.prepend('<div class="window_header">'+this.cfg.title+'</div>');
				this.boundingBox.append('<div class="window_footer">'+footerContent+'</div>');
			};

			//模态
			if(this.cfg.hasMask){
				this._mask=$('<div class="window_mask"></div>');
				this._mask.appendTo("body");
			};
			//添加CloseBtn
			if(this.cfg.hasCloseBtn){
				this.boundingBox.append('<span class="window_closeBtn">X</span>');
			};
			this.boundingBox.appendTo(document.body);
			this._promptInput=this.boundingBox.find(".window_promptInput");
		},

		//监听事件
		bindUI:function(){
			var that=this;
			//绑定dom事件
			this.boundingBox.delegate(".window_alertBtn","click",function(){
				that.fire("alert");
				that.destroy();
			}).delegate(".window_closeBtn","click",function(){
				that.fire("close");
				that.destroy();
			}).delegate(".window_confirmBtn","click",function(){
				that.fire("confirm");
				that.destroy();
			}).delegate(".window_cancelBtn","click",function(){
				that.fire("cancel");
				that.destroy();
			}).delegate(".window_promptBtn","click",function(){
				that.fire("prompt",that._promptInput.val());
				that.destroy();
			});

			//绑定自定义事件
			if(this.cfg.handler4AlertBtn){
				this.on("alert",this.cfg.handler4AlertBtn);
			};
			if(this.cfg.handler4CloseBtn){
				this.on("close",this.cfg.handler4CloseBtn);
			};
			if(this.cfg.handler4ConfirmBtn){
				this.on("confirm",this.cfg.handler4ConfirmBtn);
			};
			if(this.cfg.handler4CancelBtn){
				this.on("cancel",this.cfg.handler4CancelBtn);
			};
			if(this.cfg.handler4PromptBtn){
				this.on("prompt",this.cfg.handler4PromptBtn);
			};
		},

		//初始化组件属性
		syncUI:function(){
			this.boundingBox.css({
				width:this.cfg.width+"px",
				height:this.cfg.height+"px",
				left:(this.cfg.x||(window.innerWidth-this.cfg.width)/2)+"px",
				top:(this.cfg.y||(window.innerHeight-this.cfg.height)/2)+"px",
			});
			//添加自定义皮肤
			if(this.cfg.skinClassName){
				this.boundingBox.addClass(this.cfg.skinClassName);
			};
			//添加拖动
			if(this.cfg.isDraggable){
				if(this.cfg.dragHandle){
					this.boundingBox.draggable({handle:this.cfg.dragHandle});
				}else{
					this.boundingBox.draggable();
				}
			};


		},

		//销毁前的处理函数
		destructor:function(){
			this._mask&&this._mask.remove();
		},

		//alert弹窗
		alert:function(cfg){
			$.extend(this.cfg,cfg,{winType:"alert"});
			this.render();
			return this;
		},

		//confirm弹窗
		confirm:function(cfg){
			$.extend(this.cfg,cfg,{winType:"confirm"});
			this.render();
			return this;
		},

		//prompt弹窗
		prompt:function(cfg){
			$.extend(this.cfg,cfg,{winType:"prompt"});
			this.render();
			this._promptInput.focus();
			return this;
		},

		//common弹窗
		common:function(cfg){
			$.extend(this.cfg,cfg,{winType:"common"});
			this.render();
			return this;
		},
	});

	return{
		Window:Window
	};
});