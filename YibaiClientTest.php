<?php

$client = new YibaiClient('https://xxxxxxxxx/api', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

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
