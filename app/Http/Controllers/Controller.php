<?php

namespace App\Http\Controllers;

use App\Http\Resources\BaseResource;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function resource($resource = [], $statusCode = 200, $header = [])
    {
        return response(new BaseResource($resource), $statusCode, $header);
    }

    protected function resourceData($data = [], $statusCode = 200, $header = [])
    {
        return $this->resource(['data' => $data], $statusCode, $header);
    }

    protected function resourceDataMsg($data = [], $msg = '', $statusCode = 200, $header = [])
    {
        return $this->resource([
            'data' => $data,
            'message' => $msg
        ], $statusCode, $header);
    }

    protected function resourceMsg($message = '', $statusCode = 200, $header = [])
    {
        return $this->resource(['message' => $message], $statusCode, $header);
    }
}
