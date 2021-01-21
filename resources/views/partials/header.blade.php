<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #058e24;">

        <div class="collapse navbar-collapse container" id="navbarText">
        
         <a class="navbar-brand" href="#">Booklist Site©</a> 
            
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Homepage <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('books.index') }}">Booklist</a>
            </li>
          </ul>
          <span class="navbar-text">
            <a class="nav-link" href="{{ route('books.create') }}">Add new books</a>
          </span>
        </div>
      </nav>
</header>