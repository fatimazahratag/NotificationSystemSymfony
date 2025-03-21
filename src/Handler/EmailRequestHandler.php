<?php
namespace App\Handler;
use Symfony\Component\HttpFoundation\Request;
class EmailRequestHandler implements RequestHandlerInterface
{
    public function handle(Request $request): void
    {
        dump('service EmailRequestHandler appelé avec success');
    }
}