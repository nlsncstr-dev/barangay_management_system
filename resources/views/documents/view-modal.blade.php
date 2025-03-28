<div style="justify-content: center; display: flex; flex-direction: column; align-items: center;">
    {{-- Document Viewer --}}
    <iframe src="{{ $url }}" style="height: 50vh; width: 70%; border: none; overflow: hidden;"></iframe>

    {{-- Download Button --}}
    <a href="{{ $url }}" download style="margin-top: 50px; padding: 10px 20px; background-color: #00fa9a; color: black; border-radius: 6px; text-decoration: none; display: inline-block; font-family: 'Roboto', sans-serif;">
        Download Document
    </a>
</div>
