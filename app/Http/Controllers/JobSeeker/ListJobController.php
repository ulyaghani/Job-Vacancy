<?php

namespace App\Http\Controllers\JobSeeker;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListJobController extends Controller
{
    public function index()
    {
        $categories = JobCategory::all();
        $configurations = Configuration::first();
        $jobCounts = Job::select('job_category_id', DB::raw('count(*) as total'))
            ->groupBy('job_category_id')
            ->pluck('total', 'job_category_id');

        $jobs = Job::all();

        $data = [
            "title" => "Job Category",
            "categories" => $categories,
            "jobs" => $jobs,
            "jobCounts" => $jobCounts,
            "configurations" => $configurations
        ];

        return view('job-seekers.job-listing', $data);
    }
}