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

// Data units: https://en.wikipedia.org/wiki/Orders_of_magnitude_(data)
class Data
{
	// These are the IEC units: https://en.wikipedia.org/wiki/Binary_prefix
	private static $tebibyteBytes = 1099511627776;
	private static $gibibyteBytes = 1073741824;
	private static $mebibyteBytes = 1048576;
	private static $kibibyteBytes = 1024;

	const BYTE = 'B';
	const KIBIBYTE = 'KiB';
	const MEBIBYTE = 'MiB';
	const GIBIBYTE = 'GiB';
	const TEBIBYTE = 'TiB';
	const PEBIBYTE = 'PiB';
	const EXBIBYTE = 'EiB';
	const ZEBIBYTE = 'ZiB';
	const YOBIBYTE = 'YiB';

	public static function fromBytes(int $bytes)
	{
		if (self::$tebibyteBytes < $bytes) {
			$value = (int)round($bytes / self::$tebibyteBytes);
			$units = self::TEBIBYTE;
		} elseif (self::$gibibyteBytes < $bytes) {
			$value = (int)round($bytes / self::$gibibyteBytes);
			$units = self::GIBIBYTE;
		} elseif (self::$mebibyteBytes < $bytes) {
			$value = (int)round($bytes / self::$mebibyteBytes);
			$units = self::MEBIBYTE;
		} elseif (self::$kibibyteBytes < $bytes) {
			$value = (int)round($bytes / self::$kibibyteBytes);
			$units = self::KIBIBYTE;
		} else {
			$value = $bytes;
			$units = self::BYTE;
		}

		return [$value, $units];
	}
}
