<?php

namespace App\Http\Controllers\Backend\Filemanager;

use App\Models\Files;
use App\Models\Folders;

class DeleteController extends LfmController
{
    public function getDelete()
    {
        $item_names = request('items');
        $errors = [];

        foreach ($item_names as $file) {
            if (is_null($file)) {
                array_push($errors, parent::error('folder-name'));
                continue;
            }
    
            $is_directory = $this->isDirectory($file);
            if ($is_directory) {
                Folders::find($file)->deleteFolder();
            }
            else {
                $file_path = $this->getPath($file);
                Files::where('path', '=', $file_path)->first()->deleteFile();
            }
            
        }

        if (count($errors) > 0) {
            return $errors;
        }

        return parent::$success_response;
    }
}
