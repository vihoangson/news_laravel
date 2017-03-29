<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticlesController;

class Update_extra_text extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update_extra_text';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update_extra_text';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $c = new ArticlesController;
        $c->get_extra_content();
    }
}
