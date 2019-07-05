<div class="row start-xs">
    <div class="col-xs-12 col-md-12">
        <h1>Read products</h1>
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
        <button class="btn btn-secondary" onclick="returnHome()" style="float:right;">Return</button>
        <button class="btn btn-light" style="float:right;"><i class="fas fa-plus"></i> Create product</button>
        <button class="btn btn-light" style="float:right; margin-right: 10px;"><i class="far fa-check-square"></i> Delete selected </button>
    </div>
</div>

<div class="row center-xs">
    <form method="GET">
        <input type="hidden" name="op" value="create">

        <div class="form-group">
            <label for="formGroupExampleInput">Product name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name='product_name' placeholder="Name">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Product price</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name='product_price' placeholder="xx.xx">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Other details</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name='other_product_details' placeholder="Details">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Supplier ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name='supplier_id' placeholder="Supplier ID">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Product type code</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name='product_type_code' placeholder="Product type code">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
