<?php

namespace Mihalyfij\Cache\Types;

use Mihalyfij\Cache\CacheInterface;

class InMemoryCache implements CacheInterface
{
    private $store = [];

    public function get($key)
    {
        return $this->store[$key] ?? null;
    }

    public function set($key, $value)
    {
        $this->store[$key] = $value;
    }

    public function has($key)
    {
        return isset($this->store[$key]);
    }
}