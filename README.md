# Noon
The ultimate WordPress theme for website builders.


## Requirements

- Gutenberg plugin (latest)
- WordPress 5.9+
- PHP 5.6+


## Developer Notes

we have included a Composer file for checking PHP and WordPress core standards. 

- `composer run lint`
- `composer run wpcs:scan`
- `composer run wpcs:fix`

# Theme Rebuild Instructions

If you want to rebuild your own theme, follow these steps:

## Prerequisites
- Make sure you have [PNPM](https://pnpm.io/) installed on your machine.

## Getting Started

You can download the latest stable release of Noon using the link above. Alternatively, install the entire repository for development purposes:

1. Set up a local WordPress development environment, we recommend using [Local](https://localwp.com/).
2. Ensure you are using WordPress 6.2+.
3. Clone / download this repository into the `/wp-content/themes/` directory of your new WordPress instance.
4. In the WordPress admin, use the Appearance > Themes screen to activate Noon.


## Build Steps
1. Run the following command to install the necessary dependencies:
- `pnpm install`
2. To start the development server with `wp-scripts`, use the following command:
- `pnpm dev`
3. To build your theme, use the following command:
- `pnpm build`
4. To format your code using `wp-scripts`, run the following command:
- `pnpm wp:format`
5. To lint your CSS files, use the following command:
- `pnpm lint:css`
6. To lint your JavaScript files, use the following command:
- `pnpm lint:js`
7. To create a zip file for your theme, run the following command:
- `pnpm zip`

That's it! You now have the necessary commands to rebuild your own theme using PostCSS and `wp-scripts`. Feel free to modify the instructions as needed for your specific setup.

## License

Noon is licensed under the [GPL-3.0 license](https://www.gnu.org/licenses/gpl-3.0.html).

## Beta Feedback

Noon is currently in beta and looking for any and all feedback. Please [open a new issue](https://github.com/PixelDima/noon/issues/new/choose) for bug reports, feature requests, or general feedback.

## Resources

- [Noon website](https://noonwp.com/)
- [Set up a development environment with Local](https://localwp.com/)