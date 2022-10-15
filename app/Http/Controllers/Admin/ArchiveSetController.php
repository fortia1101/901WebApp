<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Archive;
use Artisan;
use Storage;

class ArchiveSetController extends Controller
{
    public function archiveSet(Request $request)
    {
        if (($request->file('archive-file') == null) || !isset($request->archiveLabel) || !isset($request->gen)) {
            return redirect()
                ->route('admin.dashboard')
                ->with('flash_message', '入力項目に不備があります');
        }

        if ($request->file('archive-file')->isValid()) {
            $dir = 'uploadedFiles';
            $archiveFile = $request->file('archive-file');
            $archiveFileName = $archiveFile->getClientOriginalName();
            $archiveFile->storeAs($dir, $archiveFileName);
            foreach (glob(storage_path('app/uploadedFiles/*.pdf')) as $file) {
                $archiveName = pathinfo($file, PATHINFO_BASENAME);
            } // ローカルに保存されたファイルの取得

            Artisan::call('google_drive:file_upload');
            Storage::deleteDirectory($dir);
            Archive::create([
                'title' => $request->archiveLabel,
                'body' => 'https://drive.google.com/file/d/' . $request->session()->get('fileID')[0] . '/preview',
                'gen' => $request->gen,
            ]);

            $request->session()->forget('fileID');

            return redirect()
                ->route('admin.dashboard')
                ->with('flash_message', 'アーカイブが追加されました');
        } else {
            return redirect()
                ->route('admin.dashboard')
                ->with('flash_message', '入力項目に不備があります');
        }
    }
}
