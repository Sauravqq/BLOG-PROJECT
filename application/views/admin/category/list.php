<?php $this->load->view('admin/header');?>

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <?php if($this->session->flashdata('success')!=""){
                ?><div class="alert alert-success"><?php echo $this->session->flashdata('success');?></div>
            }
            <?php }?>
            
            <div class="card">
            
            <div class="card-header">
            	<div class="card-title">
            		<form id="searchFrm" name="searchFrm" method="get" action="">
            			<div class="input=group mb-0">
            				<input type="text" value="" class="form-control" placeholder="Search" name="q">
            				<div class="input-group-append">

            					<button class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i>
            					</button>
            				</div>
            			</div>
            			
            		</form>
            	</div>
            	<div class="card-tools">
            		<a href="<?php echo base_url().'admin/category/create' ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Create</a>
            	</div>
            	
            </div>

            <div class="card-body">
            	<table class="table">
            		<tr>
            			<th width="50">#</th>
            			<th>Name</th>
            			<th width="100">Status</th>
            			<th width="160" class="text-center">Action</th>
            		</tr>
                    <?php if(!empty(categories)){?>

            		<tr>
            			<td>1</td>
            			<td>Fashion</td>
            			<td>
            				<span class="badge badge-success">Status</span>
            			</td>
            			<td class="text-center">
            				<a href="" class="btn btn-primary btn-sm">
            					<i class="far fa-edit"></i>Edit
            				</a>
            				<a href="" class="btn btn-danger btn-sm">
            					<i class="far fa-trash-alt"></i>Delete
            				</a>
            			</td>
            		</tr>
                    <?php } else{ ?>
                        <?php}?>

            		<tr>
            			<td>1</td>
            			<td>Fashion</td>
            			<td>
            				<span class="badge badge-success">Status</span>
            			</td>
            			<td class="text-center">
            				<a href="" class="btn btn-primary btn-sm">
            					<i class="far fa-edit"></i>Edit
            				</a>
            				<a href="" class="btn btn-danger btn-sm">
            					<i class="far fa-trash-alt"></i>Delete
            				</a>
            			</td>
            		</tr>

            		<tr>
            			<td>1</td>
            			<td>Fashion</td>
            			<td>
            				<span class="badge badge-success">Status</span>
            			</td>
            			<td class="text-center">
            				<a href="" class="btn btn-primary btn-sm">
            					<i class="far fa-edit"></i>Edit
            				</a>
            				<a href="" class="btn btn-danger btn-sm">
            					<i class="far fa-trash-alt"></i>Delete
            				</a>
            			</td>
            		</tr>
            	</table>
            </div>
              
            </div>
 
       
          </div>
          <!-- /.col-md-6 -->
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer');?>