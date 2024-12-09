<?php

namespace Sys\Http;

class Request
{
    public string $uri;
    public string $method;
    public string $query_string;
    public float $time_float;
    public int $time;
}
