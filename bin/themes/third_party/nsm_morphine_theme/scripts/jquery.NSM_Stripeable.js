(function($) {

	$.fn.NSM_Stripeable = function(options) {
		var opts = $.extend({}, $.fn.NSM_Stripeable.defaults, options);
		return this.each(function() {
			var $self = $(this);
			var dom = {$container: $self};
			var events = $.merge(opts.defaultStripeEvents, opts.customStripeEvents);
			for (var i = events.length - 1; i >= 0; i--){
				$self.bind(events[i],
							{opts:opts, dom:dom},
							$.NSM_Stripeable._update
					).trigger('update.NSM_Stripeable');
			};
		});
	};

	$.NSM_Stripeable = {
		_update: function(e){
			$targets = ($.isFunction(e.data.opts.targetSelector))
									? e.data.opts.targetSelector.call(e.data.dom.$container)
									: $(e.data.opts.targetSelector, e.data.dom.$container);
			if(!$targets) return;
			l = e.data.opts.classes.length;
			$targets.each(function(index) {
				newClass = e.data.opts.classes[index%l];
				$(this).removeClass(e.data.opts.classes.join(" ")).addClass(newClass);
			});
		}
	}

	$.fn.NSM_Stripeable.defaults = {
		defaultStripeEvents: [
			'drop.tablednd', // tablednd
			'sortEnd', // table sorter
			'addCloneEnd.NSM_Cloneable',
			'deleteCloneEnd.NSM_Cloneable',
			'update.NSM_UpdateInputsOnChange',
			'update.NSM_Stripeable'
		],
		customStripeEvents: [],
		targetSelector: 'tbody tr:visible',
		classes: ['even', 'odd']
	};

})(jQuery);