<div class="w-full max-w-3xl m-auto">
    <div class="text-center mb-11">
        <a class="text-center rounded-md bg-blue-500 font-medium text-white py-4 px-6 text-sm shadow-md hover:opacity-70" href="">Create a Warranty Request</a>
    </div>
    <p class="font-medium text-2xl text-center text-gray-500 mb-5 tracking-wider">TRACK YOUR WARRANTY REQUEST</p>
    <form action="">
        <label
            x-data="searchWarranty()"
            :class="{ 'flex bg-white border-2 border-blue-400 rounded-md overflow-hidden shadow-md hover:border-violet-500': true, '!border-violet-500': isClicked, 'border-2': isClicked }"
            @click="isClicked=true"
            @click.outside="isClicked=false"
        >
            <button class="bg-transparent w-12 flex justify-center items-center" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
            <input class="h-12 w-full max-w-3xl bg-transparent outline-none text-xl" type="text" placeholder="SEARCH YOUR TRACKING NUMBER..." required>
        </label>
    </form>
    <img class="object-contain w-full" src="{{ asset('img/searching-img.png') }}" alt="">
</div>

<script>
    function searchWarranty() {
        return {
            isClicked : false
        }
    }
</script>



