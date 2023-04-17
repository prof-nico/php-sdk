# # EntityIndividualResponse3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID entity ID |
**created_at** | **\DateTime** | UTC datetime |
**updated_at** | **\DateTime** | UTC datetime |
**address** | [**\OpenAPI\Client\Model\CreateEntityRequestAddress**](CreateEntityRequestAddress.md) |  |
**email** | **string** | An official email address of the entity |
**phone** | **string** | A phone number of the entity | [optional]
**logo** | [**\OpenAPI\Client\Model\EntityIndividualResponseLogo**](EntityIndividualResponseLogo.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\StatusEnum**](StatusEnum.md) |  |
**vat_id** | **string** | A VAT number of the entity which points to the registered tax applied for a service price | [optional]
**tax_id** | **string** | An identification number of the legal entity | [optional]
**type** | **string** | A type for an individual |
**individual** | [**\OpenAPI\Client\Model\EntityIndividualResponse3Individual**](EntityIndividualResponse3Individual.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
