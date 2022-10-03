<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Item</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('programfee');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('programfeeCreate');?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
    <input class="form-control" name = "user_id" type="text" placeholder="<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" value = "<?php print $this->session->userdata('ci_seesion_key')['user_id']; ?>" readonly>
    <div class="form-group p-1">
                        <select class="form-select" aria-label="Default select example" name = "employee_id">
                            <option selected>select Employee</option>
                        <?php foreach ($data as $item) { ?>     
                        
                            <option value="<?php echo $item->employee_id; ?>"><?php echo $item->surname .' '. $item->firstname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_no</strong>
                <input type="text" name="voucher_no" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>serial no</strong>
                <input type="text" name="serial" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_date</strong>
                <input type="date" name="voucher_date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_amount</strong>
                <input type="text" name="voucher_amount" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>voucher_currency</strong>
                <input type="text" name="voucher_currency" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 ">
            <div class="form-group">
                <strong>program_start_date</strong>
                <input type="date" name="program_start_date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="form-group">
                <strong>program_end_date</strong>
                <input type="date" name="program_end_date" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>remarks</strong>
                <textarea name="remarks" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>