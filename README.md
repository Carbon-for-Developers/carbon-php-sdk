<div align="center">

[![Visit Carbon](./header.png)](https://carbon.ai)

# [Carbon](https://carbon.ai)<a id="carbon"></a>

Connect external data to LLMs, no matter the source.

[![Packagist](https://img.shields.io/badge/Packagist-v0.2.53-blue)](https://packagist.org/packages/konfig/carbon-php-sdk)

</div>

## Table of Contents<a id="table-of-contents"></a>

<!-- toc -->

- [Installation & Usage](#installation--usage)
  * [Requirements](#requirements)
  * [Composer](#composer)
  * [Manual Installation](#manual-installation)
- [Getting Started](#getting-started)
- [Reference](#reference)
  * [`carbon.auth.getAccessToken`](#carbonauthgetaccesstoken)
  * [`carbon.auth.getWhiteLabeling`](#carbonauthgetwhitelabeling)
  * [`carbon.cRM.getAccount`](#carboncrmgetaccount)
  * [`carbon.cRM.getAccounts`](#carboncrmgetaccounts)
  * [`carbon.cRM.getContact`](#carboncrmgetcontact)
  * [`carbon.cRM.getContacts`](#carboncrmgetcontacts)
  * [`carbon.cRM.getLead`](#carboncrmgetlead)
  * [`carbon.cRM.getLeads`](#carboncrmgetleads)
  * [`carbon.cRM.getOpportunities`](#carboncrmgetopportunities)
  * [`carbon.cRM.getOpportunity`](#carboncrmgetopportunity)
  * [`carbon.dataSources.addTags`](#carbondatasourcesaddtags)
  * [`carbon.dataSources.query`](#carbondatasourcesquery)
  * [`carbon.dataSources.queryUserDataSources`](#carbondatasourcesqueryuserdatasources)
  * [`carbon.dataSources.removeTags`](#carbondatasourcesremovetags)
  * [`carbon.dataSources.revokeAccessToken`](#carbondatasourcesrevokeaccesstoken)
  * [`carbon.embeddings.all`](#carbonembeddingsall)
  * [`carbon.embeddings.getDocuments`](#carbonembeddingsgetdocuments)
  * [`carbon.embeddings.getEmbeddingsAndChunks`](#carbonembeddingsgetembeddingsandchunks)
  * [`carbon.embeddings.uploadChunksAndEmbeddings`](#carbonembeddingsuploadchunksandembeddings)
  * [`carbon.files.createUserFileTags`](#carbonfilescreateuserfiletags)
  * [`carbon.files.deleteFileTags`](#carbonfilesdeletefiletags)
  * [`carbon.files.deleteMany`](#carbonfilesdeletemany)
  * [`carbon.files.deleteV2`](#carbonfilesdeletev2)
  * [`carbon.files.getParsedFile`](#carbonfilesgetparsedfile)
  * [`carbon.files.getRawFile`](#carbonfilesgetrawfile)
  * [`carbon.files.modifyColdStorageParameters`](#carbonfilesmodifycoldstorageparameters)
  * [`carbon.files.moveToHotStorage`](#carbonfilesmovetohotstorage)
  * [`carbon.files.queryUserFiles`](#carbonfilesqueryuserfiles)
  * [`carbon.files.queryUserFilesDeprecated`](#carbonfilesqueryuserfilesdeprecated)
  * [`carbon.files.resync`](#carbonfilesresync)
  * [`carbon.files.upload`](#carbonfilesupload)
  * [`carbon.files.uploadFromUrl`](#carbonfilesuploadfromurl)
  * [`carbon.files.uploadText`](#carbonfilesuploadtext)
  * [`carbon.github.getIssue`](#carbongithubgetissue)
  * [`carbon.github.getIssues`](#carbongithubgetissues)
  * [`carbon.github.getPr`](#carbongithubgetpr)
  * [`carbon.github.getPrComments`](#carbongithubgetprcomments)
  * [`carbon.github.getPrCommits`](#carbongithubgetprcommits)
  * [`carbon.github.getPrFiles`](#carbongithubgetprfiles)
  * [`carbon.github.getPullRequests`](#carbongithubgetpullrequests)
  * [`carbon.integrations.cancel`](#carbonintegrationscancel)
  * [`carbon.integrations.connectDataSource`](#carbonintegrationsconnectdatasource)
  * [`carbon.integrations.connectDocument360`](#carbonintegrationsconnectdocument360)
  * [`carbon.integrations.connectFreshdesk`](#carbonintegrationsconnectfreshdesk)
  * [`carbon.integrations.connectGitbook`](#carbonintegrationsconnectgitbook)
  * [`carbon.integrations.connectGuru`](#carbonintegrationsconnectguru)
  * [`carbon.integrations.createAwsIamUser`](#carbonintegrationscreateawsiamuser)
  * [`carbon.integrations.getOauthUrl`](#carbonintegrationsgetoauthurl)
  * [`carbon.integrations.listConfluencePages`](#carbonintegrationslistconfluencepages)
  * [`carbon.integrations.listConversations`](#carbonintegrationslistconversations)
  * [`carbon.integrations.listDataSourceItems`](#carbonintegrationslistdatasourceitems)
  * [`carbon.integrations.listFolders`](#carbonintegrationslistfolders)
  * [`carbon.integrations.listGitbookSpaces`](#carbonintegrationslistgitbookspaces)
  * [`carbon.integrations.listLabels`](#carbonintegrationslistlabels)
  * [`carbon.integrations.listOutlookCategories`](#carbonintegrationslistoutlookcategories)
  * [`carbon.integrations.listRepos`](#carbonintegrationslistrepos)
  * [`carbon.integrations.listSharepointSites`](#carbonintegrationslistsharepointsites)
  * [`carbon.integrations.syncAzureBlobFiles`](#carbonintegrationssyncazureblobfiles)
  * [`carbon.integrations.syncAzureBlobStorage`](#carbonintegrationssyncazureblobstorage)
  * [`carbon.integrations.syncConfluence`](#carbonintegrationssyncconfluence)
  * [`carbon.integrations.syncDataSourceItems`](#carbonintegrationssyncdatasourceitems)
  * [`carbon.integrations.syncFiles`](#carbonintegrationssyncfiles)
  * [`carbon.integrations.syncGitHub`](#carbonintegrationssyncgithub)
  * [`carbon.integrations.syncGitbook`](#carbonintegrationssyncgitbook)
  * [`carbon.integrations.syncGmail`](#carbonintegrationssyncgmail)
  * [`carbon.integrations.syncOutlook`](#carbonintegrationssyncoutlook)
  * [`carbon.integrations.syncRepos`](#carbonintegrationssyncrepos)
  * [`carbon.integrations.syncRssFeed`](#carbonintegrationssyncrssfeed)
  * [`carbon.integrations.syncS3Files`](#carbonintegrationssyncs3files)
  * [`carbon.integrations.syncSlack`](#carbonintegrationssyncslack)
  * [`carbon.organizations.get`](#carbonorganizationsget)
  * [`carbon.organizations.update`](#carbonorganizationsupdate)
  * [`carbon.organizations.updateStats`](#carbonorganizationsupdatestats)
  * [`carbon.users.all`](#carbonusersall)
  * [`carbon.users.delete`](#carbonusersdelete)
  * [`carbon.users.get`](#carbonusersget)
  * [`carbon.users.toggleUserFeatures`](#carbonuserstoggleuserfeatures)
  * [`carbon.users.updateUsers`](#carbonusersupdateusers)
  * [`carbon.users.whoAmI`](#carbonuserswhoami)
  * [`carbon.utilities.fetchUrls`](#carbonutilitiesfetchurls)
  * [`carbon.utilities.fetchWebpage`](#carbonutilitiesfetchwebpage)
  * [`carbon.utilities.fetchYoutubeTranscripts`](#carbonutilitiesfetchyoutubetranscripts)
  * [`carbon.utilities.processSitemap`](#carbonutilitiesprocesssitemap)
  * [`carbon.utilities.scrapeSitemap`](#carbonutilitiesscrapesitemap)
  * [`carbon.utilities.scrapeWeb`](#carbonutilitiesscrapeweb)
  * [`carbon.utilities.searchUrls`](#carbonutilitiessearchurls)
  * [`carbon.utilities.userWebpages`](#carbonutilitiesuserwebpages)
  * [`carbon.webhooks.addUrl`](#carbonwebhooksaddurl)
  * [`carbon.webhooks.deleteUrl`](#carbonwebhooksdeleteurl)
  * [`carbon.webhooks.urls`](#carbonwebhooksurls)
  * [`carbon.whiteLabel.all`](#carbonwhitelabelall)
  * [`carbon.whiteLabel.create`](#carbonwhitelabelcreate)
  * [`carbon.whiteLabel.delete`](#carbonwhitelabeldelete)
  * [`carbon.whiteLabel.update`](#carbonwhitelabelupdate)

<!-- tocstop -->

## Installation & Usage<a id="installation--usage"></a>

### Requirements<a id="requirements"></a>

This library requires `PHP ^8.0`

### Composer<a id="composer"></a>

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Carbon-for-Developers/carbon-php-sdk.git"
    }
  ],
  "require": {
    "konfig/carbon-php-sdk": "0.2.53"
  }
}
```

Then run `composer install`

### Manual Installation<a id="manual-installation"></a>

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/carbon-php-sdk/vendor/autoload.php');
```

## Getting Started<a id="getting-started"></a>

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// 1) Get an access token for a customer
$carbon = new \Carbon\Client(
    apiKey: "API_KEY",
    customerId: "CUSTOMER_ID",
);

$result = $carbon->auth->getAccessToken();

# 2) Use the access token to authenticate moving forward
$carbon = new \Carbon\Client(accessToken: $token->getAccessToken());

# use SDK as usual
$whiteLabeling = $carbon->auth->getWhiteLabeling();
# etc.
```
## Reference<a id="reference"></a>


### `carbon.auth.getAccessToken`<a id="carbonauthgetaccesstoken"></a>

Get Access Token


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->auth->getAccessToken();
```


#### 🔄 Return<a id="🔄-return"></a>

[**TokenResponse**](./lib/Model/TokenResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/auth/v1/access_token` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.auth.getWhiteLabeling`<a id="carbonauthgetwhitelabeling"></a>

Returns whether or not the organization is white labeled and which integrations are white labeled

:param current_user: the current user
:param db: the database session
:return: a WhiteLabelingResponse


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->auth->getWhiteLabeling();
```


#### 🔄 Return<a id="🔄-return"></a>

[**WhiteLabelingResponse**](./lib/Model/WhiteLabelingResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/auth/v1/white_labeling` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getAccount`<a id="carboncrmgetaccount"></a>

Get Account


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getAccount(
    id: "id_example", 
    data_source_id: 1, 
    include_remote_data: False, 
    includes: [
        "string_example"
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### id: `string`<a id="id-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### includes: []<a id="includes-"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/accounts/{id}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getAccounts`<a id="carboncrmgetaccounts"></a>

Get Accounts


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getAccounts(
    data_source_id: 1, 
    include_remote_data: False, 
    next_cursor: "string_example", 
    page_size: 1, 
    order_dir: "asc", 
    includes: [], 
    filters: [
    ], 
    order_by: "created_at"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### order_dir:<a id="order_dir"></a>

##### includes: []<a id="includes-"></a>

##### filters: [`AccountFilters`](./lib/Model/AccountFilters.php)<a id="filters-accountfilterslibmodelaccountfiltersphp"></a>

##### order_by:<a id="order_by"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountResponse**](./lib/Model/AccountResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/accounts` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getContact`<a id="carboncrmgetcontact"></a>

Get Contact


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getContact(
    id: "id_example", 
    data_source_id: 1, 
    include_remote_data: False, 
    includes: [
        "string_example"
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### id: `string`<a id="id-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### includes: []<a id="includes-"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Contact**](./lib/Model/Contact.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/contacts/{id}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getContacts`<a id="carboncrmgetcontacts"></a>

Get Contacts


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getContacts(
    data_source_id: 1, 
    include_remote_data: False, 
    next_cursor: "string_example", 
    page_size: 1, 
    order_dir: "asc", 
    includes: [], 
    filters: [
    ], 
    order_by: "created_at"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### order_dir:<a id="order_dir"></a>

##### includes: []<a id="includes-"></a>

##### filters: [`ContactFilters`](./lib/Model/ContactFilters.php)<a id="filters-contactfilterslibmodelcontactfiltersphp"></a>

##### order_by:<a id="order_by"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ContactsResponse**](./lib/Model/ContactsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/contacts` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getLead`<a id="carboncrmgetlead"></a>

Get Lead


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getLead(
    id: "id_example", 
    data_source_id: 1, 
    include_remote_data: False, 
    includes: [
        "string_example"
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### id: `string`<a id="id-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### includes: []<a id="includes-"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Lead**](./lib/Model/Lead.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/leads/{id}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getLeads`<a id="carboncrmgetleads"></a>

Get Leads


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getLeads(
    data_source_id: 1, 
    include_remote_data: False, 
    next_cursor: "string_example", 
    page_size: 1, 
    order_dir: "asc", 
    includes: [], 
    filters: [
    ], 
    order_by: "created_at"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### order_dir:<a id="order_dir"></a>

##### includes: []<a id="includes-"></a>

##### filters: [`LeadFilters`](./lib/Model/LeadFilters.php)<a id="filters-leadfilterslibmodelleadfiltersphp"></a>

##### order_by:<a id="order_by"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**LeadsResponse**](./lib/Model/LeadsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/leads` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getOpportunities`<a id="carboncrmgetopportunities"></a>

Get Opportunities


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getOpportunities(
    data_source_id: 1, 
    include_remote_data: False, 
    next_cursor: "string_example", 
    page_size: 1, 
    order_dir: "asc", 
    includes: [], 
    filters: [
        "status" => "WON",
    ], 
    order_by: "created_at"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### order_dir:<a id="order_dir"></a>

##### includes: []<a id="includes-"></a>

##### filters: [`OpportunityFilters`](./lib/Model/OpportunityFilters.php)<a id="filters-opportunityfilterslibmodelopportunityfiltersphp"></a>

##### order_by:<a id="order_by"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OpportunitiesResponse**](./lib/Model/OpportunitiesResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/opportunities` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.cRM.getOpportunity`<a id="carboncrmgetopportunity"></a>

Get Opportunity


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->cRM->getOpportunity(
    id: "id_example", 
    data_source_id: 1, 
    include_remote_data: False, 
    includes: [
        "string_example"
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### id: `string`<a id="id-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### includes: []<a id="includes-"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Opportunity**](./lib/Model/Opportunity.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/crm/opportunities/{id}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.dataSources.addTags`<a id="carbondatasourcesaddtags"></a>

Add Data Source Tags


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->dataSources->addTags(
    tags: [], 
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### tags: `object`<a id="tags-object"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceAPI**](./lib/Model/OrganizationUserDataSourceAPI.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/data_sources/tags/add` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.dataSources.query`<a id="carbondatasourcesquery"></a>

Data Sources


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->dataSources->query(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    filters: [
        "source" => "GOOGLE_CLOUD_STORAGE",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### filters: [`OrganizationUserDataSourceFilters`](./lib/Model/OrganizationUserDataSourceFilters.php)<a id="filters-organizationuserdatasourcefilterslibmodelorganizationuserdatasourcefiltersphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceResponse**](./lib/Model/OrganizationUserDataSourceResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/data_sources` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.dataSources.queryUserDataSources`<a id="carbondatasourcesqueryuserdatasources"></a>

User Data Sources


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->dataSources->queryUserDataSources(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    filters: [
        "source" => "GOOGLE_CLOUD_STORAGE",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### filters: [`OrganizationUserDataSourceFilters`](./lib/Model/OrganizationUserDataSourceFilters.php)<a id="filters-organizationuserdatasourcefilterslibmodelorganizationuserdatasourcefiltersphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceResponse**](./lib/Model/OrganizationUserDataSourceResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/user_data_sources` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.dataSources.removeTags`<a id="carbondatasourcesremovetags"></a>

Remove Data Source Tags


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->dataSources->removeTags(
    data_source_id: 1, 
    tags_to_remove: [], 
    remove_all_tags: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### tags_to_remove: `string`[]<a id="tags_to_remove-string"></a>

##### remove_all_tags: `bool`<a id="remove_all_tags-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceAPI**](./lib/Model/OrganizationUserDataSourceAPI.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/data_sources/tags/remove` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.dataSources.revokeAccessToken`<a id="carbondatasourcesrevokeaccesstoken"></a>

Revoke Access Token


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->dataSources->revokeAccessToken(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/revoke_access_token` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.embeddings.all`<a id="carbonembeddingsall"></a>

Retrieve Embeddings And Content V2


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->embeddings->all(
    filters: [
        "include_all_children" => False,
        "non_synced_only" => False,
    ], 
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    include_vectors: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`OrganizationUserFilesToSyncFilters`](./lib/Model/OrganizationUserFilesToSyncFilters.php)<a id="filters-organizationuserfilestosyncfilterslibmodelorganizationuserfilestosyncfiltersphp"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### include_vectors: `bool`<a id="include_vectors-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**EmbeddingsAndChunksResponse**](./lib/Model/EmbeddingsAndChunksResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/list_chunks_and_embeddings` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.embeddings.getDocuments`<a id="carbonembeddingsgetdocuments"></a>

For pre-filtering documents, using `tags_v2` is preferred to using `tags` (which is now deprecated). If both `tags_v2`
and `tags` are specified, `tags` is ignored. `tags_v2` enables
building complex filters through the use of "AND", "OR", and negation logic. Take the below input as an example:
```json
{
    "OR": [
        {
            "key": "subject",
            "value": "holy-bible",
            "negate": false
        },
        {
            "key": "person-of-interest",
            "value": "jesus christ",
            "negate": false
        },
        {
            "key": "genre",
            "value": "religion",
            "negate": true
        }
        {
            "AND": [
                {
                    "key": "subject",
                    "value": "tao-te-ching",
                    "negate": false
                },
                {
                    "key": "author",
                    "value": "lao-tzu",
                    "negate": false
                }
            ]
        }
    ]
}
```
In this case, files will be filtered such that:
1. "subject" = "holy-bible" OR
2. "person-of-interest" = "jesus christ" OR
3. "genre" != "religion" OR
4. "subject" = "tao-te-ching" AND "author" = "lao-tzu"

Note that the top level of the query must be either an "OR" or "AND" array. Currently, nesting is limited to 3.
For tag blocks (those with "key", "value", and "negate" keys), the following typing rules apply:
1. "key" isn't optional and must be a `string`
2. "value" isn't optional and can be `any` or list[`any`]
3. "negate" is optional and must be `true` or `false`. If present and `true`, then the filter block is negated in
the resulting query. It is `false` by default.


When querying embeddings, you can optionally specify the `media_type` parameter in your request. By default (if
not set), it is equal to "TEXT". This means that the query will be performed over files that have
been parsed as text (for now, this covers all files except image files). If it is equal to "IMAGE",
the query will be performed over image files (for now, `.jpg` and `.png` files). You can think of this
field as an additional filter on top of any filters set in `file_ids` and


When `hybrid_search` is set to true, a combination of keyword search and semantic search are used to rank
and select candidate embeddings during information retrieval. By default, these search methods are weighted
equally during the ranking process. To adjust the weight (or "importance") of each search method, you can use
the `hybrid_search_tuning_parameters` property. The description for the different tuning parameters are:
- `weight_a`: weight to assign to semantic search
- `weight_b`: weight to assign to keyword search

You must ensure that `sum(weight_a, weight_b,..., weight_n)` for all *n* weights is equal to 1. The equality
has an error tolerance of 0.001 to account for possible floating point issues.

In order to use hybrid search for a customer across a set of documents, two flags need to be enabled:
1. Use the `/modify_user_configuration` endpoint to to enable `sparse_vectors` for the customer. The payload
body for this request is below:
```
{
  "configuration_key_name": "sparse_vectors",
  "value": {
    "enabled": true
  }
}
```
2. Make sure hybrid search is enabled for the documents across which you want to perform the search. For the
`/uploadfile` endpoint, this can be done by setting the following query parameter: `generate_sparse_vectors=true`


Carbon supports multiple models for use in generating embeddings for files. For images, we support Vertex AI's
multimodal model; for text, we support OpenAI's `text-embedding-ada-002` and Cohere's embed-multilingual-v3.0.
The model can be specified via the `embedding_model` parameter (in the POST body for `/embeddings`, and a query 
parameter in `/uploadfile`). If no model is supplied, the `text-embedding-ada-002` is used by default. When performing
embedding queries, embeddings from files that used the specified model will be considered in the query.
For example, if files A and B have embeddings generated with `OPENAI`, and files C and D have embeddings generated with
`COHERE_MULTILINGUAL_V3`, then by default, queries will only consider files A and B. If `COHERE_MULTILINGUAL_V3` is
specified as the `embedding_model` in `/embeddings`, then only files C and D will be considered. Make sure that
the set of all files you want considered for a query have embeddings generated via the same model. For now, **do not**
set `VERTEX_MULTIMODAL` as an `embedding_model`. This model is used automatically by Carbon when it detects an image file.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->embeddings->getDocuments(
    query: "a", 
    k: 1, 
    tags: [
        "key": "string_example",
    ], 
    query_vector: [
        3.14
    ], 
    file_ids: [
        1
    ], 
    parent_file_ids: [
        1
    ], 
    include_all_children: False, 
    tags_v2: [
    ], 
    include_tags: True, 
    include_vectors: True, 
    include_raw_file: True, 
    hybrid_search: True, 
    hybrid_search_tuning_parameters: [
        "weight_a" => 0.5,
        "weight_b" => 0.5,
    ], 
    media_type: "TEXT", 
    embedding_model: "OPENAI", 
    include_file_level_metadata: False, 
    high_accuracy: False, 
    rerank: [
        "model" => "model_example",
    ], 
    file_types_at_source: [
        "string_example"
    ], 
    exclude_cold_storage_files: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### query: `string`<a id="query-string"></a>

Query for which to get related chunks and embeddings.

##### k: `int`<a id="k-int"></a>

Number of related chunks to return.

##### tags: array<string, [`Tags1`](./lib/Model/Tags1.php)><a id="tags-array"></a>

A set of tags to limit the search to. Deprecated and may be removed in the future.

##### query_vector: `float`[]<a id="query_vector-float"></a>

Optional query vector for which to get related chunks and embeddings. It must have been         generated by the same model used to generate the embeddings across which the search is being conducted. Cannot         provide both `query` and `query_vector`.

##### file_ids: `int`[]<a id="file_ids-int"></a>

Optional list of file IDs to limit the search to

##### parent_file_ids: `int`[]<a id="parent_file_ids-int"></a>

Optional list of parent file IDs to limit the search to. A parent file describes a file to which         another file belongs (e.g. a folder)

##### include_all_children: `bool`<a id="include_all_children-bool"></a>

Flag to control whether or not to include all children of filtered files in the embedding search.

##### tags_v2: `object`<a id="tags_v2-object"></a>

A set of tags to limit the search to. Use this instead of `tags`, which is deprecated.

##### include_tags: `bool`<a id="include_tags-bool"></a>

Flag to control whether or not to include tags for each chunk in the response.

##### include_vectors: `bool`<a id="include_vectors-bool"></a>

Flag to control whether or not to include embedding vectors in the response.

##### include_raw_file: `bool`<a id="include_raw_file-bool"></a>

Flag to control whether or not to include a signed URL to the raw file containing each chunk         in the response.

##### hybrid_search: `bool`<a id="hybrid_search-bool"></a>

Flag to control whether or not to perform hybrid search.

##### hybrid_search_tuning_parameters: [`HybridSearchTuningParamsNullable`](./lib/Model/HybridSearchTuningParamsNullable.php)<a id="hybrid_search_tuning_parameters-hybridsearchtuningparamsnullablelibmodelhybridsearchtuningparamsnullablephp"></a>

##### media_type:<a id="media_type"></a>

##### embedding_model:<a id="embedding_model"></a>

##### include_file_level_metadata: `bool`<a id="include_file_level_metadata-bool"></a>

Flag to control whether or not to include file-level metadata in the response. This metadata         will be included in the `content_metadata` field of each document along with chunk/embedding level metadata.

##### high_accuracy: `bool`<a id="high_accuracy-bool"></a>

Flag to control whether or not to perform a high accuracy embedding search. By default, this is set to false.         If true, the search may return more accurate results, but may take longer to complete.

##### rerank: [`RerankParamsNullable`](./lib/Model/RerankParamsNullable.php)<a id="rerank-rerankparamsnullablelibmodelrerankparamsnullablephp"></a>

##### file_types_at_source: [`AutoSyncedSourceTypesPropertyInner`](./lib/Model/AutoSyncedSourceTypesPropertyInner.php)[]<a id="file_types_at_source-autosyncedsourcetypespropertyinnerlibmodelautosyncedsourcetypespropertyinnerphp"></a>

Filter files based on their type at the source (for example help center tickets and articles)

##### exclude_cold_storage_files: `bool`<a id="exclude_cold_storage_files-bool"></a>

Flag to control whether or not to exclude files that are not in hot storage. If set to False, then an error will be returned if any filtered         files are in cold storage.


#### 🔄 Return<a id="🔄-return"></a>

[**DocumentResponseList**](./lib/Model/DocumentResponseList.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/embeddings` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.embeddings.getEmbeddingsAndChunks`<a id="carbonembeddingsgetembeddingsandchunks"></a>

Retrieve Embeddings And Content


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->embeddings->getEmbeddingsAndChunks(
    filters: [
        "user_file_id" => 1,
        "embedding_model" => "OPENAI",
    ], 
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    include_vectors: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`EmbeddingsAndChunksFilters`](./lib/Model/EmbeddingsAndChunksFilters.php)<a id="filters-embeddingsandchunksfilterslibmodelembeddingsandchunksfiltersphp"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### include_vectors: `bool`<a id="include_vectors-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**EmbeddingsAndChunksResponse**](./lib/Model/EmbeddingsAndChunksResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/text_chunks` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.embeddings.uploadChunksAndEmbeddings`<a id="carbonembeddingsuploadchunksandembeddings"></a>

Upload Chunks And Embeddings


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->embeddings->uploadChunksAndEmbeddings(
    embedding_model: "OPENAI", 
    chunks_and_embeddings: [
        [
            "file_id" => 1,
            "chunks_and_embeddings" => [
                [
                    "chunk_number" => 1,
                    "chunk" => "chunk_example",
                ]
            ],
        ]
    ], 
    overwrite_existing: False, 
    chunks_only: False, 
    custom_credentials: [
        "key": [],
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### embedding_model:<a id="embedding_model"></a>

##### chunks_and_embeddings: [`SingleChunksAndEmbeddingsUploadInput`](./lib/Model/SingleChunksAndEmbeddingsUploadInput.php)[]<a id="chunks_and_embeddings-singlechunksandembeddingsuploadinputlibmodelsinglechunksandembeddingsuploadinputphp"></a>

##### overwrite_existing: `bool`<a id="overwrite_existing-bool"></a>

##### chunks_only: `bool`<a id="chunks_only-bool"></a>

##### custom_credentials: `array<string,object>`<a id="custom_credentials-array"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/upload_chunks_and_embeddings` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.createUserFileTags`<a id="carbonfilescreateuserfiletags"></a>

A tag is a key-value pair that can be added to a file. This pair can then be used
for searches (e.g. embedding searches) in order to narrow down the scope of the search.
A file can have any number of tags. The following are reserved keys that cannot be used:
- db_embedding_id
- organization_id
- user_id
- organization_user_file_id

Carbon currently supports two data types for tag values - `string` and `list<string>`.
Keys can only be `string`. If values other than `string` and `list<string>` are used,
they're automatically converted to strings (e.g. 4 will become "4").


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->createUserFileTags(
    tags: [
        "key": "string_example",
    ], 
    organization_user_file_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### tags: array<string, [`Tags1`](./lib/Model/Tags1.php)><a id="tags-array"></a>

##### organization_user_file_id: `int`<a id="organization_user_file_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/create_user_file_tags` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.deleteFileTags`<a id="carbonfilesdeletefiletags"></a>

Delete File Tags


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->deleteFileTags(
    tags: [
        "string_example"
    ], 
    organization_user_file_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### tags: `string`[]<a id="tags-string"></a>

##### organization_user_file_id: `int`<a id="organization_user_file_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/delete_user_file_tags` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.deleteMany`<a id="carbonfilesdeletemany"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

Delete Files Endpoint


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->deleteMany(
    file_ids: [
        1
    ], 
    sync_statuses: [
        "string_example"
    ], 
    delete_non_synced_only: False, 
    send_webhook: False, 
    delete_child_files: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### file_ids: `int`[]<a id="file_ids-int"></a>

##### sync_statuses: []<a id="sync_statuses-"></a>

##### delete_non_synced_only: `bool`<a id="delete_non_synced_only-bool"></a>

##### send_webhook: `bool`<a id="send_webhook-bool"></a>

##### delete_child_files: `bool`<a id="delete_child_files-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/delete_files` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.deleteV2`<a id="carbonfilesdeletev2"></a>

Delete Files V2 Endpoint


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->deleteV2(
    filters: [
        "include_all_children" => False,
        "non_synced_only" => False,
    ], 
    send_webhook: False, 
    preserve_file_record: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`OrganizationUserFilesToSyncFilters`](./lib/Model/OrganizationUserFilesToSyncFilters.php)<a id="filters-organizationuserfilestosyncfilterslibmodelorganizationuserfilestosyncfiltersphp"></a>

##### send_webhook: `bool`<a id="send_webhook-bool"></a>

##### preserve_file_record: `bool`<a id="preserve_file_record-bool"></a>

Whether or not to delete all data related to the file from the database, BUT to preserve the file metadata, allowing for         resyncs. By default `preserve_file_record` is false, which means that all data related to the file *as well as* its metadata will be deleted. Note that         even if `preserve_file_record` is true, raw files uploaded via the `uploadfile` endpoint still cannot be resynced.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/delete_files_v2` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.getParsedFile`<a id="carbonfilesgetparsedfile"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

This route is deprecated. Use `/user_files_v2` instead.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->getParsedFile(
    file_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### file_id: `int`<a id="file_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**PresignedURLResponse**](./lib/Model/PresignedURLResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/parsed_file/{file_id}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.getRawFile`<a id="carbonfilesgetrawfile"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

This route is deprecated. Use `/user_files_v2` instead.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->getRawFile(
    file_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### file_id: `int`<a id="file_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**PresignedURLResponse**](./lib/Model/PresignedURLResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/raw_file/{file_id}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.modifyColdStorageParameters`<a id="carbonfilesmodifycoldstorageparameters"></a>

Modify Cold Storage Parameters


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->modifyColdStorageParameters(
    filters: [
        "include_all_children" => False,
        "non_synced_only" => False,
    ], 
    enable_cold_storage: True, 
    hot_storage_time_to_live: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`OrganizationUserFilesToSyncFilters`](./lib/Model/OrganizationUserFilesToSyncFilters.php)<a id="filters-organizationuserfilestosyncfilterslibmodelorganizationuserfilestosyncfiltersphp"></a>

##### enable_cold_storage: `bool`<a id="enable_cold_storage-bool"></a>

##### hot_storage_time_to_live: `int`<a id="hot_storage_time_to_live-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**bool**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/modify_cold_storage_parameters` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.moveToHotStorage`<a id="carbonfilesmovetohotstorage"></a>

Move To Hot Storage


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->moveToHotStorage(
    filters: [
        "include_all_children" => False,
        "non_synced_only" => False,
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`OrganizationUserFilesToSyncFilters`](./lib/Model/OrganizationUserFilesToSyncFilters.php)<a id="filters-organizationuserfilestosyncfilterslibmodelorganizationuserfilestosyncfiltersphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

**bool**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/move_to_hot_storage` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.queryUserFiles`<a id="carbonfilesqueryuserfiles"></a>

For pre-filtering documents, using `tags_v2` is preferred to using `tags` (which is now deprecated). If both `tags_v2`
and `tags` are specified, `tags` is ignored. `tags_v2` enables
building complex filters through the use of "AND", "OR", and negation logic. Take the below input as an example:
```json
{
    "OR": [
        {
            "key": "subject",
            "value": "holy-bible",
            "negate": false
        },
        {
            "key": "person-of-interest",
            "value": "jesus christ",
            "negate": false
        },
        {
            "key": "genre",
            "value": "religion",
            "negate": true
        }
        {
            "AND": [
                {
                    "key": "subject",
                    "value": "tao-te-ching",
                    "negate": false
                },
                {
                    "key": "author",
                    "value": "lao-tzu",
                    "negate": false
                }
            ]
        }
    ]
}
```
In this case, files will be filtered such that:
1. "subject" = "holy-bible" OR
2. "person-of-interest" = "jesus christ" OR
3. "genre" != "religion" OR
4. "subject" = "tao-te-ching" AND "author" = "lao-tzu"

Note that the top level of the query must be either an "OR" or "AND" array. Currently, nesting is limited to 3.
For tag blocks (those with "key", "value", and "negate" keys), the following typing rules apply:
1. "key" isn't optional and must be a `string`
2. "value" isn't optional and can be `any` or list[`any`]
3. "negate" is optional and must be `true` or `false`. If present and `true`, then the filter block is negated in
the resulting query. It is `false` by default.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->queryUserFiles(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    filters: [
        "include_all_children" => False,
        "non_synced_only" => False,
    ], 
    include_raw_file: True, 
    include_parsed_text_file: True, 
    include_additional_files: True, 
    presigned_url_expiry_time_seconds: 3600
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### filters: [`OrganizationUserFilesToSyncFilters`](./lib/Model/OrganizationUserFilesToSyncFilters.php)<a id="filters-organizationuserfilestosyncfilterslibmodelorganizationuserfilestosyncfiltersphp"></a>

##### include_raw_file: `bool`<a id="include_raw_file-bool"></a>

If true, the query will return presigned URLs for the raw file. Only relevant for the /user_files_v2 endpoint.

##### include_parsed_text_file: `bool`<a id="include_parsed_text_file-bool"></a>

If true, the query will return presigned URLs for the parsed text file. Only relevant for the /user_files_v2 endpoint.

##### include_additional_files: `bool`<a id="include_additional_files-bool"></a>

If true, the query will return presigned URLs for additional files. Only relevant for the /user_files_v2 endpoint.

##### presigned_url_expiry_time_seconds: `int`<a id="presigned_url_expiry_time_seconds-int"></a>

The expiry time for the presigned URLs. Only relevant for the /user_files_v2 endpoint.


#### 🔄 Return<a id="🔄-return"></a>

[**UserFilesV2**](./lib/Model/UserFilesV2.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/user_files_v2` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.queryUserFilesDeprecated`<a id="carbonfilesqueryuserfilesdeprecated"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

This route is deprecated. Use `/user_files_v2` instead.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->queryUserFilesDeprecated(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    filters: [
        "include_all_children" => False,
        "non_synced_only" => False,
    ], 
    include_raw_file: True, 
    include_parsed_text_file: True, 
    include_additional_files: True, 
    presigned_url_expiry_time_seconds: 3600
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### filters: [`OrganizationUserFilesToSyncFilters`](./lib/Model/OrganizationUserFilesToSyncFilters.php)<a id="filters-organizationuserfilestosyncfilterslibmodelorganizationuserfilestosyncfiltersphp"></a>

##### include_raw_file: `bool`<a id="include_raw_file-bool"></a>

If true, the query will return presigned URLs for the raw file. Only relevant for the /user_files_v2 endpoint.

##### include_parsed_text_file: `bool`<a id="include_parsed_text_file-bool"></a>

If true, the query will return presigned URLs for the parsed text file. Only relevant for the /user_files_v2 endpoint.

##### include_additional_files: `bool`<a id="include_additional_files-bool"></a>

If true, the query will return presigned URLs for additional files. Only relevant for the /user_files_v2 endpoint.

##### presigned_url_expiry_time_seconds: `int`<a id="presigned_url_expiry_time_seconds-int"></a>

The expiry time for the presigned URLs. Only relevant for the /user_files_v2 endpoint.


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/user_files` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.resync`<a id="carbonfilesresync"></a>

Resync File


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->resync(
    file_id: 1, 
    chunk_size: 1, 
    chunk_overlap: 1, 
    force_embedding_generation: False, 
    skip_file_processing: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### file_id: `int`<a id="file_id-int"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### force_embedding_generation: `bool`<a id="force_embedding_generation-bool"></a>

##### skip_file_processing: `bool`<a id="skip_file_processing-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/resync_file` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.upload`<a id="carbonfilesupload"></a>

This endpoint is used to directly upload local files to Carbon. The `POST` request should be a multipart form request.
Note that the `set_page_as_boundary` query parameter is applicable only to PDFs for now. When this value is set,
PDF chunks are at most one page long. Additional information can be retrieved for each chunk, however, namely the coordinates
of the bounding box around the chunk (this can be used for things like text highlighting). Following is a description
of all possible query parameters:
- `chunk_size`: the chunk size (in tokens) applied when splitting the document
- `chunk_overlap`: the chunk overlap (in tokens) applied when splitting the document
- `skip_embedding_generation`: whether or not to skip the generation of chunks and embeddings
- `set_page_as_boundary`: described above
- `embedding_model`: the model used to generate embeddings for the document chunks
- `use_ocr`: whether or not to use OCR as a preprocessing step prior to generating chunks. Valid for PDFs, JPEGs, and PNGs
- `generate_sparse_vectors`: whether or not to generate sparse vectors for the file. Required for hybrid search.
- `prepend_filename_to_chunks`: whether or not to prepend the filename to the chunk text


Carbon supports multiple models for use in generating embeddings for files. For images, we support Vertex AI's
multimodal model; for text, we support OpenAI's `text-embedding-ada-002` and Cohere's embed-multilingual-v3.0.
The model can be specified via the `embedding_model` parameter (in the POST body for `/embeddings`, and a query 
parameter in `/uploadfile`). If no model is supplied, the `text-embedding-ada-002` is used by default. When performing
embedding queries, embeddings from files that used the specified model will be considered in the query.
For example, if files A and B have embeddings generated with `OPENAI`, and files C and D have embeddings generated with
`COHERE_MULTILINGUAL_V3`, then by default, queries will only consider files A and B. If `COHERE_MULTILINGUAL_V3` is
specified as the `embedding_model` in `/embeddings`, then only files C and D will be considered. Make sure that
the set of all files you want considered for a query have embeddings generated via the same model. For now, **do not**
set `VERTEX_MULTIMODAL` as an `embedding_model`. This model is used automatically by Carbon when it detects an image file.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->upload(
    file: open('/path/to/file', 'rb'), 
    chunk_size: 1, 
    chunk_overlap: 1, 
    skip_embedding_generation: False, 
    set_page_as_boundary: False, 
    embedding_model: "string_example", 
    use_ocr: False, 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    parse_pdf_tables_with_ocr: False, 
    detect_audio_language: False, 
    transcription_service: "assemblyai", 
    include_speaker_labels: False, 
    media_type: "TEXT", 
    split_rows: False, 
    enable_cold_storage: False, 
    hot_storage_time_to_live: 1, 
    generate_chunks_only: False, 
    store_file_only: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### file: `\SplFileObject`<a id="file-splfileobject"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

Chunk size in tiktoken tokens to be used when processing file.

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

Chunk overlap in tiktoken tokens to be used when processing file.

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

Flag to control whether or not embeddings should be generated and stored             when processing file.

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

Flag to control whether or not to set the a page's worth of content as the maximum             amount of content that can appear in a chunk. Only valid for PDFs. See description route description for             more information.

##### embedding_model: [``](./lib/Model/.php)<a id="embedding_model-libmodelphp"></a>

Embedding model that will be used to embed file chunks.

##### use_ocr: `bool`<a id="use_ocr-bool"></a>

Whether or not to use OCR when processing files. Valid for PDFs, JPEGs, and PNGs. Useful for documents with             tables, images, and/or scanned text.

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

Whether or not to generate sparse vectors for the file. This is *required* for the file to be a             candidate for hybrid search.

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

Whether or not to prepend the file's name to chunks.

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

Whether to use rich table parsing when `use_ocr` is enabled.

##### detect_audio_language: `bool`<a id="detect_audio_language-bool"></a>

Whether to automatically detect the language of the uploaded audio file.

##### transcription_service:<a id="transcription_service"></a>

The transcription service to use for audio files. If no service is specified, 'deepgram' will be used.

##### include_speaker_labels: `bool`<a id="include_speaker_labels-bool"></a>

Detect multiple speakers and label segments of speech by speaker for audio files.

##### media_type:<a id="media_type"></a>

The media type of the file. If not provided, it will be inferred from the file extension.

##### split_rows: `bool`<a id="split_rows-bool"></a>

Whether to split tabular rows into chunks. Currently only valid for CSV, TSV, and XLSX files.

##### enable_cold_storage: `bool`<a id="enable_cold_storage-bool"></a>

Enable cold storage for the file. If set to true, the file will be moved to cold storage after a certain period of inactivity. Default is false.

##### hot_storage_time_to_live: `int`<a id="hot_storage_time_to_live-int"></a>

Time in days after which the file will be moved to cold storage. Must be one of [1, 3, 7, 14, 30].

##### generate_chunks_only: `bool`<a id="generate_chunks_only-bool"></a>

If this flag is enabled, the file will be chunked and stored with Carbon,             but no embeddings will be generated. This overrides the skip_embedding_generation flag.

##### store_file_only: `bool`<a id="store_file_only-bool"></a>

If this flag is enabled, the file will be stored with Carbon, but no processing will be done.


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/uploadfile` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.uploadFromUrl`<a id="carbonfilesuploadfromurl"></a>

Create Upload File From Url


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->uploadFromUrl(
    url: "string_example", 
    file_name: "string_example", 
    chunk_size: 1, 
    chunk_overlap: 1, 
    skip_embedding_generation: False, 
    set_page_as_boundary: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    use_textract: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    parse_pdf_tables_with_ocr: False, 
    detect_audio_language: False, 
    transcription_service: "assemblyai", 
    include_speaker_labels: False, 
    media_type: "TEXT", 
    split_rows: False, 
    cold_storage_params: [
        "enable_cold_storage" => False,
    ], 
    generate_chunks_only: False, 
    store_file_only: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>

##### file_name: `string`<a id="file_name-string"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### use_textract: `bool`<a id="use_textract-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

##### detect_audio_language: `bool`<a id="detect_audio_language-bool"></a>

##### transcription_service:<a id="transcription_service"></a>

##### include_speaker_labels: `bool`<a id="include_speaker_labels-bool"></a>

##### media_type:<a id="media_type"></a>

##### split_rows: `bool`<a id="split_rows-bool"></a>

##### cold_storage_params: [`ColdStorageProps`](./lib/Model/ColdStorageProps.php)<a id="cold_storage_params-coldstoragepropslibmodelcoldstoragepropsphp"></a>

##### generate_chunks_only: `bool`<a id="generate_chunks_only-bool"></a>

If this flag is enabled, the file will be chunked and stored with Carbon,         but no embeddings will be generated. This overrides the skip_embedding_generation flag.

##### store_file_only: `bool`<a id="store_file_only-bool"></a>

If this flag is enabled, the file will be stored with Carbon, but no processing will be done.


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/upload_file_from_url` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.files.uploadText`<a id="carbonfilesuploadtext"></a>

Carbon supports multiple models for use in generating embeddings for files. For images, we support Vertex AI's
multimodal model; for text, we support OpenAI's `text-embedding-ada-002` and Cohere's embed-multilingual-v3.0.
The model can be specified via the `embedding_model` parameter (in the POST body for `/embeddings`, and a query 
parameter in `/uploadfile`). If no model is supplied, the `text-embedding-ada-002` is used by default. When performing
embedding queries, embeddings from files that used the specified model will be considered in the query.
For example, if files A and B have embeddings generated with `OPENAI`, and files C and D have embeddings generated with
`COHERE_MULTILINGUAL_V3`, then by default, queries will only consider files A and B. If `COHERE_MULTILINGUAL_V3` is
specified as the `embedding_model` in `/embeddings`, then only files C and D will be considered. Make sure that
the set of all files you want considered for a query have embeddings generated via the same model. For now, **do not**
set `VERTEX_MULTIMODAL` as an `embedding_model`. This model is used automatically by Carbon when it detects an image file.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->files->uploadText(
    contents: "aaaaa", 
    name: "string_example", 
    chunk_size: 1, 
    chunk_overlap: 1, 
    skip_embedding_generation: False, 
    overwrite_file_id: 1, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    cold_storage_params: [
        "enable_cold_storage" => False,
    ], 
    generate_chunks_only: False, 
    store_file_only: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### contents: `string`<a id="contents-string"></a>

##### name: `string`<a id="name-string"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### overwrite_file_id: `int`<a id="overwrite_file_id-int"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### cold_storage_params: [`ColdStorageProps`](./lib/Model/ColdStorageProps.php)<a id="cold_storage_params-coldstoragepropslibmodelcoldstoragepropsphp"></a>

##### generate_chunks_only: `bool`<a id="generate_chunks_only-bool"></a>

If this flag is enabled, the file will be chunked and stored with Carbon,         but no embeddings will be generated. This overrides the skip_embedding_generation flag.

##### store_file_only: `bool`<a id="store_file_only-bool"></a>

If this flag is enabled, the file will be stored with Carbon, but no processing will be done.


#### 🔄 Return<a id="🔄-return"></a>

[**UserFile**](./lib/Model/UserFile.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/upload_text` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getIssue`<a id="carbongithubgetissue"></a>

Issue


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getIssue(
    issue_number: 1, 
    include_remote_data: False, 
    data_source_id: 1, 
    repository: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### issue_number: `int`<a id="issue_number-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Issue**](./lib/Model/Issue.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/issues/{issue_number}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getIssues`<a id="carbongithubgetissues"></a>

Issues


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getIssues(
    data_source_id: 1, 
    repository: "string_example", 
    include_remote_data: False, 
    page: 1, 
    page_size: 30, 
    next_cursor: "string_example", 
    filters: [
        "state" => "closed",
    ], 
    order_by: "created", 
    order_dir: "asc"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>

Full name of the repository, denoted as {owner}/{repo}

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### page: `int`<a id="page-int"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### filters: [`IssuesFilter`](./lib/Model/IssuesFilter.php)<a id="filters-issuesfilterlibmodelissuesfilterphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**IssuesResponse**](./lib/Model/IssuesResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/issues` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getPr`<a id="carbongithubgetpr"></a>

Get Pr


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getPr(
    pull_number: 1, 
    include_remote_data: False, 
    data_source_id: 1, 
    repository: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pull_number: `int`<a id="pull_number-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**PullRequestExtended**](./lib/Model/PullRequestExtended.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/pull_requests/{pull_number}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getPrComments`<a id="carbongithubgetprcomments"></a>

Pr Comments


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getPrComments(
    data_source_id: 1, 
    repository: "string_example", 
    pull_number: 1, 
    include_remote_data: False, 
    page: 1, 
    page_size: 30, 
    next_cursor: "string_example", 
    order_by: "created", 
    order_dir: "asc"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>

Full name of the repository, denoted as {owner}/{repo}

##### pull_number: `int`<a id="pull_number-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### page: `int`<a id="page-int"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**CommentsResponse**](./lib/Model/CommentsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/pull_requests/comments` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getPrCommits`<a id="carbongithubgetprcommits"></a>

Pr Commits


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getPrCommits(
    data_source_id: 1, 
    repository: "string_example", 
    pull_number: 1, 
    include_remote_data: False, 
    page: 1, 
    page_size: 30, 
    next_cursor: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>

Full name of the repository, denoted as {owner}/{repo}

##### pull_number: `int`<a id="pull_number-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### page: `int`<a id="page-int"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**CommitsResponse**](./lib/Model/CommitsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/pull_requests/commits` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getPrFiles`<a id="carbongithubgetprfiles"></a>

Pr Files


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getPrFiles(
    data_source_id: 1, 
    repository: "string_example", 
    pull_number: 1, 
    include_remote_data: False, 
    page: 1, 
    page_size: 30, 
    next_cursor: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>

Full name of the repository, denoted as {owner}/{repo}

##### pull_number: `int`<a id="pull_number-int"></a>

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### page: `int`<a id="page-int"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**FilesResponse**](./lib/Model/FilesResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/pull_requests/files` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.github.getPullRequests`<a id="carbongithubgetpullrequests"></a>

Get Prs


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->github->getPullRequests(
    data_source_id: 1, 
    repository: "string_example", 
    include_remote_data: False, 
    page: 1, 
    page_size: 30, 
    next_cursor: "string_example", 
    filters: [
        "state" => "closed",
    ], 
    order_by: "created", 
    order_dir: "asc"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### repository: `string`<a id="repository-string"></a>

Full name of the repository, denoted as {owner}/{repo}

##### include_remote_data: `bool`<a id="include_remote_data-bool"></a>

##### page: `int`<a id="page-int"></a>

##### page_size: `int`<a id="page_size-int"></a>

##### next_cursor: `string`<a id="next_cursor-string"></a>

##### filters: [`PullRequestFilters`](./lib/Model/PullRequestFilters.php)<a id="filters-pullrequestfilterslibmodelpullrequestfiltersphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**PullRequestResponse**](./lib/Model/PullRequestResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/data/github/pull_requests` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.cancel`<a id="carbonintegrationscancel"></a>

Cancel Data Source Items Sync


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->cancel(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceAPI**](./lib/Model/OrganizationUserDataSourceAPI.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/items/sync/cancel` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.connectDataSource`<a id="carbonintegrationsconnectdatasource"></a>

Connect Data Source


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->connectDataSource(
    authentication: [
        "source" => "GOOGLE_DRIVE",
        "access_token" => "access_token_example",
    ], 
    sync_options: [
        "chunk_size" => 1500,
        "chunk_overlap" => 20,
        "skip_embedding_generation" => False,
        "embedding_model" => "OPENAI",
        "generate_sparse_vectors" => False,
        "prepend_filename_to_chunks" => False,
        "sync_files_on_connection" => True,
        "set_page_as_boundary" => False,
        "enable_file_picker" => True,
        "sync_source_items" => True,
        "incremental_sync" => False,
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authentication: [`AuthenticationProperty`](./lib/Model/AuthenticationProperty.php)<a id="authentication-authenticationpropertylibmodelauthenticationpropertyphp"></a>

##### sync_options: [`SyncOptions`](./lib/Model/SyncOptions.php)<a id="sync_options-syncoptionslibmodelsyncoptionsphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ConnectDataSourceResponse**](./lib/Model/ConnectDataSourceResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/connect` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.connectDocument360`<a id="carbonintegrationsconnectdocument360"></a>

You will need an access token to connect your Document360 account. To obtain an access token, follow the steps highlighted 
here https://apidocs.document360.com/apidocs/api-token.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->connectDocument360(
    account_email: "string_example", 
    access_token: "string_example", 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    sync_files_on_connection: True, 
    request_id: "string_example", 
    sync_source_items: True, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_email: `string`<a id="account_email-string"></a>

This email will be used to identify your carbon data source. It should have access to the          Document360 account you wish to connect.

##### access_token: `string`<a id="access_token-string"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### sync_files_on_connection: `bool`<a id="sync_files_on_connection-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/document360` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.connectFreshdesk`<a id="carbonintegrationsconnectfreshdesk"></a>

Refer this article to obtain an API key https://support.freshdesk.com/en/support/solutions/articles/215517.
Make sure that your API key has the permission to read solutions from your account and you are on a <b>paid</b> plan.
Once you have an API key, you can make a request to this endpoint along with your freshdesk domain. This will 
trigger an automatic sync of the articles in your "solutions" tab. Additional parameters below can be used to associate 
data with the synced articles or modify the sync behavior.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->connectFreshdesk(
    domain: "string_example", 
    api_key: "string_example", 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    sync_files_on_connection: True, 
    request_id: "string_example", 
    sync_source_items: True, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### domain: `string`<a id="domain-string"></a>

##### api_key: `string`<a id="api_key-string"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### sync_files_on_connection: `bool`<a id="sync_files_on_connection-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/freshdesk` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.connectGitbook`<a id="carbonintegrationsconnectgitbook"></a>

You will need an access token to connect your Gitbook account. Note that the permissions will be defined by the user 
generating access token so make sure you have the permission to access spaces you will be syncing. 
Refer this article for more details https://developer.gitbook.com/gitbook-api/authentication. Additionally, you
need to specify the name of organization you will be syncing data from.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->connectGitbook(
    organization: "string_example", 
    access_token: "string_example", 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    sync_files_on_connection: True, 
    request_id: "string_example", 
    sync_source_items: True, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### organization: `string`<a id="organization-string"></a>

##### access_token: `string`<a id="access_token-string"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### sync_files_on_connection: `bool`<a id="sync_files_on_connection-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/gitbook` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.connectGuru`<a id="carbonintegrationsconnectguru"></a>

You will need an access token to connect your Guru account. To obtain an access token, follow the steps highlighted here
https://help.getguru.com/docs/gurus-api#obtaining-a-user-token. The username should be your Guru username.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->connectGuru(
    username: "string_example", 
    access_token: "string_example", 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    sync_files_on_connection: True, 
    request_id: "string_example", 
    sync_source_items: True, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### username: `string`<a id="username-string"></a>

##### access_token: `string`<a id="access_token-string"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### sync_files_on_connection: `bool`<a id="sync_files_on_connection-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/guru` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.createAwsIamUser`<a id="carbonintegrationscreateawsiamuser"></a>

This endpoint can be used to connect S3 as well as Digital Ocean Spaces (S3 compatible)  
For S3, create a new IAM user with permissions to:
<ol>
<li>List all buckets.</li>
<li>Read from the specific buckets and objects to sync with Carbon. Ensure any future buckets or objects carry 
the same permissions.</li>
</ol>
Once created, generate an access key for this user and share the credentials with us. We recommend testing this key beforehand.  
For Digital Ocean Spaces, generate the above credentials in your Applications and API page here https://cloud.digitalocean.com/account/api/spaces.
Endpoint URL is required to connect Digital Ocean Spaces. It should look like <<region>>.digitaloceanspaces.com


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->createAwsIamUser(
    access_key: "string_example", 
    access_key_secret: "string_example", 
    sync_source_items: True, 
    endpoint_url: "string_example", 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### access_key: `string`<a id="access_key-string"></a>

##### access_key_secret: `string`<a id="access_key_secret-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### endpoint_url: `string`<a id="endpoint_url-string"></a>

You can specify a Digital Ocean endpoint URL to connect a Digital Ocean Space through this endpoint.         The URL should be of format <region>.digitaloceanspaces.com. It's not required for S3 buckets.

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceAPI**](./lib/Model/OrganizationUserDataSourceAPI.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/s3` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.getOauthUrl`<a id="carbonintegrationsgetoauthurl"></a>

This endpoint can be used to generate the following URLs
- An OAuth URL for OAuth based connectors
- A file syncing URL which skips the OAuth flow if the user already has a valid access token and takes them to the
success state.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->getOauthUrl(
    service: "BOX", 
    tags: None, 
    scope: "string_example", 
    scopes: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    zendesk_subdomain: "string_example", 
    microsoft_tenant: "string_example", 
    sharepoint_site_name: "string_example", 
    confluence_subdomain: "string_example", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    salesforce_domain: "string_example", 
    sync_files_on_connection: True, 
    set_page_as_boundary: False, 
    data_source_id: 1, 
    connecting_new_account: False, 
    request_id: "string_example", 
    use_ocr: False, 
    parse_pdf_tables_with_ocr: False, 
    enable_file_picker: True, 
    sync_source_items: True, 
    incremental_sync: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    automatically_open_file_picker: True, 
    gong_account_email: "string_example", 
    servicenow_credentials: [
        "instance_subdomain" => "instance_subdomain_example",
        "client_id" => "client_id_example",
        "client_secret" => "client_secret_example",
        "redirect_uri" => "redirect_uri_example",
    ], 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### service:<a id="service"></a>

##### tags:<a id="tags"></a>

##### scope: `string`<a id="scope-string"></a>

##### scopes: `string`[]<a id="scopes-string"></a>

List of scopes to request from the OAuth provider. Please that the scopes will be used as it is, not          combined with the default props that Carbon uses. One scope should be one array element.

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### zendesk_subdomain: `string`<a id="zendesk_subdomain-string"></a>

##### microsoft_tenant: `string`<a id="microsoft_tenant-string"></a>

##### sharepoint_site_name: `string`<a id="sharepoint_site_name-string"></a>

##### confluence_subdomain: `string`<a id="confluence_subdomain-string"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### salesforce_domain: `string`<a id="salesforce_domain-string"></a>

##### sync_files_on_connection: `bool`<a id="sync_files_on_connection-bool"></a>

Used to specify whether Carbon should attempt to sync all your files automatically when authorization         is complete. This is only supported for a subset of connectors and will be ignored for the rest. Supported         connectors: Intercom, Zendesk, Gitbook, Confluence, Salesforce, Freshdesk

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

Used to specify a data source to sync from if you have multiple connected. It can be skipped if          you only have one data source of that type connected or are connecting a new account.

##### connecting_new_account: `bool`<a id="connecting_new_account-bool"></a>

Used to connect a new data source. If not specified, we will attempt to create a sync URL         for an existing data source based on type and ID.

##### request_id: `string`<a id="request_id-string"></a>

This request id will be added to all files that get synced using the generated OAuth URL

##### use_ocr: `bool`<a id="use_ocr-bool"></a>

Enable OCR for files that support it. Supported formats: pdf, png, jpg

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

##### enable_file_picker: `bool`<a id="enable_file_picker-bool"></a>

Enable integration's file picker for sources that support it. Supported sources: BOX, DROPBOX, GOOGLE_DRIVE, ONEDRIVE, SHAREPOINT

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### incremental_sync: `bool`<a id="incremental_sync-bool"></a>

Only sync files if they have not already been synced or if the embedding properties have changed.         This flag is currently supported by ONEDRIVE, GOOGLE_DRIVE, BOX, DROPBOX, INTERCOM, GMAIL, OUTLOOK, ZENDESK, CONFLUENCE, NOTION, SHAREPOINT, SERVICENOW. It will be ignored for other data sources.

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### automatically_open_file_picker: `bool`<a id="automatically_open_file_picker-bool"></a>

Automatically open source file picker after the OAuth flow is complete. This flag is currently supported by         BOX, DROPBOX, GOOGLE_DRIVE, ONEDRIVE, SHAREPOINT. It will be ignored for other data sources.

##### gong_account_email: `string`<a id="gong_account_email-string"></a>

If you are connecting a Gong account, you need to input the email of the account you         wish to connect. This email will be used to identify your carbon data source.

##### servicenow_credentials: [`ServiceNowCredentialsNullable`](./lib/Model/ServiceNowCredentialsNullable.php)<a id="servicenow_credentials-servicenowcredentialsnullablelibmodelservicenowcredentialsnullablephp"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**OuthURLResponse**](./lib/Model/OuthURLResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/oauth_url` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listConfluencePages`<a id="carbonintegrationslistconfluencepages"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

This endpoint has been deprecated. Use /integrations/items/list instead.

To begin listing a user's Confluence pages, at least a `data_source_id` of a connected
Confluence account must be specified. This base request returns a list of root pages for
every space the user has access to in a Confluence instance. To traverse further down
the user's page directory, additional requests to this endpoint can be made with the same
`data_source_id` and with `parent_id` set to the id of page from a previous request. For
convenience, the `has_children` property in each directory item in the response list will
flag which pages will return non-empty lists of pages when set as the `parent_id`.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listConfluencePages(
    data_source_id: 1, 
    parent_id: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### parent_id: `string`<a id="parent_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ListResponse**](./lib/Model/ListResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/confluence/list` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listConversations`<a id="carbonintegrationslistconversations"></a>

List all of your public and private channels, DMs, and Group DMs. The ID from response 
can be used as a filter to sync messages to Carbon   
types: Comma separated list of types. Available types are im (DMs), mpim (group DMs), public_channel, and private_channel.
Defaults to public_channel.    
cursor: Used for pagination. If next_cursor is returned in response, you need to pass it as the cursor in the next request    
data_source_id: Data source needs to be specified if you have linked multiple slack accounts  
exclude_archived: Should archived conversations be excluded, defaults to true


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listConversations(
    types: "public_channel", 
    cursor: "string_example", 
    data_source_id: 1, 
    exclude_archived: True
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### types: `string`<a id="types-string"></a>

##### cursor: `string`<a id="cursor-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### exclude_archived: `bool`<a id="exclude_archived-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/slack/conversations` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listDataSourceItems`<a id="carbonintegrationslistdatasourceitems"></a>

List Data Source Items


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listDataSourceItems(
    data_source_id: 1, 
    parent_id: "string_example", 
    filters: [
    ], 
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "name", 
    order_dir: "asc"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### parent_id: `string`<a id="parent_id-string"></a>

##### filters: [`ListItemsFiltersNullable`](./lib/Model/ListItemsFiltersNullable.php)<a id="filters-listitemsfiltersnullablelibmodellistitemsfiltersnullablephp"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ListDataSourceItemsResponse**](./lib/Model/ListDataSourceItemsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/items/list` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listFolders`<a id="carbonintegrationslistfolders"></a>

After connecting your Outlook account, you can use this endpoint to list all of your folders on outlook. This includes 
both system folders like "inbox" and user created folders.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listFolders(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/outlook/user_folders` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listGitbookSpaces`<a id="carbonintegrationslistgitbookspaces"></a>

After connecting your Gitbook account, you can use this endpoint to list all of your spaces under current organization.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listGitbookSpaces(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/gitbook/spaces` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listLabels`<a id="carbonintegrationslistlabels"></a>

After connecting your Gmail account, you can use this endpoint to list all of your labels. User created labels
will have the type "user" and Gmail's default labels will have the type "system"


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listLabels(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/gmail/user_labels` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listOutlookCategories`<a id="carbonintegrationslistoutlookcategories"></a>

After connecting your Outlook account, you can use this endpoint to list all of your categories on outlook. We currently
support listing up to 250 categories.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listOutlookCategories(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/outlook/user_categories` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listRepos`<a id="carbonintegrationslistrepos"></a>

Once you have connected your GitHub account, you can use this endpoint to list the 
    repositories your account has access to. You can use a data source ID or username to fetch from a specific account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listRepos(
    per_page: 30, 
    page: 1, 
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### per_page: `int`<a id="per_page-int"></a>

##### page: `int`<a id="page-int"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/github/repos` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.listSharepointSites`<a id="carbonintegrationslistsharepointsites"></a>

List all Sharepoint sites in the connected tenant. The site names from the response can be
used as the site name when connecting a Sharepoint site. If site name is null in the response, then site name should
be left null when connecting to the site.

This endpoint requires an additional Sharepoint scope: "Sites.Read.All". Include this scope along with the default
Sharepoint scopes to list Sharepoint sites, connect to a site, and finally sync files from the site. The default
Sharepoint scopes are: [o, p, e, n, i, d,  , o, f, f, l, i, n, e, _, a, c, c, e, s, s,  , U, s, e, r, ., R, e, a, d,  , F, i, l, e, s, ., R, e, a, d, ., A, l, l].
 
data_soure_id: Data source needs to be specified if you have linked multiple Sharepoint accounts
cursor: Used for pagination. If next_cursor is returned in response, you need to pass it as the cursor in the next request


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->listSharepointSites(
    data_source_id: 1, 
    cursor: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### cursor: `string`<a id="cursor-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/sharepoint/sites/list` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncAzureBlobFiles`<a id="carbonintegrationssyncazureblobfiles"></a>

After optionally loading the items via /integrations/items/sync and integrations/items/list, use the container name 
and file name as the ID in this endpoint to sync them into Carbon. Additional parameters below can associate 
data with the selected items or modify the sync behavior


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncAzureBlobFiles(
    ids: [
        [
        ]
    ], 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    set_page_as_boundary: False, 
    data_source_id: 1, 
    request_id: "string_example", 
    use_ocr: False, 
    parse_pdf_tables_with_ocr: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### ids: [`AzureBlobGetFileInput`](./lib/Model/AzureBlobGetFileInput.php)[]<a id="ids-azureblobgetfileinputlibmodelazureblobgetfileinputphp"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### use_ocr: `bool`<a id="use_ocr-bool"></a>

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/azure_blob_storage/files` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncAzureBlobStorage`<a id="carbonintegrationssyncazureblobstorage"></a>

This endpoint can be used to connect Azure Blob Storage.

For Azure Blob Storage, follow these steps:
<ol>
  <li>Create a new Azure Storage account and grant the following permissions:
    <ul>
      <li>List containers.</li>
      <li>Read from specific containers and blobs to sync with Carbon. Ensure any future containers or blobs carry the same permissions.</li>
    </ul>
  </li>
  <li>Generate a shared access signature (SAS) token or an access key for the storage account.</li>
</ol>

Once created, provide us with the following details to generate the connection URL:
<ol>
  <li>Storage Account KeyName.</li>
  <li>Storage Account Name.</li>
</ol>


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncAzureBlobStorage(
    account_name: "string_example", 
    account_key: "string_example", 
    sync_source_items: True, 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_name: `string`<a id="account_name-string"></a>

##### account_key: `string`<a id="account_key-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceAPI**](./lib/Model/OrganizationUserDataSourceAPI.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/azure_blob_storage` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncConfluence`<a id="carbonintegrationssyncconfluence"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

This endpoint has been deprecated. Use /integrations/files/sync instead.

After listing pages in a user's Confluence account, the set of selected page `ids` and the
connected account's `data_source_id` can be passed into this endpoint to sync them into
Carbon. Additional parameters listed below can be used to associate data to the selected
pages or alter the behavior of the sync.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncConfluence(
    data_source_id: 1, 
    ids: [
        "string_example"
    ], 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    set_page_as_boundary: False, 
    request_id: "string_example", 
    use_ocr: False, 
    parse_pdf_tables_with_ocr: False, 
    incremental_sync: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### ids: [`IdsProperty`](./lib/Model/IdsProperty.php)<a id="ids-idspropertylibmodelidspropertyphp"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### use_ocr: `bool`<a id="use_ocr-bool"></a>

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

##### incremental_sync: `bool`<a id="incremental_sync-bool"></a>

Only sync files if they have not already been synced or if the embedding properties have changed.         This flag is currently supported by ONEDRIVE, GOOGLE_DRIVE, BOX, DROPBOX, INTERCOM, GMAIL, OUTLOOK, ZENDESK, CONFLUENCE, NOTION, SHAREPOINT, SERVICENOW. It will be ignored for other data sources.

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/confluence/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncDataSourceItems`<a id="carbonintegrationssyncdatasourceitems"></a>

Sync Data Source Items


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncDataSourceItems(
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationUserDataSourceAPI**](./lib/Model/OrganizationUserDataSourceAPI.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/items/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncFiles`<a id="carbonintegrationssyncfiles"></a>

After listing files and folders via /integrations/items/sync and integrations/items/list, use the selected items' external ids 
as the ids in this endpoint to sync them into Carbon. Sharepoint items take an additional parameter root_id, which identifies
the drive the file or folder is in and is stored in root_external_id. That additional paramter is optional and excluding it will
tell the sync to assume the item is stored in the default Documents drive.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncFiles(
    data_source_id: 1, 
    ids: [
        "string_example"
    ], 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    set_page_as_boundary: False, 
    request_id: "string_example", 
    use_ocr: False, 
    parse_pdf_tables_with_ocr: False, 
    incremental_sync: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### ids: [`IdsProperty`](./lib/Model/IdsProperty.php)<a id="ids-idspropertylibmodelidspropertyphp"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### use_ocr: `bool`<a id="use_ocr-bool"></a>

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

##### incremental_sync: `bool`<a id="incremental_sync-bool"></a>

Only sync files if they have not already been synced or if the embedding properties have changed.         This flag is currently supported by ONEDRIVE, GOOGLE_DRIVE, BOX, DROPBOX, INTERCOM, GMAIL, OUTLOOK, ZENDESK, CONFLUENCE, NOTION, SHAREPOINT, SERVICENOW. It will be ignored for other data sources.

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/files/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncGitHub`<a id="carbonintegrationssyncgithub"></a>

Refer this article to obtain an access token https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/managing-your-personal-access-tokens.
Make sure that your access token has the permission to read content from your desired repos. Note that if your access token
expires you will need to manually update it through this endpoint.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncGitHub(
    username: "string_example", 
    access_token: "string_example", 
    sync_source_items: False, 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### username: `string`<a id="username-string"></a>

##### access_token: `string`<a id="access_token-string"></a>

##### sync_source_items: `bool`<a id="sync_source_items-bool"></a>

Enabling this flag will fetch all available content from the source to be listed via list items endpoint

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/github` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncGitbook`<a id="carbonintegrationssyncgitbook"></a>

You can sync upto 20 Gitbook spaces at a time using this endpoint. Additional parameters below can be used to associate 
data with the synced pages or modify the sync behavior.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncGitbook(
    space_ids: [
        "string_example"
    ], 
    data_source_id: 1, 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    request_id: "string_example", 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### space_ids: `string`[]<a id="space_ids-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/gitbook/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncGmail`<a id="carbonintegrationssyncgmail"></a>

Once you have successfully connected your gmail account, you can choose which emails to sync with us
using the filters parameter. Filters is a JSON object with key value pairs. It also supports AND and OR operations.
For now, we support a limited set of keys listed below.

<b>label</b>: Inbuilt Gmail labels, for example "Important" or a custom label you created.  
<b>after</b> or <b>before</b>: A date in YYYY/mm/dd format (example 2023/12/31). Gets emails after/before a certain date.
You can also use them in combination to get emails from a certain period.  
<b>is</b>: Can have the following values - starred, important, snoozed, and unread  
<b>from</b>: Email address of the sender  
<b>to</b>: Email address of the recipient  
<b>in</b>: Can have the following values - sent (sync emails sent by the user)  
<b>has</b>: Can have the following values - attachment (sync emails that have attachments)  

Using keys or values outside of the specified values can lead to unexpected behaviour.

An example of a basic query with filters can be
```json
{
    "filters": {
            "key": "label",
            "value": "Test"
        }
}
```
Which will list all emails that have the label "Test".

You can use AND and OR operation in the following way:
```json
{
    "filters": {
        "AND": [
            {
                "key": "after",
                "value": "2024/01/07"
            },
            {
                "OR": [
                    {
                        "key": "label",
                        "value": "Personal"
                    },
                    {
                        "key": "is",
                        "value": "starred"
                    }
                ]
            }
        ]
    }
}
```
This will return emails after 7th of Jan that are either starred or have the label "Personal". 
Note that this is the highest level of nesting we support, i.e. you can't add more AND/OR filters within the OR filter
in the above example.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncGmail(
    filters: [], 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    data_source_id: 1, 
    request_id: "string_example", 
    sync_attachments: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    incremental_sync: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: `object`<a id="filters-object"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### sync_attachments: `bool`<a id="sync_attachments-bool"></a>

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### incremental_sync: `bool`<a id="incremental_sync-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/gmail/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncOutlook`<a id="carbonintegrationssyncoutlook"></a>

Once you have successfully connected your Outlook account, you can choose which emails to sync with us
using the filters and folder parameter. "folder" should be the folder you want to sync from Outlook. By default
we get messages from your inbox folder.  
Filters is a JSON object with key value pairs. It also supports AND and OR operations.
For now, we support a limited set of keys listed below.

<b>category</b>: Custom categories that you created in Outlook.  
<b>after</b> or <b>before</b>: A date in YYYY/mm/dd format (example 2023/12/31). Gets emails after/before a certain date. You can also use them in combination to get emails from a certain period.    
<b>is</b>: Can have the following values: flagged  
<b>from</b>: Email address of the sender   

An example of a basic query with filters can be
```json
{
    "filters": {
            "key": "category",
            "value": "Test"
        }
}
```
Which will list all emails that have the category "Test".  

Specifying a custom folder in the same query
```json
{
    "folder": "Folder Name",
    "filters": {
            "key": "category",
            "value": "Test"
        }
}
```

You can use AND and OR operation in the following way:
```json
{
    "filters": {
        "AND": [
            {
                "key": "after",
                "value": "2024/01/07"
            },
            {
                "OR": [
                    {
                        "key": "category",
                        "value": "Personal"
                    },
                    {
                        "key": "category",
                        "value": "Test"
                    },
                ]
            }
        ]
    }
}
```
This will return emails after 7th of Jan that have either Personal or Test as category. 
Note that this is the highest level of nesting we support, i.e. you can't add more AND/OR filters within the OR filter
in the above example.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncOutlook(
    filters: [], 
    tags: [], 
    folder: "Inbox", 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    data_source_id: 1, 
    request_id: "string_example", 
    sync_attachments: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ], 
    incremental_sync: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: `object`<a id="filters-object"></a>

##### tags: `object`<a id="tags-object"></a>

##### folder: `string`<a id="folder-string"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### sync_attachments: `bool`<a id="sync_attachments-bool"></a>

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>

##### incremental_sync: `bool`<a id="incremental_sync-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/outlook/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncRepos`<a id="carbonintegrationssyncrepos"></a>

You can retreive repos your token has access to using /integrations/github/repos and sync their content. 
You can also pass full name of any public repository (username/repo-name). This will store the repo content with 
carbon which can be accessed through /integrations/items/list endpoint. Maximum of 25 repositories are accepted per request.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncRepos(
    repos: [
        "string_example"
    ], 
    data_source_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### repos: `string`[]<a id="repos-string"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/github/sync_repos` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncRssFeed`<a id="carbonintegrationssyncrssfeed"></a>

Rss Feed


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncRssFeed(
    url: "string_example", 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    request_id: "string_example", 
    data_source_tags: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### data_source_tags: `object`<a id="data_source_tags-object"></a>

Tags to be associated with the data source. If the data source already has tags set, then an upsert will be performed.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/rss_feed` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncS3Files`<a id="carbonintegrationssyncs3files"></a>

After optionally loading the items via /integrations/items/sync and integrations/items/list, use the bucket name 
and object key as the ID in this endpoint to sync them into Carbon. Additional parameters below can associate 
data with the selected items or modify the sync behavior


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncS3Files(
    ids: [
        [
        ]
    ], 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    max_items_per_chunk: 1, 
    set_page_as_boundary: False, 
    data_source_id: 1, 
    request_id: "string_example", 
    use_ocr: False, 
    parse_pdf_tables_with_ocr: False, 
    file_sync_config: [
        "auto_synced_source_types" => ["ARTICLE"],
        "sync_attachments" => False,
        "detect_audio_language" => False,
        "transcription_service" => "assemblyai",
        "include_speaker_labels" => False,
        "split_rows" => False,
        "generate_chunks_only" => False,
        "store_file_only" => False,
        "skip_file_processing" => False,
        "parsed_text_format" => "PLAIN_TEXT",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### ids: [`S3GetFileInput`](./lib/Model/S3GetFileInput.php)[]<a id="ids-s3getfileinputlibmodels3getfileinputphp"></a>

Each input should be one of the following: A bucket name, a bucket name and a prefix, or a          bucket name and an object key. A prefix is the common path for all objects you want to sync.          Paths should end with a forward slash.

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### max_items_per_chunk: `int`<a id="max_items_per_chunk-int"></a>

Number of objects per chunk. For csv, tsv, xlsx, and json files only.

##### set_page_as_boundary: `bool`<a id="set_page_as_boundary-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### request_id: `string`<a id="request_id-string"></a>

##### use_ocr: `bool`<a id="use_ocr-bool"></a>

##### parse_pdf_tables_with_ocr: `bool`<a id="parse_pdf_tables_with_ocr-bool"></a>

##### file_sync_config: [`FileSyncConfigNullable`](./lib/Model/FileSyncConfigNullable.php)<a id="file_sync_config-filesyncconfignullablelibmodelfilesyncconfignullablephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/s3/files` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.integrations.syncSlack`<a id="carbonintegrationssyncslack"></a>

You can list all conversations using the endpoint /integrations/slack/conversations. The ID of 
conversation will be used as an input for this endpoint with timestamps as optional filters.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->integrations->syncSlack(
    filters: [
        "conversation_id" => "conversation_id_example",
    ], 
    tags: [], 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    embedding_model: "OPENAI", 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    data_source_id: 1, 
    request_id: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`SlackFilters`](./lib/Model/SlackFilters.php)<a id="filters-slackfilterslibmodelslackfiltersphp"></a>

##### tags: `object`<a id="tags-object"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### embedding_model:<a id="embedding_model"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### data_source_id: `int`<a id="data_source_id-int"></a>

##### request_id: `string`<a id="request_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/integrations/slack/sync` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.organizations.get`<a id="carbonorganizationsget"></a>

Get Organization


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->organizations->get();
```


#### 🔄 Return<a id="🔄-return"></a>

[**OrganizationResponse**](./lib/Model/OrganizationResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/organization` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.organizations.update`<a id="carbonorganizationsupdate"></a>

Update Organization


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->organizations->update(
    global_user_config: [
    ], 
    data_source_configs: [
        "key": [
            "allowed_file_formats" => [],
        ],
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### global_user_config: [`UserConfigurationNullable`](./lib/Model/UserConfigurationNullable.php)<a id="global_user_config-userconfigurationnullablelibmodeluserconfigurationnullablephp"></a>

##### data_source_configs: array<string, [`DataSourceConfiguration`](./lib/Model/DataSourceConfiguration.php)><a id="data_source_configs-array"></a>

Used to set organization level defaults for configuration related to data sources.


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/organization/update` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.organizations.updateStats`<a id="carbonorganizationsupdatestats"></a>

Use this endpoint to reaggregate the statistics for an organization, for example aggregate_file_size. The reaggregation
process is asyncronous so a webhook will be sent with the event type being FILE_STATISTICS_AGGREGATED to notify when the
process is complee. After this aggregation is complete, the updated statistics can be retrieved using the /organization
endpoint. The response of /organization willalso contain a timestamp of the last time the statistics were reaggregated.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->organizations->updateStats();
```


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/organization/statistics` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.users.all`<a id="carbonusersall"></a>

List users within an organization


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->users->all(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    filters: [
    ], 
    order_by: "created_at", 
    order_dir: "asc", 
    include_count: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### filters: [`ListUsersFilters`](./lib/Model/ListUsersFilters.php)<a id="filters-listusersfilterslibmodellistusersfiltersphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### include_count: `bool`<a id="include_count-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UserListResponse**](./lib/Model/UserListResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/list_users` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.users.delete`<a id="carbonusersdelete"></a>

Delete Users


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->users->delete(
    customer_ids: [
        "string_example"
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### customer_ids: `string`[]<a id="customer_ids-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/delete_users` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.users.get`<a id="carbonusersget"></a>

User Endpoint


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->users->get(
    customer_id: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### customer_id: `string`<a id="customer_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**UserResponse**](./lib/Model/UserResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/user` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.users.toggleUserFeatures`<a id="carbonuserstoggleuserfeatures"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

Toggle User Features


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->users->toggleUserFeatures(
    configuration_key_name: "sparse_vectors", 
    value: []
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### configuration_key_name:<a id="configuration_key_name"></a>

##### value: `object`<a id="value-object"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/modify_user_configuration` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.users.updateUsers`<a id="carbonusersupdateusers"></a>

Update Users


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->users->updateUsers(
    customer_ids: [
        "string_example"
    ], 
    auto_sync_enabled_sources: [
        "string_example"
    ], 
    max_files: -1, 
    max_files_per_upload: -1, 
    max_characters: -1, 
    max_characters_per_file: -1, 
    max_characters_per_upload: -1, 
    auto_sync_interval: -1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### customer_ids: `string`[]<a id="customer_ids-string"></a>

List of organization supplied user IDs

##### auto_sync_enabled_sources: [`AutoSyncEnabledSourcesProperty`](./lib/Model/AutoSyncEnabledSourcesProperty.php)<a id="auto_sync_enabled_sources-autosyncenabledsourcespropertylibmodelautosyncenabledsourcespropertyphp"></a>

##### max_files: `int`<a id="max_files-int"></a>

Custom file upload limit for the user over *all* user's files across all uploads.          If set, then the user will not be allowed to upload more files than this limit. If not set, or if set to -1,         then the user will have no limit.

##### max_files_per_upload: `int`<a id="max_files_per_upload-int"></a>

Custom file upload limit for the user across a single upload.         If set, then the user will not be allowed to upload more files than this limit in a single upload. If not set,         or if set to -1, then the user will have no limit.

##### max_characters: `int`<a id="max_characters-int"></a>

Custom character upload limit for the user over *all* user's files across all uploads.          If set, then the user will not be allowed to upload more characters than this limit. If not set, or if set to -1,         then the user will have no limit.

##### max_characters_per_file: `int`<a id="max_characters_per_file-int"></a>

A single file upload from the user can not exceed this character limit.         If set, then the file will not be synced if it exceeds this limit. If not set, or if set to -1, then the          user will have no limit.

##### max_characters_per_upload: `int`<a id="max_characters_per_upload-int"></a>

Custom character upload limit for the user across a single upload.         If set, then the user won't be able to sync more than this many characters in one upload.          If not set, or if set to -1, then the user will have no limit.

##### auto_sync_interval: `int`<a id="auto_sync_interval-int"></a>

The interval in hours at which the user's data sources should be synced. If not set or set to -1,          the user will be synced at the organization level interval or default interval if that is also not set.          Must be one of [3, 6, 12, 24]


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/update_users` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.users.whoAmI`<a id="carbonuserswhoami"></a>

Me Endpoint


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->users->whoAmI();
```


#### 🔄 Return<a id="🔄-return"></a>

[**UserResponse**](./lib/Model/UserResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/whoami` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.fetchUrls`<a id="carbonutilitiesfetchurls"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

Extracts all URLs from a webpage. 

Args:
    url (str): URL of the webpage

Returns:
    FetchURLsResponse: A response object with a list of URLs extracted from the webpage and the webpage content.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->fetchUrls(
    url: "url_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**FetchURLsResponse**](./lib/Model/FetchURLsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/fetch_urls` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.fetchWebpage`<a id="carbonutilitiesfetchwebpage"></a>

Fetch Urls V2


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->fetchWebpage(
    url: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/fetch_webpage` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.fetchYoutubeTranscripts`<a id="carbonutilitiesfetchyoutubetranscripts"></a>

Fetches english transcripts from YouTube videos.

Args:
    id (str): The ID of the YouTube video. 
    raw (bool): Whether to return the raw transcript or not. Defaults to False.

Returns:
    dict: A dictionary with the transcript of the YouTube video.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->fetchYoutubeTranscripts(
    id: "id_example", 
    raw: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### id: `string`<a id="id-string"></a>

##### raw: `bool`<a id="raw-bool"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**YoutubeTranscriptResponse**](./lib/Model/YoutubeTranscriptResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/fetch_youtube_transcript` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.processSitemap`<a id="carbonutilitiesprocesssitemap"></a>

Retrieves all URLs from a sitemap, which can subsequently be utilized with our `web_scrape` endpoint.

<!--Args:
    url (str): URL of the sitemap

Returns:
    dict: A dictionary with a list of URLs extracted from the sitemap.-->


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->processSitemap(
    url: "url_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/process_sitemap` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.scrapeSitemap`<a id="carbonutilitiesscrapesitemap"></a>

Extracts all URLs from a sitemap and performs a web scrape on each of them.

Args:
    sitemap_url (str): URL of the sitemap

Returns:
    dict: A response object with the status of the scraping job message.-->


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->scrapeSitemap(
    url: "string_example", 
    tags: [
        "key": "string_example",
    ], 
    max_pages_to_scrape: 1, 
    chunk_size: 1500, 
    chunk_overlap: 20, 
    skip_embedding_generation: False, 
    enable_auto_sync: False, 
    generate_sparse_vectors: False, 
    prepend_filename_to_chunks: False, 
    html_tags_to_skip: [], 
    css_classes_to_skip: [], 
    css_selectors_to_skip: [], 
    embedding_model: "OPENAI", 
    url_paths_to_include: [], 
    url_paths_to_exclude: [], 
    urls_to_scrape: [], 
    download_css_and_media: False, 
    generate_chunks_only: False, 
    store_file_only: False, 
    use_premium_proxies: False
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>

##### tags: array<string, [`Tags1`](./lib/Model/Tags1.php)><a id="tags-array"></a>

##### max_pages_to_scrape: `int`<a id="max_pages_to_scrape-int"></a>

##### chunk_size: `int`<a id="chunk_size-int"></a>

##### chunk_overlap: `int`<a id="chunk_overlap-int"></a>

##### skip_embedding_generation: `bool`<a id="skip_embedding_generation-bool"></a>

##### enable_auto_sync: `bool`<a id="enable_auto_sync-bool"></a>

##### generate_sparse_vectors: `bool`<a id="generate_sparse_vectors-bool"></a>

##### prepend_filename_to_chunks: `bool`<a id="prepend_filename_to_chunks-bool"></a>

##### html_tags_to_skip: `string`[]<a id="html_tags_to_skip-string"></a>

##### css_classes_to_skip: `string`[]<a id="css_classes_to_skip-string"></a>

##### css_selectors_to_skip: `string`[]<a id="css_selectors_to_skip-string"></a>

##### embedding_model:<a id="embedding_model"></a>

##### url_paths_to_include: `string`[]<a id="url_paths_to_include-string"></a>

URL subpaths or directories that you want to include. For example if you want to only include         URLs that start with /questions in stackoverflow.com, you will add /questions/ in this input

##### url_paths_to_exclude: `string`[]<a id="url_paths_to_exclude-string"></a>

URL subpaths or directories that you want to exclude. For example if you want to exclude         URLs that start with /questions in stackoverflow.com, you will add /questions/ in this input

##### urls_to_scrape: `string`[]<a id="urls_to_scrape-string"></a>

You can submit a subset of URLs from the sitemap that should be scraped. To get the list of URLs,           you can check out /process_sitemap endpoint. If left empty, all URLs from the sitemap will be scraped.

##### download_css_and_media: `bool`<a id="download_css_and_media-bool"></a>

Whether the scraper should download css and media from the page (images, fonts, etc). Scrapes          might take longer to finish with this flag enabled, but the success rate is improved.

##### generate_chunks_only: `bool`<a id="generate_chunks_only-bool"></a>

If this flag is enabled, the file will be chunked and stored with Carbon,           but no embeddings will be generated. This overrides the skip_embedding_generation flag.

##### store_file_only: `bool`<a id="store_file_only-bool"></a>

If this flag is enabled, the file will be stored with Carbon, but no processing will be done.

##### use_premium_proxies: `bool`<a id="use_premium_proxies-bool"></a>

If the default proxies are blocked and not returning results, this flag can be enabled to use              alternate proxies (residential and office). Scrapes might take longer to finish with this flag enabled.


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/scrape_sitemap` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.scrapeWeb`<a id="carbonutilitiesscrapeweb"></a>

Conduct a web scrape on a given webpage URL. Our web scraper is fully compatible with JavaScript and supports recursion depth, enabling you to efficiently extract all content from the target website.

<!--Args:
    scraping_requests (List[WebscrapeRequest]): A list of WebscrapeRequest objects.

    
Returns:
    dict: A response object with the status of the scraping job message.-->


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->scrapeWeb(
    body: [
        [
            "url" => "url_example",
            "recursion_depth" => 3,
            "max_pages_to_scrape" => 100,
            "chunk_size" => 1500,
            "chunk_overlap" => 20,
            "skip_embedding_generation" => False,
            "enable_auto_sync" => False,
            "generate_sparse_vectors" => False,
            "prepend_filename_to_chunks" => False,
            "html_tags_to_skip" => [],
            "css_classes_to_skip" => [],
            "css_selectors_to_skip" => [],
            "embedding_model" => "OPENAI",
            "url_paths_to_include" => [],
            "download_css_and_media" => False,
            "generate_chunks_only" => False,
            "store_file_only" => False,
            "use_premium_proxies" => False,
        ]
    ],
);
```

#### ⚙️ Request Body<a id="⚙️-request-body"></a>

[`WebscrapeRequest`](./lib/Model/WebscrapeRequest.php)[]


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/web_scrape` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.searchUrls`<a id="carbonutilitiessearchurls"></a>

Perform a web search and obtain a list of relevant URLs.

As an illustration, when you perform a search for “content related to MRNA,” you will receive a list of links such as the following:

    - https://tomrenz.substack.com/p/mrna-and-why-it-matters

    - https://www.statnews.com/2020/11/10/the-story-of-mrna-how-a-once-dismissed-idea-became-a-leading-technology-in-the-covid-vaccine-race/

    - https://www.statnews.com/2022/11/16/covid-19-vaccines-were-a-success-but-mrna-still-has-a-delivery-problem/
    
    - https://joomi.substack.com/p/were-still-being-misled-about-how

Subsequently, you can submit these links to the web_scrape endpoint in order to retrieve the content of the respective web pages.

Args:
    query (str): Query to search for

Returns:
    FetchURLsResponse: A response object with a list of URLs for a given search query.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->searchUrls(
    query: "query_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### query: `string`<a id="query-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**FetchURLsResponse**](./lib/Model/FetchURLsResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/search_urls` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.utilities.userWebpages`<a id="carbonutilitiesuserwebpages"></a>

User Web Pages


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->utilities->userWebpages(
    filters: [
    ], 
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "asc"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### filters: [`UserWebPagesFilters`](./lib/Model/UserWebPagesFilters.php)<a id="filters-userwebpagesfilterslibmodeluserwebpagesfiltersphp"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/user_webpages` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.webhooks.addUrl`<a id="carbonwebhooksaddurl"></a>

Add Webhook Url


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->webhooks->addUrl(
    url: "string_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### url: `string`<a id="url-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Webhook**](./lib/Model/Webhook.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/add_webhook` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.webhooks.deleteUrl`<a id="carbonwebhooksdeleteurl"></a>

Delete Webhook Url


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->webhooks->deleteUrl(
    webhook_id: 1
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### webhook_id: `int`<a id="webhook_id-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**GenericSuccessResponse**](./lib/Model/GenericSuccessResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/delete_webhook/{webhook_id}` `DELETE`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.webhooks.urls`<a id="carbonwebhooksurls"></a>

Webhook Urls


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->webhooks->urls(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    filters: [
        "ids" => [],
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### filters: [`WebhookFilters`](./lib/Model/WebhookFilters.php)<a id="filters-webhookfilterslibmodelwebhookfiltersphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**WebhookQueryResponse**](./lib/Model/WebhookQueryResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/webhooks` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.whiteLabel.all`<a id="carbonwhitelabelall"></a>

List White Labels


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->whiteLabel->all(
    pagination: [
        "limit" => 10,
        "offset" => 0,
        "starting_id" => 0,
    ], 
    order_by: "created_at", 
    order_dir: "desc", 
    filters: [
        "ids" => [],
        "data_source_type" => [],
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### pagination: [`Pagination`](./lib/Model/Pagination.php)<a id="pagination-paginationlibmodelpaginationphp"></a>

##### order_by:<a id="order_by"></a>

##### order_dir:<a id="order_dir"></a>

##### filters: [`WhiteLabelFilters`](./lib/Model/WhiteLabelFilters.php)<a id="filters-whitelabelfilterslibmodelwhitelabelfiltersphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/white_label/list` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.whiteLabel.create`<a id="carbonwhitelabelcreate"></a>

Create White Labels


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->whiteLabel->create(
    body: [
        [
            "data_source_type" => "GOOGLE_DRIVE",
            "credentials" => [
                "client_id" => "client_id_example",
                "redirect_uri" => "redirect_uri_example",
            ],
        ]
    ],
);
```

#### ⚙️ Request Body<a id="⚙️-request-body"></a>

[`WhiteLabelCreateRequestInner`](./lib/Model/WhiteLabelCreateRequestInner.php)[]


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/white_label/create` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.whiteLabel.delete`<a id="carbonwhitelabeldelete"></a>

Delete White Labels


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->whiteLabel->delete(
    ids: [
        1
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### ids: `int`[]<a id="ids-int"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/white_label/delete` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `carbon.whiteLabel.update`<a id="carbonwhitelabelupdate"></a>

Update White Label


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $carbon->whiteLabel->update(
    body: [
        "data_source_type" => "GOOGLE_DRIVE",
        "credentials" => [
            "client_id" => "client_id_example",
            "redirect_uri" => "redirect_uri_example",
        ],
    ],
    data_source_type: "INTERCOM", 
    credentials: [
        "client_id" => "client_id_example",
        "redirect_uri" => "redirect_uri_example",
    ]
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### data_source_type: `string`<a id="data_source_type-string"></a>

##### credentials: [`Credentials`](./lib/Model/Credentials.php)<a id="credentials-credentialslibmodelcredentialsphp"></a>


#### 🔄 Return<a id="🔄-return"></a>

**object**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/white_label/update` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


## Author<a id="author"></a>
This PHP package is automatically generated by [Konfig](https://konfigthis.com)
