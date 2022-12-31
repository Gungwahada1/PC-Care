@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Produk - PC Care</title>
@endsection

@section('subcontent')
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Edit Produk</h2>
        </div>
        <div id="input" class="p-5">
            <form action="{{ url('update-produk/' . $produk->id) }}" method="POST">
                @csrf
                {{-- if make update data, use source bellow --}}
                <input type="hidden" name="_method" value="PUT">
                <div class="">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Input Nama"
                        value="{{ $produk->name }}">
                </div>
                <div class="pt-5">
                    <label for="price" class="form-label">Harga</label>
                    <input id="price" type="number" class="form-control" name="price"
                        placeholder="Input Harga (tanpa titik atau koma)" value="{{ $produk->price }}">
                </div>
                <div class="pt-5">
                    <label class="">Kategori Produk
                        <span class="text-danger">*</span>
                    </label>
                    <select class="choices form-control" name="category_product_id">
                        <option value="">-- Kategori Produk --</option>
                        @foreach ($kategori_produk as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" class="form-control mt-2" name="category_product_id"
                        placeholder="Ketikkan Nama Kategori">
                    <p class="">Jika kategori tidak ada di selection, harap ketikkan nama kategori disini!</p> --}}
                </div>
                <button class="btn btn-primary w-24 mr-1 mb-2 mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
