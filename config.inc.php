addServer(array (
  'host' => '数据库地址',
  'user' => '数据库用户名',
  'password' => '数据库密码',
  'charset' => 'utf8mb4',
  'port' => '3306',
  'database' => '数据库昵称',
  'engine' => 'MyISAM',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);
