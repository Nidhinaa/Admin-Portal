<?= view('includes/header.php',['title'=>'create']) ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Update Customer
        
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
                   
                    <form role="form" action="<?= base_url('customer/update/' . $customer['id']); ?>" method="post">

                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control required" name="name" value="<?=$customer['name']?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="decimal" class="form-control required" name="phone" value="<?=$customer['phone']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" class="form-control required equalTo" name="email" value="<?=$customer['email']?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea name="address" class="form-control required"><?=$customer['address']?></textarea>
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