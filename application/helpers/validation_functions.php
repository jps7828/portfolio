<?php

  // is_blank('abcd')
  // * validate data presence
  // * uses trim() so empty spaces don't count
  // * uses === to avoid false positives
  // * better than empty() which considers "0" to be empty
function is_blank($value) {
  return !isset($value) || trim($value) === '';
}

  // has_presence('abcd')
  // * validate data presence
  // * reverse of is_blank()
  // * I prefer validation names with "has_"
function has_presence($value) {
  return !is_blank($value);
}

  // has_length_greater_than('abcd', 3)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
function has_length_greater_than($value, $min) {
  $length = strlen($value);
  return $length > $min;
}

  // has_length_less_than('abcd', 5)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
function has_length_less_than($value, $max) {
  $length = strlen($value);
  return $length < $max;
}

  // has_length_exactly('abcd', 4)
  // * validate string length
  // * spaces count towards length
  // * use trim() if spaces should not count
function has_length_exactly($value, $exact) {
  $length = strlen($value);
  return $length == $exact;
}

  // has_length('abcd', ['min' => 3, 'max' => 5])
  // * validate string length
  // * combines functions_greater_than, _less_than, _exactly
  // * spaces count towards length
  // * use trim() if spaces should not count
function has_length($value, $options) {
  if(isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
    return false;
  } elseif(isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
    return false;
  } elseif(isset($options['exact']) && !has_length_exactly($value, $options['exact'])) {
    return false;
  } else {
    return true;
  }
}

  // has_inclusion_of( 5, [1,3,5,7,9] )
  // * validate inclusion in a set
function has_inclusion_of($value, $set) {
 return in_array($value, $set);
}

  // has_exclusion_of( 5, [1,3,5,7,9] )
  // * validate exclusion from a set
function has_exclusion_of($value, $set) {
  return !in_array($value, $set);
}

  // has_string('nobody@nowhere.com', '.com')
  // * validate inclusion of character(s)
  // * strpos returns string start position or false
  // * uses !== to prevent position 0 from being considered false
  // * strpos is faster than preg_match()
function has_string($value, $required_string) {
  return strpos($value, $required_string) !== false;
}

  // has_valid_email_format('nobody@nowhere.com')
  // * validate correct format for email addresses
  // * format: [chars]@[chars].[2+ letters]
  // * preg_match is helpful, uses a regular expression
  //    returns 1 for a match, 0 for no match
  //    http://php.net/manual/en/function.preg-match.php
function has_valid_email_format($value) {
  $email_regex = '/\A[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\Z/i';
  return preg_match($email_regex, $value) === 1;
}

  // has_unique_page_menu_name('History')
  // * Validates uniqueness of pages.menu_name
  // * For new records, provide only the menu_name.
  // * For existing records, provide current ID as second arugment
  //   has_unique_page_menu_name('History', 4)
function has_unique_page_menu_name($menu_name, $current_id="0") {
  global $db;

  $sql = "SELECT * FROM pages ";
  $sql .= "WHERE menu_name='" . db_escape($db, $menu_name) . "' ";
  $sql .= "AND id != '" . db_escape($db, $current_id) . "'";

  $page_set = mysqli_query($db, $sql);
  $page_count = mysqli_num_rows($page_set);
  mysqli_free_result($page_set);

  return $page_count === 0;
}

  // has_unique_username('johnqpublic')
  // * Validates uniqueness of admins.username
  // * For new records, provide only the username.
  // * For existing records, provide current ID as second argument
  //   has_unique_username('johnqpublic', 4)
function has_unique_username($username, $current_id="0") {
  // global $db;

  $sql = "SELECT * FROM admins ";
  $sql .= "WHERE username='" . db_escape($db, $username) . "' ";
  $sql .= "AND id != '" . db_escape($db, $current_id) . "'";

  $result = mysqli_query($db, $sql);
  $admin_count = mysqli_num_rows($result);
  mysqli_free_result($result);

  return $admin_count === 0;
}


function image_validation($file_path, $file_name)
{ 
  $target_dir = 'assets/web/images/' . $file_path;
  $target_file = $target_dir .'/' . basename($_FILES[$file_name]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES[$file_name]["tmp_name"]);
  if($check !== false) {} else 
  {
    $errors['type'] = "File type is not an image.";
  }

      // Check if file already exists
  if (file_exists($target_file)) 
  {
      // $errors['exist'] = "Sorry, file already exists.";
  }

      // Check file size 5mb
  if ($_FILES[$file_name]["size"] > 5000000) {
    $errors['size'] = "Sorry, image size limit is 5 MB.";
  }

      // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
  {
    $errors['format'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  }

    // Lastly upload file if all is good
  if (!empty($errors)) 
  {
    return $errors;
  }else
  {
    move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_file);
    set_msg('File up', 'S');
    return $target_file;
  }
}


function check_form_error($array)
{
  function validate_form($array) 
  { 
    $errors[] = "";
    if(is_blank($array['feedback_name'])) {
      $errors['feedback_name'] = "Name cannot be blank.";
    } elseif (!has_length($array['feedback_name'], array('min' => 2, 'max' => 255))) {
      $errors['feedback_name'] = "Name must be between 2 and 255 characters.";
    }

    if(is_blank($array['feedback_phone'])) {
      $errors['feedback_phone'] = "Mobile number cannot be blank.";
    } elseif (!has_length($array['feedback_phone'], array('min' => 10, 'max' => 10))) {
      $errors['feedback_phone'] = "Mobile number must be exactly 10 characters.";
    }

    if(is_blank($array['feedback_email'])) {
      $errors['feedback_email'] = "Email cannot be blank.";
    } elseif (!has_length($array['feedback_email'], array('max' => 255))) {
      $errors['feedback_email'] = "Email name must be less than 255 characters.";
    } elseif (!has_valid_email_format($array['feedback_email'])) {
      $errors['feedback_email'] = "Email must be a valid format.";
    }

    if(is_blank($array['feedback_subject'])) {
      $errors['feedback_subject'] = "Subject cannot be blank.";
    } elseif (!has_length($array['feedback_subject'], array('min' => 2, 'max' => 255))) {
      $errors['feedback_subject'] = "Subject must be between 2 and 255 characters.";
    } 

    if(is_blank($array['feedback'])) {
      $errors['feedback'] = "Message cannot be blank.";
    } elseif (!has_length($array['feedback'], array('min' => 8, 'max' => 255))) {
      $errors['feedback'] = "Message must be between 8 and 255 characters.";
    } 

    return $errors;
  }

  $errors = validate_form($array);
  if (!empty($errors)) {
    return $errors;
  }
}

?>