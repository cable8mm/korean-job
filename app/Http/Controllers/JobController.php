<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(?string $sort = null): View
    {
        $jobModel = match ($sort) {
            'popular' => Job::popular()->latest(),
            default => Job::latest(),
        };

        $jobs = $jobModel->paginate();

        return view('job.index', [
            'jobs' => $jobs,
        ]);
    }

    public function show(Job $job): View
    {
        DB::table('jobs')->where('id', $job->id)->update(['hit' => $job->hit + 1]);

        $jobs = Job::latest()->paginate();

        return view('job.show', [
            'job' => $job,
            'jobs' => $jobs,
        ]);
    }

    public function create(): View
    {
        $companies = Auth::user()->companies()->pluck('name', 'id');

        return view('job.create', [
            'companies' => $companies,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_id' => 'required',
            'title' => 'required',
            'job_type' => 'required',
            'job_position' => 'required',
            'job_requirement_certification' => 'nullable',
            'job_experience_period' => ['required', 'integer'],
            'work_hours' => 'required',
            'working_area' => 'required',
            'wages_and_benefits' => 'nullable',
            'application_process' => 'required',
            'has_salary' => 'nullable',
            'salary_from' => 'nullable',
            'salary_to' => 'nullable',
            'job_required' => 'nullable',
            'job_preferred' => 'nullable',
            'number_of_potisions' => ['required', 'integer'],
            'description' => 'required',
            'contact' => 'required',
            'opened_at' => 'required',
            'closed_at' => 'required',
        ]);

        $request->user()->jobs()->create($validated);

        return redirect()->route('job')
            ->with('success', 'Post updated successfully.');
    }

    public function edit(Job $job): View
    {
        $this->authorize('update', $job);

        return view('job.edit', [
            'job' => $job,
        ]);
    }

    public function update(Request $request, Job $job): RedirectResponse
    {
        $this->authorize('update', $job);

        $validated = $request->validate([
            'company_id' => 'required',
            'title' => 'required',
            'job_type' => 'required',
            'job_position' => 'required',
            'job_requirement_certification' => 'nullable',
            'job_experience_period' => ['required', 'integer'],
            'work_hours' => 'required',
            'working_area' => 'required',
            'wages_and_benefits' => 'nullable',
            'application_process' => 'required',
            'has_salary' => 'nullable',
            'salary_from' => 'nullable',
            'salary_to' => 'nullable',
            'job_required' => 'nullable',
            'job_preferred' => 'nullable',
            'number_of_potisions' => ['required', 'integer'],
            'description' => 'required',
            'contact' => 'required',
            'opened_at' => 'required',
            'closed_at' => 'required',
        ]);

        $newJob = $job->update($validated);

        return redirect()->route('job.show', $job->id)
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();

        return redirect()->route('job')
            ->with('success', 'Post deleted successfully.');
    }
}
