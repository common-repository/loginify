(function($) {
	var loginifyPreviewSlug = 'loginify-by-abdul-roqib';

	$(document).ready(function () {
		
		wp.customize.panel('loginify_panel', function(panel) {
			panel.expanded.bind(function(isExpanded) {
				if (isExpanded && wp.customize.previewer.previewUrl.get().indexOf(loginifyPreviewSlug) == -1) {
					wp.customize.previewer.previewUrl.set(wp.customize.settings.url.home + loginifyPreviewSlug );
				}
			});
		});

		wp.customize('loginify[templates]', function (value) {
			value.bind(function (newval) {
				if (newval === 'left-form' || newval === 'right-form') {
					wp.customize('loginify[form_border]').set(0);
					wp.customize.control('loginify[form_height]').deactivate();
					wp.customize.control('loginify[form_border_radius]').deactivate();
				} else {
					wp.customize('loginify[form_border]').set(1);
					wp.customize.control('loginify[form_height]').activate();
					wp.customize.control('loginify[form_border_radius]').activate();
				}
			});
		});

		wp.customize('loginify[background_image]', function (value) {
			value.bind(function (newval) {
				if (newval == "") {
					wp.customize.control('loginify[background_repeat]').deactivate();
					wp.customize.control('loginify[background_position]').deactivate();
					wp.customize.control('loginify[background_size]').deactivate();
				} else {
					wp.customize.control('loginify[background_repeat]').activate();
					wp.customize.control('loginify[background_position]').activate();
					wp.customize.control('loginify[background_size]').activate();
				}
			});
		});

	});
})(jQuery);