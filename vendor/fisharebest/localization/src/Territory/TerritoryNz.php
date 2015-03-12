<?php namespace Fisharebest\Localization;

/**
 * Class Territory - Representation of the territory NZ - New Zealand.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryNz extends Territory {
	/** {@inheritdoc} */
	public function code() {
		return 'NZ';
	}

	/** {@inheritdoc} */
	public function firstDay() {
		return 0;
	}
}