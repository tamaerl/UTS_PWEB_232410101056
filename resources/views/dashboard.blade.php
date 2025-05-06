@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="bg-pink-50 shadow-md rounded-xl p-6 border border-pink-100">
        <h2 class="text-3xl font-serif mb-3 text-center text-pink-900">🌸 Welcome, {{ $username ?? 'Guest' }}! 🌸</h2>

        <div class="bg-white p-5 rounded-lg shadow-inner border border-pink-100">
            <h3 class="text-2xl font-serif text-pink-600 mb-2">- Commission List -</h3>
            <p class="text-gray-600 mb-4">Please read the ToS before ordering my commission! :D</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div
                    x-data="{ open: false, current: 0, images: ['https://tamaerl.carrd.co/assets/images/gallery10/e8cf5c90_original.jpg?v=d773e214', 'https://tamaerl.carrd.co/assets/images/gallery10/63ea121d_original.jpg?v=d773e214', 'https://tamaerl.carrd.co/assets/images/gallery10/d9c5183a_original.jpg?v=d773e214'] }"
                >
                    <div @click="open = true" class="bg-pink-100 p-4 rounded-lg shadow hover:bg-sky-100 hover:shadow-lg transition-all duration-200 cursor-pointer">
                        <img :src="images[0]" alt="Chibi Art" class="rounded-md mb-3 h-48 w-full object-contain bg-white">
                        <h4 class="text-xl font-serif text-pink-800 mb-1">Chibi Art</h4>
                        <p class="text-gray-700 text-sm mb-2">Chibi art with very minimum to medium details. Price varies depending on the style.</p>
                        <p class="text-pink-700 font-sans">Start from $15</p>
                    </div>

                    <div
                        x-show="open"
                        class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
                        x-transition
                    >
                        <div class="bg-white p-4 rounded-lg shadow-lg max-w-3xl w-full relative" @click.away="open = false">
                            <div class="w-full h-[500px] flex items-center justify-center bg-gray-100 rounded">
                                <img :src="images[current]" class="max-h-full max-w-full object-contain" alt="Slideshow">
                            </div>

                            <div class="flex justify-between mt-4">
                                <button @click="current = (current === 0 ? images.length - 1 : current - 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-sky-300">
                                    ← Prev
                                </button>
                                <button @click="current = (current === images.length - 1 ? 0 : current + 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-sky-300">
                                    Next →
                                </button>
                            </div>

                            <button @click="open = false" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-2xl">
                                &times;
                            </button>
                        </div>
                    </div>
                </div>


                <div
                    x-data="{ open: false, current: 0, images: ['https://tamaerl.carrd.co/assets/images/gallery02/424692e9_original.jpg?v=d773e214', 'https://tamaerl.carrd.co/assets/images/gallery02/a6219ef9_original.jpg?v=d773e214', 'https://tamaerl.carrd.co/assets/images/gallery02/c7bc65cf_original.jpg?v=d773e214', 'https://tamaerl.carrd.co/assets/images/gallery02/6d201e1d_original.jpg?v=d773e214'] }"
                >
                    <div @click="open = true" class="bg-pink-100 p-4 rounded-lg shadow hover:bg-sky-100 hover:shadow-lg transition-all duration-200 cursor-pointer">
                        <img :src="images[0]" alt="Rendered Art" class="rounded-md mb-3 h-48 w-full object-contain bg-white">
                        <h4 class="text-xl font-serif text-pink-800 mb-1">Rendered Art</h4>
                        <p class="text-gray-700 text-sm mb-2">Fully rendered art, with plain or simple background for the base price.</p>
                        <p class="text-pink-700 font-sans">Start from $40</p>
                    </div>

                    <div
                        x-show="open"
                        class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
                        x-transition
                    >
                        <div class="bg-white p-4 rounded-lg shadow-lg max-w-3xl w-full relative" @click.away="open = false">
                            <div class="w-full h-[500px] flex items-center justify-center bg-gray-100 rounded">
                                <img :src="images[current]" class="max-h-full max-w-full object-contain" alt="Slideshow">
                            </div>

                            <div class="flex justify-between mt-4">
                                <button @click="current = (current === 0 ? images.length - 1 : current - 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-sky-300">
                                    ← Prev
                                </button>
                                <button @click="current = (current === images.length - 1 ? 0 : current + 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-sky-300">
                                    Next →
                                </button>
                            </div>

                            <button @click="open = false" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-2xl">
                                &times;
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    x-data="{ open: false, current: 0, images: ['https://tamaerl.carrd.co/assets/images/gallery03/0baaa0b5_original.jpg?v=d773e214','https://tamaerl.carrd.co/assets/images/gallery03/d199c49b_original.jpg?v=d773e214','https://tamaerl.carrd.co/assets/images/gallery03/b7c14054_original.jpg?v=d773e214','https://tamaerl.carrd.co/assets/images/gallery03/0e54551e_original.jpg?v=d773e214' ] }"
                >
                    <div @click="open = true" class="bg-pink-100 p-4 rounded-lg shadow hover:bg-sky-100 hover:shadow-lg transition-all duration-200 cursor-pointer">
                        <img :src="images[0]" alt="Colored Sketch" class="rounded-md mb-3 h-48 w-full object-contain bg-white">
                        <h4 class="text-xl font-serif text-pink-800 mb-1">Colored Sketch</h4>
                        <p class="text-gray-700 text-sm mb-2">Sketchy but still carefully colored art. Mainly use soft colored palletes.</p>
                        <p class="text-pink-700 font-sans">Start from $25</p>
                    </div>

                    <div
                        x-show="open"
                        class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
                        x-transition
                    >
                        <div class="bg-white p-4 rounded-lg shadow-lg max-w-3xl w-full relative" @click.away="open = false">
                            <div class="w-full h-[500px] flex items-center justify-center bg-gray-100 rounded">
                                <img :src="images[current]" class="max-h-full max-w-full object-contain" alt="Slideshow">
                            </div>

                            <div class="flex justify-between mt-4">
                                <button @click="current = (current === 0 ? images.length - 1 : current - 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-pink-300">
                                    ← Prev
                                </button>
                                <button @click="current = (current === images.length - 1 ? 0 : current + 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-pink-300">
                                    Next →
                                </button>
                            </div>

                            <button @click="open = false" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-2xl">
                                &times;
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    x-data="{ open: false, current: 0, images: ['https://tamaerl.carrd.co/assets/images/gallery02/ab8b00c7_original.jpg?v=d773e214', 'https://tamaerl.carrd.co/assets/images/gallery02/aaf4621c_original.jpg?v=d773e214','https://tamaerl.carrd.co/assets/images/gallery04/cf5592e7_original.jpg?v=d773e214','https://tamaerl.carrd.co/assets/images/gallery04/8ca064f4_original.jpg?v=d773e214' ] }"
                >
                    <div @click="open = true" class="bg-pink-100 p-4 rounded-lg shadow hover:bg-sky-100 hover:shadow-lg transition-all duration-200 cursor-pointer">
                        <img :src="images[0]" alt="Comic Art" class="rounded-md mb-3 h-48 w-full object-contain bg-white">
                        <h4 class="text-xl font-serif text-pink-800 mb-1">Comic Art</h4>
                        <p class="text-gray-700 text-sm mb-2">Mini comic or professional manga art. Price shown is for each page.</p>
                        <p class="text-pink-700 font-sans">Start from $20-50</p>
                    </div>

                    <div
                        x-show="open"
                        class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50"
                        x-transition
                    >
                        <div class="bg-white p-4 rounded-lg shadow-lg max-w-3xl w-full relative" @click.away="open = false">
                            <div class="w-full h-[500px] flex items-center justify-center bg-gray-100 rounded">
                                <img :src="images[current]" class="max-h-full max-w-full object-contain" alt="Slideshow">
                            </div>

                            <div class="flex justify-between mt-4">
                                <button @click="current = (current === 0 ? images.length - 1 : current - 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-pink-300">
                                    ← Prev
                                </button>
                                <button @click="current = (current === images.length - 1 ? 0 : current + 1)"
                                        class="px-4 py-2 bg-pink-200 rounded hover:bg-pink-300">
                                    Next →
                                </button>
                            </div>

                            <button @click="open = false" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-2xl">
                                &times;
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-6 text-right">
                <a href="{{ route('commission') }}"
                    class="inline-block bg-pink-400 hover:bg-sky-300 text-white font-medium py-2 px-4 rounded-lg shadow transition">
                    Order now!
                </a>
            </div>
        </div>
        <br>
        <div class="bg-white p-5 rounded-lg shadow-inner border border-pink-100">
            <h3 class="text-2xl font-serif text-pink-600 mb-2">- Terms of Service -</h3>
            <p class="text-gray-600 mb-4">
                ABOUT ORDERING
                <br>× To order or book slot, please fill the form or DM me in any of my socials. You can find my socials in the footer of this webpage
                <br>× For sketches; full payment is required upfront
                <br>× For rendered art; you can either choose full payment upfront; half upfront, and half after finishied
                <br>× International clients can only pay with Paypal
                <br>× The process might take 1-7 days. please inform me if I need to fulfill certain deadline
                <br><br>Payment via:
                <br>× International : Paypal
                <br>× Indonesia : Gopay, Shopeepay, Dana, Jago
                <br><br>TOS:
                <br>× You have read my TOS
                <br>× Your character is okay to be drawn cutely, regardless of the character's manly/scary/etc-ness
                <br>× You understand my art style and quality. Hence, you won't ask for refund unless I failed the deadline without giving notice for too long, or if I feel that I can't finish your request
                <br>×Do not use my art for commercial use unless you paid commercial fee
                <br>×Do not feed my art to AI
                <br>×I have the rights to upload commission results in my carrd and/or socials with watermark without asking for permission, unless you ask me not to beforehand (additional 30% fee)
                <br>×You have the rights to upload the commission result with proper credit
                <br>×You don't have the rights to claim my art as yours or anyone else's
                <br><br>DON'TS:
                <br>×NSFW; pose limited to non-explicit, but you're always free to ask to make sure if your desired pose is allowed or not
                <br>×GORE; slight blood, small scars, or recovered injuries are OK. please give warnings if you want to give gorey reference, or please avoid it
                <br>×Depression, self-harm themed; please be careful / try to avoid this topic
                <br>× Detailed, complicated design; I'll draw it simply, or you will have to pay extra for more detailed art
                <br>However, i still have the right to decline if I think I can't draw it
                </p>
        </div>
    </div>

@endsection
