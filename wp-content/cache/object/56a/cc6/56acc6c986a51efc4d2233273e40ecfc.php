��!_<?php exit; ?>a:1:{s:7:"content";a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"


";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:61:"
	
	
	
	




















































";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"WordPress Planet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:28:"http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"en";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress Planet - http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:50:{i:0;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:85:"WPTavern: Gutenberg 8.6 Adds Cover Block Video Positioning and Updates Block Patterns";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102512";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:215:"https://wptavern.com/gutenberg-8-6-adds-cover-block-video-positioning-and-updates-block-patterns?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-8-6-adds-cover-block-video-positioning-and-updates-block-patterns";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4671:"<p class="has-drop-cap">Gutenberg 8.6 <a href="https://make.wordpress.org/core/2020/07/22/whats-new-in-gutenberg-july-22/">landed quietly last week</a>. Much of the focus right now is ironing out the remaining bugs for WordPress 5.5 during its beta cycle. However, that does not mean the Gutenberg project has come to a complete halt in terms of new features. The team is marching forward with extra goodies for those who use the plugin.</p>



<p>The latest update of the plugin did not cover as much ground as normal, but it does include an enhancement for the Cover block when using a video background and several updates to block patterns.</p>



<p>The primary focus for version 8.6 was squashing bugs. The development team addressed over three dozen of them while correcting a handful of performance issues. While new features and enhancements from 8.6 onward are not expected in the upcoming WordPress 5.5, most bug fixes should be included.</p>



<h2>Focal Point Selector for Video Covers</h2>



<img />Selecting a focal point for a video background.



<p class="has-drop-cap">The Cover block has long allowed users to pick a focal point for background images. However, this feature was missing when users added a background video to the block. As of version 8.6, that is no longer the case. Both image and video backgrounds should work in much the same way.</p>



<p>Gutenberg now has a new &ldquo;<a href="https://github.com/WordPress/gutenberg/pull/22531">Focal point picker</a>&rdquo; option located under the &ldquo;Media settings&rdquo; tab when adding a video background. Users can select the focal point by dragging the circle icon in the video box or hardcode left and top percentage values in the input fields below it.</p>



<p>This is not a particularly exciting development for most Gutenberg users.  Self-hosting video is not cheap and remains unused for most. However, for those who do use video backgrounds, it is one of those nice-to-have features that is there when needed.</p>



<h2>Updated Block Patterns</h2>



<img />Inserting the updated quote block pattern.



<p class="has-drop-cap">The Gutenberg team updated several of the existing block patterns. For the most part, the pattern updates were minor cosmetic changes, tweaks that improve the overall design. The button-related patterns received simple changes, such as new <a href="https://github.com/WordPress/gutenberg/pull/23848">text labels</a> and <a href="https://github.com/WordPress/gutenberg/pull/23849">colors</a>. The developers also changed the colors and text of the large header patterns.</p>



<p>The team moved the header above the columns in the <a href="https://github.com/WordPress/gutenberg/pull/23853">two columns text pattern</a> and changed the text to make the columns appear equal height by default. It is a poor use of textual columns, which would ideally be handled with CSS instead so that it works appropriately across screen sizes. Perhaps it would be better to have a &ldquo;Text Columns&rdquo; block in the long run.</p>



<p>The nicest block pattern update was for the <a href="https://github.com/WordPress/gutenberg/pull/23881">quote pattern</a>. It now has an image at the top and a separator at the bottom. It is akin to a single testimonial, which is more of a <em>pattern</em> than a basic quote.</p>



<p>Theme authors can also <a href="https://github.com/WordPress/gutenberg/pull/24042">remove support</a> for the core block patterns with a single line of code: <code>remove_theme_support( 'core-block-patterns' )</code>. This does not drop support for patterns altogether. For example, patterns added by plugins or the theme will still appear in the inserter.</p>



<h2>Site Icon Used in Fullscreen Mode</h2>



<img />Site icon appears in top left in fullscreen mode.



<p class="has-drop-cap">When writing in fullscreen mode, the &ldquo;back to posts&rdquo; link has utilized the WordPress logo in the past. In version 8.6, the user&rsquo;s custom <a href="https://github.com/WordPress/gutenberg/pull/22952">site icon will take its place</a>. However, this will only happen if the user has uploaded an icon via the customizer.</p>



<p>I am unsure how I feel about this change. In practice, it almost feels like clicking the icon should take me to the front end of the site instead of the post management screen. At least with the WordPress icon, it felt like it was pointing toward an admin-side screen instead. For my workflow, I would rather see this link/icon replaced with a button that toggles between fullscreen and normal mode, popping the admin menu back into place rather than departing the editing screen altogether.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 28 Jul 2020 20:59:49 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:51:"WordPress.org blog: WordPress 5.5 Release Candidate";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=8732";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"https://wordpress.org/news/2020/07/wordpress-5-5-release-candidate/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2968:"<p>The first release candidate for WordPress 5.5 is now available!</p>



<p>This is an important milestone in the community&#8217;s progress toward the final release of WordPress 5.5. </p>



<p>“Release Candidate” means that the new version is ready for release, but with millions of users and thousands of plugins and themes, it’s possible something was missed. WordPress 5.5 is slated for release&nbsp;on&nbsp;<strong>August 11, 2020</strong>, but we need&nbsp;<em>your</em>&nbsp;help to get there—if you haven’t tried 5.5 yet,&nbsp;<strong>now is the time</strong>!</p>



<p>You can test the WordPress 5.5 release candidate in two ways:</p>



<ul><li>Try the&nbsp;<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a>&nbsp;plugin (choose the “bleeding edge nightlies” option)</li><li>Or&nbsp;<a href="https://wordpress.org/wordpress-5.5-RC1.zip">download the release candidate here (zip)</a>.</li></ul>



<p>Thank you to all of the contributors who tested the&nbsp;Beta releases and gave feedback. Testing for bugs is a critical part of polishing every release and a great way to contribute to WordPress.</p>



<h2>What’s in WordPress 5.5?</h2>



<p>WordPress 5.5 has lots of refinements to polish the developer experience. To keep up, subscribe to the&nbsp;<a href="https://make.wordpress.org/core/">Make WordPress Core blog</a>&nbsp;and pay special attention to the&nbsp;<a href="https://make.wordpress.org/core/tag/5-5+dev-notes/">developer notes</a>&nbsp;tag for updates on those and other changes that could affect your products.</p>



<h2>Plugin and Theme Developers</h2>



<p>Please test your plugins and themes against WordPress 5.5 and update the&nbsp;<em>Tested up to</em>&nbsp;version in the readme file to 5.5. If you find compatibility problems, please be sure to post to the&nbsp;<a href="https://wordpress.org/support/forum/alphabeta/">support forums</a>,&nbsp;so those can be figured out before the final release.</p>



<p>The&nbsp;WordPress 5.5 Field Guide, due very shortly, will give you a more detailed dive into the major changes.</p>



<h2>How to Help</h2>



<p>Do you speak a language other than English?&nbsp;<a href="https://translate.wordpress.org/projects/wp/dev">Help us translate WordPress into more than 100 languages!</a>&nbsp;This release also marks the <a href="https://make.wordpress.org/polyglots/handbook/glossary/#hard-freeze">hard string freeze</a>&nbsp;point of the 5.5 release schedule.</p>



<p><em><strong>If you think you’ve found a bug</strong>, you can post to the <a href="https://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. We’d love to hear from you! If you’re comfortable writing a reproducible bug report, <a href="https://make.wordpress.org/core/reports/">fill one on WordPress Trac</a>, where you can also find <a href="https://core.trac.wordpress.org/tickets/major">a list of known bugs</a>.</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 28 Jul 2020 19:08:20 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Jb Audras";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:89:"WPTavern: WordPress to Stick with Online-Only Meetups and WordCamps for Remainder of 2020";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102462";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:223:"https://wptavern.com/wordpress-to-stick-with-online-only-meetups-and-wordcamps-for-remainder-of-2020?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-to-stick-with-online-only-meetups-and-wordcamps-for-remainder-of-2020";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6256:"<img />photo credit: <a href="https://stocksnap.io/photo/macbook-computer-JPZDGEMDH3">Burst</a>



<p>The WordPress Community Team has officially updated its guidelines for WordCamps to be online-only events for the remainder of 2020. The six WordCamps on the <a href="https://central.wordcamp.org/schedule/">schedule</a> through the end of the year were already planning on using an online format but the guidelines also include local <a href="https://make.wordpress.org/community/events/online/">meetups</a>. </p>



<p>&ldquo;The team acknowledges that this is not easy for the community that has been heavily based on in-person events and encounters,&rdquo; Timi Wahalahti said in the <a href="https://make.wordpress.org/community/2020/07/27/in-person-events-in-rest-of-year-2020/">announcement</a>. &ldquo;Unfortunately, the global coronavirus situation does not seem to be slowing down to a level that would allow us organizing in-person events safely at this time.&rdquo;</p>



<p>The guidelines will be re-evaluated in the first quarter of 2021, but some organizers are already planning for online events next year. WordCamp Europe 2021 is the first WordPress event to <a href="https://wptavern.com/wordcamp-europe-goes-virtual-for-2021-in-person-conference-to-resume-2022">go virtual for the coming year</a>, with the in-person event resuming in 2022.</p>



<p>Moving what was once a vibrant in-person gathering to a two-dimensional online format is a challenging endeavor, especially when the world is suddenly awash in online events competing for attention. Making virtual events stand out from the crowd is a new marketing challenge. </p>



<p>There is something about the magic of WordCamps that gives momentum to ideas and collaboration. While you cannot replicate the chance meetings in the hallway and the priceless conversations over long dinners, online events have the benefit of being more geographically inclusive. The constraints of the pandemic are also challenging our assumptions about how online gatherings are supposed to work.</p>



<h2>WordPress Community Team to Explore New Event Formats, Redefine Relationships with Sponsors, Temporarily Cancel Swag Spending</h2>



<p>The necessity for virtual events has inspired discussion around some new event formats, including a new <a href="https://make.wordpress.org/community/2020/07/23/building-community-beyond-events/">proposal</a> that decouples online events from geography. WordPress Community manager Hugh Lashbrooke described how events might explore combining synchronous discussions with previously recorded workshops:</p>



<blockquote class="wp-block-quote"><p>What if we blended those two elements into a program that provides the flexibility of online content, with the value and sense of community that comes with learning together?</p><p>We could publish workshops in a central location (on&nbsp;<code>wordpress.org</code>, for better visibility and reach) and then invite learners to join live discussion groups that cater to different timezones. This &ldquo;<a href="https://en.wikipedia.org/wiki/Flipped_classroom">flipped classroom</a>&rdquo; model allows people to learn at their convenience, and then come together for additional development.&nbsp;</p></blockquote>



<p>Lashbrooke suggested the workshops could be designed by people who would otherwise be speaking WordCamps and could possibly source content from WordPress.tv or talks that have been given at online meetups.</p>



<p>&ldquo;There is also potential for longer courses, composed of multiple workshops, and a group that meets repeatedly over time,&rdquo; Lashbrooke said.</p>



<p>So far the suggestions in  the comments include introductory workshops for WordPress. These would be timely for newcomers who have recently lost work and are looking to improve their online resumes or portfolios, or start up a new business. Beginner workshops have strong outreach potential if promoted outside of the WordPress community.</p>



<p>During the first half of the year, the Community Team began transitioning to facilitating the needs of online events and have continued to work tirelessly to find ways for people to connect. In a recent <a href="https://make.wordpress.org/community/2020/07/23/moving-forward-with-online-events/">update</a>, WordPress community organizer Andrea Middleton explained that changes are coming for future online events, which may adopt another name instead of using &ldquo;WordCamp.&rdquo;</p>



<p>Due to the<a href="https://make.wordpress.org/community/2020/05/11/financial-update-on-wordpress-community-programs/"> financial position</a> of WordPress Community Support PBC (WPCS), the community team is ending programmatic support for online AV vendor expenses. WordCamps that are not yet on the schedule will be encouraged to get sponsorships if they require the use of a professional AV vendor.</p>



<p>&ldquo;Likewise, we have paused plans to spend money on sending swag, T-shirts, or other typical WordCamp collateral,&rdquo; Middleton said. &ldquo;It&rsquo;s important to change our frame of reference for what&rsquo;s necessary to make online events, away from the WordCamp model. Just because we did things a certain way for WordCamps, doesn&rsquo;t mean it&rsquo;s a high priority for online events.&rdquo;</p>



<p>Sponsorships are also being re-examined, as online events haven&rsquo;t quite been able to deliver the same value to sponsors that traditional events did.</p>



<p>&ldquo;The value proposition of online sponsor booths is shaky, and we&rsquo;ve always prided ourselves in partnering with our sponsors,&rdquo; Middleton said. &ldquo;Looking ahead, we must examine how much funding we&nbsp;<strong>need</strong>&nbsp;to create events that meet the goals of the team, and let that determine how to best coordinate with our community sponsors to deliver value and further our mission.&rdquo; </p>



<p>The potential for in-person events for the coming year is still uncertain at this point, in the absence of a vaccine ready for commercial distribution. WordPress&rsquo; global sponsorship program has been temporarily suspended and the Community Team plans to work with global sponsors later this year to make a plan for 2021.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 28 Jul 2020 01:06:56 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:76:"WPTavern: Are Plugin Authors to Blame for the Poor Admin Notices Experience?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102405";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:195:"https://wptavern.com/are-plugin-authors-to-blame-for-the-poor-admin-notices-experience?utm_source=rss&utm_medium=rss&utm_campaign=are-plugin-authors-to-blame-for-the-poor-admin-notices-experience";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6619:"<p class="has-drop-cap">Last Thursday, Vova Feldman published an article asking that we <a href="https://freemius.com/blog/wordpress-admin-notices/">stop blaming plugin authors</a> for the plethora of admin notices that users are bombarded with each day. <em>The real culprit?</em> The lack of a notifications mechanism in WordPress core.</p>



<p>Feldman&rsquo;s post was prompted by a <a href="https://twitter.com/scottbolinger/status/1280567235006742528">tweet</a> in which Scott Bolinger called out plugin authors for letting admin notices get out of control:</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Good lord WordPress plugin authors, this is out of control. <a href="https://t.co/0S42908C5T">pic.twitter.com/0S42908C5T</a></p>&mdash; Scott Bolinger (@scottbolinger) <a href="https://twitter.com/scottbolinger/status/1280567235006742528?ref_src=twsrc%5Etfw">July 7, 2020</a></blockquote>
</div>



<p>Feldman argues that laying the blame on plugin authors is the wrong way to look at the issue. While I agree that the underlying problem lies with WordPress, plugin authors have played their part in creating an atmosphere where they have become the scapegoat for everything wrong with the system.</p>



<p>I have developed plugins since a fateful day in April 2007 in which I released a plugin that simply listed the current page&rsquo;s subpages. I have worked on 100s of plugins for clients and public release since then. In that time, I have maybe added a custom admin notice two times and only when the plugin had a major change, such as a database update. I reserved such notices for the OMGBBQ-very-important-you-need-to-read-this type of stuff. I considered it my duty to create an experience in which the user did not have to dismiss a notice every time one of my plugins received an update.</p>



<p>This was not because I was cognizant of the growing issue of dozens of notices on some sites or how often users were being overwhelmed with them. For many years, I worked within a bubble where I simply focused on creating what I considered an ideal experience for my users. I always thought the admin notices system created an abysmal experience. It did not make sense to use it more than necessary.</p>



<p>On the other hand, there were likely a few times over the years where I should have added some sort of notices for changes. Instead, I avoided doing so altogether because WordPress lacked a notifications system. I missed some good opportunities for communication.</p>



<p>To a large extent, the issue stems from this lack of a proper notification system. However, plugin authors have perpetuated this broken system by continuing to use it when unnecessary. They have used it as a billboard to place their <a href="https://wptavern.com/black-friday-banner-gone-wrong-advertising-in-free-plugins">holiday ads</a>. They have used it to upsell commercial versions of their products and services while prompting users for a five-star rating. There is plenty of blame to go around.</p>



<p>Instead of placing blame, we should start asking what tools would solve problems for developers.</p>



<h2>The Need for a Better System</h2>



<p class="has-drop-cap">Technically, WordPress simply has a hook and a set of common classes that developers can use in their HTML to provide some different colors for notices. There is no API, and without an API, it is impossible for even third-party plugin developers to even try their hands at creating various solutions.</p>



<p>The closest thing WordPress has to an API is a little-known project from the Themes Team that provides a <a href="https://github.com/WPTT/admin-notices">standardized method for theme authors</a> to add notices. However, the project covers only one aspect of admin notices, which is to create a consistent UI.</p>



<p>The admin notice issue cannot be properly addressed without identifying the problems that plugin authors have tried to solve within the system, which at least includes the following:</p>



<ul><li>User-oriented notifications, generally appearing after a user action.</li><li>Advertising commercial products and services.</li><li>Calls for plugin feedback or star ratings.</li></ul>



<p>One of the primary issues with the current notification system is that it was created for the first item in that list. The other two items are not necessarily bad things. They are just poor usages of the system in place. However, there is no other standard method to handle those scenarios.</p>



<p>Advertising is something we all must deal with in some form or fashion. I am unsure if there could or even should be a standard API for advertising. An outright ban of ads in the admin notice area could create a beast of its own, forcing plugin authors to come up with more obtrusive forms of advertising in other areas of the admin. I want to support advertising but not when that advertising wiggles its way to the top of every admin screen.</p>



<p>WordPress provides no easy way for end-users to rate or review plugins from their admin interfaces. Having an easy way to provide direct feedback would be immensely helpful for both users and developers. While I am certain many people would argue against such integration with the WordPress.org site (there are arguments against any external integration out of the box), ratings and reviews would require an explicit opt-in from end-users because they would need an account on WordPress.org.</p>



<p>Advertising and plugin feedback should not be a part of a discussion on admin notices. However, reality dictates that they are integral to the conversation.</p>



<p>The first order of business must be to create a new notification system from the ground up. It should provide a standard API for plugin authors while handing over full management capabilities to the site owners. Users should be able to disable notices altogether or even enable/disable notices on a per-plugin basis. <em>Notice that a particular plugin author provides useless notices?</em> Well, just disable notices from that plugin. The author lost their privileges.</p>



<p>From that point, we can let the progress drive the discussion on what to do about advertising and calls for feedback. A new system may shift them to a new screen &mdash; out of sight out of mind &mdash; but not make those problems disappear.</p>



<p>More than anything, it is time for a champion.  The project does not get done without someone who will pave the path forward and earn the green light for a new notifications system in WordPress.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 27 Jul 2020 21:40:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"WordPress.org blog: WordPress 5.5 Beta 4";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=8719";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2020/07/wordpress-5-5-beta-4/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3766:"<p>WordPress 5.5 Beta 4 is now available!</p>



<p id="block-81bd56b9-ea44-43ad-ab36-a5ae78b54375"><strong>This software is still in development,</strong> so it’s not recommended to run this version on a production site. Consider setting up a test site to play with the new version.</p>



<p id="block-7cc1bbc6-17f9-44c5-8f67-da4e3059ad69">You can test WordPress 5.5 Beta 4 in two ways:</p>



<ul id="block-4840af57-f44b-4d9f-aa64-c6a452392e42"><li>Try the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (choose the “bleeding edge nightlies” option)</li><li>Or <a href="https://wordpress.org/wordpress-5.5-beta4.zip">download the beta here</a> (zip).</li></ul>



<p id="block-a40528cb-eb3b-4c8a-8f5e-aa700f1ba086">WordPress 5.5 is slated for release on <a href="https://make.wordpress.org/core/5-5/">August 11th, 2020</a>, and <strong>we need your help to get there</strong>!</p>



<p>Thank you to all of the contributors who tested the <a href="https://wordpress.org/news/2020/07/wordpress-5-5-beta-3/">beta 3</a> development release and gave feedback. Testing for bugs is a critical part of polishing every release and a great way to contribute to WordPress. </p>



<h2 id="block-15d6d57f-905d-4a47-9f66-839468a5375a">Some highlights</h2>



<p id="block-85da84ec-c841-42f9-8d3b-1a4537a61d10">Since <a href="https://wordpress.org/news/2020/02/wordpress-5-4-beta-3/">beta 3</a>, <a href="https://core.trac.wordpress.org/query?status=closed&changetime=07%2F22%2F2020..07%2F28%2F2020&milestone=5.5&group=component&col=id&col=summary&col=owner&col=type&col=priority&col=component&col=version&order=priority">43 bugs</a> have been fixed. Here are a few changes in beta 4:</p>



<ul><li>Add <code>"loading"</code> as an allowed kses image attribute (see <a href="https://core.trac.wordpress.org/ticket/50731">#50731</a>).</li><li>Add filter for the plugin/theme auto-update message in the Info tab of Site health (see <a rel="noreferrer noopener" target="_blank" href="https://core.trac.wordpress.org/ticket/50663">#50663</a>).</li><li><code>$_SERVER['SERVER_NAME']</code> not a reliable when generating email host names (see <a href="https://core.trac.wordpress.org/ticket/25239">#25239</a>)</li><li>Several backported fixes from Gutenberg are included in WordPress 5.5 Beta 4 (<a href="https://github.com/WordPress/gutenberg/pull/24218">See PR #24218</a>)</li></ul>



<h2 id="block-76156b2b-0a52-4502-b585-6cbe9481f55b">Developer notes</h2>



<p id="block-3fe5e264-0a95-4f12-9a18-0cb9dc5955d1">WordPress 5.5 has lots of refinements to polish the developer experience. To keep up, subscribe to the <a href="https://make.wordpress.org/core/">Make WordPress Core blog</a> and pay special attention to the <a href="https://make.wordpress.org/core/tag/5-5+dev-notes/">developers’ notes</a> for updates on those and other changes that could affect your products.</p>



<h2 id="block-bc89fd56-47b0-439f-8e2c-4a642c80a616">How to Help</h2>



<p id="block-3ff83a77-8b54-4061-ae2d-45fc984cbd76">Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev/">Help translate WordPress into more than 100 languages</a>!</p>



<p id="block-9d871099-ec49-446c-8322-9e49b7498c10">If you think you’ve found a bug, you can post to the <a href="https://wordpress.org/support/forum/alphabeta/">Alpha/Beta area</a> in the support forums. We’d love to hear from you!</p>



<p id="block-bd71c1d3-39d9-4b2a-8193-3486497b45fd">If you’re comfortable writing a reproducible bug report, <a href="https://core.trac.wordpress.org/newticket">file one on WordPress Trac</a>, where you can also find a list of <a href="https://core.trac.wordpress.org/tickets/major">known bugs</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 27 Jul 2020 20:56:46 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"David Baumwald";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:47:"Donncha: Crowdsignal Polls in your Block Editor";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"https://odd.blog/?p=89503098";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"https://odd.blog/2020/07/27/crowdsignal-polls-in-your-block-editor/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2423:"<div class="aligncenter crowdsignal-poll-wrapper"></div>


<p>The <a href="https://crowdsignal.com/">Crowdsignal</a> team at Automattic have been quietly working on a new <a href="https://wordpress.org/plugins/crowdsignal-forms/">poll block</a> for the last few weeks. We finally made it public today on WordPress.org!</p>



<div class="wp-block-image"><img /></div>



<p>We set out with the task of creating a block that would allow the writer to quickly insert a poll in their posts using the block editor. More than that, it had to be simple to use. It also needed to be themed to match the look and feel of the website it would appear on.</p>



<div class="wp-block-image size-large"><img /></div>



<p>We&#8217;ve created a block that does that. It also records the votes collected on the Crowdsignal website where you can analyse the results using reports Crowdsignal users have always used.</p>



<div class="wp-block-image size-large"><img /></div>



<p>Search for &#8220;Crowdsignal Forms&#8221; on your plugins page to install it in the usual way.</p>



<p>A free <a href="https://crowdsignal.com/">Crowdsignal</a> account is required to use the block. We made it really easy to connect your site to your Crowdsignal account. If you don&#8217;t have one then creating a new account is simple too.</p>



<div class="wp-block-image"><img /></div>



<p>The first 2,500 responses you collect are included in your free account, and further votes are recorded but free users are encouraged to upgrade if they want to do further analysis of all the data they collect.</p>

<p><strong>Related Posts</strong><ul><li> <a href="https://odd.blog/2004/01/29/htmlarea-the-free-customizable-online-editor/" rel="bookmark" title="Permanent Link: HTMLArea &#8212; the free, customizable online editor">HTMLArea &#8212; the free, customizable online editor</a></li><li> <a href="https://odd.blog/2003/04/02/cross-browser-rich-text-editor/" rel="bookmark" title="Permanent Link: Cross-Browser Rich Text Editor">Cross-Browser Rich Text Editor</a></li><li> <a href="https://odd.blog/2003/05/22/cross-browser-rich-text-editor-work-in-firebird/" rel="bookmark" title="Permanent Link: Cross-Browser Rich Text Editor &#8211; work in Firebird?">Cross-Browser Rich Text Editor &#8211; work in Firebird?</a></li></ul></p>
<p><a href="https://odd.blog/2020/07/27/crowdsignal-polls-in-your-block-editor/" rel="nofollow">Source</a></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 27 Jul 2020 19:17:46 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"Donncha";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:11:"
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:36:"HeroPress: HeroPress Gets A Surprise";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:29:"https://heropress.com/?p=3242";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:117:"https://heropress.com/heropress-gets-a-surprise/#utm_source=rss&utm_medium=rss&utm_campaign=heropress-gets-a-surprise";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1373:"<img width="960" height="540" src="https://s20094.pcdn.co/wp-content/uploads/2020/07/heropress_cape_video_thumb-1024x576.jpg" class="attachment-large size-large wp-post-image" alt="Topher wearing his cape." />
<p>A couple of months ago <a href="https://twitter.com/michelleames">Michelle Frechette</a> approached me about being on a podcast for <a href="https://sentree.io">Sentree.io</a>. I didn&#8217;t realize at the time I was going to be their inaugural guest! We had a great time, and things got back to normal.</p>



<p>Several weeks later Michelle said they sent me a thanks gift, which was very thoughtful, and that I should have someone video the unboxing. I never once imagined what they actually sent me.  Here&#8217;s the video.</p>



<div class="wp-block-embed__wrapper">
<div class="jetpack-video-wrapper"></div>
</div>



<p>My family already has all sorts of ideas about how to use it at WordCamps. I just hope it survives being worn ALL DAY EVERY DAY.</p>



<p>It&#8217;s super well made, I snooped a little and found the etsy shop it came from. Really great embroidery and seaming. Really classy.</p>



<p>Thanks Sentree, and thanks Michelle.  :)</p>
<p>The post <a rel="nofollow" href="https://heropress.com/heropress-gets-a-surprise/">HeroPress Gets A Surprise</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 27 Jul 2020 13:31:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:72:"WPTavern: Develop, Test, and Showcase Blocks in Isolation With BlockBook";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102310";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:185:"https://wptavern.com/develop-test-and-showcase-blocks-in-isolation-with-blockbook?utm_source=rss&utm_medium=rss&utm_campaign=develop-test-and-showcase-blocks-in-isolation-with-blockbook";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4143:"<p class="has-drop-cap">Riad Benguella <a href="https://riad.blog/2020/07/22/introducing-blockbook-for-wordpress/">released BlockBook</a>, a project that promises to overhaul how developers build blocks and more, on Tuesday. It is a development environment that allows creators to work with blocks in isolation, outside of WordPress. Developers can view individual block properties and test output from a defined block library.</p>



<p>BlockBook is available as an <a href="https://www.npmjs.com/package/blockbook-cli">npm package</a>. Developers can also contribute to the project through its <a href="https://github.com/youknowriad/blockbook">GitHub repository</a>.</p>



<p>Benguella got the idea from <a href="https://storybook.js.org/">Storybook</a>, which is an open-source tool for developing UI components for React, Vue, Angular, and other JavaScript libraries in isolation. It is an environment that makes development and testing more efficient for individual components. It also allows end-users the opportunity to test those components before they are brought into a project. The goal for BlockBook is to bring a similar system to WordPress block development.</p>



<p>&ldquo;If we think about it a little bit, blocks are reusable units that can live on their own outside of any context, they can be edited visually, and they produce markup,&rdquo; wrote Benguella in the announcement post. &ldquo;They have in fact a lot in common with React Components. They are super-powered React Components.&rdquo;</p>



<p>He believes that BlockBook will be able to solve many of the issues around block development by taking the principles of the Storybook application and employing them into an environment specifically for building, testing, documenting, and sharing blocks.</p>



<p>Benguella has a full <a href="https://youknowriad.github.io/blockbook/">demo available</a> as a GitHub page. Developers can do the same with their plugins or simply host it as a static site on their own server.</p>



<img />BlockBook example output of the Gallery block.



<p>In his post, he identified three major challenges that his project is meeting head-on. The first, and most obvious for anyone who has delved into block development, is creating blocks within the WordPress environment. It is a tedious and inefficient process to develop and test blocks in the WordPress admin. By isolating the block code, developers can bypass many of the routine tasks every time they make a code change to a block.</p>



<p>The second challenge was to figure out a way to make theme testing much easier. For theme authors with one or two themes, testing block styling is relatively easy. However, for businesses, agencies, and others who maintain many themes, there is no good way to quickly see how individual blocks behave for each of the themes. BlockBook allows theme authors to register any number of themes. Essentially, developers add a few lines of code and point to the appropriate stylesheet. Once set up, testing is as simple as switching themes via a dropdown select and moving between individual blocks. All of this happens almost instantly.</p>



<p>The third part of the equation involves end-users. Currently, users have no good way to test blocks without installing a block plugin, heading to their editor, and tinkering around with it. If they do not like the block, they must start the process all over again. With BlockBook, developers can make their blocks available for testing beforehand. They can even allow end-users to beta test blocks and provide feedback without installing a plugin at all.</p>



<p>However, that is still not quite as efficient as Benguella would like. It would rely on individual developers. For the long-term, he hopes the project becomes an official WordPress package. This creates the possibility of WordPress.org automatically building and hosting a BlockBook for plugins and themes, giving users a chance to test before installing.</p>



<p>This is something that could be revolutionary for users if the official WordPress project could take it on and create a solid user experience around it.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 24 Jul 2020 19:00:52 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:102:"WPTavern: Unsplash Responds to Image Licensing Concerns, Clarifies Reasons for Hotlinking and Tracking";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102268";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:247:"https://wptavern.com/unsplash-responds-to-image-licensing-concerns-clarifies-reasons-for-hotlinking-and-tracking?utm_source=rss&utm_medium=rss&utm_campaign=unsplash-responds-to-image-licensing-concerns-clarifies-reasons-for-hotlinking-and-tracking";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:22930:"<p>Concerns are mounting regarding Unsplash&rsquo;s terms and image licensing after the site <a href="https://wptavern.com/unsplash-launches-official-plugin-for-wordpress">launched its official WordPress plugin</a> this week. Several people commented on the restrictions and lack of clarity in the license. </p>



<p>&ldquo;The irony here is that this goes against Unsplash&rsquo;s own licensing for images,&rdquo; Aris Stathopoulos commented. &ldquo;It&rsquo;s vague and restrictive to the point where one doesn&rsquo;t even know if they can actually use the images they import.&rdquo;</p>



<p>Matt Mullenweg responded to Stathopoulos&rsquo; comment, saying, &ldquo;I agree, not sure if this should be allowed in the directory.&rdquo;</p>



<p>The last time the site made a major splash in WordPress news was in 2017 after <a href="https://wptavern.com/unsplash-updates-its-license-raises-gpl-compatibility-concerns">revising its license</a> to prohibit the compilation of photos for the creation of a similar or competing service. Its new branded license made the library&rsquo;s images incompatible with the GPL and unable to distributed with WordPress themes and plugins.</p>



<p>Unsplash co-founder Luke Chesser believes these comments are due to a misunderstanding about the license change.</p>



<p>&ldquo;As you know, themes have a requirement that themes and their content be GPL compatible,&rdquo; Chesser said. &ldquo;Outside of themes, WordPress&rsquo;s application of GPL doesn&rsquo;t apply to content in plugins. That&rsquo;s why you can have a YouTube plugin, a Getty Images plugin, a Giphy plugin, etc. &mdash; none of this content is licensed under GPL. In most cases plugins serve content that has a very narrow usage license, much, much more restrictive than the Unsplash License.&rdquo;</p>



<h2>Why Unsplash Abandoned Creative Commons Zero Licensing</h2>



<p>To understand the sensitivity to Unsplash&rsquo;s licensing change, one must dust off a bit of web history. When the site first started in 2013, the images were licensed under the very permissive&nbsp;<a rel="noreferrer noopener" href="http://creativecommons.org/publicdomain/zero/1.0/" target="_blank">Creative Commons Zero</a>&nbsp;license. It quickly grew from a Tumblr-hosted photo blog that shared &ldquo;10 new photos every 10 days&rdquo; for free, to one of the most popular photo libraries on the web. </p>



<p>Chesser said the real life problems the Unsplash community encountered caused his team to change the licensing to protect photo authors. </p>



<p>&ldquo;People were downloading the images and reselling them on Getty and Shutterstock,&rdquo; he said. &ldquo;Even if the people doing this made no money, it was such a negative experience for Unsplash contributors that they would remove their images from Unsplash, removing content that was previously available to openly be created with.</p>



<p>&ldquo;Scraping of the site and the library had a similar effect as contributors would see their photos copied over to thousands of free image sites they never signed up for, or worse, their photos being made available to other sites with no attribution.&rdquo;</p>



<p>Unsplash contributors were likely not fully aware of the freedoms that the CC0 license affords. These problems may be undesirable applications of the license but they were not outright misuses. When Unsplash changed its license, approximately 200,000 images were no longer identified on the site as being part of the public domain. </p>



<p>Creative Commons got involved after the organization started receiving questions from users in the open content and free software movements. Ryan Merkley, CEO of Creative Commons at that time, penned an <a href="https://creativecommons.org/2017/06/22/unsplash/">update</a> on Unsplash&rsquo;s licensing change to the CC community, expressing the organization&rsquo;s concerns.</p>



<p>&ldquo;Our intention is to ensure that CC community members understand what has happened to a service they have been using that incorporated CC tools, and to protect the content that was dedicated to the public domain,&rdquo; Merkley said.</p>



<p>Creative Commons called on Unsplash to properly differentiate the works that were previously shared under the irrevocable CC0 license so that they would not disappear from the public domain:</p>



<blockquote class="wp-block-quote"><p>Following the switch to the new Unsplash-branded license, there is no marking of works that were previously shared in the public domain using CC0. The Unsplash API restricts/obscures the full CC0 collection, which we believe to be about 200,000 images, but it isn&rsquo;t possible to access the complete archive. In order to ensure that the commons is maintained, we hope that Unsplash will either a) properly mark all the works shared using CC0 and/or b) make available a full archive of the CC0 works so they can be shared on a platform that supports open licensing and public domain tools. Previous platforms that have gone under or abandoned open license tools have shared their CC archives for this purpose. We hope Unsplash will follow the same path.</p></blockquote>



