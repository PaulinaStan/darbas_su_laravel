@extends('main')
@section('content')
    @foreach($products as $product)
        {{$product->name}}<br>
            <form method="post" action="/cart/add">
                @csrf
                <input type="hidden" name="product_id">
                <button type="submit">Add to Cart</button>
            </form>

                <div class="py-6 lg:px-20 md:px-6 px-4">
                    <p class="font-normal text-sm leading-3 text-gray-600 dark:text-gray-300">Home / TOP</p>
                    <hr class="w-full bg-gray-200 my-6" />

                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3 justify-center items-center text-gray-800 dark:text-white">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1.svg" alt="toggler">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-5-svg1dark.svg
                    </div>

      <div class="2xl:container 2xl:mx-auto">
                    <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
                        <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800"></p>
                        <img
                            src="https://ervera.lt/Sporto-sal%C4%97-sporto-%C4%AFranga-smith-sporto-reikmenys/62338_pic-wp-upload/1.jpeg"
                            width="150"
                            alt="A work table with house plants"
                            role="img"
                            class="w-full h-full hidden lg:block"
                        />
                        <div class="2xl:container 2xl:mx-auto">
                            <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
                                <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800"></p>
                                <img
                                    src="https://balduturgus.lt/wp-content/uploads/2017/09/KASHMIR-svetaines-baldai.jpg"
                                    width="150"
                                    alt="A work table with house plants"
                                    role="img"
                                    class="hidden sm:block lg:hidden w-full h-full"
                                />

                                <div class="2xl:container 2xl:mx-auto">
                                    <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
                                        <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800"></p>
                                        <img
                                            src="https://cdn.autodoc.de/uploads/custom-catalog/atd/groups/230x155/301.png"
                                            width="150"
                                            alt="A work table with house plants"
                                            role="img"
                                            class="hidden sm:block lg:hidden w-full h-full"
                                        />

                                        <div class="2xl:container 2xl:mx-auto">
                                            <div class="bg-gray-50 dark:bg-gray-900 text-center lg:py-10 md:py-8 py-6">
                                                <p class="w-10/12 mx-auto md:w-full font-semibold lg:text-4xl text-3xl lg:leading-9 md:leading-7 dark:text-white leading-9 text-center text-gray-800"></p>

                                                <img
                                                    src="https://dellshop.lt/img/c/23.jpg"
                                                    width="200"
                                                    alt="A work table with house plants"
                                                    role="img" class="sm:hidden w-full h-full"
                                                />
                                            </div>
    @endforeach
        @endsection









