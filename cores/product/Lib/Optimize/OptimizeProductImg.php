<?php

namespace Product\Lib\Optimize;

class OptimizeProductImg
{
    private int $quality;
    public function __construct(int $quality)
    {
        $this->quality = $quality;
    }

    public function handle()
    {
        dump('optimized ' . $this->quality );
    }
}
