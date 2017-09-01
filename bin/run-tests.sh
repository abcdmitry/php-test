#!/usr/bin/env bash
cd "$( dirname "$0" )/../"
vendor/bin/phpunit --bootstrap index.php tests/IndexTest