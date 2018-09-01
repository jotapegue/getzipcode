<?php

namespace GetZipCode\GetAddress;

class GetAddress {

    protected $url;
    
    public function getUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    
    public function getParams($params)
    {
        $this->url = $this->url . $params;
        return $this;
    }

    public function getType($type = 'json')
    {
        $this->url = $this->url . "/" . $type;
        return $this;
    }

    public function get()
    {
        return json_decode(file_get_contents($this->url));
    }
}