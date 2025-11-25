# untamed-picfair-button

## Version 1.6

Created for the website https://untamedframes.ca to provide a direct link from a post to the matching picture in Picfair (photo web store).

This is a Wordpress custom plugin (PHP) to add "Shop this Print on Picfair" button IFF the Picfair link is present in custom field in the post.

The button locaction on the Wordpress post is simply a "**[/] Shortcode**" `[picfair_btn]`

If the Wordpress post has a custom field named `picfair_url` containing the URL to Picfair, then a button is created "**Shop this Print on Picfair**"

If there is no custom field on the post, then "**[/] Shortcode**" `[picfair_btn]` does nothing (i.e. fails gracefully).
