(function($){
	var methods = {
		init:function(options){
			var settings = $.extend(true,{},{
				autoplay:true,
				speed:400,
				interval:5000
			},options);
			return this.each(function(){
				var $this = $(this).addClass('hyperSlide').data({
					hyperSlide:settings,
					playing:settings.autoplay
				});
				$this.children('.slide:first-child').show();
				$this.css("height",$this.height());
				$this.timer=false;
				if (settings.autoplay) methods.play.apply($this);
			});
		},
		play:function(){
			return this.each(function(){
				var $this = $(this).data('playing',true);
				var settings = $this.data('hyperSlide');
				$this.timer = setTimeout(function(){methods.cycle.apply($this)},settings.interval);
			});
		},
		stop:function(){
			return this.each(function(){
				$(this).data('playing',false);
				if ($(this).timer!==false) clearTimeout($(this).timer);
				$(this).timer = false;
			});
		},
		cycle:function(){
			var $this = $(this);
			var settings = $this.data('hyperSlide');
			var effects = ['blind','clip','drop','fold','puff','slide'];
			if ($this.timer!==false) clearTimeout($this.timer);
			if (!$('.slide:visible').is("*")) $('.slide:first-child').show();
			else {
				var prev = $('.slide:visible').hide(effects[Math.floor(Math.random()*effects.length)],{direction:'left'},settings.speed,function(){
					if (!prev.is(':last-child')) prev.next().show(effects[Math.floor(Math.random()*effects.length)],{direction:'right'},settings.speed);
					else $('.slide:first-child').show(effects[Math.floor(Math.random()*effects.length)],{direction:'right'},settings.speed);
				});
			}
			if ($this.data('playing')) $this.timer = setTimeout(function(){methods.cycle.apply($this)},settings.interval);
		}
	};
	$.fn.hyperionSlide=function(method){
		if (methods[method]) return methods[method].apply(this,Array.prototype.slice.call(arguments,1));
		else if (typeof method == 'object' || !method) return methods.init.apply(this,arguments);
		else $.error('Method '+method+' does not exist on jQuery.hyperSlide');
	};
})(jQuery);