// Updates form inputs when a change is triggered
// Default events include sorting, cloneing, deleteing

(function($) {

	$.fn.NSM_UpdateInputsOnChange = function(options) {
		var opts = $.extend({}, $.fn.NSM_UpdateInputsOnChange.defaults, options);
		opts.inputRegx = new RegExp(opts.inputNamePrefix+"\\[\\d*?\\]");
		return this.each(function() {
			var $self = $(this);
			var dom = {$container: $self};
			var events = $.merge(opts.defaultUpdateEvents, opts.customUpdateEvents);
			for (var i = events.length - 1; i >= 0; i--){
				$self.bind(events[i], // bind our new events
							{opts:opts, dom:dom},
							$.NSM_UpdateInputsOnChange._update
					).trigger('update.NSM_UpdateInputsOnChange');
			};
		});
	};

	$.NSM_UpdateInputsOnChange = {
		_update: function(e){
			// add some tirggers
			e.data.dom.$container.trigger('updateStart.NSM_UpdateInputsOnChange');

			$targets = ($.isFunction(e.data.opts.targetSelector))
									? e.data.opts.targetSelector.call(e.data.dom.$container)
									: $(e.data.opts.targetSelector, e.data.dom.$container);
			if(!$targets) return;

			$targets.each(function(index) {
				var $self = $(this);

				// update the input name
				$self.find("[name^="+e.data.opts.inputNamePrefix+"]").each(function() {
					this.name = this.name.replace(e.data.opts.inputRegx, e.data.opts.inputNamePrefix+"["+(index)+"]");
				});

				// update the input order
				$self.find("[name$=\["+e.data.opts.inputOrderKey+"\]]").each(function() {
					this.value = index;
				});
			});
			e.data.dom.$container.trigger('updateEnd.NSM_UpdateInputsOnChange');
		}
	}

	$.fn.NSM_UpdateInputsOnChange.defaults = {
		defaultUpdateEvents: [
			'drop.tablednd', // tablednd
			'sortEnd', // table sorter
			'addCloneEnd.NSM_Cloneable',
			'deleteCloneEnd.NSM_Cloneable',
			'update.NSM_UpdateInputsOnChange'
		],
		customUpdateEvents: [],
		targetSelector: 'tbody tr',
		inputNamePrefix: "",
		inputOrderKey: "s_order",
		inputDeleteKey: "delete"
	};

})(jQuery);