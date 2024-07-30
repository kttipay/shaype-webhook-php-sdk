# # SmsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | [**\Shaype\Webhook\Model\PhoneNumber**](PhoneNumber.md) |  |
**type** | **string** | The type of the notification event - one of:  * **ACCOUNT_STATUS_CHANGE**: The status of an account has changed  * **CARD_ADDED_TO_WALLET**: Card has been added to a device wallet  * **OTP**: One-time password has been requested  * **PASSCODE_CHANGE**: Customer&#39;s passcode has been changed  * **PHONE_NUMBER_VERIFICATION**: Phone number verification has been requested |
**idempotency_key** | **string** | Idempotency key (UUID) to uniquely represent this request and prevent duplication. |
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer associated with the event | [optional]
**card_status_change_event** | [**\Shaype\Webhook\Model\CardStatusChangeEventDto**](CardStatusChangeEventDto.md) |  | [optional]
**account_status_change_event** | [**\Shaype\Webhook\Model\AccountStatusChangeEventDto**](AccountStatusChangeEventDto.md) |  | [optional]
**passcode_change_event** | [**\Shaype\Webhook\Model\PasscodeChangeEventDto**](PasscodeChangeEventDto.md) |  | [optional]
**phone_number_verification_event** | [**\Shaype\Webhook\Model\PhoneNumberVerificationEventDto**](PhoneNumberVerificationEventDto.md) |  | [optional]
**customer_otp_event** | [**\Shaype\Webhook\Model\CustomerOtpEventDto**](CustomerOtpEventDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
