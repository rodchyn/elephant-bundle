<?php

namespace Rodchyn\Bundle\ElephantBundle\Cache;

use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;

class Warmer implements CacheWarmerInterface
{
    public function warmUp($cacheDir)
    {
        die($cacheDir);// do some sort of operations to "warm" your cache
    }

    public function isOptional()
    {
        return true;
    }
}
