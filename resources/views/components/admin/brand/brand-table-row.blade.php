<tr>
    <th scope="row"># {{$id}}</th>
    <td>{{$name}}</td>
    <td>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-attr="{{$id}}" id="delBtn">Del</button>
            <a href="{{ url('admin/brand/edit/' . $id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
        </div>
    </td>
</tr>