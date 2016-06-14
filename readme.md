## Installation
via composer:

``` bash 
composer require rtmatt/privacy-policy
```

Add to configuration file (above route service provider)

``` php 
RTMatt\PrivacyPolicy\Providers\PrivacyPolicyServiceProvider::class
```



## Publish Config

``` bash 
php artisan vendor:publish --provider="RTMatt\PrivacyPolicy\Providers\PrivacyPolicyServiceProvider" --tag="config"
```

## Modal Usage
Include the modal and the link in the appropriate layout file (jQuery required, bootstrap will be included if it's not already)

``` blade
//Put this wherever it should show in the layout
@include('rtprivacypolicy::link')
//...
//Include this near the closing body tag
@include('rtprivacypolicy::modal')
```



## OVERRIDE VIEW
Make a file in 

```  
/resources/views/vendor/rtprivacypolicy/privacy-policy.blade.php
```

## Configuration

``` php 
 	'business_name'    => '[ENTER BUSINESS NAME HERE]', //business name for display in PP
    'contact_email'    => '[ENTER CONTACT EMAIL ADDRESS HERE]', //contact email for display in PP
    'contact_phone'    => '[ENTER PHONE NUMBER HERE]', // contact phone for display in PP
    'site_url'         => url('/'), //site url for display in PP
    'master_layout'    => 'rtprivacypolicy::blank', //Layout for the PP content to extend (when register route active)
    'section_name'     => 'content', // section name within master page for PP content
    'register_route'   => false, //resister route for PP to display on own page
    'link_text'        => 'Terms & Privacy' // the text to display in the modal link when included as a modal
```



