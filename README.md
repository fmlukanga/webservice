
# URL to access HTTP Functions
Before using the HTTP functions, make sure to perform the following;
1. Install and configure the database (MySQL)
2. Download all the files preferrably zipped, the unzip the contents and place them under htdocs->xampp->place the entire working directory here
3. If you didnt follow step 2, locate and Change the URL under app->controllers->postcontrollers.js to suit your app working directory location. This URL is the top most line. 

# Using GET function
Use postman, choose GET then URL above + "/api/getData.php"

# Using POST function
URL + '/api/add.php'

# Using DELETE function
URL + '/api/delete.php?id='<record-no>   without the angle brackets and the quotes



