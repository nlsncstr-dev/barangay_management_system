@props(['url', 'extension'])

<div class="p-4">
    @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
        <img src="{{ $url }}" alt="Attachment" class="w-full h-auto max-h-[70vh] object-contain rounded-lg" onerror="this.onerror=null;this.src='{{ asset('images/placeholder.jpg') }}';" />
    @elseif($extension === 'pdf')
        <iframe src="{{ $url }}#toolbar=0" class="w-full h-[70vh] rounded-lg border-none"></iframe>
    @elseif(in_array($extension, ['doc', 'docx']))
        <div class="flex items-center justify-center h-64 bg-gray-100 rounded-lg">
            <a href="{{ $url }}" download class="text-primary-500 hover:text-primary-700">
                <div class="text-center">
                    <x-heroicon-o-document class="w-12 h-12 mx-auto" />
                    <p>Download Word Document</p>
                </div>
            </a>
        </div>
    @else
        <div class="p-4 bg-gray-100 rounded-lg">
            <p class="text-gray-700">This file type cannot be previewed.</p>
            <a href="{{ $url }}" download class="mt-2 inline-flex items-center text-primary-500 hover:text-primary-700">
                <x-heroicon-o-arrow-down class="w-4 h-4 mr-1" />
                Download File
            </a>
        </div>
    @endif
</div>