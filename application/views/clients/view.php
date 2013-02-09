<?php $this->load->view("partial/header"); ?>

<div class="btn-toolbar">
    <button class="btn btn-success" data-link="clients/form" data-toggle="modal">New User</button>
    <button class="btn btn-info" href="clients/form" title="Import" data-toggle="modal" >Import</button>
    <button class="btn  btn-info">Export</button>
</div>

<?php echo $content  ?>   
<div id="pagination" >
	<?php echo $page_links; ?>
</div>
<?php $this->load->view("partial/footer"); ?>