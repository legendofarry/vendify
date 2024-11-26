<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 

        <style>
            .filter-section {
                margin-bottom: 20px;
                margin-top: 10px;
                margin-right: 20px;
                margin-left: 20px;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }

            .filter-section label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .filter-section #input select {
                width: 100%;
                padding: 5px;
                margin-bottom: 10px;
            }

            .results-section {
                margin: 20px 0;
            }

            .item-card {
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px;
                margin-bottom: 10px;
                background-color: #f9f9f9;
            }



            .ui-btn {
                --btn-default-bg: rgb(41, 41, 41);
                --btn-padding: 7px 20px;
                --btn-hover-bg: rgb(51, 51, 51);
                --btn-transition: .3s;
                --btn-letter-spacing: .1rem;
                --btn-animation-duration: 1.2s;
                --btn-shadow-color: rgba(0, 0, 0, 0.137);
                --btn-shadow: 0 2px 10px 0 var(--btn-shadow-color);
                --hover-btn-color: #FAC921;
                --default-btn-color: #fff;
                --font-size: 16px;
                /* 👆 this field should not be empty */
                --font-weight: 600;
                --font-family: Menlo, Roboto Mono, monospace;
                /* 👆 this field should not be empty */
            }

            /* button settings 👆 */

            .ui-btn {
                box-sizing: border-box;
                padding: var(--btn-padding);
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--default-btn-color);
                font: var(--font-weight) var(--font-size) var(--font-family);
                background: var(--btn-default-bg);
                border: none;
                cursor: pointer;
                transition: var(--btn-transition);
                border-radius: 5px;
                overflow: hidden;
                box-shadow: var(--btn-shadow);
            }

            .ui-btn span {
                letter-spacing: var(--btn-letter-spacing);
                transition: var(--btn-transition);
                box-sizing: border-box;
                position: relative;
                background: inherit;
            }

            .ui-btn span::before {
                box-sizing: border-box;
                position: absolute;
                content: "";
                background: inherit;
            }

            .ui-btn:hover,
            .ui-btn:focus {
                background: var(--btn-hover-bg);
            }

            .ui-btn:hover span,
            .ui-btn:focus span {
                color: var(--hover-btn-color);
            }

            .ui-btn:hover span::before,
            .ui-btn:focus span::before {
                animation: chitchat linear both var(--btn-animation-duration);
            }

            @keyframes chitchat {
                0% {
                    content: "#";
                }

                5% {
                    content: ".";
                }

                10% {
                    content: "^{";
                }

                15% {
                    content: "-!";
                }

                20% {
                    content: "#$_";
                }

                25% {
                    content: "№:0";
                }

                30% {
                    content: "#{+.";
                }

                35% {
                    content: "@}-?";
                }

                40% {
                    content: "?{4@%";
                }

                45% {
                    content: "=.,^!";
                }

                50% {
                    content: "?2@%";
                }

                55% {
                    content: "\;1}]";
                }

                60% {
                    content: "?{%:%";
                    right: 0;
                }

                65% {
                    content: "|{f[4";
                    right: 0;
                }

                70% {
                    content: "{4%0%";
                    right: 0;
                }

                75% {
                    content: "'1_0<";
                    right: 0;
                }

                80% {
                    content: "{0%";
                    right: 0;
                }

                85% {
                    content: "]>'";
                    right: 0;
                }

                90% {
                    content: "4";
                    right: 0;
                }

                95% {
                    content: "2";
                    right: 0;
                }

                100% {
                    content: "";
                    right: 0;
                }
            }


            .carousel-item img {
                object-fit: cover;
                width: 100%;
                height: 100vh;
            }

            .f-b-card img {
                object-fit: cover;
                width: 100%;
                height: fit-content;
            }

            .f-t-biz-div {
                display: flex;
                width: 85%;
                height: fit-content;
                margin: 0 auto;
                gap: 20px;
            }
        </style>

        <!-- Main modal -->
        <div id="static-modal"
            data-modal-backdrop="static"
            tabindex="-1"
            aria-hidden="true"
            class="hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full">
            <div
                class="relative p-4 w-[90vw] h-[90vh]"
                style="max-width: 100%; max-height: 100%;">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 w-full h-full flex flex-col">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Static modal
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="static-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="flex-grow p-4 md:p-5 overflow-auto">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            This website was created by Arrison , from KAHAWA WEST for KAHAWA WEST-IANS. The website is just a fun project , built for selling and buying stuff! You've got a business , just sign up and show what you are selling and leave your contacts. Still an ongoing project , placing orders coming soon!..Have fun with it and feel free to DONATE , MPESA +254748510136.
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button id="accept" data-modal-hide="static-modal" type="button" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slideshow Section -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 60vh">
                <div class="carousel-item active">
                    <img src="<?php echo e(asset('images/homepage3.jpg')); ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Welcome to Our Marketplace</h5>
                        <p>Browse featured products and services from top businesses.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo e(asset('images/homepage4.jpg')); ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Shop & Support Local Vendors</h5>
                        <p>Explore amazing products and services from our vendors.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo e(asset('images/homepage9.jpg')); ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Exclusive Deals</h5>
                        <p>Find limited-time offers and special promotions.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Featured Products Section -->
        <div class="container my-5">
            <h3 class="text-center mb-4">
                <span class="mb-4 self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Featured Products</span>
            </h3>
            <div class="row">
                <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <?php $__currentLoopData = explode(',', $product->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset('storage/' . $image)); ?>" class="card-img-top" alt="<?php echo e($product->name); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->name); ?></h5>
                            <p class="card-text"><?php echo e(Str::limit($product->description, 100)); ?></p>
                            <p class="card-text"><strong>$<?php echo e(number_format($product->price, 2)); ?></strong></p>
                            <a href="<?php echo e(route('product.show', $product->id)); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Featured Businesses Section -->
        <div class="text-center">
            <span class="mb-4 self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Featured Businesses</span>
            <div class="f-t-biz-div">
                <?php $__currentLoopData = $featuredBusinesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="f-b-card bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="width: 35%;">
                    <?php $__currentLoopData = explode(',', $business->images); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('storage/' . $image)); ?>" class="card-img-top" alt="<?php echo e($business->name); ?>">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="px-3 pb-3">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo e($business->name); ?></h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            </div>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3"><?php echo e($business->address); ?></span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"><?php echo e($business->phone_number); ?></span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- Featured Services Section -->
        <div class="container my-5">
            <h3 class="text-center mb-4">
                <span class="mb-4 self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Featured Services</span>
            </h3>
            <div class="row">
                <?php $__currentLoopData = $featuredServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($service->name); ?></h5>
                            <p class="card-text"><?php echo e(Str::limit($service->description, 100)); ?></p>
                            <p class="card-text"><strong>$<?php echo e(number_format($service->price, 2)); ?></strong></p>
                            <a href="<?php echo e(route('service.show', $service->id)); ?>" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- View All Businesses -->
        <div class="container my-5" style="">
            <form style="" action="<?php echo e(route('business.viewAll')); ?>" method="GET">
                <button class=" ui-btn" id="filterButton">
                    <span>
                        View All Businesses
                    </span>
                </button>
            </form>
        </div>

     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\Users\karim\Documents\work\vendify\resources\views/home.blade.php ENDPATH**/ ?>