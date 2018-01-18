<?php
/**
 * Created by PhpStorm.
 * User: Manson
 * Date: 1/18/2018
 * Time: 2:22 PM
 */

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageUploader
{

    /*
     * Upload image and save it on server with unique name
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     * */
    public function uploadImage(Request $request)
    {
        if($request->file('image')->isValid()){
            $image = $request->file('image');

            if($image->getClientMimeType() == "image") {
                if ($image->getClientSize() <= 1024) {
                    $classname = strtolower(class_basename($this));
                    $filename = $classname . '_' . $this->id . '.' . $image->getClientOriginalExtension();
                    $path = 'img/' . $classname;
                    $image->move($path, $filename);
                    $uri = '/gmsgroup/' . $path . '/' . $filename;

                    $this->image = $uri;
                    $this->save();
                } else {
                    return redirect()->back()->withErrors(['Image is too large']);
                }
            } else {
                return redirect()->back()->withErrors(['Invalid image type']);
            }
        }

        return redirect()->back()->withErrors(['File is not valid']);
    }
}