<?php

namespace App\Console\Commands;

use App\Models\Income;
use App\Models\Member;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PrepareData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:prepare-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->resetMember();
        $this->resetIncome();
    }

    /**
     * @return void
     */
    public function resetMember(): void
    {
        Member::truncate();

        $memberLines = file(Storage::path('member.csv'));
        foreach ($memberLines as $memberLine) {
            $member = str_getcsv($memberLine);
            if (Str::length($member[0]) !== 10) {
                continue;
            }

            Member::create([
                'identifier'       => $member[0],
                'real_name'        => $member[1],
                'name'             => $member[2],
                'slack_name'       => $member[3],
                'email'            => $member[4],
                'cellphone'        => $member[5],
                'bank_name'        => $member[6],
                'bank_account'     => $member[7],
                'bank_branch'      => $member[8],
                'bank_branch_code' => $member[9],
                'address'          => $member[10],
            ]);
        }
    }


    /**
     * @return void
     */
    public function resetIncome(): void
    {
        Income::truncate();
        $incomeLines = file(Storage::path('income.csv'));
        foreach ($incomeLines as $incomeLine) {
            $income = str_getcsv($incomeLine);
            if (!Str::startsWith($income[6], 'NT$')) {
                continue;
            }

            $amount = Str::replace('NT$', '', $income[6]);
            $amount = Str::replace(',', '', $amount);

            Income::create([
                'member_name' => $income[3],
                'title'       => $income[4],
                'amount'      => $amount,
                'date'        => $income[0],
            ]);
        }
    }
}
