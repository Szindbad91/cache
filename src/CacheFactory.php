<?php

namespace Mihalyfij\Cache;

use Mihalyfij\Cache\Types\InMemoryCache;

class CacheFactory
{
    public function create(): CacheInterface {
        return new InMemoryCache();
    }
}