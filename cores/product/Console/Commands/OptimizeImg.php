<?php

namespace Product\Console\Commands;

use Illuminate\Console\Command;
use Product\Lib\Optimize\OptimizeProductImg;

class OptimizeImg extends Command
{
    protected $signature =
        'product:optimize-img';

    protected $description =
        'Reduce the size of product photos';

    public function handleCommand()
    {
        $optimizer = new OptimizeProductImg(
            config('product.img_quality')
        );
        $optimizer->handle();
    }
}
