<div class="row start-xs">
    <div class="col-xs-12 col-md-12">
        <h1>Search results</h1>
    </div>

    <div class="col-xs-3 col-md-3">
        <form method="GET">
            <div class="input-group">
                <input type="hidden" name="op" value="search"/>
                <input class="form-control" type="text" name="query" placeholder="Search products..."
                       aria-label="Search product...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-xs-9 col-md-9">
        <button class="btn btn-secondary" onclick="returnHome()" style="float:right">Return</button>
    </div>
</div>