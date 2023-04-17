# monite-php-sdk

The Monite REST API, for Monite partners to integrate with our solution.

For more information, please visit [https://docs.monite.com](https://docs.monite.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/monite-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApprovalPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_monite_version = 2023-03-14; // \DateTime
$approval_policy_id = 'approval_policy_id_example'; // string
$x_monite_entity_id = 9d2b4c8f-2087-4738-ba91-7359683c49a4; // string | The ID of the entity that owns the requested resource.

try {
    $result = $apiInstance->deleteApprovalPoliciesId($x_monite_version, $approval_policy_id, $x_monite_entity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalPoliciesApi->deleteApprovalPoliciesId: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.sandbox.monite.com/v1*

| Class                        | Method                                                                                                                                                | HTTP request                                                                   | Description                           |
|------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------------------|
| *ApprovalPoliciesApi*        | [**deleteApprovalPoliciesId**](docs/Api/ApprovalPoliciesApi.md#deleteapprovalpoliciesid)                                                              | **DELETE** /approval_policies/{approval_policy_id}                             | Delete                                |
| *ApprovalPoliciesApi*        | [**getApprovalPolicies**](docs/Api/ApprovalPoliciesApi.md#getapprovalpolicies)                                                                        | **GET** /approval_policies                                                     | Search                                |
| *ApprovalPoliciesApi*        | [**getApprovalPoliciesId**](docs/Api/ApprovalPoliciesApi.md#getapprovalpoliciesid)                                                                    | **GET** /approval_policies/{approval_policy_id}                                | Get                                   |
| *ApprovalPoliciesApi*        | [**getApprovalPoliciesIdProcesses**](docs/Api/ApprovalPoliciesApi.md#getapprovalpoliciesidprocesses)                                                  | **GET** /approval_policies/{approval_policy_id}/processes                      | Search Processes                      |
| *ApprovalPoliciesApi*        | [**getApprovalPoliciesIdProcessesId**](docs/Api/ApprovalPoliciesApi.md#getapprovalpoliciesidprocessesid)                                              | **GET** /approval_policies/{approval_policy_id}/processes/{process_id}         | Get Process                           |
| *ApprovalPoliciesApi*        | [**getApprovalPoliciesIdProcessesIdSteps**](docs/Api/ApprovalPoliciesApi.md#getapprovalpoliciesidprocessesidsteps)                                    | **GET** /approval_policies/{approval_policy_id}/processes/{process_id}/steps   | Get Process Steps                     |
| *ApprovalPoliciesApi*        | [**patchApprovalPoliciesId**](docs/Api/ApprovalPoliciesApi.md#patchapprovalpoliciesid)                                                                | **PATCH** /approval_policies/{approval_policy_id}                              | Update                                |
| *ApprovalPoliciesApi*        | [**postApprovalPolicies**](docs/Api/ApprovalPoliciesApi.md#postapprovalpolicies)                                                                      | **POST** /approval_policies                                                    | Create                                |
| *ApprovalPoliciesApi*        | [**postApprovalPoliciesIdProcessesIdCancel**](docs/Api/ApprovalPoliciesApi.md#postapprovalpoliciesidprocessesidcancel)                                | **POST** /approval_policies/{approval_policy_id}/processes/{process_id}/cancel | Cancel Process                        |
| *ApprovalRequestsApi*        | [**getApprovalRequests**](docs/Api/ApprovalRequestsApi.md#getapprovalrequests)                                                                        | **GET** /approval_requests                                                     | Search                                |
| *ApprovalRequestsApi*        | [**getApprovalRequestsId**](docs/Api/ApprovalRequestsApi.md#getapprovalrequestsid)                                                                    | **GET** /approval_requests/{approval_request_id}                               | Get                                   |
| *ApprovalRequestsApi*        | [**postApprovalRequests**](docs/Api/ApprovalRequestsApi.md#postapprovalrequests)                                                                      | **POST** /approval_requests                                                    | Create                                |
| *ApprovalRequestsApi*        | [**postApprovalRequestsIdApprove**](docs/Api/ApprovalRequestsApi.md#postapprovalrequestsidapprove)                                                    | **POST** /approval_requests/{approval_request_id}/approve                      | Approve                               |
| *ApprovalRequestsApi*        | [**postApprovalRequestsIdCancel**](docs/Api/ApprovalRequestsApi.md#postapprovalrequestsidcancel)                                                      | **POST** /approval_requests/{approval_request_id}/cancel                       | Cancel                                |
| *ApprovalRequestsApi*        | [**postApprovalRequestsIdReject**](docs/Api/ApprovalRequestsApi.md#postapprovalrequestsidreject)                                                      | **POST** /approval_requests/{approval_request_id}/reject                       | Reject                                |
| *ApprovalsApi*               | [**approveV1ApprovalsApprovalIdApprovePost**](docs/Api/ApprovalsApi.md#approvev1approvalsapprovalidapprovepost)                                       | **POST** /approvals/{approval_id}/approve                                      | Approve                               |
| *ApprovalsApi*               | [**getAllPendingApprovalsV1ApprovalsGet**](docs/Api/ApprovalsApi.md#getallpendingapprovalsv1approvalsget)                                             | **GET** /approvals                                                             | Get All Pending Approvals             |
| *ApprovalsApi*               | [**getApprovalByIdV1ApprovalsApprovalIdGet**](docs/Api/ApprovalsApi.md#getapprovalbyidv1approvalsapprovalidget)                                       | **GET** /approvals/{approval_id}                                               | Get Approval By Id                    |
| *ApprovalsApi*               | [**rejectV1ApprovalsApprovalIdRejectPost**](docs/Api/ApprovalsApi.md#rejectv1approvalsapprovalidrejectpost)                                           | **POST** /approvals/{approval_id}/reject                                       | Reject                                |
| *AuthenticationApi*          | [**postAuthRevoke**](docs/Api/AuthenticationApi.md#postauthrevoke)                                                                                    | **POST** /auth/revoke                                                          | Revoke a token                        |
| *AuthenticationApi*          | [**postAuthToken**](docs/Api/AuthenticationApi.md#postauthtoken)                                                                                      | **POST** /auth/token                                                           | Create a token                        |
| *CommentsApi*                | [**createNewCommentV1CommentsObjectTypeObjectIdPost**](docs/Api/CommentsApi.md#createnewcommentv1commentsobjecttypeobjectidpost)                      | **POST** /comments/{object_type}/{object_id}                                   | Create New Comment                    |
| *CommentsApi*                | [**getCommentByIdV1CommentsCommentIdGet**](docs/Api/CommentsApi.md#getcommentbyidv1commentscommentidget)                                              | **GET** /comments/{comment_id}                                                 | Get Comment By Id                     |
| *CommentsApi*                | [**getCommentsV1CommentsObjectTypeObjectIdGet**](docs/Api/CommentsApi.md#getcommentsv1commentsobjecttypeobjectidget)                                  | **GET** /comments/{object_type}/{object_id}                                    | Get Comments                          |
| *CommentsApi*                | [**updateCommentByIdV1CommentsCommentIdPatch**](docs/Api/CommentsApi.md#updatecommentbyidv1commentscommentidpatch)                                    | **PATCH** /comments/{comment_id}                                               | Update Comment By Id                  |
| *CommercialConditionsApi*    | [**deleteCommercialConditionsId**](docs/Api/CommercialConditionsApi.md#deletecommercialconditionsid)                                                  | **DELETE** /commercial_conditions/{commercial_condition_id}                    | Delete Commercial Condition           |
| *CommercialConditionsApi*    | [**getCommercialConditions**](docs/Api/CommercialConditionsApi.md#getcommercialconditions)                                                            | **GET** /commercial_conditions                                                 | Get All Commercial Conditions         |
| *CommercialConditionsApi*    | [**getCommercialConditionsId**](docs/Api/CommercialConditionsApi.md#getcommercialconditionsid)                                                        | **GET** /commercial_conditions/{commercial_condition_id}                       | Get Commercial Condition              |
| *CommercialConditionsApi*    | [**postCommercialConditions**](docs/Api/CommercialConditionsApi.md#postcommercialconditions)                                                          | **POST** /commercial_conditions                                                | Add Commercial Condition              |
| *CommercialConditionsApi*    | [**putCommercialConditionsId**](docs/Api/CommercialConditionsApi.md#putcommercialconditionsid)                                                        | **PUT** /commercial_conditions/{commercial_condition_id}                       | Update Commercial Condition           |
| *CounterpartAddressesApi*    | [**deleteCounterpartsIdAddressesId**](docs/Api/CounterpartAddressesApi.md#deletecounterpartsidaddressesid)                                            | **DELETE** /counterparts/{counterpart_id}/addresses/{address_id}               | Delete Counterpart Address By Id      |
| *CounterpartAddressesApi*    | [**getCounterpartsIdAddresses**](docs/Api/CounterpartAddressesApi.md#getcounterpartsidaddresses)                                                      | **GET** /counterparts/{counterpart_id}/addresses                               | Get Counterpart Addresses             |
| *CounterpartAddressesApi*    | [**getCounterpartsIdAddressesId**](docs/Api/CounterpartAddressesApi.md#getcounterpartsidaddressesid)                                                  | **GET** /counterparts/{counterpart_id}/addresses/{address_id}                  | Get Counterpart Addresses By Id       |
| *CounterpartAddressesApi*    | [**patchCounterpartsIdAddressesId**](docs/Api/CounterpartAddressesApi.md#patchcounterpartsidaddressesid)                                              | **PATCH** /counterparts/{counterpart_id}/addresses/{address_id}                | Update Counterparts Address           |
| *CounterpartAddressesApi*    | [**postCounterpartsIdAddresses**](docs/Api/CounterpartAddressesApi.md#postcounterpartsidaddresses)                                                    | **POST** /counterparts/{counterpart_id}/addresses                              | Create Counterparts Address           |
| *CounterpartAddressesApi*    | [**postCounterpartsIdAddressesIdMakeDefault**](docs/Api/CounterpartAddressesApi.md#postcounterpartsidaddressesidmakedefault)                          | **POST** /counterparts/{counterpart_id}/addresses/{address_id}/make_default    | Make Counterparts Address Default     |
| *CounterpartBankAccountsApi* | [**deleteCounterpartsIdBankAccountsId**](docs/Api/CounterpartBankAccountsApi.md#deletecounterpartsidbankaccountsid)                                   | **DELETE** /counterparts/{counterpart_id}/bank_accounts/{bank_account_id}      | Delete Counterpart Bank Account By Id |
| *CounterpartBankAccountsApi* | [**getCounterpartsIdBankAccounts**](docs/Api/CounterpartBankAccountsApi.md#getcounterpartsidbankaccounts)                                             | **GET** /counterparts/{counterpart_id}/bank_accounts                           | Get Counterparts Bank Accounts        |
| *CounterpartBankAccountsApi* | [**getCounterpartsIdBankAccountsId**](docs/Api/CounterpartBankAccountsApi.md#getcounterpartsidbankaccountsid)                                         | **GET** /counterparts/{counterpart_id}/bank_accounts/{bank_account_id}         | Get Counterparts Bank Accounts By Id  |
| *CounterpartBankAccountsApi* | [**patchCounterpartsIdBankAccountsId**](docs/Api/CounterpartBankAccountsApi.md#patchcounterpartsidbankaccountsid)                                     | **PATCH** /counterparts/{counterpart_id}/bank_accounts/{bank_account_id}       | Update Counterparts Bank Account      |
| *CounterpartBankAccountsApi* | [**postCounterpartsIdBankAccounts**](docs/Api/CounterpartBankAccountsApi.md#postcounterpartsidbankaccounts)                                           | **POST** /counterparts/{counterpart_id}/bank_accounts                          | Create Counterparts Bank Account      |
| *CounterpartContactsApi*     | [**deleteCounterpartsIdContactsId**](docs/Api/CounterpartContactsApi.md#deletecounterpartsidcontactsid)                                               | **DELETE** /counterparts/{counterpart_id}/contacts/{contact_id}                | Delete Counterpart Contact By Id      |
| *CounterpartContactsApi*     | [**getCounterpartsIdContacts**](docs/Api/CounterpartContactsApi.md#getcounterpartsidcontacts)                                                         | **GET** /counterparts/{counterpart_id}/contacts                                | Get Counterpart Contacts              |
| *CounterpartContactsApi*     | [**getCounterpartsIdContactsId**](docs/Api/CounterpartContactsApi.md#getcounterpartsidcontactsid)                                                     | **GET** /counterparts/{counterpart_id}/contacts/{contact_id}                   | Get Counterpart Contact By Id         |
| *CounterpartContactsApi*     | [**patchCounterpartsIdContactsId**](docs/Api/CounterpartContactsApi.md#patchcounterpartsidcontactsid)                                                 | **PATCH** /counterparts/{counterpart_id}/contacts/{contact_id}                 | Update Counterpart Contact By Id      |
| *CounterpartContactsApi*     | [**postCounterpartsIdContacts**](docs/Api/CounterpartContactsApi.md#postcounterpartsidcontacts)                                                       | **POST** /counterparts/{counterpart_id}/contacts                               | Create Counterpart Contacts           |
| *CounterpartContactsApi*     | [**postCounterpartsIdContactsIdMakeDefault**](docs/Api/CounterpartContactsApi.md#postcounterpartsidcontactsidmakedefault)                             | **POST** /counterparts/{counterpart_id}/contacts/{contact_id}/make_default     | Make Counterpart Contact Default      |
| *CounterpartTaxIDsApi*       | [**deleteCounterpartsIdTaxIdsId**](docs/Api/CounterpartTaxIDsApi.md#deletecounterpartsidtaxidsid)                                                     | **DELETE** /counterparts/{counterpart_id}/tax_ids/{id}                         | Delete Counterpart Tax Id By Id       |
| *CounterpartTaxIDsApi*       | [**getCounterpartsIdTaxIds**](docs/Api/CounterpartTaxIDsApi.md#getcounterpartsidtaxids)                                                               | **GET** /counterparts/{counterpart_id}/tax_ids                                 | Get Counterparts Tax Ids              |
| *CounterpartTaxIDsApi*       | [**getCounterpartsIdTaxIdsId**](docs/Api/CounterpartTaxIDsApi.md#getcounterpartsidtaxidsid)                                                           | **GET** /counterparts/{counterpart_id}/tax_ids/{id}                            | Get Counterparts Tax Ids By Id        |
| *CounterpartTaxIDsApi*       | [**patchCounterpartsIdTaxIdsId**](docs/Api/CounterpartTaxIDsApi.md#patchcounterpartsidtaxidsid)                                                       | **PATCH** /counterparts/{counterpart_id}/tax_ids/{id}                          | Update Counterparts Tax Id            |
| *CounterpartTaxIDsApi*       | [**postCounterpartsIdTaxIds**](docs/Api/CounterpartTaxIDsApi.md#postcounterpartsidtaxids)                                                             | **POST** /counterparts/{counterpart_id}/tax_ids                                | Create Counterparts Tax Id            |
| *CounterpartsApi*            | [**deleteCounterpartsId**](docs/Api/CounterpartsApi.md#deletecounterpartsid)                                                                          | **DELETE** /counterparts/{counterpart_id}                                      | Delete Counterpart By Id              |
| *CounterpartsApi*            | [**getCounterparts**](docs/Api/CounterpartsApi.md#getcounterparts)                                                                                    | **GET** /counterparts                                                          | Get Counterparts                      |
| *CounterpartsApi*            | [**getCounterpartsId**](docs/Api/CounterpartsApi.md#getcounterpartsid)                                                                                | **GET** /counterparts/{counterpart_id}                                         | Get Counterpart By Id                 |
| *CounterpartsApi*            | [**getCounterpartsIdPartnerMetadata**](docs/Api/CounterpartsApi.md#getcounterpartsidpartnermetadata)                                                  | **GET** /counterparts/{counterpart_id}/partner_metadata                        | Get Partner Metadata                  |
| *CounterpartsApi*            | [**patchCounterpartsId**](docs/Api/CounterpartsApi.md#patchcounterpartsid)                                                                            | **PATCH** /counterparts/{counterpart_id}                                       | Update Counterpart                    |
| *CounterpartsApi*            | [**postCounterparts**](docs/Api/CounterpartsApi.md#postcounterparts)                                                                                  | **POST** /counterparts                                                         | Create New Counterpart                |
| *CounterpartsApi*            | [**putCounterpartsIdPartnerMetadata**](docs/Api/CounterpartsApi.md#putcounterpartsidpartnermetadata)                                                  | **PUT** /counterparts/{counterpart_id}/partner_metadata                        | Put Partner Metadata                  |
| *DocumentTemplatesApi*       | [**getDocumentTemplates**](docs/Api/DocumentTemplatesApi.md#getdocumenttemplates)                                                                     | **GET** /document_templates                                                    | Get Document Templates                |
| *DocumentTemplatesApi*       | [**getDocumentTemplatesId**](docs/Api/DocumentTemplatesApi.md#getdocumenttemplatesid)                                                                 | **GET** /document_templates/{document_template_id}                             | Get Document Template By Id           |
| *DocumentTemplatesApi*       | [**postDocumentTemplatesIdMakeDefault**](docs/Api/DocumentTemplatesApi.md#postdocumenttemplatesidmakedefault)                                         | **POST** /document_templates/{document_template_id}/make_default               | Make Template Default By Id           |
| *DomainsApi*                 | [**deleteMailboxDomainsId**](docs/Api/DomainsApi.md#deletemailboxdomainsid)                                                                           | **DELETE** /mailbox_domains/{domain_id}                                        | Delete Domain                         |
| *DomainsApi*                 | [**getMailboxDomains**](docs/Api/DomainsApi.md#getmailboxdomains)                                                                                     | **GET** /mailbox_domains                                                       | Get Domains                           |
| *DomainsApi*                 | [**postMailboxDomains**](docs/Api/DomainsApi.md#postmailboxdomains)                                                                                   | **POST** /mailbox_domains                                                      | Create Domain                         |
| *DomainsApi*                 | [**postMailboxDomainsIdVerify**](docs/Api/DomainsApi.md#postmailboxdomainsidverify)                                                                   | **POST** /mailbox_domains/{domain_id}/verify                                   | Verify Domain                         |
| *EntitiesApi*                | [**getEntities**](docs/Api/EntitiesApi.md#getentities)                                                                                                | **GET** /entities                                                              | Get all entities                      |
| *EntitiesApi*                | [**getEntitiesId**](docs/Api/EntitiesApi.md#getentitiesid)                                                                                            | **GET** /entities/{entity_id}                                                  | Get an entity                         |
| *EntitiesApi*                | [**getEntitiesIdPartnerMetadata**](docs/Api/EntitiesApi.md#getentitiesidpartnermetadata)                                                              | **GET** /entities/{entity_id}/partner_metadata                                 | Get entity metadata                   |
| *EntitiesApi*                | [**getEntitiesIdSettings**](docs/Api/EntitiesApi.md#getentitiesidsettings)                                                                            | **GET** /entities/{entity_id}/settings                                         | Get entity settings                   |
| *EntitiesApi*                | [**patchEntitiesId**](docs/Api/EntitiesApi.md#patchentitiesid)                                                                                        | **PATCH** /entities/{entity_id}                                                | Update an entity                      |
| *EntitiesApi*                | [**patchEntitiesIdSettings**](docs/Api/EntitiesApi.md#patchentitiesidsettings)                                                                        | **PATCH** /entities/{entity_id}/settings                                       | Update entity settings                |
| *EntitiesApi*                | [**postEntities**](docs/Api/EntitiesApi.md#postentities)                                                                                              | **POST** /entities                                                             | Create an entity                      |
| *EntitiesApi*                | [**putEntitiesIdLogo**](docs/Api/EntitiesApi.md#putentitiesidlogo)                                                                                    | **PUT** /entities/{entity_id}/logo                                             | Upload an entity logo                 |
| *EntitiesApi*                | [**putEntitiesIdPartnerMetadata**](docs/Api/EntitiesApi.md#putentitiesidpartnermetadata)                                                              | **PUT** /entities/{entity_id}/partner_metadata                                 | Replace entity metadata               |
| *EntityBankAccountsApi*      | [**deleteBankAccountsId**](docs/Api/EntityBankAccountsApi.md#deletebankaccountsid)                                                                    | **DELETE** /bank_accounts/{bank_account_id}                                    | Delete the bank account               |
| *EntityBankAccountsApi*      | [**getBankAccounts**](docs/Api/EntityBankAccountsApi.md#getbankaccounts)                                                                              | **GET** /bank_accounts                                                         | Get all bank accounts                 |
| *EntityBankAccountsApi*      | [**getBankAccountsId**](docs/Api/EntityBankAccountsApi.md#getbankaccountsid)                                                                          | **GET** /bank_accounts/{bank_account_id}                                       | Get a bank account                    |
| *EntityBankAccountsApi*      | [**patchBankAccountsId**](docs/Api/EntityBankAccountsApi.md#patchbankaccountsid)                                                                      | **PATCH** /bank_accounts/{bank_account_id}                                     | Update a bank account                 |
| *EntityBankAccountsApi*      | [**postBankAccounts**](docs/Api/EntityBankAccountsApi.md#postbankaccounts)                                                                            | **POST** /bank_accounts                                                        | Create a bank account                 |
| *EntityBankAccountsApi*      | [**postBankAccountsIdMakeDefault**](docs/Api/EntityBankAccountsApi.md#postbankaccountsidmakedefault)                                                  | **POST** /bank_accounts/{bank_account_id}/make_default                         | Set a default bank account            |
| *EntityOnboardingDataApi*    | [**getEntitiesIdOnboardingData**](docs/Api/EntityOnboardingDataApi.md#getentitiesidonboardingdata)                                                    | **GET** /entities/{entity_id}/onboarding_data                                  | Get entity onboarding data            |
| *EntityOnboardingDataApi*    | [**putEntitiesIdOnboardingData**](docs/Api/EntityOnboardingDataApi.md#putentitiesidonboardingdata)                                                    | **PUT** /entities/{entity_id}/onboarding_data                                  | Update entity onboarding data         |
| *EntityUsersApi*             | [**getEntityUsers**](docs/Api/EntityUsersApi.md#getentityusers)                                                                                       | **GET** /entity_users                                                          | Get all entity users                  |
| *EntityUsersApi*             | [**getEntityUsersId**](docs/Api/EntityUsersApi.md#getentityusersid)                                                                                   | **GET** /entity_users/{entity_user_id}                                         | Get an entity user                    |
| *EntityUsersApi*             | [**patchEntityUsersId**](docs/Api/EntityUsersApi.md#patchentityusersid)                                                                               | **PATCH** /entity_users/{entity_user_id}                                       | Update an entity user                 |
| *EntityUsersApi*             | [**postEntityUsers**](docs/Api/EntityUsersApi.md#postentityusers)                                                                                     | **POST** /entity_users                                                         | Create an entity user                 |
| *ExportApi*                  | [**addDocumentExportV1DataExportsPost**](docs/Api/ExportApi.md#adddocumentexportv1dataexportspost)                                                    | **POST** /data_exports                                                         | Add Document Export                   |
| *ExportApi*                  | [**getAllV1DataExportsGet**](docs/Api/ExportApi.md#getallv1dataexportsget)                                                                            | **GET** /data_exports                                                          | Get All                               |
| *ExportApi*                  | [**getDocumentExportByIdV1DataExportsIdGet**](docs/Api/ExportApi.md#getdocumentexportbyidv1dataexportsidget)                                          | **GET** /data_exports/{id}                                                     | Get Document Export By Id             |
| *ExportApi*                  | [**getSupportedExportFormatsV1DataExportsSupportedFormatsGet**](docs/Api/ExportApi.md#getsupportedexportformatsv1dataexportssupportedformatsget)      | **GET** /data_exports/supported_formats                                        | Get Supported Export Formats          |
| *MailboxesApi*               | [**deleteMailboxesId**](docs/Api/MailboxesApi.md#deletemailboxesid)                                                                                   | **DELETE** /mailboxes/{mailbox_id}                                             | Delete Mailbox                        |
| *MailboxesApi*               | [**getMailboxes**](docs/Api/MailboxesApi.md#getmailboxes)                                                                                             | **GET** /mailboxes                                                             | Get Mailboxes                         |
| *MailboxesApi*               | [**postMailboxes**](docs/Api/MailboxesApi.md#postmailboxes)                                                                                           | **POST** /mailboxes                                                            | Create Mailbox                        |
| *MailboxesApi*               | [**postMailboxesSearch**](docs/Api/MailboxesApi.md#postmailboxessearch)                                                                               | **POST** /mailboxes/search                                                     | Get Mailboxes By Multiple Entity Ids  |
| *MeasureUnitsApi*            | [**deleteMeasureUnitsId**](docs/Api/MeasureUnitsApi.md#deletemeasureunitsid)                                                                          | **DELETE** /measure_units/{unit_id}                                            | Delete Unit By Id                     |
| *MeasureUnitsApi*            | [**getMeasureUnits**](docs/Api/MeasureUnitsApi.md#getmeasureunits)                                                                                    | **GET** /measure_units                                                         | Get Units                             |
| *MeasureUnitsApi*            | [**getMeasureUnitsId**](docs/Api/MeasureUnitsApi.md#getmeasureunitsid)                                                                                | **GET** /measure_units/{unit_id}                                               | Get Unit By Id                        |
| *MeasureUnitsApi*            | [**patchMeasureUnitsId**](docs/Api/MeasureUnitsApi.md#patchmeasureunitsid)                                                                            | **PATCH** /measure_units/{unit_id}                                             | Update Unit By Id                     |
| *MeasureUnitsApi*            | [**postMeasureUnits**](docs/Api/MeasureUnitsApi.md#postmeasureunits)                                                                                  | **POST** /measure_units                                                        | Create Unit                           |
| *OnboardingLinksApi*         | [**postPaymentOnboardingLinks**](docs/Api/OnboardingLinksApi.md#postpaymentonboardinglinks)                                                           | **POST** /payment_onboarding_links                                             | Create Onboarding Link                |
| *OnboardingRequirementsApi*  | [**getEntitiesIdOnboardingRequirements**](docs/Api/OnboardingRequirementsApi.md#getentitiesidonboardingrequirements)                                  | **GET** /entities/{entity_id}/onboarding_requirements                          | Get Onboarding Requirements           |
| *OnboardingRequirementsApi*  | [**patchEntitiesIdOnboardingRequirements**](docs/Api/OnboardingRequirementsApi.md#patchentitiesidonboardingrequirements)                              | **PATCH** /entities/{entity_id}/onboarding_requirements                        | Update Onboarding Requirements        |
| *OverdueRemindersApi*        | [**deleteOverdueRemindersId**](docs/Api/OverdueRemindersApi.md#deleteoverdueremindersid)                                                              | **DELETE** /overdue_reminders/{overdue_reminder_id}                            | Delete Overdue Reminder By Id         |
| *OverdueRemindersApi*        | [**getOverdueReminders**](docs/Api/OverdueRemindersApi.md#getoverduereminders)                                                                        | **GET** /overdue_reminders                                                     | Get Overdue Reminder                  |
| *OverdueRemindersApi*        | [**getOverdueRemindersId**](docs/Api/OverdueRemindersApi.md#getoverdueremindersid)                                                                    | **GET** /overdue_reminders/{overdue_reminder_id}                               | Get Overdue Reminder By Id            |
| *OverdueRemindersApi*        | [**patchOverdueRemindersId**](docs/Api/OverdueRemindersApi.md#patchoverdueremindersid)                                                                | **PATCH** /overdue_reminders/{overdue_reminder_id}                             | Update Overdue Reminder By Id         |
| *OverdueRemindersApi*        | [**postOverdueReminders**](docs/Api/OverdueRemindersApi.md#postoverduereminders)                                                                      | **POST** /overdue_reminders                                                    | Create Overdue Reminder               |
| *PayableLineItemsApi*        | [**deletePayablesIdLineItemsId**](docs/Api/PayableLineItemsApi.md#deletepayablesidlineitemsid)                                                        | **DELETE** /payables/{payable_id}/line_items/{line_item_id}                    | Delete Line Item                      |
| *PayableLineItemsApi*        | [**getPayablesIdLineItems**](docs/Api/PayableLineItemsApi.md#getpayablesidlineitems)                                                                  | **GET** /payables/{payable_id}/line_items                                      | Get Line Items                        |
| *PayableLineItemsApi*        | [**getPayablesIdLineItemsId**](docs/Api/PayableLineItemsApi.md#getpayablesidlineitemsid)                                                              | **GET** /payables/{payable_id}/line_items/{line_item_id}                       | Get Line Item                         |
| *PayableLineItemsApi*        | [**patchPayablesIdLineItemsId**](docs/Api/PayableLineItemsApi.md#patchpayablesidlineitemsid)                                                          | **PATCH** /payables/{payable_id}/line_items/{line_item_id}                     | Update Line Item                      |
| *PayableLineItemsApi*        | [**postPayablesIdLineItems**](docs/Api/PayableLineItemsApi.md#postpayablesidlineitems)                                                                | **POST** /payables/{payable_id}/line_items                                     | Create Line Item                      |
| *PayableTagsApi*             | [**deleteTagsId**](docs/Api/PayableTagsApi.md#deletetagsid)                                                                                           | **DELETE** /tags/{tag_id}                                                      | Delete Tag                            |
| *PayableTagsApi*             | [**getTags**](docs/Api/PayableTagsApi.md#gettags)                                                                                                     | **GET** /tags                                                                  | Get Tags                              |
| *PayableTagsApi*             | [**getTagsId**](docs/Api/PayableTagsApi.md#gettagsid)                                                                                                 | **GET** /tags/{tag_id}                                                         | Get Tag                               |
| *PayableTagsApi*             | [**patchTagsId**](docs/Api/PayableTagsApi.md#patchtagsid)                                                                                             | **PATCH** /tags/{tag_id}                                                       | Update Tag                            |
| *PayableTagsApi*             | [**postTags**](docs/Api/PayableTagsApi.md#posttags)                                                                                                   | **POST** /tags                                                                 | Create Tag                            |
| *PayablesApi*                | [**getPayables**](docs/Api/PayablesApi.md#getpayables)                                                                                                | **GET** /payables                                                              | Get Payables                          |
| *PayablesApi*                | [**getPayablesId**](docs/Api/PayablesApi.md#getpayablesid)                                                                                            | **GET** /payables/{payable_id}                                                 | Get Payable By Id                     |
| *PayablesApi*                | [**getPayablesIdApprovalStatus**](docs/Api/PayablesApi.md#getpayablesidapprovalstatus)                                                                | **GET** /payables/{payable_id}/approval_status                                 | Get Approval Status Of Payable By Id  |
| *PayablesApi*                | [**getPayablesIdPartnerMetadata**](docs/Api/PayablesApi.md#getpayablesidpartnermetadata)                                                              | **GET** /payables/{payable_id}/partner_metadata                                | Get Partner Metadata                  |
| *PayablesApi*                | [**getPayablesIdWorkflow**](docs/Api/PayablesApi.md#getpayablesidworkflow)                                                                            | **GET** /payables/{payable_id}/workflow                                        | Get Workflow By Active Pipeline       |
| *PayablesApi*                | [**getPayablesPendingActions**](docs/Api/PayablesApi.md#getpayablespendingactions)                                                                    | **GET** /payables/pending_actions                                              | Get Pending Actions                   |
| *PayablesApi*                | [**patchPayablesId**](docs/Api/PayablesApi.md#patchpayablesid)                                                                                        | **PATCH** /payables/{payable_id}                                               | Update Payable By Id                  |
| *PayablesApi*                | [**postPayables**](docs/Api/PayablesApi.md#postpayables)                                                                                              | **POST** /payables                                                             | Upload New Payable                    |
| *PayablesApi*                | [**postPayablesIdApprovePaymentOperation**](docs/Api/PayablesApi.md#postpayablesidapprovepaymentoperation)                                            | **POST** /payables/{payable_id}/approve_payment_operation                      | Confirm Payment                       |
| *PayablesApi*                | [**postPayablesIdCancel**](docs/Api/PayablesApi.md#postpayablesidcancel)                                                                              | **POST** /payables/{payable_id}/cancel                                         | Cancel Payable                        |
| *PayablesApi*                | [**postPayablesIdMarkAsPaid**](docs/Api/PayablesApi.md#postpayablesidmarkaspaid)                                                                      | **POST** /payables/{payable_id}/mark_as_paid                                   | Mark Payable As Paid                  |
| *PayablesApi*                | [**postPayablesIdReject**](docs/Api/PayablesApi.md#postpayablesidreject)                                                                              | **POST** /payables/{payable_id}/reject                                         | Reject Payable                        |
| *PayablesApi*                | [**postPayablesIdSubmitForApproval**](docs/Api/PayablesApi.md#postpayablesidsubmitforapproval)                                                        | **POST** /payables/{payable_id}/submit_for_approval                            | Submit For Approval                   |
| *PayablesApi*                | [**postPayablesUploadFromFile**](docs/Api/PayablesApi.md#postpayablesuploadfromfile)                                                                  | **POST** /payables/upload_from_file                                            | Upload Payable From File              |
| *PayablesApi*                | [**postPayablesUploadWithData**](docs/Api/PayablesApi.md#postpayablesuploadwithdata)                                                                  | **POST** /payables/upload_with_data                                            | Create a payable                      |
| *PayablesApi*                | [**putPayablesIdPartnerMetadata**](docs/Api/PayablesApi.md#putpayablesidpartnermetadata)                                                              | **PUT** /payables/{payable_id}/partner_metadata                                | Put Partner Metadata                  |
| *PaymentIntentsApi*          | [**getPaymentIntentsId**](docs/Api/PaymentIntentsApi.md#getpaymentintentsid)                                                                          | **GET** /payment_intents/{payment_intent_id}                                   | Get Payment Intent By Id              |
| *PaymentIntentsApi*          | [**getPaymentIntentsIdHistory**](docs/Api/PaymentIntentsApi.md#getpaymentintentsidhistory)                                                            | **GET** /payment_intents/{payment_intent_id}/history                           | Get Payment Intent History            |
| *PaymentLinksApi*            | [**getPaymentLinksId**](docs/Api/PaymentLinksApi.md#getpaymentlinksid)                                                                                | **GET** /payment_links/{payment_link_id}                                       | Get Payment Link                      |
| *PaymentLinksApi*            | [**postPaymentLinks**](docs/Api/PaymentLinksApi.md#postpaymentlinks)                                                                                  | **POST** /payment_links                                                        | Create Payment Link                   |
| *PaymentLinksApi*            | [**postPaymentLinksIdExpire**](docs/Api/PaymentLinksApi.md#postpaymentlinksidexpire)                                                                  | **POST** /payment_links/{payment_link_id}/expire                               | Expire Payment Link                   |
| *PaymentMethodsApi*          | [**getEntitiesIdPaymentMethods**](docs/Api/PaymentMethodsApi.md#getentitiesidpaymentmethods)                                                          | **GET** /entities/{entity_id}/payment_methods                                  | Get Enabled Payment Methods           |
| *PaymentMethodsApi*          | [**putEntitiesIdPaymentMethods**](docs/Api/PaymentMethodsApi.md#putentitiesidpaymentmethods)                                                          | **PUT** /entities/{entity_id}/payment_methods                                  | Enable Payment Methods                |
| *PaymentRemindersApi*        | [**deletePaymentRemindersId**](docs/Api/PaymentRemindersApi.md#deletepaymentremindersid)                                                              | **DELETE** /payment_reminders/{payment_reminder_id}                            | Delete Payment Reminders By Id        |
| *PaymentRemindersApi*        | [**getPaymentReminders**](docs/Api/PaymentRemindersApi.md#getpaymentreminders)                                                                        | **GET** /payment_reminders                                                     | Get Payment Reminders                 |
| *PaymentRemindersApi*        | [**getPaymentRemindersId**](docs/Api/PaymentRemindersApi.md#getpaymentremindersid)                                                                    | **GET** /payment_reminders/{payment_reminder_id}                               | Get Payment Reminders By Id           |
| *PaymentRemindersApi*        | [**patchPaymentRemindersId**](docs/Api/PaymentRemindersApi.md#patchpaymentremindersid)                                                                | **PATCH** /payment_reminders/{payment_reminder_id}                             | Update Payment Reminders By Id        |
| *PaymentRemindersApi*        | [**postPaymentReminders**](docs/Api/PaymentRemindersApi.md#postpaymentreminders)                                                                      | **POST** /payment_reminders                                                    | Create Payment Reminders              |
| *PaymentTermsApi*            | [**deletePaymentTermsId**](docs/Api/PaymentTermsApi.md#deletepaymenttermsid)                                                                          | **DELETE** /payment_terms/{payment_terms_id}                                   | Delete Item By Id                     |
| *PaymentTermsApi*            | [**getPaymentTerms**](docs/Api/PaymentTermsApi.md#getpaymentterms)                                                                                    | **GET** /payment_terms                                                         | Get Items                             |
| *PaymentTermsApi*            | [**getPaymentTermsId**](docs/Api/PaymentTermsApi.md#getpaymenttermsid)                                                                                | **GET** /payment_terms/{payment_terms_id}                                      | Get Item By Id                        |
| *PaymentTermsApi*            | [**patchPaymentTermsId**](docs/Api/PaymentTermsApi.md#patchpaymenttermsid)                                                                            | **PATCH** /payment_terms/{payment_terms_id}                                    | Update Item By Id                     |
| *PaymentTermsApi*            | [**postPaymentTerms**](docs/Api/PaymentTermsApi.md#postpaymentterms)                                                                                  | **POST** /payment_terms                                                        | Create Item                           |
| *ProductsApi*                | [**deleteProductsId**](docs/Api/ProductsApi.md#deleteproductsid)                                                                                      | **DELETE** /products/{product_id}                                              | Delete Product By Id                  |
| *ProductsApi*                | [**getProducts**](docs/Api/ProductsApi.md#getproducts)                                                                                                | **GET** /products                                                              | Get Products                          |
| *ProductsApi*                | [**getProductsId**](docs/Api/ProductsApi.md#getproductsid)                                                                                            | **GET** /products/{product_id}                                                 | Get Product By Id                     |
| *ProductsApi*                | [**patchProductsId**](docs/Api/ProductsApi.md#patchproductsid)                                                                                        | **PATCH** /products/{product_id}                                               | Update Product By Id                  |
| *ProductsApi*                | [**postProducts**](docs/Api/ProductsApi.md#postproducts)                                                                                              | **POST** /products                                                             | Create Product                        |
| *ProfileApi*                 | [**getProfile**](docs/Api/ProfileApi.md#getprofile)                                                                                                   | **GET** /profile                                                               | Get the user profile                  |
| *ProfileApi*                 | [**patchProfile**](docs/Api/ProfileApi.md#patchprofile)                                                                                               | **PATCH** /profile                                                             | Update the user profile               |
| *ProjectSettingsApi*         | [**getSettings**](docs/Api/ProjectSettingsApi.md#getsettings)                                                                                         | **GET** /settings                                                              | Get partner settings                  |
| *ProjectSettingsApi*         | [**patchSettings**](docs/Api/ProjectSettingsApi.md#patchsettings)                                                                                     | **PATCH** /settings                                                            | Update partner settings               |
| *PurchaseOrdersApi*          | [**deletePayablePurchaseOrdersId**](docs/Api/PurchaseOrdersApi.md#deletepayablepurchaseordersid)                                                      | **DELETE** /payable_purchase_orders/{purchase_order_id}                        | Delete Purchase Order                 |
| *PurchaseOrdersApi*          | [**getPayablePurchaseOrdersId**](docs/Api/PurchaseOrdersApi.md#getpayablepurchaseordersid)                                                            | **GET** /payable_purchase_orders/{purchase_order_id}                           | Get Purchase Order                    |
| *PurchaseOrdersApi*          | [**getPayablePurchaseOrdersPagination**](docs/Api/PurchaseOrdersApi.md#getpayablepurchaseorderspagination)                                            | **GET** /payable_purchase_orders/pagination                                    | Get All Purchase Orders               |
| *PurchaseOrdersApi*          | [**getPayablePurchaseOrdersVariables**](docs/Api/PurchaseOrdersApi.md#getpayablepurchaseordersvariables)                                              | **GET** /payable_purchase_orders/variables                                     | Get Variables                         |
| *PurchaseOrdersApi*          | [**patchPayablePurchaseOrdersId**](docs/Api/PurchaseOrdersApi.md#patchpayablepurchaseordersid)                                                        | **PATCH** /payable_purchase_orders/{purchase_order_id}                         | Update Purchase Order                 |
| *PurchaseOrdersApi*          | [**postPayablePurchaseOrders**](docs/Api/PurchaseOrdersApi.md#postpayablepurchaseorders)                                                              | **POST** /payable_purchase_orders                                              | Create Purchase Order                 |
| *PurchaseOrdersApi*          | [**postPayablePurchaseOrdersIdPreview**](docs/Api/PurchaseOrdersApi.md#postpayablepurchaseordersidpreview)                                            | **POST** /payable_purchase_orders/{purchase_order_id}/preview                  | Preview                               |
| *PurchaseOrdersApi*          | [**postPayablePurchaseOrdersIdSend**](docs/Api/PurchaseOrdersApi.md#postpayablepurchaseordersidsend)                                                  | **POST** /payable_purchase_orders/{purchase_order_id}/send                     | Send                                  |
| *ReceivablesApi*             | [**deleteReceivablesId**](docs/Api/ReceivablesApi.md#deletereceivablesid)                                                                             | **DELETE** /receivables/{receivable_id}                                        | Delete Receivable By Id               |
| *ReceivablesApi*             | [**getReceivables**](docs/Api/ReceivablesApi.md#getreceivables)                                                                                       | **GET** /receivables                                                           | Get All                               |
| *ReceivablesApi*             | [**getReceivablesId**](docs/Api/ReceivablesApi.md#getreceivablesid)                                                                                   | **GET** /receivables/{receivable_id}                                           | Get Receivable By Id                  |
| *ReceivablesApi*             | [**getReceivablesIdPdfLink**](docs/Api/ReceivablesApi.md#getreceivablesidpdflink)                                                                     | **GET** /receivables/{receivable_id}/pdf_link                                  | Get Pdf Link                          |
| *ReceivablesApi*             | [**getReceivablesVariables**](docs/Api/ReceivablesApi.md#getreceivablesvariables)                                                                     | **GET** /receivables/variables                                                 | Get Variables                         |
| *ReceivablesApi*             | [**patchReceivablesId**](docs/Api/ReceivablesApi.md#patchreceivablesid)                                                                               | **PATCH** /receivables/{receivable_id}                                         | Update Receivable By Id               |
| *ReceivablesApi*             | [**postReceivables**](docs/Api/ReceivablesApi.md#postreceivables)                                                                                     | **POST** /receivables                                                          | Create New Receivable                 |
| *ReceivablesApi*             | [**postReceivablesIdAccept**](docs/Api/ReceivablesApi.md#postreceivablesidaccept)                                                                     | **POST** /receivables/{receivable_id}/accept                                   | Accept Quote                          |
| *ReceivablesApi*             | [**postReceivablesIdCancel**](docs/Api/ReceivablesApi.md#postreceivablesidcancel)                                                                     | **POST** /receivables/{receivable_id}/cancel                                   | Cancel Receivable By Id               |
| *ReceivablesApi*             | [**postReceivablesIdClone**](docs/Api/ReceivablesApi.md#postreceivablesidclone)                                                                       | **POST** /receivables/{receivable_id}/clone                                    | Clone Receivable                      |
| *ReceivablesApi*             | [**postReceivablesIdDecline**](docs/Api/ReceivablesApi.md#postreceivablesiddecline)                                                                   | **POST** /receivables/{receivable_id}/decline                                  | Decline Quote                         |
| *ReceivablesApi*             | [**postReceivablesIdIssue**](docs/Api/ReceivablesApi.md#postreceivablesidissue)                                                                       | **POST** /receivables/{receivable_id}/issue                                    | Issue Receivable                      |
| *ReceivablesApi*             | [**postReceivablesIdMarkAsPaid**](docs/Api/ReceivablesApi.md#postreceivablesidmarkaspaid)                                                             | **POST** /receivables/{receivable_id}/mark_as_paid                             | Mark As Paid                          |
| *ReceivablesApi*             | [**postReceivablesIdMarkAsUncollectible**](docs/Api/ReceivablesApi.md#postreceivablesidmarkasuncollectible)                                           | **POST** /receivables/{receivable_id}/mark_as_uncollectible                    | Mark As Uncollectible                 |
| *ReceivablesApi*             | [**postReceivablesIdPreview**](docs/Api/ReceivablesApi.md#postreceivablesidpreview)                                                                   | **POST** /receivables/{receivable_id}/preview                                  | Preview                               |
| *ReceivablesApi*             | [**postReceivablesIdSend**](docs/Api/ReceivablesApi.md#postreceivablesidsend)                                                                         | **POST** /receivables/{receivable_id}/send                                     | Send                                  |
| *ReceivablesApi*             | [**postReceivablesIdVerify**](docs/Api/ReceivablesApi.md#postreceivablesidverify)                                                                     | **POST** /receivables/{receivable_id}/verify                                   | Verify Receivable                     |
| *RecurrencesApi*             | [**getRecurrences**](docs/Api/RecurrencesApi.md#getrecurrences)                                                                                       | **GET** /recurrences                                                           | Get All Recurrences                   |
| *RecurrencesApi*             | [**getRecurrencesId**](docs/Api/RecurrencesApi.md#getrecurrencesid)                                                                                   | **GET** /recurrences/{recurrence_id}                                           | Get Recurrence                        |
| *RecurrencesApi*             | [**patchRecurrencesId**](docs/Api/RecurrencesApi.md#patchrecurrencesid)                                                                               | **PATCH** /recurrences/{recurrence_id}                                         | Update Recurrence                     |
| *RecurrencesApi*             | [**postRecurrences**](docs/Api/RecurrencesApi.md#postrecurrences)                                                                                     | **POST** /recurrences                                                          | Create Recurrence                     |
| *RecurrencesApi*             | [**postRecurrencesIdCancel**](docs/Api/RecurrencesApi.md#postrecurrencesidcancel)                                                                     | **POST** /recurrences/{recurrence_id}/cancel                                   | Delete Reccurence By Id               |
| *RolesApi*                   | [**getRoles**](docs/Api/RolesApi.md#getroles)                                                                                                         | **GET** /roles                                                                 | Get all roles                         |
| *RolesApi*                   | [**getRolesId**](docs/Api/RolesApi.md#getrolesid)                                                                                                     | **GET** /roles/{role_id}                                                       | Get a role                            |
| *RolesApi*                   | [**patchRolesId**](docs/Api/RolesApi.md#patchrolesid)                                                                                                 | **PATCH** /roles/{role_id}                                                     | Update a role                         |
| *RolesApi*                   | [**postRoles**](docs/Api/RolesApi.md#postroles)                                                                                                       | **POST** /roles                                                                | Create a role                         |
| *RolesApi*                   | [**postRolesSearch**](docs/Api/RolesApi.md#postrolessearch)                                                                                           | **POST** /roles/search                                                         | Roles lookup                          |
| *TemplatesApi*               | [**deleteMailTemplatesId**](docs/Api/TemplatesApi.md#deletemailtemplatesid)                                                                           | **DELETE** /mail_templates/{template_id}                                       | Delete                                |
| *TemplatesApi*               | [**getMailTemplates**](docs/Api/TemplatesApi.md#getmailtemplates)                                                                                     | **GET** /mail_templates                                                        | Get All                               |
| *TemplatesApi*               | [**getMailTemplatesId**](docs/Api/TemplatesApi.md#getmailtemplatesid)                                                                                 | **GET** /mail_templates/{template_id}                                          | Get                                   |
| *TemplatesApi*               | [**getMailTemplatesSystem**](docs/Api/TemplatesApi.md#getmailtemplatessystem)                                                                         | **GET** /mail_templates/system                                                 | Get All System Templates              |
| *TemplatesApi*               | [**patchMailTemplatesId**](docs/Api/TemplatesApi.md#patchmailtemplatesid)                                                                             | **PATCH** /mail_templates/{template_id}                                        | Update                                |
| *TemplatesApi*               | [**postMailTemplates**](docs/Api/TemplatesApi.md#postmailtemplates)                                                                                   | **POST** /mail_templates                                                       | Create                                |
| *TextTemplatesApi*           | [**deleteTextTemplatesId**](docs/Api/TextTemplatesApi.md#deletetexttemplatesid)                                                                       | **DELETE** /text_templates/{text_template_id}                                  | Delete                                |
| *TextTemplatesApi*           | [**getTextTemplates**](docs/Api/TextTemplatesApi.md#gettexttemplates)                                                                                 | **GET** /text_templates                                                        | Get All                               |
| *TextTemplatesApi*           | [**getTextTemplatesId**](docs/Api/TextTemplatesApi.md#gettexttemplatesid)                                                                             | **GET** /text_templates/{text_template_id}                                     | Get                                   |
| *TextTemplatesApi*           | [**getTextTemplatesVariables**](docs/Api/TextTemplatesApi.md#gettexttemplatesvariables)                                                               | **GET** /text_templates/variables                                              | Get Variables                         |
| *TextTemplatesApi*           | [**patchTextTemplatesId**](docs/Api/TextTemplatesApi.md#patchtexttemplatesid)                                                                         | **PATCH** /text_templates/{text_template_id}                                   | Update                                |
| *TextTemplatesApi*           | [**postTextTemplates**](docs/Api/TextTemplatesApi.md#posttexttemplates)                                                                               | **POST** /text_templates                                                       | Create                                |
| *TextTemplatesApi*           | [**postTextTemplatesIdMakeDefault**](docs/Api/TextTemplatesApi.md#posttexttemplatesidmakedefault)                                                     | **POST** /text_templates/{text_template_id}/make_default                       | Make                                  |
| *ToDoTasksApi*               | [**getAllTodoTasksAssignedV1TodoTasksGet**](docs/Api/ToDoTasksApi.md#getalltodotasksassignedv1todotasksget)                                           | **GET** /todo_tasks                                                            | Get All Todo Tasks Assigned           |
| *ToDoTasksApi*               | [**howManyTasksDoIHaveV1TodoTasksCountersGet**](docs/Api/ToDoTasksApi.md#howmanytasksdoihavev1todotaskscountersget)                                   | **GET** /todo_tasks/counters                                                   | How Many Tasks Do I Have              |
| *ToDoTasksApi*               | [**readOneTodoTaskV1TodoTasksTodoTaskIdGet**](docs/Api/ToDoTasksApi.md#readonetodotaskv1todotaskstodotaskidget)                                       | **GET** /todo_tasks/{todo_task_id}                                             | Read One Todo Task                    |
| *ToDoTasksApi*               | [**updateTaskV1TodoTasksTodoTaskIdPatch**](docs/Api/ToDoTasksApi.md#updatetaskv1todotaskstodotaskidpatch)                                             | **PATCH** /todo_tasks/{todo_task_id}                                           | Update Task                           |
| *VATRatesApi*                | [**deleteVatRates**](docs/Api/VATRatesApi.md#deletevatrates)                                                                                          | **DELETE** /vat_rates                                                          | Delete Vat Rates                      |
| *VATRatesApi*                | [**getVatRates**](docs/Api/VATRatesApi.md#getvatrates)                                                                                                | **GET** /vat_rates                                                             | Get Vat Rates                         |
| *VATRatesApi*                | [**getVatRatesIdId**](docs/Api/VATRatesApi.md#getvatratesidid)                                                                                        | **GET** /vat_rates/{counterpart_id}/{product_id}                               | Get Vat Rate Using Picker Workflow    |
| *VATRatesApi*                | [**postVatRates**](docs/Api/VATRatesApi.md#postvatrates)                                                                                              | **POST** /vat_rates                                                            | Update Or Create Vat Rates            |
| *WebhookSettingsApi*         | [**deleteV1WebhookSettingsWebhookIdDelete**](docs/Api/WebhookSettingsApi.md#deletev1webhooksettingswebhookiddelete)                                   | **DELETE** /webhook_settings/{webhook_id}                                      | Delete                                |
| *WebhookSettingsApi*         | [**getAllV1WebhookSettingsGet**](docs/Api/WebhookSettingsApi.md#getallv1webhooksettingsget)                                                           | **GET** /webhook_settings                                                      | Get All                               |
| *WebhookSettingsApi*         | [**getV1WebhookSettingsWebhookIdGet**](docs/Api/WebhookSettingsApi.md#getv1webhooksettingswebhookidget)                                               | **GET** /webhook_settings/{webhook_id}                                         | Get                                   |
| *WebhookSettingsApi*         | [**postV1WebhookSettingsPost**](docs/Api/WebhookSettingsApi.md#postv1webhooksettingspost)                                                             | **POST** /webhook_settings                                                     | Post                                  |
| *WebhookSettingsApi*         | [**updateWebhookV1WebhookSettingsWebhookIdPatch**](docs/Api/WebhookSettingsApi.md#updatewebhookv1webhooksettingswebhookidpatch)                       | **PATCH** /webhook_settings/{webhook_id}                                       | Update Webhook                        |
| *WebhooksApi*                | [**getAllV1WebhooksGet**](docs/Api/WebhooksApi.md#getallv1webhooksget)                                                                                | **GET** /webhooks                                                              | Get All                               |
| *WorkflowsApi*               | [**createNewWorkflowV1WorkflowsPost**](docs/Api/WorkflowsApi.md#createnewworkflowv1workflowspost)                                                     | **POST** /workflows                                                            | Create New Workflow                   |
| *WorkflowsApi*               | [**deleteWorkflowV1WorkflowsWorkflowIdDelete**](docs/Api/WorkflowsApi.md#deleteworkflowv1workflowsworkflowiddelete)                                   | **DELETE** /workflows/{workflow_id}                                            | Delete Workflow                       |
| *WorkflowsApi*               | [**getPipelinesV1WorkflowsPipelinesGet**](docs/Api/WorkflowsApi.md#getpipelinesv1workflowspipelinesget)                                               | **GET** /workflows/pipelines                                                   | Get Pipelines                         |
| *WorkflowsApi*               | [**getSinglePipelineV1WorkflowsPipelinesPipelineIdGet**](docs/Api/WorkflowsApi.md#getsinglepipelinev1workflowspipelinespipelineidget)                 | **GET** /workflows/pipelines/{pipeline_id}                                     | Get Single Pipeline                   |
| *WorkflowsApi*               | [**readPipelinesByWorkflowIdV1WorkflowsWorkflowIdPipelinesGet**](docs/Api/WorkflowsApi.md#readpipelinesbyworkflowidv1workflowsworkflowidpipelinesget) | **GET** /workflows/{workflow_id}/pipelines                                     | Read Pipelines By Workflow Id         |
| *WorkflowsApi*               | [**readSingleWorkflowV1WorkflowsWorkflowIdGet**](docs/Api/WorkflowsApi.md#readsingleworkflowv1workflowsworkflowidget)                                 | **GET** /workflows/{workflow_id}                                               | Read Single Workflow                  |
| *WorkflowsApi*               | [**readWorkflowsV1WorkflowsGet**](docs/Api/WorkflowsApi.md#readworkflowsv1workflowsget)                                                               | **GET** /workflows                                                             | Read Workflows                        |

## Models

- [AccessTokenResponse](docs/Model/AccessTokenResponse.md)
- [AccountDisabledReason](docs/Model/AccountDisabledReason.md)
- [AccountResponse](docs/Model/AccountResponse.md)
- [ActionEnum](docs/Model/ActionEnum.md)
- [ActionSchema](docs/Model/ActionSchema.md)
- [ActionSchema2](docs/Model/ActionSchema2.md)
- [ActionSchema3](docs/Model/ActionSchema3.md)
- [ActionSchema4](docs/Model/ActionSchema4.md)
- [AddCustomTemplateSchema](docs/Model/AddCustomTemplateSchema.md)
- [AllDocumentExportResponseSchema](docs/Model/AllDocumentExportResponseSchema.md)
- [AllOverdueRemindersResponse](docs/Model/AllOverdueRemindersResponse.md)
- [AllowedCountriesCodes](docs/Model/AllowedCountriesCodes.md)
- [ApprovalCursorFields](docs/Model/ApprovalCursorFields.md)
- [ApprovalPolicyCreate](docs/Model/ApprovalPolicyCreate.md)
- [ApprovalPolicyCreateScriptInner](docs/Model/ApprovalPolicyCreateScriptInner.md)
- [ApprovalPolicyCreateTrigger](docs/Model/ApprovalPolicyCreateTrigger.md)
- [ApprovalPolicyCursorFields](docs/Model/ApprovalPolicyCursorFields.md)
- [ApprovalPolicyResource](docs/Model/ApprovalPolicyResource.md)
- [ApprovalPolicyShortResource](docs/Model/ApprovalPolicyShortResource.md)
- [ApprovalPolicyShortResourceList](docs/Model/ApprovalPolicyShortResourceList.md)
- [ApprovalPolicyStatus](docs/Model/ApprovalPolicyStatus.md)
- [ApprovalPolicyUpdate](docs/Model/ApprovalPolicyUpdate.md)
- [ApprovalPolicyUpdateTrigger](docs/Model/ApprovalPolicyUpdateTrigger.md)
- [ApprovalProcessResourceList](docs/Model/ApprovalProcessResourceList.md)
- [ApprovalProcessStepResource](docs/Model/ApprovalProcessStepResource.md)
- [ApprovalProcessStepResourceList](docs/Model/ApprovalProcessStepResourceList.md)
- [ApprovalProcessStepStatus](docs/Model/ApprovalProcessStepStatus.md)
- [ApprovalRequestCreateByRoleRequest](docs/Model/ApprovalRequestCreateByRoleRequest.md)
- [ApprovalRequestCreateByUserRequest](docs/Model/ApprovalRequestCreateByUserRequest.md)
- [ApprovalRequestCreateRequest](docs/Model/ApprovalRequestCreateRequest.md)
- [ApprovalRequestCursorFields](docs/Model/ApprovalRequestCursorFields.md)
- [ApprovalRequestResourceList](docs/Model/ApprovalRequestResourceList.md)
- [ApprovalRequestResourceWithMetadata](docs/Model/ApprovalRequestResourceWithMetadata.md)
- [ApprovalRequestStatus](docs/Model/ApprovalRequestStatus.md)
- [ApprovalResponse](docs/Model/ApprovalResponse.md)
- [ApprovalStatusEnum](docs/Model/ApprovalStatusEnum.md)
- [ApprovalStatusResponse](docs/Model/ApprovalStatusResponse.md)
- [BankAccount](docs/Model/BankAccount.md)
- [BasedOnTransitionType](docs/Model/BasedOnTransitionType.md)
- [BizObjectsSchema](docs/Model/BizObjectsSchema.md)
- [BizObjectsSchema2](docs/Model/BizObjectsSchema2.md)
- [BizObjectsSchema3](docs/Model/BizObjectsSchema3.md)
- [BizObjectsSchema4](docs/Model/BizObjectsSchema4.md)
- [BusinessProfile](docs/Model/BusinessProfile.md)
- [ButtonTheme](docs/Model/ButtonTheme.md)
- [CardTheme](docs/Model/CardTheme.md)
- [CommentCursorFields](docs/Model/CommentCursorFields.md)
- [CommentPayload](docs/Model/CommentPayload.md)
- [CommentSchema](docs/Model/CommentSchema.md)
- [CommercialConditionRequest](docs/Model/CommercialConditionRequest.md)
- [CommercialConditionResponse](docs/Model/CommercialConditionResponse.md)
- [CommercialConditionUpdate](docs/Model/CommercialConditionUpdate.md)
- [CommonSchema](docs/Model/CommonSchema.md)
- [CommonSchema2](docs/Model/CommonSchema2.md)
- [CommonSchema3](docs/Model/CommonSchema3.md)
- [CommonSchema4](docs/Model/CommonSchema4.md)
- [CounterpartAddress](docs/Model/CounterpartAddress.md)
- [CounterpartAddressResourceList](docs/Model/CounterpartAddressResourceList.md)
- [CounterpartAddressResponseWithCounterpartID](docs/Model/CounterpartAddressResponseWithCounterpartID.md)
- [CounterpartBankAccount](docs/Model/CounterpartBankAccount.md)
- [CounterpartBankAccountResourceList](docs/Model/CounterpartBankAccountResourceList.md)
- [CounterpartBankAccountResponse](docs/Model/CounterpartBankAccountResponse.md)
- [CounterpartContactResponse](docs/Model/CounterpartContactResponse.md)
- [CounterpartContactResponseAddress](docs/Model/CounterpartContactResponseAddress.md)
- [CounterpartContactsResourceList](docs/Model/CounterpartContactsResourceList.md)
- [CounterpartCreatePayload](docs/Model/CounterpartCreatePayload.md)
- [CounterpartCursorFields](docs/Model/CounterpartCursorFields.md)
- [CounterpartIndividualCreatePayload](docs/Model/CounterpartIndividualCreatePayload.md)
- [CounterpartIndividualCreatePayloadResidentialAddress](docs/Model/CounterpartIndividualCreatePayloadResidentialAddress.md)
- [CounterpartIndividualResponse](docs/Model/CounterpartIndividualResponse.md)
- [CounterpartIndividualRootCreatePayload](docs/Model/CounterpartIndividualRootCreatePayload.md)
- [CounterpartIndividualRootResponse](docs/Model/CounterpartIndividualRootResponse.md)
- [CounterpartIndividualRootUpdatePayload](docs/Model/CounterpartIndividualRootUpdatePayload.md)
- [CounterpartIndividualUpdatePayload](docs/Model/CounterpartIndividualUpdatePayload.md)
- [CounterpartOrganizationCreatePayload](docs/Model/CounterpartOrganizationCreatePayload.md)
- [CounterpartOrganizationCreatePayloadRegisteredAddress](docs/Model/CounterpartOrganizationCreatePayloadRegisteredAddress.md)
- [CounterpartOrganizationResponse](docs/Model/CounterpartOrganizationResponse.md)
- [CounterpartOrganizationRootCreatePayload](docs/Model/CounterpartOrganizationRootCreatePayload.md)
- [CounterpartOrganizationRootResponse](docs/Model/CounterpartOrganizationRootResponse.md)
- [CounterpartOrganizationRootUpdatePayload](docs/Model/CounterpartOrganizationRootUpdatePayload.md)
- [CounterpartOrganizationUpdatePayload](docs/Model/CounterpartOrganizationUpdatePayload.md)
- [CounterpartPaginationResponse](docs/Model/CounterpartPaginationResponse.md)
- [CounterpartResponse](docs/Model/CounterpartResponse.md)
- [CounterpartTaxID](docs/Model/CounterpartTaxID.md)
- [CounterpartTaxIDResourceList](docs/Model/CounterpartTaxIDResourceList.md)
- [CounterpartTaxIDResponse](docs/Model/CounterpartTaxIDResponse.md)
- [CounterpartType](docs/Model/CounterpartType.md)
- [CounterpartUpdateAddress](docs/Model/CounterpartUpdateAddress.md)
- [CounterpartUpdatePayload](docs/Model/CounterpartUpdatePayload.md)
- [CounterpartUpdateTaxID](docs/Model/CounterpartUpdateTaxID.md)
- [CreateCounterpartContactPayload](docs/Model/CreateCounterpartContactPayload.md)
- [CreateEntityBankAccountRequest](docs/Model/CreateEntityBankAccountRequest.md)
- [CreateEntityRequest](docs/Model/CreateEntityRequest.md)
- [CreateEntityRequestAddress](docs/Model/CreateEntityRequestAddress.md)
- [CreateEntityRequestIndividual](docs/Model/CreateEntityRequestIndividual.md)
- [CreateEntityRequestOrganization](docs/Model/CreateEntityRequestOrganization.md)
- [CreateEntityUserRequest](docs/Model/CreateEntityUserRequest.md)
- [CreateExportTaskResponseSchema](docs/Model/CreateExportTaskResponseSchema.md)
- [CreateOnboardingLinkRequest](docs/Model/CreateOnboardingLinkRequest.md)
- [CreatePaymentLinkRequest](docs/Model/CreatePaymentLinkRequest.md)
- [CreatePaymentLinkWithObject](docs/Model/CreatePaymentLinkWithObject.md)
- [CreatePaymentLinkWithoutObject](docs/Model/CreatePaymentLinkWithoutObject.md)
- [CreateRecurrencePayload](docs/Model/CreateRecurrencePayload.md)
- [CreateRoleRequest](docs/Model/CreateRoleRequest.md)
- [CreateRoleRequestPermissions](docs/Model/CreateRoleRequestPermissions.md)
- [CreateTextTemplatePayload](docs/Model/CreateTextTemplatePayload.md)
- [CreateUpdateCommentSchema](docs/Model/CreateUpdateCommentSchema.md)
- [CreateWebhookRequest](docs/Model/CreateWebhookRequest.md)
- [CreateWorkflowSchema](docs/Model/CreateWorkflowSchema.md)
- [CreditNoteResponsePayload](docs/Model/CreditNoteResponsePayload.md)
- [CreditNoteResponsePayloadCounterpartBillingAddress](docs/Model/CreditNoteResponsePayloadCounterpartBillingAddress.md)
- [CreditNoteResponsePayloadCounterpartContact](docs/Model/CreditNoteResponsePayloadCounterpartContact.md)
- [CreditNoteResponsePayloadCounterpartShippingAddress](docs/Model/CreditNoteResponsePayloadCounterpartShippingAddress.md)
- [CreditNoteResponsePayloadDiscount](docs/Model/CreditNoteResponsePayloadDiscount.md)
- [CreditNoteResponsePayloadEntity](docs/Model/CreditNoteResponsePayloadEntity.md)
- [CreditNoteStateEnum](docs/Model/CreditNoteStateEnum.md)
- [CurrencyEnum](docs/Model/CurrencyEnum.md)
- [CurrencyExchangeSchema](docs/Model/CurrencyExchangeSchema.md)
- [CurrencySettings](docs/Model/CurrencySettings.md)
- [CustomTemplateDataSchema](docs/Model/CustomTemplateDataSchema.md)
- [CustomTemplates](docs/Model/CustomTemplates.md)
- [DayOfMonth](docs/Model/DayOfMonth.md)
- [Discount](docs/Model/Discount.md)
- [DiscountType](docs/Model/DiscountType.md)
- [DocumentExportResponseSchema](docs/Model/DocumentExportResponseSchema.md)
- [DocumentTypeEnum](docs/Model/DocumentTypeEnum.md)
- [DomainListResponse](docs/Model/DomainListResponse.md)
- [DomainRequest](docs/Model/DomainRequest.md)
- [DomainResponse](docs/Model/DomainResponse.md)
- [EnabledPaymentMethods](docs/Model/EnabledPaymentMethods.md)
- [EntityAddressSchema](docs/Model/EntityAddressSchema.md)
- [EntityAddressSchema2](docs/Model/EntityAddressSchema2.md)
- [EntityAddressSchema3](docs/Model/EntityAddressSchema3.md)
- [EntityBankAccountPaginationResponse](docs/Model/EntityBankAccountPaginationResponse.md)
- [EntityBankAccountRequest](docs/Model/EntityBankAccountRequest.md)
- [EntityBankAccountResponse](docs/Model/EntityBankAccountResponse.md)
- [EntityBusinessStructure](docs/Model/EntityBusinessStructure.md)
- [EntityCursorFields](docs/Model/EntityCursorFields.md)
- [EntityIndividual](docs/Model/EntityIndividual.md)
- [EntityIndividualResponse](docs/Model/EntityIndividualResponse.md)
- [EntityIndividualResponse2](docs/Model/EntityIndividualResponse2.md)
- [EntityIndividualResponse2Address](docs/Model/EntityIndividualResponse2Address.md)
- [EntityIndividualResponse2Individual](docs/Model/EntityIndividualResponse2Individual.md)
- [EntityIndividualResponse3](docs/Model/EntityIndividualResponse3.md)
- [EntityIndividualResponse3Individual](docs/Model/EntityIndividualResponse3Individual.md)
- [EntityIndividualResponseAddress](docs/Model/EntityIndividualResponseAddress.md)
- [EntityIndividualResponseIndividual](docs/Model/EntityIndividualResponseIndividual.md)
- [EntityIndividualResponseLogo](docs/Model/EntityIndividualResponseLogo.md)
- [EntityInfoSchema](docs/Model/EntityInfoSchema.md)
- [EntityOnboardingDataRequest](docs/Model/EntityOnboardingDataRequest.md)
- [EntityOnboardingDataRequestBusinessProfile](docs/Model/EntityOnboardingDataRequestBusinessProfile.md)
- [EntityOnboardingDataRequestTosAcceptance](docs/Model/EntityOnboardingDataRequestTosAcceptance.md)
- [EntityOnboardingDataResponse](docs/Model/EntityOnboardingDataResponse.md)
- [EntityOrganization](docs/Model/EntityOrganization.md)
- [EntityOrganizationResponse](docs/Model/EntityOrganizationResponse.md)
- [EntityOrganizationResponse2](docs/Model/EntityOrganizationResponse2.md)
- [EntityOrganizationResponse2Organization](docs/Model/EntityOrganizationResponse2Organization.md)
- [EntityOrganizationResponse3](docs/Model/EntityOrganizationResponse3.md)
- [EntityOrganizationResponse3Organization](docs/Model/EntityOrganizationResponse3Organization.md)
- [EntityOrganizationResponseOrganization](docs/Model/EntityOrganizationResponseOrganization.md)
- [EntityPaginationResponse](docs/Model/EntityPaginationResponse.md)
- [EntityResponse](docs/Model/EntityResponse.md)
- [EntityResponse2](docs/Model/EntityResponse2.md)
- [EntityTypeEnum](docs/Model/EntityTypeEnum.md)
- [EntityUserCursorFields](docs/Model/EntityUserCursorFields.md)
- [EntityUserPaginationResponse](docs/Model/EntityUserPaginationResponse.md)
- [EntityUserResponse](docs/Model/EntityUserResponse.md)
- [EntityUserResponse2](docs/Model/EntityUserResponse2.md)
- [EntityUserResponse2Role](docs/Model/EntityUserResponse2Role.md)
- [EntityUserResponse3](docs/Model/EntityUserResponse3.md)
- [EntityUserResponse3Role](docs/Model/EntityUserResponse3Role.md)
- [EntityUserResponseRole](docs/Model/EntityUserResponseRole.md)
- [ErrorSchema](docs/Model/ErrorSchema.md)
- [ErrorSchemaResponse](docs/Model/ErrorSchemaResponse.md)
- [ExchangeRate](docs/Model/ExchangeRate.md)
- [ExportCursorFields](docs/Model/ExportCursorFields.md)
- [ExportFormat](docs/Model/ExportFormat.md)
- [ExportObjectSchema](docs/Model/ExportObjectSchema.md)
- [ExportPayableSchema](docs/Model/ExportPayableSchema.md)
- [ExportPayloadSchema](docs/Model/ExportPayloadSchema.md)
- [ExportReceivableSchema](docs/Model/ExportReceivableSchema.md)
- [FileSchema](docs/Model/FileSchema.md)
- [GetAllPaymentReminders](docs/Model/GetAllPaymentReminders.md)
- [GetAllRecurrences](docs/Model/GetAllRecurrences.md)
- [GetProfileRequest](docs/Model/GetProfileRequest.md)
- [GrantType](docs/Model/GrantType.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [IndividualSchema](docs/Model/IndividualSchema.md)
- [IndividualSchema2](docs/Model/IndividualSchema2.md)
- [IndividualSchema3](docs/Model/IndividualSchema3.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceFile](docs/Model/InvoiceFile.md)
- [InvoiceResponsePayload](docs/Model/InvoiceResponsePayload.md)
- [InvoiceResponsePayloadRelatedDocuments](docs/Model/InvoiceResponsePayloadRelatedDocuments.md)
- [Item](docs/Model/Item.md)
- [IterationStatus](docs/Model/IterationStatus.md)
- [LabelNValue](docs/Model/LabelNValue.md)
- [LabelNValueLabel](docs/Model/LabelNValueLabel.md)
- [LabelNValueValue](docs/Model/LabelNValueValue.md)
- [LanguageEnum](docs/Model/LanguageEnum.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemCursorFields](docs/Model/LineItemCursorFields.md)
- [LineItemDataResponse](docs/Model/LineItemDataResponse.md)
- [LineItemDiscount](docs/Model/LineItemDiscount.md)
- [LineItemPaginationResponse](docs/Model/LineItemPaginationResponse.md)
- [LineItemProduct](docs/Model/LineItemProduct.md)
- [LineItemRequest](docs/Model/LineItemRequest.md)
- [LineItemResponse](docs/Model/LineItemResponse.md)
- [LineItemUpdate](docs/Model/LineItemUpdate.md)
- [MailboxDataResponse](docs/Model/MailboxDataResponse.md)
- [MailboxDomainRequest](docs/Model/MailboxDomainRequest.md)
- [MailboxMultipleEntitiesRequest](docs/Model/MailboxMultipleEntitiesRequest.md)
- [MailboxObjectTypeEnum](docs/Model/MailboxObjectTypeEnum.md)
- [MailboxResponse](docs/Model/MailboxResponse.md)
- [MentionSchema](docs/Model/MentionSchema.md)
- [MessageResponse](docs/Model/MessageResponse.md)
- [MissingFields](docs/Model/MissingFields.md)
- [MissingLineItemFields](docs/Model/MissingLineItemFields.md)
- [MoniteAllPaymentMethods](docs/Model/MoniteAllPaymentMethods.md)
- [MoniteAllPaymentMethodsTypes](docs/Model/MoniteAllPaymentMethodsTypes.md)
- [MultipleCommentSchema](docs/Model/MultipleCommentSchema.md)
- [OCRAddress](docs/Model/OCRAddress.md)
- [OCRResponseInvoiceReceiptData](docs/Model/OCRResponseInvoiceReceiptData.md)
- [OCRResponseInvoiceReceiptDataCounterpartAddressObject](docs/Model/OCRResponseInvoiceReceiptDataCounterpartAddressObject.md)
- [OCRResponseInvoiceReceiptLineItem](docs/Model/OCRResponseInvoiceReceiptLineItem.md)
- [ObjectType](docs/Model/ObjectType.md)
- [ObjectTypeAvailableComment](docs/Model/ObjectTypeAvailableComment.md)
- [ObtainTokenPayload](docs/Model/ObtainTokenPayload.md)
- [OcrRecognitionResponse](docs/Model/OcrRecognitionResponse.md)
- [OnboardingLinkResponse](docs/Model/OnboardingLinkResponse.md)
- [OnboardingPaymentMethodsResponse](docs/Model/OnboardingPaymentMethodsResponse.md)
- [OnboardingRequirementsResponse](docs/Model/OnboardingRequirementsResponse.md)
- [OptionalIndividualSchema](docs/Model/OptionalIndividualSchema.md)
- [OptionalIndividualSchema2](docs/Model/OptionalIndividualSchema2.md)
- [OptionalOrganizationSchema](docs/Model/OptionalOrganizationSchema.md)
- [OptionalOrganizationSchema2](docs/Model/OptionalOrganizationSchema2.md)
- [OrderEnum](docs/Model/OrderEnum.md)
- [OrderEnum2](docs/Model/OrderEnum2.md)
- [OrderEnum3](docs/Model/OrderEnum3.md)
- [OrganizationSchema](docs/Model/OrganizationSchema.md)
- [OrganizationSchema2](docs/Model/OrganizationSchema2.md)
- [OrganizationSchema3](docs/Model/OrganizationSchema3.md)
- [OrganizationSchemaRequest](docs/Model/OrganizationSchemaRequest.md)
- [OverdueReminderRequest](docs/Model/OverdueReminderRequest.md)
- [OverdueReminderRequestTerm](docs/Model/OverdueReminderRequestTerm.md)
- [OverdueReminderResponse](docs/Model/OverdueReminderResponse.md)
- [OverdueReminderResponseTerm](docs/Model/OverdueReminderResponseTerm.md)
- [OverdueReminderTermRequest](docs/Model/OverdueReminderTermRequest.md)
- [OverdueReminderTermResponse](docs/Model/OverdueReminderTermResponse.md)
- [PageSchema](docs/Model/PageSchema.md)
- [PaginatedApprovalResponse](docs/Model/PaginatedApprovalResponse.md)
- [PaginatedTodoTask](docs/Model/PaginatedTodoTask.md)
- [PartnerMetadata](docs/Model/PartnerMetadata.md)
- [PartnerMetadataResponse](docs/Model/PartnerMetadataResponse.md)
- [PartnerProjectSettingsPayload](docs/Model/PartnerProjectSettingsPayload.md)
- [PartnerProjectSettingsPayloadCurrency](docs/Model/PartnerProjectSettingsPayloadCurrency.md)
- [PartnerProjectSettingsPayloadDefaultRole](docs/Model/PartnerProjectSettingsPayloadDefaultRole.md)
- [PartnerProjectSettingsPayloadPayable](docs/Model/PartnerProjectSettingsPayloadPayable.md)
- [PartnerProjectSettingsPayloadPayments](docs/Model/PartnerProjectSettingsPayloadPayments.md)
- [PartnerProjectSettingsPayloadReceivable](docs/Model/PartnerProjectSettingsPayloadReceivable.md)
- [PartnerProjectSettingsResponse](docs/Model/PartnerProjectSettingsResponse.md)
- [PatchSettingsPayload](docs/Model/PatchSettingsPayload.md)
- [PayableActionEnum](docs/Model/PayableActionEnum.md)
- [PayableActionSchema](docs/Model/PayableActionSchema.md)
- [PayableActionSchema2](docs/Model/PayableActionSchema2.md)
- [PayableActionSchema3](docs/Model/PayableActionSchema3.md)
- [PayableActionSchema4](docs/Model/PayableActionSchema4.md)
- [PayableCursorFields](docs/Model/PayableCursorFields.md)
- [PayableOriginEnum](docs/Model/PayableOriginEnum.md)
- [PayablePaginationResponse](docs/Model/PayablePaginationResponse.md)
- [PayablePendingActionEnum](docs/Model/PayablePendingActionEnum.md)
- [PayablePendingActionResponse](docs/Model/PayablePendingActionResponse.md)
- [PayablePendingActionSchema](docs/Model/PayablePendingActionSchema.md)
- [PayableResponseSchema](docs/Model/PayableResponseSchema.md)
- [PayableResponseSchemaCounterpartAddress](docs/Model/PayableResponseSchemaCounterpartAddress.md)
- [PayableResponseSchemaFile](docs/Model/PayableResponseSchemaFile.md)
- [PayableResponseSchemaOtherExtractedData](docs/Model/PayableResponseSchemaOtherExtractedData.md)
- [PayableResponseSchemaPaymentTerms](docs/Model/PayableResponseSchemaPaymentTerms.md)
- [PayableResponseSchemaSuggestedPaymentTerm](docs/Model/PayableResponseSchemaSuggestedPaymentTerm.md)
- [PayableSchema](docs/Model/PayableSchema.md)
- [PayableSchema2](docs/Model/PayableSchema2.md)
- [PayableSchema3](docs/Model/PayableSchema3.md)
- [PayableSchema4](docs/Model/PayableSchema4.md)
- [PayableSettings](docs/Model/PayableSettings.md)
- [PayableStateEnum](docs/Model/PayableStateEnum.md)
- [PayableUpdateSchema](docs/Model/PayableUpdateSchema.md)
- [PayableUpdateSchemaCounterpartAddress](docs/Model/PayableUpdateSchemaCounterpartAddress.md)
- [PayableUploadWithDataSchema](docs/Model/PayableUploadWithDataSchema.md)
- [PaymentAccountObject](docs/Model/PaymentAccountObject.md)
- [PaymentAccountType](docs/Model/PaymentAccountType.md)
- [PaymentIntent](docs/Model/PaymentIntent.md)
- [PaymentIntentHistory](docs/Model/PaymentIntentHistory.md)
- [PaymentIntentHistoryResponse](docs/Model/PaymentIntentHistoryResponse.md)
- [PaymentIntentResponse](docs/Model/PaymentIntentResponse.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodStatus](docs/Model/PaymentMethodStatus.md)
- [PaymentObject](docs/Model/PaymentObject.md)
- [PaymentObjectType](docs/Model/PaymentObjectType.md)
- [PaymentPageTheme](docs/Model/PaymentPageTheme.md)
- [PaymentPriorityEnum](docs/Model/PaymentPriorityEnum.md)
- [PaymentReminder](docs/Model/PaymentReminder.md)
- [PaymentReminderResponse](docs/Model/PaymentReminderResponse.md)
- [PaymentReminderTerm1Reminder](docs/Model/PaymentReminderTerm1Reminder.md)
- [PaymentReminderTerm2Reminder](docs/Model/PaymentReminderTerm2Reminder.md)
- [PaymentReminderTermFinalReminder](docs/Model/PaymentReminderTermFinalReminder.md)
- [PaymentRequirements](docs/Model/PaymentRequirements.md)
- [PaymentTerm](docs/Model/PaymentTerm.md)
- [PaymentTermDiscount](docs/Model/PaymentTermDiscount.md)
- [PaymentTermDiscountWithDate](docs/Model/PaymentTermDiscountWithDate.md)
- [PaymentTerms](docs/Model/PaymentTerms.md)
- [PaymentTermsCreatePayload](docs/Model/PaymentTermsCreatePayload.md)
- [PaymentTermsListResponse](docs/Model/PaymentTermsListResponse.md)
- [PaymentTermsResponse](docs/Model/PaymentTermsResponse.md)
- [PaymentTermsUpdatePayload](docs/Model/PaymentTermsUpdatePayload.md)
- [PaymentsSettingsPayload](docs/Model/PaymentsSettingsPayload.md)
- [PermissionEnum](docs/Model/PermissionEnum.md)
- [PipelineCursorFields](docs/Model/PipelineCursorFields.md)
- [PipelineResponseSchema](docs/Model/PipelineResponseSchema.md)
- [PipelinesPaginationResponse](docs/Model/PipelinesPaginationResponse.md)
- [PreviewSchema](docs/Model/PreviewSchema.md)
- [Price](docs/Model/Price.md)
- [ProcessResource](docs/Model/ProcessResource.md)
- [ProcessResourceScriptSnapshot](docs/Model/ProcessResourceScriptSnapshot.md)
- [ProcessStatusEnum](docs/Model/ProcessStatusEnum.md)
- [ProductCursorFields](docs/Model/ProductCursorFields.md)
- [ProductServicePaginationResponse](docs/Model/ProductServicePaginationResponse.md)
- [ProductServiceRequest](docs/Model/ProductServiceRequest.md)
- [ProductServiceResponse](docs/Model/ProductServiceResponse.md)
- [ProductServiceTypeEnum](docs/Model/ProductServiceTypeEnum.md)
- [ProductServiceUpdate](docs/Model/ProductServiceUpdate.md)
- [ProvidedDataResponse](docs/Model/ProvidedDataResponse.md)
- [PublicPaymentLinkResponse](docs/Model/PublicPaymentLinkResponse.md)
- [PurchaseOrderCursorFields](docs/Model/PurchaseOrderCursorFields.md)
- [PurchaseOrderEmailPreviewRequest](docs/Model/PurchaseOrderEmailPreviewRequest.md)
- [PurchaseOrderEmailPreviewResponse](docs/Model/PurchaseOrderEmailPreviewResponse.md)
- [PurchaseOrderEmailSentResponse](docs/Model/PurchaseOrderEmailSentResponse.md)
- [PurchaseOrderItem](docs/Model/PurchaseOrderItem.md)
- [PurchaseOrderPaginationResponse](docs/Model/PurchaseOrderPaginationResponse.md)
- [PurchaseOrderPayloadSchema](docs/Model/PurchaseOrderPayloadSchema.md)
- [PurchaseOrderResponseSchema](docs/Model/PurchaseOrderResponseSchema.md)
- [PurchaseOrderResponseSchemaCounterpart](docs/Model/PurchaseOrderResponseSchemaCounterpart.md)
- [PurchaseOrderResponseSchemaEntity](docs/Model/PurchaseOrderResponseSchemaEntity.md)
- [QuoteResponsePayload](docs/Model/QuoteResponsePayload.md)
- [QuoteStateEnum](docs/Model/QuoteStateEnum.md)
- [ReceivableCounterpartContact](docs/Model/ReceivableCounterpartContact.md)
- [ReceivableCounterpartContactAddress](docs/Model/ReceivableCounterpartContactAddress.md)
- [ReceivableCreateBasedOnPayload](docs/Model/ReceivableCreateBasedOnPayload.md)
- [ReceivableCursorFields](docs/Model/ReceivableCursorFields.md)
- [ReceivableDeclinePayload](docs/Model/ReceivableDeclinePayload.md)
- [ReceivableEditFlow](docs/Model/ReceivableEditFlow.md)
- [ReceivableFacadeCreateInvoicePayload](docs/Model/ReceivableFacadeCreateInvoicePayload.md)
- [ReceivableFacadeCreatePayload](docs/Model/ReceivableFacadeCreatePayload.md)
- [ReceivableFacadeCreateQuotePayload](docs/Model/ReceivableFacadeCreateQuotePayload.md)
- [ReceivableFileUrl](docs/Model/ReceivableFileUrl.md)
- [ReceivablePaginationResponse](docs/Model/ReceivablePaginationResponse.md)
- [ReceivablePaidPayload](docs/Model/ReceivablePaidPayload.md)
- [ReceivablePreviewRequest](docs/Model/ReceivablePreviewRequest.md)
- [ReceivablePreviewResponse](docs/Model/ReceivablePreviewResponse.md)
- [ReceivableResponse](docs/Model/ReceivableResponse.md)
- [ReceivableSendRequest](docs/Model/ReceivableSendRequest.md)
- [ReceivableSendResponse](docs/Model/ReceivableSendResponse.md)
- [ReceivableSettings](docs/Model/ReceivableSettings.md)
- [ReceivableType](docs/Model/ReceivableType.md)
- [ReceivableUncollectiblePayload](docs/Model/ReceivableUncollectiblePayload.md)
- [ReceivableUpdatePayload](docs/Model/ReceivableUpdatePayload.md)
- [ReceivablesStatusEnum](docs/Model/ReceivablesStatusEnum.md)
- [Recipient](docs/Model/Recipient.md)
- [RecipientAccountResponse](docs/Model/RecipientAccountResponse.md)
- [RecipientTypeEnum](docs/Model/RecipientTypeEnum.md)
- [Recurrence](docs/Model/Recurrence.md)
- [RecurrenceIteration](docs/Model/RecurrenceIteration.md)
- [RecurrenceStatus](docs/Model/RecurrenceStatus.md)
- [RelatedDocuments](docs/Model/RelatedDocuments.md)
- [Reminder](docs/Model/Reminder.md)
- [RemindersSettings](docs/Model/RemindersSettings.md)
- [RequirementsError](docs/Model/RequirementsError.md)
- [ResponseItem](docs/Model/ResponseItem.md)
- [RevokeTokenPayload](docs/Model/RevokeTokenPayload.md)
- [RoleCursorFields](docs/Model/RoleCursorFields.md)
- [RolePaginationResponse](docs/Model/RolePaginationResponse.md)
- [RoleResponse](docs/Model/RoleResponse.md)
- [RoleResponse2](docs/Model/RoleResponse2.md)
- [RoleResponse3](docs/Model/RoleResponse3.md)
- [RoleResponse3Permissions](docs/Model/RoleResponse3Permissions.md)
- [RoleResponsePermissions](docs/Model/RoleResponsePermissions.md)
- [RolesCreatePayload](docs/Model/RolesCreatePayload.md)
- [RolesCreatePayloadPermissions](docs/Model/RolesCreatePayloadPermissions.md)
- [RootSchema](docs/Model/RootSchema.md)
- [RootSchema2](docs/Model/RootSchema2.md)
- [RootSchema3](docs/Model/RootSchema3.md)
- [RootSchema4](docs/Model/RootSchema4.md)
- [SearchRolesPayload](docs/Model/SearchRolesPayload.md)
- [SendPurchaseOrderViaEmailRequest](docs/Model/SendPurchaseOrderViaEmailRequest.md)
- [SettingsResponse](docs/Model/SettingsResponse.md)
- [SourceOfPayableDataEnum](docs/Model/SourceOfPayableDataEnum.md)
- [StatusEnum](docs/Model/StatusEnum.md)
- [SuccessResult](docs/Model/SuccessResult.md)
- [SuggestedPaymentTerm](docs/Model/SuggestedPaymentTerm.md)
- [SupportedFormatSchema](docs/Model/SupportedFormatSchema.md)
- [SystemTemplateDataSchema](docs/Model/SystemTemplateDataSchema.md)
- [SystemTemplates](docs/Model/SystemTemplates.md)
- [TagCreateOrUpdateSchema](docs/Model/TagCreateOrUpdateSchema.md)
- [TagCursorFields](docs/Model/TagCursorFields.md)
- [TagReadSchema](docs/Model/TagReadSchema.md)
- [TagsPaginationResponse](docs/Model/TagsPaginationResponse.md)
- [TasksCountSchema](docs/Model/TasksCountSchema.md)
- [TaxIDTypeEnum](docs/Model/TaxIDTypeEnum.md)
- [TemplateBaseResponse](docs/Model/TemplateBaseResponse.md)
- [TemplateDataSchema](docs/Model/TemplateDataSchema.md)
- [TemplateListResponse](docs/Model/TemplateListResponse.md)
- [TemplateReceivableResponse](docs/Model/TemplateReceivableResponse.md)
- [TemplateResponse](docs/Model/TemplateResponse.md)
- [TemplateTypeEnum](docs/Model/TemplateTypeEnum.md)
- [TermFinalWithDate](docs/Model/TermFinalWithDate.md)
- [TermsOfService](docs/Model/TermsOfService.md)
- [TermsOfServiceAcceptance](docs/Model/TermsOfServiceAcceptance.md)
- [TextTemplateResponse](docs/Model/TextTemplateResponse.md)
- [TextTemplateResponseList](docs/Model/TextTemplateResponseList.md)
- [TextTemplateType](docs/Model/TextTemplateType.md)
- [TodoCursorFields](docs/Model/TodoCursorFields.md)
- [TodoTask](docs/Model/TodoTask.md)
- [TodoTaskResponse](docs/Model/TodoTaskResponse.md)
- [TodoTaskStatusEnum](docs/Model/TodoTaskStatusEnum.md)
- [TotalVatAmountItem](docs/Model/TotalVatAmountItem.md)
- [Unit](docs/Model/Unit.md)
- [UnitListResponse](docs/Model/UnitListResponse.md)
- [UnitRequest](docs/Model/UnitRequest.md)
- [UnitResponse](docs/Model/UnitResponse.md)
- [UnitUpdate](docs/Model/UnitUpdate.md)
- [UpdateCounterpartContactPayload](docs/Model/UpdateCounterpartContactPayload.md)
- [UpdateCreditNote](docs/Model/UpdateCreditNote.md)
- [UpdateCreditNotePayload](docs/Model/UpdateCreditNotePayload.md)
- [UpdateCustomTemplateSchemaRequest](docs/Model/UpdateCustomTemplateSchemaRequest.md)
- [UpdateEntityBankAccountRequest](docs/Model/UpdateEntityBankAccountRequest.md)
- [UpdateEntityRequest](docs/Model/UpdateEntityRequest.md)
- [UpdateEntityRequest2](docs/Model/UpdateEntityRequest2.md)
- [UpdateEntityRequest2Individual](docs/Model/UpdateEntityRequest2Individual.md)
- [UpdateEntityRequest2Organization](docs/Model/UpdateEntityRequest2Organization.md)
- [UpdateEntityUserRequest](docs/Model/UpdateEntityUserRequest.md)
- [UpdateEntityUserRequest2](docs/Model/UpdateEntityUserRequest2.md)
- [UpdateIndividualEntityRequest](docs/Model/UpdateIndividualEntityRequest.md)
- [UpdateIndividualEntityRequestIndividual](docs/Model/UpdateIndividualEntityRequestIndividual.md)
- [UpdateInvoice](docs/Model/UpdateInvoice.md)
- [UpdateInvoicePayload](docs/Model/UpdateInvoicePayload.md)
- [UpdateIssuedInvoice](docs/Model/UpdateIssuedInvoice.md)
- [UpdateIssuedInvoicePayload](docs/Model/UpdateIssuedInvoicePayload.md)
- [UpdateOrganizationEntityRequest](docs/Model/UpdateOrganizationEntityRequest.md)
- [UpdateOrganizationEntityRequestOrganization](docs/Model/UpdateOrganizationEntityRequestOrganization.md)
- [UpdateProfileRequest](docs/Model/UpdateProfileRequest.md)
- [UpdatePurchaseOrderPayloadSchema](docs/Model/UpdatePurchaseOrderPayloadSchema.md)
- [UpdateQuote](docs/Model/UpdateQuote.md)
- [UpdateQuotePayload](docs/Model/UpdateQuotePayload.md)
- [UpdateRecurrencePayload](docs/Model/UpdateRecurrencePayload.md)
- [UpdateRoleRequest](docs/Model/UpdateRoleRequest.md)
- [UpdateTextTemplatePayload](docs/Model/UpdateTextTemplatePayload.md)
- [UpdateTodoTask](docs/Model/UpdateTodoTask.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorLocInner](docs/Model/ValidationErrorLocInner.md)
- [Variable](docs/Model/Variable.md)
- [VariablesObject](docs/Model/VariablesObject.md)
- [VariablesObjectList](docs/Model/VariablesObjectList.md)
- [VatRateCreator](docs/Model/VatRateCreator.md)
- [VatRateListResponse](docs/Model/VatRateListResponse.md)
- [VatRateResponse](docs/Model/VatRateResponse.md)
- [VatRateStatusEnum](docs/Model/VatRateStatusEnum.md)
- [VerificationError](docs/Model/VerificationError.md)
- [VerificationStatusEnum](docs/Model/VerificationStatusEnum.md)
- [VerifyResponse](docs/Model/VerifyResponse.md)
- [WebhookCursorFields](docs/Model/WebhookCursorFields.md)
- [WebhookObjectType](docs/Model/WebhookObjectType.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebhookSettingCursorFields](docs/Model/WebhookSettingCursorFields.md)
- [WebhookSettingEventPayload](docs/Model/WebhookSettingEventPayload.md)
- [WebhookSettingsByObjectTypePaginationResponse](docs/Model/WebhookSettingsByObjectTypePaginationResponse.md)
- [WebhookSettingsResponse](docs/Model/WebhookSettingsResponse.md)
- [WebhookUpdateRequest](docs/Model/WebhookUpdateRequest.md)
- [WebhooksPaginationResponse](docs/Model/WebhooksPaginationResponse.md)
- [WorkflowCursorFields](docs/Model/WorkflowCursorFields.md)
- [WorkflowPipelineApprovals](docs/Model/WorkflowPipelineApprovals.md)
- [WorkflowPipelineStatusEnum](docs/Model/WorkflowPipelineStatusEnum.md)
- [WorkflowResponseSchema](docs/Model/WorkflowResponseSchema.md)
- [WorkflowResponseSchemaCreatedByEntityUser](docs/Model/WorkflowResponseSchemaCreatedByEntityUser.md)
- [WorkflowsPaginationResponse](docs/Model/WorkflowsPaginationResponse.md)

## Authorization

### HTTPBearer

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developers@monite.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2023-03-14`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
