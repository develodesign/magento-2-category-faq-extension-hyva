# Magento 2 Module for showing Landofcoder FAQs on the Hyvä category page including Schema markup

   develodesign/magento-2-module-categoryfaqextension

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Shows Land of Coder FAQ's in the Magento Category page, link your Magento categories and FAQ categories and a FAQ accordian will be shown at the bottom of the Category page including FAQ Schema (FAQPage, Question, Answer) structured data markup.

Requires the Free FAQ module https://landofcoder.com/faq-extension-for-magento2.html

### Example

![FAQ Schema Example](https://www.develodesign.co.uk/images/faq-schema.png)


## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Develodesign`
 - Enable the module by running `php bin/magento module:enable Develodesign_CategoryFaqExtension`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Install the module composer by running `composer require develodesign/magento-2-module-categoryfaqextension`
 - enable the module by running `php bin/magento module:enable Develodesign_CategoryFaqExtension`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration
Edit your Magento categories and select which FAQ category should be used. 



## Attributes

 - Category - FAQ Category (faq_category)

