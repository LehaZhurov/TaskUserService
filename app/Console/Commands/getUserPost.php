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
        $filter = ['filter' => ['user_id'=>$this->argument('userId')]];
        $request = new SearchPostsRequest($filter);
        $post = json_decode($api->searchPosts($request));
        $total = $post->meta->pagination->total;
        $this->info($total);
    }
}
