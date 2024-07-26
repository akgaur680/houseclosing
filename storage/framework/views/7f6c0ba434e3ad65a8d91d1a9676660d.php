<?php $__env->startSection('content'); ?>
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
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->headertitle); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm"
                                                onclick="editCategory(<?php echo e($category->id); ?>)">Edit</button>
                                            <form
                                                action="<?php echo e(route('admin.practice-area-categories.destroy', $category->id)); ?>"
                                                method="POST" style="display:inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <!-- Edit Form (hidden by default) -->
                        <div id="edit-category-form-container" class="mt-5" style="display:none;">
                            <hr>
                            <h2 class="text-center my-3">Edit Practice Area Category</h2>
                            <form id="edit-category-form" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <!-- Header Title -->
                                <div class="form-group">
                                    <label for="editheadertitle">Header Title</label>
                                    <input type="text" class="form-control" id="editheadertitle" name="headertitle"
                                        placeholder="Header Title" required>
                                    <?php $__errorArgs = ['headertitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Header Description -->
                                <div class="form-group">
                                    <label for="editheaderdescription">Header Description</label>
                                    <textarea class="form-control" id="editheaderdescription" name="headerdescription" placeholder="Header Description"></textarea>
                                    <?php $__errorArgs = ['headerdescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Slug -->
                                <div class="form-group">
                                    <label for="editslug">Slug</label>
                                    <textarea class="form-control" id="editslug" name="slug" placeholder="Slug"></textarea>
                                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>


                                <!-- Header Description -->
                                <div class="form-group">
                                    <label for="editheaderbgimage">Header Background Image</label>
                                    <input type="file" class="form-control" id="editheaderbgimage" name="headerbgimage">
                                    <img src="" alt="" style="height:100px;width:auto" id="editheaderbgimagetag">

                                    <?php $__errorArgs = ['headerbgimage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Title -->
                                <div class="form-group">
                                    <label for="editsection1title">Section 1 Title</label>
                                    <input type="text" class="form-control" id="editsection1title" name="section1title"
                                        placeholder="Section 1 Title">
                                    <?php $__errorArgs = ['section1title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Description -->
                                <div class="form-group">
                                    <label for="editsection1description">Section 1 Description</label>
                                    <textarea class="form-control" id="editsection1description" name="section1description"
                                        placeholder="Section 1 Description"></textarea>
                                    <?php $__errorArgs = ['section1description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="form-group">
                                    <label for="editsection1image">Section 1 Image</label>
                                    <input type="file" class="form-control" id="editsection1image" name="section1image">
                                    <img src="" alt="" id="editsection1imagetag" style="height:100px;width:auto" >
                                    <?php $__errorArgs = ['section1image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Button Label -->
                                <div class="form-group">
                                    <label for="editsection1buttonlabel">Section 1 Button Label</label>
                                    <input type="text" class="form-control" id="editsection1buttonlabel"
                                        name="section1buttonlabel" placeholder="Section 1 Button Label">
                                    <?php $__errorArgs = ['section1buttonlabel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Button Link -->
                                <div class="form-group">
                                    <label for="editsection1buttonlink">Section 1 Button Link</label>
                                    <input type="text" class="form-control" id="editsection1buttonlink"
                                        name="section1buttonlink" placeholder="Section 1 Button Link">
                                    <?php $__errorArgs = ['section1buttonlink'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 2 Title -->
                                <div class="form-group">
                                    <label for="editsection2title">Section 2 Title</label>
                                    <input type="text" class="form-control" id="editsection2title" name="section2title"
                                        placeholder="Section 2 Title">
                                    <?php $__errorArgs = ['section2title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 2 Description -->
                                <div class="form-group">
                                    <label for="editsection2description">Section 2 Description</label>
                                    <textarea class="form-control" id="editsection2description" name="section2description"
                                        placeholder="Section 2 Description"></textarea>
                                    <?php $__errorArgs = ['section2description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Title -->
                                <div class="form-group">
                                    <label for="editmetatitle">Meta Title</label>
                                    <input type="text" class="form-control" id="editmetatitle" name="metatitle"
                                        placeholder="Meta Title">
                                    <?php $__errorArgs = ['metatitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Description -->
                                <div class="form-group">
                                    <label for="editmetadescription">Meta Description</label>
                                    <textarea class="form-control" id="editmetadescription" name="metadescription" placeholder="Meta Description"></textarea>
                                    <?php $__errorArgs = ['metadescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Tags -->
                                <div class="form-group">
                                    <label for="editmetatags">Meta Tags</label>
                                    <input type="text" class="form-control" id="editmetatags" name="metatags"
                                        placeholder="Meta Tags">
                                    <?php $__errorArgs = ['metatags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Image -->
                                <div class="form-group">
                                    <label for="editmetaimage">Meta Image</label>
                                    <input type="file" class="form-control" id="editmetaimage" name="metaimage">
                                    <img src="" alt="" id="editmetaimagetag" style="height:100px;width:auto" >

                                    <?php $__errorArgs = ['metaimage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-gradient-primary me-2">Update Category</button>
                            </form>
                        </div>

                        
                        <div id="add-category-form-container" class="mt-5" style="display: none;">
                            <hr>
                            <h2 class="text-center my-3">Add New Practice Area Category</h2>
                            <form id="create-category-form" action="<?php echo e(route('admin.practice-area-categories.store')); ?>"
                                method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="practice_area_id" value="<?php echo e($practiceArea->id); ?>">

                                <!-- Header Title -->
                                <div class="form-group">
                                    <label for="headertitle">Header Title</label>
                                    <input type="text" class="form-control" id="headertitle" name="headertitle"
                                        placeholder="Header Title" required>
                                    <?php $__errorArgs = ['headertitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Header Description -->
                                <div class="form-group">
                                    <label for="headerdescription">Header Description</label>
                                    <textarea class="form-control" id="headerdescription" name="headerdescription" placeholder="Header Description"></textarea>
                                    <?php $__errorArgs = ['headerdescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Slug -->
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <textarea class="form-control" id="slug" name="slug" placeholder="Slug"></textarea>
                                    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Header Background Image -->
                                <div class="form-group">
                                    <label for="headerbgimage">Header Background Image</label>
                                    <input type="file" class="form-control" id="headerbgimage" name="headerbgimage">
                                    <?php $__errorArgs = ['headerbgimage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Title -->
                                <div class="form-group">
                                    <label for="section1title">Section 1 Title</label>
                                    <input type="text" class="form-control" id="section1title" name="section1title"
                                        placeholder="Section 1 Title">
                                    <?php $__errorArgs = ['section1title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Description -->
                                <div class="form-group">
                                    <label for="section1description">Section 1 Description</label>
                                    <textarea class="form-control" id="section1description" name="section1description"
                                        placeholder="Section 1 Description"></textarea>
                                    <?php $__errorArgs = ['section1description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Image -->
                                <div class="form-group">
                                    <label for="section1image">Section 1 Image</label>
                                    <input type="file" class="form-control" id="section1image" name="section1image">
                                    <?php $__errorArgs = ['section1image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Button Label -->
                                <div class="form-group">
                                    <label for="section1buttonlabel">Section 1 Button Label</label>
                                    <input type="text" class="form-control" id="section1buttonlabel"
                                        name="section1buttonlabel" placeholder="Section 1 Button Label">
                                    <?php $__errorArgs = ['section1buttonlabel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 1 Button Link -->
                                <div class="form-group">
                                    <label for="section1buttonlink">Section 1 Button Link</label>
                                    <input type="text" class="form-control" id="section1buttonlink"
                                        name="section1buttonlink" placeholder="Section 1 Button Link">
                                    <?php $__errorArgs = ['section1buttonlink'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 2 Title -->
                                <div class="form-group">
                                    <label for="section2title">Section 2 Title</label>
                                    <input type="text" class="form-control" id="section2title" name="section2title"
                                        placeholder="Section 2 Title">
                                    <?php $__errorArgs = ['section2title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Section 2 Description -->
                                <div class="form-group">
                                    <label for="section2description">Section 2 Description</label>
                                    <textarea class="form-control" id="section2description" name="section2description"
                                        placeholder="Section 2 Description"></textarea>
                                    <?php $__errorArgs = ['section2description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Title -->
                                <div class="form-group">
                                    <label for="metatitle">Meta Title</label>
                                    <input type="text" class="form-control" id="metatitle" name="metatitle"
                                        placeholder="Meta Title">
                                    <?php $__errorArgs = ['metatitle'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Description -->
                                <div class="form-group">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" name="metadescription" placeholder="Meta Description"></textarea>
                                    <?php $__errorArgs = ['metadescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Tags -->
                                <div class="form-group">
                                    <label for="metatags">Meta Tags</label>
                                    <input type="text" class="form-control" id="metatags" name="metatags"
                                        placeholder="Meta Tags">
                                    <?php $__errorArgs = ['metatags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <!-- Meta Image -->
                                <div class="form-group">
                                    <label for="metaimage">Meta Image</label>
                                    <input type="file" class="form-control" id="metaimage" name="metaimage">
                                    <?php $__errorArgs = ['metaimage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        document.getElementById('editheaderbgimagetag').src = "<?php echo e(asset('')); ?>"+data?.headerbgimage;
                        document.getElementById('editheaderbgimagetag').style.display = 'block';
                    } else {
                        document.getElementById('editheaderbgimagetag').src = '';
                        document.getElementById('editheaderbgimagetag').style.display = 'none';
                    }

                    if (data?.section1image) {
                        document.getElementById('editsection1imagetag').src = "<?php echo e(asset('')); ?>" + data?.section1image;
                        document.getElementById('editsection1imagetag').style.display = 'block';
                    } else {
                        document.getElementById('editsection1imagetag').src = '';
                        document.getElementById('editsection1imagetag').style.display = 'none';
                    }

                    if (data?.metaimage) {
                        document.getElementById('editmetaimagetag').src = "<?php echo e(asset('')); ?>" + data?.metaimage;
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\houseclosing\resources\views\admin\practice_area_categories.blade.php ENDPATH**/ ?>