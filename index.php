<?

// Table for user sessions
$sessions_table = [
  "session_id"  => "VARCHAR(50)",
	"session_token"	=> "VARCHAR(300)",
  "session_hash"    => "VARCHAR(100)",
  "session_secret"  => "VARCHAR(100)",
	"session_opened"	=> "VARCHAR(30)",
	"facebook_id"	=> "VARCHAR(100)",
	"facebook_name"	=> "VARCHAR(100)",
	"timestamp"	=>	"VARCHAR(100)",
	];
	
// Table for messenger users
$messenger_users_table [
	"facebook_id" => "VARCHAR(100)",
	"facebook_name"		=> "VARCHAR(100)",
	
	
	
	
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
  
  
// Log in ... if they have admin access to the page then they can go ahead. If not then no.
  
// Admin interface
  // View users
  // View content
  // Edit individual content
  // Send
  // View message history
  
// API

?>
