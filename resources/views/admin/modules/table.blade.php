@if(session('success'))
	<div class="alert alert-success">{{session('success')}}</div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$name}}:</h6>
        <form action="/admin/{{$table}}" method="post" class="float-right">
            @csrf
            @method('DELETE')
            <input type="hidden" id="ids_for_delete" name="ids">
            <button type="submit" class="btn btn-danger ml-2" id="delete_btn" disabled>Удалить отмеченные</button>
        </form>
        <a class="btn btn-primary  float-right" href="/admin/{{$table}}/create">Добавить</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th></th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @isset ($collection)
                    @forelse ($collection as $item)
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" onchange="toggle(this.checked,this.value)" value="{{$item->id}}" class="custom-control-input" id="cst{{$item->id}}" />
                                <label class="custom-control-label" for="cst{{$item->id}}">&nbsp;</label>
                            </div>
                        </td>
                        <td>{{Str::limit($item->title,20,'...')}}</td>
                        <td>{{Str::limit($item->body,50,'...')}}</td>
                        <td>
                            <a href="/admin/{{$table}}/{{$item->id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye btn-circle"></i></a>
                            <a href="/admin/{{$table}}/{{$item->id}}/edit" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                            <form action="/admin/{{$table}}/{{$item->id}}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <p>Нет продуктов</p>
                    @endforelse
                </tbody>
                @endisset
            </table>
        </div>
    </div>
</div>

@section('scripts')
<script src="/js/datatables/jquery.dataTables.min.js"></script>
<script src="/js/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
<script>
    var array = [];

    function add(id) {
        array.push(id);
        $('#ids_for_delete').val(array);
    }

    function remove(id) {
        const i = array.indexOf(id);
        array.splice(i, 1);
        $('#ids_for_delete').val(array);
    }

    function toggle(checked, id) {
        if (checked)
            add(id);
        else
            remove(id);

        if ($('#ids_for_delete').val() == '') {
            $('#delete_btn').attr('disabled', 'disabled');
        } else {
            $('#delete_btn').removeAttr('disabled');
        }
    }

</script>
@endsection
