<?php

namespace src;

class Zain implements ISP
{
    public function serveSite(String $domain): string
    {
        return "https://$domain.com\n";
    }
}
