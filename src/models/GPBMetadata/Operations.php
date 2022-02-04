<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace GPBMetadata;

class Operations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�9
operations.proto%tinkoff.public.invest.api.contract.v1common.proto"�
OperationsRequest

account_id (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.TimestampD
state (25.tinkoff.public.invest.api.contract.v1.OperationState
figi (	"Z
OperationsResponseD

operations (20.tinkoff.public.invest.api.contract.v1.Operation"�
	Operation

id (	
parent_operation_id (	
currency (	B
payment (21.tinkoff.public.invest.api.contract.v1.MoneyValue@
price (21.tinkoff.public.invest.api.contract.v1.MoneyValueD
state (25.tinkoff.public.invest.api.contract.v1.OperationState
quantity (
quantity_rest (
figi	 (	
instrument_type
 (	(
date (2.google.protobuf.Timestamp
type (	L
operation_type (24.tinkoff.public.invest.api.contract.v1.OperationType"&
PortfolioRequest

account_id (	"�
PortfolioResponseN
total_amount_shares (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
total_amount_bonds (21.tinkoff.public.invest.api.contract.v1.MoneyValueK
total_amount_etf (21.tinkoff.public.invest.api.contract.v1.MoneyValueR
total_amount_currencies (21.tinkoff.public.invest.api.contract.v1.MoneyValueO
total_amount_futures (21.tinkoff.public.invest.api.contract.v1.MoneyValueH
expected_yield (20.tinkoff.public.invest.api.contract.v1.QuotationK
	positions (28.tinkoff.public.invest.api.contract.v1.PortfolioPosition"&
PositionsRequest

account_id (	"�
PositionsResponse@
money (21.tinkoff.public.invest.api.contract.v1.MoneyValueB
blocked (21.tinkoff.public.invest.api.contract.v1.MoneyValueN

securities (2:.tinkoff.public.invest.api.contract.v1.PositionsSecurities"
limits_loading_in_progress (H
futures (27.tinkoff.public.invest.api.contract.v1.PositionsFutures"+
WithdrawLimitsRequest

account_id (	"�
WithdrawLimitsResponse@
money (21.tinkoff.public.invest.api.contract.v1.MoneyValueB
blocked (21.tinkoff.public.invest.api.contract.v1.MoneyValueL
blocked_guarantee (21.tinkoff.public.invest.api.contract.v1.MoneyValue"�
PortfolioPosition
figi (	
instrument_type (	B
quantity (20.tinkoff.public.invest.api.contract.v1.QuotationQ
average_position_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueH
expected_yield (20.tinkoff.public.invest.api.contract.v1.QuotationF
current_nkd (21.tinkoff.public.invest.api.contract.v1.MoneyValueS
average_position_price_pt (20.tinkoff.public.invest.api.contract.v1.QuotationH
current_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueV
average_position_price_fifo	 (21.tinkoff.public.invest.api.contract.v1.MoneyValueG
quantity_lots
 (20.tinkoff.public.invest.api.contract.v1.Quotation"E
PositionsSecurities
figi (	
blocked (
balance ("B
PositionsFutures
figi (	
blocked (
balance ("�
BrokerReportRequestl
generate_broker_report_request (2B.tinkoff.public.invest.api.contract.v1.GenerateBrokerReportRequestH b
get_broker_report_request (2=.tinkoff.public.invest.api.contract.v1.GetBrokerReportRequestH B	
payload"�
BrokerReportResponsen
generate_broker_report_response (2C.tinkoff.public.invest.api.contract.v1.GenerateBrokerReportResponseH d
get_broker_report_response (2>.tinkoff.public.invest.api.contract.v1.GetBrokerReportResponseH B	
payload"�
GenerateBrokerReportRequest

account_id (	(
from (2.google.protobuf.Timestamp&
to (2.google.protobuf.Timestamp"/
GenerateBrokerReportResponse
task_id (	"7
GetBrokerReportRequest
task_id (	
page ("�
GetBrokerReportResponseJ
broker_report (23.tinkoff.public.invest.api.contract.v1.BrokerReport

itemsCount (

pagesCount (
page ("�
BrokerReport
trade_id (	
order_id (	
figi (	
execute_sign (	2
trade_datetime (2.google.protobuf.Timestamp
exchange (	

class_code (	
	direction (	
name	 (	
ticker
 (	@
price (21.tinkoff.public.invest.api.contract.v1.MoneyValue
quantity (G
order_amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueC
	aci_value (20.tinkoff.public.invest.api.contract.v1.QuotationM
total_order_amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueL
broker_commission (21.tinkoff.public.invest.api.contract.v1.MoneyValueN
exchange_commission (21.tinkoff.public.invest.api.contract.v1.MoneyValueW
exchange_clearing_commission (21.tinkoff.public.invest.api.contract.v1.MoneyValueC
	repo_rate (20.tinkoff.public.invest.api.contract.v1.Quotation
party (	4
clear_value_date (2.google.protobuf.Timestamp2
sec_value_date (2.google.protobuf.Timestamp
broker_status (	
separate_agreement_type (	!
separate_agreement_number (	
separate_agreement_date (	
delivery_type (	*m
OperationState
OPERATION_STATE_UNSPECIFIED 
OPERATION_STATE_EXECUTED
OPERATION_STATE_CANCELED*�
OperationType
OPERATION_TYPE_UNSPECIFIED 
OPERATION_TYPE_INPUT
OPERATION_TYPE_BOND_TAX$
 OPERATION_TYPE_OUTPUT_SECURITIES
OPERATION_TYPE_OVERNIGHT
OPERATION_TYPE_TAX&
"OPERATION_TYPE_BOND_REPAYMENT_FULL
OPERATION_TYPE_SELL_CARD
OPERATION_TYPE_DIVIDEND_TAX
OPERATION_TYPE_OUTPUT	!
OPERATION_TYPE_BOND_REPAYMENT
!
OPERATION_TYPE_TAX_CORRECTION
OPERATION_TYPE_SERVICE_FEE
OPERATION_TYPE_BENEFIT_TAX
OPERATION_TYPE_MARGIN_FEE
OPERATION_TYPE_BUY
OPERATION_TYPE_BUY_CARD#
OPERATION_TYPE_INPUT_SECURITIES
OPERATION_TYPE_SELL_MARGIN
OPERATION_TYPE_BROKER_FEE
OPERATION_TYPE_BUY_MARGIN
OPERATION_TYPE_DIVIDEND
OPERATION_TYPE_SELL
OPERATION_TYPE_COUPON
OPERATION_TYPE_SUCCESS_FEE$
 OPERATION_TYPE_DIVIDEND_TRANSFER%
!OPERATION_TYPE_ACCRUING_VARMARGIN(
$OPERATION_TYPE_WRITING_OFF_VARMARGIN
OPERATION_TYPE_DELIVERY_BUY 
OPERATION_TYPE_DELIVERY_SELL
OPERATION_TYPE_TRACK_MFEE
OPERATION_TYPE_TRACK_PFEE"
OPERATION_TYPE_TAX_PROGRESSIVE \'
#OPERATION_TYPE_BOND_TAX_PROGRESSIVE!+
\'OPERATION_TYPE_DIVIDEND_TAX_PROGRESSIVE"*
&OPERATION_TYPE_BENEFIT_TAX_PROGRESSIVE#-
)OPERATION_TYPE_TAX_CORRECTION_PROGRESSIVE$\'
#OPERATION_TYPE_TAX_REPO_PROGRESSIVE%
OPERATION_TYPE_TAX_REPO& 
OPERATION_TYPE_TAX_REPO_HOLD\'"
OPERATION_TYPE_TAX_REPO_REFUND(,
(OPERATION_TYPE_TAX_REPO_HOLD_PROGRESSIVE).
*OPERATION_TYPE_TAX_REPO_REFUND_PROGRESSIVE*
OPERATION_TYPE_DIV_EXT+2�
OperationsService�
GetOperations8.tinkoff.public.invest.api.contract.v1.OperationsRequest9.tinkoff.public.invest.api.contract.v1.OperationsResponse�
GetPortfolio7.tinkoff.public.invest.api.contract.v1.PortfolioRequest8.tinkoff.public.invest.api.contract.v1.PortfolioResponse�
GetPositions7.tinkoff.public.invest.api.contract.v1.PositionsRequest8.tinkoff.public.invest.api.contract.v1.PositionsResponse�
GetWithdrawLimits<.tinkoff.public.invest.api.contract.v1.WithdrawLimitsRequest=.tinkoff.public.invest.api.contract.v1.WithdrawLimitsResponse�
GetBrokerReport:.tinkoff.public.invest.api.contract.v1.BrokerReportRequest;.tinkoff.public.invest.api.contract.v1.BrokerReportResponseBa
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

