<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Domain\User\Action\GetCountPostUserAction;

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
    public function handle(GetCountPostUserAction $action)
    {
        $userId = $this->argument('userId');
        $total = $action->execute($userId);
        $this->info("У пользователя с id = " . $userId . " кол-во постов:" . $total);
    }
}
