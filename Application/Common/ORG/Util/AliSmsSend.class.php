<?php

namespace Common\ORG\Util;

//use think\Validate;

class AliSmsSend
{

//    public static $sms_config = [
//        'appKey' => '23590077',//阿里大于APPKEY
//        'secretKey' => 'a3bce5933073872d7c9fed03728a7635',//阿里大于secretKey
//        'FreeSignName' => '能力',//短信签名
//    ];

    public function sms($data = [])
    {
        $sms_config = [
            'appKey'    => C('Ali.appKey','23590077'),//阿里大于APPKEY
            'secretKey' => C('Ali.secretKey','a3bce5933073872d7c9fed03728a7635'),//阿里大于secretKey
            'FreeSignName' => C('Ali.FreeSignName','能力'),//短信签名
        ];
//        $validate = new Validate([
//            ['param', 'require|array', '参数必填|参数必须为数组'],
//            ['mobile', 'require|/1[34578]{1}\d{9}$/', '手机号错误|手机号错误'],
//            ['template', 'require', '模板id错误'],
//        ]);
//        if (!$validate->check($data)) {
//            return $validate->getError();
//        }
        define('TOP_SDK_WORK_DIR', CACHE_PATH . 'sms_tmp/');
        define('TOP_SDK_DEV_MODE', false);
        vendor('alidayu.TopClient');
        vendor('alidayu.AlibabaAliqinFcSmsNumSendRequest');
        vendor('alidayu.RequestCheckUtil');
        vendor('alidayu.ResultSet');
        vendor('alidayu.TopLogger');
        $c = new \TopClient;
        $c->appkey = $sms_config['appKey'];
        $c->secretKey = $sms_config['secretKey'];
        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend('');
        $req->setSmsType('normal');
        $req->setSmsFreeSignName($sms_config['FreeSignName']);
        $req->setSmsParam(json_encode($data['param']));
        $req->setRecNum($data['mobile']);
        $req->setSmsTemplateCode($data['template']);
        $result = $c->execute($req);
        $result = $this->simpleXml_to_array($result);
        if (isset($result['code'])) {
            return ['code' => $result['sub_code']];
        }
        return true;
    }

    private function simpleXml_to_array($obj)
    {
        if (count($obj) >= 1) {
            $result = $keys = [];
            foreach ($obj as $key => $value) {
                isset($keys[$key]) ? ($keys[$key] += 1) : ($keys[$key] = 1);
                if ($keys[$key] == 1) {
                    $result[$key] = $this->simpleXml_to_array($value);
                } elseif ($keys[$key] == 2) {
                    $result[$key] = [$result[$key], $this->simpleXml_to_array($value)];
                } else if ($keys[$key] > 2) {
                    $result[$key][] = $this->simpleXml_to_array($value);
                }
            }
            return $result;
        } else if (count($obj) == 0) {
            return (string)$obj;
        }
    }

}

