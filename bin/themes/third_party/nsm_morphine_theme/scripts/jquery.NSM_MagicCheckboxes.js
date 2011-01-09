(function($) {

	// plugin definition
	$.fn.NSM_MagicCheckboxes = function(options) {
		var opts = $.extend({}, $.fn.NSM_MagicCheckboxes.defaults, options);
		return this.each(function() {
			var $self = $(this);
			var dom = {
					$container: $self,
					$triggers: ($.isFunction(opts.triggerSelector)) ? opts.triggerSelector.call($self) : $(opts.triggerSelector, $self),
				};
			dom.$triggers
				.unbind(opts.event + ".NSM_MagicCheckboxes")
				.bind(opts.event + ".NSM_MagicCheckboxes", {opts:opts, dom:dom}, $.NSM_MagicCheckboxes._check_all);

			$self
				.unbind(opts.event + ".NSM_MagicCheckboxes")
				.bind(opts.event + ".NSM_MagicCheckboxes", {opts:opts, dom:dom}, $.NSM_MagicCheckboxes._check_row);
		});
	};

	$.NSM_MagicCheckboxes = {
		_check_all: function(e){

			var $self = $(this);

			// grab all the targets
			var $targets = ($.isFunction(e.data.opts.targetSelector))
							? e.data.opts.targetSelector.call(e.data.dom.$container)
							: $(e.data.opts.targetSelector, e.data.dom.$container);

			// grab all the target parents
			var $targetParents = ($.isFunction(e.data.opts.targetParentSelector))
								? e.data.opts.targetParentSelector.call($targets)
								: $targets.parentsUntil(e.data.opts.targetParentSelector);

			if($self.is(':checked'))
			{
				$targetParents.addClass('selected');
				$targets.attr('checked', 'checked');
			} else {
				$targetParents.removeClass('selected');
				$targets.removeAttr('checked');
			}
		},
		_check_row: function(e){
			var $eTarget = $(e.target);
			if(! $eTarget.is(e.data.opts.targetSelector)) return;
			var $parent = $eTarget.parentsUntil(e.data.opts.targetParentSelector);
			if($(this).is(':checked'))
			{
				$parent.addClass('selected');
				$(this).attr('checked', 'checked');
			} else {
				$parent.removeClass('selected');
				e.data.dom.$triggers.removeAttr('checked');
				$(this).removeAttr('checked');
			}
		}
	};

	$.fn.NSM_MagicCheckboxes.defaults = {
		event: 'change',
		triggerSelector: ':checkbox.NSM_MagicCheckboxesTrigger',
		targetSelector: ':checkbox[name^=toggle]',
		targetParentSelector: 'tr',
	};

})(jQuery);