<p>Unsplash declined to identify these images at that time. When I asked Chesser if the company is willing to update their API to differentiate these works, he said they discovered the images were never CC0 to begin with because of Unsplash&rsquo;s terms: </p>



<blockquote class="wp-block-quote"><p>The 2017 license clarification I described was also brought about because the team from Creative Commons told us that the photos were not licensed under CC0 if there were additional terms stipulated on the terms page. Therefore, the photos were not actually under CC0, as they had been submitted with additional terms attached to them and we could not and can not distribute the&nbsp;photos under the CC0 license. As part of this, we renamed the license to the Unsplash License and clarified the main parts of the terms in the form of the Unsplash License.</p></blockquote>



<p>The controversy over the license change struck a nerve with those who <a href="https://www.designernews.co/stories/84910-unsplash-images-are-no-longer-in-the-public-domain">perceived the move to be unfair</a> to the community of creators who had been convinced to put their works in the public domain. Unsplash had become a household name on the backs of Creative Commons Zero licensing, with the images fetching more than <a href="https://medium.com/unsplash/unsplash-best-of-2017-eb36ee81236">29 billion views in 2017</a>, only to abandon the license when it was no longer expedient for the growth of their community. </p>



<p>That body of work that had been originally shared to the public domain was then deftly hidden away (and remains so) with no differentiation in the site&rsquo;s API to identify these images. This is what Mullenweg seemed to be referencing when he <a href="https://wptavern.com/unsplash-launches-official-plugin-for-wordpress#comment-335431">commented</a> on the plugin launch. </p>



<p>&ldquo;Encouraging hotlinking is also pretty suspicious, especially after the previous bait and switch,&rdquo; Mullenweg said. &ldquo;Maybe if there was a way again to find just the CC0 licensed images, which the Creative Commons also requested, this could be okay to promote.&rdquo;</p>



<p>Chesser contends that the Unsplash community had no complaints with the decision and that the only people who were dissatisfied were those who were not contributors.</p>



<p>&ldquo;For anyone who feels that we somehow &lsquo;tricked&rsquo; our community, again, I&rsquo;d point back to the reaction from our actual contributor community &mdash; the people who generously submit their images to Unsplash for others to create with,&rdquo; Chesser said. &ldquo;We heard no complaints from this community when we clarified the License in 2017. Had there been an issue,&nbsp;had we somehow been taking&nbsp;advantage of their contributions, we would have certainly heard about it then, as our community are very passionate and vocal. </p>



<p>&ldquo;The only complaints we heard were from people from outside of the Unsplash community &mdash; including Matt &mdash; who have never submitted an image to Unsplash and aren&rsquo;t part of our community. On the internet, there will always be people who disagree with you &mdash; we focus on our community and expanding the number of people who have access to create with images.&rdquo;</p>



<p>This particular licensing conflict seems to have inspired a bit of lasting apprehension regarding Unsplash&rsquo;s willingness to change its license and terms in the future. Allowing a plugin to efficiently pump out thousands of images to WordPress sites could potentially make the platform&rsquo;s user base a vector for disseminating works that someday may not be available with the same freedoms. </p>



<p>&ldquo;Could the terms or licensing of that hotlinking change in the future, as the licensing did in 2017?&rdquo; Mullenweg asked in the comments.</p>



<p>&ldquo;I forsee no future scenario where our terms will ever meaningfully change,&rdquo; Chesser said. &ldquo;They will of course occasionally be refined, as all terms are&mdash;like when we added clarifications around GDPR compliance or when we add new features that require a legal definition. But our mission and goal are the same as they have always been: to enable anyone to create with visuals, and our terms will continue to reflect that.&rdquo;</p>



<p>After a few in the WordPress community expressed that the license was not clear in terms of what users can do with the images, Chesser said he would be open to making a separate clarification document to address any legitimate concerns.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">The actual license has been ruled as very clear by a lot of lawyers and we want to avoid complicating it's simplicity with more legalese, but we're open to making a separate clarification/side-letter/legal document which addresses any legitimate concerns</p>&mdash; Luke Chesser (@lukechesser) <a href="https://twitter.com/lukechesser/status/1286446954197770244?ref_src=twsrc%5Etfw">July 23, 2020</a></blockquote>
</div>



<p>When the 2017 licensing controversy happened, Richard Best, a technology and public lawyer based in New Zealand, said the new Unsplash license <a href="http://wpandlegalstuff.com/unsplash-gpl-compatibility-concern-red-herring/">could use some clarification</a> regarding freedoms for downstream recipients. He suggested changes that rephrase it as follows: &ldquo;Unsplash grants&nbsp;<span>you and every person&nbsp;who comes into possession of the photos</span>&nbsp;a nonexclusive copyright license to&hellip;&rdquo;</p>



<p>&ldquo;These changes are intended to ensure that downstream recipients of the photos receive the same licence from Unsplash,&rdquo; Best said. &ldquo;Both the GPL and the Creative Commons licences are structured in this way. Without these changes, distributors of products like website themes may be concerned&nbsp;that the end users of their products will not receive the rights they need to use the photos for their own purposes.&rdquo;</p>



<p>Chesser said the&nbsp;Unsplash License and terms were created by the same legal team that created the Creative Commons licenses. Any major differences regarding the freedoms for downstream recipients were likely considered and intentional. It may still be an important clarification, as the block editor continues to make it easier for users to create and share their own designs with images. </p>



<h2>Unsplash Clarifies the Purpose of Hotlinking to the CDN and Tracking Views</h2>



<p>The official Unsplash plugin is different from other plugins created to connect users to the free image library in that it hotlinks images to the Unsplash CDN, ostensibly to reduce the site&rsquo;s bandwidth usage and speed up delivery.</p>



<p>&ldquo;The plugin uses the Unsplash CDN to serve Unsplash images while the plugin is installed and enabled,&rdquo; Chesser said. &ldquo;At the same time, every image used in a post will also be copied over to the local server and stored there. We store a copy of every image on the local WordPress install so that if the plugin is disabled or removed by the site owner, their posts can continue to serve the local images and don&rsquo;t break, however they lose the features of the Unsplash CDN.&rdquo;</p>



<p>The CDN also supports dynamic resizing, compression, cropping, automatic file format conversion, and a number of performance improvements that Chesser said the service has implemented based on what the team as learned from serving tens of billions of images every month for 8+ years.</p>



<p>&ldquo;When we talked to publishers, these features were extremely important to them,&rdquo; he said. &ldquo;Rather than try to rebuild the wheel in WordPress, we wanted to offer these features to publishers as they aren&rsquo;t supported natively by WordPress and are table stakes for modern image serving.&rdquo;</p>



<p>The Unsplash CDN exists to serve the needs of Buzzfeed, Trello, Adobe, Dropbox, Notion, and 2,200+ official <a href="https://unsplash.com/developers">API integrations</a>. It also gives Unsplash contributors a better idea of the real number of views of the content they post.</p>



<p>&ldquo;This outsized distribution of their images is one of the main reasons that photographers post on Unsplash,&rdquo; Chesser said. &ldquo;A quick <a href="https://twitter.com/search?q=unsplash%20views&src=typed_query">search on twitter</a> gives you a good idea for how important this phenomenon is to our contributors.&rdquo;</p>



<p>One commenter <a href="https://wptavern.com/unsplash-launches-official-plugin-for-wordpress#comment-335442">said</a> that she was put off by the official plugin&rsquo;s requirement to authenticate, since competing plugins don&rsquo;t add this extra layer.</p>



<p>&ldquo;They can now force user sign ups to inflate their user base even though other plugins just serve images without any sort of authentication,&rdquo; she said. &ldquo;What is the point in a user authenticating to only receive an API key? It&rsquo;s not like you can access Likes or your collection with only the API key.</p>



<p>&ldquo;Serving images from their CDN also allows them to track image views and URLs which helps inflate the download and view counts for their contributors. These other plugins like Instant Images downloads the file to your media library which would only count as a single download. I&rsquo;m going to stick with Instant Images as I don&rsquo;t feel like feeding the advertising machine.&rdquo;</p>



<p>Responses to the plugin&rsquo;s approach were mixed, but overall it seemed that most users were delighted to cut a few steps out of their workflow for posting images to WordPress. The plugin has more than 300 downloads in 48 hours.</p>



<h2>Is Unsplash in Violation of the WordPress Plugin Directory&rsquo;s Guidelines?</h2>



<p>After Matt Mullenweg raised concerns about the plugin&rsquo;s suitability for the directory, commenters called in similar concerns about the Pexels library, which Automattic uses in Jetpack.</p>



<p>Unsplash does not appear to be in violation of the official WordPress.org plugin directory guidelines. Earlier this year when asked about a different plugin that imports an Unsplash image, Plugin Team member Samuel Otto Wood <a href="https://wordpress.slack.com/archives/C1LBM36LC/p1581854898429000">responded</a> using an Unsplash-specific example: </p>



<blockquote class="wp-block-quote"><p>Let&rsquo;s simplify this right down to basics: Lets say you made a plugin that imports images from Unsplash into your site. That plugin is fine. It has no images in it, the purpose of it is to access a library of images and allow you to pull them into your site. You have to take actions to pull in those images. That is perfectly acceptable for being hosted on&nbsp;<a rel="noreferrer noopener" target="_blank" href="http://w.org/">w.org</a>. So, you can&rsquo;t use Unsplash images in your plugin hosted here. But if it pulls them from somewhere else via user action and intention, fine.</p></blockquote>



<p>Chesser sees the concerns regarding the clarity of Unsplash&rsquo;s licensing as unwarranted, given Automattic&rsquo;s use of the Pexels library.</p>



<p>&ldquo;Pexels made a clone of the Unsplash License with the exact same restrictions shortly after we updated it in 2017,&rdquo; Chesser said. &ldquo;At no point has WordPress expressed any skepticism that the Pexels License is legally vague. Given that they have instead created multiple official partnerships with Pexels, including adding it to Jetpack, then I would expect that they consider the license to be legally clear.&rdquo;</p>



<p>Both Pexels and Unsplash licenses share similar restrictions but Pexels has more restrictions on how images can be used. Chesser believes the renewed concerns are entirely founded on Unsplash&rsquo;s controversial 2017 licensing change.</p>



<p>&ldquo;Before 2017, we had a strong relationship with WordPress,&rdquo; Chesser said. &ldquo;Since then, WordPress has essentially cut off all ties with Unsplash and instead made partnerships with Pexels to integrate into WordPress features. What&rsquo;s strange though is that shortly after we clarified our license in 2017, Pexels did the same thing, adding the same restrictions&nbsp;<a rel="noreferrer noopener" href="https://www.pexels.com/terms-of-service/#restrictions-on-use-of-the-service-and-content:~:text=to%20portray%20any%20person%20depicted%20in,engaging%20in%20immoral%20or%20criminal%20activities%3B" target="_blank">plus a few additional ones</a>.</p>



<p>&ldquo;Specifically, you can see that they have the same restriction around&nbsp;<a rel="noreferrer noopener" href="https://www.pexels.com/license/#flash-container:~:text=Don't%20sell%20unaltered%20copies%20of%20a,physical%20product%20without%20modifying%20it%20first." target="_blank">reselling of content</a>&nbsp;and the&nbsp;<a rel="noreferrer noopener" href="https://www.pexels.com/license/#flash-container:~:text=Don't%20redistribute%20or%20sell%20the%20photos%20and%20videos%20on%20other%20stock%20photo%20or%20wallpaper%20platforms." target="_blank">same restriction around recompiling and scraping of the site</a>. (Note: they use the word redistribute on the license page, but&nbsp;<a rel="noreferrer noopener" href="https://www.pexels.com/terms-of-service/#intellectual-property:~:text=the%20right%20to%20compile%20any%20Pexels%20Content%20to%20replicate%20a%20similar%20or%20competing%20Service%3B" target="_blank">use the word compile in their terms</a>.)&rdquo;</p>



<p><a href="https://xwp.co/">XWP</a>, the agency that Unsplash partnered with to build the plugin, said the license is &ldquo;significantly less restrictive than Pexels, Youtube, Getty, Spotify and many other examples you&rsquo;ll find throughout the plugin directory.&rdquo; If this plugin is in violation, then many others would be called into question along with it.</p>



<p>&ldquo;As rule 6 on the <a rel="noreferrer noopener" href="http://wordpress.org/" target="_blank">WordPress.org</a> plugin guidelines clearly state: &lsquo;Plugins that act as an interface to some external third party service (e.g. a video hosting site) are allowed, even for paid services,&rdquo; XWP CTO Derek Herman said.</p>



<p>&ldquo;As their high quality images are available as an API, we built a community plugin up to WordPress VIP coding standards so that Unsplash would work on a variety of use cases, from WordPress versions 4.9 to 5.4. Integration with APIs has been key to WordPress&rsquo; growth over the past few years.&rdquo;</p>



<p>Herman also cited several prominent examples of content integrations with varying licenses and terms that govern the content:</p>



<ul><li>A leading enterprise publishing plugin is <a href="https://wordpress.org/plugins/getty-images/" target="_blank" rel="noreferrer noopener">Getty Images</a>, which is a <a href="https://wpvip.com/plugins/getty-images/" target="_blank" rel="noreferrer noopener">WordPress VIP partner plugin</a> and has long been used by larger organizations. It primarily sells &ldquo;restricted-usage&rdquo; images connected to a network of media sources like newspapers and freelancers.</li><li><a href="https://wordpress.org/support/article/embeds/" target="_blank" rel="noreferrer noopener">WordPress core has extensive oembed support for third parties</a>, which takes third-party URLs and parses them in a way to link to the site. While Amazon Kindle, Spotify and Youtube&rsquo;s content licensing rules are quite restrictive, the goal of these integrations are to encourage content creators to tell stories with what they find across the internet.</li><li>In its most recent release <a href="https://jetpack.com/2020/07/07/87-easier-reach-customers/" target="_blank" rel="noreferrer noopener">Jetpack included two exciting new media integrations</a>&mdash;Google Photos and Pexels&mdash;which are certainly relevant here. Pexels actually has a &ldquo;<a href="https://help.pexels.com/hc/en-us/articles/360043229813-Can-I-use-photos-and-videos-from-Pexels-in-a-political-campaign-" target="_blank" rel="noreferrer noopener">political views</a>&rdquo; clause in their license. As they do not define what is a &ldquo;political policy or viewpoint&rdquo; it could be viewed as too restrictive as nearly any post could be construed as being political.</li><li>There are a few other plugins using Unsplash in the WordPress ecosystem, such as <a href="https://wordpress.org/plugins/instant-images/" target="_blank" rel="noreferrer noopener">Instant Images</a> (which has been in the directory for over three years). In fact, WordPress Release lead Riad Benguella wrote a great prototype plugin called &ldquo;<a href="https://wptavern.com/drop-it-plugin-brings-gifs-and-unsplash-photos-to-gutenberg" target="_blank" rel="noreferrer noopener">Drop It</a>,&rdquo; which integrates with both GIPHY and Unsplash, and served as inspiration for us on this project.&nbsp;</li></ul>



<p>At the moment, it seems Unsplash is within WordPress.org&rsquo;s plugin directory guidelines, but if its terms and licensing are deemed incompatible, many media integrations in the plugin ecosystem will also be called into question. Users who object to Unsplash&rsquo;s method of delivery can always opt to use a plugin with a different approach. Those who want to support libraries that serve images with GPL-compatible licensing can check out the Theme Team&rsquo;s list of <a href="https://make.wordpress.org/themes/handbook/review/resources/#recommended-websites-for-images">recommended sources</a> and look for plugins that integrate those.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 24 Jul 2020 17:24:29 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:93:"WPTavern: Revised Block Directory Guidelines Proposal Updates Wording but Changes Little Else";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102315";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:231:"https://wptavern.com/revised-block-directory-guidelines-proposal-updates-wording-but-changes-little-else?utm_source=rss&utm_medium=rss&utm_campaign=revised-block-directory-guidelines-proposal-updates-wording-but-changes-little-else";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6513:"<p class="has-drop-cap">Yesterday, Alex Shiels <a href="https://make.wordpress.org/plugins/2020/07/22/proposed-block-directory-guidelines/">posted an update</a> to the <a href="https://github.com/WordPress/wporg-plugin-guidelines/pull/70/files#diff-bcf4c6e86251a8d088c6bd5800c476ff">proposed guidelines</a> for the WordPress block directory. The document adds eight rules for plugin authors to follow if they plan to add their one-off blocks to the directory. The guidelines are additional requirements on top of the existing plugin directory guidelines.</p>



<p>While the wording and organization of the block guidelines received a revamp in comparison to the <a href="https://github.com/WordPress/wporg-plugin-guidelines/blob/87a9a17eca6d4b39a6bb4b1f2c8dcf33aff26336/blocks.md">original proposal</a>, the overall sentiment is unchanged. Shiels thanks community developers for the feedback on the original guidelines but does not go into detail about the things that changed as a result.</p>



<p>The primary guidelines are mostly expected, run-of-the-mill requirements for blocks. Developers need a <code>block.json</code> file. They should name stuff appropriately. Plugins should contain only a single block. Plugins should only touch the block editor. Blocks should work seamlessly once activated.</p>



<p>The remaining guidelines are certain to be a disappointment or point of contention for some developers.</p>



<h2>Monetization Still Not Allowed</h2>



<p class="has-drop-cap">The largest <a href="https://wptavern.com/can-the-block-directory-and-business-interests-coexist">feedback on the guidelines</a> we received here at the Tavern surrounded what is essentially a blanket ban on commercial interests for block developers. Blocks still cannot hook into a paid service or advertise within the admin. This limitation will obviously turn away many businesses that may have been looking forward to the block directory as a potential avenue for profit. Right now, one-off blocks will need to be built by those with altruistic interests, giving back to the community simply out of the kindness of their hearts.</p>



<p>While there is nothing inherently wrong with wanting to do that, it is not attractive to developers who are primarily focused on putting food on the table. Hobbyists and larger businesses with the resources to give back will be well-suited to add blocks to the directory. However, it will give a lot of developers pause because it is unlikely a good return on investment. Instead, those developers are more likely to submit their blocks to the normal plugin directory with their normal upsell methods. This will only serve to make block discoverability harder for end-users.</p>



<p>This is a missed opportunity to build a well-rounded system that is fair to both users and developers who need to make a living. Whether it is through the plugin tag system or specific guidelines on monetization, we could have built something that made everyone a little happy and a little mad, a compromise that merged a good user interface and experience.</p>



<p>It is not like there have been no proposals. In January, Luke Carbis wrote a detailed outline of <a href="https://carb.is/2020/01/block-business/">how WordPress could provide a middle ground</a> between sustainability (business models) and accessibility (free options) with the upcoming block directory. His fear was that the block directory would be full of blocks without updates in a few years because the completely free model is unsustainable. His proposal was a badge-based system that let users know if a block contained ads, used a freemium model, or required a sign-in to a third-party service.</p>



<p>The current guideline is not set in stone. This is the first version of the block directory. It is not out of the question that the team could change things as the directory grows over time.</p>



<h2>No Love for Server-Side Blocks</h2>



<p class="has-drop-cap">The block directory guidelines are still heavily geared toward static blocks. PHP must be kept at a minimum and primarily be used to load any necessary scripts and stylesheets. Server-side blocks are not getting much attention at the moment, which may be a limitation of the software.</p>



<p>It would be great to see a way for some server-side blocks to be included in the block directory. For example, a breadcrumbs block would need to rely heavily on PHP to render its output. It is a dynamic block rather than static. This particular block would not be useful until full-site editing lands in WordPress, which is still several months away. However, I am getting the itch to turn an old breadcrumbs plugin of mine into a block. It would be neat to see it listed in the block directory.</p>



<p>There are countless other scenarios. Post lists, product grids, and data pulled from external APIs are all good use cases for one-off blocks.</p>



<h2>Dependencies Are Not Allowed</h2>



<p class="has-drop-cap">Given the way that WordPress works, it makes sense to ban dependencies on other plugins for any particular block to function. This is an old limitation that is rearing its head again. Every other modern framework uses some sort of dependency management to address this problem.</p>



<p>The block directory has the potential to exacerbate the problem even further. Because plugins coming from this directory will be single blocks, it will often mean that developers are using the same bits of code across multiple projects. For example, an end-user may activate multiple block plugins that rely on the same JavaScript library. Because there is no 100%, sure-fire way to make sure only one instance of this library is loaded, users may be running multiple instances of it on their sites. It is not a new problem, but smaller block plugins mean that users are more likely to install more plugins. It increases the probability of running into this issue.</p>



<p>If there was any sort of basic dependency management for plugin authors to use in WordPress, it would solve a world of problems. Over the years, developers have created methods to minimize the issues stemming from the lack of such a system. However, nothing is foolproof without a standard to follow.</p>



<p>This has also held developers back from building libraries, scripts, and tools that could benefit the entire development community as a whole. Everyone builds their own things in-house, and the block directory is making a promise for more of the same.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 23 Jul 2020 20:38:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"BuddyPress: BuddyPress 6.2.0 beta";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:32:"https://buddypress.org/?p=312990";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:53:"https://buddypress.org/2020/07/buddypress-6-2-0-beta/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2350:"<p>Hi BuddyPress contributors!</p>



<p>We will soon publish a maintenance release (<strong>6.2.0</strong>) to prepare BuddyPress to some changes that will introduce WordPress next major release (5.5.0). WordPress 5.5.0 is slated for August 11, and we&#8217;d love you to help us use the coming days to make sure your favorite community engine is ready to fully enjoy this new version of WordPress.</p>



<p>BuddyPress 6.2.0 will make sure our BP Email feature is using the 6.0 version of PHPMailer when WordPress 5.5.0 is installed on your site and will carry on using its version 5.2 when your WordPress version is lower (4.8 to 5.4 for the supported versions of our 6.0 branch). For more information about it, please have a look to this <a href="https://buddypress.trac.wordpress.org/ticket/8322">ticket</a>.</p>



<p>If you&#8217;re a plugin or a theme developer and are extending our BP Email feature, we strongly advise you to test your code with the latest pre-release of WordPress 5.5.0 (eg: <a href="https://wordpress.org/news/2020/07/wordpress-5-5-beta-3/">5.5.0-beta3</a>) and BuddyPress <a href="https://downloads.wordpress.org/plugin/buddypress.6.2.0-beta1.zip">6.2.0-beta1</a>.</p>



<p>WordPress 5.5.0 will also <a href="https://make.wordpress.org/core/2020/06/29/updating-jquery-version-shipped-with-wordpress/">remove the jQuery Migrate library</a>, as BuddyPress uses a lot jQuery, we&#8217;ve been checking the impact of this removal. We haven&#8217;t found any issue so far, but if you do, please warn us about it commenting this <a href="https://buddypress.trac.wordpress.org/ticket/8333">ticket</a>.</p>



<p>A detailed changelog will be part of our official release notes, but, until then, you can check out this&nbsp;<a href="https://buddypress.trac.wordpress.org/query?status=closed&group=resolution&milestone=6.2.0">report on Trac</a>&nbsp;for the full list of fixes.</p>



<p>You can test the <a href="https://downloads.wordpress.org/plugin/buddypress.6.2.0-beta1.zip">6.2.0-beta1</a> pre-release in 2 ways :</p>



<ul><li>Use the <a href="https://wordpress.org/plugins/bp-beta-tester/">BP Beta Tester</a> plugin.</li><li><a href="https://downloads.wordpress.org/plugin/buddypress.6.2.0-beta1.zip">Download the 6.2.0 beta release here (zip file)</a>.</li></ul>



<p>Thanks in advance for your contributions.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 23 Jul 2020 00:45:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Mathieu Viet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:68:"WPTavern: Google Delays Mobile-First Indexing Deadline to March 2021";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102262";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:181:"https://wptavern.com/google-delays-mobile-first-indexing-deadline-to-march-2021?utm_source=rss&utm_medium=rss&utm_campaign=google-delays-mobile-first-indexing-deadline-to-march-2021";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3509:"<p>Google had set September 2020 as the deadline for when it would begin to fully switch over to crawling and indexing sites using mobile-first indexing but announced today that site owners will have more time to prepare. The deadline has been <a href="https://webmasters.googleblog.com/2020/07/prepare-for-mobile-first-indexing-with.html">extended to March 2021</a>. </p>



<p>Mobile-first indexing is a long-term plan that Google began rolling out in July 2019 by enabling it for new domains. The company cited &ldquo;these uncertain times&rdquo; as the reason for delaying the next phase of the rollout. The announcement also referenced further testing that showed a number of common issues sites are having in making the transition. Google urged site owners to pay close attention to several important issues:</p>



<ul><li>Robots meta tags on mobile version should match the desktop version or Google may fail to index or follow links on the page.</li><li>Do not lazy-load primary content based on user interactions (like swiping, clicking, or typing), because the Googlebot doesn&rsquo;t trigger these user interactions.</li><li>Avoid the bad practice of using smaller images on mobile to fit the smaller screen. Small and low quality image will not be favorably indexed.</li><li>Ensure content on the mobile version matches the desktop, since only the mobile version will be used for indexing and ranking in Search. </li><li>Include meaningful alt text for images.</li></ul>



<p>Google also outlined several other tips for image and video markup and placement. The announcement is essentially a tutorial for how to improve common mistakes that can negatively impact mobile ranking and indexing.</p>



<p>Since mobile-first indexing is already enabled for most currently crawled sites, some speculated that the delayed deadline was due to hastily migrated mobile subdomain sites. John Mueller, Webmaster Trends Analyst at Google, confirmed this is the case and advised site owners to avoid this dated approach and update at the nearest opportunity.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">That's basically the inverse of how it was before, when desktop URLs were sometimes shown in mobile serps. Ideally, you'd redirect by device type. M-dot sites do make things harder; for new sites I'd avoid them, for older sites, I'd fix with the next bigger revamp.</p>&mdash; &#127820; John &#127820; (@JohnMu) <a href="https://twitter.com/JohnMu/status/1285877309862563840?ref_src=twsrc%5Etfw">July 22, 2020</a></blockquote>
</div>



<p>Before the advent of responsive design, many WordPress site owners added plugins that would create a separate mobile site to provide a more mobile-friendly browsing experience. Website visitors soon expected the entire web to be available to them on the devices they carried around in their pockets. This is now the primary way that people interact with the web, and Google&rsquo;s mobile-first indexing is a reflection of this new reality.</p>



<p>If your WordPress site is still relying on a plugin to create a separate mobile site, or if you are using a plugin for lazy loading, make sure that the solution you have in place is following  Google&rsquo;s <a href="https://developers.google.com/search/mobile-sites/mobile-first-indexing">mobile-first indexing best practices</a>. There are still 9 months remaining before Google makes mobile-first indexing and ranking the default for the entire web.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 22 Jul 2020 23:20:37 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:60:"WPTavern: Zero BS CRM Rebrands and Relaunches as Jetpack CRM";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102138";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:165:"https://wptavern.com/zero-bs-crm-rebrands-and-relaunches-as-jetpack-crm?utm_source=rss&utm_medium=rss&utm_campaign=zero-bs-crm-rebrands-and-relaunches-as-jetpack-crm";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5649:"<img />Jetpack CRM welcome screen.



<p class="has-drop-cap">Mike Stott, co-creator of Zero BS CRM, <a href="https://jetpack.com/2020/07/20/introducing-jetpack-crm/">announced the launch of Jetpack CRM</a> on Monday. The news was the seemingly inevitable rebranding of the original plugin that he and Woody Hayday had built. Automattic, the owner of the Jetpack plugin, acquired the project almost a year ago. While <a href="https://wordpress.org/plugins/zero-bs-crm/">Jetpack CRM</a> carries the &ldquo;Jetpack&rdquo; name, it is still a standalone project and has a <a href="https://jetpackcrm.com/">dedicated website</a>.</p>



<p>CRM stands for &ldquo;customer relationship management.&rdquo; Such systems allow businesses to manage relationships through an interface but can vary extensively in user experience. The goal is to manage contacts, sales, and productivity through the software.</p>



<p>The duo of Stott and Hayday have had a bit of a journey in the past year. In August 2019, <a href="https://wptavern.com/automattic-acquires-zero-bs-crm-considers-rebranding-it-as-jetpack-crm">Automattic acquired the project</a> and provided the resources for the team to continue working on Zero BS CRM. The <a href="https://wptavern.com/zero-bs-crm-3-0-improves-ui-changes-database-structure-and-becomes-more-extendable">3.0 launch</a> in December 2019 was a massive undertaking that included a major database change and UI improvements. Since then, they have worked toward rebranding the project. Stott also did this with a newborn in his family.</p>



<p>When version 3.0 of Zero BS CRM launched, Stott said they were still discussing whether to rebrand and bring the plugin under the Jetpack umbrella. They were gathering user feedback at the time, but his primary focus was on developing features. The name was not the foremost thing on his mind. However, branding can make or break even a good project, and Jetpack is as close to a household name as any product coming out of the WordPress ecosystem. It made sense to lean on that branding.</p>



