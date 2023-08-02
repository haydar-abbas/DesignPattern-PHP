<?php

namespace src;

interface ISP
{
    function serveSite(String $domain): string;
}
