# Theme - Continuing Development

## Features

### 1. Content Integration
All content is seamlessly integrated into WordPress, ensuring the theme's usability across different websites.

### 2. Custom Logo Management
The logo is independent of the theme, facilitating easy editing via the CMS for effortless brand customisation.

### 3. Flexible Header and Footer
Users can personalise header and footer elements effortlessly by directly modifying the header.scss and footer.scss files within the site folder, enabling quick adjustments to colors.

### 4. Custom Navigation Menus
Easily customise navigation menus to suit your website's structure and user experience needs.

### 5. Tailored Page Templates
Diverse custom page templates cater to different content types, empowering users to create unique layouts effortlessly.

### 6. Versatile Custom Widgets
Leverage a range of custom widgets seamlessly integrated into WordPress. For instance, the footer widget allows users to add content directly without impacting the theme's core design.



## Design

### Colours

Colours can be changed and added to under variable-site/_colours.scss. We went with the naming convention of "name of colour" + _ + "colour". By making colour an independent Sass variable it allows for change to happen across the site based where the variables have been used. 

The current theme colours are:
#FCE786
#E67235
#77BFE2
#36A1D4

### Typography

Typography seen within the site can be changed under variable-site/_typography.scss. The naming convention for font variables was set to "font name" + _ + "font". This allows for modular font design and allowing our website to follow DRY principles. 

### Layout

A global layout file provided by underscores was used for general content areas to apply across multiple pages or posts. You can add any general styling to the nested files in style.scss

### Navigation

A full custom navigation bar was built using flex box to have a fully responsive mobile design. Under the Sass folder navigation you can find all the styling for the nav bar. 
