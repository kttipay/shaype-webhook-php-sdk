# Shaype\Webhook\NotificationsAPIApi

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



$apiInstance = new Shaype\Webhook\Api\NotificationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_dto = new \Shaype\Webhook\Model\EmailDto(); // \Shaype\Webhook\Model\EmailDto

try {
    $apiInstance->notifyEmail($email_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsAPIApi->notifyEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_dto** | [**\Shaype\Webhook\Model\EmailDto**](../Model/EmailDto.md)|  | |

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



$apiInstance = new Shaype\Webhook\Api\NotificationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$notification_dto = new \Shaype\Webhook\Model\NotificationDto(); // \Shaype\Webhook\Model\NotificationDto

try {
    $apiInstance->notifyNotification($notification_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsAPIApi->notifyNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_dto** | [**\Shaype\Webhook\Model\NotificationDto**](../Model/NotificationDto.md)|  | |

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



$apiInstance = new Shaype\Webhook\Api\NotificationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sms_dto = new \Shaype\Webhook\Model\SmsDto(); // \Shaype\Webhook\Model\SmsDto

try {
    $apiInstance->notifySms($sms_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsAPIApi->notifySms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sms_dto** | [**\Shaype\Webhook\Model\SmsDto**](../Model/SmsDto.md)|  | |

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
