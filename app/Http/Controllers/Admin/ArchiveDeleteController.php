<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Archive;
use Artisan;

class ArchiveDeleteController extends Controller
{
    public function archiveDelete(Request $request)
    {
        if ($request->get('archive-delete') == null) {
            return redirect()
                ->route('admin.dashboard')
                ->with('flash_message', '不明なリクエストです');
        }

        $archiveInfoArray = explode('/', $request->get('archive-delete'));

        $archiveFileID = $archiveInfoArray[5];
        session()->push('deleteFileID', $archiveFileID);
        $archiveID = $archiveInfoArray[7];

        Artisan::call('google_drive:file_delete');
        Archive::where('id', (int)$archiveID)->delete();
        session()->forget('deleteFileID');

        if (session('deleteJudge')[0] == '0') {
            session()->forget('deleteJudge');
            return redirect()
                ->route('admin.dashboard')
                ->with('flash_message', 'アーカイブが削除されました');
        } else {
            session()->forget('deleteJudge');
            return redirect()
                ->route('admin.dashboard')
                ->with('flash_message', 'アーカイブの削除に失敗しました');
        }
    }
}
