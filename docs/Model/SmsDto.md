# # SmsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phone_number** | [**\Shaype\Webhook\Model\PhoneNumber**](PhoneNumber.md) | Phone number to send the SMS notification to. |
**type** | **string** | The type of the notification event - one of:  * **ACCOUNT_STATUS_CHANGE**: The status of an account has changed  * **CARD_ADDED_TO_WALLET**: Card has been added to a device wallet  * **OTP**: One-time password has been requested  * **PASSCODE_CHANGE**: Customer&#39;s passcode has been changed  * **PHONE_NUMBER_VERIFICATION**: Phone number verification has been requested |
**idempotency_key** | **string** | Idempotency key (UUID) to uniquely represent this request and prevent duplication. |
**customer_hay_id** | **string** | Unique identifier (UUID) of the Customer associated with the event | [optional]
**card_status_change_event** | [**\Shaype\Webhook\Model\CardStatusChangeEventDto**](CardStatusChangeEventDto.md) | Details of the **Card Status Change** event; provided when the type is &#x60;CARD_STATUS_CHANGE&#x60;. | [optional]
**account_status_change_event** | [**\Shaype\Webhook\Model\AccountStatusChangeEventDto**](AccountStatusChangeEventDto.md) | Details of the **Account Status Change** event; provided when the type is &#x60;ACCOUNT_STATUS_CHANGE&#x60;. | [optional]
**passcode_change_event** | [**\Shaype\Webhook\Model\PasscodeChangeEventDto**](PasscodeChangeEventDto.md) | Details of the **Passcode Change** event; provided when the type is &#x60;PASSCODE_CHANGE&#x60;. | [optional]
**phone_number_verification_event** | [**\Shaype\Webhook\Model\PhoneNumberVerificationEventDto**](PhoneNumberVerificationEventDto.md) | Details of the **Phone Number Verification** event; provided when the type is &#x60;PHONE_NUMBER_VERIFICATION&#x60;. | [optional]
**customer_otp_event** | [**\Shaype\Webhook\Model\CustomerOtpEventDto**](CustomerOtpEventDto.md) | Details of the **One-Time Password Request** event; provided when the type is &#x60;OTP&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
