 <?php use \App\Http\Controllers\PurchaseController; ?>


<?php $__env->startSection('content'); ?>


   <div class="header bg-gradient-success py-7 py-lg-8">
        <div class="container">

        	
                <div class="row justify-content-center">
                <h1 class="text-white">Create a Report</h1>
                	</div> 
                	<br>
                	<br>
                <div class="row justify-content-center">
				 <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-4"><small><?php echo e(__('Choose details for the report')); ?></small></div>
                        <div class="text-center">


					 <form role="form" method="POST" action="<?php echo e(route('saveReport')); ?>">
					 	<?php echo csrf_field(); ?>

					 		 
                              <div class="form-group">
							    <div class="input-group input-group-alternative">
							        <div class="input-group-prepend">
							            <span class="input-group-text">
                                        	<i class="ni ni-bullet-list-67"></i></span>
							        </div>
									<input class="form-control" name="chart_title" placeholder="Name Of Report" type="" required autofocus/>
                                    
							    </div>
							</div>

                            

					 		


		           			<div class="form-group">
					 		<div class="input-group input-group-alternative">
				                <div class="input-group-prepend">
				                     <span class="input-group-text"><i class="ni ni-cart"></i></span>
				                 </div> 
				                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="model">
				                         <option hidden value="" >Select table to generate a report for</option>

				                      <option value="PurchaseOrder">Purchase Orders</option>
				                      <option value="User">Users</option>
				                      <option value="Products">Products</option>
				                      
				                    
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
				                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="chart_type">
				                         <option hidden value="" >Chart Type</option>

				                      <option value="line">Line</option>
				                      <option value="bar">Bar</option>
				                      <option value="pie">Pie</option>
				                      
				                    
				                    </select>
				                    <?php if($errors->has('search')): ?>
				                        <span class="invalid-feedback" role="alert">
				                            <strong><?php echo e($errors->first('search')); ?></strong>
				                        </span>
				                    <?php endif; ?>
               				 </div>
               				</div>


		           			<div class="form-group">
               				 <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        	<i class="ni ni-bullet-list-67"></i>
                                        	
                                        </span>

							        <input class="form-control" name="group_by_field" placeholder="Group by" type="" required autofocus/>
                                    </div>

                                   
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

<?php echo $__env->make('layouts.app', ['class' => 'bg-default'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabrielle Aldo\Downloads\erp coba\hospital-inventory-erp\testsite\resources\views/reportform.blade.php ENDPATH**/ ?>