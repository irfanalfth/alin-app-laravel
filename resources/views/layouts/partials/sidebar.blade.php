 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title" data-key="t-menu"><?php echo 'Menu'; ?></li>

                 <li>
                     <a href="{{ route('product.index') }}">
                         <i data-feather="home"></i>
                         <span data-key="t-dashboard"><?php echo 'Dashboard'; ?></span>
                     </a>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow">
                         <i data-feather="grid"></i>
                         <span data-key="t-apps"><?php echo 'Apps'; ?></span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li>
                             <a href="apps-calendar.php">
                                 <span data-key="t-calendar"><?php echo 'Calendar'; ?></span>
                             </a>
                         </li>

                         <li>
                             <a href="apps-chat.php">
                                 <span data-key="t-chat"><?php echo 'Chat'; ?></span>
                             </a>
                         </li>

                         <li>
                             <a href="javascript: void(0);" class="has-arrow">
                                 <span data-key="t-email"><?php echo 'Email'; ?></span>
                             </a>
                             <ul class="sub-menu" aria-expanded="false">
                                 <li><a href="apps-email-inbox.php" data-key="t-inbox"><?php echo 'Inbox'; ?></a></li>
                                 <li><a href="apps-email-read.php" data-key="t-read-email"><?php echo 'Read_Email'; ?></a></li>
                             </ul>
                         </li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow">
                                 <span data-key="t-invoices"><?php echo 'Invoices'; ?></span>
                             </a>
                             <ul class="sub-menu" aria-expanded="false">
                                 <li><a href="apps-invoices-list.php" data-key="t-invoice-list"><?php echo 'Invoice_List'; ?></a>
                                 </li>
                                 <li><a href="apps-invoices-detail.php"
                                         data-key="t-invoice-detail"><?php echo 'Invoice_Detail'; ?></a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="javascript: void(0);" class="has-arrow">
                                 <span data-key="t-contacts"><?php echo 'Contacts'; ?></span>
                             </a>
                             <ul class="sub-menu" aria-expanded="false">
                                 <li><a href="apps-contacts-grid.php" data-key="t-user-grid"><?php echo 'User_Grid'; ?></a>
                                 </li>
                                 <li><a href="apps-contacts-list.php" data-key="t-user-list"><?php echo 'User_List'; ?></a>
                                 </li>
                                 <li><a href="apps-contacts-profile.php" data-key="t-profile"><?php echo 'Profile'; ?></a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>

             </ul>

             <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                 <div class="card-body">
                     <img src="{{ asset('images/giftbox.png') }}" alt="">
                     <div class="mt-4">
                         <h5 class="alertcard-title font-size-16"><?php echo 'Unlimited_Access'; ?>
                         </h5>
                         <p class="font-size-13">
                             <?php echo 'Upgrade_your_plan_from_a_Free_trial,_to_select_‘Business_Plan’'; ?>.
                         </p>
                         <a href="#!" class="btn btn-primary mt-2"><?php echo 'Upgrade_Now'; ?></a>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
 <!-- Left Sidebar End -->

 <div class="main-content">
     <div class="page-content">
