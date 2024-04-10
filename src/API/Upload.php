<?php

namespace Flits\Bik\API;
use Flits\Bik\BikProvider;

class Upload extends BikProvider {

    public $METHOD = "POST";
    public $URL = 'create';

    function __construct($config) {
        parent::__construct($config);
    }

}
