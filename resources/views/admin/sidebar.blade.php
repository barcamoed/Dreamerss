<!DOCTYPE html>
<html>


<!-- Left side column. contains the logo and sidebar -->
<div class="sidebar-section">
    <div class="sidebar-section__scroll">
        <!--<div class="sidebar-section__user has-background">
          <img src="img/users/user-19.png" alt="" class="sidebar-section__user-avatar rounded-circle">

          <div class="dropdown sidebar-section__user-dropdown">
            <a class="dropdown-toggle sidebar-section__user-dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Joyce Walsh
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Help</a>
              <a class="dropdown-item" href="#">Sign Out</a>
            </div>
          </div>
        </div>-->

        <div class="sidebar-user-a">
            <img src="{{asset('adImagesFolder/'.App\Admin::getAdminProfilePic())}}" alt="" class="sidebar-user-a__avatar rounded-circle">
            <div class="sidebar-user-a__name">{{\Illuminate\Support\Facades\Auth::user()->name}}</div>
            <div class="sidebar-user-a__desc">Admin</div>

            <a href={{url('/adminProfile')}} class="btn icon-left sidebar-user-a__link">
                Personal Account <span class="btn-icon ua-icon-user-solid"></span>
            </a>
        </div>

        <div>

            <div class="sidebar-section__separator">Tables</div>
            <ul class="sidebar-section-nav">

                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="{{ url('/artistsTable')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Artist</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="{{ url('/categories')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Categories</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="{{ url('/companiesTable')}}"  >
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Companies</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="{{ url('/competitionsTable')}}" >
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Competitions</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/newRequests')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Competitions Requests (New)</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/acceptedCompetitions')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Accepted Competitions</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/rejectedCompetitions')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Rejected Competitions</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/ongoingCompetitions')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Ongoing Competitions</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/completedCompetitions')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Completed Competitions</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/scoutingsTable')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Scouting</span>
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link"  href="{{ url('/contactsTable')}}">
                        <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                        <span class="sidebar-section-nav__item-text">Contacts</span>
                    </a>
                </li>
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link"  c>--}}
                        {{--<span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Messages</span>--}}
                    {{--</a>--}}
                {{--</li>--}}



            </ul>




            <div class="sidebar-section__separator"></div>

            <ul class="sidebar-section-nav">
                <li class="sidebar-section-nav__item">
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="mdi mdi-grid-large sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Dataset</span>--}}
                    {{--</a>--}}
                    <ul class="sidebar-section-subnav">
                        <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-table.html"></a></li>
                        <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-grid.html"></a></li>
                    </ul>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="tables.html">
                        {{--<span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Static Tables</span>--}}
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="datatables.blade.php">
                        {{--<span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">DataTables</span>--}}
                    </a>
                </li>
                <li class="sidebar-section-nav__item">
                    <a class="sidebar-section-nav__link" href="spreadsheet.html">
                        {{--<span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Spreadsheet</span>--}}
                    </a>
                </li>
            </ul>

            {{--<div class="sidebar-section__separator">Features</div>--}}

            {{--<ul class="sidebar-section-nav">--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-component"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Components</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="colorpicker.html">Color Picker</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="growl-notifications.html">Growl Notifications</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="range-slider.html">Range Slider</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="confirm-alerts.html">Confirm Alerts</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tag-editor.html">Tag Editor</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="datepicker.html">Date Picker</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="date-range-picker.html">Date Range Picker</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="file-upload.html">File Upload</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="wysiwyg-jodit-editor.html">Wysiwyg Editor</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="page-tour.html">Page Tour</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sweet-alert.html">Sweet Alert</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-charts"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Charts</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="frappe-charts.html">Frappe Charts</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tui-charts.html">Tui Charts</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-pages"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Pages</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signin.blade.php">Sign In</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signin-a.html">Sign In (a)</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signup.html">Sign Up</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="signup-a.html">Sign Up (a)</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="thanks.html">Thanks</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoices.html">Invoices</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pricing.html">Pricing</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="subscribe-plans.html">Subscribe Plans</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pricing-and-plans.html">Pricing and Plans</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="documents.html">Documents</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="trial-period-expired.html">Trial Expired</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-pages"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Extra Pages</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="contact.html">Contact</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="users-grid.html">Users Grid</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="users-contacts.html">Users Contacts</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="activity.blade.php">Activity</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoices-datagrid.html">Invoices (DataTable)</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="invoice-overview.html">Invoice Overview</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tree-view.html">Tree View</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="timeline.html">Timeline</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="listings-travel.html">Travel Listing</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-pages"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Error Pages</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="403.html">Page 403</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404.html">Page 404</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-a.html">Page 404 (a)</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-b.html">Page 404 (b)</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="404-c.html">Page 404 (c)</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="500.html">Page 500</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="wrong.html">Wrong Page</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-help-circle"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Help Center</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="help-center.html">Browse Help Desk</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="help-center-submit-ticket.html">Submit Ticket</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="sidebar-section-nav__item-icon ua-icon-settings"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Settings</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="app-settings.html">App Settings</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="global-settings.html">Global Settings</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="account-settings.html">Account Settings</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link" href="email-templates.html">--}}
                        {{--<span class="mdi mdi-email sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Email Templates</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}

            {{--<div class="sidebar-section__separator">Modules</div>--}}

            {{--<ul class="sidebar-section-nav">--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="mdi mdi-currency-usd sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">E-commerce</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="ecommerce-products.html">Products</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link" href="mail.html">--}}
                        {{--<span class="mdi mdi-at sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Mail</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link" href="messenger.blade.php">--}}
                        {{--<span class="mdi mdi-message-processing sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Messenger</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link" href="file-manager.html">--}}
                        {{--<span class="mdi mdi-file sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">File Manager</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link" href="scheduler.html">--}}
                        {{--<span class="mdi mdi-calendar-clock sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Scheduler</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link" href="kanban-board.html">--}}
                        {{--<span class="mdi mdi-clipboard-text sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Kanban Board</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="sidebar-section-nav__item">--}}
                    {{--<a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">--}}
                        {{--<span class="mdi mdi-clipboard-check sidebar-section-nav__item-icon"></span>--}}
                        {{--<span class="sidebar-section-nav__item-text">Tasks</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sidebar-section-subnav">--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tasks.html">Tasks List</a></li>--}}
                        {{--<li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="task-overview.html">Task Overview</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}









        </div>




    </div>

    <!--<div class="sidebar-section-nav__footer">
      <ul class="sidebar-section-nav">
        <li class="sidebar-section-nav__item sidebar-section-nav__item-btn mb-4">
          <a href="#" class="btn btn-info btn-block">Create project</a>
        </li>
      </ul>
      <div class="sidebar__collapse">
        <span class="icon ua-icon-collapse-left-arrows"></span>
      </div>
    </div>
  </div>
  -->
</div>

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->




</html>
