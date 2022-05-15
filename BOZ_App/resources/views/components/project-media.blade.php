@props(['extension', 'fullName'])
<div class="rounded-xl overflow-hidden m-3">
    @if($extension == 'mp4')
        <video src="{{ asset('storage/videos/' . $fullName) }}" controls></video>
    @elseif($extension == 'mp3')
        <audio src="{{ asset('storage/audios/' . $fullName) }}" controls></audio>
    @else
        <img src="{{ asset('storage/images/' . $fullName) }}" alt="">
    @endif
</div>
