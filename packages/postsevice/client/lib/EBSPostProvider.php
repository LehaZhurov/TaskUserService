<?php

namespace Ensi\EBSPostClient;

class EBSPostProvider
{
    /** @var string[] */
    public static $apis = ['\Ensi\EBSPostClient\Api\PostsApi'];

    /** @var string[] */
    public static $dtos = [
        '\Ensi\EBSPostClient\Dto\EmptyDataResponse',
        '\Ensi\EBSPostClient\Dto\Error',
        '\Ensi\EBSPostClient\Dto\ErrorResponse',
        '\Ensi\EBSPostClient\Dto\ModelInterface',
        '\Ensi\EBSPostClient\Dto\PaginationTypeCursorEnum',
        '\Ensi\EBSPostClient\Dto\PaginationTypeEnum',
        '\Ensi\EBSPostClient\Dto\PaginationTypeOffsetEnum',
        '\Ensi\EBSPostClient\Dto\Post',
        '\Ensi\EBSPostClient\Dto\PostFillableProperties',
        '\Ensi\EBSPostClient\Dto\PostIncludes',
        '\Ensi\EBSPostClient\Dto\PostReadonlyProperties',
        '\Ensi\EBSPostClient\Dto\PostResponse',
        '\Ensi\EBSPostClient\Dto\PostsResponse',
        '\Ensi\EBSPostClient\Dto\PostsResponseMeta',
        '\Ensi\EBSPostClient\Dto\RequestBodyCursorPagination',
        '\Ensi\EBSPostClient\Dto\RequestBodyOffsetPagination',
        '\Ensi\EBSPostClient\Dto\RequestBodyPagination',
        '\Ensi\EBSPostClient\Dto\ResponseBodyCursorPagination',
        '\Ensi\EBSPostClient\Dto\ResponseBodyOffsetPagination',
        '\Ensi\EBSPostClient\Dto\ResponseBodyPagination',
        '\Ensi\EBSPostClient\Dto\SearchPostsFilter',
        '\Ensi\EBSPostClient\Dto\SearchPostsRequest',
        '\Ensi\EBSPostClient\Dto\SearchPostsResponse',
        '\Ensi\EBSPostClient\Dto\SearchVoicesFilter',
        '\Ensi\EBSPostClient\Dto\SearchVoicesRequest',
        '\Ensi\EBSPostClient\Dto\SearchVoicesResponse',
        '\Ensi\EBSPostClient\Dto\VoiceFillableProperties',
        '\Ensi\EBSPostClient\Dto\VoiceReadonlyProperties',
        '\Ensi\EBSPostClient\Dto\VoiceResponse',
        '\Ensi\EBSPostClient\Dto\Voices',
        '\Ensi\EBSPostClient\Dto\VoicesResponse',
    ];

    /** @var string */
    public static $configuration = '\Ensi\EBSPostClient\Configuration';
}
