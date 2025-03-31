<?= view('includes/header.php',['title'=>'dashboard']) ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Admin Portal
       
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-plus"></i> Add New</a>
                    <a href="<?= base_url('logout')?>" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                    <div class="box-tools">
                    <form action="<?php echo base_url("/admin/dashboard") ?>" id="searchList">
                            <div class="input-group">
                            <input type="text" name="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="search" value="<?= isset($search) ? $search : '' ?>">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <!-- <table class="table table-hover"> 
                    <h3 class="mt-4"></h3>
        
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Manager</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    
                  </table>
                   -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <h2>Welcome...</h2>
                </div>
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