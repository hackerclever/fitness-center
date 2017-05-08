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
        App\User::create([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('1111')
        ]);
        App\User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('2222')
        ]);
        App\User::create([
            'name' => 'user3',
            'email' => 'user3@hotmail.com',
            'password' => Hash::make('3333')
        ]);
        App\User::create([
            'name' => 'user4',
            'email' => 'user4@hotmail.com',
            'password' => Hash::make('4444')
        ]);
        App\User::create([
            'name' => 'user5',
            'email' => 'user5@hotmail.com',
            'password' => Hash::make('5555')
        ]);

        App\TypeClass::create([
            'name' => 'Strength & Conditioning',
            'description' => 'This is a full body strength and conditioning workout. This workout targets the entire body in a series of challenging strength based circuits.',
            'price' => 2000.00
        ]);
        App\TypeClass::create([
            'name' => 'Cardio',
            'description' => 'This is an intense conditioning workout that is designed to tighten up your mid-section and help you shed those unwanted pounds!',
            'price' => 3000.00
        ]);
        App\TypeClass::create([
            'name' => 'Freestyle',
            'description' => 'Freestyle™ Group Training incorporates the latest equipment and trained fitness staff. These classes are a great way to work the whole body and improve overall fitness.',
            'price' => 3000.00
        ]);
        App\TypeClass::create([
            'name' => 'Dance',
            'description' => '',
            'price' => 2500.00
        ]);
        App\TypeClass::create([
            'name' => 'Mind & Body',
            'description' => '',
            'price' => 1500.00
        ]);

        App\Personality::create([
            'user_id' => 1,
            'name' => 'Pink',
            'tel' => '0890987654',
            'image' => 'pink'
        ]);

        App\TypeUser::create([
            'user_id' => 1,
            'role' => 'Staff'
        ]);
        // $user = App\User::where('name', '=', 'user1')->first();
        // if (!is_null($user)) {
        //     $user->typeUser()->saveMany([
        //         App\TypeUser::create([
        //             'role' => 'Staff'
        //         ])
        //     ]);
        // }

        App\Customer::create([
            'name' => 'Aum Patchrapa',
            'tel' => '0811111111',
            'image' => 'aum'
        ]);
        App\Customer::create([
            'name' => 'Araya Alberta Hargate',
            'tel' => '0822222222',
            'image' => 'chom'
        ]);
        App\Customer::create([
            'name' => 'Tor Thanapob',
            'tel' => '0912345678',
            'image' => 'tor'
        ]);

        App\NormalCustomer::create([
            'customer_id' => 1,
            'expire' => '2017-06-12'
        ]);

        App\VIPCustomer::create([
            'customer_id' => 2,
            'count' => 10
        ]);

        $type_class_id = App\TypeClass::where('name', '=' , 'Dance')->first();
        $type_class_id->course()->saveMany([
            new App\Course([
                'user_id' => 1
            ]),
            new App\Course([
                'user_id' => 3
            ])
        ]);

        App\Course::create([
            'type_class_id' => 2,
            'user_id' => 1
        ]);
        App\Course::create([
            'type_class_id' => 3,
            'user_id' => 1
        ]);
        App\Course::create([
            'type_class_id' => 4,
            'user_id' => 2
        ]);

        App\CourseCustomer::create([
            'customer_id' => 1,
            'course_id' => 1
        ]);
        App\CourseCustomer::create([
            'customer_id' => 2,
            'course_id' => 1
        ]);
        App\CourseCustomer::create([
            'customer_id' => 3,
            'course_id' => 2
        ]);
        App\CourseCustomer::create([
            'customer_id' => 1,
            'course_id' => 3
        ]);

        App\TimeCourse::create([
            'course_id' => 1,
            'day' => 'Mon',
            'startTime' => 480,
            'endTime' => 540
        ]);
        App\TimeCourse::create([
            'course_id' => 2,
            'day' => 'Mon',
            'startTime' => 480,
            'endTime' => 570
        ]);
        App\TimeCourse::create([
            'course_id' => 3,
            'day' => 'Tue',
            'startTime' => 480,
            'endTime' => 540
        ]);

        App\NormalPrice::create([
            'month' => 'a month',
            'price' => 3500.00
        ]);
        App\NormalPrice::create([
            'month' => '4 month',
            'price' => 10000.00
        ]);
        App\NormalPrice::create([
            'month' => '12 month',
            'price' => 25000.00
        ]);

        App\VIPPrice::create([
            'count' => '10',
            'price' => 5000.00
        ]);
        App\VIPPrice::create([
            'count' => '20',
            'price' => 8000.00
        ]);
        App\VIPPrice::create([
            'count' => '40',
            'price' => 15000.00
        ]);

        App\Voucher::create([
            'name' => '40',
            'price' => 15000.00,
            'endTime' => '2017-05-07',
            'key' => 'rherh456'
        ]);

        App\Promotion::create([
            'name' => '40',
            'percent' => 20,
            'endTime' => '2017-05-07'
        ]);

        $customer = App\Customer::where('name', '=' , 'Tor Thanapob')->first();
        $customer->booking()->saveMany([
            new App\Booking([
                'user_id' => 3,
                'startTime' => '2017-05-07 04:30:0',
                'endTime' => '2017-05-07 07:30:0'
            ]),
            new App\Booking([
                'user_id' => 5,
                'startTime' => '2017-05-09 14:30:0',
                'endTime' => '2017-05-09 15:30:0'
            ])
        ]);
        // App\Booking::create([
        //     'customer_id' => 1,
        //     'user_id' => 2,
        //     'startTime' => '2017-05-07 04:30:0',
        //     'endTime' => '2017-05-07 04:30:0'
        // ]);
    }
}
