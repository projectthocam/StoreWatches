<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="index.html"
              aria-expanded="false"
              ><i class="mdi mdi-view-dashboard"></i
              ><span class="hide-menu">Dashboard</span></a
            >
          </li>
          {{-- <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="charts.html"
              aria-expanded="false"
              ><i class="mdi mdi-chart-bar"></i
              ><span class="hide-menu">Charts</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="widgets.html"
              aria-expanded="false"
              ><i class="mdi mdi-chart-bubble"></i
              ><span class="hide-menu">Widgets</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="tables.html"
              aria-expanded="false"
              ><i class="mdi mdi-border-inside"></i
              ><span class="hide-menu">Tables</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="grid.html"
              aria-expanded="false"
              ><i class="mdi mdi-blur-linear"></i
              ><span class="hide-menu">Full Width</span></a
            >
          </li> --}}
          <li class="sidebar-item">
            <a href="{{route('supplierIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-outline"></i
              ><span class="hide-menu"> Qu???n l?? nh?? cung c???p </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('typeIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Lo???i (Nam/N???) </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('productIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Qu???n l?? s???n ph???m </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('customerIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Qu???n l?? ng?????i d??ng </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('orderIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Qu???n l?? h??a ????n </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('order_detailsIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Th??ng tin gi??? h??ng </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('feedbackIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Qu???n l?? Feedback </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('newIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Qu???n l?? Blog </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('roleIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Role </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('roleUserIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> Role User </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('userIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> User </span></a
            >
          </li>
          <li class="sidebar-item">
            <a href="{{route('productimageIndex')}}" class="sidebar-link"
              ><i class="mdi mdi-note-plus"></i
              ><span class="hide-menu"> H??nh ???nh th??m S???n Ph???m </span></a
            >
          </li>
          {{-- <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="pages-buttons.html"
              aria-expanded="false"
              ><i class="mdi mdi-relative-scale"></i
              ><span class="hide-menu">Buttons</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-face"></i
              ><span class="hide-menu">Icons </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="icon-material.html" class="sidebar-link"
                  ><i class="mdi mdi-emoticon"></i
                  ><span class="hide-menu"> Material Icons </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="icon-fontawesome.html" class="sidebar-link"
                  ><i class="mdi mdi-emoticon-cool"></i
                  ><span class="hide-menu"> Font Awesome Icons </span></a
                >
              </li>
            </ul>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="pages-elements.html"
              aria-expanded="false"
              ><i class="mdi mdi-pencil"></i
              ><span class="hide-menu">Elements</span></a
            >
          </li> --}}
          {{-- <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-move-resize-variant"></i
              ><span class="hide-menu">Addons </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="index2.html" class="sidebar-link"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu"> Dashboard-2 </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="pages-gallery.html" class="sidebar-link"
                  ><i class="mdi mdi-multiplication-box"></i
                  ><span class="hide-menu"> Gallery </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="pages-calendar.html" class="sidebar-link"
                  ><i class="mdi mdi-calendar-check"></i
                  ><span class="hide-menu"> Calendar </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="pages-invoice.html" class="sidebar-link"
                  ><i class="mdi mdi-bulletin-board"></i
                  ><span class="hide-menu"> Invoice </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="pages-chat.html" class="sidebar-link"
                  ><i class="mdi mdi-message-outline"></i
                  ><span class="hide-menu"> Chat Option </span></a
                >
              </li>
            </ul>
          </li> --}}
          {{-- <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-account-key"></i
              ><span class="hide-menu">Authentication </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="authentication-login.html" class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu"> Login </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="authentication-register.html" class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu"> Register </span></a
                >
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-alert"></i
              ><span class="hide-menu">Errors </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="error-403.html" class="sidebar-link"
                  ><i class="mdi mdi-alert-octagon"></i
                  ><span class="hide-menu"> Error 403 </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="error-404.html" class="sidebar-link"
                  ><i class="mdi mdi-alert-octagon"></i
                  ><span class="hide-menu"> Error 404 </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="error-405.html" class="sidebar-link"
                  ><i class="mdi mdi-alert-octagon"></i
                  ><span class="hide-menu"> Error 405 </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="error-500.html" class="sidebar-link"
                  ><i class="mdi mdi-alert-octagon"></i
                  ><span class="hide-menu"> Error 500 </span></a
                >
              </li>
            </ul>
          </li> --}}
          {{-- <li class="sidebar-item p-3">
            <a
              href="https://github.com/wrappixel/matrix-admin-bt5"
              target="_blank"
              class="
                w-100
                btn btn-cyan
                d-flex
                align-items-center
                text-white
              "
              ><i class="mdi mdi-cloud-download font-20 me-2"></i>Download
              Free</a
            >
          </li> --}}
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>