# # ApprovalPolicyCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the approval policy. |
**description** | **string** | A brief description of the approval policy. |
**script** | [**\OpenAPI\Client\Model\ApprovalPolicyCreateScriptInner[]**](ApprovalPolicyCreateScriptInner.md) | A list of JSON objects that represents the approval policy script. The script contains the logic that determines whether an action should be sent to approval. This field is required, and it should contain at least one script object. |
**trigger** | [**\OpenAPI\Client\Model\ApprovalPolicyCreateTrigger**](ApprovalPolicyCreateTrigger.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
