@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-5">Practice Area</h3>
                        <form class="form-sample" action="{{ route('admin.practice-area.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Title -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                    value="{{ old('title', @$practiceArea->title) }}" required>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Description">{{ old('description', @$practiceArea->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Meta Title -->
                            <div class="form-group">
                                <label for="metatitle">Meta Title</label>
                                <input type="text" class="form-control" id="metatitle" name="metatitle"
                                    placeholder="Meta Title" value="{{ old('metatitle', @$practiceArea->metatitle) }}">
                                @error('metatitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Meta Description -->
                            <div class="form-group">
                                <label for="metadescription">Meta Description</label>
                                <textarea class="form-control" id="metadescription" name="metadescription" placeholder="Meta Description">{{ old('metadescription', @$practiceArea->metadescription) }}</textarea>
                                @error('metadescription')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Meta Tags -->
                            <div class="form-group">
                                <label for="metatags">Meta Tags</label>
                                <input type="text" class="form-control" id="metatags" name="metatags"
                                    placeholder="Meta Tags" value="{{ old('metatags', @$practiceArea->metatags) }}">
                                @error('metatags')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Meta Image -->
                            <div class="form-group">
                                <label for="metaimage">Meta Image</label>
                                <input type="file" class="form-control" id="metaimage" name="metaimage">
                                @if (@$practiceArea->metaimage)
                                    <img src="{{ asset(@$practiceArea->metaimage) }}" alt="Meta Image" height="100px">
                                @endif
                                @error('metaimage')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
