<?php

class Material_model extends CI_Model {

	public function add($data,$file){
		$data['material_file'] = $file['material_file']['name'];
		$item_arr = ['image_name', 'image_tag', 'image_title','material_file'];
		$filter_data = elements($item_arr, $data);
		$this->db->insert('materials', $filter_data);
	}

	public function get($slider_image_id = "") {
		if (!empty($slider_image_id)) {
			return $this->db->get_where('materials', ['id' => $slider_image_id])->row_array();
		} else {
			return $this->db->get('materials')->result_array();
		}
	}

//	public function update($data) {
//		$item_arr = ['image_name', 'image_tag', 'image_title', 'image_sub_title', 'sort_order'];
//
////        exit();
//		if (empty($data['image_name'])) {
//			$indexCompleted = array_search('image_name', $item_arr);
//			unset($item_arr[$indexCompleted]);
//		}
//		$filter_data = elements($item_arr, $data);
//		return $this->db->update('materials', $filter_data, ['slider_image_id' => $data['slider_image_id']]);
//	}

	public function delete($slider_image_id) {
		$this->db->delete('materials', ['id' => $slider_image_id]);
	}

}

?>
