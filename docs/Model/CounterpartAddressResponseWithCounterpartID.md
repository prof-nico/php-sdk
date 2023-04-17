# # CounterpartAddressResponseWithCounterpartID

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | [**\OpenAPI\Client\Model\AllowedCountriesCodes**](AllowedCountriesCodes.md) |  |
**city** | **string** | City name. |
**postal_code** | **string** | ZIP or postal code. |
**state** | **string** | State, region, province, or county. | [optional]
**line1** | **string** | Street address. |
**line2** | **string** | Additional address information (if any). | [optional]
**id** | **string** | Unique ID of the address in the system |
**is_default** | **bool** | True if address is the default address of the counterpart. |
**counterpart_id** | **string** | ID of the counterpart that owns the address. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
