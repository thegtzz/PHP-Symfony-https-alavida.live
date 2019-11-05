jQuery( document ).ready(function($) {
	'use strict';

	/**
	 * Tabs
	 */
	$( '.tabs-navigation a' ).on('click', function(e) {
		var href = $(this).attr('href');
		if (href.indexOf('#') == 0) {
			e.preventDefault();
			$(this).parent().addClass('active');
			$(this).parent().siblings().removeClass('active');
			var tab = $(this).attr('href');
	        $(this).closest('.tabs').find('.tab-content').not(tab).css('display', 'none');
			$(tab).fadeIn();
		}
	});

	/**
	 * Property gallery
	 */
	if ($( '.property-gallery-index' ).length !== 0 && $( '.property-gallery-preview' ).length !== 0) {
		$( '.property-gallery-index a' ).on('click', function() {
			$( this ).closest( 'ul' ).find( 'li' ).removeClass( 'active' );
			$( this ).closest( '.property-gallery' ).find( '.property-gallery-preview img' ).attr( 'src', $( this ).attr( 'rel' ) );
			$( this ).parent().addClass( 'active' );
		});
	}

	/**
	 * Sort form
	 */
	var sort_form = $( '#sort-form' );
	$( 'select' , sort_form ).change(function() {
		sort_form.submit();
	});

	/**
	 * Google Map
	 */
	var map = $( '#map' );

	if (map.length) {
		map.mapescape();

		var styles = map.data( 'styles' );

		$.ajax({
			url: '?properties-feed=true',
			success: function(markers) {
				map.google_map({
					geolocation: map.data('geolocation'),
					infowindow: {
						borderBottomSpacing: 0,
						height: 120,
						width: 424,
						offsetX: 48,
						offsetY: -87
					},
					center: {
						latitude: map.data( 'latitude' ),
						longitude: map.data( 'longitude' )
					},
					zoom: map.data( 'zoom' ),
					marker: {
						height: 56,
						width: 56
					},
					cluster: {
						height: 40,
						width: 40,
						gridSize: map.data( 'grid-size' )
					},
					styles: [{ "featureType": "administrative.locality", "elementType": "all", "stylers": [{ "hue": "#ff0200" }, { "saturation": 7 }, { "lightness": 19 }, { "visibility": "on" }] }, { "featureType": "administrative.locality", "elementType": "labels.text", "stylers": [{ "visibility": "on" }, { "saturation": "-3" }] }, { "featureType": "administrative.locality", "elementType": "labels.text.fill", "stylers": [{ "color": "#748ca3" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "hue": "#ff0200" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "simplified" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "hue": "#ff0200" }, { "saturation": "23" }, { "lightness": "20" }, { "visibility": "off" }] }, { "featureType": "poi.school", "elementType": "geometry.fill", "stylers": [{ "color": "#ffdbda" }, { "saturation": "0" }, { "visibility": "on" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "hue": "#ff0200" }, { "saturation": "100" }, { "lightness": 31 }, { "visibility": "simplified" }] }, { "featureType": "road", "elementType": "geometry.stroke", "stylers": [{ "color": "#f39247" }, { "saturation": "0" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "hue": "#008eff" }, { "saturation": -93 }, { "lightness": 31 }, { "visibility": "on" }] }, { "featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [{ "visibility": "on" }, { "color": "#ffe5e5" }, { "saturation": "0" }] }, { "featureType": "road.arterial", "elementType": "labels", "stylers": [{ "hue": "#bbc0c4" }, { "saturation": -93 }, { "lightness": -2 }, { "visibility": "simplified" }] }, { "featureType": "road.arterial", "elementType": "labels.text", "stylers": [{ "visibility": "off" }] }, { "featureType": "road.local", "elementType": "geometry", "stylers": [{ "hue": "#ff0200" }, { "saturation": -90 }, { "lightness": -8 }, { "visibility": "simplified" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "hue": "#e9ebed" }, { "saturation": 10 }, { "lightness": 69 }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "hue": "#e9ebed" }, { "saturation": -78 }, { "lightness": 67 }, { "visibility": "simplified" }] }],
					transparentMarkerImage: map.data( 'transparent-marker-image' ),
					transparentClusterImage: map.data( 'transparent-marker-image' ),
					markers: markers
				});
			}
		});
	}

	/**
	 * Simple map
	 */
	var simple_map = $( '#simple-map' );
	if (simple_map.length) {
		var styles = simple_map.data( 'styles' );

		simple_map.google_map({
			center: {
				latitude: simple_map.data( 'latitude' ),
				longitude: simple_map.data( 'longitude' )
			},
			zoom: simple_map.data( 'zoom' ),
			styles: styles,
			transparentMarkerImage: simple_map.data( 'transparent-marker-image' ),
			marker: {
				height: 56,
				width: 56
			},
			markers: [{
				latitude: simple_map.data( 'latitude' ),
				longitude: simple_map.data( 'longitude' ),
				marker_content: '<div class="simple-marker"></div>'
			}]
		});
	}

	/*
     * Submission form gateway proceed button toggler
     */
	$( ".payment-form input[id^='gateway-']" ).change(function() {
		var proceed = $( this ).data( 'proceed' );
		var form = $( this ).parents( 'form:first' );
		var submit = form.find( '[name="process-payment"]' );
		var info = form.find( '#non-proceed-info' );

		if ($( this ).is( ':checked' )) {
			if (proceed) {
				info.addClass( 'hidden' );
				submit.removeClass( 'hidden' );
			} else {
				info.removeClass( 'hidden' );
				submit.addClass( 'hidden' );
			}
		}
	}).change();

	/**
	 * Images colorbox
	 */
	$("a[href$='png'], a[href$='jpg']").not('.ignore-colorbox').colorbox({
		rel: $(this).attr('rel'),
		maxWidth: '90%',
		maxHeight: '90%'
	});

	/**
	 * Filter location select chain
	 */
	$("select[name=filter-sublocation]").each(function() {
		var closest_wrapper = $(this).closest('.tab-content');

		var wrapper_class = '';
		if(closest_wrapper.length) {
			wrapper_class = closest_wrapper.attr('class');
			wrapper_class = wrapper_class.replace('tab-content', '');
			wrapper_class = wrapper_class.replace('active', '');
			wrapper_class = wrapper_class.replace(' ', '');
			wrapper_class = '.' + wrapper_class + ' ';
		}

		var name = $(this).attr('name');
		var url = $(this).data('ajax-url');
		var ajax_action = $(this).data('ajax-action');
		var selected = $(this).data('selected');

		$(this).remoteChained({
			parents : wrapper_class + "select[name=filter-location]",
			url : url,
			extra: {
				'action': ajax_action,
				'selected': selected,
				'value_param': 'filter-location'
			},
			loading : "Loading..."
		});
	});

	$("select[name=filter-subsublocation]").each(function() {
		var closest_wrapper = $(this).closest('.tab-content');

		var wrapper_class = '';
		if(closest_wrapper.length) {
			wrapper_class = closest_wrapper.attr('class');
			wrapper_class = wrapper_class.replace('tab-content', '');
			wrapper_class = wrapper_class.replace('active', '');
			wrapper_class = wrapper_class.replace(' ', '');
			wrapper_class = '.' + wrapper_class + ' ';
		}

		var name = $(this).attr('name');
		var url = $(this).data('ajax-url');
		var ajax_action = $(this).data('ajax-action');
		var selected = $(this).data('selected');

		$(this).remoteChained({
			parents : wrapper_class + "select[name=filter-sublocation]",
			url : url,
			extra: {
				'action': ajax_action,
				'selected': selected,
				'value_param': 'filter-sublocation'
			},
			loading : "Loading..."
		});
	});
});
