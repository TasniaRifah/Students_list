<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
         <!-- component -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<section style="font-family: Montserrat" class=" bg-[#071e34] flex font-medium items-center justify-center h-screen">

    <section class=" mx-auto bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">
        <div class="flex items-center justify-between">
           <a href="{{ route('profile.edit') }}" class="bg-white px-2">Edit</a>
        </div>
        <div class="mt-6 w-fit mx-auto">
            <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-28 " alt="profile picture" srcset="">
        </div>

        <div class="mt-8 ">
            <h2 class="text-white font-bold text-2xl tracking-wide"><br/>{{ $user->name??null }}</h2>
        </div>
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black"> Email: </span></b> {{ $user->email??null }}
        </p>
        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black"> Roll: </span></b> {{ $user->roll??null }}
        </p>

        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black">Registration : </span></b> {{ $user->reg ??null}}
        </p>
        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black">Department : </span></b> {{ $user->department??null }}
        </p>
        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black">Current Semester /year : </span></b> {{ $user->year??null }}
        </p>
        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black">Mobile Number : </span></b> {{ $user->mobile_number??null }}
        </p>
        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black">Present Address : </span></b> {{ $user->present_address??null }}
        </p>
        
        <p class="text-emerald-400 font-semibold mt-2.5" >
            <b><span style="color:black">Permanent Address : </span></b> {{ $user->permanent_address??null }}
        </p>

    </section>


</section>

          
        </div>
    </div>
</x-app-layout>