<?php $__env->startSection('content'); ?>
<div class="header bg-gradient-dark py-7 py-lg-8">
        <div class="container">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">Recent Purchase orders</h1>
                    </div>
                
        </div>
        <div class="container">
        <form action="/search" method="POST" role="search">
                <?php echo csrf_field(); ?>
                
            <div class="row">
                <div class="col">
                <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                    <input class="form-control" name="search" placeholder="Search" type="text" onchange="this.form.submit()"/>
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
                               <input class="form-control" id="date" name="enddate" placeholder="Order Date" type="text"  onchange='this.form.submit()'/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col">
                 
                 <div class="form-group">

                    <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-cart"></i></span>
                                    </div>
                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="customers" onchange='this.form.submit()' >
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
                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="distributors" onchange='this.form.submit()' >
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
        </div>
        <div class="col">
            <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-settings-gear-65"></i></span>
                                    </div>
                    <select class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="status" onchange='this.form.submit()'>
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
            
        </form>
    </div>

        

        <div class="container col-md-12">
            <div class="table-responsive">
                <table class="table align-items-center table-light">
                    <thead class="thead-light">
                        <tr>
                            <th scope ="col">
                                Options
                            </th>
                             <th scope="col">
                               <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('date','Order Date'));?>
                            </th>
                            <th scope="col">
                               <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ordno','PO no.'));?> 
                            </th>
                            <th scope="col">
                               <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('bolno','BOL No.'));?>  
                            </th>
                            <th scope="col">
                                 <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('invoiceno',' Invoice No.'));?>
                            </th>
                            <th scope="col">
                                <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('customer','Customer'));?>
                            </th>
                            <th scope="col">
                                <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('distributor','Distributor'));?> 
                            </th>
                            <th scope="col">
                               <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('soldto','Sold To'));?>  
                            </th>
                            <th scope="col">
                               <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('status','Status'));?>   
                            </th>
                            <th scope="col">
                              <?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('type','Type'));?>    
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody class="list" >
            
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <tr>
                     <td>
                        <div class="btn-group">
                          <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                          <div class="dropdown-menu">
                            <div class="dropdown-item">

                                <span>Added by</span>
                                <i class="ni ni-single-02"><b> <?php echo e($row->added_by); ?></b></i>
                                

                            </div>
                            <a class="dropdown-item" href="/close_order?ordno=<?php echo $row->ordno ?>">Close Order</a>
                         
                        </div>
                   </td>
                    <td class="date"> <?php echo e($row['date']); ?></td>
                    <td><b> <?php echo e($row['ordno']); ?><b></td>
                    <td> <?php echo e($row['bolno']); ?></td>
                    <td> <?php echo e($row['invoiceno']); ?></td>
                    <td> <?php echo e($row['customer']); ?></td>
                    <td> <?php echo e($row['distributor']); ?></td>
                    <td> <?php echo e($row['soldto']); ?></td>
                    <?php if($row->status =='open'): ?>

                    <td><span class="badge badge-dot mr-4">
                      <i class="bg-success"></i>
                     <?php echo e($row['status']); ?>

                    </span> </td>

                    <?php elseif($row->status =='closed'): ?>
                    <td><span class="badge badge-dot mr-4">
                      <i class="bg-danger"></i>
                     <?php echo e($row['status']); ?>

                    </span> </td>
                    <?php endif; ?>

                    <td> <?php echo e($row['type']); ?></td>
                    

                   
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
                </table>
            

        </div>
    </div>
    <div class="container">
 
        <div class="col">
            <button type="button" class="btn btn-sucess"><a href="/purchases">View original</a></button>
        </div>
        
        
        
 </div>
</div>

        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-primary" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['class' => 'bg-primary'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gabrielle Aldo\Downloads\erp coba\hospital-inventory-erp\testsite\resources\views/purchasedetails.blade.php ENDPATH**/ ?>