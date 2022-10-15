<?php

namespace App\Libs;

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
use Illuminate\Http\Request;
use App\Libs\GoogleDrive;
use Artisan;

class GoogleDrive
{
    /**
     * Googleドライブへの認証を行う
     * @return Google_Service_Drive
     */
    public function getDriveClient(): Google_Service_Drive
    {
        $client = new Google_Client();

        // サービスアカウント作成時にダウンロードしたJSONファイルの名前を「client_secret」変更し、configフォルダ内に設置
        $client->setAuthConfig(config_path('client_secret.json'));
        $client->setScopes(['https://www.googleapis.com/auth/drive']);

        return new Google_Service_Drive($client);
    }

    /**
     * ファイルをアップロードする
     *
     * @return GoogleDrive
     */
    public function archiveUpload()
    {
        // 保険
        session()->forget('fileID');

        // ローカルに保存されたファイルの取得
        foreach (glob(storage_path('app/uploadedFiles/*.pdf')) as $file) {
            $filename = pathinfo($file, PATHINFO_BASENAME);
        }

        $driveClient = $this->getDriveClient();

        $fileMetadata = new Google_Service_Drive_DriveFile([
            'name' => $filename, // Googleドライブへアップロードされた際のファイル名
            'parents' => [env('GOOGLE_DRIVE_ARCHIVE_FOLDER_ID')], // 保存先のフォルダID(urlのfoldersよりも後ろ部分)
        ]);

        $driveClient->files->create($fileMetadata, [
            'data' => file_get_contents(storage_path('/app/uploadedFiles/' . $filename)), // アップロード対象となるファイルのパス
            'mimeType' => 'application/pdf',
            'uploadType' => 'resumable',
            'fields' => 'id',
        ]);

        // ファイルIDの取得
        $fileList = $driveClient->files->listFiles();
        session()->push('fileID', $fileList['files'][0]['id']);
    }
}
