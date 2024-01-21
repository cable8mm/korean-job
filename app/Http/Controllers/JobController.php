<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(): View
    {
        $jobs = Job::latest()->paginate();

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
        return view('job.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'has_career_period' => 'nullable',
            'career_period_from' => 'required',
            'career_period_to' => 'nullable',
            'has_salary' => 'nullable',
            'salary_from' => 'nullable',
            'salary_to' => 'nullable',
            'education' => 'nullable',
            'working_area' => 'required',
            'job_type' => 'required',
            'job_type_description' => 'nullable',
            'description' => 'nullable',
            'apply_type' => 'required',
            'opened_at' => 'required',
            'closed_at' => 'required',
            'how_to_apply' => 'required',
        ]);

        $request->user()->job()->create($validated);

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
            'title' => 'required',
            'has_career_period' => 'nullable',
            'career_period_from' => 'required',
            'career_period_to' => 'nullable',
            'has_salary' => 'nullable',
            'salary_from' => 'nullable',
            'salary_to' => 'nullable',
            'education' => 'nullable',
            'working_area' => 'required',
            'job_type' => 'required',
            'job_type_description' => 'nullable',
            'description' => 'nullable',
            'apply_type' => 'required',
            'opened_at' => 'required',
            'closed_at' => 'required',
            'how_to_apply' => 'required',
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
