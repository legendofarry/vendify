<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Add this in the head tag -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />



    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page Heading -->
        <?php if(isset($header)): ?>
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </div>
        </header>
        <?php endif; ?>

        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>

    <!-- Footer Section -->
    <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-3 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/home" class="flex items-center mb-2 sm:mb-0 space-x-3 rtl:space-x-reverse gap-2">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-4" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">K MARKET</span>
                </a>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">KAHAWA WEST MARKETPLACE</a>. All Rights Reserved.</span>
        </div>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    function myFunction() {
        var x = document.getElementById("filterSection");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function resetFilter() {
        document.getElementById('resetFilters').addEventListener('click', () => {
            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = '<p>Please apply filters to see results.</p>';
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const isAccepted = localStorage.getItem('modalAccepted');
        if (!isAccepted) {
            // Show the modal if not accepted
            document.getElementById('static-modal').classList.remove('hidden');
        }
    });

    // Add event listener to the accept button
    const acceptButton = document.getElementById('accept');
    acceptButton.addEventListener('click', () => {
        // Mark as accepted in localStorage
        localStorage.setItem('modalAccepted', 'true');

        // Hide the modal
        document.getElementById('static-modal').classList.add('hidden');
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</html><?php /**PATH C:\Users\karim\Documents\work\vendify\resources\views/layouts/app.blade.php ENDPATH**/ ?>