<div>
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="text-danger text-uppercase"><i class="fa fa-microphone"
                                aria-hidden="true"></i> predication management</h4 class="text-danger">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.main') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.church.management') }}">Church</a></li>
                            <li class="breadcrumb-item active">Preaching management</li>
                        </ol>
                    </div>
                    <div class="p-2">
                        <div><span class="text-bold text-primary">Church name: </span> {{$church->name}}</div>
                        <div><span class="text-bold text-primary">Pastor: </span> {{$church->pastor_name}}</div>
                        <div><span class="text-bold text-primary">Email: </span> {{$church->email}}</div>
                        <div><span class="text-bold text-primary">Phone: </span> {{$church->phone}}</div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="d-flex justify-content-between p-2">
                    <h4 class="text-uppercase">List of Preachings</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm"
                        data-toggle="modal" data-target="#createPredictionModal">
                       <i class="fa fa-plus" aria-hidden="true"></i> New Preaching
                    </button>

                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle table-sm">
                      <thead>
                      <tr>
                        <th>Title</th>
                        <th>Predicator name</th>
                        <th>Cover image</th>
                        <th>Size</th>
                        <th class="text-center">Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                          @foreach ($predications as $predication)
                            <tr>
                                <td><span><i class="fa fa-microphone" aria-hidden="true"></i></span> {{$predication->title}}</td>
                                <td>{{$predication->predicator_name}}</td>
                                <td><img width="50px" class="img-fluid" src="{{ asset('storage/'.$predication->cover_image_url) }}" alt=""></td>
                                <td>
                                    <audio controls>
                                        <source src="{{config('app.url').'storage/'.$predication->audio_file_url}}" type="audio/mpeg">
                                    </audio>
                                </td>
                                <td class="text-center">
                                    <button wire:click.prevent='edit({{$predication}})' class="btn btn-secondary btn-sm"
                                        data-toggle="modal" data-target="#editPredictionModal" type="button">
                                        <i class="fas fa-edit    "></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
    @include('livewire.admin.church.modals.create-predication')
    @include('livewire.admin.church.modals.edit-predication')
</div>
