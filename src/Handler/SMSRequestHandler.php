<?php
namespace App\Handler;
use Symfony\Component\HttpFoundation\Request;
class SMSRequestHandler implements RequestHandlerInterface
{
    public function handle(Request $request): void
    {
        dump('service SMSRequestHandler called with success,cool');
    }
}