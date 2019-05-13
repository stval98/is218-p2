# IS 218 Project 2 - To-do List

**Group:** Sophia Saint-Val
**AFS Link:** https://web.njit.edu/~sas238/download/IS218/Projects/Project%202/login.php

Requirements:
--------------
Please design an EASY to-do list web application. It must have a front-end and back-end (php)
connecting to a database.

1. **Database:** please use the sql script I provided for Project #2 (it is on moodle) to create databases. It should create two tables: accounts and todos, after you import it.
2. The **app** must have a signup, signout, and login function. (25%)
	1. **Signup** should take at least the following information:
	        1. User name: must be an email.
        	2. Password
        	3. First name
        	4. Last name
            5. College
            6. Major
	2. The app should allow users to sign out anytime and any page. After signing out, the app should be directed to another page showing a msg: You have been signed out.
	3. Login: registered users can log in using user name and password. It must have input field validation capability:
	    1. verify whether the entered user name is an email or not.
		2. No empty fields are allowed for submission, meaning that you need to check whether a field is empty or not before submitting the form.
		3. verify entered user name or password are valid or not (here requires server side validation.)
3. **System aspects (65%):**
	1. When a user logged into the system, on the main page, user’s names (first and last) should be always shown.
	2. On the home page , the user’s to-do items must be shown under a user’s name
        1. There should be a section that shows the incomplete to-do list items in chronological order. Label this section as “To-do items” or something similarly appropriate.
		2. There should be a section that shows the completed to-do list items in chronological order. Label this section as “Completed to-do items” or something similarly appropriate.
		3. **Buttons**
			1. For each existing (incomplete item) to-do item, you should have the following buttons:
				1. create a new to-do item. Label the button as “+”, “add”, or ”new”
				2. edit an existing to-do item: Label the button as “edit” or “modify” or “revise”
				3. delete an existing to-do item
				4. check-off an existing to-do item (meaning that users have completed the task). Label this button as “complete” or something appropriate for its functionality
					1. Once an to-do item is checked-off, the section of showing completed items should be refreshed to include this new checked-off item
			        2. For each existing completed item to-do item, you should have the following buttons:
				        1. Edit existing finished jobs
				        2. Delete one
				        3. Un-check off: meaning that if a completed item is “unchecked off”, the section of showing “incomplete to-do items” should be refreshed to include this un-checked item.
			    3. When you add/create a new to-do item, the user should be directed to a new page and ask for the following information:
			        1. Due date and time
				    2. A title
				    3. A description of the to-do item (max 144 characters allowed)
				    4. After saving the newly added to-do item, the user should be automatically redirected back to the home-page and it should be added in the section of showing all incomplete to-do items.
			    4. When you edit an existing to-do item (complete and in-complete), all existing information of a to-do item should be displayed to the user and editable. After saving the modified to-do item, the user should be automatically redirected back to the home-page and the modified item should be displayed in its corresponding section.
4. **Aesthetics (10%)**
	1. Style your page using CSS so that it looks polished