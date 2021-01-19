<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinceTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(GroupsTableSeeder::class);  
        $this->call(CourseCategoryTableSeeder::class);
        $this->call(CoursesTableSeeder::class);      
        $this->call(CampaignsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(FeaturedCampaignsTableSeeder::class);
        $this->call(SliderCampaignsTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        $this->call(TeamMembersTableSeeder::class);
        $this->call(SponsorsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);  
        $this->call(RoleTableSeeder::class);     
        $this->call(RolePermissionTableSeeder::class); 
        $this->call(ModelRolesTableSeeder::class);   
    }
}
