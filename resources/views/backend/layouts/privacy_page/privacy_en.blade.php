@extends('backend.layouts.main')

@section('content')

  
<div class="content">
    <h1>Content in <?php if(Route::current()->uri == 'admin/privacy/{privacy}/edit') echo 'English'; else echo 'Arabic';?></h1>
    <form action="<?php if(Route::current()->uri == 'admin/privacy/{privacy}/edit') echo '/admin/privacy/1'; else echo '/admin/privacy_ar/1';?>" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">
            @php
                if(Route::current()->uri == 'admin/privacy/{privacy}/edit') {
                    echo '<textarea id="summernote" name="content_en">
                    '.$content->content_en
                .'</textarea>';
                } else {
                    echo '<textarea id="summernote" name="content_ar">
                    '.$content->content_ar
                .'</textarea>';
                }
            @endphp
            
          </div>
    <button type="submit" class="btn btn-block btn-primary btn-lg">Save</button>
    </form>
</div>
@endsection

@push('js')

<!-- CodeMirror -->
<script src="{{asset('plugins/codemirror/codemirror.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/css/css.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/xml/xml.js')}}"></script>
<script src="{{asset('plugins/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
    
@endpush