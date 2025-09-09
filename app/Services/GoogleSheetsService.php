<?php

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Google_Service_Drive;

class GoogleSheetsService
{
    protected $client;
    protected $sheetService;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Google Sheets Integration');
        $this->client->setScopes([
            Google_Service_Sheets::SPREADSHEETS,
            Google_Service_Drive::DRIVE,
        ]);
        $this->client->setAuthConfig(storage_path('app/jalin-api.json'));  // Path to your credentials.json
        $this->client->setAccessType('offline');

        $this->sheetService = new Google_Service_Sheets($this->client);
    }

    public function appendToSpreadsheet($spreadsheetId, $data)
    {
        $range = 'Sheet1!A1';  // Set the sheet name and range (e.g., 'Sheet1!A1')

        $body = new Google_Service_Sheets_ValueRange([
            'values' => [$data]  // Data to append (array format)
        ]);

        $params = [
            'valueInputOption' => 'RAW'
        ];

        $this->sheetService->spreadsheets_values->append(
            $spreadsheetId, $range, $body, $params
        );
    }
}
