<?php

namespace App\Http\Controllers;

use App\Jobs\PersonJob;
use App\Models\Person;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $startTime = microtime(true);

        $job = new PersonJob();
        $this->dispatch($job);
            

        $endTime = microtime(true);
        $timeDiff = $endTime - $startTime;
        return "<h1>halaman diproses dalam ". sprintf('%0.2f', $timeDiff). "</h1>";
    }
}
