<template>
  <div class="content">


    <!-- Dynamic Table Full Pagination -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
        </div>
        <div class="block-content">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality initialized in js/pages/base_tables_datatables.js -->
            <table id="myTable" class="table table-bordered table-striped js-dataTable-full-pagination" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Nombre</th>
                        <th class="hidden-xs">Descripcion</th>
                        <th class="hidden-xs" style="width: 15%;">Access</th>
                        <th class="text-center" style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="font-w600">Donald Barnes</td>
                        <td class="hidden-xs">client1@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td class="font-w600">Laura Bell</td>
                        <td class="hidden-xs">client2@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td class="font-w600">Ann Parker</td>
                        <td class="hidden-xs">client3@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td class="font-w600">Evelyn Willis</td>
                        <td class="hidden-xs">client4@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td class="font-w600">Roger Hart</td>
                        <td class="hidden-xs">client5@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td class="font-w600">Eric Lawson</td>
                        <td class="hidden-xs">client6@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-success">VIP</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td class="font-w600">Emma Cooper</td>
                        <td class="hidden-xs">client7@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td class="font-w600">Roger Hart</td>
                        <td class="hidden-xs">client8@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-success">VIP</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td class="font-w600">Judy Alvarez</td>
                        <td class="hidden-xs">client9@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-success">VIP</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td class="font-w600">Joshua Munoz</td>
                        <td class="hidden-xs">client10@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td class="font-w600">Jeremy Fuller</td>
                        <td class="hidden-xs">client11@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-info">Business</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td class="font-w600">Eugene Burke</td>
                        <td class="hidden-xs">client12@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-success">VIP</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">13</td>
                        <td class="font-w600">Amber Walker</td>
                        <td class="hidden-xs">client13@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">14</td>
                        <td class="font-w600">Emma Cooper</td>
                        <td class="hidden-xs">client14@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">15</td>
                        <td class="font-w600">Denise Watson</td>
                        <td class="hidden-xs">client15@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">16</td>
                        <td class="font-w600">Dennis Ross</td>
                        <td class="hidden-xs">client16@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-info">Business</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">17</td>
                        <td class="font-w600">Sara Holland</td>
                        <td class="hidden-xs">client17@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">18</td>
                        <td class="font-w600">Craig Stone</td>
                        <td class="hidden-xs">client18@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-warning">Trial</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">19</td>
                        <td class="font-w600">Amber Walker</td>
                        <td class="hidden-xs">client19@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">20</td>
                        <td class="font-w600">Ronald George</td>
                        <td class="hidden-xs">client20@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">21</td>
                        <td class="font-w600">Ryan Hall</td>
                        <td class="hidden-xs">client21@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">22</td>
                        <td class="font-w600">John Parker</td>
                        <td class="hidden-xs">client22@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">23</td>
                        <td class="font-w600">Linda Moore</td>
                        <td class="hidden-xs">client23@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">24</td>
                        <td class="font-w600">Ann Parker</td>
                        <td class="hidden-xs">client24@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-primary">Personal</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">25</td>
                        <td class="font-w600">Susan Elliott</td>
                        <td class="hidden-xs">client25@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">26</td>
                        <td class="font-w600">Amanda Powell</td>
                        <td class="hidden-xs">client26@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">27</td>
                        <td class="font-w600">Bruce Edwards</td>
                        <td class="hidden-xs">client27@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-success">VIP</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">28</td>
                        <td class="font-w600">Ashley Welch</td>
                        <td class="hidden-xs">client28@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">29</td>
                        <td class="font-w600">Susan Elliott</td>
                        <td class="hidden-xs">client29@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">30</td>
                        <td class="font-w600">Ryan Hall</td>
                        <td class="hidden-xs">client30@example.com</td>
                        <td class="hidden-xs">
                            <span class="label label-danger">Disabled</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button class="btn btn-xs btn-default"  type="button" data-toggle="tooltip" title="Edit Client"><i class="fa fa-pencil"></i></button>
                                <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Remove Client"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        created(){

        },
        methods:{
          casa(){
            console.log('casa');
          }
        }
    }
</script>
