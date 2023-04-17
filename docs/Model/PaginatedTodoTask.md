# # PaginatedTodoTask

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\OpenAPI\Client\Model\TodoTaskResponse[]**](TodoTaskResponse.md) |  |
**prev_pagination_token** | **string** | A token that can be sent in the &#x60;pagination_token&#x60; query parameter to get the previous page of results. If there is no previous page, i.e. you have reached the first page, the value is &#x60;null&#x60;. | [optional]
**next_pagination_token** | **string** | A token that can be sent in the &#x60;pagination_token&#x60; query parameter to get the next page of results. If there is no next page, i.e. you have reached the last page, the value is &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
