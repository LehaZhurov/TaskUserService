<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Ensi\EBSPostClient\Api\PostsApi;
use Ensi\EBSPostClient\Dto\SearchPostsRequest;

class GetUserPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:get-posts-count {userId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(PostsApi $api)
    {
        $userId = $this->argument('userId');
        $filter = ['filter' => ['user_id' => $userId]];
        $request = new SearchPostsRequest($filter);
        $respons = $api->searchPosts($request)->getData();
        if (isset($respons)) {
            $total = count($respons);
            $this->info("У пользователя с id = " . $userId . " кол-во постов:" . $total);
        } else {
            $this->info('Ошибка получения ответа от клиента Post');
        }
    }
}
