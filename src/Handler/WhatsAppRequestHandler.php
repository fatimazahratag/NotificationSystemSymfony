<?php
namespace App\Handler;
use Symfony\Component\HttpFoundation\Request;
class WhatsAppRequestHandler implements RequestHandlerInterface
{
    public function handle(Request $request): void
    {
        dump(' service WhatsAppRequestHandler appelé avec succès');
    }
}