# appointment-scheduler
Appointment Scheduler with PHPMailer 

Download vendor.zip and composer.json and composer.lock.  Place composer.json and composer.lock in same level as the file calling the PHPMailer, and place the vendor folder in the same level of directory as well (see "Example Folder Structure.png").


If the PHP Mailer doesn't work, doublecheck the following:

1. The vendor folder is in the same root level of directory as the index.php file (or which ever file which calls the PHPMailer is)
2. The vendor folder contains the composer folder
3. the vendor folder contains the PHPMailer folder
4. the vendor folder contains the autoload.php file
5. The root directory of where the index.php file is also contains the composer.json file
6. The root directory of where the index.php file is also contains the composer.lock file


If all is in place and still doesn't work, its most likely because the app password has changed, or reset.

