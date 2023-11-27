<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
    <title>Land Registration Forms</title>
	<!-- Google Site Verification code begins here -->
		<!-- Google Site Verification code ends here -->

		<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//www.googletagmanager.com' />
<link rel='dns-prefetch' href='//www.google.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />

		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='https://lands.go.ke/wp-includes/css/dist/block-library/style.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='https://lands.go.ke/wp-includes/css/dist/block-library/theme.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes_gutenberg_block-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-gutenberg-blocks.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='wp-components-css'  href='https://lands.go.ke/wp-includes/css/dist/components/style.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-editor-css'  href='https://lands.go.ke/wp-includes/css/dist/block-editor/style.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-nux-css'  href='https://lands.go.ke/wp-includes/css/dist/nux/style.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-editor-css'  href='https://lands.go.ke/wp-includes/css/dist/editor/style.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-edit-blocks-css'  href='https://lands.go.ke/wp-includes/css/dist/block-library/editor.min.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='helpie-faq-bundle-styles-css'  href='https://lands.go.ke/wp-content/plugins/helpie-faq/assets/main.bundle.css?ver=1.6.9' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://lands.go.ke/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='ctf_styles-css'  href='https://lands.go.ke/wp-content/plugins/custom-twitter-feeds/css/ctf-styles.min.css?ver=1.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='events-manager-css'  href='https://lands.go.ke/wp-content/plugins/events-manager/includes/css/events_manager.css?ver=5.9942' type='text/css' media='all' />
<link rel='stylesheet' id='rt-megamenu-front-end-style-css'  href='https://lands.go.ke/wp-content/plugins/radiantthemes-mega-menu/assets/css/rt-megamenu.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://lands.go.ke/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.4.8' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
</style>
<link rel='stylesheet' id='bootstrap-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/bootstrap.min.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/font-awesome.min.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='elusive-icons-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/elusive-icons.min.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/animate.min.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-custom-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-custom.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-responsive-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-responsive.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-header-style-ten-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-header-style-ten.css' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-footer-style-seven-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-footer-style-seven.css' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-style-css'  href='https://lands.go.ke/wp-content/themes/unbound/style.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-user-custom-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-user-custom.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-dynamic-css'  href='https://lands.go.ke/wp-content/themes/unbound/css/radiantthemes-dynamic.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-button-element-one-css'  href='https://lands.go.ke/wp-content/plugins/radiantthemes-addons/button/css/radiantthemes-button-element-one.css?ver=5.7.2' type='text/css' media='all' />
<style id='radiantthemes-button-element-one-inline-css' type='text/css'>
.gdpr-notice .btn, .team.element-six .team-item > .holder .data .btn, .radiantthemes-button > .radiantthemes-button-main, .rt-fancy-text-box > .holder > .more .btn, .rt-call-to-action-wraper .rt-call-to-action-item .btn:hover, .radiant-contact-form .form-row input[type=submit], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn {  border-radius:30px 30px 30px 30px ; }
</style>
<link rel='stylesheet' id='pojo-a11y-css'  href='https://lands.go.ke/wp-content/plugins/pojo-accessibility/assets/css/style.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-twitter-css-css'  href='https://lands.go.ke/wp-content/plugins/radiantthemes-addons/widget/twitter-widget/css/radiantthemes-twitter-box.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='radiantthemes-contact-box-widget-css'  href='https://lands.go.ke/wp-content/plugins/radiantthemes-addons/widget/contact-box/css/radiantthemes-contact-box.css?ver=1700504183' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css'  href='https://lands.go.ke/wp-content/plugins/tablepress/css/default.min.css?ver=1.13' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='https://lands.go.ke/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='addtoany-css'  href='https://lands.go.ke/wp-content/plugins/add-to-any/addtoany.min.css?ver=1.15' type='text/css' media='all' />
<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900,300italic,400italic,500italic,700italic,900italic%7CPoppins:300,400,500,600,700&#038;display=swap&#038;ver=1667478543" /><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900,300italic,400italic,500italic,700italic,900italic%7CPoppins:300,400,500,600,700&#038;display=swap&#038;ver=1667478543" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900,300italic,400italic,500italic,700italic,900italic%7CPoppins:300,400,500,600,700&#038;display=swap&#038;ver=1667478543" /></noscript><script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-content/plugins/add-to-any/addtoany.min.js?ver=1.1' id='addtoany-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script type='text/javascript' id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );( 'objectFit' in document.documentElement.style ) || document.write( '<script src="https://lands.go.ke/wp-includes/js/dist/vendor/wp-polyfill-object-fit.min.js?ver=2.3.4"></scr' + 'ipt>' );
</script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/mouse.min.js?ver=1.12.1' id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/sortable.min.js?ver=1.12.1' id='jquery-ui-sortable-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.12.1' id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"Close","currentText":"Today","monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Previous","dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"dateFormat":"MM d, yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/menu.min.js?ver=1.12.1' id='jquery-ui-menu-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/dist/dom-ready.min.js?ver=eb19f7980f0268577acb5c2da5457de3' id='wp-dom-ready-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/dist/hooks.min.js?ver=50e23bed88bcb9e6e14023e9961698c1' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/dist/i18n.min.js?ver=db9a9a37da262883343e941c3731bc67' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type='text/javascript' id='wp-a11y-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", { "locale_data": { "messages": { "": {} } } } );
</script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/dist/a11y.min.js?ver=5e00de7a43b31bbb9eaf685f089a3903' id='wp-a11y-js'></script>
<script type='text/javascript' id='jquery-ui-autocomplete-js-extra'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.12.1' id='jquery-ui-autocomplete-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/resizable.min.js?ver=1.12.1' id='jquery-ui-resizable-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/draggable.min.js?ver=1.12.1' id='jquery-ui-draggable-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/controlgroup.min.js?ver=1.12.1' id='jquery-ui-controlgroup-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/checkboxradio.min.js?ver=1.12.1' id='jquery-ui-checkboxradio-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/button.min.js?ver=1.12.1' id='jquery-ui-button-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-includes/js/jquery/ui/dialog.min.js?ver=1.12.1' id='jquery-ui-dialog-js'></script>
<script type='text/javascript' id='events-manager-js-extra'>
/* <![CDATA[ */
var EM = {"ajaxurl":"https:\/\/lands.go.ke\/wp-admin\/admin-ajax.php","locationajaxurl":"https:\/\/lands.go.ke\/wp-admin\/admin-ajax.php?action=locations_search","firstDay":"1","locale":"en","dateFormat":"dd\/mm\/yy","ui_css":"https:\/\/lands.go.ke\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui.min.css","show24hours":"","is_ssl":"1","bookingInProgress":"Please wait while the booking is being submitted.","tickets_save":"Save Ticket","bookingajaxurl":"https:\/\/lands.go.ke\/wp-admin\/admin-ajax.php","bookings_export_save":"Export Bookings","bookings_settings_save":"Save Settings","booking_delete":"Are you sure you want to delete?","booking_offset":"30","bb_full":"Sold Out","bb_book":"Book Now","bb_booking":"Booking...","bb_booked":"Booking Submitted","bb_error":"Booking Error. Try again?","bb_cancel":"Cancel","bb_canceling":"Canceling...","bb_cancelled":"Cancelled","bb_cancel_error":"Cancellation Error. Try again?","txt_search":"Search","txt_searching":"Searching...","txt_loading":"Loading...","event_detach_warning":"Are you sure you want to detach this event? By doing so, this event will be independent of the recurring set of events.","delete_recurrence_warning":"Are you sure you want to delete all recurrences of this event? All events will be moved to trash.","disable_bookings_warning":"Are you sure you want to disable bookings? If you do this and save, you will lose all previous bookings. If you wish to prevent further bookings, reduce the number of spaces available to the amount of bookings you currently have","booking_warning_cancel":"Are you sure you want to cancel your booking?"};
/* ]]> */
</script>
<script type='text/javascript' src='https://lands.go.ke/wp-content/plugins/events-manager/includes/js/events-manager.js?ver=5.9942' id='events-manager-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.4.5' id='tp-tools-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.4.8' id='revmin-js'></script>
<script type='text/javascript' src='https://lands.go.ke/wp-content/themes/unbound/js/retina.min.js?ver=1' id='retina-js'></script>
<script type='text/javascript' src='https://www.googletagmanager.com/gtag/js?id=UA-195596432-1' id='google_gtagjs-js' async></script>
<script type='text/javascript' id='google_gtagjs-js-after'>
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('set', 'linker', {"domains":["lands.go.ke"]} );
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "UA-195596432-1", {"anonymize_ip":true});
</script>
<link rel="https://api.w.org/" href="https://lands.go.ke/wp-json/" /><link rel="alternate" type="application/json" href="https://lands.go.ke/wp-json/wp/v2/pages/517" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://lands.go.ke/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://lands.go.ke/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.7.2" />
<link rel='shortlink' href='https://lands.go.ke/?p=517' />
<link rel="alternate" type="application/json+oembed" href="https://lands.go.ke/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flands.go.ke%2Fservices%2F" />
<meta name="framework" content="Redux 4.1.29" />
<script data-cfasync="false">
window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};
(function(d,s,a,b){a=d.createElement(s);b=d.getElementsByTagName(s)[0];a.async=1;a.src="https://static.addtoany.com/menu/page.js";b.parentNode.insertBefore(a,b);})(document,"script");
</script>
<meta name="generator" content="Site Kit by Google 1.35.0" />
			<link rel="icon" href="https://lands.go.ke/wp-content/themes/unbound/images/favicon.ico" sizes="32x32" />

			<link rel="icon" href="https://lands.go.ke/wp-content/themes/unbound/images/favicon.ico" sizes="192x192">

			<link rel="apple-touch-icon-precomposed" href="https://lands.go.ke/wp-content/themes/unbound/images/favicon.ico" />

			<meta name="msapplication-TileImage" content="https://lands.go.ke/wp-content/themes/unbound/images/favicon.ico" />

		
		<style type="text/css">
