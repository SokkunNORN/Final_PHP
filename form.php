

<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="" class="text-white">First Number:</label>
                        <input type="number" name="first" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-white">Select Operator:</label>
                        <select name="operator" id="" class="form-control">
                            <option value="">None</option>
                            <option value="Add">Add</option>
                            <option value="Minus">Minus</option>
                            <option value="Multiply">Multiply</option>
                            <option value="Divide">Divide</option>
                        </select>
                    </div>
                    <div class="form-group" class="text-white">
                        <label for="" class="text-white">Second Number:</label>
                        <input type="number" name="second" required class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success text-white" name="btn-cal">Calculate</button>
                    </div>
                </form>
                <p class="text-white">The result is: <?php include 'cal.php'; ?></p>
            </div>
        </div>
    </div>
    <div class="col-3"></div>
</div>





