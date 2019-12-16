<nav class="nav d-none d-sm-block col-md-3">
        <div id="navbar" class="d-flex flex-column fixed-bottom sidenav">
            <ul id="nav-list nav navbar-nav" class="navlist">

             <li class=""><router-link to='/' exact><h3>Home</h3></router-link></li>
             <li class=""><router-link to='/graphics'><h3>Graphics</h3></router-link></li>
             <li class=""><router-link :to="{ name: 'about'}"><h3>About</h3></router-link></li>

         </ul>
     </div>
 </nav>
