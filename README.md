# Magento 2 Module for showing Landofcoder FAQs on the Hyvä category page including Schema markup

 
 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Attributes](#markdown-header-attributes)



Displays a FAQ accordian at the bottom of the Magento Category page from a linked FAQ category, including FAQ Schema (FAQPage, Question, Answer) structured data markup for SEO. Hyvä compatible.

Requires the Free FAQ module https://landofcoder.com/faq-extension-for-magento2.html

### Example

![FAQ Schema Example](https://www.develodesign.co.uk/images/faq-schema.png)


## Installation
\* = in production please use the option `--keep-generated` 


### Composer

 ```
 composer require develodesign/magento-2-module-categoryfaqextension
 bin/magento module:enable Develodesign_CategoryFaqExtension
 bin/magento setup:upgrade
 bin/magento cache:flush
```

### Zip file

 - Unzip the zip file in `app/code/Develodesign`
 - Enable the module by running `php bin/magento module:enable Develodesign_CategoryFaqExtension`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## Configuration
Edit your Magento categories and select which FAQ category should be used. 



## Attributes

 - Category - FAQ Category (faq_category)

