/**
 * Notice for Elementor
 *
 * @package Nonprofit
 */

/* global nonprofitElementorNotice */

jQuery( document ).ready(
	function () {

			var style = '<style>.nonprofit-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.nonprofit-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.nonprofit-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.nonprofit-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.nonprofit-elementor-notice-buttons{border-top:1px solid #e6e9ec}.nonprofit-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.nonprofit-elementor-notice-buttons>a.nonprofit-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.nonprofit-elementor-notice-buttons>a.nonprofit-disable-default-styles{color:#9b0a46}</style>';

			var dialog = style + '<div class="nonprofit-disable-elementor-styling">' +
				'<div class="nonprofit-elementor-notice-wrapper">' +
					'<div class="nonprofit-elementor-notice-header">Nonprofit supports default styling for Elementor widgets</div>' +
					'<div class="nonprofit-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
					'<div class="nonprofit-elementor-notice-buttons">' +
						'<a href="#" class="nonprofit-do-nothing" data-reply="no">No</a>' +
						'<a href="#" class="nonprofit-disable-default-styles" data-reply="yes">Yes</a>' +
					'</div>' +
				'</div>' +
			'</div>';

			jQuery( 'body' ).prepend( dialog );
			jQuery( '.nonprofit-elementor-notice-buttons > a' ).on(
				'click', function() {

					var reply = jQuery( this ).data( 'reply' );

					jQuery.ajax(
						{
							url: nonprofitElementorNotice.ajaxurl,
							data: {
								reply: reply,
								nonce: nonprofitElementorNotice.nonce,
								action: 'elementor_desiable_default_style'
							},
							type: 'post',
							success: function () {

								if ( reply === 'yes' ) {
									parent.location.reload();
								} else {
									jQuery( '.nonprofit-disable-elementor-styling' ).fadeOut( 500, function() { jQuery( this ).remove(); } );
								}
							}
						}
					);
				}
			);
	}
);
