<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    protected $fillable = ['id','user_id','acct_name','init_invest','start_date'];

    public function run()
    {
        $account_list = [
            [
                'id' => 1,
                'user_id' => 1,
                'acct_name' => 'Account 1',
                'init_invest' => 24245.12,
                'start_date' => '2021-12-09'
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'acct_name' => 'Account 2',
                'init_invest' => 124552.32,
                'start_date' => '2021-04-05'
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'acct_name' => 'Account 3',
                'init_invest' => 55515.32,
                'start_date' => '2020-05-01'
            ]
        ];
        foreach($account_list as $account){
            \App\Accounts::create($account);
        }
    }
}
