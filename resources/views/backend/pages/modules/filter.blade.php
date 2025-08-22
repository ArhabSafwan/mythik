<div id="filterTable">
    <div class="card-datatable table-responsive">
        <table class="datatables-products table item_table table-hover">
            <thead class="border-top">
                <tr>
                    <th>#</th>
                    <th>Created At</th>
                    <th>Module Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach ($modules as $module)
                <tr id="deleteitem_remove_{{ $module->id }}">
                <td> {{ $loop->iteration }}</td>
                <td>{{$module->CreatedAtFormatted}}</td>
                <td>{{$module->name}}</td>
                <td>
                    <div class="d-inline-block text-nowrap">
                        <a href="{{route('modules.edit',$module->id)}}">
                            <button class="btn btn-sm btn-icon edit-i"><i class="ti ti-edit"></i></button>
                        </a>
                        <button  id="confirm-text_{{$module->id}}"  class="btn btn-sm btn-icon delete-i"><i onClick="deleteConfirmation({{$module->id}},'{{ route("modules.destroy", $module->id) }}')" class="ti ti-trash"></i></button>
                       
                       
                    </div>
                </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mb-2">
        {{ $modules->links('backend.pagination.custome') }}
    </div>
</div>