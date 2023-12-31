<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware;

final class PreventRequestsDuringMaintenance extends Middleware\PreventRequestsDuringMaintenance
{
    protected $except = [];
}
