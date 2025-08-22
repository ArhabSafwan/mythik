<div id="filterTable">
    <div class="card-datatable table-responsive">
        <table class="datatables-products table item_table table-hover">
            <thead class="border-top">
                <tr>
                    <th>#</th>
                    <th>Created At</th>
                    <th>Module Name</th>
                    <th>Permission Name</th>
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
                        <div class="demo-inline-spacing mt-3">
                            <ul class="list-group">
                                @foreach ( $module?->permissions as $key => $per)
                                <li class="list-group-item list-group-item-action d-flex justify-content-between py-3">
                                    {{ $per->name }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </td>
                    <td>
                        <div class="demo-inline-spacing mt-3">
                            <ul class="list-group">
                                @foreach ( $module?->permissions as $key => $per)
                                <li class="list-group-item list-group-item-action d-flex justify-content-between" style="padding-top: 12px; padding-bottom: 12px;">
                                    <div class="d-flex justify-content-left align-items-left">
                                        <a href="{{route('permissions.edit',$per->id)}}">
                                            <button class="btn btn-sm btn-icon edit-i"><i class="ti ti-edit"></i></button>
                                        </a>
                                       <button  id="confirm-text_{{$per->id}}"  class="btn btn-sm btn-icon delete-record delete-i">
                                                <i onClick="deleteConfirmation({{$per->id}},'{{ route("permissions.destroy", $per->id) }}')" class="ti ti-trash"></i>
                                         </button>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
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