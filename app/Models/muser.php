public function checkLogin($username, $password)
{
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
 
    return $this->db->get();
}

public function getUser($id)
{
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id_user', $id);
 
    return $this->db->get();
}
