# untamed-picfair-button

## Wordpress Custom Plugin

## Version 1.6

Created for the website https://untamedframes.ca to provide a direct link from a post to the matching picture in Picfair (photo web store).

This is a Wordpress custom plugin (PHP) to add "Shop this Print on Picfair" button IFF the Picfair link is present in custom field in the post.

The button locaction on the Wordpress post is simply a "**[/] Shortcode**" `[picfair_btn]`

If the Wordpress post has a custom field named `picfair_url` containing the URL to Picfair, then a button is created "**Shop this Print on Picfair**"

If there is no custom field on the post, then "**[/] Shortcode**" `[picfair_btn]` does nothing (i.e. fails gracefully).

## How To Upload this Custom Plugin to Wordpress

Reminder: The plugin name and version are stored in the header of the .PHP file, so the file names below are merely suggestions to keep things tidy.

Reminder: If using **Wordpress Bitnami Multisite** you can only add plugins from **Network Admin**

1. Copy the `untamed-picfair-button.php` file to a new folder on your computer. A good (but not mandatory) folder name is `untamed-picfair-button`
2. Zip up that folder. A good (but not mandatory) name for the zip is `untamed-picfair-button-v16.zip`
3. In Wordpress Plugins page: **Add Plugin** > **Upload Plugin** > **Choose File**
4. Activate the Plugin. If using Multisite, you can either **Network Activate** for all sites, or enable individually on a particular site's Plugin page.
