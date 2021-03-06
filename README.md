# Camagru
Camagru is a web application similar to instagram that is used for uploading and sharing images.
# Requirements
1) PHP

2) MAMP

3) Javascript

4) CSS

5) HTML

7) MySQL
# Application setup
1) Install the Bitnami MAMP stack (This step depends on your operating system, so ill be using the XAMPP stack because I'm on windows)

2) Clear out the htdocs folder

3) Clone this repository into the htdocs folder

4) Configure your MySQL to use these default credentials. But dont forget to change it later as this is not advised.

   User: root, password: ''
  
5) Next you need to create the database with the following link [http://localhost/Config/setup_db.php](http://localhost/Config/setup_db.php)

6) Next you need to setup the necessary directories that camagru needs by clicking on this link [http://localhost/create_directories.php](http://localhost/create_directories.php)

7) Register an account on camagru and verify your account

8) Login and you all done !

# Application usage

1) First signup and verify your account

2) Then login to verify your account works

3) Once logged on, You will have these sections: public gallery, gallery, webcam and edit info.

4) To take photos or upload photos, click on the webcam section.

5) To view other peoples photos, click on public gallery

6) To view your own photos, click on gallery

7) To edit your account information, click on edit info


# File structure
```bash
.
├── CSS                                                  # This is the directory where i store all my CSS files
│   ├── comment_likes.css
│   ├── confirmations.css  
│   ├── edit_info.css      
│   ├── forgot_password.css
│   ├── index.css
│   ├── login.css
│   ├── my_gallery.css     
│   ├── pagination.css     
│   ├── pass_reset.css     
│   ├── process_tmp_img.css
│   ├── signup.css
│   ├── verified.css       
│   └── webcam.css
├── Config                                               # This is the directory where i store my configuration files 
│   ├── database.php       
│   └── setup_db.php       
├── JS                                                   # This directory is where is store all my javascript files
│   └── photo.js
├── Pictures                                             # This is an asset directory where i store all png's that are used in Camagru
│   ├── Logo.png
│   ├── Untitled.png
│   ├── gallery.png
│   ├── heart.png
│   ├── trash.png
│   ├── —Pngtree—camera glyph black icon_3754744.png
│   └── —Pngtree—file upload icon_4646955.png
├── stickers                                             # This directory is used to store the stickers that will be used in the image editor
│   ├── stickers_1.png
│   ├── stickers_2.png
│   └── stickers_3.png
├── README.md                                            # All the files after this README.md file are the php files
├── Auth.php
├── Trash
├── author
├── check.php
├── comment_likes.php
├── confirmation.php
├── connect.php
├── create.php
├── create_directories.php
├── edit_info.php
├── favicon.ico
├── forgot_password.php
├── index.php
├── log_user_off.php
├── login.php
├── my_gallery.php
├── pagination.php
├── pass_auth.php
├── pass_reset.php
├── process_img.php
├── process_tmp_img.php
├── reset.php
├── sign_up.php
├── upload.php
├── upload_2.php
├── verified.php
└── webcam.php
```

# Application diagram

![alt text](https://github.com/Enrico101/final_version_camagru/blob/master/Pictures/UML%20diagram%20complete%20-%20Page%201%20(1).png?raw=true)

# Application databases design

![alt text](https://github.com/Enrico101/final_version_camagru/blob/master/Pictures/ERD_Camagru%20(2).png?raw=true)


# Testing
1) Preliminaries: Build in PHP, no frameworks, no package manager, index.php and config files are present and PDO must be used

2) Launch the server and no errors must be present

3) Account creation

4) Login

5) Capture picture with webcam

6) View public gallery

7) Edit user account details

Expected outcomes and achieved outcomes

1) The repo must show that the code is build in PHP. There should be no frameworks or package manager and PDO should be used

2) The server should be running with no errors produced

3) User should be able to register and get a notification indicating to verify his/her account

4) After verification, user should be able to use his/her credentials to login in

5) User should be able to capture pictures with webcam and a preview should be present

6) User should be able to see a list of other users images

7) The user should be able to edit there account details at any given time.
