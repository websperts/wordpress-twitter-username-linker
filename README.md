# Twitter Username Linker

Automatically links twitter usernames prefixed with the `@` sign in your WordPress posts, excerpts, and comments.

## Installation

1. Download the ZIP
2. Install the plugin in WordPress by either uploading the unzipped plugin folder via (S)FTP or uploading the ZIP directly via the Plugins page in the WordPress back-end
3. Activate the plugin

## Changelog

* 0.0.1
	* Initial version

## What it looks like

![Screenshot](https://picpig.com/un4vc9mmgl.png)

## Notes

Every generated link to a user’s Twitter profile has the class `twitter-username` so that you’re able to style username links.

```css
.twitter-username {
	color: #226699;
}

.twitter-username:before {
	content: '\u0040';
	color: #7aa3c1;
}
```

In addition, all generated links are `rel="nofollow"` as well as `target="blank"`. Email addresses remain untouched by this plugin.

## License

Copyright (c) 2014 [websperts](http://websperts.com/)  
Licensed under the MIT license.

See LICENSE for more info.