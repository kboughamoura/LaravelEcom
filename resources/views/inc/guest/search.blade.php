<div class="shop__sidebar__search">
    <form action="/search" method="POST">
        @csrf
        
        <input type="text" name="keyword" placeholder="Search By Product Name...">
        <button type="submit"><span class="icon_search"></span></button>
    </form>
</div>