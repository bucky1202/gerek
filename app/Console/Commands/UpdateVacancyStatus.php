<?php

namespace App\Console\Commands;

use App\Models\Vacancy;
use Illuminate\Console\Command;

class UpdateVacancyStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vacancies:update-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update vacancy statuses based on closing time';

    /**
     * Execute the console command.
     */

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $vacancies = Vacancy::whereNotNull('closing_time')
                            ->where('closing_time', '<=', now())
                            ->where('status', 'open')
                            ->update(['status' => 'closed']);

        $this->info('Vacancy statuses updated successfully.');
    }

}
