(function($) {
	$(document).ready(function () {

		// templates section
		wp.customize('loginify[templates]', function (value) {
			value.bind(function (newval) {
				if (newval === 'left-form' || newval === 'right-form') {
					wp.customize('loginify[form_border]').set(0);

					$('body.login').css({ display: 'flex' });
					$('body.login #login').css({ 'background-color': wp.customize('loginify[form_bg_color]').get(), 'display': 'flex', 'flex-direction': 'column', 'padding': 'unset', 'height': '100%', 'justify-content': 'center' });
					
					if (newval === 'left-form') {
						$('body.login #login').css({ 'margin-left': 0, 'margin-right': 'auto' });
					}
					if (newval === 'right-form') {
						$('body.login #login').css({ 'margin-left': 'auto', 'margin-right': 0 });
					}
				} else {
					wp.customize('loginify[form_border]').set(1);

					$('body.login').css({ display: 'block' });
					$('body.login #login').css({ 'margin-left': 'auto', 'margin-right': 'auto', 'background-color': 'unset', 'display': 'block', 'padding': '5% 0 0', 'height': 'unset' });
					$("#login").css({ 'border': '', 'border-right': '', 'border-left': '', 'border-right-width': '', 'border-left-width': '' });
					$(".login form").css({ 'border-width': '1px' });
				}
			});
		});

		// logo section
		wp.customize('loginify[logo]', function (value) {
			value.bind(function (newval) {
				$('.login h1 a').css({ 'background-image': 'url('+newval+')' });
			});
		});

		wp.customize('loginify[logo_size]', function (value) {
			value.bind(function (newval) {
				$('.login h1 a').css({ 'background-size': 'auto ' + newval + 'px', height: newval + 'px' });
			});
		});

		wp.customize('loginify[logo_link]', function (value) {
			value.bind(function (newval) {
				$('.login h1 a').attr('href', newval);
			});
		});

		wp.customize('loginify[logo_title]', function (value) {
			value.bind(function (newval) {
				$('.login h1 a').text(newval);
			});
		});

		// background section
		wp.customize('loginify[background_color]', function (value) {
			value.bind(function (newval) {
				$("body.login").css({ background: newval });
			});
		});

		wp.customize('loginify[background_image]', function (value) {
			value.bind(function (newval) {
				$("body.login").css({ 'background-image': 'url('+newval+')' });

				if (!$("body.login").css('background-repeat')) {
					$("body.login").css({ 'background-repeat': 'no-repeat', 'background-position': 'center center', 'background-size': 'cover' });
				}
			});
		});

		wp.customize('loginify[background_repeat]', function (value) {
			value.bind(function (newval) {
				$("body.login").css({ 'background-repeat': newval });
			});
		});

		wp.customize('loginify[background_position]', function (value) {
			value.bind(function (newval) {
				$("body.login").css({ 'background-position': newval });
			});
		});

		wp.customize('loginify[background_size]', function (value) {
			value.bind(function (newval) {
				$("body.login").css({ 'background-size': newval });
			});
		});

		// labels section
		wp.customize('loginify[labels_font_size]', function (value) {
			value.bind(function (newval) {
				$("#loginform label").css({ 'font-size': newval+'px' });
			});
		});

		wp.customize('loginify[labels_margin]', function (value) {
			value.bind(function (newval) {
				$("#loginform label").css({ 'margin-bottom': newval+'px' });
			});
		});

		wp.customize('loginify[labels_color]', function (value) {
			value.bind(function (newval) {
				$("#loginform label").css({ 'color': newval });
			});
		});

		// fields section
		wp.customize('loginify[fields_font_size]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'font-size': newval + 'px' });
			});
		});

		wp.customize('loginify[fields_text_color]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ color: newval });
			});
		});

		wp.customize('loginify[fields_bg_color]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'background-color': newval });
				$("input[type=checkbox]").css({ 'background-color': newval });
			});
		});

		wp.customize('loginify[fields_height]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'height': newval + 'px' });
			});
		});

		wp.customize('loginify[fields_padding]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'padding': newval + 'px' });
			});
		});

		wp.customize('loginify[fields_margin]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'margin-bottom': newval + 'px' });
			});
		});

		wp.customize('loginify[fields_border_color]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'border-color': newval });
				$("input[type=checkbox]").css({ 'border-color': newval });
			});
		});

		wp.customize('loginify[fields_border_width]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'border-width': newval + 'px' });
			});
		});

		wp.customize('loginify[fields_border_radius]', function (value) {
			value.bind(function (newval) {
				$(".input").css({ 'border-radius': newval + 'px' });
			});
		});

		// button section
		wp.customize('loginify[button_width]', function (value) {
			value.bind(function (newval) {
				$(".button").css({ width: newval + 'px' });
			});
		});

		wp.customize('loginify[button_height]', function (value) {
			value.bind(function (newval) {
				$(".button").css({ height: newval + 'px' });
			});
		});

		wp.customize('loginify[button_border_radius]', function (value) {
			value.bind(function (newval) {
				$(".button").css({ 'border-radius': newval + 'px' });
			});
		});

		wp.customize('loginify[button_text_color]', function (value) {
			value.bind(function (newval) {
				$(".button").css({ color: newval });
			});
		});

		wp.customize('loginify[button_text_color_hover]', function (value) {
			value.bind(function (newval) {
				$(".button").hover(function() {
					$(this).css("color", newval)
				}).mouseout(function(){
					$(this).css("color", wp.customize('loginify[button_text_color]').get());
				});
			});
		});

		wp.customize('loginify[button_bg_color]', function (value) {
			value.bind(function (newval) {
				$(".button").css({ 'background-color': newval, 'border-color': newval });
			});
		});

		wp.customize('loginify[button_bg_color_hover]', function (value) {
			value.bind(function (newval) {
				$(".button").hover(function() {
					$(this).css({ 'background-color': newval, 'border-color': newval })
				}).mouseout(function(){
					$(this).css({ 
						'background-color': wp.customize('loginify[button_bg_color]').get(), 
						'border-color': wp.customize('loginify[button_bg_color]').get() 
					});
				});
			});
		});

		// form section
		wp.customize('loginify[form_bg_color]', function (value) {
			value.bind(function (newval) {
				if (wp.customize('loginify[templates]').get() !== 'default') {
					$("#login").css({ 'background-color': newval });
					$(".login form").css({ 'background-color': newval });
				} else {
					$(".login form").css({ 'background-color': newval });
					$("#login").css({ 'background-color': '' });
				}
			});
		});

		wp.customize('loginify[form_width]', function (value) {
			value.bind(function (newval) {
				$("#login").css({ 'width': newval + 'px' });
			});
		});

		wp.customize('loginify[form_height]', function (value) {
			value.bind(function (newval) {
				$(".login form").css({ 'height': newval + 'px' });
			});
		});

		wp.customize('loginify[form_margin]', function (value) {
			value.bind(function (newval) {
				if (wp.customize('loginify[templates]').get() !== 'default') {
					$(".login form").css({ 'margin-top': newval + 'px', 'margin-bottom': newval + 'px' });
				} else {
					$(".login form").css({ 'margin-top': newval + 'px' });
				}
			});
		});

		wp.customize('loginify[form_padding]', function (value) {
			value.bind(function (newval) {
				if (wp.customize('loginify[templates]').get() !== 'default') {
					$(".login form").css({ 'padding': '24px ' + newval + 'px' });
				} else {
					$(".login form").css({ 'padding': newval + 'px' });
				}
			});
		});

		wp.customize('loginify[form_border]', function (value) {
			value.bind(function (newval) {
				if (wp.customize('loginify[templates]').get() === 'left-form') {
					$("#login").css({ 'border-right-width': newval + 'px', 'border-right-style': 'solid' });
					$(".login form").css({ 'border-width': 0 });
				} else if (wp.customize('loginify[templates]').get() === 'right-form') {
					$("#login").css({ 'border-left-width': newval + 'px', 'border-left-style': 'solid' });
					$(".login form").css({ 'border-width': 0 });
				} else {
					$(".login form").css({ 'border-width': newval + 'px' });
					$("#login").css({ 'border-right-width': '', 'border-left-width': '' });
				}
			});
		});

		wp.customize('loginify[form_border_color]', function (value) {
			value.bind(function (newval) {
				if (wp.customize('loginify[templates]').get() === 'left-form') {
					$("#login").css({ 'border-right-color': newval });
				} else if (wp.customize('loginify[templates]').get() === 'right-form') {
					$("#login").css({ 'border-left-color': newval });
				} else {
					$(".login form").css({ 'border-color': newval });
				}
			});
		});

		wp.customize('loginify[form_border_radius]', function (value) {
			value.bind(function (newval) {
				$(".login form").css({ 'border-radius': newval + 'px' });
			});
		});

		// form footer section
		wp.customize('loginify[footer_link_color]', function (value) {
			value.bind(function (newval) {
				$(".login #nav a, .login #backtoblog a").css({ color: newval });
			});
		});

		wp.customize('loginify[footer_link_color_hover]', function (value) {
			value.bind(function (newval) {
				$(".login #nav a, .login #backtoblog a").hover(function() {
					$(this).css("color", newval)
				}).mouseout(function(){
					$(this).css("color", wp.customize('loginify[footer_link_color]').get());
				});
			});
		});

		wp.customize('loginify[remove_register_lostpass_link]', function (value) {
			value.bind(function (newval) {
				if (newval) {
					$(".login #nav").hide();
				} else {
					$(".login #nav").show();
				}
			});
		});

		wp.customize('loginify[remove_back_to_site_link]', function (value) {
			value.bind(function (newval) {
				if (newval) {
					$(".login #backtoblog").hide();
				} else {
					$(".login #backtoblog").show();
				}
			});
		});

		wp.customize('loginify[remove_lang_switcher]', function (value) {
			value.bind(function (newval) {
				if (newval) {
					$("#login .language-switcher").hide();
				} else {
					$("#login .language-switcher").show();
				}
			});
		});

	});
})(jQuery);