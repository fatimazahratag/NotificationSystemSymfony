<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Handler\RequestHandlerInterface;
class NotificationController extends AbstractController
{
    private RequestHandlerInterface $emailRequestHandler;
    private RequestHandlerInterface $smsRequestHandler;
    private RequestHandlerInterface $whatsappRequestHandler;
    public function __construct(RequestHandlerInterface $emailRequestHandler, RequestHandlerInterface $smsRequestHandler, RequestHandlerInterface $whatsappRequestHandler)
    {
        $this->emailRequestHandler = $emailRequestHandler;
        $this->smsRequestHandler = $smsRequestHandler;
        $this->whatsappRequestHandler = $whatsappRequestHandler;
    }
    #[Route('/send', name: 'send_notification')]
    public function send(Request $request): Response
    {
        $this->emailRequestHandler->handle($request);
        $this->smsRequestHandler->handle($request);
        $this->whatsappRequestHandler->handle($request);
        return new Response('yeah, notification envoyée avec succès');
    }
}