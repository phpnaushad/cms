 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ URL::to('/') }}" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('backend/dist/img/user2-160x160.jpg')}} " class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-header">Admin</li>       
                    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>Manage Admin User<i class="fas fa-angle-left right"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/admin'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Admin User List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/admin/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Admin User</p>
            </a>
          </li>

        </ul>
      </li>

       <li class="nav-header">Customer</li>       
           <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>Manage Customer<i class="fas fa-angle-left right"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/customer'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Customer List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/customer/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Customer</p>
            </a>
          </li>

        </ul>
      </li>


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>Manage Banner <i class="right fas fa-angle-left"></i></p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/banner'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Banner List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/banner/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Banner</p>
            </a>
          </li>

        </ul>
      </li>
      <li class="nav-header">SHOP</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p> Manage Category <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/category'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Product category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/category/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Category</p>
            </a>
          </li>
  
        </ul>
      </li>
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>Manage Products <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/product/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/product'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Products List</p>
            </a>
          </li>

            </ul>
          </li>

      <li class="nav-header">Order</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p> Manage Order <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/order'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Order List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/order/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Order</p>
            </a>
          </li>
  
        </ul>
      </li>


   <li class="nav-header">Posts</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p> Manage Post <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/post'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Post List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/post/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Post</p>
            </a>
          </li>
  
        </ul>
      </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p> Manage Post Category <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/post-category'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Post Category List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/post-category/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Post Category</p>
            </a>
          </li>
  
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p> Manage Tags <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo URL::to('/tags'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Tags List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo URL::to('/tags/create'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Tags</p>
            </a>
          </li>
  
        </ul>
    </li>


        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>