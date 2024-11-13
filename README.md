# user-permissions

You can start with a JSON file for simplicity and later switch to a database by isolating the data access logic in a separate function or class. This way, when you're ready to switch to a database, you only need to modify the data access functions without changing the rest of the code.

Here’s how to set this up in a way that makes the transition to a database easy later on.

### Create the JSON File (data.json)

Create a JSON file to store user data. For this example, each user will have a UserID, UserName, and Permissions.


### Create a Data Access Script (data.php)

This script handles reading data from the JSON file. Later, you can replace JSON handling with database queries by modifying this file only.


### Create the Login Page (index.php)

This page displays a login form and checks the user’s permissions by calling getUserByUsername() from data.php.              

### Create the Dashboard Page (dashboard.php)

This page displays different content based on the user’s permissions stored in the session.

### Create the Logout Script (logout.php)

This script will log the user out by clearing the session.

### Transitioning to a Database Later

When you’re ready to move to a database, you’ll only need to change data.php. Replace the JSON handling code with database queries.

For example, getUserByUsername() could be modified if using a SQL database.


This approach makes the switch to a database straightforward without needing to change the main application logic.