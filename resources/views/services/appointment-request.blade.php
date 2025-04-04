@extends('layout.app')

@section('title', 'Appointment Request')

@section('content')
<div class="rounded-md gap-10 font-mono font-bold text-black/80 z-0 text-center p-6 sm:flex sm:justify-center sm:items-center h-100vh backdrop-blur-[10px]">
    <div class="scroller flex flex-col bg-[rgba(215,192,158,0.7)] shadow-[0_5px_15px_rgba(0,0,0,0.35)] p-10 gap-10 sm:w-[600px] sm:max-w-screen-xl mx-auto rounded-md">
        <h1 class="text-2xl">Appointment Request Form</h1>
        <form method="POST" action="{{route('create.appointment-request')}}" class="auth-form">
            @csrf
            <div class="flex flex-col gap-10">
                
                <div class="flex flex-col gap-5">
                    <h2 class=" border-gray-500 border-b-2 text-md">Basic Information</h2>
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
                    
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="middle_name" placeholder="Middle Name (Optional)" value="{{ old('middle_name') }}">
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="number" name="age" placeholder="Age" value="{{ old('age') }}" required>
                    <input 
                    class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" 
                    type="text" 
                    name="contact_number" 
                    placeholder="Contact Number" 
                    value="{{ old('contact_number') }}" 
                    maxlength="11" 
                    pattern="\d{11}" 
                    inputmode="numeric" 
                    required
                    >
                    <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="address" placeholder="Address" value="{{ old('address') }}" required>
                    <div class="relative inline-block">
                        <select 
                        name="gender" 
                        class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full"
                        >
                            <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Gender</option>
                            <option value="male" class="bg-[rgba(215,192,158,0.5)]" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" class="bg-[rgba(215,192,158,0.5)]" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="others" class="bg-[rgba(215,192,158,0.5)]" {{ old('gender') == 'others' ? 'selected' : '' }}>Others</option>
                        </select>
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                    <div class="relative inline-block">
                        <select name="citizenship" class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full">
                            <option value="" disabled selected hidden>Citizenship</option>
                            <option value="filipino" class="bg-[rgba(215,192,158,0.5)]">Filipino</option>
                            <option value="others" class="bg-[rgba(215,192,158,0.5)]">Others</option>
                        </select>
                        
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                    
                    <div class="relative inline-block">
                        <select name="civil_status" class="bg-transparent border border-black/50 text-lg font-bold text-black/50 border-[4px] p-2 pr-10 appearance-none w-full">
                            <option value="" disabled selected hidden>Civil Status</option>
                            <option value="single" class="bg-[rgba(215,192,158,0.5)]">Single</option>
                            <option value="married" class="bg-[rgba(215,192,158,0.5)]">Married</option>
                            <option value="widowed" class="bg-[rgba(215,192,158,0.5)]">Widowed</option>
                            <option value="separated" class="bg-[rgba(215,192,158,0.5)]">Separated</option>
                        </select>
                        
                        <span class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-black/50">
                            ▼
                        </span>
                    </div>
                    <button type="button" onclick="addFamilyMember()" class="text-lg border border-[4px] border-black/50 hover:bg-black/50 hover:text-white hover:text-white">
                     
                        Add Family Member
                    </button>
                    
                    
                    <div id="family-members-container" class="space-y-4"></div>

                    <template id="family-member-template">
                        <div class="family-member flex flex-col gap-2 p-2" data-index="__index__">
                            <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="family_members[__index__][first_name]" placeholder="First Name" required>
                            <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="family_members[__index__][middle_name]" placeholder="Middle Name (Optional)">
                            <input class="bg-transparent border border-black/50 text-lg placeholder:font-bold placeholder:text-black/50 border-[4px] p-1" type="text" name="family_members[__index__][last_name]" placeholder="Last Name" required>
                            <button type="button" onclick="this.parentNode.remove()" class="text-red-500 mt-1 text-sm underline">Remove</button>
                        </div>
                    </template>
                    
                    <script>
                        let familyMemberIndex = 0;
                    
                        function addFamilyMember() {
                            const template = document.getElementById('family-member-template').innerHTML;
                            const filledTemplate = template.replace(/__index__/g, familyMemberIndex);
                            const div = document.createElement('div');
                            div.innerHTML = filledTemplate;
                            document.getElementById('family-members-container').appendChild(div.firstElementChild);
                            familyMemberIndex++;
                        }
                    </script>
                    
                    
                    
                
            <button class="text-2xl border border-[4px] border-black/50 hover:bg-black/50 hover:text-white hover:text-white">Submit</button>

            </div>
        </form>

   
    </div>
      
</div>


@endsection

