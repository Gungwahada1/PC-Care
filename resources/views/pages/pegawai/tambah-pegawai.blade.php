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
            <form action="{{ route('store.pegawai') }}" method="POST">
                @csrf
                <div class="">
                    <label for="name" class="form-label">Nama</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Input Nama">
                </div>
                <div class="pt-5">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email"
                        placeholder="example@gmail.com">
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
                <div class="pt-5 hidden">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="number" name="password" class="form-control" value="12345678">
                </div>
                <div class="pt-5 hidden">
                    <label for="status" class="form-label">Status</label>
                    <input id="status" type="number" name="active" class="form-control" value="1">
                </div>
                <div class="pt-5 hidden">
                    <label for="role" class="form-label">Role</label>
                    <input id="role" type="number" name="role" class="form-control" value="1">
                </div>
                <button class="btn btn-primary w-24 mr-1 mb-2 mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
