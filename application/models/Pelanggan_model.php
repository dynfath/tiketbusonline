<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pelanggan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pelanggan by id_pelanggan
     */
    function get_pelanggan($id_pelanggan)
    {
        return $this->db->get_where('pelanggan',array('id_pelanggan'=>$id_pelanggan))->row_array();
    }
    
    /*
     * Get all pelanggan count
     */
    function get_all_pelanggan_count()
    {
        $this->db->from('pelanggan');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all pelanggan
     */
    function get_all_pelanggan($params = array())
    {
        $this->db->order_by('id_pelanggan', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('pelanggan')->result_array();
    }
        
    /*
     * function to add new pelanggan
     */
    function add_pelanggan($params)
    {
        $this->db->insert('pelanggan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pelanggan
     */
    function update_pelanggan($id_pelanggan,$params)
    {
        $this->db->where('id_pelanggan',$id_pelanggan);
        return $this->db->update('pelanggan',$params);
    }
    
    /*
     * function to delete pelanggan
     */
    function delete_pelanggan($id_pelanggan)
    {
        return $this->db->delete('pelanggan',array('id_pelanggan'=>$id_pelanggan));
    }
}
