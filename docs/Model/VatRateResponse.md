# # VatRateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the vat rate object. |
**created_at** | **\DateTime** | Date/time when this rate was recorded in the table. |
**updated_at** | **\DateTime** | Date/time when this rate was updated in the table. |
**value** | **int** | Percent minor units. Example: 12.5% is 1250. |
**country** | [**\OpenAPI\Client\Model\AllowedCountriesCodes**](AllowedCountriesCodes.md) |  |
**valid_until** | **\DateTime** | Date when this rate was depreciated, after this date rate cannot be used. | [optional]
**valid_from** | **\DateTime** | Date starting from when this rate can be used. | [optional]
**status** | [**\OpenAPI\Client\Model\VatRateStatusEnum**](VatRateStatusEnum.md) |  | [optional]
**created_by** | [**\OpenAPI\Client\Model\VatRateCreator**](VatRateCreator.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
