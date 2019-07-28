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

class Time
{
	private static $yearSeconds = 31536000;
	private static $monthSeconds = 2592000;
	private static $daySeconds = 86400;
	private static $hourSeconds = 3600;
	private static $minuteSeconds = 60;

	const SECONDS = 1;
	const MINUTES = 2;
	const HOURS = 3;
	const DAYS = 4;
	const WEEKS = 5;
	const MONTHS = 6;
	const YEARS = 7;

	public static function fromSeconds(int $seconds): array
	{
		if (self::$yearSeconds < $seconds) {
			$value = (int)round($seconds / self::$yearSeconds);
			$units = self::YEARS;
		} elseif (self::$monthSeconds < $seconds) {
			$value = (int)round($seconds / self::$monthSeconds);
			$units = self::MONTHS;
		} elseif (self::$daySeconds < $seconds) {
			$value = (int)round($seconds / self::$daySeconds);
			$units = self::DAYS;
		} elseif (self::$hourSeconds < $seconds) {
			$value = (int)round($seconds / self::$hourSeconds);
			$units = self::HOURS;
		} elseif (self::$minuteSeconds < $seconds) {
			$value = (int)round($seconds / self::$minuteSeconds);
			$units = self::MINUTES;
		} else {
			$value = $seconds;
			$units = self::SECONDS;
		}

		return [$value, $units];
	}
}
