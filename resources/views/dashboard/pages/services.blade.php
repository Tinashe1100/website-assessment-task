<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Services Page</h1>
        </div>

        @include('dashboard.components.flash-message')

        <div class="col-lg-12">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                        <tr>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->details }}
                            </td>
                            <td>
                                <div class="clearfix">

                                    <form action="/delete-service/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/edit-service/{{ $item->id }}"
                                            class="btn btn-success float-start">Edit</a>
                                        <button class="ms-2 btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a href="/dashboard/add-service" class="btn btn-primary">Add new</a>
        </div>
    </div>
</x-dashboard>
