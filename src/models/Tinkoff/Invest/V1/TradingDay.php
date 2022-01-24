<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о времени торгов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.TradingDay</code>
 */
class TradingDay extends \Google\Protobuf\Internal\Message
{
    /**
     * Дата.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     */
    protected $date = null;
    /**
     * Признак торгового дня на бирже.
     *
     * Generated from protobuf field <code>bool is_trading_day = 2;</code>
     */
    protected $is_trading_day = false;
    /**
     * Время начала торгов по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     */
    protected $start_time = null;
    /**
     * Время окончания торгов по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     */
    protected $end_time = null;
    /**
     * Время начала подачи заявки по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp market_order_start_time = 5;</code>
     */
    protected $market_order_start_time = null;
    /**
     * Время окончания подачи заявки по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp market_order_end_time = 6;</code>
     */
    protected $market_order_end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date
     *           Дата.
     *     @type bool $is_trading_day
     *           Признак торгового дня на бирже.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Время начала торгов по часовому поясу UTC.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Время окончания торгов по часовому поясу UTC.
     *     @type \Google\Protobuf\Timestamp $market_order_start_time
     *           Время начала подачи заявки по часовому поясу UTC.
     *     @type \Google\Protobuf\Timestamp $market_order_end_time
     *           Время окончания подачи заявки по часовому поясу UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Дата.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDate()
    {
        return isset($this->date) ? $this->date : null;
    }

    public function hasDate()
    {
        return isset($this->date);
    }

    public function clearDate()
    {
        unset($this->date);
    }

    /**
     * Дата.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;

        return $this;
    }

    /**
     * Признак торгового дня на бирже.
     *
     * Generated from protobuf field <code>bool is_trading_day = 2;</code>
     * @return bool
     */
    public function getIsTradingDay()
    {
        return $this->is_trading_day;
    }

    /**
     * Признак торгового дня на бирже.
     *
     * Generated from protobuf field <code>bool is_trading_day = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTradingDay($var)
    {
        GPBUtil::checkBool($var);
        $this->is_trading_day = $var;

        return $this;
    }

    /**
     * Время начала торгов по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return isset($this->start_time) ? $this->start_time : null;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Время начала торгов по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Время окончания торгов по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Время окончания торгов по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Время начала подачи заявки по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp market_order_start_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMarketOrderStartTime()
    {
        return isset($this->market_order_start_time) ? $this->market_order_start_time : null;
    }

    public function hasMarketOrderStartTime()
    {
        return isset($this->market_order_start_time);
    }

    public function clearMarketOrderStartTime()
    {
        unset($this->market_order_start_time);
    }

    /**
     * Время начала подачи заявки по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp market_order_start_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMarketOrderStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->market_order_start_time = $var;

        return $this;
    }

    /**
     * Время окончания подачи заявки по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp market_order_end_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMarketOrderEndTime()
    {
        return isset($this->market_order_end_time) ? $this->market_order_end_time : null;
    }

    public function hasMarketOrderEndTime()
    {
        return isset($this->market_order_end_time);
    }

    public function clearMarketOrderEndTime()
    {
        unset($this->market_order_end_time);
    }

    /**
     * Время окончания подачи заявки по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp market_order_end_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMarketOrderEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->market_order_end_time = $var;

        return $this;
    }

}
