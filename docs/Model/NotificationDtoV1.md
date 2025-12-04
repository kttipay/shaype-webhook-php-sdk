# # NotificationDtoV1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idempotency_key** | **string** | Idempotency key (UUID) to uniquely represent this request and prevent duplication. |
**type** | **string** | The type of the notification event - one of:  * **BATCH_COMPLETED**: The bulk batch-completed event |
**created_time_utc** | **\DateTime** | Resolution requested by date and time | [optional]
**action_owner** | **string** | The party responsible for the triggering of an action resulting in a notification event. Possible values:  * **CLIENT**: Client executed an action which triggered the event.  * **PLATFORM**: Shaype executed an action which triggered the event. | [optional]
**event_details** | [**\Shaype\Webhook\Model\BatchCompletedEventDto**](BatchCompletedEventDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
