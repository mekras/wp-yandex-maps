<?php
/**
 * Подготовка клиентской части плагина
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_shortcode(
	'wp-yandex-map',
	function ( $atts ) {
		$args = shortcode_atts(
			array(
				'sid'    => null,
				'width'  => '800',
				'height' => '600',
				'class'  => 'wp-ymaps'
			),
			$atts
		);

		$sid    = $args['sid'];
		$width  = $args['width'];
		$height = $args['height'];
		$class  = $args['class'];

		return sprintf(
			'<div class="%4$s" style="width: %2$dpx; height: %3$dpx; background: ' .
			'url(https://api-maps.yandex.ru/services/constructor/1.0/static/?sid=' .
			'%1$s&amp;width=%2$d&amp;height=%3$d&amp;lang=ru_RU&amp;sourceType=constructor) ' .
			'no-repeat;"><script src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=' .
			'%1$s&amp;width=%2$d&amp;height=%3$d&amp;lang=ru_RU&amp;sourceType=constructor" ' .
			'type="text/javascript" charset="utf-8"></script></div>',
			$sid,
			$width,
			$height,
			$class
		);
	}
);
