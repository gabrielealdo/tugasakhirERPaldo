<?php $__env->startSection('content'); ?>

   <div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">

        	
                <div class="row justify-content-center">
                <h1 class="text-white">Purchase Orders Report</h1>
                	</div> 
                	<br>
                	<br>

        <div class="container">
                <div class="row justify-content-center">
				 <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-4"><small><?php echo e(__('What details should the report contain')); ?></small></div>
                        <div class="text-center">




        <form action="/POpdf" method="get" role="POpdf">
                <?php echo csrf_field(); ?>
                
            
                <div class="col">
                <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                    <input class="form-control" name="search" placeholder="Search" type="text"/>
                                </div>
                </div>
                </div>
                <div class="col">
                <div class="input-daterange datepicker row align-items-center">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                               <input class="form-control" id="date" name="startdate" placeholder="Start Date" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                               <input class="form-control" id="date" name="enddate" placeholder="Order Date" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

                <div class="col">
                 
                 <div class="form-group">

                    <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-cart"></i></span>
                                    </div>
                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="customers" >
                         <option hidden value="" >Select Customer</option>
                      <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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
                </div>
                <div class="col">
                 <div class="form-group">
                    <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-delivery-fast"></i></span>
                                    </div>
                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="distributors"  >
                         <option hidden value="">Select Distributor</option>
                      <?php $__currentLoopData = $distributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <option value="<?php echo e($item->distributor); ?>"><?php echo e($item->distributor); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('distributors')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('distributors')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        <div class="col">
            <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-settings-gear-65"></i></span>
                                    </div>
                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="status" >
                         <option hidden value="" >Select Status</option>
                      <option value="open">Open</option>
                      <option value="closed">Closed</option>
                    </select>
                    <?php if($errors->has('search')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('search')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-4"><?php echo e(__(' Create Report ')); ?></button>
		   
            
        </form>

				</div>
				</div>
				</div>
				</div>
				</div>
    </div>
</div>
</div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-success" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['class' => 'bg-primary'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabrielle Aldo\Downloads\erp coba\hospital-inventory-erp\testsite\resources\views/POreportform.blade.php ENDPATH**/ ?>