<?php

 $wardtyp_info = $this->db->get('wardtype')->result_array();
$single_ward_info = $this->db->get_where('ward', array('ward_id' => $param2))->result_array();
foreach ($single_ward_info as $row) {
?>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        <h3><?php echo get_phrase('no_of_beds'); ?></h3>
                    </div>
                </div>

                <div class="panel-body">

                    <form role="form" class="form-horizontal form-groups validate"
                    
                        action="<?php echo site_url('admin/ward/update/'.$row['ward_id']); ?>" 
                            method="post" enctype="multipart/form-data">


                        
                            <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('ward'); ?></label>

                            <div class="col-sm-7">
                                <input type="text" name="ward" class="form-control" id="field-1" value="<?php echo $row['ward']; ?>" required>
                            </div>
                        </div>    


                    <div class="form-group">
                        <label for="field-ta" class="col-sm-3 control-label"><?php echo get_phrase('ward_type'); ?></label>

                        <div class="col-sm-7">
                            <select name="name" class="form-control select2" required>
                                <option value=""><?php echo get_phrase('select_ward_type'); ?></option>
                                <?php foreach ($wardtyp_info as $row2) { ?>
                                    <option ><?php echo $row2['name'] ; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                        <div class="form-group">
                            <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('no_of_beds'); ?></label>

                            <div class="col-sm-7">
                                <input type="text" name="no_of_beds" class="form-control" id="field-1" value="<?php echo $row['no_of_beds']; ?>" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                    </div>
                        <div class="col-sm-3 control-label col-sm-offset-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> <?php echo get_phrase('update');?>
                            </button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
<?php } ?>
