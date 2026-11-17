<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\SECURITYTECH\Models;

use AlibabaCloud\Tea\Model;

class ApplyAidashboardDeviceRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'productKey' => 'product_key',
        'devicePubKey' => 'device_pub_key',
        'sn' => 'sn',
    ];
    public function validate() {
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('devicePubKey', $this->devicePubKey, true);
        Model::validateRequired('sn', $this->sn, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->productKey) {
            $res['product_key'] = $this->productKey;
        }
        if (null !== $this->devicePubKey) {
            $res['device_pub_key'] = $this->devicePubKey;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ApplyAidashboardDeviceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['product_key'])){
            $model->productKey = $map['product_key'];
        }
        if(isset($map['device_pub_key'])){
            $model->devicePubKey = $map['device_pub_key'];
        }
        if(isset($map['sn'])){
            $model->sn = $map['sn'];
        }
        return $model;
    }
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // ai仪表产品key
    /**
     * @var string
     */
    public $productKey;

    // 设备公钥
    /**
     * @var string
     */
    public $devicePubKey;

    // 设备序列号
    /**
     * @var string
     */
    public $sn;

}
