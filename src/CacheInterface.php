<?php

namespace Mihalyfij\Cache;

interface CacheInterface
{
    public function get($key);
    public function set($key, $value);
    public function has($key);
}