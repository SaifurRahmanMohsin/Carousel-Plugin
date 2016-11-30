# [Carousel Plugin](https://github.com/SaifurRahmanMohsin/Carousel-Plugin) #
Bootstrap Carousel plugin for October CMS

[![development](https://img.shields.io/badge/state-Ready-red.svg)](https://img.shields.io/badge/state-Ready-red.svg)
[![dependencies](https://img.shields.io/badge/dependencies-Twitter%20Bootstrap-green.svg)](https://img.shields.io/badge/dependencies-Twitter%20Bootstrap-green.svg)
[![platform](https://img.shields.io/badge/platform-October%20CMS-orange.svg)](https://img.shields.io/badge/platform-October%20CMS-orange.svg)

## Installation ##

#### MarketPlace Installation ####
You can add the plugin to your project from [here](http://octobercms.com/plugin/mohsin-carousel) or search for **Mohsin.Carousel** from your octoberCMS project backend to install this plugin. Enjoy!!!

#### Manual Installation ####
Some advanced users might prefer to use manually install the plugin. This can be done using the command line. CD into your OctoberCMS project folder and paste these commands. It will execute one after another:
```
[ -f artisan ] && cd plugins
mkdir -p mohsin && cd $_
wget https://github.com/SaifurRahmanMohsin/Carousel-Plugin/archive/master.zip
[ -f master ] && unzip master || unzip master.zip && rm $_
mv Carousel-Plugin-master carousel && cd $_

```
Logout from your backend and login again. This will create the necessary tables for the plugin to work. You have now installed **Carousel**! Enjoy!!!

## Quick Start ##
After the plugin is installed choose `Carousel` in the Settings page under the CMS category and create a new carousel. Upload the photos which you would like to display on your web app. Now, in the CMS page add the component provided `Bootstrap Carousel` to your page by dragging it into the page and choose the desired carousel from the component properties.

## Thanks ##

[Alexey Bobkov and Samuel Georges](http://octobercms.com) for OctoberCMS.

[Bootstrap Core Team](http://getbootstrap.com/about/#team) for Bootstrap.
