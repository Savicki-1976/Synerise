<?php
namespace Savicki\Synerise\Api\Bags;

use Savicki\Synerise\Session;
use Savicki\Synerise\Api\Interfaces;
use Savicki\Synerise\Api\Collections\Collection;
use Savicki\Synerise\Api\Exceptions\TransportException;
use Savicki\Synerise\Api\Helpers\HandleErrors;

class ItemsUpdate implements Interfaces\Api
{
    const ENDPOINT = '/catalogs/bags/{{catalogId}}/items/batch';

    public function __construct(private Session $session)
    {
    }

    public function handle(string $catalogId, Collection $items): bool
    {
        $sessionClient = $this->session->client();

        try {
            $response = $sessionClient->request('POST', $this->endpoint($catalogId), [
                'json' => $items->toArray()
            ]);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $message = HandleErrors::message($e);
            throw new TransportException('Request error: ' . $message, $e->getCode(), $e);
        }

        return true;
    }

    private function endpoint(string $catalogId): string
    {
        return str_replace('{{catalogId}}', $catalogId, self::ENDPOINT);
    }

}