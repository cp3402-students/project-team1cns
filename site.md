# Site Documentation

This page will serve as a guide to any potential users on how to edit and use the Wordpress site.

## Site Structure

**Home Page:** The main landing page of the U3A website with a brief overview

**About:** Background about U3A online

**Courses:** Allows users to browse the list of courses offered by U3A and to sign up or enquire about these

**GEMS:** Page containing the monthly newsletters which are downloadable. Also allows anyone from the public to sign up to the email mailing list

**Contact Us:** Allows anyone to contact U3A with any queries by completing a form

**Login Page:** Allows members to log in to the member portal

**Member Home Page:** Once the member has logged in, this is the landing page for the member portal. 

**Sign Up Page:** Allows potential members to send their contact information to U3A to sign up for a membership. 

**Individual Course Pages:** Has an outline of what the course contains, and has the course content separated into modules (in PDF form) that can be viewed online or downloaded. Can only be viewed one the member has been enrolled.

## Inserting/Removing Content 

In order to update the content of the website, the administrator must be logged into the back end of the Wordpress website. 

**Adding a new page** – in order to add a new page, the administrator can select “Add New Page” under “Pages”  

In the case of adding a new subject page, the administrator can cut and paste the contents of an already existing page and edit the images, headings and text. There is also the option of selecting ‘replace’ on the files, where the module files can be replaced with the relevant PDF file

## Plug-Ins
This website uses the following plugins to enhance functionality:

### Plug-In Details:
- `Robo Gallery` (By: RoboSoft, [WordPress.org Plugin Page] (https://en-au.wordpress.org/plugins/robo-gallery/))
- `Info Cards` (By: bPlugins, [WordPress.org Plugin Page] (https://en-au.wordpress.org/plugins/info-cards/))
- `WPForms` (By: WPForms, [WordPress.org Plugin Page] (https://en-au.wordpress.org/plugins/wpforms-lite/))
- `WP Pusher` (By: WP Pusher, [WordPress.org Plugin Page] (https://wppusher.com))
  
#### How to use Robo Gallery Plug-in
This plug-in was used to create a slide-show gallery for the home page. 

To use this, in the Wordpress dashboard click `Robo Gallery` on the left, and then select `Add Gallery`. From here, choose the type of gallery design, and select `Create Gallery`,customise the gallery from this page and then select `Publish`. 

#### How to use Info Cards Plug-in
This plug-in was used to create information cards to display a selection of courses on the home page and enrolled courses on the members page. 

To use this, open a page on Wordpress in editing mode, click on the plus to add content, then select `Info Cards`. From here you can customise the cards how you like. 

#### How to use WP Forms Plug-in
This plug-in was used to create sign up and contact forms. 

To use this, from the Wordpress dashboard select `WPForms`, then select `Start Building`. From here, select a template that is suitable and then begin customising it. Once building the form is finished, click `Save`, copy the shortcode for the form and paste it on a page. 

#### How to use WP Pusher Plug-in
This plug-in was used to connect our wordpress site to our github repository. 

To use this, from the Wordpress dashboard select 'WP Pusher', then from the WP Pusher navigation bar, select the Github tab and press obtain github token. Once the token has been obtained and saved, select "Install Theme". Add the theme repository (which you can use the pick from github option) and choose the repository branch (Staging_gulp if working in the staging site and Production if working in the production site). Make sure to tick the 'Push to Deploy' option before selecting "Install Theme". Select Activate theme and then the theme is ready to use.
