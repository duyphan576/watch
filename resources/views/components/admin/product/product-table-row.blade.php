<tr>
    <th scope="row"># {{$id}}</th>
    <td>{{$name}}</td>
    <td>{{$brand}}</td>
    <td>{{$strap}}</td>
    <td>{{$price}}</td>
    <td>Ảnh</td>
    <td>{{$description}}</td>
    <td>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-attr="{{$id}}" id="delBtn">Del</button>
            <a href="{{ url('admin/product/edit/' . $id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
        </div>
    </td>
</tr>