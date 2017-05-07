<?php
class insert_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('member', $data);
 $this->load->library("pagination");
}


public function get_dropdown()
  {
    $result=$this->db->get('school');
    $dropdown=array();
    if( $result->num_rows() > 0 )
    {
          $dropdown[''] = 'Please Select';
     foreach($result->result_array() as $row)
       {
       $dropdown[$row['SchoolID']] = $row['Schoolname'];
       }
    }
    return $dropdown;

}





public function get_Pop($Dropdownval)
{


  $this ->db -> select('MemberName,Emailaddress, school.Schoolname');
  $this->db->from('member');
  $this->db->join('school','member.SchoolID = school.SchoolID','LEFT');
  $this->db->where('member.SchoolID', $Dropdownval);


  $query = $this->db->get();
  return $query->result();


}
}
?>
