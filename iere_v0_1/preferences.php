<?PHP

/* SET GLOBAL VARIABLES - DON'T CHANGE */
global $dropdown_preferences; 
global $promoter_preferences; 
global $events_table;

/* PREFERENCE VALUES - CHANGE THESE */
/*
  $dropdown_preferences sets the preferences for the auto-populated values for dropdowns. 0 is JUST those on 
  the default list on the server, 1 is all values previously input by anyone, and 2 is all those only by the 
  promoter.
*/
$dropdown_preferences = 1; 

/*
  $promoter_preferences sets the preferences for the contact information population.  1 populates these with 
  the information on the promoter's profile, and 0 doesn't populate these forms.
*/
$promoter_preferences = 1; 

/*
  $events_table sets the name of the Events ColumnFamily on the server; default is 'Events'.
*/
$events_table = 'Events';

?>