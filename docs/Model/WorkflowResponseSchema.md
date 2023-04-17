# # WorkflowResponseSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID of this workflow. |
**created_by_entity_user** | [**\OpenAPI\Client\Model\WorkflowResponseSchemaCreatedByEntityUser**](WorkflowResponseSchemaCreatedByEntityUser.md) |  |
**object_type** | **string** | The type of objects associated with this workflow. |
**policy_name** | **string** | The name of this workflow. |
**policy_description** | **string** | An arbitrary description of this workflow. | [optional]
**workflow** | **object[]** | A list of functions executed when the workflow is triggered. Functions are defined in the [Monite script](https://docs.monite.com/docs/monite-script) format. |
**trigger** | **object** | The trigger conditions for this workflow. Triggers are defined in the [Monite script](https://docs.monite.com/docs/monite-script) format. |
**action** | [**\OpenAPI\Client\Model\ActionEnum**](ActionEnum.md) |  |
**created_at** | **\DateTime** | UTC date and time when this workflow was created. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. |
**updated_at** | **\DateTime** | UTC date and time when this workflow was last updated. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
