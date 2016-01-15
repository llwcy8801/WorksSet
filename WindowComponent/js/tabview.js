define(['widget','jquery','jqueryUI'],function(widget,$,$UI){

	function TabView(){
		...
	};

	TabView.prototype=$.extend({},new widget.Widget,{
		someMethod:function(cfg){
			...
		},
		...
	});
	...
});