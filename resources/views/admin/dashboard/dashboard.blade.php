<x-admin.main.main>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Today Sale</p>
                        <h6 class="mb-0">{!! number_format($dayRevenue, 0, '', '.') . ' &#8363' !!}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Month Sale</p>
                        <h6 class="mb-0">{!! number_format($monthRevenue, 0, '', '.') . ' &#8363' !!}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Best selling product</p>
                        <h6 class="mb-0">{{ $bestSeller->ProductName }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">VIP customer</p>
                        <h6 class="mb-0">{{ $vipCustomer->Username }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Revenue filter</h6>
            </div>
            <form action="" method="GET" class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="month">Month</label>
                    <input type="month" class="form-control" id="month" name="month">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Filter</button>
            </form>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Date</th>
                            <th scope="col">Total order</th>
                            <th scope="col">Total revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($revenueFilter)
                        @foreach ($revenueFilter as $item)
                        <tr>
                            <td>{{ $item->Date }}</td>
                            <td>{{ $item->totalOrder }}</td>
                            <td>{!! number_format($item->totalPrice, 0, '', '.') . ' &#8363' !!}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.main.main>