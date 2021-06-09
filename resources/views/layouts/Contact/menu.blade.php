<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

      
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
        <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    </head>
    <body >
    <div x-data="{ open: false }">
    <button @click="open = true">Open Dropdown</button>

    <ul
        x-show="open"
        @click.away="open = false"
    >
        Dropdown Body
    </ul>
</div>





<div wire:model="showingFileUploadForm">
        <div
            wire:ignore
            class="m-3 border-dashed border-2" style="margin:5px;border:dashed 1px"
            x-data="{
                initFilepond () {
                    const pond = FilePond.create(this.$refs.filepond, {
                        onprocessfile: (error, file) => {
                            pond.removeFile(file.id)

                            if (pond.getFiles().length === 0) {
                                @this.set('showingFileUploadForm', false)
                            }
                        },
                        allowRevert: false,
                        server: {
                            process: (fileName, file, metadata, load, error, progress, abort, transfer, options) => {
                                @this.upload('upload', file, load, error, progress)
                            }
                        }
                    })
                }
            }"
            x-init="initFilepond"
        >
            <div>
                <input type="file" x-ref="filepond" multiple>
            </div>
        </div>
    </div>







    </body>
</html>
