https://packagist.org/packages/sizeg/yii2-jwt

composer require sizeg/yii2-jwt

'components' => [
    'jwt' => [
      'class' => 'sizeg\jwt\Jwt',
      'key'   => 'secret',
    ],
],