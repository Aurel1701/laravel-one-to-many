<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['FrontEnd', 'Backend', 'Programming', 'FullStack', 'Design', 'Ops'];

        foreach ($categories as $category) {
            $new_cat = new Category();
            $new_cat->name = $category;
            $new_cat->save();
        }
    }
}
