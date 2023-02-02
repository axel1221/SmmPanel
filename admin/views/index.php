<?php include 'header.php'; ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"clients"]) ?></div>
                     <div>Registered Users</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>clients">
               <div class="panel-footer">
                  <span class="pull-left">See in Detail</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
            <div class="col-lg-3 col-md-6">
         <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-shopping-cart fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"orders"]) ?></div>
                     <div>Total Orders</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>orders">
               <div class="panel-footer">
                  <span class="pull-left">See in Detail</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-green">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="	fa fa-bug fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo $failCount ?></div>
                     <div>Orders Failed</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>orders/1/fail">
               <div class="panel-footer">
                  <span class="pull-left">See in Detail</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-yellow">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-bell fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"payments","where"=>["payment_method"=>4,"payment_status"=>1] ]) ?></div>
                     <div>Pending Payment Notifications</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>payments/bank">
               <div class="panel-footer">
                  <span class="pull-left">See in Detail</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
      <div class="col-lg-3 col-md-6">
         <div class="panel panel-red">
            <div class="panel-heading">
               <div class="row">
                  <div class="col-xs-3">
                     <i class="fa fa-support fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                     <div class="huge"><?php echo countRow(["table"=>"tickets","where"=>["client_new"=>2]]); ?></div>
                     <div>Pending Support Requests</div>
                  </div>
               </div>
            </div>
            <a href="<?php echo site_url("admin/") ?>tickets?search=unread">
               <div class="panel-footer">
                  <span class="pull-left">See in Detail</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </a>
         </div>
      </div>
   </div>
</div>

<div class="modal modal-center fade" id="confirmChange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
   <div class="modal-dialog modal-dialog-center" role="document">
      <div class="modal-content">
         <div class="modal-body text-center">
            <h4>Are you sure you want to Delete?</h4>
            <div align="center">
               <a class="btn btn-primary" href="" id="confirmYes">Yes</a>
               <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include 'footer.php'; ?>
