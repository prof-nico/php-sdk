# # WebhookSettingsByObjectTypePaginationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\OpenAPI\Client\Model\WebhookSettingsResponse[]**](WebhookSettingsResponse.md) | A set of webhook settings of different types returned per page |
**prev_pagination_token** | **string** | A token that can be sent in the &#x60;pagination_token&#x60; query parameter to get the previous page of results, or &#x60;null&#x60; if there is no previous page (i.e. you&#39;ve reached the first page). | [optional]
**next_pagination_token** | **string** | A token that can be sent in the &#x60;pagination_token&#x60; query parameter to get the next page of results, or &#x60;null&#x60; if there is no next page (i.e. you&#39;ve reached the last page). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
