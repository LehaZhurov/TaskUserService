<?php

namespace App\Domain\User\Action;

use Ensi\EBSPostClient\Api\PostsApi;
use Ensi\EBSPostClient\Dto\SearchPostsRequest;

class GetCountPostUserAction
{

    public function execute($userId): int
    {
        $api = new PostsApi();
        $filter = ['filter' => ['user_id' => $userId]];
        $request = new SearchPostsRequest($filter);
        $respons = $api->searchPosts($request)->getMeta();
        return $respons['pagination']['total'];
    }
}
