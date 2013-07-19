<?php

namespace Rodchyn\Bundle\ElephantBundle\Cache;

use Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface;

class Clearer implements CacheClearerInterface
{
    public function clear($cacheDir)
    {
        die('clear your cache');
    }

}
