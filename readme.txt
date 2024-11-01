=== Wp Greetings-Increase Your Traffic ===
Tags: referrer, search engine, seo, rss, landing sites, google, yahoo, social networks, digg, stumbleupon, delicious, technorati, twitter, live, blinklist, blogmarks, diigo, facebook, furl, magnolia, mister-wong, myspace, newsvine, reddit, simpy, youtube, flickr, tumblr, wordpress, linkedin, plurk, friendfeed, webdesignnews, dzone, designrfix, scoopeo
Contributors: Ramesh
Donate link: http://111waystomakemoney.com/donate/
Requires at least: 2.7
Tested up to: 3.0.1
Stable Tag: 1.0.0

Display a greeting for your visitor basing on which site he comes from.Incerase your traffic ,rss subscribes,diggs,teweets and traffic.There by Incerase Your Traffic

== Description ==

This plugin lets you show a different greeting message to your new visitors
depending on their referrer url.  For example, when a Digg user clicks through
from Digg, they will see a message reminding them to digg your post if they
like it.  Another example, when a visitor clicks through from Twitter, they
will see a message suggesting them to twit the post and follow you on Twitter.
You can also set a default greeting message for new visitors (not matching any
referrer URLs) suggesting them to subscribe to your RSS feed.  Having these
targeted suggestions will help your blog increase exposure, loyal readership,
and reader interaction.  Best of all, this plugin is compatible with WPMU
and various WordPress cache plugins (so you do not have to sacrifice speed).
For more details Visit :
(http://111waystomakemoney.com/)


= Features =

* Show a different greeting message to your visitor depending on the referrer
  URL.  You can add/edit/delete/disable these greeting messages as you choose.
* Beautiful set of icons shipped along with the different default referrers.
* Clickable icon in greeting messages with target=_blank option.
* Greeting messages automatically get inserted into the top of your posts upon
  activation.  There is no need to modify theme files.
* Ability to auto-insert greeting message to the top or bottom of the post.
* Greeting messages can be user closeable or not.
* Ability to detect the visitor's search keywords from major search engines
  and automatically display related posts under or above the greeting message.
* Show a default greeting message even if the vistor does not match any of
  your configured referrer URL.
* Show a default greeting message even if the visitor does not have javascript
  enabled.
* Cache compatible mode makes use of AJAX to display greeting messages in the
  frontend.  This makes Wp Greetings compatible with other caching plugins
  (such as WP Super Cache) and WPMU.
* AJAX administrative interface that uses nonce verification to discourage
  hackers.
* Ability to keep displaying the greeting message until after the user clicks
  close for the first time.  After that, the greeting message will not show up
  for that user anymore.
* Ability to set a timeout to forget a visitor so we do not keep nagging them
  with greeting messages.
* Ablity to set rules to exclude some referrer URLs from seeing greeting
  messages.  Regular expressions is also supported (but not required!).
* Ultra customizeable greeting message box (with CSS) allowing you to
  prepend/append HTML around the greeting message box.
* Ability to disable included CSS for manual CSS management.
* Ability to disable included JS for manual JS management.
* Available "greet_box_text" filter for other plugins to modify greeting
  message before outputting.
* Ability to import and export all Wp Greetings Settings.
* Currently the following referrers are installed by default, but you can
  easily create your own if your favorite referrer is not on the list!
  1. bing.com
  1. blinklist.com
  1. blogmarks.com
  1. del.icio.us
  1. delicious.com
  1. designrfix.com
  1. digg.com
  1. diigo.com
  1. facebook.com
  1. flickr.com
  1. friendfeed.com
  1. furl.com
  1. google.*
  1. linkedin.com
  1. ma.gnolia.com
  1. mister-wong.com
  1. myspace.com
  1. netvibes.com
  1. newsvine.com
  1. plurk.com
  1. reddit.com
  1. scoopeo.com
  1. search.live.com
  1. search.msn.com
  1. search.yahoo.com
  1. simpy.com
  1. stumbleupon.com
  1. technorati.com
  1. twitter.com
  1. webdesign-ne.ws
  1. wikio.com
  1. youtube.com
Please dont forget to give Ratings to Plugin.

If you like Blog Protector Final, Please Consider A Donation.

(http://111waystomakemoney.com/donate/).
Thank You.

Warm Regards,
Ramesh
(http://111waystomakemoney.com/).


== Installation ==

1. Upload the plugin to your plugins folder: 'wp-content/plugins/'
2. Activate the 'Wp Greetings' plugin from the Plugins admin panel.
3. (optional) Go to the Options -> Wp Greetings admin panel to make
   any customizations.
4. Test this out by googling for one of your articles and click through to your
   site from google.  You should see the greeting message custimized for a
   google visitor.



== Screenshots ==


1. Display message to google visitors.

2. Display related posts based on most search engine keywords.

3. Ask visitors from stumbleupon.com to thumbs up your post.

4. Display default message to visitors not matching any special referrer.

5. AJAXed message administration.

6. Buckets for active and inactive messages.

7. Exclusion rules with optional regex support.

8. General settings with advanced options hidden by default.


== Frequently Asked Questions ==

= Does this work with cache plugins? =
Yes it does!  Just make sure that you enable cache compatibility in Wp Greetings advanced options and clear your cache afterwards.

= Does this work with WPMU? =
Yes it does (even when cache compatiblity mode is enabled)!

= Can I customize where I want to place my greeting message? =
Yes!  You will have to disable the auto insert feature in General
Configurations.  Next, copy the following code to your desired location in any
of the theme files:
  <?php if(function_exists('dynamic-wp-greetbox')){dynamic-wp-greetbox();} ?>

= The default settings are ugly!  Can I change the way it looks? =
Yes!  You can modify the CSS entries for greeting messages in:
  dynamic-wp-greetbox/css/dynamic-wp-greetbox.css.

= Can I add additional greeting messages? =
Yes!  You can easily do this on the Wp Greetings options page.  You can even
modify preinstalled messages or delete them.

= I can't get it to work! I'm frustrated! =
Please take a look at documentation available on the
[plugin page](http://111waystomakemoney.com/wordpress-plugins/wordpress-greetings/)
to see if any of them can help you.  If not, feel free to post your issues
on the appropriate [plugin support forum](http://111waystomakemoney.com/).
I will try my best to help you resolve any issues that you are having.

== Changelog ==
=1.0.0=
*initial release

=1.4.1=
*minor bugs fixed with mozilla firefox and google crome

=1.4.2=
*minor bugs fixed with internet explorer