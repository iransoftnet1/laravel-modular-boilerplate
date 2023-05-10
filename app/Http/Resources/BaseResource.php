<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use stdClass;

class BaseResource extends JsonResource
{
    protected $data, $message, $error_message, $errors, $count;

    public function __construct($resource)
    {
        parent::__construct($resource);

        $this->data = $this['data'] ?? new stdClass();
        $this->count = $this['count'] ?? null;
        $this->message = $this['message'] ?? null;
        $this->error_message = $this['error_message'] ?? null;
        $this->errors = $this['errors'] ?? null;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "data" => $this->data,
            'message' => $this->message,
            'error' => [
                'message' => $this->error_message,
                'errors' => $this->errors
            ]
        ];
    }
}
