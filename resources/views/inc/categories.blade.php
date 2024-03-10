<div class="sm:basis-4/4 md:basis-1/4 hidden md:block"" id="categories">
     
    <div class="max-w-sm w-full lg:max-w-full lg:flex mt-20">
        <div class="text-gray-900 font-bold text-xl">CATEGORIES</div>
    </div>
    <hr class="h-px my-2">
    <div class="grid grid-cols-2 gap-4 mt-5 text-gray-900 font-semibold  text-center mx-3">
        @foreach($categoryItems as $item)
        <a href=""> <div class=" col-span-1 rounded-sm py-3 bg-gray-200 hover:text-white " style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">{{$item}}</div></a>
        @endforeach 
    
    </div>
    <div class="max-w-sm w-full lg:max-w-full lg:flex mt-10">
        <div class="text-gray-900 font-bold text-xl">TOOLS</div>
    </div>
    <hr class="h-px my-2">
    <div class="grid grid-cols-1 gap-4 mt-5 text-gray-900  mx-3 font-semibold ">
       
        <a href=""><div class="col-span-1 px-3 rounded-sm py-3 bg-gray-200 hover:text-white " style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">....</div></a>

    </div>
    <div class="max-w-sm w-full lg:max-w-full lg:flex mt-10">
        <div class="text-gray-900 font-bold text-xl">RECENT POSTS</div>
    </div>
    <hr class="h-px my-2">
    <div class="grid grid-cols-1 gap-4 mt-5 text-gray-700  mx-3 ">
        <h3 class="col-span-1 rounded-sm py-3 bg-gray-200 px-3">How To Create Login and Register i...</h3>
        <div class="col-span-1 rounded-sm py-3 bg-gray-200 px-3">How To Create Login and Register i...</div>
        <div class="col-span-1 rounded-sm py-3 bg-gray-200 px-3">How To Create Login and Register i...</div>
        <div class="col-span-1 rounded-sm py-3 bg-gray-200 px-3">How To Create Login and Register i...</div>
    </div>
</div>