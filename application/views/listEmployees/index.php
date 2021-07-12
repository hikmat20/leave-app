<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- <h5 class="card-title">Basic Datatable</h5> -->
                <div class="table-responsive">
                    <table id="dataEmployee" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>

                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

</html>
<script>
    $(document).ready(function() {
        $('#dataEmployee').DataTable();
    });
</script>