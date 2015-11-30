<?php
namespace Bmatics\PostgresTZ\Database\Query\Grammars;

use Illuminate\Database\Query\Grammars\PostgresGrammar;

class PostgresTZGrammar extends PostgresGrammar
{
    /**
     * Get the format for database stored dates.
     *
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:sP';
    }
}