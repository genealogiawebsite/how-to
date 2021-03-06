<?php

namespace LaravelEnso\HowTo\Http\Controllers\Video;

use Illuminate\Routing\Controller;
use LaravelEnso\HowTo\Models\Video;

class Show extends Controller
{
    public function __invoke(Video $video)
    {
        return $video->inline();
    }
}
