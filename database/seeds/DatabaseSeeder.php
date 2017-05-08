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
        App\User::create([
            'name' => 'user6',
            'email' => 'user6@hotmail.com',
            'password' => Hash::make('6666')
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
            'description' => 'BODYJAM® is the cardio workout where you are free to enjoy the sensation of dance. An addictive fusion of the latest dance styles and hottest new sounds puts the emphasis as much on having fun as on breaking a sweat.',
            'price' => 2500.00
        ]);
        App\TypeClass::create([
            'name' => 'Exclusive Signature',
            'description' => 'A power and strength training session involving the whole group; high resistance peddling for sets of 15 second sprints; a group race where power, speed and endurance combine for a big finish.',
            'price' => 1500.00
        ]);
        App\TypeClass::create([
            'name' => 'Mind & Body',
            'description' => "Designed to improve athleticism with a fast paced, endurance focused 90 minute class which will advance each person's personal practice through a number of highly challenging poses in demanding sequences.",
            'price' => 1500.00
        ]);

        App\Personality::create([
            'user_id' => 1,
            'name' => 'June',
            'tel' => '0890987654',
            'image' => 'june'
        ]);
        App\Personality::create([
            'user_id' => 2,
            'name' => 'Jimmy',
            'tel' => '081237654',
            'image' => 'jimmy'
        ]);
        App\Personality::create([
            'user_id' => 3,
            'name' => 'Bow',
            'tel' => '0898761234',
            'image' => 'bow'
        ]);
        App\Personality::create([
            'user_id' => 4,
            'name' => 'Nina',
            'tel' => '0858674231',
            'image' => 'nina'
        ]);
        App\Personality::create([
            'user_id' => 5,
            'name' => 'Keng',
            'tel' => '0835129876',
            'image' => 'keng'
        ]);
        App\Personality::create([
            'user_id' => 6,
            'name' => 'Vi',
            'tel' => '0843754987',
            'image' => 'vi'
        ]);

        App\TypeUser::create([
            'user_id' => 1,
            'role' => 'Trainer'
        ]);
        App\TypeUser::create([
            'user_id' => 2,
            'role' => 'Trainer'
        ]);
        App\TypeUser::create([
            'user_id' => 3,
            'role' => 'Trainer'
        ]);
        App\TypeUser::create([
            'user_id' => 4,
            'role' => 'Trainer'
        ]);
        App\TypeUser::create([
            'user_id' => 5,
            'role' => 'Staff'
        ]);
        App\TypeUser::create([
            'user_id' => 6,
            'role' => 'Admin'
        ]);
        // $user = App\User::where('name', '=', 'user1')->first();
        // if (!is_null($user)) {
        //     $user->typeUser()->saveMany([
        //         App\TypeUser::create([
        //             'role' => 'Staff'
        //         ])
        //     ]);
        // }

        App\Customer::create([ // 1
            'name' => 'Aum Patchrapa',
            'tel' => '0811111111',
            'image' => 'aum'
        ]);
        App\Customer::create([ // 2
            'name' => 'Araya Alberta Hargate',
            'tel' => '0822222222',
            'image' => 'chom'
        ]);
        App\Customer::create([ // 3
            'name' => 'Tor Thanapob',
            'tel' => '0912345678',
            'image' => 'tor'
        ]);
        App\Customer::create([ // 4
            'name' => 'Kao Supassra',
            'tel' => '0844444444',
            'image' => 'kao'
        ]);
        App\Customer::create([ // 5
            'name' => 'Jame Jirayu',
            'tel' => '0955555555',
            'image' => 'jame'
        ]);
        App\Customer::create([ // 6
            'name' => 'G-Dragon',
            'tel' => '0966666666',
            'image' => 'gdragon'
        ]);
        App\Customer::create([ // 7
            'name' => 'Lisa',
            'tel' => '0877777777',
            'image' => 'lisa'
        ]);

        App\NormalCustomer::create([
            'customer_id' => 1,
            'expire' => '2017-06-12'
        ]);
        App\NormalCustomer::create([
            'customer_id' => 3,
            'expire' => '2017-06-12'
        ]);
        App\NormalCustomer::create([
            'customer_id' => 4,
            'expire' => '2017-06-12'
        ]);
        App\NormalCustomer::create([
            'customer_id' => 5,
            'expire' => '2017-06-12'
        ]);

        App\VIPCustomer::create([
            'customer_id' => 2,
            'count' => 10
        ]);
        App\VIPCustomer::create([
            'customer_id' => 6,
            'count' => 20
        ]);
        App\VIPCustomer::create([
            'customer_id' => 7,
            'count' => 20
        ]);

        $type_class_id = App\TypeClass::where('name', '=' , 'Strength & Conditioning')->first();
        $type_class_id->course()->saveMany([
            new App\Course([
                'trainer_id' => 4
            ]),
            new App\Course([
                'trainer_id' => 3
            ])
        ]);

        $type_class_id = App\TypeClass::where('name', '=' , 'Dance')->first();
        $type_class_id->course()->saveMany([
            new App\Course([
                'trainer_id' => 1
            ]),
            new App\Course([
                'trainer_id' => 3
            ])
        ]);

        App\Course::create([
            'type_class_id' => 2,
            'trainer_id' => 1
        ]);
        App\Course::create([
            'type_class_id' => 3,
            'trainer_id' => 1
        ]);
        App\Course::create([
            'type_class_id' => 4,
            'trainer_id' => 2
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
        App\TimeCourse::create([
            'course_id' => 4,
            'day' => 'Sun',
            'startTime' => 900,
            'endTime' => 990
        ]);
        App\TimeCourse::create([
            'course_id' => 5,
            'day' => 'Sun',
            'startTime' => 600,
            'endTime' => 690
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
