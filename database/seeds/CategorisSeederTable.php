<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategorisSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vp_categoris')->insert(
        [
            'cate_name'=>'samsung',
            'cate_slug'=>Str::slug('samsung')
        ],
        
    );
    }
}
