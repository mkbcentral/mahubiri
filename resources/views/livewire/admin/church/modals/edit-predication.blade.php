<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editPredictionModal" tabindex="-1" aria-labelledby="editPredictionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="editPredictionModalLabel">
            <i class="fa fa-microphone" aria-hidden="true"></i> UPDATE PREDICATION ON CHURCH</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form wire:submit.prevent='update'>
            <div class="modal-body">
                <div class="media d-flex justify-content-center">
                   @if ($predicationSelected)
                    <div class="text-center" x-data="{imagePreview: '{{asset($predicationSelected->cover_image_url==null ?'image.jpg':'storage/'.$predicationSelected->cover_image_url)}}'}">
                        <input class="d-none" wire:model.defer='state.cover_image_url' type="file" x-ref="image"x-on:change="
                                reader = new FileReader();
                                reader.onload=(event)=>{
                                    imagePreview=event.target.result;
                                };
                                reader.readAsDataURL($refs.image.files[0]);
                            "
                        />
                        <img x-on:click="$refs.image.click()" class="profile-user-img img-circle"
                            x-bind:src="imagePreview ? imagePreview: '{{ asset('image.jpg') }}'"
                            alt="User profile picture">
                    </div>
                   @endif
                </div>
                <div class="form-group mt-2">
                    <label for="predTitle">Prédication title</label>
                    <input id="predTitle" class="form-control
                        @error('title') is-invalid border border-danger rounded @enderror"
                        type="text" wire:model.defer='state.title'>
                    @error('title') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="predNanePred">Predicator name</label>
                    <input id="predNanePred" class="form-control
                        @error('predicator_name') is-invalid border border-danger rounded @enderror"
                        type="text" wire:model.defer='state.predicator_name'>
                    @error('predicator_name') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="predAudioFile">Audio file</label>
                    <input id="predAudioFile" class="form-control
                        @error('audio_file_url') is-invalid border border-danger rounded @enderror"
                        type="file" wire:model.defer='state.audio_file_url'>
                    @error('audio_file_url') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    </div>
</div>
@push('styles')
    <style>
        .img-circle:hover{
            background-color: rgb(247, 96, 96);
            cursor: pointer
        }
    </style>
@endpush
