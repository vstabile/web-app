<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 1/30/14
 * Time: 12:09 AM
 */

namespace SocialFunding\Core\SharedBundle\IntegrationEngine\NovaPontoCom\Update;


class Zip {

    protected $zip;

    protected function extractZip($zip, $destinationDir)
    {

        $this->zip = new \ZipArchive();

        if ($this->zip->open($zip) === TRUE) {
            $this->zip->extractTo($destinationDir);
            $this->zip->close();
        }
    }

    protected function download($downloadList){

        foreach ($downloadList as $fileName => $fileLocation) {

            try {
                file_put_contents($this->directory . '/' . $fileName, fopen($fileLocation, 'r'));
                $this->extractFile($fileName);
            } catch (\Exception $e) {
                continue;
            }
        }

    }

    protected function extractAllFiles($downloadList)
    {
        foreach ($downloadList as $fileName => $fileLocation) {
            $this->extractFile($fileName);
        }
    }

    protected function extractFile($fileName)
    {
        $dirName = explode('.', $fileName);
        $finalDir = $this->directory . '/' . $dirName[0];
        if (!is_dir($finalDir)) {
            mkdir($this->directory . '/' . $dirName[0]);
        }
        $this->extractZip($this->directory . '/' . $fileName, $finalDir);
    }

    protected function listFileFromDirectory($path)
    {
        $fileList = array();
        if ($handle = opendir($path)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && $entry != "[Content_Types].xml") {
                    $fileList[] = $path . '/' . $entry;
                }
            }
            closedir($handle);
        }

        return $fileList;
    }

}