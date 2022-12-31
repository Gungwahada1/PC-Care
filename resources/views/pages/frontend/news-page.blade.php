@extends('../layout/' . $layout)

@section('subhead')
    <title>Front End Landing Page - PC Care</title>
@endsection

@section('subcontent')
    @foreach ($newsPage as $item)
        <form action="{{ url('update-news-page/' . $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- if make update data, use source bellow --}}
            <input type="hidden" name="_method" value="PUT">
            <div class="intro-y flex items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">Landing Page</h2>
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
                                placeholder="Title 1" value="{{ $item->title }}">
                        </div>
                        <div>
                            <label for="description1" class="form-label">Deskripsi</label>
                            <textarea name="description" id="description1" cols="30" rows="10" class="form-control w-full mb-5">{{ $item->description }}</textarea>
                        </div>
                        {{-- <div>
                    <label for="title2" class="form-label">Title Slider 2</label>
                    <input id="title2" name="title2" type="text" class="form-control w-full mb-5"
                        placeholder="Title 1" value="{{ $item->title2 }}">
                </div>
                <div>
                    <label for="description2" class="form-label">Deskripsi Slider 2</label>
                    <textarea name="description2" id="description2" cols="30" rows="10" class="form-control w-full mb-5">{{ $item->description2 }}</textarea>
                </div>
                <div>
                    <label for="title3" class="form-label">Title Slider 3</label>
                    <input id="title3" name="title3" type="text" class="form-control w-full mb-5"
                        placeholder="Title 1" value="{{ $item->title3 }}">
                </div>
                <div>
                    <label for="description3" class="form-label">Deskripsi Slider 3</label>
                    <textarea name="description3" id="description3" cols="30" rows="10" class="form-control w-full mb-5">{{ $item->description3 }}</textarea>
                </div> --}}
                    </div>
                    <!-- END: Form Layout -->
                </div>
                {{-- <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="intro-y box p-5"> --}}
                <!-- BEGIN: Single File Upload -->
                {{-- <div class="intro-y box">
                            <div
                                class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">Struktur Organisasi</h2>
                            </div>
                            <div id="single-file-upload" class="p-5">
                                <div class="preview">
                                    <div data-single="true" class="dropzone">
                                        <div class="fallback">
                                            <input name="imageSO" type="file" value="{{ $item->imageSO }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
                {{-- </div>
                </div> --}}
            </div>
        </form>
    @endforeach
@endsection

@section('script')
    @vite('resources/js/ckeditor-classic.js')
@endsection
