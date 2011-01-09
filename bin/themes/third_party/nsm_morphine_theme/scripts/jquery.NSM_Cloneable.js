(function($) {

	$.fn.NSM_Cloneable = function(options) {
		var opts = $.extend({}, $.fn.NSM_Cloneable.defaults, options);
		if(!opts.cloneTemplate)
		{
			console.log("No clone template provided in parameters");
			return this;
		}

		return this.each(function() {
			var $self = $(this);
			var $addTrigger = ($.isFunction(opts.addTrigger)) ? opts.addTrigger.call($self) : $(opts.addTrigger, $self);
			var $appendTarget = (!opts.appendTarget) ? $self : ($.isFunction(opts.appendTarget)) ? opts.appendTarget.call($self) : $(opts.appendTarget, $self);
			var dom = {
					$container: $self,
					$addTrigger: $addTrigger,
					$appendTarget: $appendTarget
				};

			$self.bind(opts.deleteEvent, {opts:opts, dom:dom}, $.NSM_Cloneable._deleteClone);
			$addTrigger.bind(opts.addEvent, {opts:opts, dom:dom}, $.NSM_Cloneable._addClone);
		});
	}

	$.NSM_Cloneable = {
		_addClone: function(e){
			var $clone = $(e.data.opts.cloneTemplate).clone();
			e.data.dom.$container.trigger("addCloneStart.NSM_Cloneable", [$clone]);
			e.data.dom.$appendTarget.append($clone);
			e.data.dom.$container.trigger("addCloneEnd.NSM_Cloneable", [$clone]);
			return false;
		},
		_deleteClone: function(e){
			$eTarget = $(e.target);
			e.data.dom.$container.trigger("deleteCloneStart.NSM_Cloneable");
			if(! $eTarget.is(e.data.opts.deleteTrigger) || !confirm(e.data.opts.deleteConfirmMsg)) return;
			$target = ($.isFunction(e.data.opts.deleteTriggerCloneSelector)) ? e.data.opts.deleteTriggerCloneSelector.call($eTarget) : $($eTarget.parents(e.data.opts.deleteTriggerCloneSelector));

			if(e.data.opts.deleteMethod == "remove")
				$target.remove();
			else
				$target.hide().end().find("[name$=\["+e.data.opts.inputDeleteKey+"\]]").each(function(index) { this.value = 1; });

			e.data.dom.$container.trigger("deleteCloneEnd.NSM_Cloneable");
			return false;
		}
	}

	$.fn.NSM_Cloneable.defaults = {
		cloneTemplate: false,
		appendTarget: 'tbody',
		addEvent: 'click',
		addTrigger: function(){return $(this).siblings(".add:first")},
		deleteEvent: 'click',
		deleteTrigger: '.delete',
		deleteMethod: 'remove',
		deleteTriggerCloneSelector: "tr:eq(0)",
		deleteConfirmMsg: "Are you sure you want to delete this row?"
	};

})(jQuery);