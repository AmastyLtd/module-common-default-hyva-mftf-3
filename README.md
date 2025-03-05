# Common Default Hyva MFTF3

<h4>Specific module for basic compatibility MFTF with Hyva.<h4>
<h2>Installation</h2>
<h4>Pre-conditions</h4>

 1. Install MFTF: <a>https://developer.adobe.com/commerce/testing/functional-testing-framework/getting-started/ <br>
   We recommend that you turn off the Magento_TwoFactorAuth module for ease of testing or configure credentials: <a>https://developer.adobe.com/commerce/testing/functional-testing-framework/two-factor-authentication/</a>
 2. Install and enable Hyva for global level:
    1. Install Hyva Theme: <a> https://docs.hyva.io/hyva-themes/getting-started/index.html </a>
    2. Open “Content -> Design -> Configuration” in Admin Area Magento Store.
    3. Choose “Global” Design Configuration and set “Default Hyva” in “Applied Theme” dropdown.
    4. Click to “Save Configuration”.

<h4>Instruction</h4>
<p>To install the package, run the following commands:</p>
  <code>composer require amasty/module-common-default-hyva-mftf-3</code><br>
  <code>php bin/magento setup:upgrade</code><br>
  <code>php bin/magento setup:di:compile </code><br>
  <code>php bin/magento setup:static-content:deploy (your locale)</code><br>

<h4>To run tests it is necessary</h4>
Run a special command for correct operation of the waits when you are running any tests <br><br>
<code>bin/magento amasty-mftf:hyva:waiting-update</code><br>

<h2>Other Amasty extensions</h2>
-> <a href="https://amasty.com/landing-pages-for-magento-2.html" target="_blank">Landing Pages for Magento 2</a><br>
-> <a href="https://amasty.com/instagram-feed-for-magento-2.html" target="_blank">Instagram Feed for Magento 2</a><br>
-> <a href="https://amasty.com/infinite-scroll-for-magento-2.html" target="_blank">Infinite Scroll for Magento 2</a><br>
-> <a href="https://amasty.com/improved-sorting-for-magento-2.html" target="_blank">Improved Sorting for Magento 2</a><br>
-> <a href="https://amasty.com/improved-layered-navigation-for-magento-2.html" target="_blank">Improved Layered Navigation for Magento 2</a><br>
-> <a href="https://amasty.com/import-products-for-magento-2.html" target="_blank">Import Products for Magento 2</a><br>
-> <a href="https://amasty.com/import-orders-for-magento-2.html" target="_blank">Import Orders for Magento 2</a><br>
-> <a href="https://amasty.com/import-customers-for-magento-2.html" target="_blank">Import Customers for Magento 2</a><br>
-> <a href="https://amasty.com/import-and-export-for-magento-2.html" target="_blank">Import and Export for Magento 2</a><br>
-> <a href="https://amasty.com/hyva-theme-extensions-for-magento-2.html" target="_blank">Hyva Theme Extensions for Magento 2</a><br>
-> <a href="https://amasty.com/html-sitemap-for-magento-2.html" target="_blank">HTML Sitemap for Magento 2</a><br>
-> <a href="https://amasty.com/hide-price-for-magento-2.html" target="_blank">Hide Price for Magento 2</a><br>
-> <a href="https://amasty.com/grouped-options-for-magento-2.html" target="_blank">Grouped Options for Magento 2</a><br>
-> <a href="https://amasty.com/google-tag-manager-for-magento-2.html" target="_blank">Google Analytics 4 with GTM Support</a><br>
-> <a href="https://amasty.com/magento-google-rich-snippets.html" target="_blank">Google Rich Snippets</a><br>
-> <a href="https://amasty.com/magento-google-page-speed-optimizer.html" target="_blank">Google Page Speed Optimizer</a><br>
-> <a href="https://amasty.com/magento-google-captcha.html" target="_blank">Google Invisible reCaptcha</a><br>
-> <a href="https://amasty.com/magento-gift-card.html" target="_blank">Gift Card</a><br>
