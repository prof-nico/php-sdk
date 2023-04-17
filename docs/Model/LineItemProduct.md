# # LineItemProduct

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the product. |
**type** | [**\OpenAPI\Client\Model\ProductServiceTypeEnum**](ProductServiceTypeEnum.md) |  | [optional]
**description** | **string** | Description of the product. | [optional]
**price** | [**\OpenAPI\Client\Model\Price**](Price.md) |  | [optional]
**measure_unit_id** | **string** | The unique ID reference of the unit used to measure the quantity of this product (e.g. items, meters, kilograms). |
**smallest_amount** | **float** | The smallest amount allowed for this product. | [optional]
**ledger_account_id** | **string** |  | [optional]
**id** | **string** | Unique ID of the product. | [optional]
**entity_id** | **string** |  |
**entity_user_id** | **string** |  | [optional]
**created_at** | **\DateTime** | Time at which the product was created. Timestamps follow the ISO 8601 standard. |
**updated_at** | **\DateTime** | Time at which the product was last updated. Timestamps follow the ISO 8601 standard. |
**vat_rate** | [**\OpenAPI\Client\Model\VatRateResponse**](VatRateResponse.md) |  |
**measure_unit** | [**\OpenAPI\Client\Model\UnitResponse**](UnitResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
