@extends('../layout/' . $layout)

@section('subhead')
    <title>Tambah Pegawai - PC Care</title>
@endsection

@section('subcontent')
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Tambah Pegawai</h2>
        </div>
        <div id="input" class="p-5">
            <form action="{{ url('update-kategori-produk/' . $kategori_produk->id) }}" method="POST">
                @csrf
                {{-- if make update data, use source bellow --}}
                <input type="hidden" name="_method" value="PUT">
                <div class="">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input id="name" type="text" class="form-control" name="name"
                        placeholder="Input Nama Kategori" value="{{ $kategori_produk->name }}">
                </div>
                <button class="btn btn-primary w-24 mr-1 mb-2 mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
