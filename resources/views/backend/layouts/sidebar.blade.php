  
    
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    
    <section class="sidebar">
      <!-- Sidebar user panel -->
  <div  class="col-lg-12 logo-placeholder" style="margin-top: 0px;padding-left: 0px;" >
             <!-- <img class="img-responsive logo" src="{{asset('public/backend')}}/img/logo.png"> -->
             <img class="img-responsive logo" src="{{asset('public/backend')}}/img/AFL.png">
             
  </div>

 <div  class="col-lg-12">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li  class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>HR Dept</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                              <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-users"></i> <span>User Manage</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('users.view')}}">    <i class="fa fa-file-text"></i>View User</a></li>
                                    
                                    
                  </ul>
                </li>
                <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-users"></i> <span>Profile Manage</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('profile.view')}}">            <i class="fa fa-reorder"></i>User Profile</a></li>
                                                          </ul>
                </li>
                                        </ul>
          </li>    
          <li  class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Address</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                              <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-tasks"></i> <span>Divisions</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('divisions.view')}}">    <i class="fa fa-file-text"></i>View Divisions</a></li>
                                    
                                    
                  </ul>
                </li>
                   <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Districts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('districts.view')}}">            <i class="fa fa-reorder"></i>View Districts </a></li>
                                        </ul>
                </li>
                <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Upazilas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('upazilas.view')}}">            <i class="fa fa-reorder"></i>View Upazilas </a></li>
                                        </ul>
                </li>
                <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Union</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('unions.view')}}">            <i class="fa fa-reorder"></i>View Unions </a></li>
                                        </ul>
                </li>
                <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Words</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('wards.view')}}">            <i class="fa fa-reorder"></i>View Word No </a></li>
                                        </ul>
                </li>
                <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Vilages</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{route('villages.view')}}">            <i class="fa fa-reorder"></i>View Vilages</a></li>
                                        </ul>
                </li>
                                        </ul>
          </li>    
          
                <li  class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Accounts Dept</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                              <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-tasks"></i> <span>Requisition</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{asset('public/backend')}}/purchase_requisition">    <i class="fa fa-file-text"></i>Purchase Requisition</a></li>
                                    
                  </ul>
                </li>
                                            <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Purchase Order</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{asset('public/backend')}}/purchase_order">            <i class="fa fa-reorder"></i>Purchase Order</a></li>
                                                          </ul>
                </li>
                                        </ul>
          </li>    
            
          <li  class="treeview">
            <a href="#">
              <i class="fa fa-briefcase"></i> <span>Inventory</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                      
              <li  class="treeview">
                <a href="#">
                  <i class="fa fa-minus-square"></i> <span>Issue</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                                                        <li >     <a href="{{asset('public/backend')}}/inv_transfer">         <i class="fa fa-ship"></i>Transfer</a></li>
                                  </ul>
              </li>
              
                            <li >     <a href="{{asset('public/backend')}}/stock_ledger">         <i class="fa fa-line-chart"></i>Stock Ledger</a></li>
            </ul>
          </li>            
              
          <li  class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Purchase</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                              <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-tasks"></i> <span>Requisition</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{asset('public/backend')}}/purchase_requisition">    <i class="fa fa-file-text"></i>Purchase Requisition</a></li>
                                    
                                    
                  </ul>
                </li>
                                            <li  class="treeview">
                  <a href="#">
                    <i class="fa fa-cart-plus"></i> <span>Purchase Order</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                                          <li >     <a href="{{asset('public/backend')}}/purchase_order">            <i class="fa fa-reorder"></i>Purchase Order</a></li>
                                                          </ul>
                </li>
                                        </ul>
          </li>    
          
                  <li >     <a href="{{asset('public/backend')}}/report">       <i class="fa fa-book"></i>Report</a></li>
         

                <li  class="treeview">
          <a href="#">
            <i class="fa fa-random"></i> <span>Master Setup</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
               
                          <li >     <a href="{{asset('public/backend')}}/item">               <i class="fa fa-circle-o"></i>Item Information</a></li>
               
                          <li >     <a href="{{asset('public/backend')}}/supplier">           <i class="fa fa-circle-o"></i>Supplier/Vendor</a></li>
                           
              <li >     <a href="{{asset('public/backend')}}/compensation_opening">     <i class="fa fa-circle-o"></i>Compensation Openin Entry</a></li>
              
          </ul>
        </li>   
           
      </ul>
    </div>
    </section>

    <!-- /.sidebar -->
  </aside>
 
