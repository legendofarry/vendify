<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- component -->
<div class="bg-sky-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
    <div class="w-3/4 h-screen hidden lg:block">
        <img src="<?php echo e(asset('images/homepage5.jpg')); ?>" alt="Placeholder Image" class="object-cover w-full h-full">
    </div>
    <!-- Right: Login Form -->
    <div class="lg:p-20 md:p-52 sm:20 p-8 w h-fit lg:w-1/2">
        <h1 class="text-2xl font-semibold mb-4">Create Product</h1>
        <form action="<?php echo e(route('product.create')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- Product Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Product Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-600">Description</label>
                <textarea id="description" name="description"
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" rows="2"></textarea>
            </div>

            <div class="flex justify-between">
                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-gray-600">Price</label>
                    <input type="number" id="price" name="price" step="0.01" required
                        class=" border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        style="height: 30px; width: 150px">
                </div>

                <!-- Quantity in Stock -->
                <div class="mb-4">
                    <label for="quantity_in_stock" class="block text-gray-600">Quantity in Stock</label>
                    <input type="number" id="quantity_in_stock" name="quantity_in_stock" min="0"
                        class=" border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        style="height: 30px; width: 150px">
                </div>
            </div>


            <!-- Category -->
            <div class="mb-4">
                <label for="category" class="block text-gray-600">Category</label>
                <input type="text" id="category" name="category" required
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label class="block text-gray-600">Status</label>
                <select name="status" id="status"
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>


            <div class="flex items-center gap-4">
                <!-- Coming Soon -->
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="coming_soon" value="1"
                            class="form-checkbox text-blue-500">
                        <span class="ml-2 text-gray-600">Coming Soon</span>
                    </label>
                </div>

                <!-- On Offer -->
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="on_offer" value="1"
                            class="form-checkbox text-blue-500">
                        <span class="ml-2 text-gray-600">On Offer</span>
                    </label>
                </div>

                <!-- Featured -->
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="featured" value="1"
                            class="form-checkbox text-blue-500">
                        <span class="ml-2 text-gray-600">Featured</span>
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label for="business_id" class="block text-gray-600">Select Business</label>
                <select id="business_id" name="business_id" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
                    <option value="">-- Select a Business --</option>
                    <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($business->id); ?>"><?php echo e($business->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Product Images -->
            <div class="mb-4">
                <label for="images" class="block text-gray-600">Product Images</label>
                <input type="file" id="images" name="images[]" multiple
                    class="w-fit border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-full">
                Add Product
            </button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var successMessage = document.getElementById('successMessage');

        if (successMessage) {
            // Delay redirect by 6 seconds
            setTimeout(function() {
                // Redirect to the dashboard
                window.location.href = "<?php echo e(route('dashboard')); ?>";
            }, 6000); // 6000ms = 6 seconds
        }
    });
</script><?php /**PATH C:\Users\karim\Documents\work\vendify\resources\views/product/create.blade.php ENDPATH**/ ?>