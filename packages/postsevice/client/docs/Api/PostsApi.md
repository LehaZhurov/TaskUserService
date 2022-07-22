# Ensi\EBSPostClient\PostsApi

All URIs are relative to *http://localhost/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPost**](PostsApi.md#createPost) | **POST** /posts | Создание поста
[**createPostVoice**](PostsApi.md#createPostVoice) | **POST** /posts/{id}/voices | Создание голоса поста
[**deleteOneVoicePost**](PostsApi.md#deleteOneVoicePost) | **DELETE** /posts/{id}/voices/{voiceid} | Удаление одного голоса
[**deletePost**](PostsApi.md#deletePost) | **DELETE** /posts/{id} | Удаление одного поста
[**deletePostVoices**](PostsApi.md#deletePostVoices) | **DELETE** /posts/{id}/voices | Удаление оценок поста
[**getPost**](PostsApi.md#getPost) | **GET** /posts/{id} | Получение одного поста
[**getPostVoices**](PostsApi.md#getPostVoices) | **GET** /posts/{id}/voices | Получение получение оценок поста
[**getPosts**](PostsApi.md#getPosts) | **POST** /posts:all | Получени массив постов
[**patchPost**](PostsApi.md#patchPost) | **PATCH** /posts/{id} | Редактирование поста
[**patchPostVoice**](PostsApi.md#patchPostVoice) | **PATCH** /posts/{id}/voices/{voiceid} | Редактирование голоса
[**searchPostVoices**](PostsApi.md#searchPostVoices) | **POST** /posts/voices:search | Поиск голосов поста
[**searchPosts**](PostsApi.md#searchPosts) | **POST** /posts:search | Поиск постов



## createPost

> \Ensi\EBSPostClient\Dto\PostResponse createPost()

Создание поста

Данный метод позволит создать пост

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->createPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Ensi\EBSPostClient\Dto\PostResponse**](../Model/PostResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPostVoice

> \Ensi\EBSPostClient\Dto\VoiceResponse createPostVoice($id)

Создание голоса поста

Данный метод позволит проголосовать за пост

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id

try {
    $result = $apiInstance->createPostVoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->createPostVoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\VoiceResponse**](../Model/VoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteOneVoicePost

> \Ensi\EBSPostClient\Dto\EmptyDataResponse deleteOneVoicePost($id, $voiceid)

Удаление одного голоса

Данный метод позволить удалить один голос по его id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$voiceid = 1; // int | Числовой id

try {
    $result = $apiInstance->deleteOneVoicePost($id, $voiceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deleteOneVoicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **voiceid** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePost

> \Ensi\EBSPostClient\Dto\EmptyDataResponse deletePost($id)

Удаление одного поста

Данный метод позволить удалить один пост по его id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id

try {
    $result = $apiInstance->deletePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePostVoices

> \Ensi\EBSPostClient\Dto\EmptyDataResponse deletePostVoices($id)

Удаление оценок поста

Метод позволяет удалить абсолютно все оценки поста

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id

try {
    $result = $apiInstance->deletePostVoices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->deletePostVoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\EmptyDataResponse**](../Model/EmptyDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPost

> \Ensi\EBSPostClient\Dto\PostResponse getPost($id, $include)

Получение одного поста

Данный метод позволить получить один пост по его id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$include = 'include_example'; // string | Связанные сущности для подгрузки, через запятую

try {
    $result = $apiInstance->getPost($id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **include** | **string**| Связанные сущности для подгрузки, через запятую | [optional]

### Return type

[**\Ensi\EBSPostClient\Dto\PostResponse**](../Model/PostResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPostVoices

> \Ensi\EBSPostClient\Dto\VoicesResponse getPostVoices($id)

Получение получение оценок поста

Метод позволяет получить абсолютно все оценки поста

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id

try {
    $result = $apiInstance->getPostVoices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPostVoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\VoicesResponse**](../Model/VoicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPosts

> \Ensi\EBSPostClient\Dto\PostsResponse getPosts()

Получени массив постов

Данный метод позволит получить массив постов с пагинацией

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPosts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->getPosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Ensi\EBSPostClient\Dto\PostsResponse**](../Model/PostsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchPost

> \Ensi\EBSPostClient\Dto\PostResponse patchPost($id)

Редактирование поста

Данный метод позволит отредактировать пост

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id

try {
    $result = $apiInstance->patchPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->patchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\PostResponse**](../Model/PostResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## patchPostVoice

> \Ensi\EBSPostClient\Dto\VoiceResponse patchPostVoice($id, $voiceid)

Редактирование голоса

Данный метод позволит отредактировать голос

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 1; // int | Числовой id
$voiceid = 1; // int | Числовой id

try {
    $result = $apiInstance->patchPostVoice($id, $voiceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->patchPostVoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Числовой id |
 **voiceid** | **int**| Числовой id |

### Return type

[**\Ensi\EBSPostClient\Dto\VoiceResponse**](../Model/VoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchPostVoices

> \Ensi\EBSPostClient\Dto\SearchVoicesResponse searchPostVoices($search_voices_request)

Поиск голосов поста

Метод позволяет проводит поиск голосов

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_voices_request = new \Ensi\EBSPostClient\Dto\SearchVoicesRequest(); // \Ensi\EBSPostClient\Dto\SearchVoicesRequest | 

try {
    $result = $apiInstance->searchPostVoices($search_voices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->searchPostVoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_voices_request** | [**\Ensi\EBSPostClient\Dto\SearchVoicesRequest**](../Model/SearchVoicesRequest.md)|  |

### Return type

[**\Ensi\EBSPostClient\Dto\SearchVoicesResponse**](../Model/SearchVoicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchPosts

> \Ensi\EBSPostClient\Dto\SearchPostsResponse searchPosts($search_posts_request)

Поиск постов

Метод позволяет проводит поиск по постам

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Ensi\EBSPostClient\Api\PostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_posts_request = new \Ensi\EBSPostClient\Dto\SearchPostsRequest(); // \Ensi\EBSPostClient\Dto\SearchPostsRequest | 

try {
    $result = $apiInstance->searchPosts($search_posts_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostsApi->searchPosts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_posts_request** | [**\Ensi\EBSPostClient\Dto\SearchPostsRequest**](../Model/SearchPostsRequest.md)|  |

### Return type

[**\Ensi\EBSPostClient\Dto\SearchPostsResponse**](../Model/SearchPostsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