#pojo-a11y-toolbar .pojo-a11y-toolbar-toggle a{ background-color: #4054b2;	color: #ffffff;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay, #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items.pojo-a11y-links{ border-color: #4054b2;}
body.pojo-a11y-focusable a:focus{ outline-style: solid !important;	outline-width: 1px !important;	outline-color: #FF0000 !important;}
#pojo-a11y-toolbar{ top: 100px !important;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay{ background-color: #ffffff;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a, #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay p.pojo-a11y-toolbar-title{ color: #333333;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a.active{ background-color: #4054b2;	color: #ffffff;}
@media (max-width: 767px) { #pojo-a11y-toolbar { top: 50px !important; } }</style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<meta name="generator" content="Powered by Slider Revolution 6.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerphp += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
<style type="text/css">.helpie-faq.accordions.custom-styles .accordion .accordion__item .accordion__header{padding-top:30px;padding-right:52.5px;padding-bottom:30px;padding-left:30px;}.helpie-faq.accordions.custom-styles .accordion .accordion__item .accordion__body{padding-top:25px;padding-right:25px;padding-bottom:0px;padding-left:25px;}.helpie-faq.accordions.custom-styles .accordion .accordion__item{border-top-width:0px;border-right-width:0px;border-bottom-width:1px;border-left-width:0px;border-color:#f2f2f2;border-style:solid;}.helpie-faq.custom-styles .accordion .accordion__item{margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}</style>		<style type="text/css" id="wp-custom-css">
			.header_top_item .brand-logo img {
    max-width: 700px;

}


.entry-content ol a, .entry-content li a {
    text-decoration: none;
}
.header_main .brand-logo img {
    max-width: 240px;
}
.header_top_item .header-data-social ul.social li a i {
    font-size: 20px;
    color: #006ba1;
    line-height: 1;
}
.header_top_item ul.contact li {
   
   
    color: #000000;
}
.entry-header .entry-meta > .holder > .author-image img {
    border-radius: 50%;
    display: none;
}
.entry-header .entry-meta > .holder {
  
    display: none;
}		</style>
		<style id="unbound_theme_option-dynamic-css" title="dynamic-css" class="redux-options-output">body{background-color:#ffffff;}body{font-family:Rubik;line-height:28px;font-weight:400;font-style:normal;color:#0f192d;font-size:15px;font-display:swap;}h1{font-family:Poppins;line-height:48px;letter-spacing:-1px;font-weight:700;font-style:normal;color:#0f192d;font-size:40px;font-display:swap;}h2{font-family:Poppins;line-height:48px;letter-spacing:-1px;font-weight:700;font-style:normal;color:#0f192d;font-size:40px;font-display:swap;}h3{font-family:Poppins;line-height:48px;letter-spacing:-1px;font-weight:700;font-style:normal;color:#0f192d;font-size:40px;font-display:swap;}h4{font-family:Poppins;line-height:35px;font-weight:700;font-style:normal;color:#0f192d;font-size:30px;font-display:swap;}h5{font-family:Poppins;line-height:26px;font-weight:500;font-style:normal;color:#0f192d;font-size:18px;font-display:swap;}h6{font-family:Poppins;line-height:26px;font-weight:600;font-style:normal;color:#0f192d;font-size:15px;font-display:swap;}.wraper_header.style-one .wraper_header_main{background-color:rgba(0,0,0,0.01);}.wraper_header.style-one .wraper_header_main{border-bottom-color:rgba(255,255,255,0.2);}.wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;text-transform:uppercase;line-height:27px;font-weight:500;font-style:normal;color:#000000;font-size:13px;font-display:swap;}.wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#0c121f;font-size:14px;font-display:swap;}.wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li:hover > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li.current-menu-item > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li.current-menu-parent > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li.current-menu-ancestor > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li:hover > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li.current-menu-item > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li.current-menu-parent > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li:hover > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li.current-menu-item > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li.current-menu-parent > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li:hover > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li.current-menu-item > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li.current-menu-parent > a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li:hover a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li.current-menu-item a, .wraper_header.style-one .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li.current-menu-parent a{color:#81D742;}.wraper_header.style-one .header_main_action ul > li.header-cart-bar i{color:#FFFFFF;}.wraper_header.style-one .header_main_action ul > li.floating-searchbar i, .wraper_header.style-one .header_main_action ul > li.flyout-searchbar-toggle i{color:#FFFFFF;}.wraper_header.style-one .header_main_action ul > li.header-hamburger i{color:#FFFFFF;}body[data-header-style="header-style-one"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-one .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-one"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-one"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-one"] .mobile-menu-close i{color:#838383;}.wraper_header.style-two .wraper_header_main{background-color:rgba(255,255,255,0.01);}.wraper_header.style-two .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;text-transform:uppercase;line-height:27px;font-weight:500;font-style:normal;color:#454545;font-size:13px;font-display:swap;}.wraper_header.style-two .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-two .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-two .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-two .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#454545;font-size:13px;font-display:swap;}.wraper_header.style-two .header_main_action ul > li.header-cart-bar i{color:#454545;}.wraper_header.style-two .header_main_action ul > li.floating-searchbar i, .wraper_header.style-two .header_main_action ul > li.flyout-searchbar-toggle i{color:#454545;}.wraper_header.style-two .header_main_action ul > li.header-hamburger i{color:#454545;}body[data-header-style="header-style-two"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-two .header_main .responsive-nav i{color:#FFFFFF;}body[data-header-style="header-style-two"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-two"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-two"] .mobile-menu-close i{color:#838383;}.wraper_header.style-three .wraper_header_top{background-color:rgba(0,0,0,0.01);}.wraper_header.style-three .wraper_header_top{border-bottom-color:rgba(255,255,255,0.1);}.wraper_header.style-three .wraper_header_main{background-color:rgba(0,0,0,0.01);}.wraper_header.style-three .wraper_header_main{border-bottom-color:rgba(255,255,255,0.1);}.wraper_header.style-three .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;text-transform:uppercase;line-height:27px;font-weight:500;font-style:normal;color:#ffffff;font-size:13px;font-display:swap;}.wraper_header.style-three .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-three .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-three .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-three .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#0c121f;font-size:13px;font-display:swap;}.wraper_header.style-three .header_main_action ul > li.header-cart-bar i{color:#FFFFFF;}.wraper_header.style-three .header_main_action ul > li.floating-searchbar i, .wraper_header.style-three .header_main_action ul > li.flyout-searchbar-toggle i{color:#FFFFFF;}.wraper_header.style-three .header_main_action ul > li.header-hamburger i{color:#FFFFFF;}body[data-header-style="header-style-three"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-three .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-three"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-three"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-three"] .mobile-menu-close i{color:#838383;}.wraper_header.style-four .wraper_header_main{background-color:rgba(0,0,0,0.01);}.wraper_header.style-four .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;line-height:28px;font-weight:500;font-style:normal;color:#ffffff;font-size:17px;font-display:swap;}.wraper_header.style-four .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-four .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-four .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-four .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#0c121f;font-size:13px;font-display:swap;}.wraper_header.style-four .header_main_action ul > li.header-cart-bar i{color:#FFFFFF;}.wraper_header.style-four .header_main_action ul > li.header-hamburger i{color:#FFFFFF;}body[data-header-style="header-style-four"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-four .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-four"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-four"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-four"] .mobile-menu-close i{color:#838383;}.wraper_header.style-five .wraper_header_main{background-color:rgba(255,255,255,0.75);}.wraper_header.style-five .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;line-height:28px;font-weight:400;font-style:normal;color:#0c121f;font-size:16px;font-display:swap;}.wraper_header.style-five .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-five .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-five .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-five .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#0c121f;font-size:13px;font-display:swap;}.wraper_header.style-five .header_main_action ul > li.header-cart-bar i{color:#454545;}.wraper_header.style-five .header_main_action ul > li.floating-searchbar i, .wraper_header.style-five .header_main_action ul > li.flyout-searchbar-toggle i{color:#454545;}.wraper_header.style-five .header_main_action ul > li.header-hamburger i{color:#454545;}body[data-header-style="header-style-five"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-five .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-five"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-five"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-five"] .mobile-menu-close i{color:#838383;}.wraper_header.style-six .wraper_header_main{background-color:rgba(0,0,0,0.01);}.wraper_header.style-six .header_main_action ul > li.header-cart-bar i{color:#FFFFFF;}.wraper_header.style-six .header_main_action ul > li.floating-searchbar i, .wraper_header.style-six .header_main_action ul > li.flyout-searchbar-toggle i{color:#FFFFFF;}.wraper_header.style-six .header_main_action ul > li.header-hamburger i{color:#FFFFFF;}body[data-header-style="header-style-six"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-seven .wraper_header_main{background-color:rgba(0,0,0,0.01);}.wraper_header.style-seven .header_main_action ul > li.header-cart-bar i{color:#0C121F;}.wraper_header.style-seven .header_main_action ul > li.floating-searchbar i, .wraper_header.style-seven .header_main_action ul > li.flyout-searchbar-toggle i{color:#0C121F;}.wraper_header.style-seven .header_main_action ul > li.header-hamburger i{color:#0C121F;}body[data-header-style="header-style-seven"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-eight .wraper_header_main{background-color:#ffffff;}.wraper_header.style-eight .wraper_header_main{border-bottom-color:rgba(0,0,0,0.07);}.wraper_header.style-eight .header_main_action ul > li.header-cart-bar i{color:#030712;}.wraper_header.style-eight .header_main_action ul > li.floating-searchbar i, .wraper_header.style-eight .header_main_action ul > li.flyout-searchbar-toggle i{color:#030712;}.wraper_header.style-eight .header_main_action ul > li.header-hamburger i{color:#030712;}body[data-header-style="header-style-eight"] #hamburger-menu{background-color:#ffffff;}.wraper_header.style-nine .wraper_fullwidth_menu{background-color:#ffffff;}.wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav{font-family:Poppins;line-height:47px;letter-spacing:-1px;font-weight:700;font-style:normal;color:#252525;font-size:40px;font-display:swap;}.wraper_header.style-nine .wraper_fullwidth_menu .full-inner nav ul li ul{font-family:Poppins;line-height:23px;font-weight:500;font-style:normal;color:#252525;font-size:15px;font-display:swap;}.wraper_header.style-nine .header_main_action ul > li.header-cart-bar i{color:#030712;}.wraper_header.style-nine .header_main_action ul > li.floating-searchbar i, .wraper_header.style-nine .header_main_action ul > li.flyout-searchbar-toggle i{color:#030712;}.wraper_header.style-ten .wraper_header_top{background-color:#ffffff;}.wraper_header.style-ten .wraper_header_main{background-color:#775130;}.wraper_header.style-ten .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;text-transform:uppercase;line-height:27px;font-weight:500;font-style:normal;color:#ffffff;font-size:13px;font-display:swap;}.wraper_header.style-ten .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-ten .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-ten .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-ten .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#454545;font-size:13px;font-display:swap;}.wraper_header.style-ten .header_main_action ul > li.header-cart-bar i{color:#FFFFFF;}.wraper_header.style-ten .header_main_action ul > li.floating-searchbar i, .wraper_header.style-ten .header_main_action ul > li.flyout-searchbar-toggle i{color:#FFFFFF;}.wraper_header.style-ten .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-ten"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-ten"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-ten"] .mobile-menu-close i{color:#838383;}.wraper_header.style-eleven .wraper_header_main{background-color:rgba(255,255,255,0.01);}.wraper_header.style-eleven .nav > [class*="menu-"] > ul.menu > li > a{font-family:Poppins;line-height:27px;font-weight:500;font-style:normal;color:#0c121f;font-size:15px;font-display:swap;}.wraper_header.style-eleven .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-eleven .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-eleven .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-eleven .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Poppins;text-align:left;line-height:25px;font-weight:400;font-style:normal;color:#454545;font-size:13px;font-display:swap;}.wraper_header.style-eleven .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-eleven"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-eleven"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-eleven"] .mobile-menu-close i{color:#838383;}.wraper_header.style-twelve .wraper_header_top{background-color:#253cac;}.wraper_header.style-twelve .wraper_header_main{background-color:#f5f5f5;}.wraper_header.style-twelve .nav > [class*="menu-"] > ul.menu > li > a{font-family:Rubik;text-transform:uppercase;line-height:27px;font-weight:500;font-style:normal;color:#3c3d41;font-size:13px;font-display:swap;}.wraper_header.style-twelve .nav > [class*="menu-"] > ul.menu > li > ul > li > a, .wraper_header.style-twelve .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > a, .wraper_header.style-twelve .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li > a, .wraper_header.style-twelve .nav > [class*="menu-"] > ul.menu > li > ul > li > ul > li > ul > li ul li a{font-family:Rubik;text-align:left;text-transform:uppercase;line-height:25px;font-weight:400;font-style:normal;color:#3c3d41;font-size:13px;font-display:swap;}.wraper_header.style-twelve .header_main_action ul > li.header-cart-bar i{color:#3C3D41;}.wraper_header.style-twelve .header_main_action ul > li.floating-searchbar i, .wraper_header.style-twelve .header_main_action ul > li.flyout-searchbar-toggle i{color:#3C3D41;}.wraper_header.style-twelve .header_main .responsive-nav i{color:#838383;}body[data-header-style="header-style-twelve"] #mobile-menu{background-color:#ffffff;}body[data-header-style="header-style-twelve"] .mobile-menu-nav{font-family:Poppins;text-transform:uppercase;line-height:27px;letter-spacing:0.5px;font-weight:400;font-style:normal;color:#838383;font-size:13px;font-display:swap;}body[data-header-style="header-style-twelve"] .mobile-menu-close i{color:#838383;}.wraper_inner_banner{background-color:#f2f2f2;background-repeat:no-repeat;background-attachment:inherit;background-size:cover;}.wraper_inner_banner_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_inner_banner_main > .container{padding-top:40px;padding-bottom:40px;}.inner_banner_main .title{font-family:Poppins;font-weight:normal;font-style:normal;font-display:swap;}.inner_banner_main .subtitle{font-family:Rubik;line-height:29px;font-weight:400;font-style:normal;color:#0c121f;font-size:18px;font-display:swap;}.inner_banner_breadcrumb #crumbs{font-family:Rubik;line-height:26px;font-weight:400;font-style:normal;color:#0c121f;font-size:16px;font-display:swap;}.wraper_inner_banner_breadcrumb > .container{padding-top:10px;padding-bottom:10px;}.wraper_footer.style-one{background-color:#161616;}.wraper_footer.style-one .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-two{background-color:#161616;}.wraper_footer.style-two .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-three{background-color:#161616;}.wraper_footer.style-three .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-four{background-color:#161616;}.wraper_footer.style-four .wraper_footer_navigation{background-color:rgba(0,23,77,0.01);}.wraper_footer.style-four .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-five{background-color:#161616;}.wraper_footer.style-five .wraper_footer_navigation{background-color:rgba(0,23,77,0.01);}.wraper_footer.style-five .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-six{background-color:#161616;}.wraper_footer.style-six .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-seven{background-color:#161616;}.wraper_footer.style-seven .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-eight{background-color:#161616;}.wraper_footer.style-eight .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-nine{background-color:#161616;}.wraper_footer.style-nine .wraper_footer_navigation{background-color:rgba(0,23,77,0.01);}.wraper_footer.style-nine .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.wraper_footer.style-ten{background-color:#161616;}.wraper_footer.style-ten .wraper_footer_main{border-bottom-color:rgba(255,255,255,0.01);}.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .radiant-contact-form .form-row input[type=submit], .radiant-contact-form .form-row input[type=button], .radiant-contact-form .form-row button[type=submit], .post.style-two .post-read-more .btn, .post.style-three .entry-main .post-read-more .btn, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .widget-area > .widget.widget_price_filter .button, .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn{padding-top:12px;padding-right:35px;padding-bottom:13px;padding-left:35px;}.radiantthemes-button.hover-style-one .radiantthemes-button-main:hover, .radiantthemes-button.hover-style-two .radiantthemes-button-main > .overlay, .radiantthemes-button.hover-style-three .radiantthemes-button-main > .overlay, .radiantthemes-button.hover-style-four .radiantthemes-button-main:hover, .gdpr-notice .btn, .radiant-contact-form .form-row input[type=submit]:hover, .radiant-contact-form .form-row input[type=button]:hover, .radiant-contact-form .form-row button[type=submit]:hover, .post.style-two .post-read-more .btn:hover, .post.style-three .entry-main .post-read-more .btn:hover, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button:hover, .woocommerce form .form-row input.button:hover, .widget-area > .widget.widget_price_filter .button:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover{background-color:#252525;}.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .radiant-contact-form .form-row input[type=submit], .radiant-contact-form .form-row input[type=button], .radiant-contact-form .form-row button[type=submit], .post.style-two .post-read-more .btn, .post.style-three .entry-main .post-read-more .btn, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .widget-area > .widget.widget_price_filter .button, .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn{border-top:0px solid #ffffff;border-bottom:0px solid #ffffff;border-left:0px solid #ffffff;border-right:0px solid #ffffff;}.radiantthemes-button > .radiantthemes-button-main:hover, .gdpr-notice .btn:hover, .radiant-contact-form .form-row input[type=submit]:hover, .radiant-contact-form .form-row input[type=button]:hover, .radiant-contact-form .form-row button[type=submit]:hover, .post.style-two .post-read-more .btn:hover, .post.style-three .entry-main .post-read-more .btn:hover, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button:hover, .woocommerce form .form-row input.button:hover, .widget-area > .widget.widget_price_filter .button:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover{border-top:0px solid #ffffff;border-bottom:0px solid #ffffff;border-left:0px solid #ffffff;border-right:0px solid #ffffff;}.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .radiant-contact-form .form-row input[type=submit], .radiant-contact-form .form-row input[type=button], .radiant-contact-form .form-row button[type=submit], .post.style-two .post-read-more .btn, .post.style-three .entry-main .post-read-more .btn, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .widget-area > .widget.widget_price_filter .button, .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn{-moz-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);-ms-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);-o-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);}.radiantthemes-button > .radiantthemes-button-main, .gdpr-notice .btn, .radiant-contact-form .form-row input[type=submit], .radiant-contact-form .form-row input[type=button], .radiant-contact-form .form-row button[type=submit], .post.style-two .post-read-more .btn, .post.style-three .entry-main .post-read-more .btn, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button, .woocommerce form .form-row input.button, .widget-area > .widget.widget_price_filter .button, .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn{font-family:Rubik;line-height:23px;font-weight:400;font-style:normal;color:#fff;font-size:14px;font-display:swap;}.radiantthemes-button > .radiantthemes-button-main:hover, .gdpr-notice .btn:hover, .radiant-contact-form .form-row input[type=submit]:hover, .radiant-contact-form .form-row input[type=button]:hover, .radiant-contact-form .form-row button[type=submit]:hover, .post.style-two .post-read-more .btn:hover, .post.style-three .entry-main .post-read-more .btn:hover, .woocommerce #respond input#submit, .woocommerce .return-to-shop .button:hover, .woocommerce form .form-row input.button:hover, .widget-area > .widget.widget_price_filter .button:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover{color:#ffffff;}.radiantthemes-button > .radiantthemes-button-main i{color:#ffffff;}.radiantthemes-button > .radiantthemes-button-main:hover i{color:#ffffff;}.radiant-contact-form .form-row, div.wpcf7-response-output{margin-top:0px;margin-right:0px;margin-bottom:20px;margin-left:0px;}.radiant-contact-form .form-row input[type=text], .radiant-contact-form .form-row input[type=email], .radiant-contact-form .form-row input[type=url], .radiant-contact-form .form-row input[type=tel], .radiant-contact-form .form-row input[type=number], .radiant-contact-form .form-row input[type=password], .radiant-contact-form .form-row input[type=date], .radiant-contact-form .form-row input[type=time], .radiant-contact-form .form-row select{height:45px;}.radiant-contact-form .form-row textarea{height:100px;}.radiant-contact-form .form-row input[type=text]:focus, .radiant-contact-form .form-row input[type=email]:focus, .radiant-contact-form .form-row input[type=url]:focus, .radiant-contact-form .form-row input[type=tel]:focus, .radiant-contact-form .form-row input[type=number]:focus, .radiant-contact-form .form-row input[type=password]:focus, .radiant-contact-form .form-row input[type=date]:focus, .radiant-contact-form .form-row input[type=time]:focus, .radiant-contact-form .form-row select:focus, .radiant-contact-form .form-row textarea:focus{padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;}.radiant-contact-form .form-row input[type=text], .radiant-contact-form .form-row input[type=email], .radiant-contact-form .form-row input[type=url], .radiant-contact-form .form-row input[type=tel], .radiant-contact-form .form-row input[type=number], .radiant-contact-form .form-row input[type=password], .radiant-contact-form .form-row input[type=date], .radiant-contact-form .form-row input[type=time], .radiant-contact-form .form-row select, .radiant-contact-form .form-row textarea{-moz-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);-ms-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);-o-box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);box-shadow: 0 0 20px 0 rgba(0,0,0,0.15);}.wraper_error_main.style-one{background-color:#dedede;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/404-Error-Style-One-Background-Image.png');background-size:cover;}.wraper_error_main.style-two{background-color:#ffffff;}.wraper_error_main.style-three{background-color:#ffffff;}.wraper_error_main.style-four{background-color:#ffffff;}.wraper_maintenance_main.style-one{background-color:#ffffff;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/Maintenance-More-Style-One-Image.png');}.wraper_maintenance_main.style-two{background-color:#ffffff;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/Maintenance-More-Style-Two-Image.png');}.wraper_maintenance_main.style-three{background-color:#ffffff;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/Maintenance-More-Style-Three-Image.png');}.wraper_comingsoon_main.style-one{background-color:#000000;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/Coming-Soon-Style-One-Background-Image.png');background-size:cover;}.wraper_comingsoon_main.style-two{background-color:#000000;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/Coming-Soon-Style-Two-Background-Image.png');background-size:cover;}.wraper_comingsoon_main.style-three{background-color:#000000;background-image:url('https://lands.afrovirtual.com/wp-content/themes/unbound/images/Coming-Soon-Style-Three-Background-Image.png');background-size:cover;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1618990532408{padding-top: 17px !important;}.vc_custom_1618990839411{margin-bottom: 0px !important;}.vc_custom_1520864177417{margin-bottom: 0px !important;}.vc_custom_1618990817956{margin-bottom: 0px !important;}.vc_custom_1520864359566{margin-bottom: 0px !important;}</style><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>



	<body data-rsssl=1  class="page-template-default page page-id-517 wp-embed-responsive radiantthemes radiantthemes-unbound wpb-js-composer js-comp-ver-6.6.0 vc_responsive" data-header-style="header-style-ten" data-nicescroll-cursorcolor="#ffbc13" data-nicescroll-cursorwidth="7px">
	
	
	<!-- overlay -->
	<div class="overlay"></div>
	<!-- overlay -->

	<!-- scrollup -->
						<div class="scrollup left">
					<i class="fa fa-angle-up"></i>
		</div>
		<!-- scrollup -->

	
	<!-- radiantthemes-website-layout -->
	    	    	    <div class="radiantthemes-website-layout full-width">
            
    	
                            <header class="header">

                                <nav class="navbar nav-1">
                                    <section class="flex">
                                       <a href="home.php" class="logo"><i class="fas fa-house"></i>Kericho Land Registry Portal</a>
                                       <ul>
                                          <li><a href="Home.php">Home<i class="fas fa-angle-null"></i></a></li>
                                          <li><a href="search.php">Search<i class="fas fa-angle-null"></i></a></li>
                                          <li><a href="#">Resources<i class="fas fa-angle-null"></i></a>
                                          <ul>
                                             <li><a href="forms.php">LRA Forms</a></li>
                                             <li><a href="cla.php">CLA Forms</a></li>
                                             <li><a href="sect.php">Sectional Property Forms</a></li>
                                           </ul>
                                          </li>
                                          
                                          <li><a href="https://geoportal.landportal.org/?map=655da17db15f8d0019192546">View Parcels </a></li>
                                           <li><a href="#">More<i class="fas fa-angle-null"></i></a>
                                             <ul>
                                                <li><a href="services.php">Other Services</a></i></li>
                                                <li><a href="about.html">About us</a></i></li>
                                                <li><a href="contact.html">Contact us</a></i></li>
                                                <li><a href="faq.html">FAQ</a></i></li>
                                             </ul>
                                          </li>
                                       </li>
                                       <li><a href="#">My Account <i class="fas fa-angle-null"></i></a>
									   <ul>
										   <li><a href="parcels.php">Saved Parcels</a></li>
										   <li><a href="logout.php">logout</a></li>
                                                
                                        </ul>
                                         
                                       </li>
                                            
                                        
                                       
                                       </ul>
                                    </section>
                                 </nav>
                             </header>
                           
                            
                                     
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
                            
                               <!-- custom css file link  -->
                               <link rel="stylesheet" href="css/style.css">
                            

<!-- #page -->
<div id="page" class="site">
    <!-- #content -->
    <div id="content" class="site-content">

<div id="primary" class="content-area">
<main id="main" class="site-main">
                    <div class="container page-container">
            
<article id="post-855" class="post-855 page type-page status-publish hentry">
<header class="entry-header">
    </header><!-- .entry-header -->
<div class="entry-content">
<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><h2 style="font-size: 30px;text-align: left" class="vc_custom_heading" >Land Registration Act (LRA) forms</h2><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element " >
<div class="wpb_wrapper">
    
<table id="tablepress-7" class="tablepress tablepress-id-7">
<thead>
<tr class="row-1 odd">
<th class="column-1">FORM NUMBER</th><th class="column-2">DESCRIPTION</th><th class="column-3">DOWNLOAD LINK</th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
<td class="column-1">Form-LRA-1 </td><td class="column-2">PRESENTATION BOOK</td><td class="column-3"><a href="https://lands.go.ke/wp-content/uploads/2023/11/Form-LRA-1-PRESENTATION-BOOK.pdf">Form LRA 1</a></td>
</tr>
<tr class="row-3 odd">
<td class="column-1">Form-LRA-2 </td><td class="column-2">THE LAND REGISTER (Absolute Titles)</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-2.pdf">Form LRA 2</a></td>
</tr>
<tr class="row-4 even">
<td class="column-1">Form-LRA-3 </td><td class="column-2">THE LAND REGISTER (Leasehold)</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-3.pdf">Form LRA 3</a></td>
</tr>
<tr class="row-5 odd">
<td class="column-1">Form-LRA-4 </td><td class="column-2">REGISTER OF POWERS OF ATTORNEY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-4.pdf">Form LRA 4</a></td>
</tr>
<tr class="row-6 even">
<td class="column-1">Form-LRA-5 </td><td class="column-2">GENERAL POWER OF ATTORNEY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-5.pdf">Form LRA 5</a></td>
</tr>
<tr class="row-7 odd">
<td class="column-1">Form-LRA-6 </td><td class="column-2">SPECIFIC POWER OF ATTORNEY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-6.pdf">Form LRA 6</a></td>
</tr>
<tr class="row-8 even">
<td class="column-1">Form-LRA-7 </td><td class="column-2">IRREVOCABLE POWER OF ATTORNEY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-7.pdf">Form LRA 7</a></td>
</tr>
<tr class="row-9 odd">
<td class="column-1">Form-LRA-8 </td><td class="column-2">NOTICE OF REVOCATION OF A POWER OF ATTORNEY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-8.pdf">Form LRA 8</a></td>
</tr>
<tr class="row-10 even">
<td class="column-1">Form-LRA-9 </td><td class="column-2">GENERAL APPLICATION FOR REGISTRATION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-9.pdf">Form LRA 9</a></td>
</tr>
<tr class="row-11 odd">
<td class="column-1">Form-LRA-10 </td><td class="column-2">APPLICATION TO BE NOTED IN THE REGISTER AS A SPOUSE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-10.pdf">Form LRA 10</a></td>
</tr>
<tr class="row-12 even">
<td class="column-1">Form-LRA-11 </td><td class="column-2">NOTICE OF INTENTION TO NOTE A SPOUSE IN THE REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-11.pdf">Form LRA 11</a></td>
</tr>
<tr class="row-13 odd">
<td class="column-1">Form-LRA-12 </td><td class="column-2">APPLICATION FOR REPLACEMENT CERTIFICATE OF TITLELEASE ON LOSS DESTRUCTION OF A PREVIOUS TITLE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-12.pdf">Form LRA 12</a></td>
</tr>
<tr class="row-14 even">
<td class="column-1">Form-LRA-13 </td><td class="column-2">NOTICE FOR ISSUE OF A REPLACEMENT TITLE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-13.pdf">Form LRA 13</a></td>
</tr>
<tr class="row-15 odd">
<td class="column-1">Form-LRA-14 </td><td class="column-2">APPLICATION FOR RECONSTRUCTION OF A LAND REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-14.pdf">Form LRA 14</a></td>
</tr>
<tr class="row-16 even">
<td class="column-1">Form-LRA-15 </td><td class="column-2">STATUTORY DECLARATION BY A BODY CORPORATE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-15.pdf">Form LRA 15</a></td>
</tr>
<tr class="row-17 odd">
<td class="column-1">Form-LRA-16 </td><td class="column-2">STATUTORY DECLARATION BY A NATURAL PERSON</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-16.pdf">Form LRA 16</a></td>
</tr>
<tr class="row-18 even">
<td class="column-1">Form-LRA-17 </td><td class="column-2">DEED OF INDEMNITY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-17.pdf">Form LRA 17</a></td>
</tr>
<tr class="row-19 odd">
<td class="column-1">Form-LRA-18 </td><td class="column-2">NOTICE FOR RECONSTRUCTION OF LOST OR DESTROYED LAND REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-18.pdf">Form LRA 18</a></td>
</tr>
<tr class="row-20 even">
<td class="column-1">Form-LRA-19 </td><td class="column-2">APPLICATION FOR ISSUE OF A CERTIFICATE OF TITLE LEASE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-19.pdf">Form LRA 19</a></td>
</tr>
<tr class="row-21 odd">
<td class="column-1">Form-LRA-20 </td><td class="column-2">Certificate of Title</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-20.pdf">Form LRA 20</a></td>
</tr>
<tr class="row-22 even">
<td class="column-1">Form-LRA-21 </td><td class="column-2">Certificate of Lease</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-21.pdf">Form LRA 21</a></td>
</tr>
<tr class="row-23 odd">
<td class="column-1">Form-LRA-22 </td><td class="column-2">REFUSAL TO REGISTER AN APPLICATION FOR REGISTRATION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-22.pdf">Form LRA 22</a></td>
</tr>
<tr class="row-24 even">
<td class="column-1">Form-LRA-23 </td><td class="column-2">APPLICATION BY AN INTERESTED PERSON TO ASCERTAIN AND FIX LAND BOUNDARIES</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-23.pdf">Form LRA 23</a></td>
</tr>
<tr class="row-25 odd">
<td class="column-1">Form-LRA-24 </td><td class="column-2">NOTICE OF INTENTION TO ASCERTAIN AND FIX THE BOUNDARIES</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-24.pdf">Form LRA 24</a></td>
</tr>
<tr class="row-26 even">
<td class="column-1">Form-LRA-25 </td><td class="column-2">ORDER FOR DEMARCATION MAINTENANCE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-25.pdf">Form LRA 25</a></td>
</tr>
<tr class="row-27 odd">
<td class="column-1">Form-LRA-26 </td><td class="column-2">APPLICATION FOR COMBINATION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-26.pdf">Form LRA 26</a></td>
</tr>
<tr class="row-28 even">
<td class="column-1">Form-LRA-27 </td><td class="column-2">MUTATION FORM</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-27.pdf">Form LRA 27</a></td>
</tr>
<tr class="row-29 odd">
<td class="column-1">Form-LRA-28 </td><td class="column-2">APPLICATION FOR REPARCELLATION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-28.pdf">Form LRA 28</a></td>
</tr>
<tr class="row-30 even">
<td class="column-1">Form-LRA-29 </td><td class="column-2">APPLICATION FOR PARTITION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-29.pdf">Form LRA 29</a></td>
</tr>
<tr class="row-31 odd">
<td class="column-1">Form-LRA-30 </td><td class="column-2">APPLICATION FOR PARTITION PURSUANT TO AN ORDER OF THE REGISTRAR</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-30.pdf">Form LRA 30</a></td>
</tr>
<tr class="row-32 even">
<td class="column-1">Form-LRA-31 </td><td class="column-2">NOTICE FOR A HEARING ON APPLICATION FOR PARTITION OF LAND HELD IN COMMON</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-31.pdf">Form LRA 31</a></td>
</tr>
<tr class="row-33 odd">
<td class="column-1">Form-LRA-32 </td><td class="column-2">FORM OF CONSENT OF A CHARGEE TO A PARTITION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-32.pdf">Form LRA 32</a></td>
</tr>
<tr class="row-34 even">
<td class="column-1">Form-LRA-33 </td><td class="column-2">TRANSFER OF INTEREST IN LAND</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-33.pdf">Form LRA 33</a></td>
</tr>
<tr class="row-35 odd">
<td class="column-1">Form-LRA-34 </td><td class="column-2">CONSENT BY THE ENCUMBRANCER TO TRANSFER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-34.pdf">Form LRA 34</a></td>
</tr>
<tr class="row-36 even">
<td class="column-1">Form-LRA-35 </td><td class="column-2">TRANSFER OF UNDIVIDED SHARE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-35.pdf">Form LRA 35</a></td>
</tr>
<tr class="row-37 odd">
<td class="column-1">Form-LRA-36 </td><td class="column-2">TRANSFER OF JOINT INTEREST</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-36.pdf">Form LRA 36</a></td>
</tr>
<tr class="row-38 even">
<td class="column-1">Form-LRA-37 </td><td class="column-2">APPLICATION FOR SEVERANCE OF JOINT OWNERSHIP</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-37.pdf">Form LRA 37</a></td>
</tr>
<tr class="row-39 odd">
<td class="column-1">Form-LRA-38 </td><td class="column-2">APPLICATION FOR THE REMOVAL OF THE NAME OF A DECEASED JOINT PROPRIETOR FROM THE REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-38.pdf">Form LRA 38</a></td>
</tr>
<tr class="row-40 even">
<td class="column-1">Form-LRA-39 </td><td class="column-2">TRANSFER TO THE PERSONAL REPRESENATATIVE AS EXECUTOR ADMINISTRATOR</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-39.pdf">Form LRA 39</a></td>
</tr>
<tr class="row-41 odd">
<td class="column-1">Form-LRA-40 </td><td class="column-2">APPLICATION FOR REGISTRATION AS PROPRIETOR JOINTLY WITH OTHER PERSONAL REPRESENTATIVES</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-40.pdf">Form LRA 40</a></td>
</tr>
<tr class="row-42 even">
<td class="column-1">Form-LRA-41 </td><td class="column-2">NOTIFICATION BY REGISTRAR TO PERSONAL REPRESENTATIVE OF AN APP FOR REGISTRATION JOINTLY WITH OTHER REPRESENTATIVES</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-41.pdf">Form LRA 41</a></td>
</tr>
<tr class="row-43 odd">
<td class="column-1">Form-LRA-42 </td><td class="column-2">TRANSFER BY PERSONAL REPRESENTATIVE TO PERSON ENITITLED UNDER A WILL OR INTESTACY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-42.pdf">Form LRA 42</a></td>
</tr>
<tr class="row-44 even">
<td class="column-1">Form-LRA-43 </td><td class="column-2">TRANSFER BY PERSONAL REPRESENTATIVE TO PURCHASER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-43.pdf">Form LRA 43</a></td>
</tr>
<tr class="row-45 odd">
<td class="column-1">Form-LRA-44 </td><td class="column-2">TRANSFER BY TRUSTEE IN BANKRUPTCY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-44.pdf">Form LRA 44</a></td>
</tr>
<tr class="row-46 even">
<td class="column-1">Form-LRA-45 </td><td class="column-2">TRANSFER BY TRUSTEE ON BANKRUPTCY  B</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-45.pdf">Form LRA 45</a></td>
</tr>
<tr class="row-47 odd">
<td class="column-1">Form-LRA-46 </td><td class="column-2">APPLICATION BY A LIQUIDATOR TO BE NOTED IN THE REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-46.pdf">Form LRA 46</a></td>
</tr>
<tr class="row-48 even">
<td class="column-1">Form-LRA-47 </td><td class="column-2">GENERAL FORM OF STATUTORY DECLARATION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-47.pdf">Form LRA 47</a></td>
</tr>
<tr class="row-49 odd">
<td class="column-1">Form-LRA-48 </td><td class="column-2">TRANSFER OF LAND BY A LIQUIDATOR</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-48.pdf">Form LRA 48</a></td>
</tr>
<tr class="row-50 even">
<td class="column-1">Form-LRA-49 </td><td class="column-2">TRANSFER by COMPANIES AND LIMITED LIABILITY PARTNERSHIPS</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-49.pdf">Form LRA 49</a></td>
</tr>
<tr class="row-51 odd">
<td class="column-1">Form-LRA-50 </td><td class="column-2">APPLICATION TO BE REGISTERED AS PROPRIETOR BY TRANSMISSION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-50.pdf">Form LRA 50</a></td>
</tr>
<tr class="row-52 even">
<td class="column-1">Form-LRA-51 </td><td class="column-2">APPLICATION TO BE REGISTERED AS A TRUSTEE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-51.pdf">Form LRA 51</a></td>
</tr>
<tr class="row-53 odd">
<td class="column-1">Form-LRA-52 </td><td class="column-2">TRANSFER OF LAND BY A TRUSTEE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-52.pdf">Form LRA 52</a></td>
</tr>
<tr class="row-54 even">
<td class="column-1">Form-LRA-53 </td><td class="column-2">CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-53.pdf">Form LRA 53</a></td>
</tr>
<tr class="row-55 odd">
<td class="column-1">Form-LRA-54 </td><td class="column-2">INFORMAL CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-54.pdf">Form LRA 54</a></td>
</tr>
<tr class="row-56 even">
<td class="column-1">Form-LRA-55 </td><td class="column-2">CONSENT FOR SECOND OR SUBSEQUENT CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-55.pdf">Form LRA 55</a></td>
</tr>
<tr class="row-57 odd">
<td class="column-1">Form-LRA-56 </td><td class="column-2">MEMORANDUM OF VARIATION OF CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-56.pdf">Form LRA 56</a></td>
</tr>
<tr class="row-58 even">
<td class="column-1">Form-LRA-57</td><td class="column-2">TRANSFER OF CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-57-TRANSFER-OF-CHARGE.pdf">Form -LRA-57</a></td>
</tr>
<tr class="row-59 odd">
<td class="column-1">Form-LRA-58 </td><td class="column-2">DISCHARGE OF CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-58.pdf">Form LRA 58</a></td>
</tr>
<tr class="row-60 even">
<td class="column-1">Form-LRA-59 </td><td class="column-2">PARTIAL DISCHARGE OF CHARGE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-59.pdf">Form LRA 59</a></td>
</tr>
<tr class="row-61 odd">
<td class="column-1">Form-LRA-60 </td><td class="column-2">TRANSFER PURSUANT TO PURCHASE BY CHARGEE WITH LEAVE OF COURT</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-60.pdf">Form LRA 60</a></td>
</tr>
<tr class="row-62 even">
<td class="column-1">Form-LRA-61 </td><td class="column-2">TRANSFER PURSUANT TO PURCHASE BY CHARGEE IN A PUBLIC AUCTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-61.pdf">Form LRA 61</a></td>
</tr>
<tr class="row-63 odd">
<td class="column-1">Form-LRA-62 </td><td class="column-2">LEASE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-62.pdf">Form LRA 62</a></td>
</tr>
<tr class="row-64 even">
<td class="column-1">Form-LRA-63 </td><td class="column-2">TRANSFR OF LEASE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-63.pdf">Form LRA 63</a></td>
</tr>
<tr class="row-65 odd">
<td class="column-1">Form-LRA-64 </td><td class="column-2">LEASE (Long Term)</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-64.pdf">Form LRA 64</a></td>
</tr>
<tr class="row-66 even">
<td class="column-1">Form-LRA-65 </td><td class="column-2">SURRENDER OF LEASE</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-65.pdf">Form LRA 65</a></td>
</tr>
<tr class="row-67 odd">
<td class="column-1">Form-LRA-66 </td><td class="column-2">APPLICATION FOR REGISTRATION OF AN INHIBITION ORDER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-66.pdf">Form LRA 66</a></td>
</tr>
<tr class="row-68 even" id="67">
<td class="column-1">Form-LRA-67 </td><td class="column-2">CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-67.pdf">Form LRA 67</a></td>
</tr>
<tr class="row-69 odd">
<td class="column-1">Form-LRA-68 </td><td class="column-2">NOTICE OF CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-68.pdf">Form LRA 68</a></td>
</tr>
<tr class="row-70 even">
<td class="column-1">Form-LRA-69 </td><td class="column-2">WITHDRAWAL OF CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-69.pdf">Form LRA 69</a></td>
</tr>
<tr class="row-71 odd">
<td class="column-1">Form-LRA-70 </td><td class="column-2">APPLICATION TO REMOVE CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-70.pdf">Form LRA 70</a></td>
</tr>
<tr class="row-72 even">
<td class="column-1">Form-LRA-71 </td><td class="column-2">NOTICE OF INTENTION TO REMOVE A CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-71.pdf">Form LRA 71</a></td>
</tr>
<tr class="row-73 odd">
<td class="column-1">Form-LRA-72 </td><td class="column-2">NOTICE OF OBJECTION TO REMOVAL OF A CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-72.pdf">Form LRA 72</a></td>
</tr>
<tr class="row-74 even">
<td class="column-1">Form-LRA-73 </td><td class="column-2">NOTICE FOR OF HEARING ON APPLICATION TO REMOVE CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-73.pdf">Form LRA 73</a></td>
</tr>
<tr class="row-75 odd">
<td class="column-1">Form-LRA-74 </td><td class="column-2">ORDER OF THE REGISTRAR ON AN APPLICATION TO REMOVE A CAUTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-74.pdf">Form LRA 74</a></td>
</tr>
<tr class="row-76 even">
<td class="column-1">Form-LRA-75 </td><td class="column-2">APPLICATION FOR A RESTRICTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-75.pdf">Form LRA 75</a></td>
</tr>
<tr class="row-77 odd">
<td class="column-1">Form-LRA-76 </td><td class="column-2">NOTICE OF INTENTION TO REGISTER REMOVE VARY A RESTRICTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-76.pdf">Form LRA 76</a></td>
</tr>
<tr class="row-78 even">
<td class="column-1">Form-LRA-77 </td><td class="column-2">NOTICE OF RESTRICTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-77.pdf">Form LRA 77</a></td>
</tr>
<tr class="row-79 odd">
<td class="column-1">Form-LRA-78 </td><td class="column-2">APPLICATION TO REMOVE OR VARY A RESTRICTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-78.pdf">Form LRA 78</a></td>
</tr>
<tr class="row-80 even">
<td class="column-1">Form-LRA-79 </td><td class="column-2">NOTICE OF VARIATION REMOVAL OF RESTRICTION</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-79.pdf">Form LRA 79</a></td>
</tr>
<tr class="row-81 odd">
<td class="column-1">Form-LRA-80 </td><td class="column-2">GRANT OF EASEMENT ANALOGOUS RIGHT</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-80.pdf">Form LRA 80</a></td>
</tr>
<tr class="row-82 even">
<td class="column-1">Form-LRA-81 </td><td class="column-2">CANCELLATION OF EASEMENT ANALOGOUS RIGHTS BY PERSON OCCUPYING DOMINANT LAND</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-81.pdf">Form LRA 81</a></td>
</tr>
<tr class="row-83 odd">
<td class="column-1">Form-LRA-82 </td><td class="column-2">CONSENT OF LESSEE OR LENDER ON CANCELLATION OF EASEMENT ANALOGOUS RIGHT BY THE PERSON OCCUPYING DOMINANT LAND</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-82.pdf">Form LRA 82</a></td>
</tr>
<tr class="row-84 even">
<td class="column-1">Form-LRA-83 </td><td class="column-2">APPLICATION FOR CANCELLATION OF EASEMENT ANALOGOUS RIGHTS BY PERSON OCCUPYING SERVIENT LAND</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-83.pdf">Form LRA 83</a></td>
</tr>
<tr class="row-85 odd">
<td class="column-1">Form-LRA-84 </td><td class="column-2">APPLICATION FOR OFFICIAL SEARCH</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-84.pdf">Form LRA 84</a></td>
</tr>
<tr class="row-86 even">
<td class="column-1">Form-LRA-85 </td><td class="column-2">CERTIFICATE OF OFFICIAL SEARCH</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-85.pdf">Form LRA 85</a></td>
</tr>
<tr class="row-87 odd">
<td class="column-1">Form-LRA-86 </td><td class="column-2">APPLICATION TO THE REGISTRAR FOR APPROVAL OF A DOCUMENT FOR USE WHERE NO FORM HAS BEEN PRESCRIBED</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-86.pdf">Form LRA 86</a></td>
</tr>
<tr class="row-88 even">
<td class="column-1">Form-LRA-87 </td><td class="column-2">APPLICATION TO RECTIFY THE REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-87.pdf">Form LRA 87</a></td>
</tr>
<tr class="row-89 odd">
<td class="column-1">Form-LRA-88 </td><td class="column-2">CONSENT TO RECTIFY THE REGISTER BY A COMPANY</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-88.pdf">Form LRA 88</a></td>
</tr>
<tr class="row-90 even">
<td class="column-1">Form-LRA-89 </td><td class="column-2">CONSENT TO RECTIFY THE REGISTER BY INDIVIDUAL</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-89.pdf">Form LRA 89</a></td>
</tr>
<tr class="row-91 odd">
<td class="column-1">Form-LRA-90 </td><td class="column-2">NOTICE OF RECTIFICATION OF REGISTER BY REGISTRAR</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-90.pdf">Form LRA 90</a></td>
</tr>
<tr class="row-92 even">
<td class="column-1">Form-LRA-91 </td><td class="column-2">NOTICE OF INTENTION TO RECTIFY REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-91.pdf">Form LRA 91</a></td>
</tr>
<tr class="row-93 odd">
<td class="column-1">Form-LRA-92 </td><td class="column-2">ORDER OF RECTIFICATION OF REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-92.pdf">Form LRA 92</a></td>
</tr>
<tr class="row-94 even">
<td class="column-1">Form-LRA-93 </td><td class="column-2">SUMMONS</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-93.pdf">Form LRA 93</a></td>
</tr>
<tr class="row-95 odd">
<td class="column-1">Form-LRA-94 </td><td class="column-2">APPLICATION FOR RECTIFICATION OF REGISTER PURSUANT TO A COURT ORDER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-94.pdf">Form LRA 94</a></td>
</tr>
<tr class="row-96 even">
<td class="column-1">Form-LRA-96 </td><td class="column-2">PRESENTATION ON OBJECTIONS TO THE CONVERSION LIST</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-96.pdf">Form LRA 96</a></td>
</tr>
<tr class="row-97 odd">
<td class="column-1">Form-LRA-97 </td><td class="column-2">APPLICATION FOR REPLACEMENT OF TITLE ISSUED FROM THE CLOSED REGISTER</td><td class="column-3"><a href="https://oldsite.lands.go.ke/wp-content/uploads/2018/08/Form-LRA-97.pdf">Form LRA 97</a></td>
</tr>
</tbody>
</table>
<!-- #tablepress-7 from cache -->

</div>
</div>
</div></div></div></div></div></div></div></div>
</div><!-- .entry-content -->
</article><!-- #post-855 -->    			</div>
            </main><!-- #main -->
</div><!-- #primary -->


    </div>
    <!-- #content -->
</div>
<!-- #page -->

       <!-- wraper_footer -->
       <footer class="footer">

        <section class="flex">
     
           <div class="box">
              <a href="tel:0723790846"><i class="fas fa-phone"></i><span>0723 790 846</span></a>
              <a href="tel:0750630368"><i class="fas fa-phone"></i><span>0750 630 368</span></a>
              <a href="mailto:colltreks3@gmail.com"><i class="fas fa-envelope"></i><span>colltreks3@gmail.com</span></a>
              <a href="https://maps.app.goo.gl/h52BbXRSdXWFZvSr7"><i class="fas fa-map-marker-alt"></i><span>Huduma Centre, Kericho - 2nd Floor</span></a>
              
            </div>
     
           <div class="box">
              <a href="home.php"><span>Home</span></a>
              <a href="about.php"><span>About</span></a>
              <a href="contact.php"><span>Contact</span></a>
              <!--<a href="services.php"><span>all services</span></a>-->
             
           </div>
         
          <div class="box">
           <a href="https://www.facebook.com/login/"><span>Facebook</span><i class="fab fa-facebook-f"></i></a>
           <a href="https://twitter.com/i/flow/login/"><span>Twitter</span><i class="fab fa-twitter"></i></a>
           <a href="https://lands.go.ke/"><span>Linkedin</span><i class="fab fa-linkedin"></i></a>
           <a href="https://www.instagram.com/accounts/login/"><span>Instagram</span><i class="fab fa-instagram"></i></a>
           
        </div>
        
        </section>
        <div class="credit">&copy; copyright@2023 | Collins K. Towett | <span>Treks Entertainment</span> | All rights reserved!</div>
     </footer>
<!-- wraper_footer -->
</html>