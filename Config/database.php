<?php

return array
(
    'default' => array
    (
        'type'       => 'MySQLi',
        'connection' => array(
            /**
             * The following options are available for MySQL:
             *
             * string   hostname     server hostname, or socket
             * string   database     database name
             * string   username     database username
             * string   password     database password
             * boolean  persistent   use persistent connections?
             * array    variables    system variables as "key => value" pairs
             *
             * Ports and sockets may be appended to the hostname.
             */
            'hostname'   => '91.206.30.13',
//            'hostname'   => 'localhost',
            // 'database'   => 'hochu-db',
            // 'username'   => 'hochu-db',
            // 'password'   => '3F9nvHbL',
            
            'database'   => 'hochu_db',
            'username'   => 'hochu_db',
            'password'   => 'E1q6S8g6',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
);
