<?php 

class DonationHandler{
    public function getAllDonations(){
        $db = new database;
        $post_data = $db->select('donation');
            foreach($post_data as $post) {
              echo '<tr>';
              echo '<td>' . $post["ID"] . '</td>';
              echo '<td>' . $post["alumni_email"] . '</td>';
              echo '<td>' . $post["Amount"] . '</td>';
              echo '</tr>';
            }
    }
    
}

?>