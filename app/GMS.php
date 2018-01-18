<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class GMS extends Model
{

    /*
     * Upload logo and save it on server with unique name
     *
     * @param \Illuminate\Http\Request  $request
     * @return void
     * */
    public function uploadLogo(Request $request)
    {
        if($request->file('logo')->isValid()){
            $logo = $request->file('logo');

            if ($logo->getClientMimeType() == "image") {
                if ($logo->getClientSize() <= 1024) {
                    $classname = strtolower(class_basename($this));
                    $filename = $classname . '_' . $this->id . '.' . $logo->getClientOriginalExtension();
                    $path = 'img/' . $classname;
                    $logo->move($path, $filename);
                    $uri = '/gmsgroup/' . $path . '/' . $filename;

                    $this->logo = $uri;
                    $this->save();
                } else {
                    return redirect()->back()->withErrors(['Logo is too large']);
                }
            } else {
                return redirect()->back()->withErrors(['Invalid logo type']);
            }
        } else {
            return redirect()->back()->withErrors(['File is not valid']);
        }
    }

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
