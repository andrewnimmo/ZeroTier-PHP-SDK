# ZeroTier-PHP-SDK
# ZeroTier-PHP-SDK
<<<<<<< zerotier-laravel
# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=ZeroTier%20Central%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the ZeroTierCentralAPILib library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=ZeroTier%20Central%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=ZeroTier%20Central%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=ZeroTier%20Central%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=ZeroTier%20Central%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=ZeroTier%20Central%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=ZeroTier%20Central%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=ZeroTier%20Central%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=ZeroTier%20Central%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=ZeroTier%20Central%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=ZeroTier%20Central%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=ZeroTier%20Central%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=ZeroTier%20Central%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthAccessToken | The OAuth 2.0 access token to be set before API calls |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$oAuthAccessToken = "oAuthAccessToken"; // The OAuth 2.0 access token to be set before API calls

$client = new ZeroTierCentralAPILib\ZeroTierCentralAPILibClient($oAuthAccessToken);
```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [GeneralQueriesController](#general_queries_controller)
* [UserController](#user_controller)
* [NetworkController](#network_controller)
* [MemberController](#member_controller)

## <a name="general_queries_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GeneralQueriesController") GeneralQueriesController

### Get singleton instance

The singleton instance of the ``` GeneralQueriesController ``` class can be accessed from the API Client.

```php
$generalQueries = $client->getGeneralQueries();
```

### <a name="get_status_and_configuration_information"></a>![Method: ](https://apidocs.io/img/method.png ".GeneralQueriesController.getStatusAndConfigurationInformation") getStatusAndConfigurationInformation

> Get Status and Configuration Information


```php
function getStatusAndConfigurationInformation()
```

#### Example Usage

```php

$result = $generalQueries->getStatusAndConfigurationInformation();

```


### <a name="get_currently_authenticated_user"></a>![Method: ](https://apidocs.io/img/method.png ".GeneralQueriesController.getCurrentlyAuthenticatedUser") getCurrentlyAuthenticatedUser

> Get Currently Authenticated User


```php
function getCurrentlyAuthenticatedUser()
```

#### Example Usage

```php

$result = $generalQueries->getCurrentlyAuthenticatedUser();

```


### <a name="get_generate_a_random_token"></a>![Method: ](https://apidocs.io/img/method.png ".GeneralQueriesController.getGenerateARandomToken") getGenerateARandomToken

> Generate a Random Token


```php
function getGenerateARandomToken()
```

#### Example Usage

```php

$result = $generalQueries->getGenerateARandomToken();

```


### <a name="create_terminate_current_session"></a>![Method: ](https://apidocs.io/img/method.png ".GeneralQueriesController.createTerminateCurrentSession") createTerminateCurrentSession

> Terminate Current Session


```php
function createTerminateCurrentSession()
```

#### Example Usage

```php

