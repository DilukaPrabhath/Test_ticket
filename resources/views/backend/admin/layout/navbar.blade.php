            <!-- Nav Item - Alerts -->


            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <!-- <a class="nav-link" href="{{url('admin/messages')}}" > -->
                <!-- <i class="fas fa-envelope fa-fw"></i> -->
                <!-- Counter - Messages -->

              <!-- </a> -->
              <!-- Dropdown - Messages -->

            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                  <img class="img-profile rounded-circle" src="{{asset('upload/User/1613376333.jpeg')}}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                        <!--   <button type="submit" value="" style=" background-color: Transparent;background-repeat:no-repeat;border: none; text-align: center;"><i class="fas fa-sign-out-alt" >Log Out</i></button> -->
                      </form>
                </div>
              </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
