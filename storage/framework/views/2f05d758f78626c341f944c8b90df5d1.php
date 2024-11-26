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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Business Details')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <section class="hero">
        <div class="container">
            <div class="left-imgs">
                <img
                    class="main-img"
                    alt="business image"
                    src="path_to_your_business_image.jpg" />
                <div class="thumbnails">
                    <!-- Add thumbnail images here -->
                    <div class="thumb-img active-thumb">
                        <img alt="thumbnail" src="path_to_thumbnail.jpg" />
                    </div>
                    <div class="thumb-img">
                        <img alt="thumbnail" src="path_to_thumbnail.jpg" />
                    </div>
                </div>
            </div>

            <div class="right-text">
                <span class="heading-secondary"><?php echo e($product->name); ?></span>
                <h1 class="heading-primary"><?php echo e($product->name); ?> - Business Details</h1>
                <p class="description"><?php echo e($product->description); ?></p>

                <h2 class="price-discount"><?php echo e($product->address); ?></h2>

                <p class="price-original"><?php echo e($product->email); ?></p>
                <p class="price-original"><?php echo e($product->phone); ?></p>

                <div class="buttons">
                    <div class="btn-left">
                        <button class="minus">-</button>
                        <span class="cart-number">0</span>
                        <button class="plus">+</button>
                    </div>
                    <div class="btn-right">
                        <ion-icon name="cart-outline"></ion-icon>
                        <button class="add-cart">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<style>
    .hero {
        position: relative;
        padding: 10px 0;
        background: white;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        color: #1D2026;
    }

    .logo {
        width: 150px;
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .left-imgs {
        flex: 1;
        position: relative;
    }

    .main-img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .thumbnails {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .thumb-img img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }

    .thumb-img.active-thumb {
        border: 2px solid #FF7E1B;
    }

    .right-text {
        flex: 2;
        color: #1D2026;
        padding-left: 40px;
    }

    .heading-secondary {
        font-size: 1.2rem;
        font-weight: 700;
    }

    .heading-primary {
        font-size: 2.5rem;
        font-weight: 700;
        margin-top: 10px;
    }

    .description {
        font-size: 1rem;
        margin-top: 20px;
        color: #1D2026;
    }

    .price-discount {
        font-size: 1.8rem;
        color: #FF7E1B;
        margin-top: 15px;
    }

    .price-original {
        font-size: 1.4rem;
        text-decoration: line-through;
        color: #1D2026;
    }

    .buttons {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }

    .btn-left {
        display: flex;
        align-items: center;
    }

    .minus,
    .plus {
        background-color: #FF7E1B;
        border: none;
        color: #1D2026;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
    }

    .cart-number {
        font-size: 1.2rem;
        margin: 0 10px;
    }

    .btn-right {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .add-cart {
        background-color: #1D2026;
        border: none;
        color: white;
        padding: 15px 30px;
        font-size: 1.2rem;
        border-radius: 5px;
        cursor: pointer;
    }

    .add-cart:hover {
        background-color: #FF7E1B;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
                const sectionHero = document.querySelector(".hero");
                const mainImg = document.querySelector(".main-img");
                const classFloat = document.querySelector(".floating-img");
                const mainImgFloat = document.querySelector(".main-img-float");
                const thumbnailImgs = document.querySelectorAll(".thumb-img");
                const thumbnailImgsFloat = document.querySelectorAll(".thumb-img-float");
                const overlayC = document.querySelector(".overlay");
                const closeIcon = document.querySelector(".close-icon");
                const leftArrow = document.querySelector(".btn-swipe-left");
                const rightArrow = document.querySelector(".btn-swipe-right");
                const minusBtn = document.querySelector(".minus");
                const cartNumber = document.querySelector(".cart-number");
                const plusBtn = document.querySelector(".plus");

                let index = 0;
                let cartCount = 0;

                // He




                <
                !-- < body >
                    <
                    section class = "hero" >
                    <
                    div class = "overlay" > < /div>

                    <
                    header class = "header" >
                    <
                    div class = "logo" >
                    <
                    svg width = "138"
                height = "20"
                xmlns = "http://www.w3.org/2000/svg" >
                    <
                    path
                d = "M8.217 20c4.761 0 7.519-.753 7.519-4.606 0-3.4-3.38-4.172-6.66-4.682l-.56-.085-.279-.041-.35-.053c-2.7-.405-3.18-.788-3.18-1.471 0-.478.49-1.331 2.843-1.331 2.455 0 3.493.647 3.493 1.87v.134h4.281v-.133c0-2.389-1.35-5.238-7.774-5.238-5.952 0-7.201 2.584-7.201 4.752 0 3.097 2.763 4.086 7.223 4.675.21.028.433.054.659.081 1.669.197 3.172.42 3.172 1.585 0 1.01-1.615 1.222-3.298 1.222-2.797 0-3.784-.593-3.784-1.92v-.134H.002L0 14.926v.317c.008.79.118 1.913 1.057 2.862C2.303 19.362 4.712 20 8.217 20Zm13.21 0v-7.49c0-2.104.547-4.423 4.176-4.423 3.915 0 3.778 2.777 3.768 4.042V20h4.18v-7.768c0-2.264-.176-7.766-6.732-7.766-2.778 0-4.192.911-5.195 2.28h-.197V4.467H17.22V20h4.207Zm21.959 0c5.094 0 7.787-2.07 8.217-5.405H47.53c-.386 1.02-1.63 1.72-4.143 1.72-2.721 0-3.962-1.03-4.25-3.106h12.527c.24-2.13-.029-5.417-3.026-7.44v.005c-1.312-.915-3.056-1.465-5.251-1.465-5.24 0-8.336 2.772-8.336 7.845 0 5.17 3.02 7.846 8.336 7.846Zm4.099-9.574h-8.188c.486-1.574 1.764-2.431 4.089-2.431 2.994 0 3.755 1.267 4.099 2.431ZM70.499 20V4.457H66.29V6.74h-.176c-1.053-1.377-2.809-2.283-5.677-2.283-6.433 0-7.225 5.293-7.253 7.635v.137c0 2.092.732 7.771 7.241 7.771 2.914 0 4.684-.818 5.734-2.169h.131V20H70.5Zm-8.854-3.623c-3.996 0-4.447-3.032-4.447-4.148 0-1.21.426-4.148 4.455-4.148 3.631 0 4.374 2.044 4.374 4.148 0 2.35-.742 4.148-4.382 4.148ZM88.826 20l-6.529-9.045 6.588-6.488h-5.827l-6.836 6.756V0h-4.187v19.954h4.187V16.94l3.02-2.976L83.6 20h5.226Zm9.9 0c5.094 0 7.786-2.07 8.217-5.405h-4.074c-.387 1.02-1.63 1.72-4.143 1.72-2.721 0-3.962-1.03-4.25-3.106h12.527c.24-2.13-.029-5.417-3.026-7.44v.005c-1.312-.915-3.057-1.465-5.251-1.465-5.24 0-8.336 2.772-8.336 7.845 0 5.17 3.02 7.846 8.336 7.846Zm4.098-9.574h-8.187c.485-1.574 1.763-2.431 4.089-2.431 2.994 0 3.755 1.267 4.098 2.431ZM112.76 20v-6.97c0-2.103.931-4.542 4.05-4.542 1.33 0 2.393.236 2.785.346l.67-3.976c-.728-.16-1.626-.392-2.757-.392-2.665 0-3.622.794-4.486 2.282h-.262V4.466h-4.21V20h4.21Zm17.221 0c4.761 0 7.519-.753 7.519-4.606 0-3.4-3.38-4.172-6.66-4.682l-.56-.085-.279-.041-.349-.053c-2.701-.405-3.181-.788-3.181-1.471 0-.478.49-1.331 2.843-1.331 2.455 0 3.493.647 3.493 1.87v.134h4.282v-.133c0-2.389-1.35-5.238-7.775-5.238-5.952 0-7.201 2.584-7.201 4.752 0 3.097 2.763 4.086 7.224 4.675.21.028.432.054.658.081 1.669.197 3.172.42 3.172 1.585 0 1.01-1.615 1.222-3.298 1.222-2.796 0-3.784-.593-3.784-1.92v-.134h-4.319l-.001.301v.317c.008.79.117 1.913 1.056 2.862 1.246 1.257 3.655 1.895 7.16 1.895Z"
                fill = "#1D2026"
                fill - rule = "nonzero" / >
                    <
                    /svg> < /
                    div >

                    <
                    div class = "avatar" > < /div> < /
                    header >

                    <
                    div class = "container" >
                    <
                    div class = "floating-img" >
                    <
                    ion - icon class = "close-icon"
                name = "close-outline" > < /ion-icon>

                    <
                    button class = "btn-swipe btn-swipe-left" >
                    <
                    ion - icon name = "chevron-back-outline" > < /ion-icon> < /
                    button > <
                    div class = "left-imgs" >
                    <
                    img
                class = "main-img-float"
                alt = "product image"
                src = "images/image-product-1.jpg" / >
                    <
                    button class = "btn-swipe btn-swipe-right" >
                    <
                    ion - icon name = "chevron-forward-outline" > < /ion-icon> < /
                    button > <
                    div class = "thumbnails-float" >
                    <
                    div class = "thumb-img-float active-thumb" >
                    <
                    img
                alt = "image-thumbnails"
                src = "images/image-product-1-thumbnail.jpg" / >
                    <
                    /div> <
                div class = "thumb-img-float" >
                <
                img
                alt = "image-thumbnails"
                src = "images/image-product-2-thumbnail.jpg" / >
                    <
                    /div> <
                div class = "thumb-img-float" >
                <
                img
                alt = "image-thumbnails"
                src = "images/image-product-3-thumbnail.jpg" / >
                    <
                    /div> <
                div class = "thumb-img-float" >
                <
                img
                alt = "image-thumbnails"
                src = "images/image-product-4-thumbnail.jpg" / >
                    <
                    /div> < /
                    div > <
                    /div> < /
                    div > <
                    div class = "left-imgs" >
                    <
                    img
                class = "main-img"
                alt = "product image"
                src = "images/image-product-1.jpg" / >
                    <
                    div class = "thumbnails" >
                    <
                    div class = "thumb-img active-thumb" >
                    <
                    img
                alt = "image-thumbnails"
                src = "images/image-product-1-thumbnail.jpg" / >
                    <
                    /div> <
                div class = "thumb-img" >
                <
                img
                alt = "image-thumbnails"
                src = "images/image-product-2-thumbnail.jpg" / >
                    <
                    /div> <
                div class = "thumb-img" >
                <
                img
                alt = "image-thumbnails"
                src = "images/image-product-3-thumbnail.jpg" / >
                    <
                    /div> <
                div class = "thumb-img" >
                <
                img
                alt = "image-thumbnails"
                src = "images/image-product-4-thumbnail.jpg" / >
                    <
                    /div> < /
                    div > <
                    /div> <
                div class = "right-text" >
                <
                span class = "heading-secondary" > Sneaker Company < /span> <
                h1 class = "heading-primary" > Fall Limited Edition Sneakers < /h1> <
                p class = "description" >
                These low - profile sneakers are your perfect casual wear companion.
                Featuring a durable rubber outer sole, they’ ll withstand everything
                the weather can offer. <
                    /p>

                    <
                    h2 class = "price-discount" > $125 .00 < /h2>

                    <
                    p class = "price-original" > $250 .00 < /p> <
                div class = "buttons" >
                <
                div class = "btn-left" >
                <
                button class = "minus" >
                <
                svg
                width = "12"
                height = "4"
                xmlns = "http://www.w3.org/2000/svg"
                xmlns: xlink = "http://www.w3.org/1999/xlink" >
                    <
                    defs >
                    <
                    path
                d = "M11.357 3.332A.641.641 0 0 0 12 2.69V.643A.641.641 0 0 0 11.357 0H.643A.641.641 0 0 0 0 .643v2.046c0 .357.287.643.643.643h10.714Z"
                id = "a" / >
                    <
                    /defs> <
                use fill = "#FF7E1B"
                fill - rule = "nonzero"
                xlink: href = "#a" / >
                    <
                    /svg> < /
                    button > <
                    span class = "cart-number" > 0 < /span> <
                button class = "plus" >
                <
                svg
                width = "12"
                height = "12"
                xmlns = "http://www.w3.org/2000/svg"
                xmlns: xlink = "http://www.w3.org/1999/xlink" >
                    <
                    defs >
                    <
                    path
                d = "M12 7.023V4.977a.641.641 0 0 0-.643-.643h-3.69V.643A.641.641 0 0 0 7.022 0H4.977a.641.641 0 0 0-.643.643v3.69H.643A.641.641 0 0 0 0 4.978v2.046c0 .356.287.643.643.643h3.69v3.691c0 .356.288.643.644.643h2.046a.641.641 0 0 0 .643-.643v-3.69h3.691A.641.641 0 0 0 12 7.022Z"
                id = "b" / >
                    <
                    /defs> <
                use fill = "#FF7E1B"
                fill - rule = "nonzero"
                xlink: href = "#b" / >
                    <
                    /svg> < /
                    button > <
                    /div> <
                div class = "btn-right" >
                <
                ion - icon name = "cart-outline" > < /ion-icon> <
                button class = "add-cart" > Add to cart < /button> < /
                    div > <
                    /div> < /
                    div > <
                    /div> < /
                    section >

                    <
                    style >
                    @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;600;700&display=swap");

                *{
                    padding: 0;
                    margin: 0;
                    box - sizing: border - box;
                }

                html {
                    font - size: 65.5 % ;
                    font - family: "kumbh sans", sans - serif;
                    /* overflow: hidden; */
                }

                body {
                    position: relative;
                }

                .hero {
                    width: 100 vw;
                    min - width: 100 % ;
                    height: 100 vh;
                    min - height: 100 % ;
                    display: flex;
                    flex - direction: column;
                }

                .container {
                    /* background-color: red; */
                    width: 90 rem;
                    margin: auto auto;
                    display: grid;
                    grid - template - columns: repeat(2, 1 fr);
                    column - gap: 8 rem;
                    place - items: center;
                }

                /* ////////////////////// */
                /* HEADER */

                .header {
                    position: relative;
                    width: 100 rem;
                    margin: 0 auto;
                    height: 7 rem;
                    display: flex;
                    gap: 3 rem;
                    align - items: center;
                    border - bottom: 0.8 px solid rgba(182, 188, 200, 0.49);
                    /* margin-bottom: 1rem; */
                }

                .nav - list {
                        height: 60 % ;
                        list - style: none;
                        align - self: flex - end;
                        display: flex;
                        gap: 2 rem;
                        box - sizing: border - box;
                        align - items: center;
                        margin - left: 2 rem;
                    }

                    .list - ele {
                        height: 100 % ;
                        cursor: pointer;
                        color: hsl(219, 9 % , 45 % );
                        font - size: 1.1 rem;
                        font - weight: 500;
                        letter - spacing: 0.8 px;
                    }

                    .list - ele: hover,
                    .list - ele: active {
                        color: hsl(220, 13 % , 13 % );
                        border - bottom: 2 px solid hsl(26, 100 % , 55 % );
                    }

                    .nav - cart {
                        color: hsl(219, 9 % , 45 % );
                        font - size: 2.8 rem;
                        margin - left: auto;
                        cursor: pointer;
                    }

                    .nav - cart - after {
                        position: absolute;
                        display: none;
                        pointer - events: none;
                        top: 1.4 rem;
                        right: 8 rem;
                        font - size: 1 rem;
                        text - align: center;

                        height: 1.7 rem;
                        width: 1.7 rem;
                        color: rgb(255, 255, 255);
                        padding: 2 px 2 px;
                        border - radius: 50 % ;
                        background - color: hsl(26, 100 % , 55 % );
                    }

                    .nav - cart - after.show {
                        display: inline - block;
                    }

                    .nav - cart: hover,
                    .nav - cart: active {
                        color: hsl(220, 13 % , 13 % );
                    }

                    .avatar {
                        height: 50 px;
                        width: 50 px;
                        border: 1.5 px solid white;
                        background - image: url(https: //i.pravatar.cc/300);
                                background - size: cover;
                            }

                            .avatar: hover,
                        .avatar: active {
                                border: 1.5 px solid hsl(26, 100 % , 55 % );
                                border - radius: 50 % ;
                                cursor: pointer;
                            }

                            /* ///////////////////// */
                            /* CART */
                            .cart {
                                opacity: 0;
                                pointer - events: none;
                                visibility: hidden;

                                position: absolute;
                                top: 4 rem;
                                /* right: 16rem; */
                                right: 0;
                                height: 17 rem;
                                width: 26.5 rem;
                                background - color: rgb(255, 255, 255);
                                box - shadow: 0 1.6 rem 3.2 rem rgba(0, 0, 0, 0.1);
                                border - radius: 1 rem;
                                z - index: 5;
                                transition: all 0.2 s ease - out;
                            }

                            .cart - heading {
                                font - size: 1.1 rem;
                                font - weight: 700;
                                padding: 1.6 rem 1.8 rem;
                                border - bottom: 0.8 px solid rgba(182, 188, 200, 0.49);
                            }

                            .empty - cart {
                                display: none;
                                text - align: center;
                                margin - top: 20 % ;
                                font - size: 1.2 rem;
                                font - weight: 500;
                                color: hsl(219, 9 % , 45 % );
                            }

                            .cart.show {
                                top: 6.1 rem;
                                opacity: 1;
                                pointer - events: auto;
                                visibility: visible;
                            }

                            .empty - cart.show,
                        .cart - bottom.show {
                            display: block;
                        }

                        .cart - bottom {
                            display: none;
                            padding: 1.2 rem 1.6 rem;
                        }

                        .cart - info {
                            display: flex;
                            gap: 1 rem;
                            margin - bottom: 1.5 rem;
                            align - items: center;
                        }

                        .cart - image {
                            /* display: inline-block; */
                            height: 40 px;
                            width: 40 px;
                            border - radius: 5 px;
                        }

                        .cart - text {
                            color: hsl(219, 9 % , 45 % );
                            font - size: 1.1 rem;
                            font - weight: 500;
                            /* letter-spacing: 0.6px; */
                            line - height: 2;
                        }

                        .count - items {
                            display: inline - block;
                            width: 1 rem;
                        }

                        .current - price {
                            display: inline - block;
                            color: #000;
            font-weight: 700;
            width: 5rem;
            margin-left: 4px;
        }

        .delete {
            cursor: pointer;
            color: hsl(220, 14%, 75%);
            font-size: 1.5rem;
        }

        .delete:hover,
        .delete:active {
            color: hsl(220, 13%, 13%);
        }

        .btn-checkout {
            border: none;
            background-color: hsl(26, 100%, 55%);
            color: hsl(223, 64%, 98%);

            width: 96%;
            padding: 1rem 5rem;
            border-radius: 8px;
            transition: all 0.3s;
            cursor: pointer;
        }

        .btn-checkout:hover {
            background-color: # ffa45f;
                        }

                        /* /////////////////// */
                        /* BODY */

                        .heading - secondary {
                            display: block;
                            color: hsl(26, 100 % , 55 % );
                            font - weight: 700;
                            text - transform: uppercase;
                            font - size: 10 px;
                            letter - spacing: 1 px;
                            margin - bottom: 2 rem;
                        }

                        .heading - primary {
                            color: hsl(220, 13 % , 13 % );
                            font - size: 3.5 rem;
                            line - height: 1;
                            letter - spacing: 0.3 px;
                            margin - bottom: 3 rem;
                        }

                        .description {
                            color: hsl(219, 9 % , 45 % );
                            font - size: 12 px;
                            font - weight: 500;
                            letter - spacing: 0.8 px;
                            margin - bottom: 2 rem;
                            line - height: 1.5;
                        }

                        .price - discount {
                            /* color: red; */
                            font - size: 2.3 rem;
                            font - weight: 700;
                            position: relative;
                            margin - bottom: 5 px;
                        }

                        .price - discount::after {
                            position: absolute;
                            display: inline - block;
                            content: "50%";
                            top: 6 px;
                            left: 9.9 rem;

                            font - size: 1 rem;
                            font - weight: 700;
                            color: hsl(26, 100 % , 55 % );
                            background - color: #ffe5d1;
                            padding: 2 px 4 px;
                            border - radius: 2 px;
                        }

                        .price - original {
                            color: hsl(220, 14 % , 75 % );
                            font - size: 12 px;
                            font - weight: 500;
                            text - decoration: line - through;
                            margin - bottom: 3 rem;
                        }

                        .buttons {
                            display: flex;
                            gap: 2 rem;
                        }

                        .btn - left {
                            background - color: hsl(223, 64 % , 98 % );
                            display: flex;
                            align - items: center;
                            gap: 2.8 rem;
                            padding: 1 rem 1 rem;
                            border - radius: 8 px;
                        }

                        .plus,
                        .minus {
                            background: none;
                            border: none;
                            height: 1.8 rem;
                            width: 2 rem;

                            display: flex;
                            align - items: center;
                            justify - content: center;
                        }

                        .cart - number {
                            width: 10 px;
                            font - size: 1.5 rem;
                            font - weight: 500;
                        }

                        .cart - icon {
                            height: 1 rem;
                        }

                        .btn - right {
                            background - color: hsl(26, 100 % , 55 % );
                            display: flex;
                            align - items: center;
                            justify - content: center;
                            color: hsl(223, 64 % , 98 % );

                            padding: 1 rem 5 rem;
                            border - radius: 8 px;
                            gap: 1 rem;
                            box - shadow: 0 2.4 rem 3.6 rem rgba(255, 125, 26, 0.2);
                            transition: all 0.3 s;
                        }

                        .plus: hover,
                        .minus: hover,
                        .plus: active,
                        .minus: active {
                                opacity: 0.5;
                            }

                            .btn - right: hover,
                        .btn - right: active {
                                background - color: #ffa45f;
                            }

                            .add - cart {
                                background: none;
                                border: none;
                                color: inherit;

                                font - size: 1.3 rem;
                                font - weight: 600;
                            }

                            .plus,
                        .minus,
                        .btn - right,
                        .add - cart {
                            cursor: pointer;
                        }

                        .main - img {
                            height: 80 % ;
                            width: 85 % ;
                            border - radius: 10 px;
                            cursor: pointer;

                            display: block;
                            margin: 0 auto;
                            margin - bottom: 2 rem;
                        }

                        .thumbnails {
                            margin: 0 auto;
                            width: 80 % ;
                            display: flex;
                            justify - content: space - between;
                        }

                        .thumb - img {
                            height: auto;
                            width: 6 rem;
                            cursor: pointer;
                        }

                        .thumb - img img {
                            height: 100 % ;
                            width: 100 % ;
                            border - radius: 5 px;
                        }

                        .thumb - img img: hover {
                                opacity: 0.6;
                            }

                            .thumb - img.active - thumb img {
                                opacity: 0.3;
                            }

                            .thumb - img.active - thumb {
                                border: 2 px solid hsl(26, 100 % , 55 % );
                                border - radius: 7 px;
                            }

                            /* ///////////////// */
                            /* Floating image */

                            .overlay {
                                display: none;
                                position: absolute;
                                top: 0;
                                left: 0;
                                height: 100 vh;
                                min - height: 100 % ;
                                width: 100 vw;
                                min - width: 100 % ;
                                background - color: rgba(0, 0, 0, 0.7);
                                z - index: 5;
                            }

                            .overlay.activate {
                                display: block;
                            }

                            .floating - img {
                                position: absolute;
                                opacity: 0;
                                pointer - events: none;
                                visibility: hidden;
                                top: 0 % ;
                                left: 50 % ;
                                transform: translate(-50 % , -50 % );
                                height: auto;
                                width: 50 rem;
                                z - index: 10;
                                transition: all 0.3 s ease - in - out;
                            }

                            .floating - img.activate {
                                opacity: 1;
                                pointer - events: auto;
                                visibility: visible;
                                top: 51 % ;
                            }

                            /* ////////////////// */
                            /* FLOATING section */

                            .main - img - float {
                                height: auto;
                                width: 80 % ;
                                border - radius: 10 px;
                                /* cursor: pointer; */

                                display: block;
                                margin: 0 auto;
                                margin - bottom: 2 rem;
                            }

                            .thumbnails - float {
                                margin: 0 auto;
                                width: 80 % ;
                                display: flex;
                                justify - content: space - around;
                            }

                            .thumb - img - float {
                                height: auto;
                                width: 6 rem;
                                cursor: pointer;
                            }

                            .thumb - img - float img {
                                height: 100 % ;
                                width: 100 % ;
                                border - radius: 5 px;
                            }

                            .thumb - img - float img: hover {
                                opacity: 0.6;
                            }

                            .thumb - img - float.active - thumb img {
                                opacity: 0.6;
                                /* background-image: linear-gradient(white, white); */
                            }

                            .thumb - img - float.active - thumb {
                                border: 2 px solid hsl(26, 100 % , 55 % );
                                border - radius: 7 px;
                            }

                            /* /////////////////// */
                            /* BUTTONS */

                            .btn - swipe {
                                position: absolute;
                                height: 4 rem;
                                width: 4 rem;
                                background - color: hsl(0, 0 % , 100 % );
                                border: none;
                                cursor: pointer;
                                border - radius: 50 % ;
                            }

                            .btn - swipe ion - icon {
                                height: 50 % ;
                                width: 50 % ;
                            }

                            .btn - swipe.btn - swipe - left {
                                top: 40 % ;
                                left: 10 % ;
                                transform: translate(-50 % , -50 % );
                            }

                            .btn - swipe.btn - swipe - right {
                                top: 40 % ;
                                right: 10 % ;
                                transform: translate(50 % , -50 % );
                            }

                            .btn - swipe: hover,
                        .btn - swipe: active {
                                color: hsl(26, 100 % , 55 % );
                            }

                            .close - icon {
                                color: hsl(0, 0 % , 100 % );
                                height: 3.3 rem;
                                width: 3.3 rem;
                                cursor: pointer;

                                position: absolute;
                                top: -8 % ;
                                right: 8 % ;
                            }

                            .close - icon: hover,
                        .close - icon: active {
                                color: hsl(26, 100 % , 55 % );
                            } <
                            /style>

                            <
                            script >
                            const sectionHero = document.querySelector(".hero");
                        const mainImg = document.querySelector(".main-img");
                        // Float image
                        const classFloat = document.querySelector(".floating-img");
                        const mainImgFloat = document.querySelector(".main-img-float");
                        // thumbnail images
                        const thumbnailbImg = document.querySelectorAll(".thumb-img");
                        // thumbnail imgs floating
                        const thumbnailbImgFloat = document.querySelectorAll(".thumb-img-float");

                        const overlayC = document.querySelector(".overlay");
                        const closeIcon = document.querySelector(".close-icon");

                        // btns
                        const leftArrow = document.querySelector(".btn-swipe-left");
                        const rightArrow = document.querySelector(".btn-swipe-right");

                        const minusBtn = document.querySelector(".minus");
                        const cartNumber = document.querySelector(".cart-number");
                        const plusBtn = document.querySelector(".plus");

                        let index = 0;

                        mainImg.addEventListener("click", function() {
                            classFloat.classList.add("activate"); ////////
                            overlayC.classList.add("activate");

                            mainImgFloat.src = mainImg.src;
                            for (let j = 0; j < thumbnailbImgFloat.length; j++) {
                                thumbnailbImgFloat[j].classList.remove("active-thumb");
                                if (thumbnailbImg[j].classList.contains("active-thumb")) {
                                    thumbnailbImgFloat[j].classList.add("active-thumb");
                                    index = j;
                                }
                            }
                        });

                        const removeFloatImg = function() {
                            classFloat.classList.remove("activate"); //////
                            overlayC.classList.remove("activate");
                        };

                        closeIcon.addEventListener("click", function() {
                            removeFloatImg();
                        });

                        overlayC.addEventListener("click", function() {
                            removeFloatImg();
                        });

                        document.addEventListener("keydown", function(e) {
                            // console.log(e.key);
                            if (e.key === "Escape") {
                                removeFloatImg();
                            }
                        });

                        //////////////////////////////////
                        // changing images main

                        for (let i = 0; i < thumbnailbImg.length; i++) {
                            thumbnailbImg[i].addEventListener("click", function() {
                                for (let j = 0; j < thumbnailbImg.length; j++) {
                                    thumbnailbImg[j].classList.remove("active-thumb");
                                }
                                thumbnailbImg[i].classList.add("active-thumb");

                                // to change main image
                                const thumbnailTag = thumbnailbImg[i].getElementsByTagName("img");
                                // console.log(thumbnailTag[0], thumbnailTag[0].getAttribute("src"));
                                const thumbnailIndex = thumbnailTag[0].getAttribute("src")[21];

                                mainImg.src = `images/image-product-${thumbnailIndex}.jpg`;
                            });
                        }

                        ////////////////////////////////
                        // changing images Floating
                        // console.log(thumbnailbImgFloat);
                        for (let i = 0; i < thumbnailbImgFloat.length; i++) {
                            thumbnailbImgFloat[i].addEventListener("click", function() {
                                for (let j = 0; j < thumbnailbImgFloat.length; j++) {
                                    thumbnailbImgFloat[j].classList.remove("active-thumb");
                                }
                                thumbnailbImgFloat[i].classList.add("active-thumb");
                                index = i;

                                const thumbnailFloatTag = thumbnailbImgFloat[i].getElementsByTagName("img");

                                const thumbnailbFloatIndex = thumbnailFloatTag[0].getAttribute("src")[21];

                                mainImgFloat.src = `images/image-product-${thumbnailbFloatIndex}.jpg`;
                                // mainImgFloat.src = `images/image-product-${1}.jpg`;
                            });
                        }

                        // for clicking buttons
                        leftArrow.addEventListener("click", function() {
                            if (index >= 1) {
                                for (const key of thumbnailbImgFloat) {
                                    key.classList.remove("active-thumb");
                                }
                                index -= 1;
                                mainImgFloat.src = `images/image-product-${index + 1}.jpg`;
                                thumbnailbImgFloat[index].classList.add("active-thumb");
                            }
                        });

                        rightArrow.addEventListener("click", function() {
                            if (index <= 2) {
                                for (const key of thumbnailbImgFloat) {
                                    key.classList.remove("active-thumb");
                                }
                                index += 1;
                                mainImgFloat.src = `images/image-product-${index + 1}.jpg`;
                                thumbnailbImgFloat[index].classList.add("active-thumb");
                            }
                        });

                        // console.log(minusBtn);
                        // console.log(plusBtn);
                        // console.log(cartNumber.textContent);
                        let cartCount = 0;

                        minusBtn.addEventListener("click", function() {
                            if (cartCount >= 1) {
                                cartCount -= 1;
                                cartNumber.textContent = cartCount;
                            }
                        });

                        plusBtn.addEventListener("click", function() {
                            if (cartCount <= 9) {
                                cartCount += 1;
                                cartNumber.textContent = cartCount;
                            }
                        });

                        /////////////////
                        // Working of CART
                        const navCart = document.querySelector(".nav-cart");
                        const cartBox = document.querySelector(".cart");
                        const emptyCart = document.querySelector(".empty-cart");
                        const filledCart = document.querySelector(".cart-bottom");
                        const sectionContainer = document.querySelector(".container");

                        const btnLeft = document.querySelector(".btn-left");
                        const btnRight = document.querySelector(".btn-right");
                        const numbercart = document.querySelector(".count-items");
                        const currPrice = document.querySelector(".current-price");
                        const deleteIcon = document.querySelector(".delete");
                        const navAfter = document.querySelector(".nav-cart-after");

                        let itemsCount = 0;

                        navCart.addEventListener("click", function() {
                            cartBox.classList.toggle("show");
                        });

                        document.addEventListener("keydown", function(e) {
                            if (e.key === "Escape") cartBox.classList.remove("show");
                        });

                        btnRight.addEventListener("click", function() {
                            if (cartCount > 0 && itemsCount + cartCount <= 20) {
                                itemsCount += cartCount;
                                emptyCart.classList.remove("show");
                                filledCart.classList.add("show");
                                currPrice.textContent = `$${itemsCount * 125}.00`;
                                numbercart.textContent = itemsCount;
                                navAfter.classList.add("show");
                                navAfter.textContent = itemsCount;
                                // cartIcon.classList.add("show");
                            }

                            if (itemsCount === 20) {
                                navAfter.textContent = "full";
                            }
                        });

                        deleteIcon.addEventListener("click", function() {
                            emptyCart.classList.add("show");
                            filledCart.classList.remove("show");
                            itemsCount = 0;
                            navAfter.classList.remove("show");
                        });

                        document.body.addEventListener("click", function(e) {
                            if (!cartBox.classList.contains("show")) {
                                return;
                            }

                            const arr = e.path;
                            for (let i = 0; i < arr.length; i++) {
                                if (
                                    btnRight === arr[i] ||
                                    btnLeft === arr[i] ||
                                    navCart === arr[i] ||
                                    cartBox === arr[i]
                                ) {
                                    return;
                                }
                            }

                            cartBox.classList.remove("show");
                        });
</script>
</body> --><?php /**PATH C:\Users\karim\Documents\work\vendify\resources\views/service/show.blade.php ENDPATH**/ ?>