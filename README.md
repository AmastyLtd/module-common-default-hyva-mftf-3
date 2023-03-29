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

