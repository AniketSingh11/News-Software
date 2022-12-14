<?php
$this->load->view('admin/view_left_menu.php');
?>
<aside class="right-side">
    <?php
    if ($previous_settings != false) {
        extract((array) json_decode($previous_settings));
    }
    if ($previous_footer_logo != false) {
        extract((array) json_decode($previous_footer_logo));
    }
    ?>

    <section class="content col-sm-10">    
        <div class="page_heading"><i class="glyphicon glyphicon-cog"></i>&nbsp; <?php echo display('website_logo')?> </div>
        <?php
        if ($this->session->flashdata('message')) {
            echo '<div class="alert alert-success"><button class="close" data-dismiss="alert">&times;</button><b>';
            echo $this->session->flashdata('message');
            echo '</b></div>';
        }
        if ($this->session->flashdata('exception')) {
            echo '<div class="alert alert-danger"><button class="close" data-dismiss="alert">&times;</button><b>';
            echo $this->session->flashdata('exception');
            echo '</b></div>';
        }

        $attributs = array('method' =>'post', );
        echo form_open_multipart('admin/View_setup/save_website_logo',$attributs);
        ?>
        <div class="form-group">
                <div class="row single_field">
                    <div class="col-sm-2"><label><?php echo display('logo')?></label></div>
                    <div class="col-sm-5">
                        <input type="file" name="website_logo" accept="image/*" id="per_page_view">
                    </div>                
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <?php
                        echo '<img src="' . base_url() . @$website_logo . '">';
                        ?>
                    </div>
                </div>
                <div class="row single_field">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input type="submit" name="save" value="Update" class="btn btn-primary">
                    </div>
                </div> 
            </div>                      
        <?php echo form_close();?>

        <?php 
        $attributs = array('method' =>'post', );
        echo form_open_multipart('admin/View_setup/save_footer_logo',$attributs);
        ?>

        <div class="form-group">
                <div class="row single_field">
                    <div class="col-sm-2"><label><?php echo display('footer_logo')?></label></div>
                    <div class="col-sm-5">
                        <input type="file" name="footer_logo" accept="image/*" id="per_page_view">
                    </div>                
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <?php
                        echo '<img src="' . base_url() . @$footer_logo . '">';
                        ?>
                    </div>
                </div>
                <div class="row single_field">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input type="submit" name="save" value="<?php echo display('update')?>" class="btn btn-primary">
                    </div>
                </div> 
            </div>                      
       <?php echo form_close();?>
    </section>
</aside>