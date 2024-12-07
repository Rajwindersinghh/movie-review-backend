# Movie Review Site Backend

This is the backend code for the Movie Review Site application, built using WordPress as a headless CMS. The backend provides a RESTful API for managing and retrieving movie review data.

## Features

- **Custom Post Type for Reviews**: A custom post type named "Reviews" is created to store movie review data, including the title, content, featured image, categories, and custom fields for rating and other metadata.
- **Categories**: Categories are used to organize movie reviews based on genres, themes, or other criteria.
- **Custom Fields**: Custom fields are used to store additional metadata for each review, such as the rating and any other relevant information.
- **WordPress REST API**: The WordPress REST API is enabled and configured to provide a RESTful interface for accessing and manipulating movie review data.

## Installation

1. Install and set up a WordPress site on your local development environment or a hosting provider.

2. Clone or download the backend code into the WordPress site's `wp-content/plugins` directory.

3. Navigate to the WordPress admin dashboard and activate the plugin.

4. Configure the plugin settings as needed, such as creating the custom post type, custom fields, and categories.

5. Populate the site with movie review data using the WordPress admin interface or import data from an existing source.

## Usage

Once the backend is set up and configured, you can interact with the movie review data using the WordPress REST API endpoints. The API provides endpoints for retrieving lists of reviews, individual review details, categories, and more.

The frontend application can connect to the WordPress REST API by configuring the appropriate API endpoint URLs.

## Hosting
The backend is hosted on [pantheon.io](https://pantheon.io/) website