<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\SECURITYTECH\Models;

use AlibabaCloud\Tea\Model;

class ApplyAidashboardDeviceResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'uuid' => 'uuid',
        'serverPubKey' => 'server_pub_key',
        'certData' => 'cert_data',
        'certSign' => 'cert_sign',
        'responseSign' => 'response_sign',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->serverPubKey) {
            $res['server_pub_key'] = $this->serverPubKey;
        }
        if (null !== $this->certData) {
            $res['cert_data'] = $this->certData;
        }
        if (null !== $this->certSign) {
            $res['cert_sign'] = $this->certSign;
        }
        if (null !== $this->responseSign) {
            $res['response_sign'] = $this->responseSign;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ApplyAidashboardDeviceResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['req_msg_id'])){
            $model->reqMsgId = $map['req_msg_id'];
        }
        if(isset($map['result_code'])){
            $model->resultCode = $map['result_code'];
        }
        if(isset($map['result_msg'])){
            $model->resultMsg = $map['result_msg'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['server_pub_key'])){
            $model->serverPubKey = $map['server_pub_key'];
        }
        if(isset($map['cert_data'])){
            $model->certData = $map['cert_data'];
        }
        if(isset($map['cert_sign'])){
            $model->certSign = $map['cert_sign'];
        }
        if(isset($map['response_sign'])){
            $model->responseSign = $map['response_sign'];
        }
        return $model;
    }
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 设备唯一ID
    /**
     * @var string
     */
    public $uuid;

    // 服务端公钥
    /**
     * @var string
     */
    public $serverPubKey;

    // 证书信息
    /**
     * @var string
     */
    public $certData;

    // 证书签名
    /**
     * @var string
     */
    public $certSign;

    // 响应签名
    /**
     * @var string
     */
    public $responseSign;

}
