# # NotificationDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_hay_id** | **string** | Unique identifier (UUID) of the customer associated with the notification |
**idempotency_key** | **string** | Idempotency key (UUID) to uniquely represent this request and prevent duplication. |
**type** | **string** | The type of the notification event - one of:  * **ACCOUNT_STATUS_CHANGE**: The status of an account has changed  * **APPLE_PAY_REWARD_FOR_CUSTOMER**: Apple Pay reward reminder  * **CARD_ADDED_TO_WALLET**: Card has been added to a device wallet  * **CARD_STATUS_CHANGE**: The status of a card has changed  * **CUSTOMER_DETAILS_CHANGE**: Customer&#39;s personal details have been updated  * **CUSTOMER_STATUS_UPDATED**: Customer&#39;s status has been updated  * **ONBOARDING_PASSED**: Customer onboarding completed successfully  * **ONBOARDING_FAILED**: Customer onboarding failed  * **REMINDER**: A reminder  * **SCHEDULED_PAYMENT**: Scheduled payment creation notification  * **TRANSACTION**: Transaction notification  * **DIRECT_ENTRY**: Direct Entry notification  * **MANDATE**: Mandate notification  * **MANDATE_DUE_PAYMENT**: Mandate due payment notification  * **MANDATE_PAYMENT**: Mandate payment notification  * **MANDATE_ACTION_EXPIRATION**: Mandate action expiration notification |
**firebase_device_token** | **string** | Firebase token of the customer&#39;s device | [optional]
**action_owner** | **string** | The party responsible for the triggering of an action resulting in a notification event. Possible values:  * **CLIENT**: Client executed an action which triggered the event.  * **PLATFORM**: Shaype executed an action which triggered the event. | [optional]
**card_hay_id** | **string** | Unique identifier (UUID) of the Card associated with the event | [optional]
**product_id** | **string** | Unique identifier (UUID) of the Product of the account associated with the event | [optional]
**account_status_change_event** | [**\OpenAPI\Client\Model\AccountStatusChangeEventDto**](AccountStatusChangeEventDto.md) |  | [optional]
**customer_status_updated_event** | [**\OpenAPI\Client\Model\CustomerStatusUpdatedEventDto**](CustomerStatusUpdatedEventDto.md) |  | [optional]
**transaction_event** | [**\OpenAPI\Client\Model\TransactionEventDto**](TransactionEventDto.md) |  | [optional]
**card_status_change_event** | [**\OpenAPI\Client\Model\CardStatusChangeEventDto**](CardStatusChangeEventDto.md) |  | [optional]
**customer_details_change_event** | [**\OpenAPI\Client\Model\CustomerDetailsChangeEventDto**](CustomerDetailsChangeEventDto.md) |  | [optional]
**card_addition_to_wallet_event** | [**\OpenAPI\Client\Model\CardAdditionToWalletEventDto**](CardAdditionToWalletEventDto.md) |  | [optional]
**reminder_type** | **string** | Type of the **Reminder** event; provided when the type is &#x60;REMINDER&#x60;. Possible values:  * **REMINDER_TO_COMPLETE_FUNDING**  * **REMINDER_TO_PROVISION_DIGITAL_CARD**  * **REMINDER_TO_TRANSACT**  * **APPLE_PAY_REMINDER_24_HRS**  * **APPLE_PAY_REMINDER_7_DAYS**  * **APPLE_PAY_SPEND_REMINDER_7_DAYS**  * **APPLE_PAY_SPEND_REMINDER_14_DAYS**  * **APPLE_PAY_ADD_TO_WALLET_REMINDER_30_DAYS**  * **APPLE_PAY_ADD_TO_WALLET_REMINDER_60_DAYS**  * **APPLE_PAY_ADD_TO_WALLET_REMINDER_90_DAYS**  * **GOOGLE_PAY_24_HRS_PARTIAL_PROVISIONING**  * **GOOGLE_PAY_7_DAYS_PARTIAL_PROVISIONING**  * **GOOGLE_PAY_7_DAYS_SPEND_REMINDER**  * **GOOGLE_PAY_14_DAYS_SPEND_REMINDER**  * **CARD_EXPIRY_MONTH_REMINDER**  * **CARD_EXPIRY_2_WEEK_REMINDER**  * **CARD_EXPIRY_DAY_REMINDER** | [optional]
**scheduled_payment_event** | [**\OpenAPI\Client\Model\ScheduledPaymentEventDto**](ScheduledPaymentEventDto.md) |  | [optional]
**onboarding_failed_event** | [**\OpenAPI\Client\Model\OnboardingFailedEventDto**](OnboardingFailedEventDto.md) |  | [optional]
**direct_entry_event** | [**\OpenAPI\Client\Model\DirectEntryEventDto**](DirectEntryEventDto.md) |  | [optional]
**mandate_due_payment_event_dto** | [**\OpenAPI\Client\Model\MandateDuePaymentEventDto**](MandateDuePaymentEventDto.md) |  | [optional]
**mandate_event_dto** | [**\OpenAPI\Client\Model\MandateEventDto**](MandateEventDto.md) |  | [optional]
**mandate_payment_event_dto** | [**\OpenAPI\Client\Model\MandatePaymentEventDto**](MandatePaymentEventDto.md) |  | [optional]
**apple_pay_reward_for_customer_event** | [**\OpenAPI\Client\Model\ApplePayRewardForCustomerEventDto**](ApplePayRewardForCustomerEventDto.md) |  | [optional]
**card_expiry_reminder_event** | [**\OpenAPI\Client\Model\CardExpiryReminderEventDto**](CardExpiryReminderEventDto.md) |  | [optional]
**mandate_action_expiration_event** | [**\OpenAPI\Client\Model\MandateActionExpirationEventDto**](MandateActionExpirationEventDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
