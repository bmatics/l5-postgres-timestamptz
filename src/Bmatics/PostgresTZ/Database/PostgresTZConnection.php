<?php
namespace Bmatics\PostgresTZ\Database;

use Bmatics\PostgresTZ\Database\Schema\Grammars\PostgresTZGrammar as SchemaGrammar;
use Illuminate\Database\PostgresConnection;

class PostgresTZConnection extends PostgresConnection
{
	protected function getDefaultSchemaGrammar()
	{
		return $this->withTablePrefix(new SchemaGrammar);
	}
}