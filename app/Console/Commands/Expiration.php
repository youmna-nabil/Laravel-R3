<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('expired', 1)->get();

        foreach($user as $row){
            
        //User::where('id', $row['id'])->update(["expired" =>0]);
            $row->update(['expired' =>0]);
        }
    }
}
