<?php

use App\Controller\{
    Controller
};

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri_parse)
{

}

?>