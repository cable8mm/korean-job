<?php

namespace App\Http\Controllers;

use App\Models\Qna;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class QnaController extends Controller
{
    public function index(): View
    {
        $qnas = Qna::latest()->paginate();

        return view('qna.index', [
            'qnas' => $qnas,
        ]);
    }

    public function show(Qna $qna): View
    {
        DB::table('qnas')->where('id', $qna->id)->update(['hit' => $qna->hit + 1]);

        return view('qna.show', [
            'qna' => $qna,
        ]);
    }

    public function create(): View
    {
        return view('qna.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'question' => 'required',
        ]);

        $request->user()->qnas()->create($validated);

        return redirect()->route('qna')
            ->with('success', 'Qna updated successfully.');
    }

    public function edit(Qna $qna): View
    {
        $this->authorize('update', $qna);

        return view('qna.edit', [
            'qna' => $qna,
        ]);
    }

    public function update(Request $request, Qna $qna): RedirectResponse
    {
        $this->authorize('update', $qna);

        $validated = $request->validate([
            'title' => 'required',
            'question' => 'required',
        ]);

        $qna->update($validated);

        return redirect()->route('qna.show', $qna->id)
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Qna $qna): RedirectResponse
    {
        $this->authorize('delete', $qna);

        $qna->delete();

        return redirect()->route('qna')
            ->with('success', 'Qna deleted successfully.');
    }
}
