<?php

namespace src;

class Zain implements ISP {

    public function serveSite(String $domain) {
        return "https://$domain.com";
    }

}
