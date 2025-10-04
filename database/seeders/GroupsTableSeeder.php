<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsTableSeeder extends Seeder
{
    public function run()
    {
        $groups = ['Beginner', 'Intermediate', 'Advanced'];

        foreach($groups as $group) {
            Group::create(['name' => $group]);
        }
    }
}