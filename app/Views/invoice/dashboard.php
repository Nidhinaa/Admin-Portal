<?= view('includes/header.php',['title'=>'todolist']) ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Create
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url("invoice/create"); ?>"><i class="fa fa-plus"></i> Add New</a>
                    <a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        
        <div class="row">
        <div class="col-md-4">
            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>
                
               
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Invoice</h3>

                     
                <div class="row">
                <div class="col-xs-12">
                </div>
                </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php 
        
        foreach($invoices as $invoice): 
            
        ?>
            <tr>
                <td><?= $invoice['id']; ?></td>
                <td><?= $invoice['customer_name']; ?></td>
                <td><?= $invoice['date']; ?></td>
                <td><?= $invoice['amount']; ?></td>
                <td><?= $invoice['status']; ?></td> 
                <td>
                    <a href="/invoice/edit/<?=$invoice['id'];?>">Edit</a>
                    
                </td>
            </tr>
            <?php endforeach; ?>
                  </table>
                  
                </div><!-- /.box-body -->
                
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
<?= view('includes/footer.php') ?>
