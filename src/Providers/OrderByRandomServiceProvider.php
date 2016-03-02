<?php

namespace Kevinsimard\BuilderMacros\Providers;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\ServiceProvider;

class OrderByRandomServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        Builder::macro('orderByRandom', function () {
            $randomFunctions = [
                'mysql' => 'RAND()',
                'pgsql' => 'RANDOM()',
                'sqlite' => 'RANDOM()',
                'sqlsrv' => 'NEWID()',
            ];

            $driver = $this->getConnection()->getDriverName();

            return $this->orderByRaw($randomFunctions[$driver]);
        });
    }
}
