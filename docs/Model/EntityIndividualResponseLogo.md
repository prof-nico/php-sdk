# # EntityIndividualResponseLogo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID of this file. |
**created_at** | **\DateTime** | UTC date and time when this workflow was uploaded to Monite. Timestamps follow the [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format. |
**file_type** | **string** | The type of the business object associated with this file. |
**name** | **string** | The original file name (if available). |
**region** | **string** | Geographical region of the data center where the file is stored. |
**md5** | **string** | The MD5 hash of the file. |
**mimetype** | **string** | The file&#39;s [media type](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types). |
**url** | **string** | The URL to download the file. |
**size** | **int** | The file size in bytes. |
**previews** | [**\OpenAPI\Client\Model\PreviewSchema[]**](PreviewSchema.md) | Preview images generated for this file. There can be multiple images with different sizes. | [optional]
**pages** | [**\OpenAPI\Client\Model\PageSchema[]**](PageSchema.md) | If the file is a PDF document, this property contains individual pages extracted from the file. Otherwise, an empty array. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
