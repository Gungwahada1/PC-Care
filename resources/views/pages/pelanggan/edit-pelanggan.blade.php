@extends('../layout/' . $layout)

@section('subhead')
    <title>Edit Pelanggan - PC Care</title>
@endsection

@section('subcontent')
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">Edit Pelanggan</h2>
        </div>
        <div id="input" class="p-5">
            <form action="{{ url('update-pelanggan/' . $pelanggan->id) }}" method="POST">
                @csrf
                {{-- if make update data, use source bellow --}}
                <input type="hidden" name="_method" value="PUT">
                <div class="">
                    <label for="name" class="form-label">Nama</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Input Nama"
                        value="{{ $pelanggan->name }}">
                </div>
                <div class="pt-5">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="example@gmail.com"
                        value="{{ $pelanggan->email }}">
                </div>
                <div class="pt-5">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="flex flex-col sm:flex-row mt-2">
                        <div class="form-check mr-2">
                            <input id="male" class="form-check-input" type="radio" name="gender" value="Male">
                            <label class="form-check-label" for="male">Laki-laki</label>
                        </div>
                        <div class="form-check mr-2">
                            <input id="female" class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label" for="female">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="pt-5">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="number" name="password" class="form-control"
                        value="{{ $pelanggan->password }}">
                </div>
                <div class="pt-5">
                    <label for="status" class="form-label">Status</label>
                    <input id="status" type="number" name="active" class="form-control"
                        value="{{ $pelanggan->active }}">
                    <p class="text-gray mt-1 ml-1">0 => Selesai Bekerja; 1 => Masih Bekerja</p>
                </div>
                <div class="pt-5">
                    <label for="role" class="form-label">Role</label>
                    <input id="role" type="number" name="role" class="form-control" value="{{ $pelanggan->role }}">
                    <p class="text-gray mt-1 ml-1">0 => Pelanggan; 1 => Pegawai; 2 => Admin</p>
                </div>
                <button class="btn btn-primary w-24 mr-1 mb-2 mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
