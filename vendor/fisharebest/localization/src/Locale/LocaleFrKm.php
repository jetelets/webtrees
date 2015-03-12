<?php namespace Fisharebest\Localization;

/**
 * Class LocaleFrKm
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleFrKm extends LocaleFr {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryKm;
	}
}