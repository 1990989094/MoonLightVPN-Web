<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $settings = [
        [
            'key'                       =>  'app_name',
            'value'                     =>  'Moon Light VPN',
        ],
        [
            'key'                       =>  'app_description',
            'value'                     =>  ''
        ],
        [
            'key'                       =>  'app_logo',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'phone_number',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'email',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'address',
            'value'                     =>  '',
        ],
    ];

    public function run()
    {
        foreach ($this->settings as $index => $setting)
        {
            $result = Setting::create($setting);
            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted '.count($this->settings). ' records');
    }
}
