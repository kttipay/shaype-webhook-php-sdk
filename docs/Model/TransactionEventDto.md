# # TransactionEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_hay_id** | **string** | Unique identifier (UUID) of the Transaction associated with the event | [optional]
**hold_hay_id** | **string** | Unique identifier (UUID) of the Hold associated with the event (only applicable to card transactions). This is also referred to as &#x60;relatedHoldHayId&#x60; when &#x60;isPending&#x60; flag is &#x60;false&#x60;. | [optional]
**account_hay_id** | **string** | Unique identifier (UUID) of the Account associated with the event | [optional]
**currency_amount** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**updated_balance** | [**\Shaype\Webhook\Model\CurrencyAmount**](CurrencyAmount.md) |  | [optional]
**is_pending** | **bool** | Specifies whether the transaction is still pending | [optional]
**counterpart_name** | **string** | Transaction counterpart name | [optional]
**outcome** | **string** | Authorisation outcome type - for possible values, please see relevant guidance on Transactions | [optional]
**transaction_time_utc** | **\DateTime** | Transaction date and time | [optional]
**card_preference_outcome** | **string** | Outcome of the card preferences check - for possible values, please see relevant guidance on Transactions | [optional]
**card_processor_response** | **string** | Card processor response - for possible values, please see relevant guidance on Transactions | [optional]
**merchant_name** | **string** | Merchant name | [optional]
**is_atm_transaction** | **bool** | Specifies whether the transaction is an ATM transaction | [optional]
**transaction_type** | **string** | Transaction type:  * **CARD_TRANSACTION**: Card transaction  * **CARD_TRANSACTION_REFUND**: A refund of a card transaction  * **CARD_TRANSACTION_SETTLED**: A settlement of a card transaction  * **INTRABANK_TRANSFER_IN**: Incoming internal transfer  * **INTRABANK_TRANSFER_OUT**: Outgoing internal transfer  * **INTERBANK_TRANSFER_IN**: Incoming external bank transfer  * **INTERBANK_TRANSFER_OUT**: Outgoing external bank transfer  * **DIRECT_DEBIT_TRANSFER**: Direct Debit  * **HAY_TOP_UP**: An account top-up  * **INTERBANK_TRANSFER_OUT_REVERSAL**: A reversal of an outgoing external transfer  * **REWARD**: A reward credited to the account  * **GENERAL_CREDIT**: A general account credit  * **GENERAL_DEBIT**: A general account debit  * **ORIGINAL_CREDIT**: Visa Original Credit transaction  * **BPAY_TRANSFER_OUT**: Outgoing BPAY transfer | [optional]
**card_usage_details** | [**\Shaype\Webhook\Model\CardUsageDetails**](CardUsageDetails.md) |  | [optional]
**account_balances** | [**\Shaype\Webhook\Model\AccountBalancesDto**](AccountBalancesDto.md) |  | [optional]
**card_hay_id** | **string** | Unique identifier (UUID) of the Card associated with the event | [optional]
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer associated with the event | [optional]
**rule_details** | [**\Shaype\Webhook\Model\RuleDetails**](RuleDetails.md) |  | [optional]
**counterpart_details** | [**\Shaype\Webhook\Model\CounterpartDetails**](CounterpartDetails.md) |  | [optional]
**origin_id** | **string** | Transaction origin ID (to be used with &#x60;originType&#x60;). | [optional]
**origin_type** | **string** | Transaction origin type:  * **CUSTOMER**: Transaction initiated by a customer  * **SCHEDULED_PAYMENT**: Transaction initiated by a schedule  * **HAAS_OPERATIONS**: Transaction initiated by client operations  * **OPERATIONS**: Transaction initiated by Shaype operations  * **MANDATE_PAYMENT**: Transaction initiated by mandate  * **DIRECT_DEBIT**: Transaction initiated by direct debit | [optional]
**category** | **string** | Category of the transaction. | [optional]
**merchant_id** | **string** | Merchant ID, alphanumeric / special characters maximum 15 characters in length. | [optional]
**description** | **string** | Description on the Transaction | [optional]
**mandate_payment_details** | [**\Shaype\Webhook\Model\MandatePaymentDetails**](MandatePaymentDetails.md) |  | [optional]
**return_reason** | [**\Shaype\Webhook\Model\ReturnReason**](ReturnReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