$generalQueries->createTerminateCurrentSession();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="user_controller"></a>![Class: ](https://apidocs.io/img/class.png ".UserController") UserController

### Get singleton instance

The singleton instance of the ``` UserController ``` class can be accessed from the API Client.

```php
$user = $client->getUser();
```

### <a name="retrieve_a_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.retrieveAUser") retrieveAUser

> Retrieve a User


```php
function retrieveAUser($userId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | 0000-0000-0000-000000000000 (required,string) - Internal user ID (GUID) |



#### Example Usage

```php
$userId = '00000000';

$result = $user->retrieveAUser($userId);

```


### <a name="update_a_user"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.updateAUser") updateAUser

> Update a User


```php
function updateAUser($userId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | 0000-0000-0000-000000000000 (required,string) - Internal user ID (GUID) |



#### Example Usage

```php
$userId = '00000000';

$result = $user->updateAUser($userId);

```


### <a name="get_all_viewable_users"></a>![Method: ](https://apidocs.io/img/method.png ".UserController.getAllViewableUsers") getAllViewableUsers

> Get All Viewable Users


```php
function getAllViewableUsers()
```

#### Example Usage

```php

$result = $user->getAllViewableUsers();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="network_controller"></a>![Class: ](https://apidocs.io/img/class.png ".NetworkController") NetworkController

### Get singleton instance

The singleton instance of the ``` NetworkController ``` class can be accessed from the API Client.

```php
$network = $client->getNetwork();
```

### <a name="retrieve_a_network"></a>![Method: ](https://apidocs.io/img/method.png ".NetworkController.retrieveANetwork") retrieveANetwork

> Retrieve a Network


```php
function retrieveANetwork($networkId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| networkId |  ``` Required ```  | 16-digit ZeroTier network ID |



#### Example Usage

```php
$networkId = '0000000000000000';

$result = $network->retrieveANetwork($networkId);

```


### <a name="update_or_create_a_network"></a>![Method: ](https://apidocs.io/img/method.png ".NetworkController.updateOrCreateANetwork") updateOrCreateANetwork

> Update or create a Network


```php
function updateOrCreateANetwork($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| networkId |  ``` Required ```  | 16-digit ZeroTier network ID |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$networkId = '0000000000000000';
$collect['networkId'] = $networkId;

$bodyValue = "{  \"id\": \"\",  \"type\": \"\",  \"clock\": 0,  \"ui\": {},  \"rulesSource\": \"\",  \"description\": \"\",  \"permissions\": {    \"{id}\": {      \"r\": false,      \"m\": false,      \"d\": false,      \"a\": false,      \"o\": false,      \"t\": \"\"    }  },  \"onlineMemberCount\": 0,  \"capabilitiesByName\": {},  \"tagsByName\": {},  \"circuitTestEvery\": 0,  \"config\": {    \"id\": \"\",    \"nwid\": \"\",    \"name\": \"\",    \"objtype\": \"\",    \"private\": false,    \"creationTime\": 0,    \"revision\": 0,    \"lastModified\": 0,    \"multicastLimit\": 0,    \"routes\": [],    \"rules\": [],    \"tags\": [],    \"capabilities\": [],    \"totalMemberCount\": 0,    \"activeMemberCount\": 0,    \"authTokens\": [],    \"authorizedMemberCount\": 0,    \"v4AssignMode\": {},    \"v6AssignMode\": {}  }}";
$body = APIHelper::deserialize($bodyValue);
$collect['body'] = $body;


$result = $network->updateOrCreateANetwork($collect);

```


### <a name="delete_a_network"></a>![Method: ](https://apidocs.io/img/method.png ".NetworkController.deleteANetwork") deleteANetwork

> Delete a Network


```php
function deleteANetwork($networkId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| networkId |  ``` Required ```  | 16-digit ZeroTier network ID |



#### Example Usage

```php
$networkId = '0000000000000000';

$network->deleteANetwork($networkId);

```


### <a name="get_all_viewable_networks"></a>![Method: ](https://apidocs.io/img/method.png ".NetworkController.getAllViewableNetworks") getAllViewableNetworks

> Get All Viewable Networks


```php
function getAllViewableNetworks()
```

#### Example Usage

```php

$result = $network->getAllViewableNetworks();

```


[Back to List of Controllers](#list_of_controllers)

## <a name="member_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MemberController") MemberController

### Get singleton instance

The singleton instance of the ``` MemberController ``` class can be accessed from the API Client.

```php
$member = $client->getMember();
```

### <a name="retrieve_a_member"></a>![Method: ](https://apidocs.io/img/method.png ".MemberController.retrieveAMember") retrieveAMember

> Retrieve a Member


```php
function retrieveAMember($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| networkId |  ``` Required ```  | 16-digit ZeroTier network ID |
| nodeId |  ``` Required ```  | 10-digit ZeroTier node ID (a.k.a. ZeroTier address) |



#### Example Usage

```php
$networkId = 'networkId';
$collect['networkId'] = $networkId;

$nodeId = 'nodeId';
$collect['nodeId'] = $nodeId;


$result = $member->retrieveAMember($collect);

```


### <a name="update_or_add_a_member"></a>![Method: ](https://apidocs.io/img/method.png ".MemberController.updateOrAddAMember") updateOrAddAMember

> Update or add a Member


```php
function updateOrAddAMember($options)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| networkId |  ``` Required ```  | 16-digit ZeroTier network ID |
| nodeId |  ``` Required ```  | 10-digit ZeroTier node ID (a.k.a. ZeroTier address) |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$networkId = 'networkId';
$collect['networkId'] = $networkId;

$nodeId = 'nodeId';
$collect['nodeId'] = $nodeId;

$body = new Member();
$collect['body'] = $body;


$result = $member->updateOrAddAMember($collect);

```


[Back to List of Controllers](#list_of_controllers)



=======
# zerotier php sdk
This repository contains two branches. 
* master
* CodeGen-PHP
>>>>>>> master
