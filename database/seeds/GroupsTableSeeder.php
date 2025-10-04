<?php

use Illuminate\Database\Seeder;
use App\Models\Group; // ← IMPORTANTE

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