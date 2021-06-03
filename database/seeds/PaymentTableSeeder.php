<?php

use App\Payment;
use Illuminate\Database\Seeder;

class PaymentTableSeeder extends Seeder
{
    public function run()
    {
        $payments = [[
            'id'             => 1,
            'name'           => 'Test 1',
            'email'          => 'test1@test.com',
            'phone'       => '1234567890',
            'card_number' => 4343232356567878,
            'amount' => 200.25,
            'payment_status' => 'success',
            'payment_date'     => '2021-04-15 19:13:32',
            'created_at'     => '2021-04-15 19:13:32',
            'updated_at'     => '2021-04-15 19:13:32',
            'deleted_at'     => null,
        ],
        [
            'id'             => 2,
            'name'           => 'Test 2',
            'email'          => 'test2@test.com',
            'phone'       => '9876543210',
            'card_number' => 5353232356568787,
            'amount' => 150.70,
            'payment_status' => 'error',
            'payment_date'     => '2021-04-16 19:13:32',
            'created_at'     => '2021-04-16 19:13:32',
            'updated_at'     => '2021-04-16 19:13:32',
            'deleted_at'     => null,
        ],
        [
            'id'             => 3,
            'name'           => 'Test 3',
            'email'          => 'test3@test.com',
            'phone'       => '7476543256',
            'card_number' => 7575989845456363,
            'amount' => 375.25,
            'payment_status' => 'success',
            'payment_date'     => '2021-04-17 19:13:32',
            'created_at'     => '2021-04-17 19:13:32',
            'updated_at'     => '2021-04-17 19:13:32',
            'deleted_at'     => null,
        ]];

        Payment::insert($payments);
    }
}
