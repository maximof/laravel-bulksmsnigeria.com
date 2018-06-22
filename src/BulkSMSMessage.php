<?php

namespace Toonday\BulkSMSNigeria;

use Illuminate\Support\Facades\Config;

class BulkSMSMessage
{
    public $from;

    public $body;

    public $type = "sms";

    public function __construct($body = "")
    {
        $this->messaege = $body;
    }

    public function body($body)
    {
        $this->body = $body;

        return $this;
    }

    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    public function type($type)
    {
        $this->type = $type;
    }
}
