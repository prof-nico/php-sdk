# # CommentSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**entity_id** | **string** |  |
**status** | [**\OpenAPI\Client\Model\StatusEnum**](StatusEnum.md) |  |
**entity_user_id** | **string** |  |
**api_user_id** | **string** |  | [optional]
**partner_id** | **string** |  | [optional]
**object_id** | **string** |  |
**object_type** | **string** |  |
**text** | **string** |  |
**mentions** | [**\OpenAPI\Client\Model\MentionSchema[]**](MentionSchema.md) |  | [optional]
**replies_to** | **string** |  | [optional]
**attachments** | [**\OpenAPI\Client\Model\FileSchema[]**](FileSchema.md) |  | [optional]
**edited_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
