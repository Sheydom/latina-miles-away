<section class="flex flex-col items-center text-center w-full md:mt-16 p-2.5">
    <h2 class="text-black mb-2 text-bold-xl">{{ __('lastCall.title') }}</h2>
    <p class=" text-gray-500">{!! __('lastCall.paragraph') !!}</p>
    {{-- <button type="button"
            class="w-[75%] rounded-2xl p-2 font-bold text-xl text-white bg-linear-to-r from-[#34A0A9] to-[#4CC9D4] 
            shadow-[0_10px_25px_rgba(52,160,169,0.45)] border border-transparent  hover:from-[#2f8f97] hover:to-[#6fcfd8]
            hover:-translate-y-1 cursor-pointer">Book
            Consultation</button> --}}
    <button type="button" data-cal-link="sheyla-solis-qbslzw/consultation" data-cal-namespace="consultation"
        data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
        class="w-full mt-3 rounded-2xl py-4 font-bold text-xl  text-amber-50 bg-[#4CC9D4]
                 md:shadow-[0_8px_20px_rgba(52,160,169,0.25)] border border-transparent  hover:from-[#2f8f97] hover:to-[#6fcfd8]
                hover:-translate-y-1 cursor-pointer md:max-w-100 transition duration-200 ease-in-out">{!! __('lastCall.button') !!}</button>


</section>
