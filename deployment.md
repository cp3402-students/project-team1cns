# Development and Deployment Workflow

This document outlines our development and deployment workflow in detail so that anyone can easily follow along. Content you can expect to find in this document is project management methods and theme updates through tests and deployment to staging and development sites. See summary of tools used below:

# Tools:
- CMS - [Wordpress](https://wordpress.com)
- Project Management - [Trello](https://trello.com)
- Communication - [Slack](https://slack.com)
- Version Control - [Github](https://github.com)

## CMS - Wordpress
The content management system that has been used is WordPress due to its scalability (as this website will be constantly expanding), its user-friendly design (so that the site can be maintained by volunteers with basic technology knowledge), its extensive library of available plugins, and its ability to accommodate custom templates, essential for our project's unique requirements.

## Project Management & Communication - Trello and Slack
Trello has been used as a project management due to its ability to visualise tasks that are to do, in progress or completed in a user friendly way. The ability to allocate cards to particular group members and label cards according to pre-determined subheadings makes it easy to filter and keep up to track. Other features that are of great benefit to project management are the capability of being able to create checklists within a card and to set a due date for the cards (with the option to send a reminder). 

Slack has been selected as the communcation channel due to its ability to integrate with Trello and also with our Github Repository. Having a channel where everything is accessible in the one place creates a seamless flow and keeps all members of the team up to date at all times. 

## Version Control - Github
 GitHub was utilised for version control, with several branches such as Main, Staging, and Development.

Here's how a team member could contribute changes:

### Create a New Branch:

* Create a new branch in the GitHub repository with an appropriate name - ensure its a branch that is separate from the main

### Commit Changes:

* Make the desired changes to the code within this branch created above and regularly commit these changes with descriptive messages to track the work completed. 

### Propose Merge with Development Branch:

* Once changes are completed and tested locally, a pull request can be opened to propose the merging of the created branch with the main development branch

### Review Process:

* Once the pull request is proposed, other members of the team review these changes, providing feedback and improvements if required
* If feedback is provided, this is to be addressed by making necessary adjustments 

### Merge Approval:

* Once the changes have been addressed and the team has agreed that the work is ready for the main developlement branch, the pull request will be approved for merging. 

### Merge Changes:

* The branch is then merged into the development branch, which incorporates this newly created code in the main development


 ## Workflow
 
Depending on the type of site you want to build, you'll need to create custom content, which can come in many shapes and sizes. This process can take a lot of time, which is why I decided to download and import the WordPress Codex's Theme Unit Test, allowing you to test for all the basics.

 ## Local Environments & IDE - USB Webserver and VScode 

 Our group found that USB Webserver was the easiest way to locally host wordpress on an apache server. Here is the setup for the server: 

1. First install "usbwebserver_v8.6.5.zip" at (https://usbwebserver.yura.mk.uahttps://usbwebserver.yura.mk.ua)
2. Download the latest version of wordpress (https://en-au.wordpress.org/download/)
3. Extract both downloads into a familiar directory
4. Run the usbwebserver.exe and Open PhpMyAdmin
5. Login in with the defaults: Username: root, Password: usbw (or this can be password at times)
6. Then create an empty database with a relevent name and with the Server connection collation: utf8mb4_unicode_ci
7. Once this is complete you can grab your entire extracted wordpress installation and place it within the root directory of the usbwebserver file (\usbwebserver_v8.6.5\usbwebserver\root)
8. Choose the option to replace files into the destination 
9. Now you can navigate to the localhost port you have chosen (defualt being 8080 or just 'localhost')
10. Will now link the same passwords used for PhpMyAdmin to Wordpress as well as make a site login and password. 
11. Once this is complete you are now able to use your locally hosted version of wordpress to test the theme. 

Before we began work on the theme, our group needed to decide on an IDE. The decision was between PHPStorm and VSCode, each with its strengths. While PHPStorm offers syntax highlighting similar to PyCharm, our group was much more accustomed to the UI and Git version control systems on VSCode.


 ## Hosting Environments - Amazon Lightsail, Digitial Ocean 
 
 ### Staging Server  



 ### Production Server
Since the production server is the final version of the site it will use WP Pusher to access main from the GitHub Repository

Simply log into digital ocean (https://cloud.digitalocean.com) and access the droplet created for production. Ours is called "U3A-Production". 


## Testing and Automation
Enter here
