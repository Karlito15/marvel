# Responsive jQuery ScrollToTop Arrow by Fabian Lins
This is the jQuery version of my ScrollToTop Arrow. There is also a Vanilla JavaScript version of this available:
https://github.com/FabianLins/scrolltotop_arrow_js

To use this ScrollToTop Arrow, you have to do a few things:

# How does it work?
- Checks if your current scroll positon is below a certain point (variable can be changed).
- A div appears at the bottom right corner if you are below the "scroll point" (smooth fading).
- The div disappears if you are above the "scroll point" (smooth fading).
- jQuery fadein and fadeout is used for the fadings.

# Instruction
1. Link the "scrolltotop_arrow_style.css" file.
2. Link the current jQuery library (in this case: "jquery-3.3.1.min.js").
______________
  NOTE: Always check for a later version on https://jquery.com/download/
______________
3. Link the "scrolltotop_arrow_code.js" file.
4. Copy the lines between the two comments in the HTML file and paste them into your HTML file.
5. Adjust HTML the lines to your desires (but keep in mind that you have to keep the structure as it is).
6. Adjust the SCSS variables.
7. Compile the SCSS sheet.
______________
  NOTE: If you are new to it, feel free to check out this compiler: https://scout-app.io/
______________
7. Adjust the JS variables in the "scrolltotop_arrow_code.js" file.

# Differnces between the jQuery and Vanilla JS Version
______________
  jQuery Version
______________
- Scrolling speed can be adjusted by changing the time value (in ms).
- The jQuery functions "fadein" and "fadeout" are used.
- The ScrollToTop Arrow is hidden onload.

______________
  JavaScript Version
______________
- Scrolling speed can NOT be adjusted, it is defined as "behavior:  smooth".
- CSS transistions are used for the "fadein" and "fadeout" (add and remove classlist).
- The ScrollToTop Arrow is visible onload. Ff it is above the "scroll point" it automatically disappears.

# License
You are free to use this menu in commercial projects without giving credit.
But you are not allowed to claim this menu as your own menu.
If you edit the code and change the plugin you are allowed to upload your version as long as you give credit to this project.

If you have any questions feel free to write me an e-Mail:
contact@fabianlins.com

Thanks for your attention.

# Bugs
There are no known bugs. If you find one please write me an e-Mail.

# Browser Compatibility
The browser compatibility is not tested carefully. However, the menu works in IE 11, the latest versions of Edge, Firefox and Chrome.
