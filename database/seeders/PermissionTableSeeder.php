<?php

namespace Database\Seeders;

use App\Models\Pages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pages::insert([
            [
                'meta_key' => 'Section_1',
                'meta_value' => 'We have truly dedicated ourselves to this breed. Established in 1997 our mission has been to help make bulldog lovers more educated about all bullybreeds. We hope to bring together every Bulldog Lover, Bulldog Owner & Bulldog Breeder with our new Bulldog Stronger Community. We hope you will join us.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Section_about_us',
                'meta_value' => 'We are a private American Bulldog Breeder and Educational Resource for all bully breeds. We love Bulldogs and everything they offer to our lives. All our dogs and pups are never kenneled or crated. They are our family pets and roam our home and land. We breed loving Bulldog Puppies for you and your family to enjoy.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'card_1',
                'meta_value' => 'Learn how to get American Bulldog puppy from our Voted #1 American Bulldog Breeder Program.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'card_2',
                'meta_value' => 'Take a look at each Dam & Sire’s Bio pages. See pictures & videos of our planned paired breeding',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'card_3',
                'meta_value' => 'Get inside discounts, additional education and approved resources by the Bulldog community.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Section_3',
                'meta_value' => 'It\'s been our dream and goal to unite Bulldogs lovers, owners, breeders and admires of all bully breeds. Here at We Love American Bulldogs we want you to be the most educated and aware of the bully breed of your choice. Whether it\'s your 1st Bulldog or you have owned a bully breed for years, we will have insight we can share with you. We have brought together a circle of experts to make this member beneficial to all. The success of knowledge on your part about the breed will mean the success of these dogs never ending up in rescues and pounds. We have created a launch pad above that will take you to our new platform where we offer reading materials, videos, How To\'s, Telemedicine with Vets, Blogs, Podcast and recommended gear. You can also get one on one advice from Davette yourself she has been voted the #1 American Bulldog breed in the US. She really knows her stuff and has been breeding bulldogs over 22 years. All this is included in our membership. Join Bulldog Stronger Now!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Who We Are',
                'meta_value' => '\"We Love American Bulldogs\", says it all for us. We are a private American Bulldog Breeder and educational resource. All our dogs and pups are never kenneled or crated. They are our family pets and roam our home and land. We breed loving American Bulldog Puppies for you and your family to enjoy.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'What We Do',
                'meta_value' => 'At We Love American Bulldogs we take a lot of care and pride in helping educate families about the breed. When families are interested in bringing one of these beautiful creatures into their homes we want to make sure they get all the best information they can get to be set for success, and this is why we never have to re-home pups. As it is with any breed the most important thing you can do, is educate yourself about the breed that you are about to bring into to your life. We are on a mission help people know how to make a better life for this breed.\r\n\r\n“Become a Bulldog Stronger Club Member and the latest update on your bully breed.”',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Our Dedication',
                'meta_value' => 'Our team here at \"We Love American Bulldogs\" feel blessed to care for these wonderful creatures, that we brought into the world. We work very hard to make sure the foundation of your puppy is stable, loving and strong. We hope with all the information our 22 years experience brings you about this breed, that you will stay the course and make sure these pups are the best, TRUE American Bulldog they can be. All our pups are cared for in our homes not out in kennels and cages.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Join The #1 Bulldog Family',
                'meta_value' => 'Bulldog Stronger is a community where can shares you bulldogs pictures, get bulldog gear, get educated about your Bulldog breed. Videos, telemedicine and more to help makes sure your bully dogs get all they need.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Pups Available',
                'meta_value' => 'new',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Who_We_Are',
                'meta_value' => '\"We Love American Bulldogs\", says it all for us. We are a private American Bulldog Breeder and educational resource. All our dogs and pups are never kenneled or crated. They are our family pets and roam our home and land. We breed loving American Bulldog Puppies for you and your family to enjoy.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'What_We_Do',
                'meta_value' => 'At We Love American Bulldogs we take a lot of care and pride in helping educate families about the breed. When families are interested in bringing one of these beautiful creatures into their homes we want to make sure they get all the best information they can get to be set for success, and this is why we never have to re-home pups. As it is with any breed the most important thing you can do, is educate yourself about the breed that you are about to bring into to your life. We are on a mission help people know how to make a better life for this breed.\r\n\r\n“Become a Bulldog Stronger Club Member and the latest update on your bully breed.”',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Our_Dedication',
                'meta_value' => 'Our team here at \"We Love American Bulldogs\" feel blessed to care for these wonderful creatures, that we brought into the world. We work very hard to make sure the foundation of your puppy is stable, loving and strong. We hope with all the information our 22 years experience brings you about this breed, that you will stay the course and make sure these pups are the best, TRUE American Bulldog they can be. All our pups are cared for in our homes not out in kennels and cages.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Join_The_#1_Bulldog_Family',
                'meta_value' => 'Bulldog Stronger is a community where can shares you bulldogs pictures, get bulldog gear, get educated about your Bulldog breed. Videos, telemedicine and more to help makes sure your bully dogs get all they need.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'Pups_Available',
                'meta_value' => 'All our pups are cared for in our homes not out in kennels or cages. They will be vaccinated to date, dewormed, treated for coccidian, micro chipped, include is their pedigree certificates and pedigree lineage with pics. And the best part is…. we potty train our pups for you. Also if you don’t live in our reigns, don’t we worry we have our very appreciated partners ‘Pups on the Fly\' they do a wonderful caring job to get these babies to all our families. We have had over 70 puppies fly with them, across the USA so don’t worry their flight nannies and services are A+ and we are happy to have them on our team.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'LADIES FIRST',
                'meta_value' => 'Here are the 2 females we have available. Born January 22nd 2024. Junior Buddy & Nova are the parents for this litter… Put a deposit down now to reserve the female.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_key' => 'AND THE BOYS',
                'meta_value' => 'We have no boys at this time so in the paragraph that is below the title and the Boys but that at this time no boys available from this litter. However see the planned breeding page, to get on the waiting list for a boy puppy from one of our upcoming litters.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'change-password',
            'package-list',
            'package-create',
            'package-edit',
            'package-delete',
            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
            'subcategory-list',
            'subcategory-create',
            'subcategory-edit',
            'subcategory-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'pages-list',
            'pages-create',
            'pages-edit',
            'pages-delete',
            'general_setting',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $roles = [
            'admin',
            'User',
            'Shopper',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }


        $user = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'email_verified_at' => date('Y-m-d h:i:s'),
        ];

        $userd = User::create($user);
        $userd->assignRole('admin');


        // permission assig
        $rolepermission =
            [
                ['permission_id' => 1, 'role_id' => 1],
                ['permission_id' => 2, 'role_id' => 1],
                ['permission_id' => 3, 'role_id' => 1],
                ['permission_id' => 4, 'role_id' => 1],
                ['permission_id' => 5, 'role_id' => 1],
                ['permission_id' => 6, 'role_id' => 1],
                ['permission_id' => 7, 'role_id' => 1],
                ['permission_id' => 8, 'role_id' => 1],
                ['permission_id' => 9, 'role_id' => 1],
                ['permission_id' => 10, 'role_id' => 1],
                ['permission_id' => 11, 'role_id' => 1],
                ['permission_id' => 12, 'role_id' => 1],
                ['permission_id' => 13, 'role_id' => 1],
                ['permission_id' => 14, 'role_id' => 1],
                ['permission_id' => 15, 'role_id' => 1],
                ['permission_id' => 16, 'role_id' => 1],
                ['permission_id' => 17, 'role_id' => 1],
                ['permission_id' => 18, 'role_id' => 1],
                ['permission_id' => 19, 'role_id' => 1],
                ['permission_id' => 20, 'role_id' => 1],
                ['permission_id' => 21, 'role_id' => 1],
                ['permission_id' => 22, 'role_id' => 1],
                ['permission_id' => 23, 'role_id' => 1],
                ['permission_id' => 24, 'role_id' => 1],
                ['permission_id' => 25, 'role_id' => 1],
                ['permission_id' => 26, 'role_id' => 1],
                ['permission_id' => 27, 'role_id' => 1],
                ['permission_id' => 28, 'role_id' => 1],
                ['permission_id' => 29, 'role_id' => 1],
            ];
        foreach ($rolepermission as $role) {
            \DB::table('role_has_permissions')->insert($role);
        }
    }
}
