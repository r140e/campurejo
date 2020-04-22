<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Contentful\Delivery\Client as DeliveryClient;

class StaticController extends Controller
{
    private $client;

    public function __construct(DeliveryClient $client)
    {
        $this->client = $client;
    }

    public function kak()
    {
        $p1 = $this->client->getEntry('52z5cDQ24qMIR0WXwUvsL9');
        $p2 = $this->client->getEntry('9IFeBA8A6Epw1ivaONIHQ');
        if (!$p1 | !$p2) {
            abort(404);
        }

        return view('oxygen/kak', [
            'p1' => $p1,
            'p2' => $p2,
            'renderer'  => new \Contentful\RichText\Renderer(),
        ]);
    }
}