<?php

$settings['hash_salt'] = getenv('TUGBOAT_REPO_ID');

$databases['default']['default'] = array (
  'database' => 'tugboat',
  'username' => 'tugboat',
  'password' => 'tugboat',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
  'init_commands' => [
    'isolation_level' => 'SET SESSION transaction_isolation=\'READ-COMMITTED\'',
  ],
);

$settings['config_sync_directory'] = '../config/sync';

$config['dubbot.settings']['embed_key'] = getenv('DUBBOT_EMBED_KEY');

$settings['trusted_host_patterns'] = [
  '^tugboatqa\.com$',
  '^.+\.tugboatqa\.com$',
];
