/*
 * @brief jQuery css clip animation support
 * @author hon2a
 * @version 1.0.0
 * 
 * inspired by Jim Palmer's plugin jquery.animate.clip
 * Released under the MIT license.
 */
(function(jQuery){
	jQuery.fx.step.clip = function (fx) {
		if ($(fx.elem).is(':visible')) {
			if (fx.start == 0) {
				var emCoef = ( parseInt($(fx.elem).css('fontSize')) * 1.333 ),
					horizontalPercentCoef = $(fx.elem).width() / 100,
					verticalPercentCoef = $(fx.elem).height() / 100,
					regExp = {
						parseSize: /^(\d{1,}(\.\d+)?)(px|em|%)$/,
						stripRect: /rect\(([^)]*)\)/,
						splitRect: /[,\s]\s*/,
						matchAuto: /^auto$/
					},
					autoSizes = ['0px', '101%', '105%', '0px'];
				var parseClipRect = function (rectStr) {
					var rect = ((typeof rectStr != 'string') || (rectStr == '') || (rectStr == 'auto'))
						? ['auto', 'auto', 'auto', 'auto']
						: rectStr.replace(regExp.stripRect, '$1').split(regExp.splitRect);
					$.each(rect, function (i, size) {
						var matches = regExp.parseSize.exec(size.replace(regExp.matchAuto, autoSizes[i]));
						rect[i] = parseFloat(matches[1]);
						switch (matches[3]) {
							case 'em':
								rect[i] *= emCoef;
								break;
							case '%':
								rect[i] *= ((i % 2) ? horizontalPercentCoef : verticalPercentCoef);
								break;
						}
					});
					return rect;
				};

				fx.start = parseClipRect(fx.elem.style.clip);
				fx.end = parseClipRect(fx.end);
			}

			var currentRect = [];
			for (var i = 0; i < 4; ++i) {
				currentRect.push((fx.pos * (fx.end[i] - fx.start[i])) + fx.start[i]);
			}
			fx.elem.style.clip = 'rect(' + currentRect.join('px ') + 'px)';
		} else {
			fx.elem.style.clip = 'auto';
		}
	}
})(jQuery);