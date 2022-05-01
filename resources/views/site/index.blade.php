<x-layout>
    <x-slot name="title">Beranda</x-slot>

   <div class="container">
        <div class="satu">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/list1.webp')}}" alt="">
        </div>
        <div class="content-desc dua">
        <h1>Sign up for <br>Starbucks® <br>Rewards</h1>
        <p>Starting 4/22, get 25 Stars when you bring<br> your clean, reusable cup into the café.<br> Stars can quickly add up to Rewards.*<button><span><a href="">Join now</a></span></button></p>
        </div>

        <div class="tiga">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/list2.webp')}}" alt="">
        </div>
        <div class="content-desc empat">
        <h1>Planet-positive <br>tips</h1>
        <p>April is earth month, but our commitment<br> to reducing our environmental impact is<br> year round. Try these tips on your next<br> Starbucks visit. <br> <button><span><a href="">Join now</a></span></button> </p>
        </div>

        <div class="lima">
            <img src="{{ \Illuminate\Support\Facades\URL::asset('/images/list3.jpg')}}" alt="">
        </div>
        <div class="content-desc enam putih">
        <h1>Iced shaken <br>awakening </h1>
        <p>Starting 4/22, get 25 Stars when you bring<br> your clean, reusable cup into the café.<br> Stars can quickly add up to Rewards.*<br> <button class="putih"><span><a href="">Join now</a></span></button> </p>
        </div>

        <div class="note">
        *At participating stores.
        </div>
   </div>
</x-layout> 