<form class="navbar-form navbar-left" role="search" action="{{ route('search') }}" method='GET'>
    <div class="form-group">
        <input type="text" name="query" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default btsearch"><i class="fa fa-search"
                                                              aria-hidden="true"></i></button>
</form>