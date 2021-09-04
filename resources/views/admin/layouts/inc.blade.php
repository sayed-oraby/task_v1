<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
     <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
          
          
           <li class="m-menu__item  @if(count(Request::segments()) == 1) m-menu__item--active @endif " aria-haspopup="true">
               <a href="{{ url('/admin') }}" class="m-menu__link">
                    <i class="m-menu__link-icon fa fa-paper-plane"></i>
                    <span class="m-menu__link-title"> 
                         <span class="m-menu__link-wrap"> 
                              <span class="m-menu__link-text">  Dashboard   </span>
                         </span>
                    </span>
               </a>
          </li>

          <li class="m-menu__item  {{ request()->is('admin/manager*') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
               <a href="{{ url('admin/manager') }}" class="m-menu__link "> 
                    <i class="m-menu__link-icon fa fa-paper-plane"></i>
                    <span class="m-menu__link-title"> 
                         <span class="m-menu__link-wrap"> 
                              <span class="m-menu__link-text">  Managers   </span>
                         </span>
                    </span>
                </a>
           </li>

           <li class="m-menu__item  {{ request()->is('admin/provider*') ? 'm-menu__item--active' : '' }} " aria-haspopup="true">
               <a href="{{ url('admin/provider') }}" class="m-menu__link "> 
                    <i class="m-menu__link-icon fa fa-paper-plane"></i>
                    <span class="m-menu__link-title"> 
                         <span class="m-menu__link-wrap"> 
                              <span class="m-menu__link-text">  Providers   </span>
                         </span>
                    </span>
                </a>
           </li>



         
          
         
     

          
  
     </ul>
</div>