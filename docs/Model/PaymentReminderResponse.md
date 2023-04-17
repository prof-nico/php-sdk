# # PaymentReminderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**term_1_reminder** | [**\OpenAPI\Client\Model\PaymentReminderTerm1Reminder**](PaymentReminderTerm1Reminder.md) |  | [optional]
**term_2_reminder** | [**\OpenAPI\Client\Model\PaymentReminderTerm2Reminder**](PaymentReminderTerm2Reminder.md) |  | [optional]
**term_final_reminder** | [**\OpenAPI\Client\Model\PaymentReminderTermFinalReminder**](PaymentReminderTermFinalReminder.md) |  | [optional]
**id** | **string** |  |
**entity_id** | **string** |  |
**status** | [**\OpenAPI\Client\Model\StatusEnum**](StatusEnum.md) |  |
**created_at** | **\DateTime** | Time at which the PaymentReminder was created. Timestamps follow the ISO 8601 standard. |
**updated_at** | **\DateTime** | Time at which the PaymentReminder was last updated. Timestamps follow the ISO 8601 standard. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
