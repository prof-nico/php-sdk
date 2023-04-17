# # TodoTaskResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**oid** | **int** |  |
**entity_user_id** | **string** |  |
**status** | **string** |  |
**viewed** | **bool** |  |
**object_id** | **string** |  | [optional]
**object_type** | **string** |  |
**action** | **string** |  |
**performed_by_user_id** | **string** |  | [optional]
**related_object** | **object** | Todo task is created on behalf of some specific object (e.g. payable) and references to its ID. This field contains information about the related object (e.g. payload PayableResponseSchema). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
