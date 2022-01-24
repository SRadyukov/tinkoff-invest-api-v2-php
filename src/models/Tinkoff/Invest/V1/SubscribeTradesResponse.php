<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Результат изменения статуса подписки на поток обезличенных сделок.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.SubscribeTradesResponse</code>
 */
class SubscribeTradesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Уникальный идентификатор запроса, подробнее: [tracking_id](/investAPI/grpc#tracking-id)
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     */
    protected $tracking_id = '';
    /**
     *Массив статусов подписки на поток сделок.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradeSubscription trade_subscriptions = 2;</code>
     */
    private $trade_subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracking_id
     *          Уникальный идентификатор запроса, подробнее: [tracking_id](/investAPI/grpc#tracking-id)
     *     @type \Tinkoff\Invest\V1\TradeSubscription[]|\Google\Protobuf\Internal\RepeatedField $trade_subscriptions
     *          Массив статусов подписки на поток сделок.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Уникальный идентификатор запроса, подробнее: [tracking_id](/investAPI/grpc#tracking-id)
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @return string
     */
    public function getTrackingId()
    {
        return $this->tracking_id;
    }

    /**
     *Уникальный идентификатор запроса, подробнее: [tracking_id](/investAPI/grpc#tracking-id)
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_id = $var;

        return $this;
    }

    /**
     *Массив статусов подписки на поток сделок.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradeSubscription trade_subscriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTradeSubscriptions()
    {
        return $this->trade_subscriptions;
    }

    /**
     *Массив статусов подписки на поток сделок.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradeSubscription trade_subscriptions = 2;</code>
     * @param \Tinkoff\Invest\V1\TradeSubscription[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTradeSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\TradeSubscription::class);
        $this->trade_subscriptions = $arr;

        return $this;
    }

}
