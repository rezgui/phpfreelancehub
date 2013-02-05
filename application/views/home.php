<?php $this->load->view("partial/header"); ?>


<h3><?php echo lang('common_welcome_message'); ?></h3>
<?php echo $this->session->userdata('user_id'); ?>

<?php $this->load->view("partial/footer"); ?>