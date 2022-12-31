@extends('../layout/' . $layout)

@section('subhead')
    <title>Front End Contact Page - PC Care</title>
@endsection

@section('subcontent')
    @foreach ($contactPage as $item)
        <form action="{{ url('update-contact-page/' . $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- if make update data, use source bellow --}}
            <input type="hidden" name="_method" value="PUT">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">Contact Page</h2>
                <div class="btn btn-primary">
                    <button type="submit">Edit & Submit</button>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <!-- BEGIN: Form Layout -->
                    <div class="intro-y box p-5">
                        <div>
                            <label for="title1" class="form-label">Title</label>
                            <input id="title1" name="title" type="text" class="form-control w-full mb-5"
                                placeholder="Title" value="{{ $item->title }}">
                        </div>
                        <div>
                            <label for="description1" class="form-label">Deskripsi</label>
                            <textarea name="description1" id="description" cols="30" rows="10" class="form-control w-full mb-5">{{ $item->description }}</textarea>
                        </div>
                        <div>
                            <label for="whatsapp" class="form-label">WhatsApp</label>
                            <input id="whatsapp" name="whatsapp" type="text" class="form-control w-full mb-5"
                                placeholder="WhatsApp" value="{{ $item->whatsapp }}">
                        </div>
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" type="email" class="form-control w-full mb-5"
                                placeholder="Email" value="{{ $item->email }}">
                        </div>
                        <div>
                            <label for="address" class="form-label">Alamat</label>
                            <textarea name="address" id="address" cols="30" rows="10" class="form-control w-full mb-5">{{ $item->address }}</textarea>
                        </div>
                    </div>
                    <!-- END: Form Layout -->
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="intro-y box p-5">
                        <!-- BEGIN: Single File Upload -->
                        <div class="intro-y box">
                            <div
                                class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">Gambar Banner</h2>
                            </div>
                            <div id="single-file-upload" class="p-5">
                                <div class="preview">
                                    <div data-single="true" class="dropzone">
                                        <div class="fallback">
                                            <input name="imageBanner" type="file" value="{{ $item->imageBanner }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="intro-y box">
                            <div
                                class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">Gambar Banner 2</h2>
                            </div>
                            <div id="single-file-upload" class="p-5">
                                <div class="preview">
                                    <div data-single="true" class="dropzone">
                                        <div class="fallback">
                                            <input name="imageBanner2" type="file" value="{{ $item->imageBanner2 }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- END: Single File Upload -->
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
