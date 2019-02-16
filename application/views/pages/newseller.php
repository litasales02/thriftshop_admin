<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            New Seller 
        </h1>
        <ol class="breadcrumb">
            <li><a href="active"><i class="fa fa-list"></i> New Seller</a></li>
            <li class="/"><i class="fa fa-dashboard"></i> Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">New Seller List</h3>                                    
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:50px;text-align:center">#</th>
                                    <th>Image</th>
                                    <th>Store Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Contact No.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($data) && $data != null){
                                $x = 1;
                                foreach ($data as $key => $value) { 
                                    if($value['usertype'] === 'seller' && $value['requirements']['status'] == 0){  
                            ?>
                                <tr>
                                    <td style="width:50px;text-align:center"><?php echo $x ?></td>
                                    <td><img src="<?php echo $value['userdetails']['profileimg']; ?>" width="40" height="40" /> </td>
                                    <td><?php echo $value['storename'] ; ?></td>
                                    <td><?php echo $value['userdetails']['address1']; ?></td>
                                    <td><?php echo $value['userdetails']['email']; ?></td>
                                    <td>Tel : <?php echo $value['userdetails']['telnumber']; ?>, Cell : <?php echo $value['userdetails']['cellnumber']; ?></td>
                                    <td>
                                        <a href="/pages/details/new/added/sellers/<?php echo $key; ?>" class="btn btn-info" >Details</a>
                                    </td> 
                                </tr>
                            <?php $x++; } } } ?>
                            </tbody> 
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->

            </div>
        </div>


    </section><!-- /.content -->
</aside><!-- /.right-side -->