<div>
    <div class="card">
        <div class="card-body">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="text-danger text-uppercase"><i class="fa fa-home" aria-hidden="true"></i> Church management</h4 class="text-danger">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.main') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Church management</li>
                        </ol>
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
                    <h4 class="text-uppercase">list of churchs</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm"
                        data-toggle="modal" data-target="#createChurchModal">
                       <i class="fa fa-plus" aria-hidden="true"></i> New church
                    </button>

                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle table-sm">
                      <thead>
                      <tr>
                        <th>Church name</th>
                        <th>Abreviation</th>
                        <th>Pastor</th>
                        <th>Email</th>
                        <th class="text-center">Preaching</th>
                        <th>Actions</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($churchs as $church)
                        <tr>
                            <td>
                              <img src="{{ asset($church->logo_url == null ?'defautl-user.jpg':'storage/'.$church->logo_url) }}" alt="Logo" class="img-circle img-size-32 mr-2">
                              {{$church->name}}
                            </td>
                            <td> {{$church->abreviation}}</td>
                            <td>
                                {{$church->pastor_name}}
                            </td>
                            <td>
                                {{$church->phone}}
                            </td>
                            <td class="text-center">
                                {{$church->predications->count()}}
                            </td>
                            <td>
                                <button wire:click.prevent='edit({{$church}})'
                                    data-toggle="modal" data-target="#editChurchModal"
                                    class="btn btn-primary btn-sm" type="button"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                <a href="{{ route('admin.church.predication',$church ) }}" class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
    @include('livewire.admin.church.modals.create-church')
    @include('livewire.admin.church.modals.edit-church')
</div>
