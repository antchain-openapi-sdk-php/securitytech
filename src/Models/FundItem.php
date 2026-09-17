<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\SECURITYTECH\Models;

use AlibabaCloud\Tea\Model;

class FundItem extends Model {
    protected $_name = [
        'orderId' => 'order_id',
        'tradeNo' => 'trade_no',
        'amount' => 'amount',
        'petAmount' => 'pet_amount',
        'mallAmount' => 'mall_amount',
        'petAvailableAmount' => 'pet_available_amount',
        'mallAvailableAmount' => 'mall_available_amount',
        'mallFrozenAmount' => 'mall_frozen_amount',
    ];
    public function validate() {
        Model::validateRequired('orderId', $this->orderId, true);
        Model::validateRequired('tradeNo', $this->tradeNo, true);
        Model::validateRequired('amount', $this->amount, true);
        Model::validateRequired('petAmount', $this->petAmount, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->tradeNo) {
            $res['trade_no'] = $this->tradeNo;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->petAmount) {
            $res['pet_amount'] = $this->petAmount;
        }
        if (null !== $this->mallAmount) {
            $res['mall_amount'] = $this->mallAmount;
        }
        if (null !== $this->petAvailableAmount) {
            $res['pet_available_amount'] = $this->petAvailableAmount;
        }
        if (null !== $this->mallAvailableAmount) {
            $res['mall_available_amount'] = $this->mallAvailableAmount;
        }
        if (null !== $this->mallFrozenAmount) {
            $res['mall_frozen_amount'] = $this->mallFrozenAmount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FundItem
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['order_id'])){
            $model->orderId = $map['order_id'];
        }
        if(isset($map['trade_no'])){
            $model->tradeNo = $map['trade_no'];
        }
        if(isset($map['amount'])){
            $model->amount = $map['amount'];
        }
        if(isset($map['pet_amount'])){
            $model->petAmount = $map['pet_amount'];
        }
        if(isset($map['mall_amount'])){
            $model->mallAmount = $map['mall_amount'];
        }
        if(isset($map['pet_available_amount'])){
            $model->petAvailableAmount = $map['pet_available_amount'];
        }
        if(isset($map['mall_available_amount'])){
            $model->mallAvailableAmount = $map['mall_available_amount'];
        }
        if(isset($map['mall_frozen_amount'])){
            $model->mallFrozenAmount = $map['mall_frozen_amount'];
        }
        return $model;
    }
    // 业务订单号（天枢biz_order_no转名；订单不存在时为空）
    /**
     * @example METL202004041220123456
     * @var string
     */
    public $orderId;

    // 关联交易单号（天枢原样透传）
    /**
     * @example TN1001
     * @var string
     */
    public $tradeNo;

    // 订单支付金额（订单实收；无单=0）单位元两位小数
    /**
     * @example 1300.00
     * @var string
     */
    public $amount;

    // 活体金额（明细PET行商品金额聚合，下单口径不可变事实；无明细=0）
    /**
     * @example 800.00
     * @var string
     */
    public $petAmount;

    // 商城金额（明细POINT_PACKAGE/GOODS行商品金额聚合；无明细=0）
    /**
     * @example 500.00
     * @var string
     */
    public $mallAmount;

    // 活体可用金额（该笔PET账户行available；无行=0）
    /**
     * @example 795.06
     * @var string
     */
    public $petAvailableAmount;

    // 商城可用余额（POINT_PACKAGE/GOODS行available合计，不含冻结；无行=0）
    /**
     * @example 200.00
     * @var string
     */
    public $mallAvailableAmount;

    // 商城冻结金额（POINT_PACKAGE行frozen；无冻结=0）
    /**
     * @example 0.00
     * @var string
     */
    public $mallFrozenAmount;

}
