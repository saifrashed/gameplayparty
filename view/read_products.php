<div class="row start-xs">
    <div class="col-xs-12 col-md-12">
        <h1>Read products</h1>
    </div>

    <div class="col-xs-3 col-md-3">
        <form method="GET">
            <div class="input-group">
                <input type="hidden" name="op" value="search"/>
                <input class="form-control" type="text" name="query" placeholder="Search products..." aria-label="Search product...">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-xs-9 col-md-9">
        <button class="btn btn-light" onclick="newProduct();" style="float:right;"><i class="fas fa-plus"></i> Create product</button>
        <button class="btn btn-light" style="float:right; margin-right: 10px;"><i class="far fa-check-square"></i> Delete selected </button>
    </div>
</div>
