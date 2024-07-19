# # EmailDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idempotency_key** | **string** | Idempotency key (UUID) to uniquely represent this request and prevent duplication. |
**email_address** | **string** | Email address to send the email notification to. |
**type** | **string** | The type of the notification event - one of:  * **CARD_ADDED_TO_WALLET**: Card has been added to a device wallet  * **CARD_PIN_CHANGE**: Card PIN has been changed  * **CUSTOMER_DETAILS_CHANGE**: Customer&#39;s personal details have been updated  * **MAGIC_LINK**: Magic link email has been requested  * **REMINDER**: A reminder |
**customer_details** | [**\OpenAPI\Client\Model\CustomerDetails**](CustomerDetails.md) |  | [optional]
**card_hay_id** | **string** | Unique identifier (UUID) of the Card associated with the event | [optional]
**card_addition_to_wallet_event** | [**\OpenAPI\Client\Model\CardAdditionToWalletEventDto**](CardAdditionToWalletEventDto.md) |  | [optional]
**card_pin_change_event** | [**\OpenAPI\Client\Model\CardPinChangeEventDto**](CardPinChangeEventDto.md) |  | [optional]
**customer_details_change_event** | [**\OpenAPI\Client\Model\CustomerDetailsChangeEventDto**](CustomerDetailsChangeEventDto.md) |  | [optional]
**magic_link_event** | [**\OpenAPI\Client\Model\MagicLinkEventDto**](MagicLinkEventDto.md) |  | [optional]
**reminder_type** | **string** | Type of the **Reminder** event; provided when the type is &#x60;REMINDER&#x60;. Possible values:  * **REMINDER_TO_COMPLETE_FUNDING**  * **REMINDER_TO_PROVISION_DIGITAL_CARD**  * **REMINDER_TO_TRANSACT**  * **APPLE_PAY_REMINDER_24_HRS**  * **APPLE_PAY_REMINDER_7_DAYS**  * **APPLE_PAY_SPEND_REMINDER_7_DAYS**  * **APPLE_PAY_SPEND_REMINDER_14_DAYS**  * **GOOGLE_PAY_24_HRS_PARTIAL_PROVISIONING**  * **GOOGLE_PAY_7_DAYS_PARTIAL_PROVISIONING**  * **GOOGLE_PAY_7_DAYS_SPEND_REMINDER**  * **GOOGLE_PAY_14_DAYS_SPEND_REMINDER** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
