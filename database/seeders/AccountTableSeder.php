<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models as Database;

class AccountTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('account')->truncate();

        $accounts = [
            [1,'taikhoan1','123456',50],
            [2,'taikhoan2','123456',50],
            [3,'taikhoan3','123456',50],
            [0,'taikhoan4','123456',50],
            [4,'taikhoan5','123456',50]
        ];

        foreach ($accounts as $account) {
            Database\Account::create([
                'userId' => $account[0],
                'accountName' => $account[1],
                'password' => $account[2],
                'coin' => $account[3]
            ]);
        }

        Schema::enableForeignKeyConstraints();
    }
}
