@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">


        <!-- List of Categories -->
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-5" style="display: inline-block">Practice Area Categories</h3>
                        <button id="addCategory" style="display: inline-block;float: right;"
                            class="btn btn-gradient-primary me-2">
                            Add New Category
                        </button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Header Title</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->headertitle }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm"
                                                onclick="editCategory({{ $category->id }})">Edit</button>
                                            <form
                                                action="{{ route('admin.practice-area-categories.destroy', $category->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Edit Form (hidden by default) -->
                        <div id="edit-category-form-container" class="mt-5" style="display:none;">
                            <hr>
                            <h2 class="text-center my-3">Edit Practice Area Category</h2>
                            <form id="edit-category-form" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Header Title -->
                                <div class="form-group">
                                    <label for="editheadertitle">Header Title</label>
                                    <input type="text" class="form-control" id="editheadertitle" name="headertitle"
                                        placeholder="Header Title" required>
                                    @error('headertitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Header Description -->
                                <div class="form-group">
                                    <label for="editheaderdescription">Header Description</label>
                                    <textarea class="form-control" id="editheaderdescription" name="headerdescription" placeholder="Header Description"></textarea>
                                    @error('headerdescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Slug -->
                                <div class="form-group">
                                    <label for="editslug">Slug</label>
                                    <textarea class="form-control" id="editslug" name="slug" placeholder="Slug"></textarea>
                                    @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Header Description -->
                                <div class="form-group">
                                    <label for="editheaderbgimage">Header Background Image</label>
                                    <input type="file" class="form-control" id="editheaderbgimage" name="headerbgimage">
                                    <img src="" alt="" style="height:100px;width:auto" id="editheaderbgimagetag">

                                    @error('headerbgimage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Title -->
                                <div class="form-group">
                                    <label for="editsection1title">Section 1 Title</label>
                                    <input type="text" class="form-control" id="editsection1title" name="section1title"
                                        placeholder="Section 1 Title">
                                    @error('section1title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Description -->
                                <div class="form-group">
                                    <label for="editsection1description">Section 1 Description</label>
                                    <textarea class="form-control" id="editsection1description" name="section1description"
                                        placeholder="Section 1 Description"></textarea>
                                    @error('section1description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="editsection1image">Section 1 Image</label>
                                    <input type="file" class="form-control" id="editsection1image" name="section1image">
                                    <img src="" alt="" id="editsection1imagetag" style="height:100px;width:auto" >
                                    @error('section1image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Button Label -->
                                <div class="form-group">
                                    <label for="editsection1buttonlabel">Section 1 Button Label</label>
                                    <input type="text" class="form-control" id="editsection1buttonlabel"
                                        name="section1buttonlabel" placeholder="Section 1 Button Label">
                                    @error('section1buttonlabel')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Button Link -->
                                <div class="form-group">
                                    <label for="editsection1buttonlink">Section 1 Button Link</label>
                                    <input type="text" class="form-control" id="editsection1buttonlink"
                                        name="section1buttonlink" placeholder="Section 1 Button Link">
                                    @error('section1buttonlink')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 2 Title -->
                                <div class="form-group">
                                    <label for="editsection2title">Section 2 Title</label>
                                    <input type="text" class="form-control" id="editsection2title" name="section2title"
                                        placeholder="Section 2 Title">
                                    @error('section2title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 2 Description -->
                                <div class="form-group">
                                    <label for="editsection2description">Section 2 Description</label>
                                    <textarea class="form-control" id="editsection2description" name="section2description"
                                        placeholder="Section 2 Description"></textarea>
                                    @error('section2description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Title -->
                                <div class="form-group">
                                    <label for="editmetatitle">Meta Title</label>
                                    <input type="text" class="form-control" id="editmetatitle" name="metatitle"
                                        placeholder="Meta Title">
                                    @error('metatitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Description -->
                                <div class="form-group">
                                    <label for="editmetadescription">Meta Description</label>
                                    <textarea class="form-control" id="editmetadescription" name="metadescription" placeholder="Meta Description"></textarea>
                                    @error('metadescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Tags -->
                                <div class="form-group">
                                    <label for="editmetatags">Meta Tags</label>
                                    <input type="text" class="form-control" id="editmetatags" name="metatags"
                                        placeholder="Meta Tags">
                                    @error('metatags')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Image -->
                                <div class="form-group">
                                    <label for="editmetaimage">Meta Image</label>
                                    <input type="file" class="form-control" id="editmetaimage" name="metaimage">
                                    <img src="" alt="" id="editmetaimagetag" style="height:100px;width:auto" >

                                    @error('metaimage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-gradient-primary me-2">Update Category</button>
                            </form>
                        </div>

                        {{-- add new category form --}}
                        <div id="add-category-form-container" class="mt-5" style="display: none;">
                            <hr>
                            <h2 class="text-center my-3">Add New Practice Area Category</h2>
                            <form id="create-category-form" action="{{ route('admin.practice-area-categories.store') }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="practice_area_id" value="{{ $practiceArea->id }}">

                                <!-- Header Title -->
                                <div class="form-group">
                                    <label for="headertitle">Header Title</label>
                                    <input type="text" class="form-control" id="headertitle" name="headertitle"
                                        placeholder="Header Title" required>
                                    @error('headertitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Header Description -->
                                <div class="form-group">
                                    <label for="headerdescription">Header Description</label>
                                    <textarea class="form-control" id="headerdescription" name="headerdescription" placeholder="Header Description"></textarea>
                                    @error('headerdescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Slug -->
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <textarea class="form-control" id="slug" name="slug" placeholder="Slug"></textarea>
                                    @error('slug')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Header Background Image -->
                                <div class="form-group">
                                    <label for="headerbgimage">Header Background Image</label>
                                    <input type="file" class="form-control" id="headerbgimage" name="headerbgimage">
                                    @error('headerbgimage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Title -->
                                <div class="form-group">
                                    <label for="section1title">Section 1 Title</label>
                                    <input type="text" class="form-control" id="section1title" name="section1title"
                                        placeholder="Section 1 Title">
                                    @error('section1title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Description -->
                                <div class="form-group">
                                    <label for="section1description">Section 1 Description</label>
                                    <textarea class="form-control" id="section1description" name="section1description"
                                        placeholder="Section 1 Description"></textarea>
                                    @error('section1description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Image -->
                                <div class="form-group">
                                    <label for="section1image">Section 1 Image</label>
                                    <input type="file" class="form-control" id="section1image" name="section1image">
                                    @error('section1image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Button Label -->
                                <div class="form-group">
                                    <label for="section1buttonlabel">Section 1 Button Label</label>
                                    <input type="text" class="form-control" id="section1buttonlabel"
                                        name="section1buttonlabel" placeholder="Section 1 Button Label">
                                    @error('section1buttonlabel')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 1 Button Link -->
                                <div class="form-group">
                                    <label for="section1buttonlink">Section 1 Button Link</label>
                                    <input type="text" class="form-control" id="section1buttonlink"
                                        name="section1buttonlink" placeholder="Section 1 Button Link">
                                    @error('section1buttonlink')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 2 Title -->
                                <div class="form-group">
                                    <label for="section2title">Section 2 Title</label>
                                    <input type="text" class="form-control" id="section2title" name="section2title"
                                        placeholder="Section 2 Title">
                                    @error('section2title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Section 2 Description -->
                                <div class="form-group">
                                    <label for="section2description">Section 2 Description</label>
                                    <textarea class="form-control" id="section2description" name="section2description"
                                        placeholder="Section 2 Description"></textarea>
                                    @error('section2description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Title -->
                                <div class="form-group">
                                    <label for="metatitle">Meta Title</label>
                                    <input type="text" class="form-control" id="metatitle" name="metatitle"
                                        placeholder="Meta Title">
                                    @error('metatitle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Description -->
                                <div class="form-group">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" name="metadescription" placeholder="Meta Description"></textarea>
                                    @error('metadescription')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Tags -->
                                <div class="form-group">
                                    <label for="metatags">Meta Tags</label>
                                    <input type="text" class="form-control" id="metatags" name="metatags"
                                        placeholder="Meta Tags">
                                    @error('metatags')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Meta Image -->
                                <div class="form-group">
                                    <label for="metaimage">Meta Image</label>
                                    <input type="file" class="form-control" id="metaimage" name="metaimage">
                                    @error('metaimage')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-gradient-primary me-2">Add Category</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('addCategory').addEventListener('click', function() {
            document.getElementById('add-category-form-container').style.display = 'block';
            document.getElementById('edit-category-form-container').style.display = 'none';
        });

        function editCategory(id) {
            fetch(`/admin/practice-area-categories/${id}`)
                .then(response => response.json())
                .then(data => {
                    // Populate the edit form with data
                    document.getElementById('editheadertitle').value = data?.headertitle;
                    document.getElementById('editheaderdescription').value = data?.headerdescription;
                    document.getElementById('editslug').value = data?.slug;
                    document.getElementById('editsection1title').value = data?.section1title;
                    document.getElementById('editsection1description').value = data?.section1description;
                    document.getElementById('editsection1buttonlabel').value = data?.section1buttonlabel;
                    document.getElementById('editsection1buttonlink').value = data?.section1buttonlink;
                    document.getElementById('editsection2title').value = data?.section2title;
                    document.getElementById('editsection2description').value = data?.section2description;
                    document.getElementById('editmetatitle').value = data?.metatitle;
                    document.getElementById('editmetadescription').value = data?.metadescription;
                    document.getElementById('editmetatags').value = data?.metatags;

                    if (data?.headerbgimage) {
                        document.getElementById('editheaderbgimagetag').src = "{{ asset('') }}"+data?.headerbgimage;
                        document.getElementById('editheaderbgimagetag').style.display = 'block';
                    } else {
                        document.getElementById('editheaderbgimagetag').src = '';
                        document.getElementById('editheaderbgimagetag').style.display = 'none';
                    }

                    if (data?.section1image) {
                        document.getElementById('editsection1imagetag').src = "{{ asset('') }}" + data?.section1image;
                        document.getElementById('editsection1imagetag').style.display = 'block';
                    } else {
                        document.getElementById('editsection1imagetag').src = '';
                        document.getElementById('editsection1imagetag').style.display = 'none';
                    }

                    if (data?.metaimage) {
                        document.getElementById('editmetaimagetag').src = "{{ asset('') }}" + data?.metaimage;
                        document.getElementById('editmetaimagetag').style.display = 'block';
                    } else {
                        document.getElementById('editmetaimagetag').src = '';
                        document.getElementById('editmetaimagetag').style.display = 'none';
                    }

                    // Show the edit form
                    document.getElementById('edit-category-form-container').style.display = 'block';

                    // Update the form action to the correct URL
                    document.getElementById('edit-category-form').action = `/admin/practice-area-categories/${id}`;
                });
        }
    </script>
@endsection
