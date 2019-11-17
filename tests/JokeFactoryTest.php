<?php

/** @noinspection ALL */

namespace AMacSmith\ChuckNorrisJokes\Tests;

use AMacSmith\ChuckNorrisJokes\JokeFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response(200, [], '{
                "type": "success",
                "value": {
                    "id": 359,
                    "joke": "Chuck Norris is his own line at the DMV.",
                    "categories": []
                }
            }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris is his own line at the DMV.', $joke);
    }

    /** @test */
    public function it_returns_the_number_of_jokes_requested()
    {
        $jokes = new JokeFactory();
        $jokes = $jokes->getRandomJokes(5);

        $this->assertCount(5, $jokes);

        foreach ($jokes as $joke) {
            $this->assertStringContainsString('Chuck Norris', $joke);
        }
    }

    /** @test */
    public function the_number_of_jokes_requested_cant_be_negative()
    {
        $this->expectExceptionCode(500);
        $this->expectErrorMessage('getRandomJokes requires a integer greater than 0. -5 was used for $count argument.');

        $jokes = new JokeFactory();
        $jokes = $jokes->getRandomJokes(-5);
    }
}
