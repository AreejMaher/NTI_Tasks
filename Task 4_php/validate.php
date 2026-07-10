<?php
$validations = [
    'userName' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'errors' => 'Invalid User Name | username should start with capital and be between 3 to 9 characters',
        'my_options' => ['options' => ['regexp' => '/^[A-Z][a-z]{2,8}/'] ]
    ],
    'email' => [
        'filter' => FILTER_VALIDATE_EMAIL,
        'errors' => 'Invalid Email',
    ],
    'password' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'errors' => 'Invalid password | password should be between 3 to 9 characters',
        'my_options' => ['options' => ['regexp' => '/[A-Za-z0-9]{3,9}/'] ]
    ],
    'phoneNumber' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'errors' => 'Invalid Phone Number | The Number should start with country key',
        'my_options' => ['options' => ['regexp' => '/^\+?[1-9][0-9]{7,14}$/'] ]  //international phone number validation
    ],
    'facebookURL' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'errors' => 'Invalid Facebook account URL',
        'my_options' => ['options' => ['regexp' => '/(?:https?:\/\/)?(?:www\.)?(mbasic.facebook|m\.facebook|facebook|fb)\.(com|me)\/(?:(?:\w\.)*#!\/)?(?:pages\/)?(?:[\w\-\.]*\/)*([\w\-\.]*)/'] ]
    ],
    'twitterURL' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'errors' => 'Invalid Twitter account URL',
        'my_options' => ['options' => ['regexp' => '/^(https?:\/\/)?(www\.)?(twitter|x)\.com\/([a-zA-Z0-9_]{1,15})(\/)?$/'] ]
    ],
    'instagramURL' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'errors' => 'Invalid Instagram account URL',
        'my_options' => ['options' => ['regexp' => '/(?:(?:http|https):\/\/)?(?:www.)?(?:instagram.com|instagr.am|instagr.com)\/(\w+)/'] ]
    ],
]
?>