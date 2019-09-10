composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
/path/to/php-bin/php /path/to/yii-application/init
创建一个新的数据库，并相应地调整 common/config/main-local.php 中的 components['db'] 配置。
打开控制台终端，执行迁移命令 /path/to/php-bin/php /path/to/yii-application/yii migrate.

php yii migrate
composer update
php yii swoole/start

var_dump、echo都是输出到控制台，不方便调试。可以使用\feehi\swoole\Util::dump()，输出数组、对象、字符串、布尔值到浏览器

https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide-zh-CN/README.md
https://github.com/liufee/yii2-swoole

--------

