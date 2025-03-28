<div style="justify-content: center; display: flex; flex-direction: column; align-items: center;">
    {{-- Document Viewer --}}
    <iframe src="{{ $url }}" style="height: 100vh; width: 70%; border: none; overflow: hidden;"></iframe>

    {{-- Download Button --}}
    <a href="{{ $url }}" download style="margin-top: 15px; padding: 10px 20px; background-color: #2563eb; color: white; border-radius: 6px; text-decoration: none; display: inline-block;">
        Download Document
    </a>
</div>
