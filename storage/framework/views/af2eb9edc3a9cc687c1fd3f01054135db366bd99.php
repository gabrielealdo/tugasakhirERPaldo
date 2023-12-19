 <?php use \App\Http\Controllers\PurchaseController; 
 use \App\Http\Controllers\ProductController;

use Illuminate\Http\Request;?>


<?php $__env->startSection('content'); ?>

   <div class="header bg-gradient-success py-7 py-lg-8">
        <div class="container">

        	
                <div class="row justify-content-center">
                <h1 class="text-white">Purchase Order Details</h1>
                	</div> 
                	<br>
                	<br>
                <div class="row justify-content-center">
				 <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-4"><small><?php echo e(__('Enter details below to store them')); ?></small></div>
                        <div class="text-center">


					 <form role="form" method="POST" action="<?php echo e(route('purchasedetails')); ?>">
					 	<?php echo csrf_field(); ?>


					 		<div>
					 			<div>
					 				<div class="text-center text-muted mb-4">
					 					<span>
                                        	<i class="ni ni-box-2 text-primary"></i> Purchase Order Number <i class="text-primary">—</i>

                                        </span>
                           			
                                        	<?php echo $val = PurchaseController::getPO() ;?>
                                    </div>
                       			</div>
                                                                       
                                   	<input type='hidden' name='ordno' value="<?php echo $val?>">
                                  
                       		</div>

                       		<div>
					 			<div>
					 				<div class="text-center text-muted mb-4">
					 					<span>
                                        	<i class="ni ni-bullet-list-67 text-primary"></i> BOL Number <i class="text-primary">—</i>
                                        </span>
                           			
                                        	<?php echo $val = PurchaseController::getBol() ;?>
                                    </div>
                       			</div>
                                                                       
                                    
                                   	<input type='hidden' name='bolno' value="<?php echo $val?>">
                                  
                       		</div>

                       		<div>
					 			<div>
					 				<div class="text-center text-muted mb-4">
					 					<span>
                                        	<i class="ni ni-align-center text-primary"></i> Invoice Number <i class="text-primary">—</i>
                                        </span>
                           			
                                        	<?php echo $val = PurchaseController::getInvoice() ;?>
                                    </div>
                       			</div>
                                                                       
                                    
                                    
                                   	<input type='hidden' name='invoiceno' value="<?php echo $val?>">
                                  
                       		</div>
					 		
							<div class="form-group">
		                    <div class="input-group input-group-alternative">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text"><i class="ni ni-cart"></i></span>
		                        </div>
		                  		 <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="productid" onchange="
		                  		 window.max = (getStock(this.value)); ">

	                         		<option hidden value="" >Select Product</option>
	                      			<?php $__currentLoopData = ProductController::getProducts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	                      			<option value="<?php echo e($item->productid); ?>"><?php echo e($item->product_name); ?></option>
	                      			
	                      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                      			
	                    		</select>
		                    <?php if($errors->has('search')): ?>
		                        <span class="invalid-feedback" role="alert">
		                            <strong><?php echo e($errors->first('search')); ?></strong>
		                        </span>
		                    <?php endif; ?>
		                	</div>
		           			</div>



		           			<div class="form-group">
							    <div class="input-group input-group-alternative">
							        <div class="input-group-prepend">
							            <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
							        </div>

							       <input class="form-control" name="units" placeholder="units" type="number" step= "10" required autofocus onchange="console.log(window.max);checkStock(this.value,window.max);"/>


							    </div>
							</div>

							<div class="form-group">
							    <div class="input-group input-group-alternative">
							        <div class="input-group-prepend">
							            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
							        </div>
							        <input class="form-control" id="date" name="date" placeholder="Order Date" type="text"  required autofocus/>
							    </div>
							</div>
							
							<div class="form-group">
		                    <div class="input-group input-group-alternative">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text"><i class="ni ni-cart"></i></span>
		                        </div>
		                  		 <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="customer">
	                         		<option hidden value="" >Select Customer</option>
	                      			<?php $__currentLoopData = PurchaseController::getCustomers(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	                      			<option value="<?php echo e($item->customer); ?>"><?php echo e($item->customer); ?></option>
	                      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    		</select>
		                    <?php if($errors->has('search')): ?>
		                        <span class="invalid-feedback" role="alert">
		                            <strong><?php echo e($errors->first('search')); ?></strong>
		                        </span>
		                    <?php endif; ?>
		                	</div>
		           			</div>


		           			<div class="form-group">
		                    <div class="input-group input-group-alternative">
		                        <div class="input-group-prepend">
		                            <span class="input-group-text"><i class="ni ni-cart"></i></span>
		                        </div>
		                  		 <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="distributor">
	                         		<option hidden value="" >Select Distributor</option>
	                      			<?php $__currentLoopData = PurchaseController::getDistributors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	                      			<option value="<?php echo e($item->distributor); ?>"><?php echo e($item->distributor); ?></option>
	                      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                    		</select>
		                    <?php if($errors->has('search')): ?>
		                        <span class="invalid-feedback" role="alert">
		                            <strong><?php echo e($errors->first('search')); ?></strong>
		                        </span>
		                    <?php endif; ?>
		                	</div>
		           			</div>

		           			
							



							<div class="form-group">
							    <div class="input-group input-group-alternative">
							        <div class="input-group-prepend">
							            <span class="input-group-text"><i class="ni ni-money-coins"></i></span>
							        </div>
							        <input class="form-control" name="soldto" placeholder="Sold to" type="text" required autofocus/>
							    </div>
							</div>

							<div class="form-group">
							    <div class="input-group input-group-alternative">
							        <div class="input-group-prepend">
							            <span class="input-group-text"><i class="ni ni-archive-2"></i></span>
							        </div>
							        <input class="form-control" name="type" placeholder="Type" type="text" required autofocus/>
							    </div>
							</div>

		   					<button type="submit" class="btn btn-success mt-4"><?php echo e(__(' Submit Details')); ?></button>
		   


					</form>
				</div>
				</div>
				</div>
				</div>
				</div>
		</div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-1000">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>

<?php $__env->stopSection(); ?>
<script>
function getStock(id) {
	var max;
    $.ajax({
        type: "get",
        url: "getStock",
        async: false,
        data: "productid=" + id,
        success: function(result) {
         	max = result;
         }
    });
    return max;
};
function checkStock(units,allowed) {
	var res;
    $.ajax({
        type: "get",
        url: "checkStock",

        async: false,
        data: { units: units, allowed: allowed },
        success: function(result) {
           if(result == 1)
           	alert("Units must be less than "+allowed);

          
        }
    });
     

};
</script>
<?php echo $__env->make('layouts.app', ['class' => 'bg-default'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabrielle Aldo\Downloads\erp coba\hospital-inventory-erp\testsite\resources\views/purchaseform.blade.php ENDPATH**/ ?>