<p>&ldquo;Jetpack&rsquo;s mission is to help entrepreneurs and small businesses succeed by providing tools that keep their sites fast and secure,&rdquo; said Stott. &ldquo;We felt that from within the Automattic family, this was a great match. We created ZBS CRM with the same end goal in mind &mdash; helping you succeed through better customer relationships, so it just made sense.&rdquo;</p>



<p>After nearly a year beyond the acquisition, Stott feels like things are going great within the new environment at Automattic. &ldquo;We&rsquo;ve found the right product fit within Automattic,&rdquo; he said. &ldquo;In Jetpack, we&rsquo;re happy that we can really push the CRM, and it&rsquo;s exciting to be part of the bigger WordPress family and being able to integrate with WooCommerce, etc.&rdquo;</p>



<p>Version 4.0 of the plugin primarily changes the branding in the admin and lightens the UI background. The team has also continued to add small changes.</p>



<p>&ldquo;Looking ahead, we&rsquo;re excited to continue developing the CRM following user feedback,&rdquo; said Stott. &ldquo;We&rsquo;ll be working on our roadmap and, of course, how we can best integrate with the Jetpack family.&rdquo;</p>



<h2>Growing and the Future</h2>



<p class="has-drop-cap">Jetpack CRM currently has 3,000+ active installs. This is up from 2,000 since the launch of version 3.0 last December. It has been a slow road thus far. However, there is room for growth. The leading CRM plugin, Hubspot, has 100,000+ active installs. There should be plenty of room for competing plugins in the CRM market.</p>



<p>&ldquo;There&rsquo;s a massive opportunity for CRM in the WordPress space,&rdquo; said Stott. &ldquo;A CRM is not like installing an SEO plugin on every website you own &mdash; generally you&rsquo;d only have a single CRM for your business &mdash; but it&rsquo;s the core of your business. The fact that 3,000+ users and counting are choosing WordPress to run their CRM is a great start.&rdquo;</p>



<p>The Jetpack brand should help spur some of the growth, particularly if Automattic pushes it as an add-on within the primary Jetpack plugin.</p>



<p>&ldquo;[Jetpack] has substantial reach among website owners who would benefit from a CRM but may not know what a CRM is,&rdquo; said Stott. &ldquo;While we&rsquo;re happy that the plugin is still growing organically, we are just about set up to really push Jetpack CRM with full force.&rdquo;</p>



<p>Stott believes the Hubspot comparison isn&rsquo;t apples-to-apples. Unlike Jetpack CRM, the Hubspot plugin pushes users to an app that is hosted off-site.</p>



<p>&ldquo;While this makes sense for some users, it doesn&rsquo;t really take advantage of the huge benefits that native WordPress plugins offer,&rdquo; he said. &ldquo;Jetpack CRM sits on the user&rsquo;s servers. Users manage and control their own data &mdash; a huge win under the GDPR whereas a site owner you&rsquo;re legally required to know where your data is held. Not to mention that the plugin is also extendable.&rdquo;</p>



<p>Stott said he has always loved the WordPress community&rsquo;s open-source approach and the freedoms that it provides to build something custom or extend what is already there. There should be ample opportunity for developers to extend Jetpack CRM&rsquo;s codebase.</p>



<p>&ldquo;To my mind, there has never been a more exciting time for plugins like Jetpack CRM, which we envision as the &lsquo;business layer&rsquo; for modern entrepreneurs, much like WooCommerce has democratized eCommerce,&rdquo; he said.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 22 Jul 2020 19:21:47 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:57:"WPTavern: Unsplash Launches Official Plugin for WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101136";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:159:"https://wptavern.com/unsplash-launches-official-plugin-for-wordpress?utm_source=rss&utm_medium=rss&utm_campaign=unsplash-launches-official-plugin-for-wordpress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6658:"<p><a href="https://unsplash.com/">Unsplash</a> has released its own <a href="https://wordpress.org/plugins/unsplash/">official plugin for WordPress</a>, co-developed with the team at <a href="https://xwp.co/">XWP</a>. The plugin seamlessly connects Unsplash&rsquo;s 1 million+ free high-resolution image library with the WordPress editor.</p>



<div class="wp-block-embed__wrapper">
<a href="https://cloudup.com/cUQ5pBCD6jD"><img src="https://cldup.com/3UUPV-2ayL.gif" alt="Post usage 1" width="1100" height="612" /></a>
</div>



<p>Users can easily search Unsplash directly inside the custom block and insert images with attribution and alt description info automatically filled in. The selected images are download and added to the WordPress media library, saving users the trouble of having to leave their dashboards to search, download, and upload images. </p>



<p>Unsplash co-founder Luke Chesser described the project as &ldquo;bringing the internet&rsquo;s image library to the internet&rsquo;s publishing platform.&rdquo; Although the plugin is useful for any type of website &ndash; from small blogs to businesses, it was large publishing organizations that provided the impetus for Unsplash to develop an official integration for WordPress.</p>



<p>&ldquo;We&rsquo;ve been working with a lot of publishers as they integrate Unsplash into their publishing flows to replace legacy solutions,&rdquo; Chesser said. &ldquo;With so many publishers being powered by WordPress, we saw a repeated need for a high quality integration that could be shared by all of the publishers. In order to best serve them, we needed to offer something that we could ensure met their needs both now and in the future.&rdquo;</p>



<p><a href="https://wordpress.org/plugins/instant-images/">Instant Images</a>, a plugin that boasts one-click Unsplash uploads, is currently the largest competitor to the adoption of the official plugin with more than 50,000 active installs. Many other plugins have also added some form of Unsplash integration in the past. Chesser said his team has loved seeing the variety of applications developers have created with their API and they were hesitant to create their own plugin.</p>



<p>&ldquo;We saw a gap between the things big and small publishers were telling us, and the way the existing plugins had been developed,&rdquo; he said. &ldquo;Most existing plugins reupload the image to the WordPress library and then treat it as a standard image, which breaks a handful of things:</p>



<ul><li>Image attribution to the original photographer is usually lost (or is no longer supported past the first usage)</li><li>The time it takes for the server to download the image and then reupload it can be slow</li><li>Out of the box, WordPress&rsquo;s current support for dynamic image URLs that adapt to the device connection and screen size is limited and by using the&nbsp;Unsplash&nbsp;CDN, we could ensure that the right size image is served to better optimize for performance.&rdquo;</li></ul>



<p>When developing the official plugin, Unsplash and XWP took feedback from publishers and aimed to improve on how existing plugins handled images. After testing it, I found the search feature was fast and setup was a breeze. The plugin handles everything for the user invisibly in the background and its integration with the block editor makes it feel like a natural part of WordPress.</p>



<h2>Unsplash Aims to Increase Its Audience by Enhancing the Publishing Workflow for WordPress Publishers</h2>



<p>As Unsplash looks to define a new economic model around photography, WordPress-powered sites are a major consideration, since the platform powers <a href="https://w3techs.com/technologies/details/cm-wordpress">more than 37%</a> of Alexa&rsquo;s&nbsp;top 10 million&nbsp;websites.</p>



<p>Seven years after it started as a Tumblr blog, Unsplash is moving to directly monetize the site by working with brands to create photos that will appear in search results. &ldquo;Unsplash for Brands&rdquo; launched in December 2019 as an answer to the question of how Unsplash will make money. Companies pay to have their branded images show up prominently in search results alongside other organically ranking images that match users&rsquo; queries. </p>



<p>&ldquo;While they serve completely different purposes, I think a lot of brands are growing tired of the state of digital advertising today, with Facebook and Google having a host of problems around privacy, targeting, and negative consequences for culture,&rdquo; Chesser said. &ldquo;Unsplash&nbsp;allows brands to influence the visual mindshare of the internet while having an authentic and positive impact on their audience.&rdquo;&nbsp;</p>



<p>Launching an official WordPress plugin is a strategic move for Unsplash as it puts those branded images in front of a larger audience with users searching directly within the editor. Although the company continues to push out new features to the&nbsp;Unsplash&nbsp;API, many publishers did not have the resources to create their own integrations.</p>



<p>&ldquo;After so many conversations with publishers, both big and small, that want to integrate the&nbsp;Unsplash&nbsp;library but can&rsquo;t due to resources, we felt that we needed to offer something more ready to use than the raw API or SDKs,&rdquo; Chesser said.</p>



<p>&ldquo;We built the current version of the&nbsp;Unsplash&nbsp;for WordPress plugin so that it meets those needs of publishers now, but we know that we can push it a lot further in the future.&rdquo; </p>



<p>The first iteration of the plugin mirrors the flow and features that a user would have while navigating unsplash.com, while keeping the writer inside the editor. Now that Unsplash is integrated into the WordPress publishing flow, Chesser sees the opportunity to add more interesting features. Open sourcing the plugin also has the potential to increase Unsplash&rsquo;s audience as developers extend its core features for use in other plugins.</p>



<p>&ldquo;Using the context of the post, we can help suggest images or prefill a search using natural language processing,&rdquo; Chesser said. &ldquo;We can link together&nbsp;Unsplash&nbsp;images with other WordPress tools to help publishers edit and process images directly in their posts. And with a lot of the work from the plugin being focused on making&nbsp;Unsplash&nbsp;images work natively inside of the WordPress Media Library, we can even open-source the core in such a way that developers can extend and reuse the functionality, avoiding duplication across all of our third party WordPress plugins.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 21 Jul 2020 23:33:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:72:"WPTavern: Why Accessibility Matters for WordPress Themes and Their Users";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102133";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:189:"https://wptavern.com/why-accessibility-matters-for-wordpress-themes-and-their-users?utm_source=rss&utm_medium=rss&utm_campaign=why-accessibility-matters-for-wordpress-themes-and-their-users";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:13307:"<p>&ldquo;Do you ever read the subtitles on a video so you didn&rsquo;t need to unmute it?&rdquo; asked William Patton, a representative from the WordPress Themes Team. &ldquo;Used the &lsquo;beep&rsquo; from a crosswalk to know when to cross the road? Found yourself reading the info panel at an airport? Those things are considered features, but in reality, they are aids for people with additional needs.&rdquo;</p>



<p>As I talked with Patton and other reps from the Themes Team, it was clear they believed accessibility was a vital piece of the theme-building puzzle. The team has made small moves in the last year to bring more themes up to standards. However, it has been a slow-going process.</p>



<p>Last July, the <a href="https://wptavern.com/wordpress-theme-review-team-initiates-new-long-term-plan-to-make-all-wordpress-org-themes-accessible">team initiated a plan</a> to add a new guideline every two months or so that would address a single accessibility issue. It would become every theme author&rsquo;s responsibility to make sure they were meeting the new guidelines. It would be every reviewer&rsquo;s responsibility to understand how to test guidelines as they were implemented. Thus far, the team has required only that themes have a working skip-to-content link and keyboard-capable navigation menus.</p>



<p>Not every theme author was excited about the move. Some have still shown resistance a year later.</p>



<p>Last week, we covered the Astra theme&rsquo;s news of hitting 1 million active installs. A <a href="https://wptavern.com/astra-becomes-the-only-non-default-wordpress-theme-with-1-million-installs#comment-335038">commenter made a point</a> that the data shows that end-users do not care about accessibility &mdash; the Astra theme makes no mention of being accessibility-ready. The conclusion was that the Themes Team should not be implementing such guidelines based on the success of one of the directory&rsquo;s most popular themes.</p>



<p>While there are several things we could do to pick apart the original comment and the limited view of the situation, we can instead use it as a catalyst to discuss why accessibility is something that should be at the forefront of every theme author&rsquo;s mind. Patton, along with Themes Team representatives Carolina Nymark and Denis &#381;oljom, had a lot to say on the subject.</p>



<p>The overarching theme was that awareness is vital and that theme developers play a crucial role in making the web more accessible.</p>



<h2>Awareness Is Key</h2>



<img />



<p>&#381;oljom likened the awareness of accessibility to that of a cisgender person looking at the world from the perspective of a transgender person. Once he became aware of larger issues, he made sure to address gender-specific pronouns in his code comments, such as replacing instances of &ldquo;he&rdquo; with &ldquo;they.&rdquo; He hopes such small changes spark similar changes from others.</p>



<p>He said the situation was the same with accessibility. &ldquo;It might not mean much to a person who doesn&rsquo;t have any disabilities, but putting yourself in somebody else&rsquo;s shoes changes one&rsquo;s perspective. This is why we started to include things like skip links, keyboard nav, etc.&rdquo;</p>



<p>The team does not hope theme authors will merely become technically proficient at addressing accessibility issues in their themes. While that would be a help from a review standpoint, it addresses only the symptoms rather than root causes of the issues. Instead, by making more developers aware, they will begin to look at development from multiple perspectives. They will ask how a screen-readers will handle their theme. They will ask whether their colors have enough contrast for low-vision users to read. They will wonder if non-mouse users can navigate their users&rsquo; sites.</p>



<p>The technical stuff is the easy part. Changing perspectives and becoming more empathetic toward those who are different is much more difficult. But not impossible.</p>



<p>&ldquo;A lot of us who build for the web are lacking some basic insights into what it is like to have additional needs beyond what is our own normal,&rdquo; said Patton. &ldquo;There is a saying: &lsquo;if you could see it through my eyes, you would see it differently.&rsquo; If you could see through the eyes of someone with color blindness or impaired vision, you quite literally would see things differently.&rdquo;</p>



<p>The trouble with humans, in general, is that it can sometimes be hard to see things through someone else&rsquo;s eyes. Of course, there are tools to simulate accessibility issues for developers, so that helps. However, these tools do not replicate what it is like to walk through life with a particular impairment or disability. Some of us can only partially glimpse the difficulties that others may have when navigating the web. This does not mean that we cannot address the downfalls of the software we build and become more inclusive to all people, especially if we are proactive when issues are raised.</p>



<p>Nymark identified a few areas where the community can improve awareness:</p>



<ul><li>Make sure that all contributors are aware of the WordPress accessibility requirements so that all new features are accessible.</li><li>Highlight accessibility improvements when WordPress is updated.</li><li>Feature more diverse use cases and highlight areas where the accessibility that is built into WordPress has helped people share and access important content.</li></ul>



<p>&ldquo;The themes team hopes that by making theme authors aware of accessibility issues, authors will learn that even small changes to their code and design can have a great positive impact,&rdquo; she said.</p>



<h2>Is Accessibility Important to End-Users?</h2>



<img />



<p>Certainly, accessibility is important for <em>some</em> users. It certainly mattered to Guillermo Robles, a blind man who sued pizza chain Domino&rsquo;s in 2016 for an inaccessible website. The court case was important enough that it moved through the system all the way to the U.S. Supreme Court. Ultimately, the <a href="https://wptavern.com/u-s-supreme-court-denies-dominos-appeal-to-determine-whether-websites-must-be-accessible">higher court denied Domino&rsquo;s appeal</a> of an earlier ruling. The U.S. 9th Circuit court had previously ruled that business websites fall under Title III of the American with Disabilities Act (ADA) and must meet accessibility standards.</p>



<p>This was a landmark case in the U.S. for accessibility advocates last October. It is also worth remembering as we near the upcoming 30th anniversary of the ADA on July 26.</p>



<p>Domino&rsquo;s is a billion-dollar business. The company has enough money to fight such battles for years. They also have the money to hire world-class web developers to correct any accessibility issues.</p>



<p>However, for small business owners, hiring a single developer, much less an entire agency or team, is often a non-starter. Many small businesses are fortunate to break even. WordPress and its ecosystem of free or low-cost solutions have democratized eCommerce on a scale previously unwitnessed. It means that mom-and-pop stores can have an online presence. It means teens can begin selling their custom art and a multitude of others can make money online without the backing of wads of cash.</p>



<p>For these small business owners, many are unaware of accessibility concerns. They pick up a few plugins and find a theme that suitably matches their branding. The possibility of an impending accessibility-related lawsuit is the furthest thing from their mind. This is a major reason that WordPress needs to be a leader in meeting accessibility standards. Themes, which are the part of the site that visitors will interact with, are possibly the most important part of that equation.</p>



<p>Some would argue that small business owners should understand the laws of their jurisdiction. That is true. However, it is also partly the responsibility of the software creators, says the Theme Team representatives.</p>



<p>&ldquo;Yes, the technology should account for additional needs,&rdquo; said Patton. &ldquo;Yes, the tooling should enable people to make good choices with regards to this. Yes, it should be easy to meet a minimum level of accessibility in the things we create with ease. Yes, it should be a fair assumption that the choices available to pick from are accessible.&rdquo;</p>



<p>The web is inherently accessible out of the box. Raw HTML is read and output by web browsers in such a way that the content can be accessed by anyone. Patton says that it is the things that developers do from that point forward that makes that experience better or worse.</p>



<p>&ldquo;Trade-offs are made that are well-intentioned but not always helpful,&rdquo; he said. &ldquo;Design trade-offs are the easiest to point out. Taking text and embedding it into an image means that some of its value is lost in exchange for it looking pretty. Using closely matching colors for text and background might create an interesting effect to some people but for others, it makes it impossible to read. Sometimes it&rsquo;s about balancing those trade-offs with the needs of others, but it is those kinds of trade-offs that most people struggle to give up.&rdquo;</p>



<p>Nymark described some more technical issues that the average end-user should expect to simply be a non-issue. For example, it is reasonable to assume that a theme installed from the official WordPress directory would be free from HTML, PHP, and JavaScript errors. These are items that users should not have to worry about checking before activating the theme on their site. The errors should simply not exist.</p>



<p>It is that level of quality control that end-users should expect in terms of accessibility, an assurance that the theme does all the things it is supposed to do. It is not about whether end-users &ldquo;care&rdquo; about accessibility.</p>



<p>&ldquo;If a form on a shop checkout page is not working, this can lead to loss of income,&rdquo; she said. &ldquo;Users rely on the technical solution provided by plugins and themes and expect everyone to be able to use their shop. Whether or not the site owner recognizes this as an accessibility issue is irrelevant because their page just needs to work.&rdquo;</p>



<h2>Why Theme Authors Should Care</h2>



<img />



<p>&ldquo;If those who choose themes don&rsquo;t consider accessibility and the theme author did not consider it, then the [visitors] of the sites built with those themes are the ones that lose out,&rdquo; said Patton. &ldquo;It&rsquo;s not a huge leap to realize that low accessibility on your site directly equates to a reduction of potential users.&rdquo;</p>



<p>He said that end-users would naturally assume the themes they are picking from do not have accessibility issues. However, that assumption is typically far from accurate.</p>



<p>&ldquo;Theme authors should care about the accessibility of their creations so that the people picking their themes don&rsquo;t need to use it as a deciding factor,&rdquo; he said.</p>



<p>My go-to response is that developers should concern themselves with accessibility because it is for the collective good. Humans should care about making sure that all other humans have the same freedoms that they enjoy, which are often take for granted.</p>



<p>Even those who cannot view it from that perspective should be able to appreciate that it is a smart business decision. It makes little sense to leave money on the table, especially if you are a developer who is selling a theme or upselling additional features on top of a free theme. There is an entire segment of users that represents money lost.</p>



<p>Additionally, more and more countries are implementing laws around web accessibility. Over time, such laws will be commonplace, particularly in the business sector. Inaccessible themes will lose users as such laws are enforced. Now is a good time to get ahead of impending change.</p>



<h2>More Guidelines Ahead</h2>



<p>The WordPress Themes Team has been slow about adopting additional guidelines surrounding accessibility. However, more are expected to land at some point. Team reps want to work with authors and reviewers alike to make the transition as painless as possible.</p>



<p>&ldquo;We have not added anything else because theme authors are still not releasing themes with working implementations of skip links and usable keyboard navigation,&rdquo; said Patton. &ldquo;When those two things become habitual, it will be time to introduce another aspect as a requirement.&rdquo;</p>



<p>The next guideline in line is expected to be underlined links in the post content. This would be an easy win if the team can get past the current stage. Right now, the team reps are unsure when that will happen.</p>



<p>&ldquo;The fact that this has taken so long for authors to get this right probably indicates that we need to do better at guiding them to resources to learn how to do it and why it is important,&rdquo; said Patton. &ldquo;Perhaps that is a better avenue to pursue than looking to implement additional asks of them.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 21 Jul 2020 19:48:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"WordPress.org blog: WordPress 5.5 Beta 3";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=8706";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2020/07/wordpress-5-5-beta-3/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3830:"<p>WordPress 5.5 Beta 3 is now available!</p>



<p id="block-81bd56b9-ea44-43ad-ab36-a5ae78b54375"><strong>This software is still in development,</strong>so it’s not recommended to run this version on a production site. Consider setting up a test site to play with the new version.</p>



<p id="block-7cc1bbc6-17f9-44c5-8f67-da4e3059ad69">You can test WordPress 5.5 Beta 3 in two ways:</p>



<ul id="block-4840af57-f44b-4d9f-aa64-c6a452392e42"><li>Try the <a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (choose the “bleeding edge nightlies” option)</li><li>Or <a href="https://wordpress.org/wordpress-5.5-beta3.zip">download the beta here</a> (zip).</li></ul>



<p id="block-a40528cb-eb3b-4c8a-8f5e-aa700f1ba086">WordPress 5.5 is slated for release on <a href="https://make.wordpress.org/core/5-5/">August 11th, 2020</a>, and <strong>we need your help to get there</strong>!</p>



<p>Thank you to all of the contributors who tested the <a href="https://wordpress.org/news/2020/07/wordpress-5-5-beta-2/">beta 2</a> development release and gave feedback. Testing for bugs is a critical part of polishing every release and a great way to contribute to WordPress. </p>



<h2 id="block-15d6d57f-905d-4a47-9f66-839468a5375a">Some highlights</h2>



<p id="block-85da84ec-c841-42f9-8d3b-1a4537a61d10">Since <a href="https://wordpress.org/news/2020/02/wordpress-5-4-beta-2/">beta 2</a>, <a href="https://core.trac.wordpress.org/query?status=closed&changetime=07%2F15%2F2020..07%2F21%2F2020&milestone=5.5&group=component&col=id&col=summary&col=owner&col=type&col=priority&col=component&col=version&order=priority">43 bugs</a> have been fixed. Here are a few changes in beta 3:</p>



