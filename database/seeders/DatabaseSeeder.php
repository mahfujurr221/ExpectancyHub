<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use App\Models\About;
use App\Models\Owner;
use App\Models\Banner;
use App\Models\Course;
use App\Models\AboutMe;
use App\Models\Setting;
use App\Models\Academic;
use App\Models\Headline;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //create owner
        Owner::create([
            'name' => 'Muaz Bin Amir',
            'designation' => 'Chairman',
            'file_url' => 'uploads/owner/1736959259.jpeg',
            'qualification' => 'BA in English(1st),MA in English, BEd(1st), MSS(1st),MEd(3.10-DU) Master Trainer in English (Trained by British council)',

        ]);

        //create headline
        Headline::create([
            'name' => 'Expectancy Hub',
        ]);

        //create banner
        Banner::create([
            'title' => 'Banner Title',
            'small_title' => 'Banner Small Title',
            'status' => 1,
            'image_url' => 'uploads/banner/1735580037.6772d985b8734.jpg',
        ]);

        //create about
        $aboutMe = About::create([
            'title' => 'Successfully 15 Years World-Renowned IT Expert Making Organization',
            'sub_title' => 'Applied Learning Project Successfully 15 Years World-Renowned IT Expert Making Organization',
            'short_description' => 'In a fast pacing world, where every sector relies on technology, you need to develop IT skills to secure a better future. With the utmost dedication, we have been able to make more than 70,000 IT experts who are currently working in different sectors.',
            'description' => 'This specialization is for those who want to study English grammar at the beginning level. Through the three courses in this specialization, you will learn the fundamental features of English grammar such as word forms, verb tenses, and question and answer formation so that you can start your English learning journey on the right path. Applied Learning Project In each course, learners will use the grammar patterns they learn after every lesson to complete practice exercises and quizzes. Learners will complete activities to practice using English not only at the sentence level but also at the discourse level.',
            'about_course_desc' => 'This specialization is for those who want to study English grammar at the beginning level. Through the three courses in this specialization, you will learn the fundamental features of English grammar such as word forms, verb tenses, and question and answer formation so that you can start your English learning journey on the right path. Applied Learning Project In each course, learners will use the grammar patterns they learn after every lesson to complete practice exercises and quizzes. Learners will complete activities to practice using English not only at the sentence level but also at the discourse level.',
        ]);

        // Creating super admin user
        $superAdmin = User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'type' => 'supper-admin',
            'email' => 'admin@gmail.com',
            'phone' => '00000000000',
            'password' => bcrypt('admin'),
        ]);

        // Creating developer user
        $developer = User::create([
            'fname' => 'Developer',
            'lname' => 'OP',
            'type' => 'dev',
            'email' => 'limon@shetab.tech',
            'phone' => '01781342259',
            'password' => bcrypt('developer1234'),
        ]);

        // Creating roles
        Role::create(['name' => 'Super Admin', 'guard_name' => 'web']);
        Role::create(['name' => 'Operator', 'guard_name' => 'web']);

        // Creating settings
        $setting = Setting::create([
            'site_name' => 'Expectancy Hub',
            'site_title' => 'Expectancy Hub',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'email' => 'info@expectancyhub.com',
            'phone' => '01781342259',
            'address' => 'Firmgate, Dhaka, Bangladesh',
            'footer_text' => 'The one-stop solution for all your IT needs',
            'newslatter_text' => 'Get the latest Eschooling news delivered to your inbox',
            'facebook' => 'https://www.facebook.com/expectancyhub',
        ]);

        // Assigning roles to users
        $superAdmin->assignRole('Super Admin');
        $developer->assignRole('Super Admin');

        // Call Permission Seeder
        $this->call(PermissionTableSeeder::class);
    }
}
