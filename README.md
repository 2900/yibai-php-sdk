# 亿佰云通讯 sdk

---

 - 调用方法
 
```php
<?php

require_once('YibaiSdk.php');

$client = new YibaiClient('https://sms.100sms.cn/api', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

try {
    $response = $client->smsBatchSubmit(array(
        new SmsSubmit('186xxxxxxxx', '【亿佰云通讯】您的验证码是：111111'),
        new SmsSubmit('187xxxxxxxx', '【亿佰云通讯】您的验证码是：222222')
    ));
    print_r($response);
} catch (YibaiApiException $e) {
    print_r('YibaiApiException, code: ' . $e->getCode() . ', message: '. $e->getMessage());
} catch (Exception $e) {
    print_r('Exception. message: ' . $e->getMessage());
}

```

# 注意事项
 - PhpSmsApiSample.php为非sdk调用示例,仅供测试,实际使用推荐sdk调用
 - 详细api文档请参考https://www.100sms.cn/api1.0/document
