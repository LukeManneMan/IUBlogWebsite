# IUBlogWebsite
Uni Blog Website Project

Need to create MySQL DB
Create PHP files to build the website and db connections.
Once the PHP is looking good, get started on the JS and CSS 

Get more info on how Bootstrap works to implement into the project

As per feedback from the Phase 1 submission, I must have a deep look into the security vulnerabilities.
Specifically:

The transmission of the admin credentials - need to use PHP's password_hash() function and PHP's session handling functionality.

Rename the password field in administrator table to passwordHash to show secure data practices.

Research how to protect the transmission of the HTML text from Quill to protect from cross-site scripting attacks.

Check to see how CRUD will work with Quill and the posts on the website.

In the DB side, need to add a column in the Posts table inculding image paths for each individual post, see how that will work will multiple images in a post.

*note, previously installed php, mysql standalone, gave many headaches with manual configuration, after research found laragon which does it all
for you in Windows, going to try that

No longer using Quill for the text editor, quite a pain to export the HTML to the DB, switching to TinyMCE