<ul><li>Plugin and theme versions are now shared in the emails when automatically updated (see <a href="https://core.trac.wordpress.org/ticket/50350">#50350</a>).</li><li>REST API routes without a <code>permission_callback</code> now trigger a <code>_doing_it_wrong()</code> warning (see <a rel="noreferrer noopener" target="_blank" href="https://core.trac.wordpress.org/ticket/50075">#50075</a>).</li><li>Over 23 Gutenberg changes and updates (see <a href="https://github.com/WordPress/gutenberg/pull/24068">#24068</a> and <a href="https://core.trac.wordpress.org/ticket/50712">#50712</a>).</li><li>A bug with the new import and export database Dashicons has been fixed (see <a href="https://core.trac.wordpress.org/ticket/49913">#49913</a>).</li></ul>



<h2 id="block-76156b2b-0a52-4502-b585-6cbe9481f55b">Developer notes</h2>



<p id="block-3fe5e264-0a95-4f12-9a18-0cb9dc5955d1">WordPress 5.5 has lots of refinements to polish the developer experience. To keep up, subscribe to the <a href="https://make.wordpress.org/core/">Make WordPress Core blog</a> and pay special attention to the <a href="https://make.wordpress.org/core/tag/5-5+dev-notes/">developers’ notes</a> for updates on those and other changes that could affect your products.</p>



<h2 id="block-bc89fd56-47b0-439f-8e2c-4a642c80a616">How to Help</h2>



<p id="block-3ff83a77-8b54-4061-ae2d-45fc984cbd76">Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev/">Help translate WordPress into more than 100 languages</a>!</p>



<p id="block-9d871099-ec49-446c-8322-9e49b7498c10">If you think you’ve found a bug, you can post to the <a href="https://wordpress.org/support/forum/alphabeta/">Alpha/Beta area</a> in the support forums. We’d love to hear from you!</p>



<p id="block-bd71c1d3-39d9-4b2a-8193-3486497b45fd">If you’re comfortable writing a reproducible bug report, <a href="https://core.trac.wordpress.org/newticket">file one on WordPress Trac</a>, where you can also find a list of <a href="https://core.trac.wordpress.org/tickets/major">known bugs</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 21 Jul 2020 17:51:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jake Spurlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:78:"WPTavern: WordPress 5.5 to Remove Hulu from List of Supported oEmbed Providers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102148";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:201:"https://wptavern.com/wordpress-5-5-to-remove-hulu-from-list-of-supported-oembed-providers?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-5-5-to-remove-hulu-from-list-of-supported-oembed-providers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2311:"<p>WordPress 5.5 will be dropping Hulu oEmbed support after Hulu silently disabled its oEmbed API. This is the API that allows users to copy and paste a link into the editor and have it automatically embed the content, as opposed to copying a chunk of embed code. Documentation contributors <a href="https://github.com/WordPress/gutenberg/issues/23920">discovered that it wasn&rsquo;t working</a> while attempting to document the Hulu Embed block.</p>



<p>Birgit Pauli-Haack confirmed with Hulu that embedding is not currently an option. Hulu support did not elaborate on why it was removed.<a href="https://wptavern.com/wp-admin/edit.php?post_type=post"></a></p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Apologies for any disappointment! This isn't an available option at the moment, but we'll express your interest. If there's anything else we can help out with down the road, please don't hesitate to reach back out!</p>&mdash; Hulu Support (@hulu_support) <a href="https://twitter.com/hulu_support/status/1283562756726300672?ref_src=twsrc%5Etfw">July 16, 2020</a></blockquote>
</div>



<p>The block currently displays an error when attempting to embed a Hulu link, stating &ldquo;Sorry, this content could not be embedded.&rdquo; As a result, WordPress contributors have <a href="https://core.trac.wordpress.org/changeset/48512">removed</a> both the block from the editor and the provider from core. </p>



<p>WordPress has included Hulu <a href="https://wordpress.org/support/article/embeds/#okay-so-what-sites-can-i-embed-from">oEmbed support</a> for the past 11 years, since it was first added in <a href="https://wordpress.org/support/wordpress-version/version-2-9/">WordPress 2.9</a> (December 2009). Services are <a href="https://wordpress.org/support/article/embeds/#okay-so-what-sites-can-i-embed-from">logged</a> on WordPress.org as they are added or removed. Hulu was removed as soon as it was discovered that oEmbed support no longer worked, similar to other <a href="https://core.trac.wordpress.org/ticket/45399">previously unsupported providers</a> &ndash; most recently FunnyOrDie and Photobucket. This is a major loss of convenience for users who are trying to embed Hulu links but it lies outside of WordPress&rsquo; control. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 20 Jul 2020 22:48:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:72:"WPTavern: Theme Authors Can Pass Data to Template Files in WordPress 5.5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102136";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:189:"https://wptavern.com/theme-authors-can-pass-data-to-template-files-in-wordpress-5-5?utm_source=rss&utm_medium=rss&utm_campaign=theme-authors-can-pass-data-to-template-files-in-wordpress-5-5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4777:"<p class="has-drop-cap">Theme developers can finally rejoice. For the first time, it is now possible to pass data to templates via the various core template-loading functions. Enrico Sorcinelli <a href="https://make.wordpress.org/core/2020/07/17/passing-arguments-to-template-files-in-wordpress-5-5/">announced the change</a> on the Make Core blog this past Friday.</p>



<p>The <a href="https://core.trac.wordpress.org/ticket/21676">feature was originally proposed</a> by Scott Kingsley Clark in 2012. Over the years, the ticket has received a dozen patches. It has survived a closure and arguments over why the feature should not go into core. Sorcinelli was a primary driver that kept the ticket alive for the last few years.</p>



<p>WordPress developers have been cleaning up some old-but-useful feature requests for the 5.5 release cycle. A couple of weeks ago, an 11-year-old ticket to allow users to <a href="https://wptavern.com/after-11-years-users-will-be-able-to-update-themes-and-plugins-via-a-zip-file">update themes and plugins via a ZIP file</a> made the cut. Core developers even closed a 9-year-old ticket related to an <a href="https://core.trac.wordpress.org/ticket/17232">Internet Explorer 6 hack</a> &mdash; <em>progress</em>. However, for theme authors, one of the most important additions is control over passing data from one template to another.</p>



<p>Typically, in PHP, variables can be passed from file to file because they remain in the same scope. However, that is not the case if the inclusion of the file is taken out of that scope by including the file from inside of a function. The scope is then limited to the function. That is how the template system works in WordPress. This is not necessarily a bad thing. However, it has meant that theme developers have had no built-in method of passing data from one template to the next.</p>



<p>Imagine creating a variable in one template but needing to access that same variable in a sub-template. There is no shortage of methods to accomplish this, but many are inelegant.</p>



<p>&ldquo;For years, theme developers wishing to pass data to template files have had to use less than ideal workarounds,&rdquo; wrote Sorcinelli in the announcement. The worst solutions typically involved creating a global variable. Others created custom template-loading functions on top of WordPress&rsquo;s existing system. The problem with all methods, regardless of which was ideal, was that no standard existed. Each theme would need to build its own solution, and plugins that touched the front end would often have a competing solution.</p>



<p>All of the WordPress template-loading functions now support an additional parameter of <code>$args</code>, which allows theme authors to pass along an associative array of data to the loaded template. The functions that support this new parameter are:</p>



<ul><li><code>get_header()</code></li><li><code>get_footer()</code></li><li><code>get_sidebar()</code></li><li><code>get_template_part()</code></li><li><code>locate_template()</code></li><li><code>load_template()</code></li></ul>



<p>Any hooks associated with the functions also pass along the data.</p>



<p>The <code>get_search_form()</code> function has supported a similar parameter since WordPress 5.2. In practice, it should work mostly the same, but the function has a couple of default values it sets.</p>



<p>An additional benefit of having a standard method of passing data to templates is that the feature can be built upon in the future. For example, WordPress could eventually offer a hook for filtering the data, which could come in handy with child themes.</p>



<p>The WordPress template system still lacks the robustness of more modern frameworks, but this simple change will allow for a variety of applications.</p>



<p>One question remains: <em>is the arrival of this feature too late?</em> With WordPress on track to revamp the entire theme system to integrate with the upcoming full-site editing feature, will this feature be useful for only the next few months?</p>



<p>Even if most theme developers don&rsquo;t immediately jump on board the block-based themes bandwagon for another year, the feature could come in handy  until they do. Perhaps it will also have some usefulness beyond the current theming paradigm.</p>



<p>Developers still do not have a clear picture of what theming with blocks will look like in the next few years. There may be situations where passing dynamic data is still necessary in the next system. Even if not, it will likely be a long while before there is mass adoption of block-based themes from the existing theme development community. In the meantime, many will be able to drop in-house solutions and use standard functions.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 20 Jul 2020 19:44:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:29:"Matt: Corner Office Interview";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:22:"https://ma.tt/?p=51861";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:46:"https://ma.tt/2020/07/corner-office-interview/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2488:"<p>If you pick up a print edition of the Sunday New York Times today you&#8217;ll see <a href="https://www.nytimes.com/2020/07/12/business/matt-mullenweg-automattic-corner-office.html">the Corner Office interview with David Gelles in the business section</a>. </p>



<img />(Hat tip to <a href="http://www.maryconrad.org/">Mary Conrad</a> for the picture, I haven&#8217;t seen it in person yet.)



<p>A quote that seems to be resonating with people,</p>



<blockquote class="wp-block-quote"><p>This column is called Corner Office, and most people who choose to have offices are usually the bosses. And I’ve been to the offices of billionaire C.E.O.s that have their own private bathroom, beautiful art and couches. But these are all things that you can have in your house. What I love about distributed organizations is every single employee can have a corner office.</p></blockquote>



<p>Sometimes my corner office has been the corner of an airport floor next to a power outlet! I&#8217;ve also heard from colleagues that feel like their office feels like an unsupervised day care center since the quarantine started. The point I want to make is there&#8217;s a world of possibility that opens up when you move from the finite space of a shared office, and all the politics of dividing up the scarce resource of desirable space, to the <a href="https://www.amazon.com/Finite-Infinite-Games-James-Carse/dp/1476731713">infinite game</a> where people can define their own &#8220;office&#8221; as the place where they will be most productive, and do so however they like with no penalties or restraints.</p>



<p>If you had the best space in the legacy office, you probably liked it and may even have had motivated reasoning around ineffable things that happened in the office like &#8220;culture&#8221; that would be impossible without it, but the average experience of an entry-level worker was not as positive. Now there can be a much more even playing field. At <a href="https://automattic.com/">Automattic</a> we have a home office allowance people can use to buy equipment they need to make their home work area comfortable and productive, and it&#8217;s the same if you&#8217;re leading a team of hundreds or if it&#8217;s your first job.</p>



<p>If you&#8217;d like to hear the entire conversation <a href="https://www.youtube.com/watch?v=fFg6YcBB2uI&feature=youtu.be">they&#8217;ve posted the original audio and interview</a> that was distilled into the print version.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 19 Jul 2020 21:13:25 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:62:"WPTavern: All in One SEO Pack Plugin Patches XSS Vulnerability";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102036";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:169:"https://wptavern.com/all-in-one-seo-pack-plugin-patches-xss-vulnerability?utm_source=rss&utm_medium=rss&utm_campaign=all-in-one-seo-pack-plugin-patches-xss-vulnerability";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1843:"<p><a href="https://wordpress.org/plugins/all-in-one-seo-pack">All in One SEO Pack</a> patched an XSS vulnerability this week that was <a href="https://www.wordfence.com/blog/2020/07/2-million-users-affected-by-vulnerability-in-all-in-one-seo-pack/">discovered</a> by the security researchers at Wordfence on July 10. The popular plugin has more than 2 million active installs, according to WordPress.org.</p>



<p>Wordfence researchers categorized it as &ldquo;a medium severity security issue&rdquo; that could result in &ldquo;a complete site takeover and other severe consequences:&rdquo;</p>



<blockquote class="wp-block-quote"><p>This flaw allowed authenticated users with contributor level access or above the ability to inject malicious scripts that would be executed if a victim accessed the wp-admin panel&rsquo;s &lsquo;all posts&rsquo; page.</p></blockquote>



<p>Version 3.6.2, released on July 15, 2020, includes the following update in the changelog: &ldquo;Improved the output of SEO meta fields + added additional sanitization for security hardening.&rdquo;</p>



<p>All in One SEO Pack users are strongly recommended to update to the latest version. At the time of publishing, just 12% of the plugin&rsquo;s user base is running versions 3.6.x, which includes the three most recent versions. This leaves more than 1.7 million installations (88% of the plugin&rsquo;s users) vulnerable. </p>



<p>Many users don&rsquo;t log into their WordPress sites often enough to learn about security updates in a timely fashion. Plugin authors often don&rsquo;t advertise the importance of the update on their websites or social media. This is the type of situation that WordPress 5.5 should help to mitigate, as it introduces admin controls in the dashboard that allow users to enable automatic updates for themes and plugins. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 17 Jul 2020 21:48:15 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:104:"WPTavern: WPCampus Online 2020 Conference Features Accessibility and Higher Education Topics, July 29-30";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=102003";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:251:"https://wptavern.com/wpcampus-online-2020-conference-features-accessibility-and-higher-education-topics-july-29-30?utm_source=rss&utm_medium=rss&utm_campaign=wpcampus-online-2020-conference-features-accessibility-and-higher-education-topics-july-29-30";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4948:"<p><a href="https://www.wpcampus.org/">WPCampus</a>, a community focused on WordPress and higher education, will host its 5th annual in-person conference as a free, <a href="https://2020.wpcampus.org/">online event</a> this year.  The two-day event will feature sessions, lightning talks, sponsor demonstrations, and trivia, July 29-30, 2020. </p>



<p>Although the WPCampus community is no stranger to hosting online events (they usually host a virtual conference in January), current events have forced educational institutions to rely more heavily on those who maintain their digital infrastructure. Many WPCampus members fall into this category and are operating under a great deal more stress as compared to previous years. The community has more than 1,116 members representing 688 institutions.</p>



<p>&ldquo;In higher ed, &lsquo;wearer of many hats&rsquo; is a common saying,&rdquo; WPCampus director Rachel Cherry said. &ldquo;Per usual, most who work in our space are already going above and beyond to cover numerous job roles. For example, I was always a team of one: I designed the site, programmed the site, performed QA, and managed content editors. With the pandemic forcing many universities to increase their online presence, higher ed web professionals are busier than ever, working to help with the transition while bearing the stress of lowered budgets, working from home, and whether or not their physical campus will open for the fall semester.&rdquo; </p>



<p>As many institutions are moving to make their courses available online, Cherry said ensuring that vital resources are accessible has become even more critical.</p>



<p>&ldquo;The pandemic forced a vast majority of our society&rsquo;s processes and interactions to go online, and it&rsquo;s shining a spotlight on how inaccessible a lot of our systems are,&rdquo; she said. &ldquo;For example, online event platforms became a necessity for conferences. But the vast majority of these platforms are inaccessible. Crowdcast, for instance, is nearly impossible to use if you can&rsquo;t use a mouse. Using inaccessible online platforms for your event is no different from denying attendee access at the door because the building doesn&rsquo;t have a wheelchair ramp.&rdquo;</p>



<p><a href="https://2020.wpcampus.org/">WPCampus Online 2020</a> will include a selection of sessions from accessibility experts on topics such as justifying the budget for accessibility initiatives, accessibility for non-developers, Gutenberg accessibility, end-to-end accessibility testing, and mobile site and native app accessibility testing guidelines. If you are looking to deepen your knowledge of accessibility, this conference features more sessions on this topic than most WordCamps.</p>



<p>The event&rsquo;s <a href="https://2020.wpcampus.org/speakers/">schedule</a> also includes other topics of interest to those in higher education with sessions on managing multiple WordPress sites, building a self-publishing platform, extending the WP REST API, automation tools, data visualization for WordPress, and improving website performance.</p>



<p>In lieu of giving away swag for the event, WPCampus is coordinating a fundraising effort for the Black Lives Matter movement and those struggling with COVID-19. The organization will <a href="https://2020.wpcampus.org/donate/">match donations</a> to the following organizations: </p>



<ul id="input_10_4"><li>Black Lives Matter</li><li>The American Civil Liberties Union (ACLU)</li><li>NAACP Legal Defense Fund</li><li>Black Girls Code</li><li>Feeding America</li></ul>



<p>Cherry reports that more than 350 people have registered so far and she anticipates 500-600 attendees online this year. WPCampus will stream the session videos on YouTube and they will be recorded and available after the event. <a href="https://2020.wpcampus.org/register/">Registration</a> is free, thanks the the event&rsquo;s sponsors, which include many WordPress agencies, hosts, and contributing individuals.</p>



<p>Despite the disappointment at not being able to meet in-person in New Orleans this year, Cherry said she is grateful for the &ldquo;more in-depth than usual&rdquo; time the community will have to spend together during the virtual conference. WPCampus members have found camaraderie and encouragement in their community by sharing stories and asking each other for help during this profoundly challenging time. </p>



<p>&ldquo;We&rsquo;ve become a family,&rdquo; Cherry said. &ldquo;And not just with higher ed and other web professionals, but with the vendors that support us and want to invest in our growth. Because of our events and community, we were able to sponsor the Gutenberg accessibility audit and play a huge role in improving the accessibility of the WordPress platform. I am incredibly proud of the ever-increasing focus, education, and advocacy our community has placed on accessibility.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 17 Jul 2020 20:44:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:66:"WPTavern: Should WordPress Themes Add a Top-Level Admin Menu Item?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101807";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:175:"https://wptavern.com/should-wordpress-themes-add-a-top-level-admin-menu-item?utm_source=rss&utm_medium=rss&utm_campaign=should-wordpress-themes-add-a-top-level-admin-menu-item";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7349:"<p class="has-drop-cap">WordPress has almost always provided a top-level admin menu item for themes. It is clearly labeled &ldquo;Appearance.&rdquo; It is the single location that all WordPress users know to visit to modify any appearance-related things for their WordPress site. However, there is a movement within the Themes Team to allow themes to <a href="https://make.wordpress.org/themes/2020/07/13/proposal-allow-themes-to-add-a-top-level-admin-menu/">place an additional top-level menu link</a> in the admin. The big question: <em>should this idea move forward?</em></p>



<p>When the Themes Team (originally called the Theme Review Team) was formed, its members created a set of guidelines that would be shaped and reshaped over the years. They were a set of living guidelines that could always be changed with the times.</p>



<p>One of the oldest guidelines required that themes must place any custom admin pages under the Appearance menu item. It made sense. WordPress provided a standard location for any theme-related pages. The custom header and background features lived under Appearance. Widgets, also defined by the current theme, were housed as a sub-page. Eventually, WordPress&rsquo;s custom nav menu system came along and was &mdash; you guessed it &mdash; situated under Appearance. The core developers even put the customizer link in the same place.</p>



<p>For over a decade, there was a well-defined standard. Sure, commercial themes outside of the official directory would sometimes break the mold. However, themes from the directory followed the pattern.</p>



<p>Now, the Themes Team is proposing that themes should be able to break from tradition.</p>



<p>The discussion arose after a question of whether themes should be able to add a custom panel to the block editor sidebar, which is not allowed.</p>



<p>&ldquo;To keep the editor free from clutter, advertising and upsell, with the customizer being used less, and no dashboard widgets being allowed, can we give theme authors a better place to include their information, and limit upsell to that area?&rdquo; wrote Carolina Nymark in <a href="https://make.wordpress.org/themes/2020/07/10/meeting-notes-tuesday-7th-of-july-2020/">last week&rsquo;s team meeting notes</a>.</p>



<p>The proposal seems to settle on the idea that themes will lose visibility as WordPress moves toward full-site editing and the customizer becomes less important. The customizer is not an ideal place for anything but theme options, but that notion seems to have been overlooked in the discussion. Nevertheless, the original guideline that disallowed themes from creating top-level menu items preceded the advent of the customizer by several years. Advertising, documentation, plugin recommendations, and similar pages were always allowed under the existing Appearance menu. The usefulness of the customizer was never a necessary part of that conversation.</p>



<p>Ultimately, the question should be about what is best for users. There is no data to support making the change or sticking with the status quo. However, we do have a standard that has existed for years.</p>



<h2>The Proposed Guidelines</h2>



<p class="has-drop-cap">The proposal would create several new guidelines for theme authors to follow and reviewers to check, assuming the theme created a top-level admin menu item:</p>



<ul><li>No admin menu priority may be used.</li><li>No UI or color changes are allowed for the menu item.</li><li>The title must be kept short and not include spam.</li><li>No more than three sub-pages.</li><li>Child themes are limited to one sub-page or can remove the parent&rsquo;s pages and add its own.</li></ul>



<p>Some of these make sense and follow along with existing guidelines, such as not spamming or changing the admin UI. However, others could be problematic.</p>



<p>If moving forward with the proposal, setting a menu item priority should be required rather than not allowed. If anything, it would make sense to require a specific priority to place the custom menu item immediately after the existing Appearance item. This would at least group them together by default. If changing the place where users are accustomed to seeing theme-related pages, it is probably best not to break too far from the standard location.</p>



<p><em>No more than three sub-pages?</em> Surely there will be a theme with a top-level admin menu item that needs four sub-pages at some point. If giving theme authors the freedom to take up valuable real estate in the admin, a limit of three sub-pages seems like a rule to fix the mistake of allowing the top-level item in the first place. It is an arbitrary number at best. There would be no reason to cap it once making the guideline change. It also adds one more item that the team will need to police.</p>



<p>The limitation of sub-pages for child themes seems just as arbitrary.  No such limitation exists when placing sub-pages under the standard Appearance screen.</p>



<p>The entire proposal is little more than extra work on a team that is already strained for resources.</p>



<p>Instead of the simple rule that has existed for years, the proposal adds a new rule with several sub-rules. If the team desires the extra work, I suppose this point doesn&rsquo;t matter.</p>



<h2>The Elephant in the Room</h2>



<p class="has-drop-cap">There is one aspect of this discussion that everyone knows about but few are willing to broach. Underneath all the guidelines from the Themes Team and whether most theme authors support a particular decision is how this affects the financial bottom line. When we talk about <em>visibility</em> of a theme&rsquo;s admin pages, we are primarily talking about providing another avenue for commercial upsells.</p>



<p>Some of this discussion on visibility is shrouded in concepts such as surfacing end-user documentation or adding a visible <em>readme</em> for the user&rsquo;s benefit. These are legitimate concerns, especially when theme developers have watched <a href="https://meta.trac.wordpress.org/ticket/215">tickets to address such downfalls</a> seemingly dwindle into obscurity over the years. Whether a top-level admin menu item makes sense for exposing theme documentation might be worth discussing, but there is no world in which this would be the primary use case.</p>



<p>The topic of visibility rests on the idea of upselling the pro version of the theme, add-ons, or other services.</p>



<p>Far too many plugins already go overboard, creating a billboard of the WordPress admin. One of the things users could almost be assured of is that themes from the official directory were constrained enough that they were not the hot mess that plugins have become as of late. However, that could all change.</p>



<p>Do we really want an extra top-level admin menu item that will be, for all intents and purposes, to advertise?</p>



<p>Maybe it doesn&rsquo;t matter in the end. Users are so accustomed to the clutter produced by the dozens of plugins on their sites. One more may not matter at this point.</p>



<p>Or, should we be having a different conversation altogether? If this ultimately boils down to advertising, are there ways we can open this up for theme authors while still creating a user experience that keeps the WordPress admin free of clutter?</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 17 Jul 2020 20:03:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:84:"WPTavern: Astra Becomes the Only Non-Default WordPress Theme With 1 Million Installs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101924";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:213:"https://wptavern.com/astra-becomes-the-only-non-default-wordpress-theme-with-1-million-installs?utm_source=rss&utm_medium=rss&utm_campaign=astra-becomes-the-only-non-default-wordpress-theme-with-1-million-installs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5336:"<p class="has-drop-cap">On Tuesday, Brainstorm Force announced its Astra theme <a href="https://wpastra.com/one-million-active-installs/">passed 1 million active installations</a>. It is the only non-default theme in the official WordPress theme directory to reach such a height.</p>



<p>Popularity breeds popularity. Once the theme broke 50,000 installs in January 2019, it was a quick hop and skip to 500,000 in October and 1 million less than a year later. With the winds of momentum at its back, the theme may become an unstoppable force. It is anyone&rsquo;s guess when growth will begin to plateau.</p>



<p>&ldquo;We recognize that this is not an ordinary feat,&rdquo; wrote Sujay Pawar in the announcement post. He said the team has no plans of resting at this point. &ldquo;1 million is just a milestone in our journey.&rdquo;</p>



<p>Many WordPress plugins have long ago passed the million-install milestone. Several have multi-millions. However, this is a much tougher feat for themes. One of the limiting factors is that users can only activate one of them at a time. There is no limit when it comes to plugins, and users often have dozens running at once. One million active installs is a level of popularity that is almost unheard of in the theming world.</p>



<p>&ldquo;There is a huge gap between Astra and all others,&rdquo; said William Patton, a WordPress Themes Team representative. &ldquo;Hitting 1 million is pretty astounding honestly.&rdquo;</p>



<p>This is not simply a major milestone for the Astra theme. It is huge for WordPress. For a third-party theme creator to reach a number that only the default themes can boast is the sort of thing we should all rejoice in a bit. It is a testament to how much WordPress has grown over the years.</p>



<p>Aside from the default themes that ship with WordPress, there are currently five themes with more than 100,000 active installs:</p>



<ul><li><a href="https://wordpress.org/themes/astra/">Astra</a> &ndash; 1 million</li><li><a href="https://wordpress.org/themes/oceanwp/">OceanWP</a> &ndash; 600,000</li><li><a href="https://wordpress.org/themes/generatepress/">GeneratePress</a> &ndash; 300,000</li><li><a href="https://wordpress.org/themes/hello-elementor/">Hello Elementor</a> &ndash; 300,000</li><li><a href="https://wordpress.org/themes/storefront/">Storefront</a> &ndash; 200,000</li></ul>



<p>Once that first theme passes the 1 million mark, it is only a matter of time before others start breaking the barrier. OceanWP has the shortest striking distance and could be next. However, Hello Elementor is moving fast and earned its install count in a year and a half.</p>



<p>Regardless of the next theme to hit the milestone, this is one of those moments we should look back on in a few years to see how far we have come. Perhaps 1 million active installs will merely be a stepping stone to even greater heights for large numbers of themes.</p>



<h2>What Makes Astra Special?</h2>



<img />



<p class="has-drop-cap">The default Astra theme is not anything particularly revolutionary on the surface. Out of the box, users are given a nearly blank canvas. It seems little more than your run-of-the-mill WordPress theme that would not garner much attention. However, it has one of the easiest setup processes that I have ever experienced with any theme. At the click of a button, end-users can pick from a plethora of starter templates.</p>



<p>There are hundreds of starter templates for Elementor and Beaver Builder. The Brizy page builder gets a little love too. There is even a modest 20 starter templates for Gutenberg. The theme&rsquo;s block editor styling leaves a lot to be desired, but I would wager that Brainstorm Force is serving a primary audience of Elementor users. The team probably won&rsquo;t have a huge incentive to change that anytime soon. And, there is really no need to. Elementor <a href="https://elementor.com/blog/5-million-active-installs/">passed 5 million active installs</a> in May and is showing no signs of slowing down. Smart theme development businesses are making sure they support the plugin. Elementor support is where the money is right now.</p>



<p>Astra&rsquo;s starter templates are not merely templates. The theme will install and activate plugins needed too.</p>



<p>Many of the templates are free, but some are available for purchase. The theme allows users to filter the search between free and &ldquo;agency&rdquo; templates, so there is no trickery going on as is often the case with similar themes from the directory. They clearly label any upsells in the admin. At a time when the WordPress Themes Team struggles with theme authors circumventing advertising guidelines, Astra seems to be hitting a sweet spot that is both user-friendly and within the directory rules.</p>



<p>While good marketing and business plans go a long way toward getting installation numbers up, you cannot keep those numbers without building a product that users will continue using. Its simple import process makes it an easy go-to choice for anyone who doesn&rsquo;t relish the idea of spending hours trying to make their site look like the demo.</p>



<p>The theme&rsquo;s users can probably best answer the question of Astra&rsquo;s popularity.  Brainstorm Force is clearly doing something right.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 16 Jul 2020 19:38:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:84:"WPTavern: Blocksy Theme Adds New Charity Starter Site, Pro Version to Launch in 2020";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101884";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:211:"https://wptavern.com/blocksy-theme-adds-new-charity-starter-site-pro-version-to-launch-in-2020?utm_source=rss&utm_medium=rss&utm_campaign=blocksy-theme-adds-new-charity-starter-site-pro-version-to-launch-in-2020";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4087:"<p><a href="https://wordpress.org/themes/blocksy/">Blocksy</a> is one of the best free themes available for the block editor right now and is rapidly growing in popularity. CreativeThemes, the Romania-based company behind the theme, released an update to Blocksy this week, along with a new starter site for charities. </p>



<p>The concept of &ldquo;starter sites&rdquo; is an interesting new twist on &ldquo;starter templates,&rdquo; which essentially allow users to import the content from a demo. Theme makers for products like <a href="https://creativethemes.com/blocksy/">Blocksy</a>, <a href="https://wpastra.com/">Astra</a>, and <a href="https://github.com/godaddy-wordpress/go">Go</a> use this approach to help users implement different types of websites by importing the content from a pre-built demo site. The demos use the same base theme but vary widely in how they are customized. </p>



<p>Blocksy&rsquo;s starter sites are a one-click XML demo import that automatically brings in the pages, images, and theme options. This puts all the blocks in the right place so the user needs only to customize the demo, instead of trying to find the right settings to match the demo.</p>



<p>The new <a href="https://demo.creativethemes.com/blocksy/charity/">Charity starter site</a> is built with the <a href="https://wordpress.org/plugins/stackable-ultimate-gutenberg-blocks/">Stackable</a> plugin&rsquo;s page builder blocks. It joins four other <a href="https://creativethemes.com/blocksy/starter-sites/">free starter sites</a> designed specifically for blogs, apps, travel, and e-commerce. The design can be imported under the Blocksy menu in the WordPress admin.</p>



<div class="wp-block-image"><img /></div>



<p>According to the theme&rsquo;s beautifully designed and user friendly <a href="https://creativethemes.com/blocksy/changelog/">changelog</a>, Blocksy can now automatically detect Custom Post Types and add their appropriate options. The update also adds a sizing option for related posts thumbnails, a new Twitch social icon, and improves compatibility with WooCommerce product display and miscellaneous extensions.</p>



<h2>Blocksy Pro Version Coming Soon </h2>



<p>When we first <a href="https://wptavern.com/blocksy-wordpress-theme-provides-a-solid-block-editor-experience">reviewed</a> the theme in January 2020, it had 1,000 active installs and 58 five-star reviews. Over the past six months, the theme&rsquo;s user base has grown to more than 4,000 active installs and a perfect five-star rating on WordPress.org from 191 reviewers. It is currently maintained by a team of two &ndash; Sergiu Radu and Andrei Glingeanu.</p>



<p>Blocksy&rsquo;s creators have been working on custom projects and random jobs to support the time they spend developing the theme but they plan to launch a pro version as early as this summer.</p>



<p>&ldquo;We plan to add more features in the premium version, more demos, and also offer better and faster support,&rdquo; Radu said. &ldquo;I hope after we release the premium version we will be able to take on a few more people in our team to help us, at least with support so we can concentrate better on development.&rdquo;</p>



<p>Radu said the pro version will include some premium starter sites as well as additional functionality for the base theme.  They are aiming to include the following features in the first release:</p>



<ul><li>Multiple conditional headers</li><li>Multiple conditional footers</li><li>Multiple conditional sidebars</li><li>More header elements</li><li>More footer elements</li><li>White labeling</li><li>Custom fonts extension</li><li>Adobe Typekit extension</li><li>Hooks (conditional)</li><li>Sticky header</li></ul>



<p>In a second round of updates for the pro version, Blocksy creators plan to include features like custom color palettes, AMP, LearnDash, and EDD integrations, along with extensions for ads, mega menus, and portfolios. In the meantime, Radu says they do not plan to add more features to the free version &ndash; only improvements and new starter sites. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 15 Jul 2020 22:32:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"WPTavern: Eye-Catching Typography and Personality: Blossom Themes Launches Sarada Lite";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101933";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:215:"https://wptavern.com/eye-catching-typography-and-personality-blossom-themes-launches-sarada-lite?utm_source=rss&utm_medium=rss&utm_campaign=eye-catching-typography-and-personality-blossom-themes-launches-sarada-lite";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6064:"<img />Sarada Lite homepage.



<p class="has-drop-cap">Blossom Themes launched <a href="https://wordpress.org/themes/sarada-lite/">Sarada Lite</a>, its 25th theme, on the WordPress theme directory today. The theme is billed as a &ldquo;feminine blog theme&rdquo; specifically for professional bloggers. However, it would work well in a variety of contexts. While it is targeted at fashion, travel, and lifestyle bloggers, it is well-rounded enough for anyone who wants a touch of personality as part of their blogging experience.</p>



<p>I nearly passed over this theme. It had no mention of the block editor or Gutenberg in its description. It was not tagged in the directory as having editor styles (technically, it doesn&rsquo;t have them). There are few themes that I give much attention to if they do not style the latest features and blocks in WordPress. It has to be truly eye-catching otherwise. Sarada Lite is a breathtaking design, so it drew me in. It is the sort of theme that inspires me to write. Plus, its light color scheme along with the author&rsquo;s choice of images in the demo fit perfectly into the summer season. It simply makes me want to sit on the beach with a mojito and my laptop ready to spin up some great content.</p>



<p>What makes this theme stand out is its typography. The status quo with most free themes in the WordPress theme directory is to simply not give any attention to things like font size, characters per line, line height, or vertical rhythm. Long-form content is practically unreadable with such themes. However, long-winded writers need not be fearful of the reader losing interest because of the design. Sarada Lite creates an inviting atmosphere that beckons the visitor to actually read.</p>



<p>The theme supports several plugins, most of which are a part of the Blossom Themes collection. They are unnecessary for a solid blogging experience with this theme. Users should shy away from taking advantage of every bell and whistle the theme or its add-ons provide. The default setup is mostly where the theme shines.</p>



<p>Users who need a shop can also enjoy WooCommerce integration. The theme does not add much in the way of shop-related features, opting to style the default output of the eCommerce plugin instead.</p>



<h2>Design Elements Worth Noting</h2>



<img />Single post view.



<p class="has-drop-cap">When testing and reviewing themes, it is often easy to get lost in the features. However, with Sarada Lite, it&rsquo;s not the theme features that are important. They may even be a detriment to the theme (more on that later). The thing that makes this theme special is the small design elements. The author puts a unique spin on things that give the theme a personality of its own. Designers who want to show off their design chops often go overboard, but Sarada Lite has just enough flair to draw attention to important elements without getting in the way of the content.</p>



<p>In particular, the theme&rsquo;s use of the <a href="https://fonts.google.com/specimen/Caveat">Caveat font</a> gives secondary text just the right amount of pop. It is not a font that lends itself well to long-form content. However, the theme makes use of it for links, captions, quote citations, and a few other elements.</p>



<img />Sarada Lite&rsquo;s blockquote design.



<p>The theme offers various layouts with and without a sidebar. For single posts, I recommend dropping the sidebar and choosing the full-width centered layout to make full use of the block editor&rsquo;s capabilities. This gives enough breathing room for users who like to make liberal use of wide and full-width blocks. The theme has an option to change the layout globally and on a per-post basis.</p>



<h2>Issues</h2>



<p class="has-drop-cap">One of the biggest issues with Sarada Lite is that users do not get a one-to-one match between the editor and the front end. The missing piece is the theme&rsquo;s beautiful typography. It is nowhere to be found while writing a post. The theme&rsquo;s admin-side CSS is bare-bones to the point where there is little use in loading the stylesheet. I hope this is merely something the theme author skipped for version 1.0 with a firm plan to add it in the next release. At worst, it is an extra couple of hours of work that offers a huge benefit to theme users.</p>



<p>The other major downside of Sarada Lite is that it tries to do too much. Its customizer options feel a bit overboard and disorganized. In too many cases, I was left wondering what a particular option was for or searching around for specific options in odd places.</p>



<p>I also found the Instagram feed (available via the Blossom Themes Social Feed add-on) in the header to be a horrendous addition, ruining what is an otherwise open and inviting design. Fortunately, this is an optional feature. Once again, the theme is doing too much here. I understand it is a bullet point on the ol&rsquo; marketing sheet, but it is an eyesore in practice. The Instagram feed works much better in the footer. My advice for theme users: avoid putting this in your header at all costs. Your site visitors should not need to skip over social media images just to get to your content.</p>



<p>As gracefully as the various sliders on the theme&rsquo;s homepage are done, I am now and always anti-slider. They offer no real benefit to the reader and often hide away content that would have otherwise been seen. The theme&rsquo;s slider sections, some of which are optional, are relatively low-key. I have seen far worse, but I would rather not see them at all.</p>



<p>Despite the theme&rsquo;s issues, they are not so detrimental that I wouldn&rsquo;t recommend the theme. Assuming the theme author adds in editor styles that match the front end, the other issues can mostly be avoided by user choice. The theme works well without tinkering with its options and adding extra plugins.</p>



<p>Sarada Lite is best without all the extras. What the user does with the theme will make or break the experience.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 15 Jul 2020 20:56:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"HeroPress: Second Chances: How A Trip Back  Into The WordPress Community Saved My Life";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:56:"https://heropress.com/?post_type=heropress-essays&p=3229";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:220:"https://heropress.com/essays/second-chances-how-a-trip-back-into-the-wordpress-community-saved-my-life/#utm_source=rss&utm_medium=rss&utm_campaign=second-chances-how-a-trip-back-into-the-wordpress-community-saved-my-life";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7043:"<img width="960" height="480" src="https://s20094.pcdn.co/wp-content/uploads/2021/07/071320-min.jpg" class="attachment-large size-large wp-post-image" alt="Pull Quote: The energies received in return for giving back to the WordPress community healed me emotionally, allowing me to contribute creatively." /><p>Often, we refuse change and don&#8217;t get a second opportunity to make things right. But for me, June 17, 2017, changed my life forever. A life-threatening heart event forced me to start over and in the short time since WordPress helped me rediscover myself and to do the things I truly love.</p>
<p>At 10 am that morning, I was laid out flat on a cold, hard operating table being poked, prodded, and prepped for a surgical procedure. According to my doctors, this procedure was the only sure way to find out what had been plaguing me for five long years. Within the next sixty minutes, if things go sideways, I could be dead.</p>
<p>As I slowly came to, words floated through a lifting fog of anesthesia. &#8220;You had two 100% blocked arteries,&#8221; my cardiologist said. A flood of concern and questions seemed to flow freely foremost, &#8220;what will happen to me?&#8221;</p>
<h3>Two Paths Lead to WordPress</h3>
<p>Looking back, my WordPress journey has two paths, pre- or post-heart event. When the lead developer and CSS goddess left our public transit agency almost 10 years ago, they left behind a company news blog with the Headway theme. That year we were fortunate to have room in our budget allowing me to attend the WordPress VIP Intensive Developer Workshop in Napa.</p>
<p>At that time my experience was entirely in basic static HTML as a web designer so imagine how lost and out of place I felt being asked to &#8220;spin up a virtual box&#8221; midway through the first day. Surrounded by the best and the brightest distributed Automatticians from around the world, person after person answered my questions or assisted in any way they could. That day I learned what the phrase WordCamp Community really meant.</p>
<h3>Leaving the Past Behind</h3>
<p>What if you got a do-over? A mulligan, a reset button? Imagine being totally free from the stressors of the daily grind, similar to being a young child, with nothing to do but play all day.</p>
<p>Staring at the ceiling from my bed while recovering, I decided to stop the world and get off. I took a leave of absence from work beginning September 11. Looking deep within, I searched to rediscover me and the loves of my life &#8211; giving selflessly to others, picking up a pencil to sketch, storytelling, and WORDPRESS.</p>
<p>Every day for the next ninety days, I resolved to do only the things reconnected me with things dormant in my past that brought me joy:</p>
<ul>
<li>Each morning I&#8217;d pick up a pencil, sketch;</li>
<li>I&#8217;d exercise and practice mindfulness; and</li>
<li>No day would be complete without giving back, doing something with WordPress for others. Like an Agile process, I&#8217;d loop through these tasks, reassess, then repeat, each morning becoming stronger than the previous.</li>
</ul>
<p>Slowly, progress was being made in my recovery. From feeling faint and unable to walk from my bedside to my bathroom; 100 steps turned into 100 yards then one lap at my local park. I set a goal to climb to one of the highest points in our area, the top of Central Park.</p>
<h3>The Journey of 4,890 Miles Begins with One Step</h3>
<p>My second path into WordPress started later that summer. Untethered, I walked into my first-ever official WordPress Meetup in a coworking space located downtown Los Angeles, apprehensive, unsure what to expect. That evening a wonderful speaker on SEO followed the organizers from WordCamp Los Angeles calling for volunteers and I immediately raised my hand. The old me would not have.</p>
<p>From that point through December, I attended almost twenty (20) WordPress Meetups, attended four WordCamps (Grand Rapids, Los Angeles, Riverside, and United States via Livestream) logging almost 5,000 miles in the process. Rebuilding a website for a printing company pro bono while rehabilitating my heart and body. The energies received in return for giving back to the WordPress Community healed me emotionally, allowing me to contribute creatively &#8212; I loved it and wanted to do even more!</p>
<h3>Making a List, Checking It Twice</h3>
<p>Tired of driving home very late nights from area Meetups from all points around SoCal, I decided to start a meetup locally. On January 26, 2018, at 7:30 pm, I reached the last slide of my first presentation at our official WordPress Santa Clarita Valley Meetup. It read, &#8220;host the first annual WordCamp Santa Clarita&#8221;.</p>
<p>The faces in the audience &#8211; Tom, Steve, Matt, and others new to WordPress all looked at me skeptically, seeing someone full of dreams, spouting enthusiasm. But one thing was clear to me &#8212; WordPress had given me a shot at reclaiming something laid dormant and anything seemed possible.</p>
<p>Sixteen (16) months later, the first WordCamp north of Los Angeles and south of Sacramento since 2014 debuted in Santa Clarita. A small, but an incredible team of volunteers bought into my enthusiasm turned around and gave back to our attendees in our WordPress Community.</p>
<h3>Speak On It</h3>
<p>In my pre-heart event life, I began public speaking in a formal setting completing over 40 presentations but had stepped off the stage years earlier in a company club. Back in 2014 while walking through the break room at WordCamp Los Angeles one of the lead organizers handed me a mic and asked me to speak. Afterward, he said, &#8220;you should present at a WordCamp.&#8221;</p>
<p>Four years later, I stood on stage at WordCamp Chicago sharing my WordPress journey and hoping to inspire others to never give up on going after your dreams. Until that weekend in Chicago, I hadn&#8217;t seen any African-American men onstage and felt it important to encourage diversity through my message of rebirth.</p>
<blockquote><p><i>&#8220;Live as if you were to die tomorrow. Learn as if you were to live forever.&#8221; </i></p>
<p><i>Mahatma Gandhi</i></p></blockquote>
<p>I&#8217;ve met the most incredible group of nurturing, giving, and talented people stretching back to Sara (Rosso) in Napa through Angela (Jin) or David (Bisset) on the WordCamp US team. Every time I needed confidence or a word of encouragement Cami (Kaos), Kathy (Drewien), Brandon (Dove), or someone in the Community was that steadying hand on my shoulder.</p>
<p>I think about these words often as inspiration, waking each morning to greet the sunrise full of ideas and promise. How can I give back? What can I do with WordPress today?</p>
<p>The post <a rel="nofollow" href="https://heropress.com/essays/second-chances-how-a-trip-back-into-the-wordpress-community-saved-my-life/">Second Chances: How A Trip Back  Into The WordPress Community Saved My Life</a> appeared first on <a rel="nofollow" href="https://heropress.com">HeroPress</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 15 Jul 2020 11:00:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"Joe Simpson Jr.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:84:"WPTavern: WordCamp Europe Goes Virtual for 2021, In-Person Conference to Resume 2022";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101866";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:211:"https://wptavern.com/wordcamp-europe-goes-virtual-for-2021-in-person-conference-to-resume-2022?utm_source=rss&utm_medium=rss&utm_campaign=wordcamp-europe-goes-virtual-for-2021-in-person-conference-to-resume-2022";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7807:"<p>While much of the world is currently suspended in the uncertainty caused by the pandemic, WordCamp Europe delivered a surprisingly decisive <a href="https://europe.wordcamp.org/2021/wordcamp-europe-2021-will-be-online/">announcement</a> today regarding the status of the 2021 event in Porto. Organizers moved to make it a virtual conference, 10 months in advance of the planned dates, June 3-5, 2021:</p>



<blockquote class="wp-block-quote"><p>After careful consideration, and following guidance from WordCamp Central, we have agreed to hold WCEU 2021 online.</p><p>Although it was a difficult decision, it also seems the right thing to do. Considering the continuing uncertainty regarding COVID-19, we are hesitant to draw so many individuals from so many different places into one physical space.</p><p>We understand that this decision will come as a disappointment to many. We know that this event is a much-needed social outlet for many in our community and that an online event isn&rsquo;t quite the same as a physical event. We&rsquo;re so sad to not be able to greet you all in person in Porto in June.</p></blockquote>



<p>The announcement cited several positive aspects of going virtual, including eliminating the uncertainty for attendees and their travel arrangements, allowing for a larger global audience without the expense and risk, and having more time for creating a better online experience. The 2020 event had just three months to convert to a virtual conference but was able to reach more than 8,000 attendees.</p>



<p>In the absence of a vaccine ready for mass distribution or any proven commercially available therapeutics specifically designed to target the virus, it is impossible for organizers to nail down a safe timeline for a multinational event in 2021. Hugh Lashbrooke, who is assisting the WCEU organizing team as a mentor from WordCamp Central, identified risk mitigation as one of the primary factors in their decision.</p>



<p>&ldquo;Attendee safety is a primary concern in WordCamp organizing,&rdquo; Lashbrooke said. &ldquo;While the pandemic is progressing differently in different regions of the world, it seems that large in-person events that bring together thousands of people from multiple countries in a single shared space are still a risky proposition &mdash; and it&rsquo;s not clear when this will be safe again.&rdquo; </p>



<p>WordCampers <a href="https://twitter.com/WCEurope/status/1283017418261049346">reacting to the news</a> today seemed to understand the need for such a disruptive change, but most expressed deep disappointment. </p>



<p>&ldquo;I&rsquo;m sure the decision won&rsquo;t have been taken lightly,&rdquo; Simon Dickson said. &ldquo;But WCEU is so important in terms of defining and sustaining the European &ndash; and indeed, global &ndash; WordPress community. With all due respect to online alternatives, two blank years will hit community spirit hard.&rdquo;</p>



<p>The goal for WordCamp Europe is to resume the in-person event in 2022 and organizers have booked the Super Bock Arena (Pavilh&atilde;o Rosa Mota) for June 2 &ndash; June 4, 2022.&nbsp;</p>



<p>If WCEU can resume normal operations in 2022, it will be the first time in three years that the European WordPress community has had the opportunity to gather in-person in one place. One disappointed attendee <a href="https://twitter.com/7strel/status/1283102522270507008">said</a>, &ldquo;Understandable. As we say in Portugal: &Agrave; terceira ser&aacute; de vez! At&eacute; 2022,&rdquo; which roughly translates to the English saying, &ldquo;Third time&rsquo;s a charm.&rdquo;</p>



<h2>WordPress Community Team Is Working Towards Facilitating More Effective Events</h2>



<p>Lashbrooke said adjusting to emerging world events has been hard on all WordCamp organizing teams this year, as well as sponsors, speakers, and attendees. WordCamp Asia was forced to cancel, WordCamp US has gone virtual, and many other smaller camps have gone online or been postponed. The WordPress Community team is <a href="https://make.wordpress.org/community/2020/07/13/reimagining-online-events/">discussing how they can improve online events</a> to provide a better experience for the community. Some of the broader ideas for creating more effective events include the following:</p>



<ul><li>Decouple online events from geography</li><li>Encourage events and workshops defined by topics, languages, etc.</li><li>Explore shorter, &ldquo;snack-sized&rdquo; online events</li><li>Experiment with the frequency of events</li></ul>



<p>A peripheral <a href="https://twitter.com/learnwithmattc/status/1282723205728227330">discussion</a> regarding sponsors is happening on Twitter, after recent online WordCamps failed to deliver a positive experience of virtual sponsor booths.</p>



<p>&ldquo;If you want to offer sponsors a &lsquo;Virtual Booth&rsquo; as a benefit of sponsorship, you&rsquo;re going to have to do something during the main event to make that attractive and easy for attendees to attend &mdash; otherwise it&rsquo;s not a sponsor benefit,&rdquo; Matt Cromwell said.</p>



<p>&ldquo;If attendees have to log off the regular WordCamp platform, then go find some other link to some other virtual platform the experience becomes arduous and full of friction for the attendee making it highly unlikely they&rsquo;ll attend. WordCamps that are switching to virtual should look into more robust platforms like <a href="https://hopin.to/">Hopin</a> which allow for various rooms that are consolidated to the same platform for attendees.&rdquo;</p>



<p>WordCamp Europe 2020 organizer Bernhard Kau said his team looked into using Hopin but found it wasn&rsquo;t fully accessible.</p>



<p>&ldquo;Hopin looked promising at first, not only for sponsors, but also for networking between attendees,&rdquo; Kau said. &ldquo;But it lacks basic accessibility. It&rsquo;s unusable with keyboard only for example. I&rsquo;d love to see it improve, so we could use it in the future.&rdquo; </p>



<p>Lashbrooke said WordCamp Central has also considered Hopin, among other apps, while doing <a href="https://docs.google.com/spreadsheets/d/1ym0nuKxhnzyBmNAozSNdviCjmlTq3e2J95usFbpUQrY/edit#gid=0">extensive research on accessible platforms</a>.</p>



<p>&ldquo;Right now, everyone&rsquo;s still working on a way to make that work for everyone, and we&rsquo;re lucky that our sponsors are so honest with us about their experiences, because it helps us improve,&rdquo; Lashbrooke said. </p>



<p>&ldquo;One thing that is of paramount importance to us as a team is that all WordPress events maintain a high level of accessibility, and unfortunately when it comes to streaming platforms we have very limited options when it comes to accessible streaming services. Zoom is about the only fully-accessible platform, so it&rsquo;s the only option to use for sponsor booths.&rdquo;</p>



<p>With ten months of lead time, WordCamp Europe organizers will have plenty of opportunities to experiment with new ideas to make the event more engaging for both attendees and sponsors. All the other WordCamps on the <a href="https://central.wordcamp.org/schedule/">schedule</a> through the end of the year have already been converted to online events. For the time being, it looks like virtual camps are here to stay.</p>



<p>&ldquo;I really doubt we&rsquo;ll be abandoning online events, after COVID-19 is more under control worldwide,&rdquo; WordPress Community organizer Andrea Middleton <a href="https://make.wordpress.org/community/2020/07/13/reimagining-online-events/#comment-28388">said</a>. &ldquo;I think that we&rsquo;ll need to figure out how in-person events and online events can best coexist, but it seems like we&rsquo;ll have time to figure that out.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 14 Jul 2020 23:55:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:84:"WPTavern: Call for Block Plugins: The WordPress Block Directory Is Open for Business";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101853";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:211:"https://wptavern.com/call-for-block-plugins-the-wordpress-block-directory-is-open-for-business?utm_source=rss&utm_medium=rss&utm_campaign=call-for-block-plugins-the-wordpress-block-directory-is-open-for-business";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6029:"<img />WordPress block directory.



<p class="has-drop-cap">Over the weekend, Alex Shiels announced an open call for plugin authors to <a href="https://make.wordpress.org/plugins/2020/07/11/you-can-now-add-your-own-plugins-to-the-block-directory/">begin submitting one-off block plugins</a> to the official <a href="https://wordpress.org/plugins/browse/block/">block directory</a>. In the upcoming WordPress 5.5 update, slated for release on August 11, end-users will be able to search for, install, and add blocks directly from the editor. With little time left before release, will plugin authors make this a worthwhile feature for users?</p>



<p>&ldquo;The Block Directory is a subset of plugins in the plugin directory that can be instantly and seamlessly installed from the Gutenberg editor with a single click,&rdquo; wrote Shiels in the announcement. &ldquo;We call these new plugins &lsquo;block plugins&rsquo; and have worked hard to make it easier for people to contribute to this new feature coming to WordPress 5.5.&rdquo;</p>



<p>WordPress plugin authors now have a new <a href="https://wordpress.org/plugins/developers/block-plugin-validator/">block validation tool</a> at their disposal. The validator can check an SVN repository URL, Github URL, or plugin slug to determine if it is suitable for inclusion into the WordPress block directory. It is still under development, so plugin authors should report any issues they run into.</p>



<p>For existing plugins in the plugin directory, developers can publish them to the block directory after passing validation with the tool. Plugin authors can also remove their plugins from the block directory at the click of the button.</p>



<p>The block plugin guidelines are still under development. The <a href="https://github.com/WordPress/wporg-plugin-guidelines/pull/68">draft ticket</a> has been open since November 21, 2019. It has seen little activity in the months since. Presumably, there will be a finalized version on WordPress.org rather than GitHub before WordPress 5.5 lands.</p>



<p>Developers who want to begin building block plugins should follow the updated <a href="https://developer.wordpress.org/block-editor/tutorials/block-tutorial/">block development tutorial</a>.</p>



<h2>A Late Rallying Cry</h2>



<p class="has-drop-cap">Technically, plugin authors have been able to submit blocks to the directory for months. It was a bit of a hidden feature that few developers took advantage of. The user base was primarily Gutenberg plugin users who had enabled the experimental block directory search feature. Despite the small user base, it was an ideal time for plugin authors to begin experimenting and building an audience. It could have also been a great opportunity for relatively unknown developers to make their mark upon the WordPress world. There is still some time for that, but the community has not been actively encouraged to create blocks for the directory. With WordPress 5.5 looming ahead, the past few months seem like a missed opportunity.</p>



<p>Nick Hamze, one of the most prolific publishers of one-off blocks, is <a href="https://block.garden/taking-a-break/">taking a break</a>. He originally had plans to release 99 plugins throughout 2020, but the WordPress plugin review team asked him to dial things back a bit. His routine releases were putting a strain on the team. The problem is that he was one of the few plugin authors <a href="https://wptavern.com/the-wacky-world-of-sorta-brilliants-sorta-fun-block-plugins">putting in the work</a> to make the block directory a great thing.</p>



<p>As a former reviewer for the themes team, I understand how easy it is to get overwhelmed with a wave of new projects that need a code review. At the same time, I would be willing to bump Hamze&rsquo;s work to the front of the line, regardless of how often he was releasing new plugins. It may be a bit unfair to other plugin authors, but few others were betting big on what will be one of WordPress 5.5&rsquo;s highlights: a searchable block directory.</p>



<p>&ldquo;If someone would have just given me the barest encouragement I would have kept going, but due to my experience, I stopped submitting blocks and won&rsquo;t do it anymore in the future,&rdquo; said Hamze.</p>



<p>If no one else was putting in the work, there should have been no harm in giving him a bit of priority or a helping hand. That way, when WordPress 5.5 launches, there is something to show for this feature.</p>



<p>Now, we are in the 11th hour, mere weeks before 5.5&rsquo;s official release, with a meager offering of blocks &mdash; instead of hundreds of blocks, we are currently nearing the 60 mark. It is a last-minute rallying call to get plugin authors churning away before the final bell rings. Yet, WordPress just benched what was essentially its star player.</p>



<p>I have no doubt the block directory will continue to grow. More developers will buy into it, especially as full-site editing creates more possibilities in WordPress 5.6 later this year. Some authors will likely produce more blocks than the totality of the current number in the directory.</p>



<p>If the Gutenberg team had managed to squeeze the <a href="https://wptavern.com/version-1-prototype-of-the-wordpress-admin-block-directory-announced">directory and management screens</a> into WordPress 5.5 admin, it would have made for a far bigger splash. It would have been good visibility for block makers. WordPress will support a block directory search for now. However, there is no way for end-users to more casually browse blocks via their admin. There is no way to see the latest block plugin releases or view the most popular blocks. Some of these things may have made one-off block development a bit more enticing to plugin authors. </p>



<p>I am still optimistic that more plugin authors will jump onto the block bandwagon. It will just be a while before we start seeing the wealth of blocks that cover the entire spectrum of what users need.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 14 Jul 2020 20:09:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"WordPress.org blog: WordPress 5.5 Beta 2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=8681";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2020/07/wordpress-5-5-beta-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4508:"<p id="block-000046ff-d8e6-40a8-9869-2dd39e50f270"><br />WordPress 5.5 Beta 2 is now available!</p>



<p id="block-81bd56b9-ea44-43ad-ab36-a5ae78b54375"><strong><strong>This software is still in development,</strong>&nbsp;</strong>so it’s not recommended to run this version on a production site. Consider setting up a test site to play with the new version.</p>



<p id="block-7cc1bbc6-17f9-44c5-8f67-da4e3059ad69">You can test WordPress 5.5 beta 2 in two ways:</p>



<ul id="block-4840af57-f44b-4d9f-aa64-c6a452392e42"><li>Try the&nbsp;<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a>&nbsp;plugin (choose the “bleeding edge nightlies” option)</li><li>Or&nbsp;<a href="https://wordpress.org/wordpress-5.5-beta2.zip">download the beta here</a>&nbsp;(zip).</li></ul>



<p id="block-a40528cb-eb3b-4c8a-8f5e-aa700f1ba086">WordPress 5.5 is slated for release on&nbsp;<a href="https://make.wordpress.org/core/5-5/">August 11th, 2020</a>, and <strong>we need your help to get there</strong>!</p>



<p>Thank you to all of the contributors that tested the <a href="https://wordpress.org/news/2020/07/wordpress-5-5-beta-1/">beta 1</a> development release and provided feedback. Testing for bugs is an important part of polishing each release and a great way to contribute to WordPress. Here are some of the changes since beta 1 to pay close attention to while testing.</p>



<h2 id="block-15d6d57f-905d-4a47-9f66-839468a5375a">Some highlights</h2>



<p id="block-85da84ec-c841-42f9-8d3b-1a4537a61d10">Since <a href="https://wordpress.org/news/2020/02/wordpress-5-4-beta-1/">beta 1</a>, <a href="https://core.trac.wordpress.org/query?status=closed&changetime=07%2F08%2F2020..07%2F14%2F2020&milestone=5.5&group=component&col=id&col=summary&col=owner&col=type&col=priority&col=component&col=version&order=priority">48 bugs</a> have been fixed. Here is a summary of a few changes included in beta 2:</p>



<ul><li>19 additional bugs have been fixed in the block editor (see <a href="https://github.com/WordPress/gutenberg/pull/23903">#23903</a> and <a href="https://github.com/WordPress/gutenberg/pull/23905">#23905</a>).</li><li>The Dashicons icon font has been updated (see <a href="https://core.trac.wordpress.org/ticket/49913">#49913</a>).</li><li>Broken widgets stemming from changes in Beta 1 have been fixed (see <a href="https://core.trac.wordpress.org/ticket/50609">#50609</a>).</li><li>Query handling when counting revisions has been improved (see <a href="https://core.trac.wordpress.org/ticket/34560">#34560</a>).</li><li>An alternate, expanded view was added for <code>wp_list_table</code> (see <a href="https://core.trac.wordpress.org/ticket/49715">#49715</a>).</li><li>Some adjustments were made to the handling of default terms for custom taxonomies (see <a href="https://core.trac.wordpress.org/ticket/43517">#43517</a>)</li></ul>



<p>Several updates have been made to the block editor. For details, see <a href="https://github.com/WordPress/gutenberg/pull/23903">#23903</a> and <a href="https://github.com/WordPress/gutenberg/pull/23905">#23905</a>.</p>



<h2 id="block-76156b2b-0a52-4502-b585-6cbe9481f55b">Developer notes</h2>



<p id="block-3fe5e264-0a95-4f12-9a18-0cb9dc5955d1">WordPress 5.5 has lots of refinements to polish the developer experience. To keep up, subscribe to the&nbsp;<a href="https://make.wordpress.org/core/">Make WordPress Core blog</a>&nbsp;and pay special attention to the&nbsp;<a href="https://make.wordpress.org/core/tag/5-5+dev-notes/">developers’ notes</a>&nbsp;for updates on those and other changes that could affect your products.</p>



<h2 id="block-bc89fd56-47b0-439f-8e2c-4a642c80a616">How to Help</h2>



<p id="block-3ff83a77-8b54-4061-ae2d-45fc984cbd76">Do you speak a language other than English?&nbsp;<a href="https://translate.wordpress.org/projects/wp/dev/">Help us translate WordPress into more than 100 languages</a>!</p>



<p id="block-9d871099-ec49-446c-8322-9e49b7498c10">If you think you’ve found a bug, you can post to the&nbsp;<a href="https://wordpress.org/support/forum/alphabeta/">Alpha/Beta area</a>&nbsp;in the support forums. We’d love to hear from you!</p>



<p id="block-bd71c1d3-39d9-4b2a-8193-3486497b45fd">If you’re comfortable writing a reproducible bug report,&nbsp;<a href="https://core.trac.wordpress.org/newticket">file one on WordPress Trac</a>,&nbsp;where you can also find a list of&nbsp;<a href="https://core.trac.wordpress.org/tickets/major">known bugs</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 14 Jul 2020 17:24:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jake Spurlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:65:"WPTavern: Admin 2020 Reimagines WordPress Admin and Media Library";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101275";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:175:"https://wptavern.com/admin-2020-reimagines-wordpress-admin-and-media-library?utm_source=rss&utm_medium=rss&utm_campaign=admin-2020-reimagines-wordpress-admin-and-media-library";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6102:"<p>Unless I&rsquo;m trying to be aware of it, I don&rsquo;t see the WordPress admin anymore. When you work inside it every day, it becomes a means to an end, like a subway ride to work. You scan your ticket (log in) and you&rsquo;re on your way to whatever admin business is the order of the day. After awhile, you accept its appearance and no longer spend conscious thoughts critiquing it. </p>



<p>WordPress doesn&rsquo;t overhaul its admin design very often, since it requires a massive effort from contributors. The beauty of this pluggable system is that anyone with the skills can change the design to suit their own aesthetic. That is what WordPress developer Mark Ashton has done with <a href="https://admintwentytwenty.com/">Admin 2020</a>, a plugin that completely reskins the admin to give it a different look.  </p>



<img />



<p>Browsing the Admin 2020 <a href="https://demo.ashtonretouch.com/wp-login.php">demo</a>, you might not even know you were using WordPress. The design is built on top of <a href="https://getuikit.com/">UIkit</a>, a lightweight UI framework that has a softer, rounder look to it. Users can switch between light and dark mode. Admin 2020 features white labeling, allowing users to upload their own logos and brand the dashboard for themselves. The admin area can also be radically simplified based on user role. The plugin allows for admin menu items to be renamed or toggled for visibility.</p>



<div class="wp-block-embed__wrapper">
<a href="https://cloudup.com/c7uRS7QtvxU"><img src="https://cldup.com/C4QGUuFG48.gif" alt="Admin 2020 dashboard overview dark mode" width="600" height="336" /></a>
</div>



<p>Admin 2020 has an Overview page that can sync with Google Analytics to show reports that can be filtered by date, including Users, Page Views, Sessions, and device breakdown. It also displays summaries of recent comments, popular pages, system info, new users, and other content-related data.</p>



<p>The plugin gives WordPress&rsquo; media library a new look, along with folders and filters for an alternative way to organize images. Ashton claims it is up to 50% faster than the classic WordPress media library. The gallery editor also adds filters, free draw, icons/shapes, text and other mask filters for enhancing images.</p>



<div class="wp-block-embed__wrapper">
<a href="https://cloudup.com/cMJOcOz4-QQ"><img src="https://cldup.com/hhWJ2HZrFL.gif" alt="Admin 2020 media library" width="800" height="450" /></a>
</div>



<p>&ldquo;A lot of what admin 2020 does is built on existing WordPress functions, it just uses them in a different way,&rdquo; Ashton said. &ldquo;Instant search for example leverages AJAX and you can search all of your content from one place.&rdquo;</p>



<p>The Admin 2020 plugin started out as a personal passion project. After building everything from plugins to themes to a hospitality reservation management system using WordPress, Ashton thought he would try his hand at making an admin theme he would enjoy using.</p>



<p>&ldquo;It was something I have always wanted and basically got tired of waiting for,&rdquo; he said. &ldquo;I&rsquo;ve been using WordPress for my projects for many years and while I love the platform I have never enjoyed using the backend. I wanted to create something with a strong emphasis on modern UI but also something that brought useful features that would speed up my workflow.&rdquo;</p>



<p>Ashton said supporting third-party extensions is one of the most challenging aspects of maintaining the plugin. Admin 2020 includes<a href="https://admintwentytwenty.com/pages/support"> full support for popular plugins</a> like Jetpack, WooCommerce, Elementor, Yoast SEO, and Divi Builder, but there are thousands of others that have not been tested.</p>



<p>&ldquo;The process of supporting a plugin usually isn&rsquo;t that difficult but it&rsquo;s more the case of there are so many plugins out there,&rdquo; Ashton said. &ldquo;Some plugins rely heavily on their own CSS in which case they usually work fine in light mode but don&rsquo;t look right in dark mode. Then you have plugins that use WP components and they usually work great right out of the box. Some plugins actually disable all custom backend styling, though &ndash; they are a real challenge to get around!&rdquo;</p>



<p>Ashton launched Admin 2020 in April, so it is still relatively new to the commercial plugin scene. It is sold as a single plugin but is built in a modular way so that most parts of it can be disabled. The plugin&rsquo;s tiered pricing begins at $15 for a single site license. He opted to pursue a fully commercial model as opposed to releasing a free plugin with paid upgrades. </p>



<p>&ldquo;In short, I wanted the plugin to stay as streamlined as possible,&rdquo; Ashton said. &ldquo;I didn&rsquo;t want to add yet more plugin notices at the top of admin pages bugging you to upgrade. I wanted people to experience the full version of Admin 2020.&rdquo;</p>



<p>His strategy has been successful so far, as Admin 2020 has become a full-time project after just three months. The London-based company is a one-person effort at the moment, but Ashton is looking to bring another developer on.</p>



<p>&ldquo;Active installs are around 2,000 now, and as a result I am very busy and Admin 2020 is a full time project,&rdquo; he said. &ldquo;I love working on the plugin though, there is a lot of scope on where this can go and the feedback has been great!&rdquo;</p>



<p>When asked if he worries about the name becoming outdated in the coming years, Ashton said he is happy with the name but if he thinks of something more suitable it may change in the future. He believes there is a market for all kinds of different themes to transform the WordPress admin but isn&rsquo;t currently planning to add more designs.</p>



<p>&ldquo;Not everyone is the same, and good design looks different to everybody,&rdquo; Ashton said. &ldquo;I am not looking at other designs at the moment &ndash; more offering the ability to customize the design yourself through Admin 2020.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 13 Jul 2020 23:21:54 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:30;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"WPTavern: Copy and Paste Editor Blocks via GutenbergHub’s Block Library";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101455";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:185:"https://wptavern.com/copy-and-paste-editor-blocks-via-gutenberghubs-block-library?utm_source=rss&utm_medium=rss&utm_campaign=copy-and-paste-editor-blocks-via-gutenberghubs-block-library";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6755:"<img />GutenbergHub block library.



<p class="has-drop-cap">Spearheaded by Munir Kamal, GutenbergHub <a href="https://gutenberghub.com/introducing-gutenberg-blocks-library-more/">launched a free block library</a> to the WordPress community today. Currently, there are 37 custom-designed blocks that users can copy and paste to their website.</p>



<p>Unlike the block directory on WordPress.org, the blocks available from this project are not plugins.  They are handled through copying and pasting a bit of code.  Technicaly they are blocks that act as a grouping of various core WordPress blocks.   However, in reality, they more closely resemble block patterns.</p>



<p>The one caveat is that users must install Kamal&rsquo;s <a href="https://wptavern.com/control-block-design-via-the-editorplus-wordpress-plugin">recently-launched EditorPlus plugin</a>. It allows end-users to style the core WordPress blocks via a slew of custom design options. Because the plugin neither relies on third-party blocks nor creates its own, all of the block designs in GutenbergHub&rsquo;s library are built directly from the blocks available in WordPress. This makes for a much smaller dependency tree and fewer areas where things could go wrong in the fast-moving world of blocks.</p>



<p>By tying the block designs to the <a href="https://wordpress.org/plugins/editorplus/">EditorPlus </a>plugin, it gives Kamal much more control over the final output. Having cross-theme consistency is still a tough job, but it improves by working within the confines of the design framework from the plugin.</p>



<p>&ldquo;I created [EditorPlus] to fulfill my requirements in bringing easily customizable blocks and templates to Gutenberg users,&rdquo; said Kamal.</p>



<p>He launched a <a href="https://wptavern.com/gutenberg-hub-launches-collection-of-100-block-templates">block template library</a> in March. However, it originally asked users to copy block HTML and CSS code separately. Now, both the block and template libraries require the EditorPlus plugin. This allows Kamal to build everything on top of a sort of framework and remove third-party dependencies. Kamal said the system will help make things easier for users while giving him more control over development and maintenance.</p>



<p>Thus far, most of the projects he has launched on GutenbergHub have built on top of the previous project in some way. They were stepping stones that led him to build a bigger yet more well-rounded system. However, we are likely light-years away from seeing how everything takes shape. The Gutenberg project is moving fast, and GutenbergHub will need to react to upcoming changes. It will need to contend with the inclusion of block patterns in WordPress 5.5, full-site editing later this year, and more design options for blocks down the road. Like the block system itself, all of this is still a bit experimental until we begin to see some sort of settling point. It will be interesting to watch how things unfold. Kamal and his GutenbergHub project are in a good position to ride the waves of constant change.</p>



<p>Watch a short video on how GutenbergHub&rsquo;s block library and EditorPlus plugin work together to create pricing columns:</p>



<div class="wp-block-embed__wrapper">

</div>



<h2>How the Block Library Works</h2>



<p class="has-drop-cap">Currently, users can search the <a href="https://gutenberghub.com/blocks/">GutenbergHub block library</a> to pick and choose the blocks they want. The library is sub-divided by seven categories:</p>



<ul><li>Testimonial</li><li>Team</li><li>Feature</li><li>Card</li><li>Pricing</li><li>Call to Action</li><li>Stats</li></ul>



<p>Users can copy a small bit of JSON code for individual blocks they would like to add to their site. To add a block, installing and activating the EditorPlus plugin is a hard requirement. Once that is done, users can visit the Blocks tab under the EditorPlus settings screen and paste the code.</p>



<img />Adding a block&rsquo;s code via the EditorPlus plugin.



<p>The blocks tab acts as a central hub to manage blocks from the library. Users can add, delete, or deactivate any blocks added from GutenbergHub.</p>



<p>Each active block added to the site is available through the block inserter on the editor. Perhaps the one downside is the blocks do not have a preview image. Some of the blocks have similar names, such as Card 1, Card 2, etc. Having a preview image would help distinguish them &mdash; <em>or just better names</em>.</p>



<img />Inserting a block from GutenbergHub into the editor.



<h2>Future Plans</h2>



<p class="has-drop-cap">Ideally, the EditorPlus plugin could serve up GutenbergHub&rsquo;s blocks and templates over an API, providing users with a simple import solution at the click of a mouse. The copy/paste approach means having to visit a separate website instead of staying in the comfort of one&rsquo;s WordPress admin. Kamal originally went with the copy/paste solution because he wanted everything to be independent of plugins. However, because WordPress did not have the design controls in place, he realized he needed at least one plugin as part of the equation. That is where EditorPlus came in. This should ultimately free him up to build an import feature.</p>



<p>&ldquo;I will possibly include a direct inserter for templates and blocks in the Editor Plus plugin,&rdquo; he said. However, there is no indication of when that will happen. It would make the user experience more seamless and efficient.</p>



<p>Kamal is still mulling over how he will eventually monetize the project. Right now, he has put a lot of time and resources behind it with little return on his investment. At some point, this could become unsustainable unless his other commercial ventures can fund it. In the long run, he will need to have a solid business plan behind the entire GutenbergHub project.</p>



<p>&ldquo;I do plan to monetize the GutenbergHub offering somehow,&rdquo; he said. &ldquo;I&rsquo;ve not yet planned out this, but that could be a premium subscription or offering pro blocks, templates, and an EditorPlus add-on. Another option would be to convert it into a marketplace where designers can create and sell blocks and templates. This is something I&rsquo;ve yet to plan out to be honest. Rest assured, what is free will remain free and will actually improve over time.&rdquo;</p>



<p>Kamal said his most immediate plan is to gather more feedback from users. &ldquo;I ended up creating a <a href="https://www.facebook.com/groups/gutenberghub/">Facebook group</a>,&rdquo; he said. &ldquo;This would be the best and easiest way for anyone to share ideas, suggestions, and feedback about GutenbergHub.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 13 Jul 2020 21:14:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:31;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:72:"WPTavern: WordPress Documentation Team Bans Links to Commercial Websites";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101625";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:189:"https://wptavern.com/wordpress-documentation-team-bans-links-to-commercial-websites?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-documentation-team-bans-links-to-commercial-websites";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5904:"<p>This week WordPress&rsquo; Documentation team <a href="https://make.wordpress.org/docs/tag/external-linking-policy/">announced</a> a ban on links to commercial websites in a revision to its external linking policy:</p>



<blockquote class="wp-block-quote"><p>During discussion about external linking policy, we came to conclusion that we won&rsquo;t allow, at least in the beginning and for the time being, any commercial blogs. So before you start arguing that some popular&nbsp;plugin&rsquo;s blogs have valuable information, let me stop you right there.</p><p>Allowing &ldquo;popular plugin&rsquo;s/theme&rsquo;s/services&rsquo; etc blogs&rdquo; and all other commercial blogs will put us in a position to protect documentation from being abused as marketing media, to protect ourselves from accusations of being biased and to defend every decision we make along the way. And still, there will be dissatisfied sides claiming we weren&rsquo;t fair and did them wrong. The idea of allowing external linking will become its own purpose.</p></blockquote>



<p>Despite the announcement&rsquo;s abrasive phrasing discouraging further discussion on the matter, the controversial decision stirred up a heated conversation in the comments. Yoast founder Joost de Valk <a href="https://make.wordpress.org/docs/2020/07/06/external-linking-policy-commercial-blogs/#comment-40100">contends</a> that companies contributing to WordPress might as well receive some promotion as a benefit:</p>



<blockquote class="wp-block-quote"><p>I understand that you want to prevent discussions about bias.</p><p>But I think your premise here is wrong: you&rsquo;re saying you&rsquo;re not &ldquo;biased&rdquo; if you&rsquo;re not linking to commercial companies. I would say we&rsquo;re all inherently biased, because some of those companies do a lot for the WordPress community, while others do not.</p><p>The companies that contribute to WordPress a lot used to get some links, and thus some promotion as benefit from the fact that they&rsquo;re contributing. By removing that from them, you&rsquo;re basically treating those that don&rsquo;t give back the same as companies that do give back, something which I think is simply wrong. So I very heavily disagree with this decision.</p></blockquote>



<p>Milana Cap, the Documentation Team member who penned the announcement, clarified that the policy change does not remove external links to commercial sites from WordPress.org. It only applies to documentation sites, including <a href="https://wordpress.org/support/">HelpHub</a>,&nbsp;<a href="https://developer.wordpress.org/reference/">Code Reference</a>,&nbsp;<a href="https://developer.wordpress.org/plugins/">Plugin</a>&nbsp;and&nbsp;<a href="https://developer.wordpress.org/themes/">Theme</a>&nbsp;Developer Handbook,&nbsp;<a href="https://developer.wordpress.org/block-editor/">Block Editor Handbook</a>,&nbsp;<a href="https://developer.wordpress.org/apis/">Common APIs Handbook</a>.</p>



<p>&ldquo;There is no way to make this fair,&rdquo; Cap said. &ldquo;And we can discuss about many unfair parallels happening in&nbsp;open source&nbsp;communities; such as how many hours per week can be contributed by a freelancer vs paid company contributor, meeting times (where decisions are made) in the middle of the night in your timezone etc.&rdquo;</p>



<p>Timi Wahalahti suggested one solution would be to better utilize the <a href="https://wordpress.org/five-for-the-future/pledges/">Five for the Future pledges</a> page to identify significant contributors to documentation if links to commercial sites are no longer an option.</p>



<p>Several commenters noted the value of linking to additional examples and resources but also recommended WordPress put a version or timestamp in place to give the reader more context.</p>



<p>WordPress agency owner Jon Brown characterized the ban as &ldquo;undesirable gatekeeping,&rdquo; saying that the policy suggests all things commercial are &ldquo;inherently corrupt and not trustworthy nor valuable.&rdquo; </p>



<p>&ldquo;A links value is inherently subjective and ought to be delt with subjectively,&rdquo; Brown said. &ldquo;Trying to create high level objective rules doesn&rsquo;t seem beneficial or realistic. I certainly disagree that all &lsquo;commercial&rsquo; sites should be blanket banned.</p>



<p>&ldquo;I do think there are some low level disqualifiers that could guide authors and moderators in what links are appropriate. Those should be criteria that directly impact the users of docs, and being commercial doesn&rsquo;t. Those are things like, the source being accessible, the source not being pay walled, etc.&rdquo;</p>



<p>Cap responded, saying that the root of the issue is that allowing commercial links puts the documentation team in the unwanted position of having to find a fair way to decide on which links are allowed to be included. She also indicated that the policy may evolve over time but that for now the decision on the ban is final.</p>



<p>&ldquo;Perhaps over time we&rsquo;ll figure that out,&rdquo; Cap said. &ldquo;We&rsquo;ll certainly know more once we start doing it. For now, this is the decision.&rdquo;</p>



<p>External sources can be valuable supplements to documentation, but this conversation underscores the need for better incentives for people to spend time documenting WordPress. As the team is already running on limited resources, they are trying to avoid having to heavily police links to commercial websites.</p>



<p>&ldquo;The bottom line is: we haven&rsquo;t figured out the best way to deal with commercial blogs or sites in a fair manner and thus our focus is going to be on links that don&rsquo;t drop into that grey zone,&rdquo; Cap said. &ldquo;We do expect to eventually get towards discussing how we can safely include commercial blog links (if this even is possible).&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 10 Jul 2020 23:22:15 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:32;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:74:"WPTavern: Ariele Lite Is a Fun and Refreshing Theme for WordPress Bloggers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101733";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:193:"https://wptavern.com/ariele-lite-is-a-fun-and-refreshing-theme-for-wordpress-bloggers?utm_source=rss&utm_medium=rss&utm_campaign=ariele-lite-is-a-fun-and-refreshing-theme-for-wordpress-bloggers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6559:"<img />



<p class="has-drop-cap">Ariele Lite, the latest theme from Rough Pixels, went live in the <a href="https://wordpress.org/themes/ariele-lite/">WordPress theme directory</a> today. In an ecosystem where designers are dubbing most themes as multipurpose, it is refreshing to see a well-designed theme that is unafraid to cater specifically to bloggers.</p>



<p>It is not often that I get the opportunity to test a brand new theme from the official WordPress theme directory that supports block editor styles. Or, at least it&rsquo;s not often that I test one that lives up to the claim. Despite a couple of trivial issues, Ariele Lite is a theme that will appeal to a wide audience.</p>



<p>Whenever I see the word &ldquo;lite&rdquo; appended to the end of a theme name, it is immediately off-putting. Far too often, I have been burned when activating such themes. My already low expectations are generally met with unfulfilled promises, missing styles for basic features, and a metric ton of advertising for the <em>real</em> product (i.e., the non-lite version that I can buy). However, I was pleasantly surprised by the work that went into Ariele Lite. It was a complete and fully-functioning theme and did not feel like crippleware. Plus, most of the upsell features in the commercial version were not that appealing to me. I can find most of them in plugin form. However, they could be nice additions for the user who wants integrated features that will look and feel like they are a part of the theme without the hassle of hunting down the perfect plugin.</p>



<p>What makes Ariele Lite a great theme is that it has an opinionated style, even if it is merely some subtle flavoring, for nearly every element or block. It never goes overboard into lavishness, which means it doesn&rsquo;t break readability. It is a theme that has fun with its design while being well-groomed enough for professional bloggers.</p>



<p>Even if Ariele Lite is not to your taste, Rough Pixels has a history of releasing <a href="https://wordpress.org/themes/author/roughpixels/">clean, well-designed themes</a>. There is a little something for almost anyone. The company is also one of the few theme-makers with multiple themes that support the block editor in the free directory.</p>



<h2>Theme Design and Features</h2>



<img />Ariele Lite customizer options.



<p class="has-drop-cap">Ariele Lite is not stock full of custom features, but it has enough flexibility to satisfy most people who want to do some customization. More than anything, my favorite thing about the theme is that it does not take much cajoling to achieve the look of the <a href="https://demos.roughpixels.com/ariele-lite/">demo</a> the theme author has put together. <em>There should be a WordPress theme directory filter tag titled &ldquo;what you see in the demo is what you get.&rdquo;</em></p>



<p>The theme comes with a reasonable number of theme design options. Users can change nearly every aspect of their front end. The theme has options for all its colors, several labels, and other theme-specific elements. It stops short of adding font settings, which is likely a good thing given the theme&rsquo;s attention to detail with typography.</p>



<p>The one particular design element that caught my eye was the theme&rsquo;s blockquote style. Some bloggers may want something a bit less pronounced in design, depending on how they want to present quotes. However, I am a sucker for beautiful quote designs, and Ariele Lite did not disappoint.</p>



<img />Ariele Lite&rsquo;s blockquote style.



<p>The quote design is representative of the attention that Rough Pixels has given to other elements in the theme. From the bold headings to the caption design that overlays the featured image, the team has left few stones unturned.</p>



<p>For bloggers, the most important element is the typography. It is one of those elements that too many theme authors overlook, but it is paramount when catering a theme to bloggers. This is one area the theme excels at. However, if selecting the sidebar-less layout option, there are too many characters per line for comfortable reading. Stick with either the left or right sidebar option to stay on point.</p>



<p>The theme comes with Jetpack infinite scrolling support, a custom posts widget with thumbnails, and enough sidebars to put widgets anywhere you might want. I like the default setup well enough, so these features are less important to me. However, they are likely welcome additions for many users.</p>



<h2>Not Without Issues</h2>



<p class="has-drop-cap">I have been building this theme up thus far in the review. Now, it is time to take it down a notch or two. Ariele Lite is by no means perfect. No software is. I hit a few snags.</p>



<p>The biggest issue I ran into was the theme did not handle full-aligned blocks well. Instead of capping them to the width of the content container, they would break out into the sidebar. Even when selecting a layout with no sidebar, the same issue persists.</p>



<img />Full-width image creates a design issue.



<p>This would be an absolute deal-breaker for me as a user. As a developer, I know that it is simply an oversight and can be corrected. The theme author can correct it with a single line of CSS. Users should simply be aware of the problem, at least until the theme author has a chance to address it.</p>



<p>Outside of that, nested lists in sidebars need a little TLC. The spacing is off. It is also missing support for pagination via the <code>&lt;!--nextpage--&gt;</code> quick tag on single post views.</p>



<p>These few items are relatively trivial issues to address. They are worth noting for the 1.0.4 version of the theme and will likely be fixed in future iterations.</p>



<p class="is-style-highlight has-gray-100-background-color has-background bg-gray-100"><strong>Note:</strong> The above issues were quickly addressed by the theme author in version 1.0.5.</p>



<h2>Final Thoughts</h2>



<p class="has-drop-cap">Ariele Lite does not break much new ground. It is simply a solid blogging theme that supports the block editor. Nearly two years in, such themes are still few and far between. It is ideally suited for people who love to write, and it has enough options to keep those who want to do a bit of tweaking happy.</p>



<p>If the theme&rsquo;s development team is proactive about addressing the few minor issues, I would recommend it to anyone who wants a good theme that fully supports the latest version of WordPress.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 10 Jul 2020 20:35:41 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:33;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:91:"WPTavern: Open Source Initiative to Host Virtual State of the Source Summit, September 9-10";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101622";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:225:"https://wptavern.com/open-source-initiative-to-host-virtual-state-of-the-source-summit-september-9-10?utm_source=rss&utm_medium=rss&utm_campaign=open-source-initiative-to-host-virtual-state-of-the-source-summit-september-9-10";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2787:"<p>OSI (Open Source Initiative) is hosting a new 24-hour, virtual conference called <a href="https://opensource.org/StateOfTheSource">State of the Source Summit</a>, September 9-10. The non-profit organization plays an important role in the open source ecosystem as stewards of the&nbsp;<a href="https://opensource.org/docs/osd">Open Source Definition (OSD)</a>.&nbsp;OSI is responsible for reviewing and approving licenses as OSD-conformant, which indirectly helps mediate community conflicts.</p>



<p>As part of the organization&rsquo;s overall mission to educate the public on the economic and strategic advantages of open source technologies and licenses, OSI is hosting a global summit to facilitate conversations on the current state of open source software. </p>



<p>&ldquo;We are so very excited to host our first-ever conference, with a global approach,&rdquo; OSI Board President Josh Simmons said. &ldquo;State of the Source provides an opportunity for both the open source software community and the OSI&mdash;all those who have contributed so much&mdash;to reflect on how we got here, why we have succeeded, and what needs to happen now.&rdquo;</p>



<p>The conference will run four tracks with sessions that fall under these general groupings:</p>



<ul><li><a href="https://opensource.org/StateOfTheSource#OSLOSI">Open Source Licenses and the OSI</a></li><li><a href="https://opensource.org/StateOfTheSource#Business">Projects &amp; People</a></li><li><a href="https://opensource.org/StateOfTheSource#Principles">Principles, Policy, &amp; Practices</a></li><li><a href="https://opensource.org/StateOfTheSource#HotTopics">&ldquo;Hot Topics&rdquo;</a></li></ul>



<p>OSI has identified several example topics for each track, to guide potential presenters in writing a proposal. The first track encompasses more OSI-specific topics, such as license proliferation and license enforcement. </p>



<p>Projects &amp; People includes topics that apply more broadly to communities and organizations &ndash; open source business models, sustainability, patents, and trademarks. The Principles, Policy, and Practices track is geared towards application and example topics include things like explaining a license to your peers, learning how to select a license for your project, and compliance, compatibility, and re-licensing.</p>



<p>As more conferences are forced to move to a virtual format, the wider open source community has the opportunity to be more engaged in an event like State of the Source. It&rsquo;s a good venue for addressing non-technical issues related to the challenges facing open source maintainers and the community. The <a href="https://forms.gle/CriSN1Ddtjb1GPbX8">call for proposals</a> ends July 16, and speakers will be announced August 25.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 09 Jul 2020 22:07:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:34;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:129:"WPTavern: Gutenberg 8.5 Adds Single Gallery Image Editing, Allows Image Uploads From External Sources, and Improves Drag and Drop";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101676";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:299:"https://wptavern.com/gutenberg-8-5-adds-single-gallery-image-editing-allows-image-uploads-from-external-sources-and-improves-drag-and-drop?utm_source=rss&utm_medium=rss&utm_campaign=gutenberg-8-5-adds-single-gallery-image-editing-allows-image-uploads-from-external-sources-and-improves-drag-and-drop";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5941:"<p class="has-drop-cap">On Wednesday, the Gutenberg team <a href="https://make.wordpress.org/core/2020/07/08/whats-new-in-gutenberg-8-july/">released version 8.5</a> of its plugin to the public. This will be the final major plugin release to make its way into the upcoming WordPress 5.5, which has a target release date of August 11. This update does not include any groundbreaking features, but it does offer several enhancements and polishes the product.</p>



<p>Gutenberg 8.5 introduces the ability to upload images from third-party sites instead of simply hotlinking them. It also improves the drag-and-drop experience with blocks, adds an edit button for images in galleries, and moves reusable blocks to their own tab in the inserter.</p>



<p>Users can also now <a href="https://github.com/WordPress/gutenberg/pull/23197">add an HTML anchor/ID</a> to all static blocks. This was a relatively minor change but provides tremendous value. No longer will users need to switch to code editing mode and risk validation issues to add a basic HTML ID.</p>



<h2>Upload External Images</h2>



<img />New upload external image button.



<p class="has-drop-cap">The largest enhancement in Gutenberg 8.5 is an improvement to inserting an image from an external URL. This update allows users to <a href="https://github.com/WordPress/gutenberg/pull/23565">upload the image to their media library</a>.</p>



<p>In past versions, users could insert an image from any URL. However, the image would remain hosted on that external site. The problem was that the end-user had no control over what happened to that image in the future. The third-party site could disappear. The site owner could remove or replace the image. The image shown on users&rsquo; sites may not have been what they intended.</p>



<p>The upload process is manual rather than automatic. After inserting an image via a URL, the editor toolbar will have a new upload icon with an arrow that points up. Users must click it to add the image to their media library.</p>



<p>The additional benefit of self-hosting the image is that the editor&rsquo;s other image tools become available. Users can resize, rotate, or crop the image, options which were added to <a href="https://wptavern.com/gutenberg-8-4-adds-image-editing-includes-multi-block-controls-and-enables-block-directory-search">Gutenberg 8.4</a>.</p>



<h2>Improved Drag and Drop</h2>



<img />Dragging multiple blocks in the editor.



<p class="has-drop-cap">I had forgotten there was even a drag-and-drop feature for the block editor. Since it was introduced, I have never used it outside of testing. It is also not available when using Top Toolbar mode, which is my go-to choice.</p>



<p>The editor now allows dragging and dropping <a href="https://github.com/WordPress/gutenberg/pull/23477">multi-block selections</a>. The dragging-and-scrolling behavior is much approved. Instead of scrolling when reaching the edge of the viewport, the window <a href="https://github.com/WordPress/gutenberg/pull/23082">scrolls almost immediately</a> as you drag.</p>



<p>Despite the improvement, I do not find the drag-and-drop feature efficient in comparison to using the up/down arrows to move a block. However, I have never been much of a fan of dragging and dropping elements. Discoverability suffers because the hand icon that appears when hovering the toolbar is not a great indicator that I can drag the block, especially given its similarity to the normal hand cursor when moving my mouse. Some sort of directional arrow icon would make more sense and distinguish it.</p>



<h2>Edit Single Gallery Images</h2>



<img />Editing an individual gallery image.



<p class="has-drop-cap">Gutenberg 8.5 features a <a href="https://github.com/WordPress/gutenberg/pull/23554">new edit button</a> on the individual images within a gallery block. This allows end-users to replace the image on the spot.</p>



<p>This is one of my favorite features to make it in before the upcoming WordPress 5.5 deadline. It has been one of those minor nit-picks for the past couple of years that I have wanted to see addressed. Overall, the team has done a solid job of making it work.</p>



<p>However, it is not quite perfect yet. The biggest issue comes after clicking the edit button. Suddenly, there is no good way to cancel the edit if I change my mind. I got around this limitation by choosing to add an image from the media library, which automatically had the previous image selected. My first thought was to click the <em>x</em> icon. However, that removes the image from the gallery. A trashcan icon makes more sense for removing the image while the <em>x</em> icon makes more sense for canceling an action.</p>



<h2>Reusable Blocks Tab</h2>



<img />New reusable blocks tab in the inserter.



<p class="has-drop-cap">Reusable blocks are no longer tucked away at the bottom of the normal blocks list in the inserter. The team has <a href="https://github.com/WordPress/gutenberg/pull/23296">moved them to their own tab</a>. The inserter is now separated into Blocks, Patterns, and Reusable tabs. This will be an entirely new experience for users when WordPress 5.5 drops because the patterns feature and its corresponding tab are also new.</p>



<p>Moving the reusable blocks to a separate tab better exposes the feature. The previous location in which they were situated at the bottom of the blocks list hid them from anyone who did not scroll to the end. For far too long, this powerful feature was not getting the exposure that it deserved. Perhaps this new location will correct that.</p>



<p>The next step would be to finally add a reusable blocks menu item that is accessible from anywhere in the WordPress admin. We will likely have to wait for the <a href="https://wptavern.com/version-1-prototype-of-the-wordpress-admin-block-directory-announced">WordPress admin block directory</a> for that to happen.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 09 Jul 2020 21:00:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:35;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"WPTavern: WordPress University Was Always Online";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101616";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:141:"https://wptavern.com/wordpress-university-was-always-online?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-university-was-always-online";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7667:"<p>Did anybody listen to Peter Thiel? In 2011, the billionaire co-founder of PayPal, dubbed &ldquo;<a href="https://bits.blogs.nytimes.com/2011/05/25/want-success-in-silicon-valley-drop-out-of-school/">contrarian investor</a>&rdquo; by the&nbsp;<em>New York Times</em>, created the Thiel Fellowship. A collection of 24 youngsters under the age of 20 were awarded $100,000 in exchange for dropping out of college to start tech companies.</p>



<p>Thiel said:</p>



<blockquote class="wp-block-quote"><p>I believe you have a bubble whenever you have something that&rsquo;s overvalued and intensely believed. In education, you have this clear price escalation without incredible improvement in the product. At the same time you have this incredible intensity of belief that this is what people have to do&hellip;It seems very similar in some ways to the housing bubble and the tech bubble.</p></blockquote>



<p>Thiel had struck a raw cultural nerve. For years, as the world reeled and slowly recovered from a financial crisis, the quality of higher education was rapidly degrading while tuition costs were steadily increasing.</p>



<p>As more colleges make the switch to online only in the response to the pandemic, and the &ldquo;college experience&rdquo; becomes a relic of a bygone era, one wonders what the future of the university might look like.</p>



<img />Peter Thiel and Elon Musk, founders of PayPal. Typical underachievers.



<p>Does a college education still improve economic outcomes in any significant way?</p>



<p>For people interested in tech careers, the answer is probably no. A college education produces minimal, if any, value. In effect, the university model, with American student loan debt amounting to $1.6 trillion, seems to do more harm than good.</p>



<p>COVID-19 has taught the world many harsh lessons and forced us all to reckon with difficult conclusions. But it has also shown us the promise and potential we might have otherwise passed without comment.</p>



<p>According to the&nbsp;<a href="https://www.bls.gov/ooh/computer-and-information-technology/web-developers.htm">U.S. Bureau of Labor Statistics</a>, the 2019 median salary for a web developer comes to $73,760 per year, or $35.46 per hour, with no former work experience in related occupations required. The bureau lists an associate&rsquo;s degree as the typical entry-level education, which, at most colleges, amounts to 5-6 semesters&mdash;considerably smaller investment than a four year degree.</p>



<p>But with readily available&mdash;and free&mdash;online courses in WordPress, HTML, CSS, PHP, and JavaScript, and the ubiquity of certification programs and &ldquo;boot camps,&rdquo; even an associate&rsquo;s degree seems like overkill. When anyone, from any background, can launch a $70,000 per year career with no more experience than a few free courses available through any public library, we have either entered an era of unparalleled prosperity&mdash;or&nbsp;<em>The Twilight Zone</em>.</p>



<p><strong>Should any web developer decide to pick up full stack development skills, or expand into general software engineering, the median salary jumps up to six figures. And this is before we get to the new frontiers of big data and &ldquo;the cloud.&rdquo;</strong></p>



<p>Instead of thinking in monotone sentiments like &ldquo;learn to code,&rdquo; let&rsquo;s imagine a generation raised under the banner of&nbsp;<em>learn how to learn.</em></p>



<p>&ldquo;The computer was a tool,&rdquo; says John Dorner, IT coordinator for a USDA grant program, and WordPress developer. Starting his career as a 4-H program leader and agricultural extension agent for the University of Georgia in the 1980s, Dorner discovered computing as a shortcut to efficiency.</p>



<p>It wasn&rsquo;t so easy to learn computers in those days. Tasks any high-schooler would consider common today required deep knowledge of how hardware and software worked together. There were no hard drives. Dorner had to employ two floppy disks, one with the operating system and application and one with his data, in order to create a spreadsheet.</p>



<p>&ldquo;Writing code without the Internet was&hellip;interesting,&rdquo; Dorner recalls. Learning PHP and MySQL from a recliner, balancing a laptop on his lap, and a book on the arm of the chair, Dorner demonstrates that the will to learn can exist outside of the classroom.</p>



<p>During our conversation over Google Meet, we talked about the alternatives available to people young and old, and from virtually any socio-economic background, who are interested in pursuing careers in IT or development.</p>



<p>Before opting for an associate&rsquo;s degree, there are shorter duration programs available. Boot camps and certification programs provide rigorous course work and leave their students with some experience and a portfolio&mdash;and no student debt.</p>



<p>Dorner says:</p>



<blockquote class="wp-block-quote"><p>Most web agencies would hire people if [they&rsquo;ve] got a certificate, a portfolio, or some way to prove [they] have the skills&hellip;That&rsquo;s more important than a full degree. Now, if you want to work at IBM, they might require a Bachelor&rsquo;s or Master&rsquo;s Degree. And there is a lot you can learn in those [full degree] programs. But somebody coming out of [community college or a boot camp] can get a good job and something starting.</p></blockquote>



<p>In addition to free courses online, Dorner suggests that WordPress can be a powerful accelerant to tackling bigger concepts in web development. The WordPress path to web mastery works in &ldquo;layers.&rdquo;</p>



<p>&ldquo;WordPress is a good starting point,&rdquo; Dorner says. &ldquo;[You] can do a lot in WordPress without knowing any code.&rdquo; Once one has achieved a level of comfort with the WordPress interface, he can start adding custom CSS rules. From there, he can try his hand at child themes. And before long, full themes and plugins.</p>



<p><strong>&ldquo;The more you hack, the more you learn.&rdquo;</strong></p>



<p>In addition to learning the WordPress interface, the learner is being exposed to deeper concepts like web servers, open source philosophy, and version control.</p>



<p>What is left for the universities to cover?</p>



<p>Everybody needs to have some general education, Dorner replies. Basic math, science, and some of the humanities help to round out a liberal education. Beyond the general education, there are life skills and experience that must happen oustide of the classroom.</p>



<p>Dorner not only works in IT, but creates jobs as well. During the hiring process, I asked, what&rsquo;s the most important criteria an applicant must meet?</p>



<blockquote class="wp-block-quote"><p>It&rsquo;s very important to be a self-directed, lifelong learner. I hired someone [recently]&hellip;[She] had the minimum requirements, but she had the initiative to learn something new. She was self-taught, went out and learned the stuff, and was able to solve the problem. That was more important to me than [the credentials].</p></blockquote>



<p>The pathways into the tech field are now baked into society itself. Every kid who learns how to Google for information is building a working knowledge of SEO. Every kid who touches an iPhone learns the fundamentals of UX. And so forth.</p>



<p>The question for the coming years is whether or not the university model will meet these kids on the journey to careers in tech with something unique to offer them, or if the kids can get there well enough on their own.</p>



<p>WordPress university was always online.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 09 Jul 2020 14:36:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Chris Maiorana";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:36;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:87:"WPTavern: Jetpack 8.7 Adds New Tweetstorm Unroll Feature, Improves Search Customization";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101628";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:217:"https://wptavern.com/jetpack-8-7-adds-new-tweetstorm-unroll-feature-improves-search-customization?utm_source=rss&utm_medium=rss&utm_campaign=jetpack-8-7-adds-new-tweetstorm-unroll-feature-improves-search-customization";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3741:"<p><a href="https://jetpack.com/2020/07/07/87-easier-reach-customers/">Jetpack 8.7</a> was released this week with an exciting new feature that allows users to &ldquo;unroll&rdquo; a tweetstorm and publish it in a post. The feature works inside the Tweet block. After a user embeds a tweet, it will automatically detect a tweetstorm and display a prompt to fetch the rest of the tweets. It functions in a similar way to the <a href="https://threadreaderapp.com/">Thread Reader app</a>, except the unrolled thread is hosted on your WordPress post.</p>



<img />



<p>Tweetstorms remain a controversial way to get a lengthy point across. Twitter users with large followings will often get wider exposure and more traction and interaction on their ideas when they share them in a series of bite-size tweets. Although tweetstorms might be better as a blog, especially for those who are consuming and sharing them, a link to a blog post doesn&rsquo;t carry the same weight as tweets for capturing Twitter users&rsquo; immediate attention.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">If your thread is more than 3 tweets it does not belong on Twitter. Don't @ me. <a href="https://twitter.com/hashtag/longlivetheblog?src=hash&ref_src=twsrc%5Etfw">#longlivetheblog</a></p>&mdash; Jon Desrosiers (@desrosj) <a href="https://twitter.com/desrosj/status/1242442659635048453?ref_src=twsrc%5Etfw">March 24, 2020</a></blockquote>
</div>



<p>You may not be able to convince people to stop posting tweetstorms, but with Jetpack 8.7 you can make sure that these tweets are available inside a blog post.</p>



<p>Gary Pendergast, who has been working on the unroll feature for several months, tweeted a demo video of how it works.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Not particularly controversial opinion: most tweetstorms should be blog posts.<br /><br />Putting my money where my mouth is: <a href="https://t.co/HFBbmQtwql">pic.twitter.com/HFBbmQtwql</a></p>&mdash; Gary (@GaryPendergast) <a href="https://twitter.com/GaryPendergast/status/1266201102241853440?ref_src=twsrc%5Etfw">May 29, 2020</a></blockquote>
</div>



<p>If you&rsquo;re looking to compose and publish tweetstorms from a blog post, with your post as the point of origin, John James Jacoby&rsquo;s <a href="https://github.com/JJJ/publishiza">Publishiza</a> plugin performs the opposite function of Jetpack&rsquo;s new unroll feature. Pendergast said he is also investigating how to add the ability to publish a tweetstorm using the block editor, which seems like an ideal use case for writing content in blocks.</p>



<p>Jetpack 8.7 also brings updates to the recently revamped <a href="https://jetpack.com/2020/04/07/re-introducing-jetpack-search-for-wordpress-sites/">Search feature</a>, adding more customization options for the search overlay:</p>



<ul><li>Choose between minimal and expanded results</li><li>Change the default sorting to options &mdash; like chronological</li><li>Hide the sort option to reduce the size of the interface</li></ul>



<p>This release also gives users easier access to their Google Photos and the free Pexels library. Access to these services was previously integrated with media library but is now also accessible via the block editor.</p>



<p>Version 8.7 introduces a WhatsApp Button block to allow visitors and customers to get in touch easily. The Jetpack team has also added more customization options to the Calendly, Mailchimp, Eventbrite, and Payment blocks. Check out the <a href="https://jetpack.com/2020/07/07/87-easier-reach-customers/">release post</a> for a full list of improvements in this update.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 08 Jul 2020 20:48:54 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:37;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:88:"WPTavern: After 11 Years, Users Will Be Able to Update Themes and Plugins via a ZIP File";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101600";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:219:"https://wptavern.com/after-11-years-users-will-be-able-to-update-themes-and-plugins-via-a-zip-file?utm_source=rss&utm_medium=rss&utm_campaign=after-11-years-users-will-be-able-to-update-themes-and-plugins-via-a-zip-file";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4102:"<p class="has-drop-cap">It has been a long road. Eleven long years. WordPress will finally allow end-users to update an installed plugin or theme by <a href="https://core.trac.wordpress.org/changeset/48390">uploading a ZIP file</a>. After over a decade, most people who had hoped to see this day have likely moved on. However, for those of us still waiting for this long sought after feature, it will land in WordPress 5.5.</p>



<p>A little patience never hurt anyone. Over the years, we have seen plugins crop up to handle this missing feature. There has been a clear and present need for it. <a href="https://wordpress.org/plugins/easy-theme-and-plugin-upgrades/">Easy Theme and Plugin Upgrades</a> by Chris Jean has over 200,000 active installs. <a href="https://wordpress.org/plugins/update-theme-and-plugins-from-zip-file/">Update Theme and Plugins from Zip File</a> by Jeff Sherk has another 20,000.  The community owes the developers of these plugins at least a small bit of thanks for taking on a job that should have long ago been a part of the core experience.</p>



<p>There was a time when this feature would have been one of the most important tools to land in WordPress. This was a time when one-click updates were not a thing. This was long before the idea of automatic theme and plugin updates, <a href="https://wptavern.com/automatic-theme-and-plugin-updates-slated-for-wordpress-5-5">a feature that is also coming in WordPress 5.5</a>, was conceived. While it is still exciting to finally get a feature that has long been on the waiting list, it is far less useful than it once was.</p>



<p>This missing feature has also likely at least partially spurred commercial theme and plugin shops to come up with custom solutions. This represents arguably one of the largest segments of users that still need the feature, at least for those using products from shops that do not provide one-click or automatic updates. </p>



<p>Updating themes via a ZIP file is a bit old-school, but there are scenarios where that is the better or preferred option for some users.</p>



<p>I routinely use a third-party plugin to handle this for various sites I am involved with where I might maintain a custom theme. This is particularly true if I don&rsquo;t have FTP or other access to the server. It is simple to upload a ZIP file in those cases.</p>



<p>Despite less of a need for this feature in 2020 than in 2009, I can still use it. Judging by the download numbers of existing plugins, a couple hundred thousand others can too.</p>



<h2>How Updating via ZIP Works</h2>



<p class="has-drop-cap">The new feature is not immediately apparent. However, it is more of a power-user feature that users will need to know about before attempting to use.</p>



<p>Updating a theme or plugin works in the same fashion as uploading a new one. By visiting the Add New plugin or theme screen in the WordPress admin and clicking the upload button, users can drop the ZIP file from their computer. After clicking the Install Now button, WordPress will direct users to a new screen that compares the currently-installed extension with the uploaded versions. Users can then choose between continuing with the installation or canceling.</p>



<ul><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li></ul>Steps to updating an existing plugin.



<p>After clicking the &ldquo;Upload Plugin&rdquo; button via the new plugin screen, the uploader currently reads, &ldquo;If you have a plugin in a .zip format, you may install it by uploading it here.&rdquo; There is no mention that users may upload a plugin that is already installed. A tweak to the language could help make it clear.</p>



<p>The comparison feature is a welcome addition, which should curb users accidentally uploading something they already have installed or rolling back when they already have a newer version active on the site. Some of the existing solutions from third-party plugins do not handle this feature, so this should make for a good upgrade.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 08 Jul 2020 20:09:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:38;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:56:"WPTavern: New Gatsby Source WordPress Plugin Now in Beta";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101091";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:157:"https://wptavern.com/new-gatsby-source-wordpress-plugin-now-in-beta?utm_source=rss&utm_medium=rss&utm_campaign=new-gatsby-source-wordpress-plugin-now-in-beta";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:4982:"<div class="wp-block-image"><img /></div>



<p>Gatsby <a href="https://www.gatsbyjs.org/blog/2020-07-07-wordpress-source-beta/">announced</a> its new source plugin (v4) for WordPress is now in beta. The plugin has been completely revamped to improve&nbsp;<a href="https://www.gatsbyjs.org/docs/glossary/headless-wordpress">headless WordPress</a>&nbsp;setups where Gatsby powers the frontend. It also integrates with <a href="https://www.gatsbyjs.com/">Gatsby Cloud</a> to provide real-time previews and incremental builds.</p>



<p>The Gatsby team has had a long journey towards creating an integration for WordPress sites that would satisfy more complex use cases. There are currently three different avenues for using Gatsby with WordPress, each with different benefits and drawbacks:</p>



<ul><li>Gatsby Source WordPress + WP REST API </li><li>Gatsby Source GraphQL + WPGraphQL </li><li>Gatsby Source WordPress (v4) + WPGraphQL</li></ul>



<p>The first approach relies on the WP REST API to fetch all data (posts, terms, media, etc) and cache the data in Gatsby&rsquo;s node cache. The second method allows developers to write GraphQL queries to fetch data from the Gatsby cache and render that data in templates.</p>



<p>According to Gatsby engineer and WPGraphQL creator Jason Bahl, the first two approaches are only adequate for basic use cases.</p>



<p>&ldquo;When you start adding more advanced functionality, such as Advanced Custom Fields Flex Fields, the WP REST API starts to fall apart and become very difficult to use in a decoupled way,&rdquo; Bahl said. &ldquo;The WP REST API has a Schema that can allow plugins and themes to extend the WP REST API and declare what type of data any given endpoint will expose. This is helpful for decoupled applications to know ahead of time what kind of data to expect.</p>



<p>&ldquo;The problem is that plugins and themes can extend the WP REST API without making use of the Schema, or by simply defining field types in the Schema as `object` or `array` Types. This means there&rsquo;s no easy way for decoupled applications, including Gatsby, to know what to expect from those fields. Gatsby relies on consistent data, and the WP REST API isn&rsquo;t consistent. The shape of the data returned from endpoints (especially when plugins extend the REST API) is unpredictable and that is problematic for decoupled applications.&rdquo;</p>



<p>WPGraphQL was created as an alternative to the WP REST API, addressing many of these pain points with its enforced Schema. This benefits decoupled tools like Gatsby because they can introspect the Schema to determine what data is available before requesting any.</p>



<p>&ldquo;So even cases such as Advanced Custom Fields Flex Fields, where the data being returned could be one of many possible Flex Field Layouts, Gatsby can still know what the possible data is before asking for the data,&rdquo; Bahl said. &ldquo;The enforced Schema of WPGraphQL allows decoupled tools to ship with confidence and eliminates entire classes of bugs.&rdquo;</p>



<p>The Gatsby Source GraphQL + WPGraphQL approach has some improvements over using the WP REST API but was limited in that it doesn&rsquo;t cache data to the Gatsby node cache. This prevents WordPress sites from being able to utilize Gatsby&rsquo;s cloud-based commercial offerings for previews and incremental builds. Bahl explained how the new Gatsby Source WordPress plugin (v4) + WPGraphQL is the &ldquo;best of both worlds:&rdquo;</p>



<blockquote class="wp-block-quote"><p>It uses WPGraphQL on the WordPress server to expose WordPress data in a Typed GraphQL Schema. Gatsby Source WordPress v4 uses GraphQL Introspection to read the Schema from the WordPress site and builds a nearly identical Schema in Gatsby. It then fetches data using WPGraphQL and caches the data in Gatsby. Users then use GraphQL to interact with the Gatsby cache and get data to render in Components in their Gatsby site.</p></blockquote>



<p>The new integration gives content creators the ability to click &ldquo;preview&rdquo; to see their changes live in the Gatsby-powered site. Publishing no longer requires a full site rebuild. It will simply push out the changes to the affected pages. Changes will be live in seconds, similar to how users expect WordPress to work without the headless integration. The new plugin, combined with Gatsby Cloud, provide a better marriage of the content creation experience with Gatsby&rsquo;s React + GraphQL developer experience, while delivering fast static pages on the frontend.</p>



<p>If you want to test the beta of the new Gatsby Source WordPress plugin, you can find it (and its dependencies) <a href="https://github.com/gatsbyjs/gatsby-source-wordpress-experimental">on GitHub</a>. The <a href="https://docs.wpgraphql.com/getting-started/install-and-activate/">WPGraphQL</a>&nbsp;and&nbsp;<a href="https://wordpress.org/plugins/wp-gatsby/">WPGatsby</a>&nbsp;plugins are also required. </p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 07 Jul 2020 22:33:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:39;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:40:"WordPress.org blog: WordPress 5.5 Beta 1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=8624";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"https://wordpress.org/news/2020/07/wordpress-5-5-beta-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:9498:"<p>WordPress 5.5 Beta 1 is now available for testing!</p>



<p><strong>This software is still in development,</strong>&nbsp;so it&#8217;s not recommended to run this version on a production site. Consider setting up a test site to play with the new version.</p>



<p>You can test the WordPress 5.5 beta in two ways:</p>



<ul><li>Try the&nbsp;<a href="https://wordpress.org/plugins/wordpress-beta-tester/">WordPress Beta Tester</a>&nbsp;plugin (choose the “bleeding edge nightlies” option)</li><li>Or&nbsp;<a href="https://wordpress.org/wordpress-5.5-beta1.zip">download the beta here&nbsp;(zip)</a>.</li></ul>



<p>The current target for final release is August 11, 2020. This is only <strong>five weeks away</strong>. Your help is needed to ensure this release is tested properly.</p>



<p>Testing for bugs is an important part of polishing the release during the beta stage and a great way to contribute. Here are some of the big changes and features to pay close attention to while testing.</p>



<h2><strong>Block editor: features and improvements</strong></h2>



<p>WordPress 5.5 will include ten releases of the Gutenberg plugin, bringing with it a long list of exciting new features. Here are just a few:</p>



<ul><li><strong>Inline image editing &#8211; </strong>Crop, rotate, and zoom photos inline right from image blocks.</li><li><strong>Block patterns</strong> &#8211; Building elaborate pages can be a breeze with new block patterns. Several are included by default.</li><li><strong>Device previews</strong> &#8211; See how your content will look to users on many different screen sizes. </li><li><strong>End block overwhelm</strong>. The new block inserter panel displays streamlined categories and collections. As a bonus, it supports patterns and integrates with the new block directory right out of the box.</li><li><strong>Discover, install, and insert third-party blocks</strong> from your editor using the new block directory.</li><li>A better, <strong>smoother editing experience </strong>with:&nbsp;<ul><li>Refined drag-and-drop</li><li>Block movers that you can see and grab</li><li>Parent block selection</li><li>Contextual focus highlights</li><li>Multi-select formatting lets you change a bunch of blocks at once&nbsp;</li><li>Ability to copy and relocate blocks easily</li><li>And, better performance</li></ul></li><li><strong>An expanded design toolset for themes.</strong></li><li>Now <strong>add backgrounds and gradients</strong> to more kinds of blocks, like groups, columns, media &amp; text</li><li>And <strong>support for more types of measurements</strong> &#8212; not just pixels. Choose ems, rems, percentages, vh, vw, and more! Plus, adjust line heights while typing, turning writing and typesetting into the seamless act.</li></ul>



<p>In all, WordPress 5.5 brings more than 1,500 useful improvements to the block editor experience.&nbsp;</p>



<p>To see all of the features for each release in detail check out the release posts: <a href="https://github.com/WordPress/gutenberg/releases/tag/v7.5.0">7.5</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v7.6.0">7.6</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v7.7.0">7.7</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v7.8.0">7.8</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v7.9.0">7.9</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v8.0.0">8.0</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v8.1.0">8.1</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v8.2.0">8.2</a>, <a href="https://github.com/WordPress/gutenberg/releases/tag/v8.3.0">8.3</a>, and <a href="https://github.com/WordPress/gutenberg/releases/tag/v8.4.0">8.4</a>.</p>



<h2><strong>Wait! There’s more!</strong></h2>



<h3><strong>XML sitemaps</strong></h3>



<p><a href="https://make.wordpress.org/core/2020/06/10/merge-announcement-extensible-core-sitemaps/">XML Sitemaps are now included in WordPress</a> and enabled by default. Sitemaps are essential to search engines discovering the content on your website. Your site&#8217;s home page, posts, pages, custom post types, and more will be included to improve your site&#8217;s visibility.</p>



<h3><strong>Auto-updates for plugins and themes</strong></h3>



<p><a href="https://make.wordpress.org/core/tag/core-auto-updates/">WordPress 5.5 also brings auto-updates for plugins and themes</a>. Easily control which plugins and themes keep themselves up to date on their own. It&#8217;s always recommended that you run the latest versions of all plugins and themes. The addition of this feature makes that easier than ever!</p>



<h3><strong>Lazy-loading images</strong></h3>



<p><a href="https://make.wordpress.org/core/2020/04/08/lazy-loading-of-images-is-in-core/">WordPress 5.5 will include native support for lazy-loaded images</a> utilizing new browser standards. With lazy-loading, images will not be sent to users until they approach the viewport. This saves bandwidth for everyone (users, hosts, ISPs), makes it easier for those with slower internet speeds to browse the web, saves electricity, and more.</p>



<h3><strong>Better accessibility</strong></h3>



<p>With every release, WordPress works hard to improve accessibility. Version 5.5 is no different and packs a parcel of accessibility fixes and enhancements. Take a look:</p>



<ul><li>List tables now come with extensive, alternate view modes.</li><li>Link-list widgets can now be converted to HTML5 navigation blocks.</li><li>Copying links in media screens and modal dialogs can now be done with a simple click of a button.</li><li>Disabled buttons now actually look disabled.</li><li>Meta boxes can now be moved with the keyboard.</li><li>A custom logo on the front page no longer links to the front page.</li><li>Assistive devices can now see status messages in the Image Editor.</li><li>The shake animation indicating a login failure now respects the user&#8217;s choices in the <code>prefers-reduced-motion</code> media query.</li><li>Redundant <code>Error:</code> prefixes have been removed from error notices.</li></ul>



<h2><strong>Miscellaneous Changes</strong></h2>



<ul><li>Plugins and themes can now be updated by uploading a ZIP file.</li><li><a href="https://make.wordpress.org/core/2020/06/26/wordpress-5-5-better-fine-grained-control-of-redirect_guess_404_permalink/">More finely grained control of redirect_guess_404_permalink()</a>.</li><li><a href="https://make.wordpress.org/core/2020/07/01/external-library-updates-in-wordpress-5-5-call-for-testing/">Several packaged external libraries have been updated</a>, including PHPMailer, SimplePie, Twemoji, Masonry, and more!</li></ul>



<p>Keep your eyes on the <a href="https://make.wordpress.org/core/">Make WordPress Core blog</a> for <a href="https://make.wordpress.org/core/tag/5-5+dev-notes/">5.5-related developer notes</a> in the coming weeks, breaking down these and other changes in greater detail.</p>



<p>So far, contributors have fixed more than <a href="https://core.trac.wordpress.org/query?status=closed&milestone=5.5&group=component&max=500&col=id&col=summary&col=owner&col=type&col=priority&col=component&col=version&order=priority">360 tickets in WordPress 5.5</a>, including <a href="https://core.trac.wordpress.org/query?status=closed&status=reopened&type=enhancement&milestone=5.5&or&status=closed&status=reopened&type=feature+request&milestone=5.5&col=id&col=summary&col=type&col=status&col=milestone&col=owner&col=priority&col=changetime&col=keywords&order=changetime">157 new features and enhancements</a>, and more bug fixes are on the way.</p>



<h2><strong>How You Can Help</strong></h2>



<p>Do you speak a language other than English? <a href="https://translate.wordpress.org/projects/wp/dev/">Help translate WordPress into more than 100 languages</a>!</p>



<p>If you think you’ve found a bug, please post to the <a href="https://wordpress.org/support/forum/alphabeta/">Alpha/Beta area</a> in the support forums. We would love to hear from you! If you’re comfortable writing a reproducible bug report, <a href="https://core.trac.wordpress.org/newticket">file one on WordPress Trac</a>. That’s also where you can find a list of <a href="https://core.trac.wordpress.org/tickets/major">known bugs</a>.</p>



<p class="has-small-font-size"><em>Props to <a href="https://profiles.wordpress.org/webcommsat/" class="mention"><span class="mentions-prefix">@</span>webcommsat</a>, <a href="https://profiles.wordpress.org/yvettesonneveld/" class="mention"><span class="mentions-prefix">@</span>yvettesonneveld</a>, <a href="https://profiles.wordpress.org/estelaris/" class="mention"><span class="mentions-prefix">@</span>estelaris</a>, and <a href="https://profiles.wordpress.org/marybaum/" class="mention"><span class="mentions-prefix">@</span>marybaum</a> for compiling/writing this post, <a href="https://profiles.wordpress.org/davidbaumwald/" class="mention"><span class="mentions-prefix">@</span>davidbaumwald</a> for editing/proof reading, and <a href="https://profiles.wordpress.org/cbringmann/" class="mention"><span class="mentions-prefix">@</span>cbringmann</a>, <a href="https://profiles.wordpress.org/desrosj/" class="mention"><span class="mentions-prefix">@</span>desrosj</a>, and <a href="https://profiles.wordpress.org/andreamiddleton/" class="mention"><span class="mentions-prefix">@</span>andreamiddleton</a> for final review.</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 07 Jul 2020 21:49:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Jake Spurlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:40;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:50:"WPTavern: Goodbye, ManageWP.org; Hello, WP Content";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101545";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:139:"https://wptavern.com/goodbye-managewp-org-hello-wp-content?utm_source=rss&utm_medium=rss&utm_campaign=goodbye-managewp-org-hello-wp-content";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:3983:"<p class="has-drop-cap">Yesterday, Iain Poulson and Ashley Rich launched community-curated, news-sharing site <a href="https://wpcontent.io/">WP Content</a>. The launch comes on the heels of <a href="https://managewp.org/">ManageWP.org</a> shutting down its own news-sharing service and the WordPress community losing out on a valuable resource.</p>



<p>Both Poulson and Rich are based in the UK and work for <a href="https://deliciousbrains.com/">Delicious Brains</a>, a development company that focuses on building products for WordPress. Their new venture was met with enthusiasm when Poulson first <a href="https://twitter.com/polevaultweb/status/1280061239440408576">announced it on Twitter</a>.</p>



<img />Homepage of WPContent.io.



<p>Long before I was a writer for WP Tavern and needed to keep an eye out for the latest news, ManageWP.org was one of my go-to sources for catching up with everything happening in the WordPress community. There is always so much going on that even the Tavern cannot stay on top of it all. ManageWP.org helped me become a voracious reader of ideas, tutorials, and other news within the industry. For that, I am certain I owe the team a debt that cannot be repaid.</p>



<p>After shutting the doors, they left us with a message on the site that read, &ldquo;After many years of serving the WordPress community, we&rsquo;ve made the difficult decision to shut down ManageWP.org. Several factors led us here, but it ultimately came down to the team being unable to give ManageWP.org the attention it deserves.&rdquo;</p>



<p>It is only the news-sharing site at ManageWP.org that is shutting down.  The ManageWP.com company and service are still alive and well.</p>



<p><a href="https://wptavern.com/managewp-launches-community-curated-wordpress-news-site">ManageWP.org launched</a> when WordPress held a mere 20% of the web back in 2013. <a href="https://wptavern.com/godaddy-acquires-wordpress-site-management-service-managewp">GoDaddy acquired the ManageWP company</a> in 2016 but allowed it to operate independently, including the news-sharing site. In many ways, ManageWP.org felt as much a part of the identity of the WordPress community as our site. For seven years, users have shared articles, upvoted their favorites, and found a legitimate source to stay informed on a wide range of topics around WordPress.</p>



<p>&ldquo;Thank you to everyone who shared inspiring stories, useful resources, and special announcements with us,&rdquo; read the final message on the site. &ldquo;It&rsquo;s been a treat.&rdquo;</p>



<p>While many of us were disappointed to see the site shut down, sometimes it is time for something new. We can say goodbye to a great service and make room for someone else to take up the mantle. So, goodbye, ManageWP.org. Thanks for all the good years. And, welcome, WP Content.</p>



<p>&ldquo;After @managewp closed down their community news site, we felt there should be a place where the #WordPress community can submit articles and up vote them,&rdquo; <a href="https://twitter.com/wpcontent_io/status/1280061061199204352">tweeted the WP Content team</a>.</p>



<p>The newly-built WP Content site is simple to use. It works similarly to other sharing sites such as Reddit. Users can sign up for an account to share stories themselves or upvote other stories. All visitors are free to follow through and read stories without signing up.</p>



<p>The front page of the site shares the currently trending and most recent stories. The site also breaks stories down into the following categories:</p>



<ul><li>Business</li><li>Community</li><li>Development</li><li>Plugins</li><li>Security</li><li>Tutorials</li></ul>



<p>I welcome the new venture and am glad to see someone filling in what was quickly becoming a missing piece of our community. With luck, WP Content will serve as a great resource for many years to come. The team has some big shoes to fill, but they are off to a great start.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 07 Jul 2020 18:31:22 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:41;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:93:"WPTavern: WordCamp Attendance Badges Could Be a Good Thing, but That’s the Wrong Discussion";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101557";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:223:"https://wptavern.com/wordcamp-attendance-badges-could-be-a-good-thing-but-thats-the-wrong-discussion?utm_source=rss&utm_medium=rss&utm_campaign=wordcamp-attendance-badges-could-be-a-good-thing-but-thats-the-wrong-discussion";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7030:"<img />WordPress  profile badges.



<p class="has-drop-cap">On July 3, Timi Wahalahti <a href="https://make.wordpress.org/community/2020/07/03/proposal-recognition-for-event-volunteers-and-attendees-in-wordpress-org-profile/">opened a discussion on the Community WordPress blog</a> on whether WordCamp volunteers, WordCamp attendees, or Meetup attendees should be awarded a WordPress.org profile badge. The discussion stemmed from a nearly <a href="https://meta.trac.wordpress.org/ticket/3878">two-year-old Meta ticket</a> that was recently resurfaced.</p>



<p>The general consensus from the comments on the post seems to be that volunteers should receive badges because they are making direct contributions to the community. Most argue that merely attending an event is not badge-worthy. There are also some technical concerns. However, they should not be a real issue considering we are a community of programmers and problem solvers.</p>



<p>I see the rationale behind not giving badges to attendees. In one way, it feels like it diminishes the badges that others have earned, quite often, through hours of valuable time freely given back to the project.</p>



<p>I am taking a wild guess here and will say that most people would agree that direct, measurable contributions should be rewarded. Whether it is contributing a patch to core, reviewing code as part of the Themes Team, or handing out sandwiches at your local WordCamp lunch line, you should be recognized for giving back to the community.</p>



<p><em>WordCamp attendance badges would become the participation trophies of the WordPress world.</em></p>



<p>I get the argument. I do. When I first read the community post, my gut reaction was to make that same argument.</p>



<p>In some parts of American culture, at least, <em>participation trophies</em> are often looked upon as something to be ashamed of &mdash; <em>if you don&rsquo;t earn MVP, it&rsquo;s not a real trophy</em>. I have seen the culture change, seemingly overnight, in my local community. Fathers will not allow their sons to accept a trophy for merely being on the football team (anyone deserves a trophy for making it through training camp in Alabama&rsquo;s sweltering August heat). I watch as community members &mdash; grown adults &mdash; tear down others&rsquo; kids on Facebook over the same idea.</p>



<p>The discussion on WordCamp attendance badges feels much the same. However, the argument is valid only because that is how the system is set up. It was created to award based on merit. The awards go to those who put in the time and effort, typically over the long haul.</p>



<p>On the surface, that feels like a good system. However, other systems have benefits that perhaps our community has been overlooking, particularly those that gamify participation. Currently, WordPress profile badges are not being utilized to their full potential. The missing piece is that we are not encouraging more participation. We are not helping the first-time user level up and earn more badges/awards.</p>



<img />NaNoWriMo writing and personal achievement badges.



<p class="has-drop-cap">In 2018, I successfully completed <a href="https://nanowrimo.org/">National Novel Writing Month</a> (NaNoWriMo). It is an event where thousands of people go through the insane process of writing a 50,000-word novel in 30 days. One of the things that pushed me through the month, aside from sheer willpower and encouragement from family and friends, was the encouragement from the NaNoWriMo website itself.</p>



<p>The website has two categories of badges. The first category is its writing badges. These badges are awarded based on actually doing work. They are also awarded in stages. Write for a two-day streak. Earn a badge. Surpass 5,000 words. Earn a badge. Finish the month-long challenge. Earn a badge. Throughout the process of NaNoWriMo, earning these writing badges was a big motivator toward keeping the dream of writing a novel alive. If I wasn&rsquo;t motivated to write on a particular day, I could look at the next badge I would earn by just putting pen to paper for another half hour or so.</p>



<p>The thing about these writing badges that was so important was not that they gave me any bragging rights. The badges were not for showing other people how awesome I was. They were deeply personal. They were things that helped motivate me to continue on. <em>OK, I did brag about them a little bit.</em></p>



<p>At the end of the day, these achievement-based badges were not about other people. They made me feel good about myself, and that is what mattered.</p>



<p>NaNoWriMo&rsquo;s second category was for personal badges. They were not awarded for any achievement. Every user on the site could pick and choose the badges they wanted. They were reflections of the person. It told others a little something about you.</p>



<p>One of my favorite badges was the &ldquo;pantser&rdquo; badge. It let people in the NaNoWriMo community know that I was writing without a novel outline or any real plan &mdash; literally by the seat of my pants. Others would choose the &ldquo;planner&rdquo; or even the combo &ldquo;plantser&rdquo; badge. And, the site had several other badges that simply added to the fun.</p>



<p>We do not have to think about badges as something that must be awarded based on hard work. Sure, we should have those &ldquo;gold level&rdquo; badges that are earned through direct contributions and being on a particular team. Joining the Documentation Team or submitting a plugin to the official plugin directory is a big deal. Those achievements should be shown on your profile. However, they are not the only achievements that matter.</p>



<p>Remember that badges are sometimes personal. Being awarded for even the smallest of things can help build the confidence that some people need to do that second small thing.</p>



<p>Simple badges for asking or answering your first support forum question could be a great motivator to become more involved. Attending a WordCamp for the first time? Get a badge. That might help motivate you to earn the five-time WordCamp attendee badge next.</p>



<p>I would even love to see badges for individual WordCamps. How cool would it be for someone to earn a badge for attending a WordCamp in every corner of the world? Or just on one continent?</p>



<p>There is so much lost potential with the current badge system. We are having the wrong discussion. Whether someone should earn a badge for attending a WordCamp is too narrow of a focus. Let&rsquo;s start looking at how we can gamify participation in the WordPress community and use that system to get more people involved.</p>



<p>If we maintain the current system of giving badges only for contributions and teams, yeah, WordCamp volunteers should get those. Attendees have done nothing to earn a badge in that system. That seems like an easy call to make and not worth much discussion. But, since we are here, let&rsquo;s rethink this whole thing.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 06 Jul 2020 18:42:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:42;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:86:"WPTavern: WordProof Wins €1 Million Grant to Advance Blockchain Timestamping Concept";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101541";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:213:"https://wptavern.com/wordproof-wins-e1-million-grant-to-advance-blockchain-timestamping-concept?utm_source=rss&utm_medium=rss&utm_campaign=wordproof-wins-e1-million-grant-to-advance-blockchain-timestamping-concept";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2423:"<p><a href="https://wordproof.io/">WordProof</a>, the company behind the <a rel="noreferrer noopener" href="https://wordpress.org/plugins/wordproof-timestamp/" target="_blank">WordProof Timestamp</a>&nbsp;plugin for WordPress, has received a &euro;1 million grant from the European Commission as the reward for winning a competition called &ldquo;<a href="https://ec.europa.eu/research/eic/index.cfm?pg=prizes_blockchains">Blockchains for Social Good</a>.&rdquo; The Dutch startup beat 175 other participants from around Europe.</p>



<p>The competition was designed to reward developers&rsquo; efforts in exploring decentralized applications of blockchains for social innovation. WordProof was one of five finalists selected to receive &euro;1 million, after submitting its <a href="https://wordproof.io/timestamp-ecosystem/">Timestamp Ecosystem</a> concept, which seeks to increase transparency and accountability by proving authenticity of content on the web. In addition to its WordPress plugin, the timestamping ecosystem aims to provide solutions for other content management platforms, e-commerce, and social media. </p>



<p>WordProof founder Sebastiaan van der Lans said the grant is evidence of the company gaining traction with governments and universities.</p>



<p>&ldquo;With the recognition and financial support from Europe, we can roll out the Timestamp Ecosystem at a higher pace and make WordProof grow even faster as a company,&rdquo; Van der Lans said. &ldquo;This will enable Europe to define the standard for a reliable Internet for consumers and organisations.&rdquo; </p>



<p>Van der Lans said WordProof is still very much &ldquo;a WordPress-focused company&rdquo; and plans to use the funds to extend its timestamping plugin to work with WooCommerce. They also plan to begin working with major publishers and WooCommerce shops to integrate timestamping solutions. The company began working with Yoast two months ago on deeply integrating with Schema.org to provide <a href="https://wordproof.io/features/structured-data-for-seo/">structured data for SEO</a>.</p>



<p>In the coming weeks, van der Lans said the company plans to announce &ldquo;a significant investment from the WordPress space.&rdquo; WordProof is currently focused on advocacy with/at the European Commission to make timestamping an open source standard that would be independent from the control of any single company.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 06 Jul 2020 15:32:48 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:43;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:62:"Akismet: Akismet Blocks Five Hundred Billion Spam and Counting";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"http://blog.akismet.com/?p=2075";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:79:"https://blog.akismet.com/2020/07/06/akismet-five-hundred-billion-with-a-b-spam/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1165:"<p><img /></p>
<p>It was happening while you ate dinner. While you were at work. While you were on vacation, going for a walk, or daydreaming. It was certainly happening while you were sleeping. All this time — for nearly 15 years — Akismet has been catching and blocking spam from appearing on websites and forums the world over, and Akismet just reached an important milestone: over 500 billion pieces of spam blocked, <a href="https://akismet.com/#countUp">and counting.</a></p>
<h2>Saving countless hours for you</h2>
<p>Think about that number: five hundred billion spam comments blocked — and not just on WordPress sites! Akismet has been ensnaring spam on other platforms including Drupal, Joomla, <a href="https://akismet.com/development/api/#use-a-library">and more</a>, saving countless hours of moderation time and frustration for millions of people around the world.</p>
<h2>To the future!</h2>
<p>If you need spam protection for your website or forum, Akismet is here to help. Free up time spent tweezing spam comments and allow Akismet to <a href="https://akismet.com/plans/">catch and block it for you</a>. Here’s to the next 500 billion!</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 06 Jul 2020 15:12:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:17:"Christopher Finke";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:44;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:84:"WPTavern: New Block-based Navigation and Widgets Screens Sidelined for WordPress 5.5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101460";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:213:"https://wptavern.com/new-block-based-navigation-and-widgets-screens-sidelined-for-wordpress-5-5?utm_source=rss&utm_medium=rss&utm_campaign=new-block-based-navigation-and-widgets-screens-sidelined-for-wordpress-5-5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2698:"<p>The new navigation block and navigation and widget screens that were originally planned for WordPress 5.5 have been <a href="https://make.wordpress.org/core/2020/07/02/editor-features-for-wordpress-5-5-update/">pushed back</a> to the next release. These projects are currently available in the&nbsp;<a href="https://make.wordpress.org/core/files/2020/05/experiments.png">Gutenberg plugin</a>&nbsp;<a href="https://make.wordpress.org/core/files/2020/05/experiments.png">experiments screen</a> but are not yet ready to land in core. </p>



<p>Converting the widget-editing areas and updating the widgets UI to use the block editor is a project that has been under development since <a href="https://github.com/WordPress/gutenberg/issues/13204">January 2019</a>. The issue tracking the project and the dedicated project board seemed to have stalled out for the time being, so <a href="https://github.com/WordPress/gutenberg/issues/13204#issuecomment-647171426">core editor contributors recommended removing it</a> from the priority features for 5.5.</p>



<p>Similarly, the navigation block and screen have several dozen outstanding <a href="https://github.com/WordPress/gutenberg/labels/%5BBlock%5D%20Navigation">issues</a> and discussions that need more time before shipping.</p>



<p>&ldquo;We&rsquo;re still missing a few key components: drag and drop in the block and in the sidebar, a couple of PRs that lag and are important for feature parity (<a href="https://github.com/WordPress/gutenberg/pull/22600">#22600</a>,&nbsp;<a href="https://github.com/WordPress/gutenberg/pull/22697">#22697</a>) and the ongoing work to support more block types in Navigation,&rdquo; WordPress contributor Andrei Draganescu <a href="https://github.com/WordPress/gutenberg/issues/22931#issuecomment-645209108">said</a> regarding the remaining items necessary to ship the navigation screen.</p>



<p>&ldquo;I believe we&rsquo;re in a place where a Gutenberg release after 5.5 will include this new screen, but maybe in the next two weeks some acceleration will occur and prove me wrong.</p>



<p>&ldquo;I believe that it is wiser that this lands as a part of the plugin first, gets some feedback, and then is shipped into core.&rdquo;</p>



<p>Despite the navigation and widgets screens getting removed from the 5.5 milestone, this release is set to deliver an impressive array of new features for the block editor, including block patterns, block directory search, a new block inserter panel, expanded design tools, and improvements to block movement capabilities.  <a href="https://make.wordpress.org/core/5-5/">Beta 1 is expected July 7</a> and the target date for the official release is August 11.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 03 Jul 2020 20:54:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:45;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:78:"WPTavern: Google Launches Beta of AMP-Powered Web Stories Plugin for WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101451";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:201:"https://wptavern.com/google-launches-beta-of-amp-powered-web-stories-plugin-for-wordpress?utm_source=rss&utm_medium=rss&utm_campaign=google-launches-beta-of-amp-powered-web-stories-plugin-for-wordpress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:5921:"<p class="has-drop-cap">Google announced a public beta of its new Web Stories WordPress plugin this week. The plugin&rsquo;s description aptly reads, &ldquo;Visual storytelling for WordPress.&rdquo; It is essentially a custom editor for creating AMP-powered stories within WordPress.</p>



<p>Users can download the beta plugin directly from the <a href="https://google.github.io/web-stories-wp/beta/">Web Stories beta page</a>. Developers who want to contribute or take a look under the hood can do so from its <a href="https://github.com/google/web-stories-wp">GitHub repository</a>.</p>



<p><a href="https://amp.dev/about/stories/">Web Stories</a> is a story format born out of Google&rsquo;s AMP Project. The goal is to provide visually-rich stories through a mobile-focused format. Stories are used to deliver news and other information in chunks that site visitors can quickly tap through and consume.</p>



<p>With far more users browsing the web via a mobile device in 2020 than just a few short years ago, many no longer engage with content in the same way. People are more likely to quickly browse a lot of content but not be willing to dive quite as deep into the details. The Web Stories format focuses on that user experience by creating bite-sized pieces of content that users can move through without much focus &mdash; <em>whether that is a good thing for society is up for debate</em>.</p>



<ul><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li><li class="blocks-gallery-item"><img /></li></ul>Screenshots from a Story template.



<p>The story format also typically makes more use of visual information than it does text. Each <em>page</em> of a story tends to use images or videos, often in the background with text overlaid, to grab the viewer&rsquo;s attention. However, there are no hard rules on what content a story page can present.</p>



<p>The Web Stories plugin is slated for an official release sometime late this summer. The team is working toward stabilizing the product and focusing on bug and performance fixes, according to the beta launch page.</p>



<p>In late March, the development team removed support for Stories from version 1.5 of the AMP plugin. They were prepping for the release of the new Web Stories plugin. The Stories feature was listed as a beta feature in the AMP plugin before removal.</p>



<p>Stories support was originally <a href="https://wptavern.com/wordpress-amp-plugin-version-1-2-introduces-gutenberg-powered-amp-stories-editor">added to the official AMP plugin</a> in June 2019 as part of its version 1.2 release. It was a direct integration with the WordPress block editor. However, it has since changed drastically. The development team has created a custom system outside of WordPress&rsquo;s primary editor that offers a true what-you-see-is-what-you-get experience.</p>



<h2>Getting to Know the Web Stories Plugin</h2>



<p class="has-drop-cap">Web Stories for WordPress takes an almost completely custom approach to creating content with WordPress. It has its own drag-and-drop editor, a dashboard for editing stories and finding templates, and custom URLs.</p>



<p>The development team decided to register a custom &ldquo;web story&rdquo; post type as the foundation of the plugin. One benefit of this system is that stories can live on their individual pages on the site. This also allows site visitors to subscribe to stories via a feed reader or third-party email system. Instead of pigeon-holing everything into a custom block, the team gained full freedom over the experience by creating a custom story-publishing process on top of the post type system.</p>



<p>In many ways, the editor feels much like working with a simplified version of a photo editor such as Photoshop or GIMP. In the center of the screen is the canvas. Users can work on the current story page, create new pages, or use the arrows to flip through each.</p>



<img />Creating a story with the Web Stories editor in WordPress.



<p>Two boxes are aligned to the right of the screen. The top box holds the Design and Document tabs. The Design tab allows users to edit options for the currently-selected layer, and the Document tab holds the configuration options for publishing. The Layers box sits below. It lets users quickly select a layer to edit.</p>



<p>On the left side of the screen, users have quick access to their media library. Because stories primarily use visually-driven content, it makes sense to keep media a simple mouse movement away.</p>



<p>The only major problem that I ran into when playing around with the story editor was figuring out how to delete a layer. I eventually realized that I could drag a layer off the canvas and it would disappear. That was probably the least intuitive part of the experience.</p>



<p>Web Stories comes with its own Dashboard screen in the admin. While the normal &ldquo;All Stories&rdquo; screen created by the post type exists, the Dashboard provides a visual list of created stories that users can scroll through.</p>



<img />Web Stories Dashboard screen.



<p>For users who are short on ideas or simply need a jumping-off point, the plugin currently supplies eight starter templates to choose from:</p>



<ul><li>Beauty</li><li>Cooking</li><li>DIY</li><li>Entertainment</li><li>Fashion</li><li>Fitness</li><li>Travel</li><li>Wellbeing</li></ul>



<p>The templates offer ample variety to begin learning the system by customizing the various story pages. The editor should be intuitive enough for most users to hit the ground running, but the templates make for some quick inspiration.</p>



<p>Overall, Web Stories looks like it will land with a splash late this summer. It is a showcase of what is possible when you put together a team of top-notch developers and empower them to build something amazing.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 03 Jul 2020 18:56:25 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:46;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:88:"WPTavern: WordPress Contributors Seek Sponsorship for Improving Gutenberg Developer Docs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101393";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:221:"https://wptavern.com/wordpress-contributors-seek-sponsorship-for-improving-gutenberg-developer-docs?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-contributors-seek-sponsorship-for-improving-gutenberg-developer-docs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:9083:"<p>WordPress developers <a href="https://developerka.org/">Milana Cap</a> and <a href="https://jonathanbossenger.com/">Jonathan Bossenger</a> are starting a fundraiser for improving Gutenberg developer documentation. The conversation began yesterday when Cap tweeted about how documentation is often overlooked when companies hire full-time contributors to work on WordPress.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">I wish someone pay people to work on Gutenberg Docs. All devs who understand Gutenberg are working on building it and no one has the time to document it. <br /><br />On the other hand, Gutenberg and React are so foreign to WordPress PHP devs that no one is being able to learn it. <a href="https://t.co/iFmpd24TwH">https://t.co/iFmpd24TwH</a></p>&mdash; Milana Cap (@DjevaLoperka) <a href="https://twitter.com/DjevaLoperka/status/1277966252623794179?ref_src=twsrc%5Etfw">June 30, 2020</a></blockquote>
</div>



<p>&ldquo;When your community is unable to learn your software then you have no contributors,&rdquo; Cap said. &ldquo;Documentation and tutorials are far more important for Open Source Software projects than people realize.&rdquo;</p>



<p>The first time Cap began asking for Gutenberg documentation was at the Community Summit in Paris, 2017. She has been trying to direct the community&rsquo;s attention to it since then. </p>



<p>&ldquo;There are many holes in block editor documentation for developers but the most obvious one is how to start,&rdquo; Cap said. &ldquo;The beginning of <a href="https://developer.wordpress.org/block-editor/developers/">documentation for developers</a> doesn&rsquo;t say anything about getting started. &ldquo;It says only what you can do with a block but not _how_. Junior developers, PHP-only developers and anyone for whom is that documentation meant, doesn&rsquo;t know how a block&rsquo;s code looks, where to put it, how to include it, etc, let alone how to build a custom block with custom components and settings.&rdquo;</p>



<p>Part of the challenge of documenting the block editor is that it is under active development. Enhancements and refinements are constantly pushed out to the Gutenberg plugin and keeping track of what is or is not currently available in core is not always easy. As WordPress is imminently <a href="https://wptavern.com/gutenberg-8-4-adds-image-editing-includes-multi-block-controls-and-enables-block-directory-search">introducing block directory search</a>, it is a good time to formalize block creation documentation.</p>



<p>&ldquo;Code examples are alarmingly missing all over docs,&rdquo; Cap said. &ldquo;The most basic examples exist but how to actually build something usable is missing. So, on this first page we are sent to a tutorial but that tutorial is not optimized for people who have never built a block before. Following it, I have and will fail to build the block.&rdquo;</p>



<p>Marcus Kazmierczak and a team of documentation contributors are attempting to rebuild the tutorial in the official block editor handbook. A GitHub <a href="https://github.com/WordPress/gutenberg/issues/22151">issue</a> focused on addressing gaps in the current developer documentation is home to an active discussion about the best way to rewrite the docs for people who are new to block development.</p>



<p>&ldquo;This is a very good start but there&rsquo;s still a lot of work to be done,&rdquo; Cap said. &ldquo;Complete documentation is written by people who know and understand React and Gutenberg but are &lsquo;cursed with knowledge.&rsquo; They don&rsquo;t have much time to spend on understanding just how much others don&rsquo;t know and in what detail documentation should be written. To be honest, I don&rsquo;t think they should spend their time on that. We have a Documentation Team and we are willing to jump in but some sort of bridge is necessary.&rdquo;</p>



<h2>The Problem with Gutenberg Developer Documentation: It&rsquo;s Not Friendly for Newcomers</h2>



<p>&ldquo;The &lsquo;problem&rsquo; as I see it with the block editor documentation is that, unlike other WordPress documentation, it is written for experienced JavaScript developers, and not aimed at beginners,&rdquo; Bossenger said. &ldquo;I should also point out, this is by no means a shot at the folks who have put the current documentation together, and I appreciate any and all work they have done so far, it&rsquo;s just in serious need of a review and some refinement.&rdquo;</p>



<p>Bossenger said in the past WordPress made it very easy for anyone with a limited amount of PHP knowledge to quickly build a plugin or theme using action and filter hooks. It was easy to look at the code and understand what it was supposed to do.</p>



<p>&ldquo;Modern JavaScript, and specifically React, is a very different kettle of fish,&rdquo; Bossenger said. &ldquo;It requires a deeper level of knowledge of how React works, including new terminology and practices. Modern JavaScript can also be very confusing, especially if this is the first time you&rsquo;re seeing things like arrow functions, or less verbose if statements.</p>



<p>&ldquo;If the closest you have come to working with JavaScript in WordPress has been using jQuery, switching to React based Gutenberg development still requires some learning on your part.&rdquo;</p>



<p>After taking two courses before he could build anything for the editor, one on React and one on Gutenberg, Bossenger said the current Block Editor handbook is not written for developers with no experience in React and modern JavaScript. He believes it needs a restructuring to better explain new concepts and fit a pattern that is easier for a newcomer to consume. He highlighted the <a href="https://developer.wordpress.org/plugins/">Plugin Developer handbook</a> as an example where the chapters follow a structure and use terminology that is more like a text book, slowly introducing the reader to new concepts.</p>



<p>&ldquo;I would argue that it would be quite possible for someone with no plugin or PHP knowledge, armed with this handbook and Google, to build a simple plugin to meet their specific requirements quite quickly,&rdquo; Bossenger said. &ldquo;Currently the block editor handbook is not conducive to this.&rdquo;</p>



<p>Bossenger is not alone in his opinion of the current documentation. Peter Tasker at Delicious Brains recently published a tutorial on <a href="https://deliciousbrains.com/custom-gutenberg-block/">creating a custom Gutenberg block</a>. Even after working with React full-time for the past year, he found the official block editor docs to be &ldquo;kind of all over the place&rdquo; and difficult to parse.</p>



<p>After Cap commented about the lack of companies sponsoring full-time work on documentation, Bossenger tested the waters with a tweet asking if the two of them might be able to raise funds for improving Gutenberg docs.</p>



<div class="wp-block-embed__wrapper">
<blockquote class="twitter-tweet"><p lang="en" dir="ltr">Anyone willing to sponsor <a href="https://twitter.com/DjevaLoperka?ref_src=twsrc%5Etfw">@DjevaLoperka</a> or myself improving the Gutenberg docs? Please RT for reach. <a href="https://t.co/UzYlFIfNZ8">https://t.co/UzYlFIfNZ8</a></p>&mdash; Jonathan Bossenger (@jon_bossenger) <a href="https://twitter.com/jon_bossenger/status/1278004589334323200?ref_src=twsrc%5Etfw">June 30, 2020</a></blockquote>
</div>



<p>&ldquo;Just the same as Block Editor Team (and any other Make team), the Documentation Team is understaffed,&rdquo; Cap said. &ldquo;We can&rsquo;t afford to dedicate few members to first learn and then write documentation on developing with block editor. This is the main reason for my tweet. You&rsquo;ll see sponsored contributors all over core but not in documentation and I&rsquo;ll dare to say that both are equally important.&rdquo;</p>



<p>Before launching their fundraiser, Cap and Bossenger plan to go through the existing documentation, pinpoint obvious holes, and identify questions that remain unanswered for those who are new to developing for the block editor.  </p>



<p>&ldquo;Once we have a plan we can predict how much time is needed for each part,&rdquo; she said. &ldquo;With this plan, we will go in search for sponsors. I think there will be an option to donate even before that but nothing is certain at this point.&rdquo;</p>



<p>Blocks are the new frontier of WordPress development. Investing in solid documentation and tutorials for beginners could have a major impact on expanding the block ecosystem. This also indirectly benefits users as they end up with a more diverse directory of blocks to choose from when customizing their WordPress sites.</p>



<p>Bossenger and Cap are currently working on a plan for the docs ahead of announcing their fundraiser. In the meantime, anyone who wants to contribute to improving the block creation documentation can jump in on the GitHub <a href="https://github.com/WordPress/gutenberg/issues/22151">discussion</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Jul 2020 21:07:15 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Sarah Gooding";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:47;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:76:"WPTavern: Decision Time: What Block Patterns Should Ship With WordPress 5.5?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101416";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:193:"https://wptavern.com/decision-time-what-block-patterns-should-ship-with-wordpress-5-5?utm_source=rss&utm_medium=rss&utm_campaign=decision-time-what-block-patterns-should-ship-with-wordpress-5-5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6095:"<img />Inserting the Numbered Features block pattern into the editor.



<p class="has-drop-cap">The first beta release of WordPress 5.5 is mere days away. This test release is expected to ship on July 7, and it carries with it a slew of new features that have primarily been developed between Gutenberg 7.6 and 8.5. One of the more pressing decisions the development team has to make is which block patterns to include in the final release.</p>



<p>For the uninitiated, block patterns are a predefined configuration of multiple blocks. They provide end-users a way to quickly insert more complex layout <em>patterns</em> into the editor. Instead of piecing together multiple blocks, nesting them within the proper group container, and getting everything perfect, the user merely searches the pattern library and selects the pattern they prefer. It is then inserted into the editor where the user can edit the content, such as altering the default text or changing the media.</p>



<p>It is an ingenious solution to an otherwise complicated problem. It also has the potential to move the block editor somewhat in the realm of actual page building.</p>



<p>For end-users, it could mean no longer spending hours learning how to recreate that pretty demo page that sold them on installing a specific theme. No more slogging through tutorials that feel like they were written for people with comp-sci degrees. Just click some buttons and watch the magic happen.</p>



<p>I have said that <a href="https://wptavern.com/block-patterns-will-change-everything">block patterns will change everything</a>. I was patiently enthusiastic about the API when it first landed in <a href="https://wptavern.com/gutenberg-6-9-introduces-image-titles-block-patterns-and-new-theme-features">Gutenberg 6.9</a>. I was downright giddy to play around with the first patterns that shipped with <a href="https://wptavern.com/gutenberg-7-7-ships-refreshed-ui-and-first-iteration-of-block-patterns">Gutenberg 7.7</a>.</p>



<p>Outside of a few that have made their way into Gutenberg in recent versions, I have not been particularly ecstatic about the default patterns the development team has included. In my mind, most were always test cases, patterns meant to iron the bugs out of the system. Then, some of the world-class designers we have in the WordPress ecosystem would design a handful of solid default patterns. I fully expect theme authors to push the limits of the system, but I was hoping that WordPress would use this opportunity to showcase what the block system can really do.</p>



<p>The closest that Gutenberg has come to shipping useful, modern block patterns have been its Testimonials, Numbered Features, and Features and Services patterns. These three were <a href="https://github.com/WordPress/gutenberg/pull/23608">initially set on the chopping block</a> (Testimonials have since been re-added), ready for the ax before WordPress 5.5 goes out to millions of users who could use such features instead of the tired and old solution of theme options. If these go, block patterns will likely land with a thud instead of the flash and bang the feature could make. We need to get users excited. We need to inspire the multitude of theme authors to build something greater &mdash; <em>hey, look what you can do with this feature</em>. Our development community needs to stand upon the shoulders of giants rather than feel like they are building from scratch.</p>



<p>We should not be afraid to be bold with the &ldquo;1.0&rdquo; of block patterns.</p>



<p>For the most part, with the latest patch on a ticket that is currently in flux, the team has nixed all but the least mundane patterns.</p>



<p>Block patterns are meant to represent common design layouts and configurations that we see around the web today. However, the current crop of patterns does not do justice to the idea. From the developer end of things, it is a powerful API. From the user side of things, it will feel like another half-baked plan to push in an unfinished feature before the deadline.</p>



<p>Maybe I am impatient. Maybe I need to get on board the ship-early-and-iterate-often train. But, the API has been in Gutenberg since November 2019. It is hard not to feel a little disappointed at the potential removal of the most opinionated patterns. They were the ones that I was eagerly awaiting to use. We can already easily put two images, columns of text, or buttons next to each other. The proposed patterns to ship with 5.5 do not feel like they will help users build the type of complex layouts the feature was meant to solve.</p>



<p>My rallying call, my plea to include some patterns with a little pizzazz in WordPress 5.5, might be cutting it close to the 11th hour. However, anyone eagerly awaiting this feature may have been as blindsided as I was yesterday when the pull request came down the pipeline to remove all but three basic patterns.</p>



<p>I want the narrator in the upcoming WordPress 5.5 release video to have a bit of pep in his voice instead of trying to give the hard sell on sticking two images next to each other.</p>



<p>I am not asking for complex pricing tables, a restaurant menu, or &mdash; <em>God, forbid</em> &mdash; a slider pattern. Those things are a bit more niche and not suitable for core. There is some middle ground we can meet, offering something of a bit more substance. And, if we cannot meet that middle ground, is the feature ready?</p>



<p>I&rsquo;m the last person to suggest pulling the feature from the release, so I won&rsquo;t venture down that dark path. I want block patterns. I want them now.</p>



<p>I do question whether we should ship such basic patterns with most users having to wait months for anything more useful. That&rsquo;s unless their theme authors are generous enough to push out some new patterns between the major release cycles.</p>



<p>I am just a WordPress user asking to be amazed. Whet our appetites for a future where block patterns are everything.</p>



<p>What patterns would you like to see ship with WordPress 5.5?</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Jul 2020 18:33:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:48;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:53:"WordPress.org blog: The Month in WordPress: June 2020";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:34:"https://wordpress.org/news/?p=8614";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"https://wordpress.org/news/2020/07/the-month-in-wordpress-june-2020/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:7862:"<p>June was an exciting month for WordPress! Major changes are coming to the Gutenberg plugin, and WordCamp Europe brought the WordPress community closer together. Read on to learn more and to get all the latest updates.&nbsp;</p>



<hr class="wp-block-separator" />



<h2>WordPress 5.4.2 released</h2>



<p>We said hello to WordPress 5.4.2 on June 10. This security and maintenance release features 17 fixes and 4 enhancements, so we recommend that you update your sites immediately. To download WordPress 5.4.2, visit your Dashboard, click on <strong>Updates</strong>, then <strong>Update Now</strong>, or download the latest version directly from WordPress.org. For more information, visit <a href="https://wordpress.org/news/2020/06/wordpress-5-4-2-security-and-maintenance-release/">this post</a>, review the <a href="https://core.trac.wordpress.org/query?status=closed&resolution=fixed&milestone=5.4.2&order=priority">full list of changes on Trac</a>, or check out the <a href="https://wordpress.org/support/wordpress-version/version-5-4-2/">HelpHub documentation page</a> for <a href="https://wordpress.org/support/wordpress-version/version-5-4-2/">version 5.4.2</a>. WordPress 5.4.2 is a short-cycle maintenance release. The next major release will be <a href="https://make.wordpress.org/core/5-5/">version 5.5</a>, <a href="https://wordpress.org/about/roadmap/">planned for August 2020</a>. <br /><br />Want to get involved in building WordPress Core? Follow<a href="https://make.wordpress.org/core/"> the Core team blog</a>, and join the #core channel in <a href="https://make.wordpress.org/chat/">the Making WordPress Slack group</a>.</p>



<h2>Gutenberg 8.3 and 8.4</h2>



<p>The core team launched Gutenberg <a href="https://make.wordpress.org/core/2020/06/11/whats-new-in-gutenberg-11-june/">8.3</a> and <a href="https://make.wordpress.org/core/2020/06/24/whats-new-in-gutenberg-24-june/">8.4</a> this month, paving the way for some exciting block editor features. Version 8.3 introduced enhancements like a reorganized, more intuitive set of block categories, a parent block selector, an experimental spacing control, and user-controlled link color options. Version 8.4 comes with new image-editing tools and the ability to edit options for multiple blocks.  The block directory search feature that was previously available as an experimental feature, is now enabled for all Gutenberg installations. For full details on the latest versions on these Gutenberg releases, visit these posts about <a href="https://make.wordpress.org/core/2020/06/11/whats-new-in-gutenberg-11-june/">8.3</a> and <a href="https://make.wordpress.org/core/2020/06/24/whats-new-in-gutenberg-24-june/">8.4</a>.</p>



<p>Want to get involved in building Gutenberg? Follow <a href="https://make.wordpress.org/core/">the Core team blog</a>, contribute to <a href="https://github.com/WordPress/gutenberg/">Gutenberg on GitHub</a>, and join the #core-editor channel in <a href="https://make.wordpress.org/chat/">the Making WordPress Slack group</a>.</p>



<h2>WordPress Bumps Minimum Recommended PHP Version to 7.2</h2>



<p>In a major update, WordPress <a href="https://meta.trac.wordpress.org/changeset/9959">has bumped</a> the minimum PHP recommendation to 7.2. The ServeHappy API has been updated to set the minimum acceptable PHP version to 7.2, while the WordPress downloads page recommends 7.3 or newer. Previously, the ServeHappy dashboard widget was showing the upgrade notice to users of PHP 5.6 or lower. This decision comes <a href="https://meta.trac.wordpress.org/ticket/5257">after discussions with the core Site Health team and the Hosting team</a>, both of which recommended that the upgrade notice be shown to users of PHP &lt;=7.1.</p>



<h2>WordCamp Europe 2020 Moved Online</h2>



<p>Following the success of a remote WordCamp Spain, <a href="https://2020.europe.wordcamp.org/">WordCamp Europe</a> was held fully online from June 4 to 6. The event drew a record 8,600 signups from people based in 138 countries, along with 2,500 signups for contributor day. WCEU Online also showcased 33 speakers and 40 sponsors, in addition to a Q&amp;A with Matt Mullenweg. You can find the videos of the event in WordPress.tv by <a href="https://wordpress.tv/event/wordcamp-europe-2020/">following this link</a>, or you can catch the<a href="https://www.youtube.com/channel/UCaYQGYDpXpU4A17kxN-AgJQ"> live stream recording of the entire event from the WP Europe YouTube Channel</a>.</p>



<p>Want to get involved with the Community team? <a href="https://make.wordpress.org/community/">Follow the Community blog here</a>, or join them in the #community-events channel in <a href="https://make.wordpress.org/chat/">the Making WordPress Slack group</a>. To organize a Meetup or WordCamp, <a href="https://make.wordpress.org/community/handbook/virtual-events/welcome/applying-for-a-virtual-event/">visit the handbook page</a>.&nbsp;</p>



<hr class="wp-block-separator" />



<h2>Further Reading:</h2>



<ul><li>Josepha Haden (<a href="https://profiles.wordpress.org/chanthaboune/" class="mention"><span class="mentions-prefix">@</span>chanthaboune</a>), the executive director of the WordPress project, <a href="https://wordpress.org/news/2020/06/equity-and-the-power-of-community/">published a post </a>that highlights resources on how the global WordPress community can focus on equity to help dismantle racial, societal, and systemic injustice.&nbsp;</li><li>PHP, the primary programming language in which WordPress is written, celebrated its <a href="https://wptavern.com/php-marks-25-years">25th anniversary</a> this month!</li><li>The Community team is<a href="https://make.wordpress.org/community/2020/06/18/pending-update-for-the-code-of-conduct/#comment-28294"> updating the WordCamp code of conduct</a> to address discrimination based on age, caste, social class, and other identifying characteristics.</li><li>The WordPress Core team is promoting more inclusive language by <a href="https://make.wordpress.org/core/2020/06/18/proposal-update-all-git-repositories-to-use-main-instead-of-master/">updating all git repositories to use `trunk` instead of `master`</a>. Additionally, the team proposes to <a href="https://make.wordpress.org/core/2020/06/24/proposal-rename-invalid-worksforme-and-wontfix-ticket-resolutions/">rename&nbsp; “invalid,” “worksforme,” and “wontfix” ticket resolutions </a>to “not-applicable,” “not-reproducible” or “cannot-reproduce,” and “not-implemented,” respectively.&nbsp;</li><li>The Documentation team is working on an external linking policy and has <a href="https://make.wordpress.org/docs/2020/06/15/external-linking-policy-trusted-sources/">started a discussion</a> on how to allow linking to trusted sources to benefit users.&nbsp;</li><li>The Core team has put up a proposal to <a href="https://make.wordpress.org/core/2020/06/10/merge-announcement-extensible-core-sitemaps/">merge extensible core sitemaps to WordPress core</a> in the 5.5 release. The feature is currently available as a <a href="https://wordpress.org/plugins/core-sitemaps/">feature plugin</a>.</li><li><a href="https://2020.denver.wordcamp.org/">WordCamp Denver</a> was held online May 26–27. The event sold over 2,400 tickets and featured 27 speakers and 20 sponsors. You can catch the recorded live stream on the <a href="https://2020.denver.wordcamp.org/watch-now/">event site</a>.</li><li>The Core team is working on <a href="https://make.wordpress.org/core/2020/06/29/updating-jquery-version-shipped-with-wordpress/">updating the version of jQuery</a> used in WordPress core.</li></ul>



<p><em>Have a story that we should include in the next “Month in WordPress” post? Please </em><a href="https://make.wordpress.org/community/month-in-wordpress-submissions/"><em>submit it here</em></a><em>.</em></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Jul 2020 05:52:46 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Hari Shanker R";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:49;a:6:{s:4:"data";s:13:"
	
	
	
	
	
	
";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"WPTavern: Build Static or Dynamic Blocks With the WP Block Builder Script";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:30:"https://wptavern.com/?p=101391";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:191:"https://wptavern.com/build-static-or-dynamic-blocks-with-the-wp-block-builder-script?utm_source=rss&utm_medium=rss&utm_campaign=build-static-or-dynamic-blocks-with-the-wp-block-builder-script";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:6728:"<p class="has-drop-cap">Today, Jeffrey Carandang released <a href="https://www.npmjs.com/package/wp-block-builder">WP Block Builder</a>, an npm script for developers to begin building WordPress blocks. It is just one of many such scripts in a sea of block scaffolding tools, but Carandang may just have the experience and clout to rise above the rest. Thus far, developers have downloaded his custom setup over 500 times.</p>



<p>Developers wanting to take a peek under the hood can also check out the <a href="https://github.com/phpbits/wp-block-builder">project on GitHub</a>.</p>



<p>It is almost impossible to dive into building blocks for WordPress without coming across some of Carandang&rsquo;s work in the WordPress block space. He <a href="https://wptavern.com/creator-of-editorskit-launches-community-block-sharing-site">launched the ShareABlock community</a> late last year. He has paved the way for other developers by experimenting with ideas in <a href="https://wptavern.com/block-options-plugin-rebrands-to-editorskit-expands-beyond-block-visibility-management">EditorsKit</a>. He co-founded CoBlocks, which <a href="https://wptavern.com/godaddy-acquires-themebeans-coblocks-block-gallery-and-block-unit-tests">GoDaddy acquired in 2019</a>. And, that&rsquo;s just the tip of the <a href="https://wptavern.com/new-iceberg-plugin-brings-a-distraction-free-writing-experience-to-wordpress">Iceberg</a> &mdash; <em>yeah, he is involved in that too</em>.</p>



<p>Now, he has decided to launch a block-building script in a field that is becoming increasingly crowded. Core WordPress <a href="https://www.npmjs.com/package/@wordpress/create-block">has its own script</a>. WebDevStudios recently <a href="https://wptavern.com/webdevstudios-releases-block-scaffolding-tool-for-developers">launched a custom fork</a> of that, and several others are floating around the WordPress ecosystem, each with slightly different takes on jump-starting the block-building process. However, when one of the experts in the world of WordPress blocks releases his own spin on getting developers set up, it is at least worth looking into.</p>



<p>&ldquo;I initially created this tool for myself because I kept repeating similar processes when creating Gutenberg blocks plugins,&rdquo; said Carandang. &ldquo;Then upon building it out, I thought it would be helpful to others if I release this to the public since, with minimal configuration, it would be easier to just focus on building blocks. Based on my experience, setting up the webpack config takes time and is sometimes frustrating.&rdquo;</p>



<p>Carandang has a plethora of experience in building blocks, so I am certain he has added all the small extras that help speed the development process along.</p>



<p>Unlike many similar scripts, WP Block Builder provides two example blocks by default. One is for handling the typical static content that is common with such scripts. However, the second is a dynamic, server-side block. This gives developers a taste of building two different block types with two sets of requirements to run. Other scripts also tend to be hyper-focused on launching a single-block plugin, which would be typical for releasing to the WordPress block directory. WP Block Builder provides a path to launching a plugin with multiple blocks if desired.</p>



<p>&ldquo;My goal is to make it easy for first-time block developers to create a block, but I&rsquo;ve also created a sample dynamic block for advanced users,&rdquo; said Carandang. &ldquo;This will provide a good playground for experimenting and familiarizing with each section of the block.&rdquo;</p>



<p>Carandang wants developers to be able to dive directly into building blocks. He wants to bring some of the fun back to experimenting without the technology getting in the way, which often means hours wasted just getting the build tools in place.</p>



<p>&ldquo;I&rsquo;m gearing towards that feeling I had when I first started creating a WordPress theme,&rdquo; he said. &ldquo;Those times when I was changing codes to know how they work and confident enough that I could just install it freshly again if I ended messing it up.&rdquo;</p>



<p>Carandang said he has not received any reported issues yet, so launch day is going off without a hitch. He is looking forward to seeing what blocks developers build in the future based on his setup.</p>



<p>&ldquo;It&rsquo;s aimed to be general enough to help developers to get started on creating block plugins immediately,&rdquo; he said. &ldquo;I&rsquo;m still waiting for some feedback to help improve the process, but so far it seems to be doing good.&rdquo;</p>



<h2>Setting Up a Block Plugin</h2>



<img />Dynamic block code from WP Block Builder.



<p class="has-drop-cap">WP Block Builder is a fork of the core WordPress Create Block script. It includes a few extra npm packages, but it is also heavy on installing several PHP packages via Composer. These are primarily for making sure developers are following coding standards.</p>



<p>Setup is simple. Developers merely need to run the <code>npx wp-block-builder</code> command to kick start the process. Upon running the command, WP Block Builder takes developers through a series of questions, which sets up the following fields:</p>



<ul><li>Block slug</li><li>Namespace</li><li>Block title</li><li>Description</li><li>Author name</li><li>Plugin license</li><li>Version number</li></ul>



<p>After installation, the plugin will have two blocks ready for experimentation. The first block is a basic container with text and background color settings. It also supports wide and full alignment. It works similarly to the core WordPress Group block. I prefer this starting point over the standard paragraph block.</p>



<p>The second block is a dynamic posts list. It offers enough complexity to see how dynamic blocks work while using a concept familiar enough for most WordPress developers to grasp:  querying and looping through posts. The block has a single custom option for changing the number of posts.</p>



<p>The goal for making these two blocks available is to get plugin developers jumping head first into the code. Break things. Experiment. Study the code.</p>



<p>Long term, Carandang is hopeful the process will become even better for developers. &ldquo;I&rsquo;m in touch with Grzegorz Zi&oacute;&#322;kowski and Fabian K&auml;gy from the Gutenberg team,&rdquo; he said,&rdquo; and they are creating a better way to support external npm packages directly with <code>@wordpress/create-block</code>. This would be helpful in both Block Builder and Gutenberg, and would help in improving the Gutenberg plugin development ecosystem.&rdquo;</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 01 Jul 2020 20:31:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Justin Tadlock";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";O:42:"Requests_Utility_CaseInsensitiveDictionary":1:{s:7:" * data";a:8:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Wed, 29 Jul 2020 07:49:57 GMT";s:12:"content-type";s:8:"text/xml";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Wed, 29 Jul 2020 07:30:07 GMT";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:4:"x-nc";s:9:"HIT ord 2";s:16:"content-encoding";s:4:"gzip";}}s:5:"build";s:14:"20200728033801";}}