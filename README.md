# Tracking Visitors plugin
For security reasons the build-in editor doesn't allow the `onclick` HTML attribute. So you want to use the [Google Analytics Event Tracking](https://developers.google.com/analytics/devguides/collection/analyticsjs/events) service, this plugin helps to you. 

## Supported services
* Google Analytics: Event Tracking

## Setup the tracking
1. Add new events on the Back-end > Settings > Tracking Visitors page.
2. Insert the Google Analytics code to the head of website.
3. Add the Google event code component to the current layout or page.
4. Extend the links or buttons with the special attributes.

## Unique attributes
Name | Description
------------- | -------------
**data-google-event-name** | the name of event. It is required attribute.
**data-google-event-action** | the name of action. Default: the value of Action field in the current event.

## Example
Event name: _interest-contact_

HTML code: `<a href="{{ 'contact'|page }}" data-google-event-name="interest-contact">Contact</a>`

## Available languages
* en - English
* hu - Magyar

## Installation
1. Go to the __Settings > Updates & Plugins__ page in the Backend.
1. Click on the __Install plugins__ button.
1. Type the __Tracking Visitors__ text in the search field.
