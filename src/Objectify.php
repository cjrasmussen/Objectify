<?php

namespace cjrasmussen\Objectify;

class Objectify
{
	/**
	 * Convert an associative array into an object
	 *
	 * @param array $data
	 * @return object
	 * @throws \JsonException
	 */
	public static function toObject(array $data): object
	{
		if (count($data) === 0) {
			return (object)[];
		}

		return json_decode(json_encode($data, JSON_THROW_ON_ERROR), false, 512, JSON_THROW_ON_ERROR);
	}

	/**
	 * Convert an object into an associative array
	 *
	 * @param array|object $data
	 * @return array
	 * @throws \JsonException
	 */
	public static function toArray($data): array
	{
		return json_decode(json_encode($data, JSON_THROW_ON_ERROR), true, 512, JSON_THROW_ON_ERROR);
	}
}
