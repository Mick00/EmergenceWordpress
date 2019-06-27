<?php

$blocs = glob( APP_APP_SETUP_DIR.'carbon-fields/gutenberg-block/*.php' );
foreach ( $blocs as $bloc ) {
	if ( ! is_file( $bloc ) ) {
		continue;
	}
	require_once $bloc;
}
