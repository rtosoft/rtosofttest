 User Profile Picture

Contributors: dewtechnolab
Tags: users, user, user profile, avatar
Requires at least: 4.5
Stable tag: 1.0.2
Version: 1.0.2
Tested up to: 5.2.4
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html



Set a custom profile image for a user using the standard WordPress media upload tool.


== Description ==


Set a custom profile image for a user using the standard WordPress media upload tool.



<h3>Help Contribute</h3>



* Leave a star rating



== Installation ==



Starting with Users Profile Picture consists of just two steps: installing and setting up the shortcode. Users Profile Picture is designed to work with your site’s specific needs, so don’t forget to go through the Users Profile Picture configuration wizard as explained in the ‘after activation’ step!

= INSTALL USER REGISTRATION FROM WITHIN WORDPRESS =
1. Visit the plugins page within your dashboard and select ‘Add New’;
2. Search for ‘Users Profile Picture’;
3. Activate Users Profile Picture from your Plugins page;
4. Go to ‘after activation’ below.

= INSTALL USER REGISTRATION MANUALLY =
1. Upload the ‘users-profile-picture’ folder to the /wp-content/plugins/ directory;
2. Activate the Users Profile Picture plugin through the ‘Plugins’ menu in WordPress;
3. Go to ‘after activation’ below.

= AFTER ACTIVATION =
1. Go through the user profile and set up the profile picture for your site;
2. You’re done!



== Frequently Asked Questions ==



= How do you set a user profile image? =



1.  Visit the profile page you would like to edit.

2.  Click on the upload to add, or change the profile picture.



= What role does a user have to be to set a profile image? =



All user roles.



= How do I create specific thumbnail sizes? =



Since the plugin uses the native uploader, you'll have to make use of <a href='http://codex.wordpress.org/Function_Reference/add_image_size'>add_image_size</a> in your theme.  You can then call `dew_profile_img` and pass in the custom image size.



= The image is cropped wrong.  How do I fix this? = 



We recommend the <a href='http://wordpress.org/extend/plugins/post-thumbnail-editor/'>Post Thumbnail Editor</a> plugin for cropping thumbnails, as you can custom-crop various image sizes without affecting other images.



= Does the plugin work with Multisite? =



Yes, but you'll have to set a new profile image per site. This is currently a limitation of the way the plugin stores its data. Ideas to overcome this are welcome.



== Screenshots ==



1. Profile page options.

2. Media upload dialog.



== Changelog ==



= 1.0.2 =

* Change



= 1.0.1 =

* Fix error



= 1.0.0 =

* Initial release.



== Upgrade Notice ==



= 1.0.2 =

* This version fixes a security related bug.  Upgrade immediately.