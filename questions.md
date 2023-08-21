## About You.

 1. Introduce yourself.
 2. Describe your development environment. (Your OS, IDE, Editor and Config manager if any)
 3. Which all programming languages are installed on your system?
 4. Any programming language interested to learn next?

## Social Profile
 1. Your Github profile URL.
 2. LinkedIn profile.
 3. Personal website, blog or something you want us to see.

## The Real Stuff.
 1. __*__ Write a function that takes a number and returns an array of its digits.
 2. __*__ Write a function that translates a text to Pig Latin and back. English is translated to Pig Latin by taking the first letter of every word, moving it to the end of the word and adding ‘ay’. “Join with yellowfish” becomes “oinjay ithway ellowfishyay”.
 3. __*__ Write a function that rotates an array by k elements. For example [1,2,3,4,5,6] rotated by two becomes [3,4,5,6,1,2]. Try solving this without creating a copy of the array.
 4. __*__ Choose any one of the following options below for an ERP system:-
    1. Option 1 - __User Designation Management System__
       1. Dashboard with a max of 4 snapshot cards consisting of Total Designations, Total Users, Active Users and Inactive Users.
       2. Page to manage Designations.
          1. Should be able to add and edit the designations with active/inactive status with proper validations using Ajax form submission.
          2. List page should show the Designation title and status.
       3. Page to manage Users.
          1. Should be able to add and edit users with Name, Email, Contact Number, Alternative Contact Number, Address, Designation, Active/Inactive status using Ajax form submission.
          2. List the users in alphabetical order.
          3. Provide filters in the **Users** list without reloading the entire page based on:-
             1. Designations
             2. User statuses
          4. Refer [Features section](features-for-the-erp-system) for other details.
      
    2. Option 2 - __Create a URL shortener using Laravel__
       1. Refer [Bitly](https://bitly.com).
       2. Add 1 snapshot card in the dashboard to show the total URL count.
       3. Page to view all URLs shortened with the add form on top to shorten new URLs.
       4. Need to validate the URLs properly.
       5. Shortening function must use Ajax submit and the list must be updated without refreshing the page with the last one on top.
       6. Fields need to be captured when shorten URLs are Title and URL.
       7. Fields that need to be listed in the table are Title, URL, Short URL and Created Date and need a button to copy the short URL against each row.
       8. Do not use any API to shorten the URL.
       9. Refer [Features section](features-for-the-erp-system) for other details.
    
     ### Features for the ERP system:
     1. Use [AdminLTE template](https://adminlte.io/themes/v3/) or you can use any other template.
     2. Sign Up (Must use Laravel Auth).
     3. Sign In (Must use Laravel Auth).
     4. User log out (Must use Laravel Auth).
     5. Must use Laravel migration.
     6. Must use Eloquent ORM.
     7. Ajax form submissions preferably.
     8. Create a repository on any git hosting provider and upload the project, using the proper .gitignore file. Attach the repository URL as an answer to this question.
     9. If possible host the project in any cloud hosting and include the URL in the readme.md file of the repository.
     10. Include any future enhancement that you like to do for the app in the readme.md file (if any).
    
Note: It is mandatory that you answer all the questions starting with a __*__. You may leave others behind and
create a PR. However maximum questions will earn you maximum points. It is advised that you answer
all the puzzles in the language that you are applying for.
