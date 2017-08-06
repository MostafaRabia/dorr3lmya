<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Exams;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $Today = date_create('now');
        $getExams = Exams::get();
        $schedule->call(function() use ($getExams,$Today){
            foreach ($getExams as $Exam){
                if ($Exam->dateTo!=null){
                    $dateFrom = date_create($Exam->dateFrom);
                    $dateTo = date_create($Exam->dateTo);
                    if ($Exam->avil==0&&date_diff($Today,$dateFrom)->invert==1&&date_diff($Today,$dateTo)->invert==0){
                        $Exam->avil = 1;
                        $Exam->save();
                    }elseif ($Exam->avil==1&&date_diff($Today,$dateTo)->invert==1){
                        $Exam->avil = 0;
                        $Exam->save();
                    }
                }
            }
        })->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
