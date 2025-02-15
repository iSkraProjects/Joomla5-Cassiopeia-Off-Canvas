# Joomla5-Cassiopeia-Off-Canvas
Simple Off Canvas Menu for the Default Joomla! 5 template, Cassiopeia. Just an easy way to replace the default collapsible menu.

The following works either on the default template files (wrong method), or in a child theme for the Cassiopeia Template (correct solution). I have created an override in the Template's Child theme to make the header one liner instead of two.

Get the offcanvas.php file and add it into the overrides folder of the template, inside a new one named mod_menu.
• As an example: public.html/templates/cassiopeia/html/mod_menu/offcanvas.php

Next, add the css code to your custom user.css file or if you havent, create one inside your template's or child theme's css folder.
• As an example: public.html/media/templates/site/cassiopeia/css/user.css

After those codes are in place, login to your administration area, site modules and create a new menu module.
• Name it as you like, position: menu, Go to Menu Assignment: on all pages and then go to Advanced, Layout and select offcanvas from the dropdown selector.

Go to your Language Overrides and create the translation for your language using the text selector: MOD_OFFCANVAS_MENU_TITLE
You can change the text selector from within the offcanvas.php file, line 35.

![image](https://github.com/user-attachments/assets/ad30d3a4-1ce8-4429-b636-33e7fae3a969)

The menu is created to trigger the burger menu after 992px of max-width and it displays a burger menu alongside with the "Menu" text. Below 420px of width, the text is hidden using a simple css class. If you have the width, you can remove the lines 11 to 22 from the css file so to keep the text. Also i enlarge the icon below 420px. If you don't want that, just remove the line number 7.

I hope this helps you.
