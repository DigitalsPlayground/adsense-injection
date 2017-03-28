# adsense-injection
A simple Wordpress plugins to insert Google AdSense after the X-th paragraph of your single content.

1. Download this simple script as > ads-in-content.php
2. Open in text processing like Notepad++, 
3. Find at line 19 " -Script Adsense Disini- "
4. Replace  -Script Adsense Disini- with your Google AdSense code.
5. Upload to your Wordpress root plugins folder. 
    It will look like ROOT DOMAIN > wp-content > plugins > ads-in-content.php
6. Activated from your Wordpress Dashboard Plugins.
7. DONE.
8. If it doesn't work, find at line 18; $afterParagraph = 2;
    Just simple replace numebring of paragraph 2 to another and compare at line 21, $insert_at = $matches[0][$afterParagraph][2];
