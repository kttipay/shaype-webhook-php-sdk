# # DelegatedOtpNotificationEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_id** | **string** | Card identifier associated with the transaction | [optional]
**account_id** | **string** | Account identifier associated with the transaction | [optional]
**merchant_info** | [**\Shaype\Webhook\Model\MerchantInfoDto**](MerchantInfoDto.md) | Merchant information for the transaction | [optional]
**transaction_info** | [**\Shaype\Webhook\Model\TransactionInfoDto**](TransactionInfoDto.md) | Transaction information | [optional]
**passcode** | **string** | One-time passcode for 3DS authentication | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
