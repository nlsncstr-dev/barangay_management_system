<nav class="bg-[rgba(215,192,158,0.2)] backdrop-blur-lg shadow-lg flex items-center justify-center flex-col sm:justify-between p-6 font-mono top-0 z-10 sticky hover:border-black/80 hover:border-2 hover:shadow-[0_0_20px_rgba(0,0,0,0.8)] transition-shadow duration-300 w-full">
    <div class="flex items-center space-x-2 overflow-hidden sm:w-[585px] w-[300px] justify-center py-2">
        <img src="{{ asset('images/barangay_hall.svg') }}" 
             alt="Barangay Icon" 
             class="sm:w-20 sm:h-20 flex-shrink-0 w-8 h-8" />
        
        <div class="flex flex-col overflow-hidden">
            <span class="sm:text-2xl text-[10px] font-bold text-gray-700 whitespace-nowrap overflow-hidden text-ellipsis">
                Welcome to Barangay Baclaran Portal
            </span>
            <span class="sm:text-lg text-[8px] text-gray-700 whitespace-nowrap overflow-hidden text-ellipsis ">
                Barangay Baclaran, City of Cabuyao, Laguna
            </span>
        </div>
    </div>
    <br>
    <div class="flex items-center font-medium font-sans sm:flex-row flex-col rounded-md gap-2 z-10">

    
        <!-- Home Button -->
       <!-- Corrected Home Button with Laravel Route Helper -->
        <div class="relative group inline-block">
            <a href="{{ route('home') }}" 
                class="relative inline-block py-2 text-lg font-semibold 
                    overflow-hidden group rounded-md shadow-md font-mono border border-black/80 border-2 w-[200px] text-center items-center z-10">
                
                <span class="absolute inset-0 bg-black transition-transform 
                            duration-500 ease-out scale-x-0 group-hover:scale-x-100 
                            origin-left"></span>
                
                <span class="relative text-black transition-colors duration-300 
                            group-hover:text-white z-10">
                    Home
                </span>
            </a>
        </div>

    
        <!-- About Button -->
        {{-- <div class="relative group inline-block">
            <a href="#" 
                class="relative inline-block py-2 text-lg font-semibold 
                    overflow-hidden group rounded-md shadow-md font-mono border border-black/80 border-2 w-[200px] text-center items-center z-10">
                
                <span class="absolute inset-0 bg-black transition-transform 
                            duration-500 ease-out scale-x-0 group-hover:scale-x-100 
                            origin-left"></span>
                
                <span class="relative text-black transition-colors duration-300 
                            group-hover:text-white z-10">
                    About
                </span>
            </a>
        </div> --}}
    
        <!-- Services Dropdown -->
        <div class="relative group inline-block z-99">
            <h1 href="#"
                class="relative inline-block py-2 text-lg font-semibold 
                       overflow-hidden rounded-md shadow-md font-mono border border-black/80 border-2 w-[200px] text-center items-center z-10">
                 
                 <span class="absolute inset-0 bg-black transition-transform 
                              duration-500 ease-out scale-x-0 group-hover:scale-x-100 
                              origin-left"></span>
                 
                 <span class="relative text-black transition-colors duration-300 
                              group-hover:text-white">
                     Services
                 </span>
            </h1>
    
            <!-- Dropdown Menu -->
            <div class="absolute left-0 hidden bg-white border border-gray-200 
                        rounded-md shadow-lg group-hover:block transition-all duration-200 
                        opacity-0 group-hover:opacity-100 transform z-50 min-w-full top-full ">
                <a href="{{ route('view.certificate-request') }}" class="block px-4 py-2 text-gray-700 hover:bg-[rgba(215,192,158,1)] bg-[rgba(215,192,158,0.5)] shadow-md shadow-[rgba(0,0,0,0.1)] hover:font-bold">
                    Certificate Request
                </a>
                <a href="{{ route('view.appointment-request') }}" class="block px-4 py-2 text-gray-700 hover:bg-[rgba(215,192,158,1)] bg-[rgba(215,192,158,0.5)] shadow-md shadow-[rgba(0,0,0,0.1)] hover:font-bold">
                    Appointment Request
                </a>
            </div>
        </div>
    </div>
</nav>