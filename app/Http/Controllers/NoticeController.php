<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class NoticeController extends Controller
{
    public function index(): View
    {
        $notices = Notice::latest()->paginate();

        return view('notice.index', [
            'notices' => $notices,
        ]);
    }

    public function show(Notice $notice): View
    {
        DB::table('notices')->where('id', $notice->id)->update(['hit' => $notice->hit + 1]);

        return view('notice.show', [
            'notice' => $notice,
        ]);
    }
}
