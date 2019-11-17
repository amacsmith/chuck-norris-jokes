<?php

namespace AMacSmith\ChuckNorrisJokes;

use Exception;
use GuzzleHttp\Client;
use RuntimeException;

class JokeFactory
{
    const JOKE_API_ENDPOINT = 'http://api.icndb.com/jokes/random';
    const JOKES_API_ENDPOINT = 'http://api.icndb.com/jokes/random/';

    /**
     * JokeFactory constructor.
     * @param Client $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @return mixed
     */
    public function getRandomJoke()
    {
        $response = $this->client->get(self::JOKE_API_ENDPOINT);

        return json_decode($response->getBody()->getContents())->value->joke;
    }

    /**
     * @param int $count
     * @return mixed
     * @throws Exception
     */
    public function getRandomJokes(int $count = 1)
    {
        if ($count <= 0) {
            throw new RuntimeException("getRandomJokes requires a integer greater than 0. $count was used for \$count argument.", 500);
        }

        $endpoint = self::JOKES_API_ENDPOINT.$count;

        $response = $this->client->get($endpoint);

        $jokes = json_decode($response->getBody()->getContents())->value;

        return array_column($jokes, 'joke');
    }
}
