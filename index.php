<?

// table for admins
admin_id
admin_username
admin_hash
timestamp

// table for users
user_id VARCHAR
name VARCHAR
gender VARCHAR
attributes JSON
timestamp

// content
content_id VARCHAR
message_body JSON
timestamp
  
// images
image_id VARCHAR
image_content BLOB
timestamp
  
// message history
message_id VARCHAR
from VARCHAR
to VARCHAR
content_id VARCHAR
json VARCHAR
timestamp
  
  
// Log in
  
// Admin interface
  // View users
  // View content
  // Edit individual content
  // Send
  // View message history
  
// API

?>
