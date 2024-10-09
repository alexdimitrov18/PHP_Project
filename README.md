
# Band Page PHP Project
## Features

### Albums
- Discover the band’s discography in style.
- Click on any album name to reveal more details, like tracklists and stories behind the music.

### Band Members
- Learn about each member's unique contributions to the band.
- Click on a member's name to view a brief biography and their role in the band.
- Others

### Privacy Policy
- A generic **Privacy Policy** page .
  
### User Login/Signup
- Simple and secure **login/signup** system.
- Collects the following information:
  - **Name**
  - **Email**
  - **Date of Birth**
  - **Gender**
  - **About**: A free-text field where users can share more about themselves.

### Responsive Design

The front-end design of this project relies on Bootstrap's responsive grid system and JavaScript functionalities, minimizing the need for custom `@media` queries:

1. **Bootstrap Grid System**:
   - The layout utilizes classes like `col-md-*` (e.g., `col-md-2`, `col-md-8`, `col-md-4`) to ensure the page adjusts smoothly across various screen sizes. On smaller screens, columns stack vertically
   - The `col-12` class ensures forms and content take up the full width on small devices, while `text-center` maintains centered text alignment.

2. **Responsive Navbar**:
   - The `navbar-expand-lg` class allows the navbar to remain expanded on larger screens and collapse into a hamburger menu on smaller screens. The `navbar-toggler` button makes the menu easily accessible on mobile.
   - A sticky navbar (`sticky-top`) keeps the navigation bar fixed at the top during scrolling, providing continuous access to navigation options.

3. **Viewport Meta Tag**:
   - The `<meta name="viewport" content="width=device-width, initial-scale=1" />` tag ensures that the content scales properly, making the layout responsive to various screen sizes.

4. **JavaScript Interactivity**:
   - jQuery is used to enhance interactivity and user experience through dynamic DOM manipulation and form handling without needing page reloads.
   - Custom hover effects on elements like profile names are implemented using `onmouseover` and `onmouseout` events, offering visual feedback to users.

5. **Responsive Images and Profiles**:
   - Profile images and tables are contained within responsive columns, adjusting to screen size with Bootstrap classes.
   - Detailed profile views use `col-md-*` classes, creating a modal-like effect that adapts well to different devices.

6. **Real-Time Error Display with PHP**:
   - PHP is used for dynamic error handling, displaying feedback directly within forms

   ### Old demo of the project

https://github.com/user-attachments/assets/deec1486-87bb-4022-81cc-e7f57d4f12da

