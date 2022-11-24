<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin Users List') }}
    </x-slot>

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">

            <div class="overflow-hidden card">

                <div class="card-body">
                    <div class="d-flex">


                        <table class="table table-bordered yajra-datatable table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>       
                                    <th>Created At</th>  
                                    <th>Updated At</th>                              
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
        </div>
    </div> <!-- ROW-1 END -->

</x-admin-layout>
