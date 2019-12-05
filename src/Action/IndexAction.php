<?php declare(strict_types=1);

namespace App\Action;

use Symfony\Component\HttpFoundation\JsonResponse;

class IndexAction
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(['foo' => 'bar']);
    }
}
