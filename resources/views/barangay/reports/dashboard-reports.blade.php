@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

   <div class="min-h-screen bg-[rgba(215,192,158,0.7)] flex flex-row">

      @include('components.sidebar')

      <div class="items-center w-full h-screen">
         <div class="w-full h-full flex flex-wrap p-4 justify-evenly">

            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">232</h1>
                  <h1 class="text-md">Residents</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z"/></svg>
               </div>
            </div>

            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">12</h1>
                  <h1 class="text-md">Barangay Officials</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="m160-419 101-101-101-101L59-520l101 101Zm540-21 100-160 100 160H700Zm-220-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-160q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640Zm0 40ZM0-240v-63q0-44 44.5-70.5T160-400q13 0 25 .5t23 2.5q-14 20-21 43t-7 49v65H0Zm240 0v-65q0-65 66.5-105T480-450q108 0 174 40t66 105v65H240Zm560-160q72 0 116 26.5t44 70.5v63H780v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5Zm-320 30q-57 0-102 15t-53 35h311q-9-20-53.5-35T480-370Zm0 50Z"/></svg>
               </div>
            </div>

            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">121</h1>
                  <h1 class="text-md">Blotter Reports</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
               </div>
            </div>

            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">123</h1>
                  <h1 class="text-md">Certificate Requests</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M240-80q-50 0-85-35t-35-85v-120h120v-560l60 60 60-60 60 60 60-60 60 60 60-60 60 60 60-60 60 60 60-60v680q0 50-35 85t-85 35H240Zm480-80q17 0 28.5-11.5T760-200v-560H320v440h360v120q0 17 11.5 28.5T720-160ZM360-600v-80h240v80H360Zm0 120v-80h240v80H360Zm320-120q-17 0-28.5-11.5T640-640q0-17 11.5-28.5T680-680q17 0 28.5 11.5T720-640q0 17-11.5 28.5T680-600Zm0 120q-17 0-28.5-11.5T640-520q0-17 11.5-28.5T680-560q17 0 28.5 11.5T720-520q0 17-11.5 28.5T680-480ZM240-160h360v-80H200v40q0 17 11.5 28.5T240-160Zm-40 0v-80 80Z"/></svg>
               </div>
            </div>
            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">121</h1>
                  <h1 class="text-md">Incident Reports</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
               </div>
            </div>
            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">121</h1>
                  <h1 class="text-md">Other Reports</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
               </div>
            </div>
            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">121</h1>
                  <h1 class="text-md">Other Reports</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
               </div>
            </div>
            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">121</h1>
                  <h1 class="text-md">Other Reports</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
               </div>
            </div>
            <div class="w-[280px] h-[200px] rounded-md bg-[#333333] backdrop-blur-lg shadow-lg p-5 font-mono space-y-2 text-white flex flex-row justify-between">
               <div class="flex flex-col space-y-2">
                  <h1 class="text-6xl">121</h1>
                  <h1 class="text-md">Other Reports</h1>
               </div>
      
               <div class="flex flex-col items-center justify-center space-y-10">
                  <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 -960 960 960" width="100px" fill="#808080"><path d="M400-400h160v-80H400v80Zm0-120h320v-80H400v80Zm0-120h320v-80H400v80Zm-80 400q-33 0-56.5-23.5T240-320v-480q0-33 23.5-56.5T320-880h480q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H320Zm0-80h480v-480H320v480ZM160-80q-33 0-56.5-23.5T80-160v-560h80v560h560v80H160Zm160-720v480-480Z"/></svg>
               </div>
            </div>
         </div>
     </div>
   </div>
@endsection

   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
  