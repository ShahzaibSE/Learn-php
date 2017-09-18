<!DOCTYPE html>
<html>

<head>
    <title>
        Array in pHp
    </title>
</head>

<body>

<?php

$arr = array(
//    'providers' =>
//        array (
            0 => 'Illuminate\\Auth\\AuthServiceProvider',
            1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
            2 => 'Illuminate\\Bus\\BusServiceProvider',
            3 => 'Illuminate\\Cache\\CacheServiceProvider',
            4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
            5 => 'Illuminate\\Cookie\\CookieServiceProvider',
            6 => 'Illuminate\\Database\\DatabaseServiceProvider',
            7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
            8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
            9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
            10 => 'Illuminate\\Hashing\\HashServiceProvider',
            11 => 'Illuminate\\Mail\\MailServiceProvider',
            12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
            13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
            14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
            15 => 'Illuminate\\Queue\\QueueServiceProvider',
            16 => 'Illuminate\\Redis\\RedisServiceProvider',
            17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
            18 => 'Illuminate\\Session\\SessionServiceProvider',
            19 => 'Illuminate\\Translation\\TranslationServiceProvider',
            20 => 'Illuminate\\Validation\\ValidationServiceProvider',
            21 => 'Illuminate\\View\\ViewServiceProvider',
            22 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
            23 => 'Laravel\\Tinker\\TinkerServiceProvider',
            24 => 'App\\Providers\\AppServiceProvider',
            25 => 'App\\Providers\\AuthServiceProvider',
            26 => 'App\\Providers\\EventServiceProvider',
            27 => 'App\\Providers\\RouteServiceProvider',
//        )
);

foreach($arr as $item => $val) {
    echo (string)$item." "."in"." ".(string)$val."<br/>";
}

echo '<br/>';

$Arr = array(
    'providers' =>
        array (
            0 => 'Illuminate\\Auth\\AuthServiceProvider',
            1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
            2 => 'Illuminate\\Bus\\BusServiceProvider',
            3 => 'Illuminate\\Cache\\CacheServiceProvider',
            4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
            5 => 'Illuminate\\Cookie\\CookieServiceProvider',
            6 => 'Illuminate\\Database\\DatabaseServiceProvider',
            7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
            8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
            9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
            10 => 'Illuminate\\Hashing\\HashServiceProvider',
            11 => 'Illuminate\\Mail\\MailServiceProvider',
            12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
            13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
            14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
            15 => 'Illuminate\\Queue\\QueueServiceProvider',
            16 => 'Illuminate\\Redis\\RedisServiceProvider',
            17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
            18 => 'Illuminate\\Session\\SessionServiceProvider',
            19 => 'Illuminate\\Translation\\TranslationServiceProvider',
            20 => 'Illuminate\\Validation\\ValidationServiceProvider',
            21 => 'Illuminate\\View\\ViewServiceProvider',
            22 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
            23 => 'Laravel\\Tinker\\TinkerServiceProvider',
            24 => 'App\\Providers\\AppServiceProvider',
            25 => 'App\\Providers\\AuthServiceProvider',
            26 => 'App\\Providers\\EventServiceProvider',
            27 => 'App\\Providers\\RouteServiceProvider',
        )
);

echo "<br/>";

foreach($Arr as $item => $collection) {
//    console.log($collection);
    foreach($collection as $collection => $element) {
        echo $element."<br/>";
    }
}

?>

</body>
</html>
