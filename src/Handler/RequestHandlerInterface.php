<?php
namespace App\Handler;
use Symfony\Component\HttpFoundation\Request;
interface RequestHandlerInterface
{
    public function handle(Request $request): void;
}