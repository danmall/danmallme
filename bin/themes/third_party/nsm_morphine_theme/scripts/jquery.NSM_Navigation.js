$(document).ready(function() {
	$('.menu.tabs').each(function(index) {
		var target_selectors = [];
		var $triggers = $('a', $(this)).each(function(index) {
			target_selectors.push(this.hash);
		})
		.click(function() {
			$triggers.removeClass("active");
			if((/show_all$/).test(this.hash))
			{
				$targets.fadeIn();
			}
			else
			{
				$(this).addClass("active");
				$targets.filter(this.hash).fadeIn();
				$targets.not(this.hash).hide();
			}
			return false;
		});
		var $targets = $(target_selectors.join(", ")).hide();
		$triggers.eq(0).click();
	});
});

