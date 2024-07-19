# # CardStatusChangeEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_hay_id** | **string** | Unique identifier (UUID) of the Card associated with the event | [optional]
**account_hay_id** | **string** | Unique identifier (UUID) of the Account associated with the event | [optional]
**card_status** | **string** | New card status:  * **ACTIVE**: Card has been activated  * **BLOCKED**: Card has been blocked  * **EXPIRED**: Card has been expired\&quot;  * **INACTIVE**: Card has been cancelled  * **AWAITING_ACTIVATION**: Card is awaiting activation | [optional]
**card_last_four_digits** | **string** | Last four card digits | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
