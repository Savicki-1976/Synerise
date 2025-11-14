<?php
namespace Savicki\Synerise\Api\Event;

use Savicki\Synerise\Api\Entities\Event;
use Savicki\Synerise\Session;
use Savicki\Synerise\Api\Interfaces;
use Savicki\Synerise\Api\Helpers\HandleErrors;
use Savicki\Synerise\Api\Exceptions\TransportException;

class EventCreate implements Interfaces\Api
{

    const ENDPOINT = '/v4/events/custom';

    public function __construct(private Session $session)
    {
    }

    public function handle(Event $event): bool
    {
        $sessionClient = $this->session->client();

        try {
            $response = $sessionClient->request('POST', self::ENDPOINT, [
                'json' => $event->toArray()
            ]);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $message = HandleErrors::message($e);
            throw new TransportException('Request error: ' . $message, $e->getCode(), $e);
        }
        
        return true;
    }
}