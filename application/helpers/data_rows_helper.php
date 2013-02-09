<?php
function get_content($data_rows)
	{
	
	 $content='<table class="table table-striped table-bordered table-condensed table-hover">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Name</th>
					  <th>Company</th>
					  <th>Email</th>
					  <th>Phone</th>
					  <th>State</th>
					</tr>
				  </thead>
				  <tbody>';
          $row_no=1;    
		foreach($data_rows->result() as $row)
		{
			$content.="<tr > <td>".$row_no."</td>  <td>".$row->full_name."</td> <td>".$row->company_name."</td> <td>".$row->email."</td> <td>".$row->phone."</td> <td>".$row->state."</td>  </tr>";
			$row_no++;
		}
		
		return $content;
	}



?>