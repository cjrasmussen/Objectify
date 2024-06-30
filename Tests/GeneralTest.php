<?php

use cjrasmussen\Objectify\Objectify;
use PHPUnit\Framework\TestCase;

class GeneralTest extends TestCase
{
	public function testToObject(): void
	{
		$expected = (object)[];
		$input = [];
		$output = Objectify::toObject($input);
		$this->assertEquals($expected, $output);

		$expected = (object)[
			'foo' => 'bar',
		];
		$input = [
			'foo' => 'bar',
		];
		$output = Objectify::toObject($input);
		$this->assertEquals($expected, $output);

		$expected = (object)[
			'foo' => 'bar',
			'baz' => [
				'one',
				'two',
				'three',
			],
		];
		$input = [
			'foo' => 'bar',
			'baz' => [
				'one',
				'two',
				'three',
			],
		];
		$output = Objectify::toObject($input);
		$this->assertEquals($expected, $output);

		$expected = (object)[
			'foo' => 'bar',
			'baz' => (object)[
				'one' => 1,
				'two' => 2,
				'three' => 3,
			],
		];
		$input = [
			'foo' => 'bar',
			'baz' => [
				'one' => 1,
				'two' => 2,
				'three' => 3,
			],
		];
		$output = Objectify::toObject($input);
		$this->assertEquals($expected, $output);
	}

	public function testToArray(): void
	{
		$expected = [];
		$input = (object)[];
		$output = Objectify::toArray($input);
		$this->assertEquals($expected, $output);

		$expected = [
			'foo' => 'bar',
		];
		$input = (object)[
			'foo' => 'bar',
		];
		$output = Objectify::toArray($input);
		$this->assertEquals($expected, $output);

		$expected = [
			'foo' => 'bar',
			'baz' => [
				'one',
				'two',
				'three',
			],
		];
		$input = (object)[
			'foo' => 'bar',
			'baz' => [
				'one',
				'two',
				'three',
			],
		];
		$output = Objectify::toArray($input);
		$this->assertEquals($expected, $output);

		$expected = [
			'foo' => 'bar',
			'baz' => [
				'one' => 1,
				'two' => 2,
				'three' => 3,
			],
		];
		$input = (object)[
			'foo' => 'bar',
			'baz' => (object)[
				'one' => 1,
				'two' => 2,
				'three' => 3,
			],
		];
		$output = Objectify::toArray($input);
		$this->assertEquals($expected, $output);
	}
}
