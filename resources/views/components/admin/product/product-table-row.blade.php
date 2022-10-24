<tr>
    <th scope="row">{{$counter}}</th>
    <td>{{$name}}</td>
    <td>{{$brand}}</td>
    <td>{{$strap}}</td>
    <td>{{$price}}</td>
    <td>Ảnh</td>
    <td>{{$description}}</td>
    <td>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cofirmDeleteModal" data-attr="{{$id}}" id="delBtn">Del</button>
            <a href="editproduct"><button type="button" class="btn btn-warning">Edit</button></a>
            <a href="addproduct"><button type="button" class="btn btn-success">Add</button></a>
        </div>
    </td>
</tr>