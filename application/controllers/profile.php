<?php
session_start();

class profile extends CI_Controller
{
	public function index()
	{	
		$this->db->select("*");
		$this->db->from("tbl_member");
		$this->db->join("tbl_partner_preference","tbl_partner_preference.member_id=tbl_member.member_id");
		$this->db->where("tbl_member.member_id",$_SESSION['member_id']);
		$page_data["resultset"]=$this->db->get();
		$this->load->view("user/profile_view",$page_data);
	}

	public function edit_profile()
	{
		$this->load->view("user/edit_profile_view");
	}

	public function update_info($param)
	{
		if($param=="myself")
		{
			$data["member_name"]=$this->input->post("txt_fullname");
			$data["member_gender"]=$this->input->post("rdo_gender");
			$data["member_address"]=$this->input->post("txt_address");
			$data["member_marital_status"]=$this->input->post("rdo_marital_status");
			$data["member_body_type"]=$this->input->post("rdo_body_type");
			$data["member_height"]=$this->input->post("txt_height");
			$data["member_physical_disable"]=$this->input->post("rdo_physical_disable");
			$data["member_drink"]=$this->input->post("rdo_drink");
			$data["country_id"]=$this->input->post("cmb_country");
			$data["state_id"]=$this->input->post("cmb_state");
			$data["city_id"]=$this->input->post("cmb_city");
			$data["member_other_city"]=$this->input->post("txt_other_city");
			$data["member_gol"]=$this->input->post("txt_gol");
			$data["member_email"]=$this->input->post("txt_email");
			$data["member_phone"]=$this->input->post("txt_contact");
			$data["member_mobile_no"]=$this->input->post("txt_mobile");
			$data["member_desc"]=$this->input->post("txt_desc");
			$data["member_mother_tongue_id"]=$this->input->post("cmb_mother_tongue");
			$data["member_skin_tone"]=$this->input->post("rdo_skin_tone");
			$data["member_weight"]=$this->input->post("txt_weight");
			$data["member_blood_group"]=$this->input->post("rdo_blood_group");
			$data["member_diet"]=$this->input->post("rdo_diet");
			$data["member_smoke"]=$this->input->post("rdo_smoke");
			$data["member_age"]=$this->input->post("txt_age");
			$data["member_postal_code"]=$this->input->post("txt_postal_code");
			$this->db->where("member_id",$_SESSION['member_id']);
			$this->db->update("tbl_member", $data);
		}
		else if($param=="birth")
		{
			$data["member_dob"]=$this->input->post("txt_dob");
			$data["member_birth_place"]=$this->input->post("txt_birth_place");
			$data["member_birth_time"]=$this->input->post("txt_birth_time");
			$data["member_belive_horoscope"]=$this->input->post("rdo_belive_horoscope");
			$data["member_shani_mangal_desc"]=$this->input->post("txt_shani_mangal");
			$this->db->where("member_id",$_SESSION['member_id']);
			$this->db->update("tbl_member", $data);
		}
		else if($param=="education")
		{
			$data["member_education"]=$this->input->post("txt_education");
			$data["member_occupation"]=$this->input->post("cmb_occupation");
			$data["member_other_occupation"]=$this->input->post("txt_other_occupation");
			$data["member_annual_income"]=$this->input->post("txt_annual_income");
			$data["member_job_desc"]=$this->input->post("txt_job_desc");
			$this->db->where("member_id",$_SESSION['member_id']);
			$this->db->update("tbl_member", $data);
		}
		else if($param=="family")
		{
			$data["member_father_name"]=$this->input->post("txt_father_name");
			$data["member_parents_alive"]=$this->input->post("rdo_mother_father_alive");
			$data["member_father_occupation"]=$this->input->post("txt_father_occupation");
			$data["member_mother_occupation"]=$this->input->post("txt_mother_occupation");
			$data["member_brother"]=$this->input->post("txt_no_of_brothers");
			$data["member_sister"]=$this->input->post("txt_no_of_sisters");
			$data["member_married_brother"]=$this->input->post("txt_no_of_brothers_married");
			$data["member_married_sister"]=$this->input->post("sisters");
			$this->db->where("member_id",$_SESSION['member_id']);
			$this->db->update("tbl_member", $data);
		}
		else if($param=="other")
		{
			$data["member_children_boy"]=$this->input->post("txt_girl_child");
			$data["member_children_girl"]=$this->input->post("txt_boy_child");
			$data["member_residence_status"]=$this->input->post("cmb_residence");
			$data["member_nri_candidates_applicable"]=$this->input->post("rdo_marry_nri");
			$data["member_expectation"]=$this->input->post("txt_expectation");
			$this->db->where("member_id",$_SESSION['member_id']);
			$this->db->update("tbl_member", $data);
		}
		$this->db->select("*");
		$this->db->from("tbl_member");
		$this->db->join("tbl_partner_preference","tbl_partner_preference.member_id=tbl_member.member_id");
		$this->db->where("tbl_member.member_id",$_SESSION['member_id']);
		$page_data["resultset"]=$this->db->get();
		$this->load->view("user/profile_view",$page_data);

	}
}
?>