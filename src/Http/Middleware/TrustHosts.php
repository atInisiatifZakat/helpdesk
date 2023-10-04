<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\Middleware;

final class TrustHosts extends Middleware\TrustHosts
{
    public function hosts(): array
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
