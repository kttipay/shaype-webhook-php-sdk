# OpenAPI\Client\NotificationsAPIApi

All URIs are relative to http://localhost:8080, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notifyEmail()**](NotificationsAPIApi.md#notifyEmail) | **POST** /api/hay/v0/communications/email | Notification - email |
| [**notifyNotification()**](NotificationsAPIApi.md#notifyNotification) | **POST** /api/hay/v0/communications/notification | Notification - event |
| [**notifySms()**](NotificationsAPIApi.md#notifySms) | **POST** /api/hay/v0/communications/sms | Notification - SMS |


## `notifyEmail()`

```php
notifyEmail($email_dto)
```

Notification - email

This endpoint will receive events we recommend being delivered via email - that includes magic-link email needed for clients using our authentication service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_dto = new \OpenAPI\Client\Model\EmailDto(); // \OpenAPI\Client\Model\EmailDto

try {
    $apiInstance->notifyEmail($email_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsAPIApi->notifyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_dto** | [**\OpenAPI\Client\Model\EmailDto**](../Model/EmailDto.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyNotification()`

```php
notifyNotification($notification_dto)
```

Notification - event

This endpoint will receive the main notification stream for the platform events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_dto = new \OpenAPI\Client\Model\NotificationDto(); // \OpenAPI\Client\Model\NotificationDto

try {
    $apiInstance->notifyNotification($notification_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsAPIApi->notifyNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_dto** | [**\OpenAPI\Client\Model\NotificationDto**](../Model/NotificationDto.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifySms()`

```php
notifySms($sms_dto)
```

Notification - SMS

This endpoint will receive events we recommend being delivered via SMS - that includes OTP texts needed for clients using our authentication service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NotificationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_dto = new \OpenAPI\Client\Model\SmsDto(); // \OpenAPI\Client\Model\SmsDto

try {
    $apiInstance->notifySms($sms_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsAPIApi->notifySms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_dto** | [**\OpenAPI\Client\Model\SmsDto**](../Model/SmsDto.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
