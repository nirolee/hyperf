<?php

return [
    'default' => [
        'connect_timeout' => -1,
        'send_timeout' => -1,
        'recv_timeout' => -1,
        'client_id' => '',
        'max_write_attempts' => 3,
        'brokers' => [
            '127.0.0.1:9092',
        ],
        'bootstrap_server' => '127.0.0.1:9092',
        'update_brokers' => true,
        'acks' => 0,
        'producer_id' => -1,
        'producer_epoch' => -1,
        'partition_leader_epoch' => -1,
        'interval' => 0,
        'protocols' => [],
        'session_timeout' => 60,
        'rebalance_timeout' => 60,
        'partitions' => [0],
        'replica_id' => -1,
        'rack_id' => '',
        'is_auto_create_topic' => true,
        'pool' => [
            'min_connections' => 1,
            'max_connections' => 10,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => 60.0,
        ],
    ],
];