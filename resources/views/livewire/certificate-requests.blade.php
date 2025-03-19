<div class="flex-1 p-4 overflow-x-auto h-screen text-white">
    <div class="h-full w-full min-w-0 overflow-x-auto overflow-y-auto">
       <div class="text-lg text-white bg-[#343434] h-[80px] p-5 items-center flex flex-row justify-between">
          <div class="w-[200px] flex flex-row rounded-md px-2 py-1">
            <h1 class="text-nowrap text-2xl">List of Certificate Requests</h1>
          </div>
          <div class="flex flex-row space-x-2">
             <div class="w-[200px] flex flex-row border border-[#e3e3e3] rounded-md px-2 py-1">
                <input type="text" placeholder="Search..." class="w-full h-full bg-[#343434] text-white px-1 py-1 rounded-md text-white placeholder:text-white outline-none hover:placeholder:text-white ">
                <button><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg></button>
             </div>
             <button class="w-[200px] text-sm flex flex-row hover:bg-green-500 hover:text-white border border-[#e3e3e3] rounded-md px-2 py-2">
                   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
                   <h2 class="hover:font-bold">Add Certificate Request</h2>
             </button>
          </div>
       
       </div>
 
        <!-- Wrapper for table with scrolling -->
       @if ($certificateRequests->isEmpty())
          <p class="text-center text-2xl italic text-white bg-[#343434] py-4">No certificate requests found.</p>
       @else
            <table class="min-w-full bg-[#343434] whitespace-nowrap shadow-[0_5px_15px_rgba(0,0,0,0.35)]">
                <thead class="bg-[#343434]">
                    <tr>
                        <th class="py-2 border border-white/50">Last Name</th>
                        <th class="py-2 border border-white/50">Last Name</th>
                        <th class="py-2 border border-white/50">Certificate Type</th>
                        <th class="py-2 border border-white/50">Purpose</th>
                        <th class="py-2 border border-white/50">Status</th>
                        <th class="py-2 border border-white/50">Approved At</th>
                        <th class="py-2 border border-white/50">Actions</th>
           
                    </tr>
                </thead>
                <tbody>

                    @foreach ($certificateRequests as $certificateRequest)
                        <tr class="text-center capitalize" wire:key="cert-{{$certificateRequest->id}}">
                            <td class="py-2 border border-white/50">{{$certificateRequest->first_name ?? 'N/A'}}</td>
                            <td class="py-2 border border-white/50">{{$certificateRequest->last_name ?? 'N/A'}}</td>
                            <td class="py-2 border border-white/50">
                                {{ ucwords(str_replace('_', ' ', $certificateRequest->certificate_type ?? 'N/A')) }}
                            </td>
                            
                            <td class="py-2 border border-white/50">{{$certificateRequest->purpose ?? 'N/A'}}</td>
                            <td class="py-2 border border-white/50">{{$certificateRequest->status ?? 'N/A'}}</td>
                            <td class="py-2 border border-white/50">{{$certificateRequest->approved_at ?? 'N/A'}}</td>
                            <td class="py-2 border border-white/50 flex justify-evenly">
                                  <a href="" class="text-green-500"><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#3B82F6"><path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/></svg></a>
                                  <a href="" class="text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#FACC15"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></a>

                                  <button wire:click="delete({{ $certificateRequest->id }})" class="text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#EF4444">
                                        <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @endif
    </div>
</div>