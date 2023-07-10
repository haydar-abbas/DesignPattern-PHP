<?php

namespace src;

class Proxy implements ISP {

    private $blockedSites = ['facebook', 'tiktok'];
    private ISP $isp;

    public function __construct(ISP $isp) {
        $this->isp = $isp;
    }

    public function serveSite(String $domain) {
        
        echo "[" . date('Y-m-d h:i:s') . "] -> $domain Requested \n";

        if (in_array($domain, $this->blockedSites)) {
            return "This site is bloked!";
        }
        return $this->isp->serveSite($domain);
    }

}
