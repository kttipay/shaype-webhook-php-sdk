# # MandatePaymentEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instruction_id** | **string** | Instruction identification | [optional]
**mandate_id** | **string** | Mandate identifier | [optional]
**payment_status** | **string** | Payment Status * **MANDATE_PAYMENT_RECEIVED**: Message has been received, no further update on status yet. Please continue to check for updates. * **MANDATE_PAYMENT_UNDELIVERED**: Message could not be delivered to the PayTo rails (PAG). Client should retry initiation. * **MANDATE_PAYMENT_SENT**: Message has been sent, no acknowledgement yet received. Please continue to check for updates. * **MANDATE_PAYMENT_STORE_AND_FORWARD**: Target institution is not available, but message will be relayed when they are back online. Please continue to check for updates. * **MANDATE_PAYMENT_ACCEPTED_FOR_CLEARANCE**: Payment is accepted but settlement not initiated. Please continue to check for updates. * **MANDATE_PAYMENT_SETTLEMENT_ABORTED**: Settlement could not be completed. A retry attempt will be made on behalf of the client. Please continue to check for updates. * **MANDATE_PAYMENT_ACCEPTED**: Settlement completed. * **MANDATE_PAYMENT_REJECTED**: Payment could not be completed. Request could be modified and resubmitted - or if unexpected problem then please contact Shaype team for support. * **MANDATE_PAYMENT_PENDING**: Settlement queued for handling but not complete. Please continue to check for updates | [optional]
**reason_code** | **string** | Payment rejection reason code | [optional]
**transaction_hay_id** | **string** | Transaction identifier. When payment status is rejected, transaction identifier is null | [optional]
**is_final** | **bool** | Whether the payment status is final | [optional]
**origin_id** | **string** | Transaction origin ID (to be used with &#x60;originType&#x60;). | [optional]
**origin_type** | **string** | Transaction origin type:  * **CUSTOMER**: Transaction initiated by a customer  * **SCHEDULED_PAYMENT**: Transaction initiated by a schedule  * **HAAS_OPERATIONS**: Transaction initiated by client operations  * **OPERATIONS**: Transaction initiated by Shaype operations  * **MANDATE_PAYMENT**: Transaction initiated by mandate  * **DIRECT_DEBIT**: Transaction initiated by direct debit  * **TRANSACTION**: Transaction initiated by another transaction | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
