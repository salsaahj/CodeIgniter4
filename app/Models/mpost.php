public function save($data)
{
    if ($this->db->insert('post', $data)) { //jika data berhasil di input ke database maka
 
        return true; // mengembalikan nilai true
     
    } else { //jika gagal maka
     
        return false;  //mengembalikan nilai false
     
    }
}

public function getPost($id)
{
    $this->db->select('*');
    $this->db->from('post');
    $this->db->where('id_post', $id);
    return $this->db->get();
}
 
public function getAllPostFromUser($user)
{
    $this->db->select('*');
    $this->db->from('post');
    $this->db->where('id_user', $user);
    return $this->db->get();
}

public function getAll()
{
 
    $this->db->select('post.judul, post.isi, post.waktu, user.username')
             ->from('post')
             ->join('user', 'post.id_user = user.id_user');
    return $this->db->get();
}

public function update($id, $data)
{
    $this->db->where('id_post', $id);
    if ($this->db->update('post', $data)) { //jika data berhasil diupdate ke database maka
 
        return true; // mengembalikan nilai true
     
    } else { //jika gagal maka
     
        return false;  //mengembalikan nilai false
     
    }
}

public function delete($id)
    {
        $this->db->where('id_post', $id);
        if ($this->db->delete('post')) { //jika data berhasil diupdate ke database maka
 
            return true; // mengembalikan nilai true
         
        } else { //jika gagal maka
         
            return false;  //mengembalikan nilai false
         
        }
    }
}
