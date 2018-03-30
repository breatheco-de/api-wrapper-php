<?php

    require('vendor/autoload.php');
    require('./BreatheCodeAPI.php');
    
    use \BreatheCode\BCWrapper;
    BCWrapper::init($clientId, $clientSecret, $host, true);
    BCWrapper::setToken('d69eae97e7f874c6cdf46de524178e8ca5f1583e');
    
    $student = BCWrapper::getStudent(['student_id'=>3]);
    print_r($student); die();