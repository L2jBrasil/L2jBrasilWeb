<!-- Navbar -->
  <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index-2.html">
          <img src="/assets/images/logo.png" alt="">
        </a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="#!">Rates</a>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Como se Conectar <span class="caret"></span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li class="dropdown dropdown-submenu pull-left ">
                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Download</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="">Download MEGA</a>
                      </li>
                      <li><a href="">Download MediaFire</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href="blog-2.html">Requisitos Mínimos</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="dropdown dropdown-hover ">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Features <span class="caret"></span> <span class="label">full list</span>
                    </a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li class="dropdown dropdown-submenu pull-left ">
                  <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User</a>
                  <div class="dropdown-menu">
                    <ul role="menu">
                      <li><a href="user-activity.html">Activity</a>
                      </li>
                      <li><a href="user-profile.html">Profile</a>
                      </li>
                      <li><a href="user-messages.html">Messages</a>
                      </li>
                      <li><a href="user-messages-compose.html">Messages Compose</a>
                      </li>
                      <li><a href="user-settings.html">Settings</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li><a href="forums.html">Forums</a>
                </li>
                <li><a href="forums-topics.html">Forums Topics</a>
                </li>
                <li><a href="forums-single-topic.html">Single Topic</a>
                </li>
                <li><a href="matches-list.html">Matches List</a>
                </li>
                <li><a href="match.html">Match</a>
                </li>
                <li><a href="match-2.html">Match with Maps</a>
                </li>
              </ul>
              <ul role="menu">
                <li><a href="widgets.html">Widgets <span class="badge bg-default">New</span></a>
                </li>
                <li><a href="components.html">Components</a>
                </li>
                <li><a href="coming-soon.html">Coming Soon</a>
                </li>
                <li><a href="contact.html">Contact Us</a>
                </li>
                <li><a href="search.html">Search</a>
                </li>
                <li><a href="login.html">Login</a>
                </li>
                <li><a href="404.html">404</a>
                </li>
                <li><a href="blank.html">Blank</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @guest('accounts')

          <li class="dropdown dropdown-hover">
            <a href="#!" role="button" aria-expanded="false">Login / Register
                <i class="fas fa-sign-in-alt"></i>
            </a>
          </li>

          @else
          <li class="dropdown dropdown-hover">
            <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fas fa-user-circle"></i> Bem vindo, <span class="user">{{ auth()->guard('accounts')->user()->login }}</span> <span class="caret"></span></a>
            <div class="dropdown-menu">
              <ul role="menu">
                <li><a href="">Trocar Senha</a>
                </li>
                <li><a href="">Unstuck</a>
                </li>
                <li class="divider"></li>
                @if( Auth::guard('accounts')->user()->accessLevel  == 7)

                <li><a href="">Dashboard</a></li>
                @else
                @endif
                <li><a href="login.html">Log Out</a>
                </li>
              </ul>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- /Navbar -->
