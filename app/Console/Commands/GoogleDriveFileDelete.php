<?php


namespace App\Console\Commands;

use Illuminate\Http\Request;
use Illuminate\Console\Command;
use App\Libs\GoogleDrive;

class GoogleDriveFileDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'google_drive:file_delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete file of Google Drive';

    /**
     * @var GoogleDrive
     */
    public $googleDrive;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(GoogleDrive $googleDrive)
    {
        parent::__construct();
        $this->googleDrive = $googleDrive;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->googleDrive->archiveDelete();
    }
}
