<?php

namespace MediaWiki\Extension\EmergencyBadge;

use MediaWiki\Hook\BeforePageDisplayHook;

class Hooks implements BeforePageDisplayHook {

	/**
	 * Load the emergency badge module on every page.
	 * The module's skipFunction handles client-side filtering by content area.
	 *
	 * @inheritDoc
	 */
	public function onBeforePageDisplay( $out, $skin ): void {
		$out->addModules( 'ext.emergencyBadge' );
	}
}
