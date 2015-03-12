<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSwKe
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSwKe extends LocaleSw {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryKe;
	}
}