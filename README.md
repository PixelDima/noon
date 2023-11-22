# The Noon - A WordPress Block Theme

![Image](https://res.cloudinary.com/dvz1685md/image/upload/v1700341402/social-share-image_yjoosp.png)

Noon, a fresh and vibrant WordPress block theme brought to you by [NoonBlocks](https://noonwp.com). Noon is designed for seamless integration with the WordPress block editor and site editor, making it easy to craft beautiful, personalized websites without the need for complex page builders or coding skills.

With a collection of over 40+ stunning patterns, page templates, block styles, and variations, Noon empowers you to design eye-catching pages effortlessly using a simple drag-and-drop interface. Fast, customizable via the WordPress UI, and fully responsive from the get-go, Noon ensures top-notch performance, scoring 100% across all performance metrics.

Visit [noonwp.com](https://noonwp.com) to explore more about Noon and its capabilities. My aim is to guide both seasoned and new WordPress creators in unlocking the full potential of WordPress's latest features. Feel free to dive into the code and gain insights into crafting WordPress block themes. ✌️

## Getting Started with Noon

| Links  | Description |
| ------------- | ------------- |
| [View Noon Demo](https://demo.noonwp.com)  | Check out a full live demo of the Noon theme.  |
| [View Noon RTL Demo](https://demo.noonwp.com/rtl)  | Check out a full live demo of the RTL Noon theme.  |
| [Download Noon Theme Zip](https://github.com/pixeldima/noon/releases/latest/download/thenoon.zip)  | Download the latest noon theme zip to install on your WordPress site.  |


## Supports RTL languages
Noon embraces diversity by providing robust support for Right-to-Left (RTL) languages. Whether your content is in Arabic, or any other RTL language, Noon ensures a seamless and visually pleasing experience. Enjoy creating content that caters to a global audience with Noon's RTL language support.

https://github-production-user-asset-6210df.s3.amazonaws.com/3769804/284023601-59f5e514-6385-4d89-9a21-9d9be9af8e42.mp4

## Global Styles
Global Styles is your go-to space in the Site Editor for tweaking all the styles that give your site its unique vibe. Whether it's playing with typography, experimenting with fonts, or fine-tuning button and link colors, Global Styles lets you effortlessly customize your site's appearance.

Under the hood, Global Styles is driven by a `theme.json` file nestled in the heart of your theme folder. This nifty configuration file empowers you to set both site-wide and block-specific styles, giving you full control through the user-friendly Global Styles interface.

https://github-production-user-asset-6210df.s3.amazonaws.com/3769804/284023942-d25f324e-f40c-4e6a-aa7d-c103b47a6724.mp4


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