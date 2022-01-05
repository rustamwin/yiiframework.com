<?php
return [
    // if you develop yiiframework.com in a subdirectory under localhost
    // and not on a separate host name, enter the baseUrl here
//    'api.baseUrl' => '/doc/api',
//    'guide.baseUrl' => '/doc/guide',
//    'blogtut.baseUrl' => '/doc/blog',

    'components.db' => [
        'class' => 'yii\db\Connection',
        'charset' => 'utf8',

        // adjust DB credentials to your needs
        'dsn' => 'mysql:host=mariadb;dbname=yiiframeworkcom',
        'username' => 'yiiframeworkcom',
        'password' => 'yiiframeworkcom',
    ],

    'components.elasticsearch' => [
        'class' => yii\elasticsearch\Connection::class,
        'nodes' => [
            ['http_address' => 'elasticsearch:9200'],
            // configure more hosts if you have a cluster
        ],
    ],

    'authclients' => [
        'github' => [
            'class' => 'yii\authclient\clients\GitHub',
            'scope' => 'user:email',

            // register a new application on Github and enter client secrets here
            'clientId' => '',
            'clientSecret' => '',
        ],
    ],

    'siteAbsoluteUrl' => 'http://local.yiiframework.com',

    /**
     * @see https://apps.twitter.com/app/new
     *
     * After creating an app you need to fill accessToken and accessTokenSecret:
     *
     * Open App -> Keys and Access Tokens -> You Access Token -> Create my access token
     */
    'twitter.consumerKey' => '',
    'twitter.consumerSecret' => '',
    'twitter.accessToken' => '',
    'twitter.accessTokenSecret' => '',

    // configure these to enable proxying external images through an nginx content filter
//    'image-proxy' => 'https://user-content.yiiframework.com',
//    'image-proxy-secret' => '',

];
