<?php
class _residents extends CI_Model
{
	/*
	Developer:  Loubrando Dejito
	Class:      Model
	Date: 		December 31, 2015
	Desc:		Retrieve employment data on [employment] look-up table
	*/
	function get_emp_data()
	{
		$query = $this->db->query("SELECT * FROM tbl_employment ORDER BY emp_id ASC");

		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}
		else
		{
			return false;
		}
	}


	/*
	Developer:  Loubrando Dejito
	Class:      Model
	Date: 		December 31, 2015
	Desc:		Retrieve all residents in a barangay
	*/
	function get_all_residents_data($brgy_id)
	{
		$query = $this->db->query("SELECT * FROM tbl_resident WHERE res_brgy_id = $brgy_id ORDER BY res_id DESC");

		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}
		else
		{
			return false;
		}
	}



	/*
	Developer:  Loubrando Dejito
	Class:      Model
	Date: 		December 31, 2015
	Desc:		Retrieve resident data
	*/
	function get_resident_data($res_id)
	{
		$query = $this->db->query("SELECT * FROM tbl_resident WHERE res_id = $res_id");

		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}
		else
		{
			return false;
		}
	}


	/*
	Developer:  Loubrando Dejito
	Class:      Model
	Date: 		December 31, 2015
	Desc:		Save new resident
	*/
	function save_resident()
	{	

		$sitio_id = $this->input->post('res_sitio_id');
		$sitio_query = $this->db->query("SELECT * FROM sitio WHERE sitio_id = $sitio_id");
		$sitio_row = $sitio_query->row();
		$sitio_name = $sitio_row->sitio_name;


		$emp_id = $this->input->post('res_emp_id');
		$emp_query = $this->db->query("SELECT * FROM tbl_employment WHERE emp_id = $emp_id");
		$emp_row = $emp_query->row();
		$emp_desc = $emp_row->emp_desc;

		$res_refkey = 'RES-'.date('YmdHis');
		$data_resident = array(
			'res_refkey' => $res_refkey,
			'res_fname' => $this->input->post('res_fname'),
			'res_mname' => $this->input->post('res_mname'),
			'res_lname' => $this->input->post('res_lname'),
			'res_religion' => $this->input->post('res_religion'),
			'res_civil_status' => $this->input->post('res_civil_status'),
			'res_spouse_name' => $this->input->post('res_spouse_name'),
			'res_no_childs' => $this->input->post('res_no_childs'),
			'res_child_names' => $this->input->post('res_child_names'),
			'res_age' => $this->input->post('res_age'),
			'res_gender' => $this->input->post('res_gender'),
			//'res_image' => $this->input->post('res_image'),
			//'res_address' => $this->input->post('res_address'),
			'res_emp_id' => $emp_id,
			'res_emp_desc' => $emp_desc,
			'res_brgy_id' => $this->input->post('res_brgy_id'),
			'res_brgy_name' => $this->input->post('res_brgy_name'),
			'res_sitio_id' => $sitio_id,
			'res_sitio_name' => $sitio_name,
			'res_city_id' => $this->input->post('res_city_id'), 
			'res_city_name' => $this->input->post('res_city_name'),
			'res_status' =>  $this->input->post('res_status')
			);


		$insert_resident = $this->db->insert('residents',$data_resident);
		if($insert_resident){ return 1;}else{ return  0;}

	}


	/*
	Developer:  Loubrando Dejito
	Class:      Model
	Date: 		December 31, 2015
	Desc:		Update resident information
	*/
	function update_resident()
	{	

		/*Retrieve sitio data*/
		$sitio_id = $this->input->post('res_sitio_id');
		$sitio_query = $this->db->query("SELECT * FROM sitio WHERE sitio_id = $sitio_id");
		$sitio_row = $sitio_query->row();
		$sitio_name = $sitio_row->sitio_name;

		/*Retrieve employment data on look-up table*/
		$emp_id = $this->input->post('res_emp_id');
		$emp_query = $this->db->query("SELECT * FROM tbl_employment WHERE emp_id = $emp_id");
		$emp_row = $emp_query->row();
		$emp_desc = $emp_row->emp_desc;

		
		$data_resident = array(
			
			'res_fname' => $this->input->post('res_fname'),
			'res_mname' => $this->input->post('res_mname'),
			'res_lname' => $this->input->post('res_lname'),
			'res_religion' => $this->input->post('res_religion'),
			'res_civil_status' => $this->input->post('res_civil_status'),
			'res_spouse_name' => $this->input->post('res_spouse_name'),
			'res_no_childs' => $this->input->post('res_no_childs'),
			'res_child_names' => $this->input->post('res_child_names'),
			'res_age' => $this->input->post('res_age'),
			'res_gender' => $this->input->post('res_gender'),
			//'res_image' => $this->input->post('res_image'),
			//'res_address' => $this->input->post('res_address'),
			'res_emp_id' => $emp_id,
			'res_emp_desc' => $emp_desc,
			'res_brgy_id' => $this->input->post('res_brgy_id'),
			'res_brgy_name' => $this->input->post('res_brgy_name'),
			'res_sitio_id' => $sitio_id,
			'res_sitio_name' => $sitio_name,
			'res_city_id' => $this->input->post('res_city_id'), 
			'res_city_name' => $this->input->post('res_city_name'),
			'res_status' =>  $this->input->post('res_status')
			);

		$this->db->where('res_id', $this->input->post('res_id'));
		$insert_resident = $this->db->update('residents',$data_resident);
		if($insert_resident){ return 1;}else{ return  0;}

	}


}

?>