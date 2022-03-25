<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VoteSeeder extends Seeder
{
    public $users = [];
    public $states = [];
    public function __construct()
    {
        $this->users = array(
            [
                'name' => 'Candidate A',
                'email' => 'ca@gmail.com'
            ],
            [
                'name' => 'Candidate B',
                'email' => 'cb@gmail.com'
            ],
            [
                'name' => 'Candidate C',
                'email' => 'cc@gmail.com'
            ],
        );

        $this->states = array('FCT Abuja', 'Lago State', 'Delta State', 'Edo State', 'Anabra State');
    }
    public function run()
    {
       //
    }

}