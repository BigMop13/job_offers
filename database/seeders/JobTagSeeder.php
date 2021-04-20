<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<50;$i++)
        {
        DB::table('job_tag')->insert(
            [
                'job_id' => Job::inRandomOrder()->select('id')->first()->id,
                'tag_id' => Tag::select('id')->orderByRaw("RAND()")->first()->id,
            ]
        );
        }
    }
}
