<?php
namespace Bmatics\PostgresTZ\Database;

use Bmatics\PostgresTZ\Database\Schema\Grammars\PostgresTZGrammar as SchemaGrammar;
use Bmatics\PostgresTZ\Database\Query\Grammars\PostgresTZGrammar as QueryGrammar;
use Illuminate\Database\PostgresConnection;

class PostgresTZConnection extends PostgresConnection
{
	protected function getDefaultSchemaGrammar()
	{
		return $this->withTablePrefix(new SchemaGrammar);
	}

	protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar);
    }
}