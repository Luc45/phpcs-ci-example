<?php
/**
 * Plugin name: Foo
 */

$fooBar = 'foo';

if ( $fooBar === 'baz' ) {
	echo esc_html( $fooBar );
}
