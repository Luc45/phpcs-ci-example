<?php
/**
 * Plugin name: Foo
 */

$foo = 'foo';

if ( $foo === 'baz' ) {
	echo esc_html($foo);
}
