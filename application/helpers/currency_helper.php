
<?php

if (!function_exists('idr_format')) {
	/**
	* Format a number as Indonesian Rupiah
	*
	* @param float|int $value
	* @return string
	*/
	function idr_format($value) {
		return 'Rp ' . number_format($value, 0, ',', '.');
	}
}

if (!function_exists('remove_idr_format')) {
	/**
	* Remove Indonesian Rupiah format from a string
	*
	* @param string $value
	* @return string
	*/
	function remove_idr_format($value) {
		return preg_replace('/[Rp.]/', '', $value);
	}
}
