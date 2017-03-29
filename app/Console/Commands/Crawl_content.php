<?php

namespace App\Console\Commands;

use App\Http\Controllers\GetcontentController;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticlesController;

class Crawl_content extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl_content {myc}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import_vnexpress 1: do || 2: undo';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $myc = $this->argument( 'myc' );
        $h   = new GetcontentController();

        for($i=0;$i<17;$i++){
            $h->import_kenh14($i);
        }
        return;

        $h->import_kenh14($myc);
        return;
        $h->import_benhtat( $myc );
        $h->import_nuocmy($myc);
        $h->import_dantri($myc);
        $h->import_motthegioi($myc);
        $h->import_vnexpress($myc);
    }
}
