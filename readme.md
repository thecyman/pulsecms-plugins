# PulseCMS Plugins

Addons, plugins, extensions.. call them what you like. We call them "Tags". These are little snippets or larger code elements that give your Pulse sites more power. Just like WordPress plugins.

You can upload these manually by placing into "inc/tags/" folder or uploading via the Settings Extend pane within the admin. To upload via the admin it must be a zip file containing the tag php file.

## Custom Tags

Not only does Pulse come with a wide set of default tags, but you can create your own. This is a really powerful feature that also very easy to use. You can think of these like plugins as they allow you to create new embeddable features in Pulse.

For example, let's say you have a small PHP script that displays a random image each time the page loads. 

Just paste the code into a new file called 'rand.php' in the 'inc/tags' folder. 

Now you can call this script into any page or block simply by typing:

```{{rand}}```

So that is a very simple example of creating a custom tag. But in some cases you will need more than just that. Let's say that in the example above, you want to call the images from one of the gallery folders in Pulse. The embed code does not have enough information in it to specify any additional information. 

This is where tag variables come into play. With tag variables your embed code can be written as:

```{{rand:gallery3}}```

Pulse will read the tag and automatically convert the 'gallery3' portion of the tag and put it into a variable called '$tag_var1'. Now your script can look for '$tag_var1" on load so it knows where to pull the images from.

Each Pulse Tag can include up to 6 variables. 

If your script uses all three the syntax would look like this:

```{{rand:gallery3:med:10}}```

This would set:
```$tag_var1 = 'gallery3';<br>$tag_var2 = 'med';<br>$tag_var3 = '10';```

## Examples

Basically anything goes and you can make them as complex or simple as you like. 

Included are a few simple examples to give you an idea:

- [MailChimp](examples/mailchimp.php)
- [Site Policy](examples/policy.php)

### MailChimp

This tag will embed your MailChimp sign up form:

```{{mailchimp:user:formid}}```

Signups go straight to your Mailchimp list.

It’s a simple variables swap example.

### Site Policy Generator

This tag will add a policy to your site:

```{{policy:company:location:date}}```

Generate a simple Terms of Service and Privacy Policy statement for your website (English only) and substitute location and business name. NB this defaults to the last time the file was changed if the third tag parameter is not present.

You can see that the first two tags are simple replacements and the third one dynamically takes the date from the site config file setup.

## Things to bear in mind

- Escaping characters and spaces - see the PayPal tag
- You can add folders and reference those also in /inc/tag
- The inc/plugins folder you can ignore 
- We sometimes reference the included tags in the Pulsecore but that you can ignore also

## Sharing your Plugins

If you have made some tags for a personal project and then decide to share them or want to distribute free or premium plugins to the community then please do so! 

- Create a demo and sales / landing page with your plugin
- Contact us via email (help at pulsecms.com) or the forum 
- We’ll then list it on the [addons page](https://www.pulsecms.com/addons.php)!
- Announce the plugin in the forums and let people know it exists! 

## Closing Thoughts

Hope that helps and any questions get in touch via here (raise an issue) or on the forums and we’ll do our best to help.

Happy Pulsing! ⚡️
[Forums](https://forums.pulsecms.com)
