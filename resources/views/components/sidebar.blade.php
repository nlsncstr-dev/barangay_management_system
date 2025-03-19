<nav class="bg-[#343434] min-h-screen w-[400px] p-4 flex flex-col justify-start items-center gap-5 font-mono flex-shrink-0 overflow-hidden">

          <div class="flex flex-row items-center w-full space-x-3 p-2 border-dashed border-b">
          <svg xmlns="http://www.w3.org/2000/svg" height="60px" viewBox="0 -960 960 960" width="60px" fill="#e3e3e3"><path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/></svg>
          <div class="flex flex-col w-full">
             <h1 class="max-w-[400px] whitespace-nowrap overflow-hidden text-ellipsis text-xl m-0 leading-tight text-white/80 text-wrap">
                Nelson Castro
            </h1>
            <h2 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-white/80 text-[15px] m-0 leading-tight">
                Barangay Official
            </h2>
          </div>
      </div>
      <a href="/barangay" class="w-full px-3">
       <div class="flex flex-row items-center w-full text-left group ">
          <div class="flex flex-row w-full space-x-2">
             <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" 
             fill={{request()->routeIs('barangay') ? "#cd853f" : "#e3e3e3"}} class="group-hover:fill-[#cd853f] transition-colors duration-100"><path d="M260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z"/></svg>
             <h1 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-2xl m-0 leading-tight hover:text-[#cd853f] {{ request()->routeIs('barangay') ? 'text-[#cd853f]' : 'text-white/80' }}">
                Barangay Information
             </h1>
          </div>
       </div>
      </a>
   
      {{-- <a href="#" class=" w-full px-3">
          <div class="flex flex-row items-center w-full text-left group">
             <div class="flex flex-row w-full space-x-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#e3e3e3" class="group-hover:fill-[#cd853f] transition-colors duration-100"><path d="M0-240v-63q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H0Zm240 0v-65q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v65H240Zm540 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z"/></svg>
                <h1 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-2xl m-0 leading-tight text-white/80 hover:text-[#cd853f]">
                   Residents
                </h1>
             </div>
          </div>
       </a>

       <a href="" class="w-full px-3">
          <div class="flex flex-row items-center w-full text-left group">
             <div class="flex flex-row w-full space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#e3e3e3" class="group-hover:fill-[#cd853f] transition-colors duration-100"><path d="M38-428q-18-36-28-73T0-576q0-112 76-188t188-76q63 0 120 26.5t96 73.5q39-47 96-73.5T696-840q112 0 188 76t76 188q0 38-10 75t-28 73q-11-19-26-34t-35-24q9-23 14-45t5-45q0-78-53-131t-131-53q-81 0-124.5 44.5T480-616q-48-56-91.5-100T264-760q-78 0-131 53T80-576q0 23 5 45t14 45q-20 9-35 24t-26 34ZM0-80v-63q0-44 44.5-70.5T160-240q13 0 25 .5t23 2.5q-14 20-21 43t-7 49v65H0Zm240 0v-65q0-65 66.5-105T480-290q108 0 174 40t66 105v65H240Zm540 0v-65q0-26-6.5-49T754-237q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v63H780ZM480-210q-57 0-102 15t-53 35h311q-9-20-53.5-35T480-210Zm-320-70q-33 0-56.5-23.5T80-360q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-280Zm640 0q-33 0-56.5-23.5T720-360q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-280Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-440q0 50-34.5 85T480-320Zm0-160q-17 0-28.5 11.5T440-440q0 17 11.5 28.5T480-400q17 0 28.5-11.5T520-440q0-17-11.5-28.5T480-480Zm0 40Zm1 280Z"/></svg>
                <h1 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-2xl m-0 leading-tight text-white/80 hover:text-[#cd853f]">
                   Barangay Officials
                </h1>
             </div>
          </div>
       </a>


       <div class="flex flex-row items-center w-full text-left ">
          <div class="flex flex-row w-full space-x-2 border-b">
        
          </div>
       </div>

       <a href="#" class="w-full px-3">
          <div class="flex flex-row items-center w-full text-left group">
             <div class="flex flex-row w-full space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#e3e3e3" class="group-hover:fill-[#cd853f] transition-colors duration-100"><path d="M480-280q-17 0-28.5-11.5T440-320q0-17 11.5-28.5T480-360q17 0 28.5 11.5T520-320q0 17-11.5 28.5T480-280Zm-40-160v-400h80v400h-80ZM200-120q-33 0-56.5-23.5T120-200v-120h80v120h560v-120h80v120q0 33-23.5 56.5T760-120H200Z"/></svg>
                <h1 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-2xl m-0 leading-tight text-white/80 hover:text-[#cd853f]">
                   Blotter Reports
                </h1>
             </div>
          </div>
       </a> --}}

      <a href="{{ route('view.certificate-requests') }}" 
         class="w-full px-3">
         <div class="flex flex-row items-center w-full text-left group">
            <div class="flex flex-row w-full space-x-2">
               <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" 
                  fill={{request()->routeIs('view.certificate-requests') ? "#cd853f" :"#e3e3e3"}} class="group-hover:fill-[#cd853f] transition-colors duration-100">
                  <path d="M320-480v-80h320v80H320Zm0-160v-80h320v80H320Zm-80 240h300q29 0 54 12.5t42 35.5l84 110v-558H240v400Zm0 240h442L573-303q-6-8-14.5-12.5T540-320H240v160Zm480 80H240q-33 0-56.5-23.5T160-160v-640q0-33 23.5-56.5T240-880h480q33 0 56.5 23.5T800-800v640q0 33-23.5 56.5T720-80Zm-480-80v-640 640Zm0-160v-80 80Z"/>
               </svg>
               <h1 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-2xl m-0 leading-tight hover:text-[#cd853f] {{ request()->routeIs('view.certificate-requests') ? 'text-[#cd853f]' : 'text-white/80' }}">
                  Certificate Requests
               </h1>
            </div>
         </div>
      </a>


       <div class="flex flex-row items-center w-full text-left ">
          <div class="flex flex-row w-full space-x-2 border-b">
        
          </div>
       </div>

       <a href="#" class=" w-full px-3">
          <div class="flex flex-row items-center w-full text-left group">
             <div class="flex flex-row w-full space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#e3e3e3" class="group-hover:fill-[#cd853f] transition-colors duration-100"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
                <h1 class="w-full whitespace-nowrap overflow-hidden text-ellipsis text-2xl m-0 leading-tight text-white/80 hover:text-[#cd853f]">
                  @if(Auth::check())  
                  <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="">Logout</button>
                  </form>
              @endif
                </h1>
             </div>
          </div>
       </a>
    </nav>