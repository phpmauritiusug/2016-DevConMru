<?php

class Blog extends PageModel
{
    public $title = 'This is my blog';

    public function prerender()
    {
        $dir = '/var/www/blogposts/';
        $files = scandir($dir);
        unset($files[0], $files[1]);

        // We create an empty array
        $byDateFiles = [];

        // We loop on file names
        foreach ($files as $fileName) {
            // We get the date of the file
            $date = filectime($dir.'/'.$fileName);
            // We use it as the array key
            $byDateFiles[$date] = [
                'date' => date('D, d M Y H:i:s', $date), // formatting date in natural language
                'name' => $fileName,
                'content' => nl2br(file_get_contents($dir.'/'.$fileName)), // getting file contents, with <br> instead of \r\n
            ];
        }

        // We order the array by its keys
        ksort($byDateFiles);

        // To finally reverse it (newer posts first!)
        $this->orderedFiles = array_reverse($byDateFiles, true);
    }
}
