# # BatchCompletedEventDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **string** | Unique identifier (UUID) of the Batch-completed associated with the event. | [optional]
**batch_type** | **string** | Batch type associated to the completed event. | [optional]
**received_at_utc** | **\DateTime** | DateTime of when the batch was created | [optional]
**finished_at_utc** | **\DateTime** | DateTime of when the batch was processed and completed | [optional]
**status** | **string** | Batch status. | [optional]
**item_statistics** | [**\Shaype\Webhook\Model\ItemStatisticsDto**](ItemStatisticsDto.md) | Batch-item processed statistics. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
