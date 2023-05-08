<? 

class FeedbackHandler{




  function displayFeedbackSection() {

    $db = new database;
    $post_data = $db->select('feedback');
  
    echo '<div class="section testimonials" id="feedback">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-lg-7">';
    echo '<div class="owl-carousel owl-testimonials">';
  
    foreach($post_data as $post) {
      $name = $post["name"];
      $content = $post["content"];
      $role = $post["role"];
  
      echo '<div class="item">';
      echo '<p>' . $content . '</p>';
      echo '<div class="author">';
      echo '<span class="category">' . $role . '</span>';
      echo '<h4>' . $name . '</h4>';
      echo '</div>';
      echo '</div>';
    }
  
    echo '</div>';
    echo '</div>';
    echo '<div class="col-lg-5 align-self-center">';
    echo '<div class="section-heading">';
    echo '<h6>FEEDBACK</h6>';
    echo '<h2>What they say about us?</h2>';
    // echo '<p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
}


?>