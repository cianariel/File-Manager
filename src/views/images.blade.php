@if((sizeof($files) > 0) || (sizeof($directories) > 0))

    @foreach($files as $key => $file)

        <div class="col-sm-6 col-md-2">
            <div class="thumbnail thumbnail-img" data-id="{{ basename($file) }}" id="img_thumbnail_{{ $key }}" onclick="highlight('img_thumbnail_{{ $key }}')">
                <img id="{!! $file !!}"
                     src="/vendor/laravel-filemanager/files/{{ $base }}/thumbs/{{ basename($file) }}"
                     alt="">
            </div>
            <div class="caption text-center">
                <h5>{{ basename($file) }}</h5>
                <p class="text-center">
                    <a href="#" class="btn btn-primary btn-xs" role="button">
                        Use this image
                    </a>
                </p>
            </div>
        </div>

    @endforeach

    @foreach($directories as $directory)
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail text-center" data-id="{{ basename($directory) }}">
                <a href="" class="folder-icon" data-id="{{ basename($directory) }}">
                    <img src="/vendor/laravel-filemanager/img/folder.jpg">
                </a>
            </div>
            <div class="caption text-center">
                <h5>{{ basename($directory) }}</h5>

            </div>
        </div>
    @endforeach

@else
    <div class="col-md-12">
        <p>Folder is empty.</p>
    </div>
@endif

