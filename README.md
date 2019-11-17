# Chuck Norris Jokes

Create random chuck norris jokes.

[![Build Status](https://travis-ci.org/amacsmith/chuck-norris-jokes.svg?branch=master)](https://travis-ci.org/amacsmith/chuck-norris-jokes)

[![codecov](https://codecov.io/gh/amacsmith/chuck-norris-jokes/branch/master/graph/badge.svg)](https://codecov.io/gh/amacsmith/chuck-norris-jokes)

## Installation

Require using composer:

```bash
composer require amacsmith/chuck-norris-jokes
```

## Usage

```php
use AMacSmith\ChuckNorrisJokes\JokeFactory;

$jokeFactory = new JokeFactory();

$joke = $jokeFactory->getRandomJoke();

$jokes = $jokeFactory->getRandomJokes(10);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
