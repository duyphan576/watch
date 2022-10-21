<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h3>Strap</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Strap Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- {{$counter = 1}} -->
                        @foreach ($strap as $strap)
                        <x-admin.strap.strap-table-row>
                            <x-slot:counter>{{$counter++}}</x-slot:counter>
                            <x-slot:name>{{$strap->StrapName}}</x-slot:name>
                        </x-admin.strap.strap-table-row>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>