@extends('layouts.admin')

@section('content')

<form method="POST" id="elitedesignformdata2" action="{{ route('test-editor.submit') }}">
@csrf
<textarea name="description" id="kb-description">Hello CKEditor</textarea>
<br>
<input type="submit" value="Submit">
</form>

<script src="{{ asset('assets/admin/js/vendors/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('kb-description');

    document.getElementById('elitedesignformdata2').addEventListener('submit', function () {
        for (var instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    });
</script>

@endsection

