<div class="table-responsive p-3">

    @include('partials.alerts')

    <div class="row align-items-center justify-content-between mb-2">

        <div class="col col-sm-6 text-left">
            <a class="btn btn-success" href="{{ route('admin.services.create') }}">
                <i class="fa fa-plus"></i> {{ __('messages.create_service') }}
            </a>
        </div>
        <div class="col col-sm-4">
            <div class="input-group"><span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                <input type="text" wire:model="search" class="form-control" placeholder="{{ __('messages.search') }}...">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">

            <table class="table table-sm table-hover table-centered table-nowrap mb-0">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">{{__('messages.name') }}</th>
                        <th class="text-center">{{__('messages.description') }}</th>
                        <th class="text-center">{{__('messages.price') }}</th>
                        <th class="text-center">{{__('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                    <tr class="text-center">
                        <td>{{ $service->getKey() }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->price }}</td>
                        <td>
                            <div class="btn-group"><button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-sm"><span class="fas fa-ellipsis-h icon-dark"></span> </span>
                                    <span class="sr-only">__('messages.actions')</span></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.services.show', $service) }}"><span class="fas fa-eye mr-2"></span>{{ __('messages.view') }}</a>
                                    <a class="dropdown-item" href="{{ route('admin.services.edit', $service) }}"><span class="fas fa-edit mr-2"></span>{{ __('messages.edit') }}</a>
                                    <a class="dropdown-item text-danger" wire:click="destroy({{ $service->id }})" href="#"><span class="fas fa-trash-alt mr-2"></span>{{ __('messages.delete') }}</a>
                                </div>
                            </div>

                        </td>
                    </tr>
                    @empty
                    <tr class="text-center">
                        <td colspan="5">{{ __('messages.no_records') }}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-2">
                {{ $services->links() }}
            </div>

        </div>
    </div>

</div>
