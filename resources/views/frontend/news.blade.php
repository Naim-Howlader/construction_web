@extends('frontend.layouts.master')
@section('main')
    <div class="news-secction px-5 sm:px-20 md:px-14">
        <div class="news-text text-center py-20">
            <h2 class="text-lg font-montserrat">WORK OF EXCELLENCE</h2>
            <h2 class="text-3xl pt-2 font-bold font-montserrat">RECENT PROJECTS</h2>
        </div>
        <div class="news-image-section space-y-10 pb-14 md:grid md:grid-cols-12 md:space-y-0 md:gap-x-5 md:gap-y-10">
            <div class="single-item md:col-span-6 lg:col-span-4">
                <img src="{{asset('image/news1.jpg')}}" class="object-cover" alt="" srcset="">
                <a href=""><h2 class="pt-5 pb-1 text-lg font-semibold font-montserrat hover:text-primary transition-all duration-300">WE JUST COMPLETES $17.6 MILLION MEDICAL CLINIC IN MID-MISSOURI</h2></a>
                <h2 class="font-montseeat text-sm text-gray-600">JULY 20, 2017</h2>
            </div>
            <div class="single-item md:col-span-6 lg:col-span-4">
                <img src="{{asset('image/news2.jpg')}}" class="object-cover" alt="" srcset="">
                <a href=""><h2 class="pt-5 pb-1 text-lg font-semibold font-montserrat hover:text-primary transition-all duration-300">WE JUST COMPLETES $17.6 MILLION MEDICAL CLINIC IN MID-MISSOURI</h2></a>
                <h2 class="font-montseeat text-sm text-gray-600">JULY 20, 2017</h2>
            </div>
            <div class="single-item md:col-span-6 lg:col-span-4">
                <img src="{{asset('image/news3.jpg')}}" class="object-cover" alt="" srcset="">
                <a href=""><h2 class="pt-5 pb-1 text-lg font-semibold font-montserrat hover:text-primary transition-all duration-300">WE JUST COMPLETES $17.6 MILLION MEDICAL CLINIC IN MID-MISSOURI</h2></a>
                <h2 class="font-montseeat text-sm text-gray-600">JULY 20, 2017</h2>
            </div>
        </div>
        <div class="news-btn-section flex justify-center pb-14">
            <button class="uppercase bg-primary text-white px-6 py-3 font-montseeat text-base font-bold rounded-md hover:bg-black transition-all duration-300">see all post</button>
        </div>
    </div>
@endsection