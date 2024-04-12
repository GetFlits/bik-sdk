<?php

namespace Flits\Bik\API;
use Flits\Bik\BikProvider;

class InvokeFlow extends BikProvider {

    public $METHOD = "POST";

    function __construct($config) {
        parent::__construct($config);
    }

}
