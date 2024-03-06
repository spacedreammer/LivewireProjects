<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\WithFileUploads;

use Livewire\Component;

class ImageUpload extends Component
{


    use WithFileUploads;

    /**
     * @var \Livewire\TemporaryUploadedFile
     */
    public $image = [];

    public function save()
    {
        $this->validate([
            'image.*' => 'image|max:1024',
        ]);

        foreach ($this->image as $image) {
            $image->store('public'); //save with temporary image name
            //this with original image name $this->$image->storeAs('public', getClientOriginalName())
        }
    }

    public function render()
    {
        return view(
            'livewire.image-upload',
            [
                'images' => collect(Storage::files('public'))
                    ->filter(function ($file) {
                        return in_array(
                            strtolower(pathinfo($file, PATHINFO_EXTENSION)),
                            ['png', 'jpg', 'jpeg', 'gif', 'webp']
                        );
                    })->map(function ($file) {
                        return Storage::url($file);
                    })
            ]
        );
    }
}
