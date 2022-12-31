@extends('../layout/' . $layout)

@section('subhead')
    <title>Tambah Berita - PC Care</title>
@endsection

@section('subcontent')
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Tambah Berita</h2>
        </div>
        <div id="input" class="p-5">
            <form action="{{ route('store.berita') }}" method="POST">
                @csrf
                <div class="">
                    <label for="name" class="form-label">Judul Berita</label>
                    <input id="name" type="text" class="form-control" name="title"
                        placeholder="Input Judul Berita">
                </div>
                <div class="py-5" id="classic-editor">
                    <div class="preview">
                        <label for="name" class="form-label">Konten</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="editor"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary w-24 mr-1 mb-2 mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
