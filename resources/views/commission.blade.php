@extends('layouts.app')

@section('title', 'Form Komisi')

@section('content')
<div class="max-w-2xl mx-auto bg-pink-50 p-8 rounded-xl shadow-md border border-pink-200 relative">
    <h2 class="text-3xl font-serif text-pink-500 mb-6 text-center">Order Commission</h2>

    <form id="commissionForm" class="space-y-6">
        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Name</label>
            <input type="text" name="name" required
                class="w-full px-4 py-2 border border-pink-300 rounded-md bg-white focus:ring-2 focus:ring-pink-400">
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Email</label>
            <input type="email" name="email" required
                class="w-full px-4 py-2 border border-pink-300 rounded-md bg-white focus:ring-2 focus:ring-pink-400">
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Commission Type</label>
            <select name="type" required
                class="w-full px-4 py-2 border border-pink-300 rounded-md bg-white focus:ring-2 focus:ring-pink-400">
                <option value="">-- Pilih --</option>
                <option value="chibi">🎀 Chibi - $20</option>
                <option value="bust">🌸 Colored sketch - $25</option>
                <option value="full">🌟 Rendered - $40</option>
                <option value="full">🌟 Comic - $20~80</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">References</label>
            <input type="file" name="reference"
                class="w-full px-4 py-2 border border-pink-300 rounded-md bg-white file:text-pink-600 file:bg-pink-100 file:rounded-md file:px-3 file:py-1">
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Description</label>
            <textarea name="description" rows="4"
                class="w-full px-4 py-2 border border-pink-300 rounded-md bg-white focus:ring-2 focus:ring-pink-400"
                placeholder="Pose, ekspresi, warna, dsb..."></textarea>
        </div>

        <div>
            <label class="block text-sm font-medium text-pink-700 mb-1">Payment Method</label>
            <div class="space-y-2">
                <label class="flex items-center">
                    <input type="radio" name="payment" value="gopay" class="text-pink-500 mr-2"> GoPay
                </label>
                <label class="flex items-center">
                    <input type="radio" name="payment" value="bank" class="text-pink-500 mr-2"> Shopeepay
                </label>
                <label class="flex items-center">
                    <input type="radio" name="payment" value="bank" class="text-pink-500 mr-2"> Dana
                </label>
                <label class="flex items-center">
                    <input type="radio" name="payment" value="dana" class="text-pink-500 mr-2"> Jago
                </label>
                <label class="flex items-center">
                    <input type="radio" name="payment" value="bank" class="text-pink-500 mr-2"> Paypal
                </label>
            </div>
        </div>

        <div class="text-center">
            <button type="submit"
                class="bg-pink-400 text-white px-6 py-2 rounded-md hover:bg-sky-300 transition duration-200 shadow-md">
                Submit
            </button>
        </div>
    </form>
</div>

<!-- Modal -->
<div id="popupSuccess"
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm text-center border-2 border-pink-300">
        <h3 class="text-2xl font-serif text-pink-500 mb-3">Form has been sent</h3>
        <p class="text-gray-700 mb-4">Thank you for filling this form! :D We will contact you ASAP with the email you've provided! Have a nice day 💖</p>
        <button onclick="closePopup()"
            class="bg-pink-400 text-white px-5 py-2 rounded hover:bg-pink-500 transition">
            Close
        </button>
    </div>
</div>

<script>
    document.getElementById('commissionForm').addEventListener('submit', function (e) {
        e.preventDefault();
        document.getElementById('popupSuccess').classList.remove('hidden');
    });

    function closePopup() {
        document.getElementById('popupSuccess').classList.add('hidden');
        document.getElementById('commissionForm').reset();
    }
</script>
@endsection
