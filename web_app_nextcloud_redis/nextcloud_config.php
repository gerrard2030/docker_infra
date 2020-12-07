<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'memcache.local' => '\OC\Memcache\APCu',
  'redis' => array(
   'host' => 'redis',
   'port' => 6379,
   ),
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocil152605ib',
  'passwordsalt' => 'CUIlq4bxeec1j+Z1XxbzIPsTKh/V6N',
  'secret' => 'k/KOzEnxVRqev+F1m8v/88Jwa7bOE4h093XOFlRW79LLazBI',
  'trusted_domains' =>
  array (
    0 => 'pan.titans.com',
    1 => '192.168.0.249',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '20.0.1.1',
  'overwrite.cli.url' => 'http://192.168.0.249',
  'dbname' => 'nextcloud',
  'dbhost' => 'db:3306',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '3nvisi0n!',
  'installed' => true,
  'ldapIgnoreNamingRules' => false,
  'ldapProviderFactory' => 'OCA\\User_LDAP\\LDAPProviderFactory',
  'mail_from_address' => 'ticket_titans',
  'mail_smtpmode' => 'smtp',
  'mail_sendmailmode' => 'smtp',
  'mail_domain' => '163.com',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => 'smtp.163.com',
  'mail_smtpname' => 'ticket_titans@163.com',
  'mail_smtppassword' => 'zhangjian1986',
  'mail_smtpport' => '25',
  'maintenance' => false,
  'theme' => '',
  'loglevel' => 2,
  'onlyoffice' =>
  array (
    'DocumentServerUrl' => '/ds-vpath/',
    'DocumentServerInternalUrl' => 'http://onlyoffice-document-server/',
    'StorageUrl' => 'http://nginx-server/',
  ),
  'has_rebuilt_cache' => true,
  'app_install_overwrite' =>
  array (
    0 => 'onlyoffice',
  ),
);
