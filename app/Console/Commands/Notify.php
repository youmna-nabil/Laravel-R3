<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use Illuminate\Console\Command;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Please click the button below to verify your email address.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$user = User::select('email')->get();
        $email = Contact::pluck('email')->toArray();
        foreach($email as $email){

            Mail::To($email)->send(new NotifyEmail());
        }
    }
}
