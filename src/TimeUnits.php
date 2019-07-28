<?php

/**
 * Copyright (C) 2018 Spencer Mortensen
 *
 * This file is part of Human.
 *
 * Human is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Human is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Human. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Spencer Mortensen <spencer@lens.guide>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL-3.0
 * @copyright 2019 Spencer Mortensen
 */

namespace SpencerMortensen\Human;

use Exception;

class TimeUnits
{
	// Language codes: https://en.wikipedia.org/wiki/ISO_639-3
	public static function get(string $language, int $value, int $units)
	{
		if ($language !== 'eng') {
			throw new Exception('The language ' . var_export($language, true) . ' is not yet supported.');
		}

		switch ($units) {
			case Time::SECONDS:
				return ($value === 1) ? 'second' : 'seconds';

			case Time::MINUTES:
				return ($value === 1) ? 'minute' : 'minutes';

			case Time::HOURS:
				return ($value === 1) ? 'hour' : 'hours';

			case Time::DAYS:
				return ($value === 1) ? 'day' : 'days';

			case Time::WEEKS:
				return ($value === 1) ? 'week' : 'weeks';

			case Time::MONTHS:
				return ($value === 1) ? 'month' : 'months';

			default:
				return ($value === 1) ? 'year' : 'years';
		}
	}
}
