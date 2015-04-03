<?php
namespace Bmatics\PostgresTZ\Database\Schema\Grammars;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Grammars\PostgresGrammar;

class PostgresTZGrammar extends PostgresGrammar
{
	protected function typeDateTime(Fluent $column)
	{
		return 'timestamp(0) with time zone';
	}

	protected function typeTime(Fluent $column)
	{
		return 'time(0) with time zone';
	}

	protected function typeTimestamp(Fluent $column)
	{
		return 'timestamp(0) with time zone';
	}
}