<?= view('includes/header.php',['title'=>'create']) ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Update 
        
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                   
                    <form role="form" action="<?= base_url('invoice/update/' . $invoice['id']); ?>" method="post">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="name">Customer Name</label>
                                        <select name="customer_id">
                                            <?php foreach ($customers as $customer): ?>
                                            <option value="<?= $customer['id']; ?>" <?= ($customer['id'] == $invoice['customer_id']) ? 'selected' : ''; ?>> <?= $customer['name']; ?> </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                                                        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control required" name="date" value="<?=$invoice['date']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control required equalTo" name="amount" value="<?=$invoice['amount']?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status">
                                            <option value="Unpaid" <?= ($invoice['status'] == 'Unpaid') ? 'selected' : ''; ?>>Unpaid</option>
                                            <option value="Paid" <?= ($invoice['status'] == 'Paid') ? 'selected' : ''; ?>>Paid</option>
                                            <option value="Cancelled" <?= ($invoice['status'] == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                        <button type="submit">Update</button>
                        </div>
                    
                    </form>
                </div>
            </div>
            <div class="col-md-4">
            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>
                
                <div class="row">
                    <div class="col-md-12">
                         </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<?= view('includes/footer.php') ?>