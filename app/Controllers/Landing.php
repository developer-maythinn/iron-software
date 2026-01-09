<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Exceptions\PageNotFoundException;

class Landing extends BaseController
{
    public function index(): string
    {
        helper('url');

        $payload = $this->loadContent();

        return view('landing', $payload);
    }

    /**
     * Loads JSON-backed content for the landing page.
     */
    protected function loadContent(): array
    {
        $path = ROOTPATH . 'public/data/ironpdf.json';

        if (! is_file($path)) {
            return [
                'content'      => [],
                'contentError' => 'Content file missing.',
            ];
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($data)) {
            return [
                'content'      => [],
                'contentError' => 'Unable to read content.',
            ];
        }

        return [
            'content'      => $data,
            'contentError' => null,
        ];
    }
}

