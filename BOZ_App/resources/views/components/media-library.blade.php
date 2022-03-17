<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <h4 class="m-2 font-weight-bold text-primary">Afbeeldingen</h4>
                    <div class="m-2 row">
                        @foreach($images as $image)
                            <div class="m-1 card" style="width: 15rem;">
                                <img style="height: 15vw; object-fit: cover;" src="{{ asset('images/' . $image) }}" alt="Card image cap">
                            </div>
                        @endforeach
                    </div>


                    <h4 class="m-2 font-weight-bold text-primary">Video's</h4>
                    <div class="m-2 row">
                        @foreach($videos as $video)
                            <div class="m-2 card" style="width: 15rem;">
                                <video style="height: 10vw;" src="{{ asset('videos/' . $video) }}" controls></video>
                            </div>
                        @endforeach
                    </div>

                    <h4 class="m-2 font-weight-bold text-primary">Audio Fragmenten</h4>
                    <div class="m-2 row">
                        @foreach(audioFragments as $audio)
                            <div class="m-2 card" style="width: 20rem;">
                                <audio style="height: 4vw;" src="{{ asset('audioFragments/' . $audio}}" controls></audio>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
