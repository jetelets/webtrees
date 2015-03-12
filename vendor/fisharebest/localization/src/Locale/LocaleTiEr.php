<?php namespace Fisharebest\Localization;

/**
 * Class LocaleTiEr
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleTiEr extends LocaleTi {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryEr;
	}
}